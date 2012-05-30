<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once 'Log4PHP.php';
require_once dirname(__FILE__) . '/CachedEndpointLocationsDAO.class.php';

if (!class_exists('Error')) {
class Error {
    public $code;

    public $message;

    public $detail;

    public function getXsiTypeName() {
        return 'Error';
    }

    public function __construct($code = NULL, $message = NULL, $detail = NULL) {
        if (get_parent_class('Error')) parent::__construct();
        $this->code = $code;
        $this->message = $message;
        $this->detail = $detail;
    }
}}

if (!class_exists('ErrorDetail')) {
class ErrorDetail {
    public $requestKey;

    public $requestValue;

    public function getXsiTypeName() {
        return 'ErrorDetail';
    }

    public function __construct($requestKey = NULL, $requestValue = NULL) {
        if (get_parent_class('ErrorDetail')) parent::__construct();
        $this->requestKey = $requestKey;
        $this->requestValue = $requestValue;
    }
}}

/**
 * Yahoo! スポンサードサーチ API用SOAPリクエスト機能を提供します。
 *
 * @package     YahooSponsoredSearch
 * @subpackage  V1
 * @copyright   2011, GMO NIKKO Inc. All Rights Reserved.
 * @author      Mitsugi Uchikoba <m-uchikoba@koukoku.jp>
 */
abstract class SponsoredSearchClient {
    /** SOAPアクセスに用いるプロトコル */
    const ACCESS_HTTP_PROTOCOL = 'https';

    /** LocationServiceのエンドポイントURL */
    const LOCATION_SERVICE_ENDPOINT = 'ss.yahooapis.jp';
    //const LOCATION_SERVICE_ENDPOINT = 'sandbox.ss.yahooapis.jp';

    /** スポンサードサーチAPIのバージョン */
    const DEFAULT_VERSION = 'V1';

    /** SOAPヘッダー用の名前空間 */
    const SOAP_NAMESPACE = 'http://ss.yahooapis.jp/V1';

    /** スポンサードサーチAPIのバージョン */
    private $apiVersion = '';

    /** 代理店ユーザー名 */
    private $apiAccountID = '';

    /** 代理店パスワード */
    private $apiAccountPassword = '';

    private $accountID = '';

    /** 代理店ライセンスキー */
    private $licenseKey = '';

    /** アカウントのユーザー名 */
    private $username = '';

    /** アカウントのパスワード */
    private $password = '';

    /** SOAPヘッダー */
    private $header = array();

    /** SOAPクライアントオブジェクト */
    private $client = NULL;

    /**
     * コンストラクタ
     *
     * @param string $serviceName サービス名
     * @param string $version APIバージョン
     * @param string[] $classmap クラスマップ
     * @param string $authenticationIniFile 認証情報を持ったiniファイルのパス
     * @param string $licenseKey APIライセンスキー
     * @param string $apiAccountID 代理店認証用APIアカウントID
     * @param string $apiAccountPassword 代理店認証用APIアカウントパスワード
     * @param string $accountID アカウントID
     * @param string $username ツール認証用APIアカウントID
     * @param string $password ツール認証用APIアカウントパスワード
     */
    protected function __construct($serviceName, $version = NULL, $classmap = NULL,
        $authenticationIniFile = NULL,
        $licenseKey = NULL, $apiAccountID = NULL, $apiAccountPassword = NULL,
        $accountID = NULL, $username = NULL, $password = NULL
    ) {
        if (isset($authenticationIniFile)) {
            $authenticationIni =
                parse_ini_file(realpath($authenticationIniFile), TRUE);
        } else {
            $authenticationIni =
                parse_ini_file(dirname(__FILE__) . '/../auth.ini', TRUE);
        }

        if (!isset($version)) {
            $version = self::DEFAULT_VERSION;
        }
        $this->apiVersion         = $version;
        $this->licenseKey         = $this->getAuthVarValue($licenseKey        , 'licenseKey'        , $authenticationIni);
        $this->apiAccountID       = $this->getAuthVarValue($apiAccountID      , 'apiAccountId'      , $authenticationIni);
        $this->apiAccountPassword = $this->getAuthVarValue($apiAccountPassword, 'apiAccountPassword', $authenticationIni);
        $this->accountID          = $this->getAuthVarValue($accountID         , 'accountId'         , $authenticationIni);
        $this->username           = $this->getAuthVarValue($username          , 'username'          , $authenticationIni);
        $this->password           = $this->getAuthVarValue($password          , 'password'          , $authenticationIni);

        $classmap['Error'] = 'Error';
        $classmap['ErrorDetail'] = 'ErrorDetail';
        $this->createClient($serviceName, $classmap);
        //$this->client->__setSoapHeaders($this->header);
    }

    /**
     * 指定されたサービス名のSOAPクライアントオブジェクトを生成します。
     *
     * @param string $serviceName サービス名
     * @param string $accountID アカウントID
     * @param boolean $useLocationService [省略可能]LocationServiceのSOAPクライアント生成時のみ、FALSE を指定する。
     */
    private function createClient($serviceName, $classmap, $useLocationService = TRUE) {
        if ($useLocationService) {
            $wsdlEndpoint = self::ACCESS_HTTP_PROTOCOL . '://'
                          . implode('/',
                                    array(
                                        self::LOCATION_SERVICE_ENDPOINT,
                                        'services',
                                        $this->apiVersion,
                                        $serviceName,
                                    ));
            $colocation = self::ACCESS_HTTP_PROTOCOL . '://'
                        . implode('/',
                                  array(
                                      $this->getEndpointFromLocationService(),
                                      'services',
                                      $this->apiVersion,
                                      $serviceName,
                                 ));
            $params = array(
                'trace'              => TRUE,
                'exception'          => TRUE,
                'connection_timeout' => 20,
                'encoding'           => 'utf-8',
                'location'           => $colocation,
            );

            if (!empty($classmap)) {
                $params['classmap'] = $classmap;
            }

            $this->client = new SoapClient($wsdlEndpoint . '?wsdl', $params);
        } else {
            $wsdlEndpoint = self::ACCESS_HTTP_PROTOCOL . '://'
                          . self::LOCATION_SERVICE_ENDPOINT
                          . '/services/' . $serviceName;

            $params = array(
                'trace'              => TRUE,
                'exception'          => TRUE,
                'connection_timeout' => 20,
                'encoding'           => 'utf-8',
                'location'           => $wsdlEndpoint,
            );

            if (!empty($classmap)) {
                $params['classmap'] = $classmap;
            }

            $this->client = new SoapClient($wsdlEndpoint . '?wsdl', $params);
        }

        //print "{$wsdlEndpoint} Client created.<br />\n";
    }

    /**
     * 認証設定ファイルの情報をロードします
     *
     * @param unknown_type $authVar
     * @param unknown_type $authVarName
     * @param array $authIni
     */
    protected static function getAuthVarValue($authVar, $authVarName, array $authIni) {
        if (isset($authVar)) {
            return $authVar;
        } else {
            if (array_key_exists($authVarName, $authIni)) {
                return $authIni[$authVarName];
            } else {
                return NULL;
            }
        }
    }

    /**
     * LocationServiceを利用してアカウントと紐付くエンドポイントURLを取得します。
     *
     * @param string $accountID アカウントID
     */
    private function getEndpointFromLocationService() {
        $dao = new CachedEndpointLocationsDAO();
        $row = $dao->retrieveByAccountID($this->accountID);
        if ($row) {
            $endpointLocation = $row->endpointLocation;
        } else {
            $this->createClient($this->apiVersion . '/LocationService', NULL, FALSE);
            if ($this->client) {
                try {
                    $response = $this->soapCall('get', array('accountId' => $this->accountID));

                    if ($response) {
                        $endpointLocation = $response->rval->value;

                        $cachedEndpointLocation = new CachedEndpointLocation($this->accountID, $endpointLocation);
                        $dao->insertRow($cachedEndpointLocation);
                    }
                } catch(Exception $e) {
//                    print "LocationService LastRequest:<pre>";
//                    print htmlspecialchars($this->client->__getLastRequest());
//                    print "</pre>";
//                    print "LocationService LastResponse:<pre>";
//                    print htmlspecialchars($this->client->__getLastResponse());
//                    print "</pre>";
                    error_log('getEndpointFromLocationService failed.');
                    error_log($this->client->__getLastRequest());
                    error_log($this->client->__getLastResponse());
                }
            }
        }
        return $endpointLocation;
    }

    /**
     * SOAPヘッダを生成します。
     */
    private function getHeader() {
        $soapHeaderValue = new stdClass();
        $soapHeaderValue->license            = $this->licenseKey;
        $soapHeaderValue->apiAccountId       = $this->apiAccountID;
        $soapHeaderValue->apiAccountPassword = $this->apiAccountPassword;
        if (!empty($this->username) && !empty($this->accountID)) {
            $soapHeaderValue->accountId          = $this->accountID;
        }
        if (!empty($this->username)) {
            $soapHeaderValue->onBehalfOfAccountId = $this->username;
        }
        if (!empty($this->password)) {
            $soapHeaderValue->onBehalfOfPassword  = $this->password;
        }

        $soapRequestHeader = new SoapVar($soapHeaderValue, SOAP_ENC_OBJECT, 'RequestHeader', self::SOAP_NAMESPACE);
        $soapHeader = new SoapHeader(self::SOAP_NAMESPACE, 'RequestHeader', $soapRequestHeader, FALSE);
        return $soapHeader;
    }

    /**
     * SOAPリクエストを発行します。
     *
     * @param unknown_type $operation
     * @param unknown_type $params
     */
    protected function soapCall($operation, $params = NULL) {
        try {
            if (!empty($params)) {
                $result = $this->client->__soapCall(
                    $operation, array($params), NULL, self::getHeader(), $outputHeaders);
            } else {
                $result = $this->client->__soapCall(
                    $operation, array()       , NULL, self::getHeader(), $outputHeaders);
            }
        } catch (Exception $e) {
//            print('<pre>');
//            print('lastRequest: ');var_dump(htmlspecialchars($this->client->__getLastRequest()));
//            print('lastResponse: ');var_dump(htmlspecialchars($this->client->__getLastResponse()));
//            var_dump($this->client);
//            var_dump($e);
//            print('</pre>');
            error_log('soapCall failed.');
            error_log($this->client->__getLastRequest());
            error_log($this->client->__getLastResponse());
            LoggerManager::getRootLogger()->warn($this->client->__getLastRequest());
            LoggerManager::getRootLogger()->warn($this->client->__getLastResponse());
            throw $e;
        }

        if (isset($result)) {
            if (is_soap_fault($result)) {
                error_log("Soap Fault: [{$result->faultcode}] {$result->faultstring}");
            } else {
                return $result;
            }
        } else {
            return NULL;
        }
    }

    /**
     * 直近の SOAP リクエストで送信された XML を返します。
     * @return 直近の SOAP リクエストを XML 文字列で返します。
     */
    public function getLastRequest() {
        return $this->client->__getLastRequest();
    }

    /**
     * 直近の SOAP レスポンスで受信した XML を返します。
     * @return 直近の SOAP レスポンスを XML 文字列で返します。
     */
    public function getLastResponse() {
        return $this->client->__getLastResponse();
    }

    /**
     * ツール認証用のAPIライセンスキーを取得します。
     *
     * @param string $authenticationIniFile 認証情報を持ったiniファイルのパス
     * @return ツール認証用のAPIライセンスキー
     */
    public static function getApplicationLicenseKey($authenticationIniFile = NULL) {
        if (isset($authenticationIniFile)) {
            $authenticationIni =
                parse_ini_file(realpath($authenticationIniFile), TRUE);
        } else {
            $authenticationIni =
                parse_ini_file(dirname(__FILE__) . '/../auth.ini', TRUE);
        }

        return self::getAuthVarValue(NULL, 'applicationLicenseKey', $authenticationIni);
    }

    /**
     * ツール認証用のAPIアカウントIDを取得します。
     *
     * @param string $authenticationIniFile 認証情報を持ったiniファイルのパス
     * @return ツール認証用のAPIアカウントID
     */
    public static function getApplicationApiAccountId($authenticationIniFile = NULL) {
        if (isset($authenticationIniFile)) {
            $authenticationIni =
                parse_ini_file(realpath($authenticationIniFile), TRUE);
        } else {
            $authenticationIni =
                parse_ini_file(dirname(__FILE__) . '/../auth.ini', TRUE);
        }

        return self::getAuthVarValue(NULL, 'applicationApiAccountId', $authenticationIni);
    }

    /**
     * ツール認証用のAPIアカウントパスワードを取得します。
     *
     * @param string $authenticationIniFile 認証情報を持ったiniファイルのパス
     * @return ツール認証用のAPIアカウントパスワード
     */
    public static function getApplicationApiAccountPassword($authenticationIniFile = NULL) {
        if (isset($authenticationIniFile)) {
            $authenticationIni =
                parse_ini_file(realpath($authenticationIniFile), TRUE);
        } else {
            $authenticationIni =
                parse_ini_file(dirname(__FILE__) . '/../auth.ini', TRUE);
        }

        return self::getAuthVarValue(NULL, 'applicationApiAccountPassword', $authenticationIni);
    }
}
