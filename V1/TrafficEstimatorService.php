<?php

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

if (!class_exists('EstimateRequest')) {
/**
 * 見積もりのリクエストを格納するコンテナ
 */
class EstimateRequest {
    /**
     * @var EstimateTarget
     */
    public $target;

    /**
     * @var EstimateKeyword
     */
    public $keyword;

    /**
     * @var long
     */
    public $bid;

    public function getXsiTypeName() {
        return 'EstimateRequest';
    }

    public function __construct($target = NULL, $keyword = NULL, $bid = NULL) {
        if(get_parent_class('EstimateRequest')) parent::__construct();
        $this->target = $target;
        $this->keyword = $keyword;
        $this->bid = $bid;
    }
}}

if(!class_exists('EstimateTarget')) {
/**
 * 見積もりのターゲット設定を格納するコンテナ
 */
class EstimateTarget {

    /**
     * 対象デバイス
     * @var string[] Enum: DESKTOP, WAP_MOBILE, HIGH_END_MOBILE
     */
    public $platform;

    /**
     * 広告配信ネットワーク
     * @var string[] Enum: YAHOO_SEARCH, ALL
     */
    public $network;

    /**
     * キャリア名
     * @var string[] Enum: DOCOMO, KDDI, SOFTBANK, ALL
     */
    public $mobileCarrier;

    /**
     * 配信対象の都道府県
     * @var string[]
     */
    public $province;

    public function getXsiTypeName() {
        return 'EstimateTarget';
    }

    /**
     * コンストラクタ
     * @param string $platform
     * @param string $network
     * @param string $mobileCarrier
     * @param string $province
     */
    public function __construct($platform = NULL, $network = NULL, $mobileCarrier = NULL, $province = NULL) {
        if(get_parent_class('EstimateTarget')) parent::__construct();
        $this->platform = $platform;
        $this->network = $network;
        $this->mobileCarrier = $mobileCarrier;
        $this->province = $province;
    }

}}

if(!class_exists('EstimateKeyword')) {
/**
 * 見積もりのリクエストを格納するコンテナ
 */
class EstimateKeyword {
    /**
     * クライテリアの型
     * @var string[] Enum: KEYWORD
     */
    public $type;

    /**
     * キーワード
     * @var string
     */
    public $text;

    /**
     * 検索クエリのマッチタイプ
     * @var string[] Enum: EXACT, PHRASE, BROAD
     */
    public $matchType;

    public function getXsiTypeName() {
        return 'EstimateKeyword';
    }

    /**
     * コンストラクタ
     * @param string $type
     * @param string $text
     * @param string $matchType
     */
    public function __construct($type = NULL, $text = NULL, $matchType = NULL) {
        if(get_parent_class('EstimateKeyword')) parent::__construct();
        $this->type = $type;
        $this->text = $text;
        $this->matchType = $matchType;
    }

}}

if (!class_exists('Page')) {
class Page {
    /**
     * @var int
     */
    public $totalNumEntries;

    /**
     * @var string
     */
    public $PageType;

    private $_parameterMap = array (
        'Page.Type' => 'PageType',
    );

    public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

    public function __get($var) {
        if (!array_key_exists($var, $this->_parameterMap)) {
            return NULL;
        } else {
            return $this->{$this->_parameterMap[$var]};
        }
    }

    protected function getParameterMap() {
        return $this->_parameterMap;
    }

    public function getXsiTypeName() {
        return 'Page';
    }

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($totalNumEntries = NULL, $PageType = NULL) {
        if(get_parent_class('Page')) parent::__construct();
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}}

if(!class_exists('TrafficEstimatorPage')) {
class TrafficEstimatorPage extends Page {
    /**
     * 見積もり結果のコンテナ
     * @var EstimateValues[]
     */
    //public $campaignEstimates;
    //public $campaignEstimates;
    public $values;

    public function getXsiTypeName() {
        return 'TrafficEstimatorPage';
    }

    /**
     * コンストラクタ
     * @param int $campaignEstimates
     * @param string $totalNumEntries
     * @param EstimateValues $PageType
     */
    //public function __construct($campaignEstimates = NULL, $totalNumEntries = NULL, $PageType = NULL) {
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if(get_parent_class('TrafficEstimatorPage')) parent::__construct();
        //$this->campaignEstimates = $campaignEstimates;
        $this->values = $values;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }

}}

if(!class_exists('EstimateValues')) {
class EstimateValues {

    /**
     * 見積もりの結果
     * @var EstimateResult
     */
    //public $estimateResult;
    public $data;

    public function getXsiTypeName() {
        return 'EstimateValues';
    }

    /**
     * コンストラクタ
     * @param EstimateResult $estimateResult
     */
    public function __construct($estimateResult) {
        if(get_parent_class('EstimateValues')) parent::__construct();
        $this->estimateResult = $estimateResult;
    }
}}

if(!class_exists('EstimateResult')) {
class EstimateResult {

    /**
     * キーワード
     * @var string
     */
    public $keyword;

    /**
     * マッチタイプ
     * @var string[] Enum: EXACT, PHRASE, BROAD
     */
    public $matchType;

    /**
     * 配信デバイス
     * @var string[] Enum: DESKTOP, WAP_MOBILE, HIGH_END_MOBILE
     */
    public $device;

    /**
     * 配信キャリア
     * @var string[] Enum: DOCOMO, KDDI, SOFTBANK, ALL
     */
    public $carrier;

    /**
     * 入札単価
     * @var long
     */
    public $bid;

    /**
     * 予測インプレッション数
     * @var long
     */
    public $impressions;

    /**
     * 予測クリック数
     * @var long
     */
    public $clicks;

    /**
     * 予測掲載順位
     * @var long
     */
    public $rank;

    /**
     * 予測CPC
     * @var long
     */
    public $cpc;

    public function getXsiTypeName() {
        return 'EstimateResult';
    }

    /**
     * コンストラクタ
     * @param string $keyword
     * @param string $matchType
     * @param string $device
     * @param string $carrier
     * @param long $bid
     * @param long $impressions
     * @param long $clicks
     * @param long $rank
     * @param long $cpc
     */
    public function __construct($keyword = NULL,
                                $matchType = NULL,
                                $device = NULL,
                                $carrier = NULL,
                                $bid = NULL,
                                $impressions = NULL,
                                $clicks = NULL,
                                $rank = NULL,
                                $cpc = NULL) {
        if(get_parent_class('EstimateResult')) parent::__construct();
        $this->keyword = $keyword;
        $this->matchType = $matchType;
        $this->device = $device;
        $this->carrier = $carrier;
        $this->bid = $bid;
        $this->impressions = $impressions;
        $this->clicks = $clicks;
        $this->rank = $rank;
        $this->cpc = $cpc;

    }
}}

if(!class_exists('TrafficEstimatorSelector')) {
/**
 * 見積もりのリクエストを格納するコンテナ
 */
class TrafficEstimatorSelector {

    /**
     * 見積もりのリクエストのコンテナ
     * @var EstimateRequest[]
     */
    public $estimateRequest;

    public function getXsiTypeName() {
        return 'TrafficEstimatorSelector';
    }

    /**
     * コンストラクタ
     * @param EstimateRequest $estimateRequest
     */
    public function __construct($estimateRequest = NULL) {
        if(get_parent_class('TrafficEstimatorSelector')) parent::__construct();
        $this->estimateRequest = $estimateRequest;
    }

}}


if (!class_exists('TrafficEstimatorServiceGet')) {
/**
 * 広告に関する情報を取得します
 */
class TrafficEstimatorServiceGet {
    /**
     * @var TrafficEstimatorSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'TrafficEstimatorServiceGet';
    }

    /**
     * コンストラクタ
     * @param TrafficEstimatorSelector $selector
     */
    public function __construct($selector = NULL) {
        if(get_parent_class('TrafficEstimatorServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('TrafficEstimatorServiceGetResponse')) {
/**
 *
 */
class TrafficEstimatorServiceGetResponse {
    /**
     * @var TrafficEstimatorPage
     */
    public $rval;

    public function getXsiTypeName() {
        return 'TrafficEstimatorServiceGetResponse';
    }

    /**
     * コンストラクタ
     * @param TrafficEstimatorPage $rval
     */
    public function __construct($rval = NULL) {
        if(get_parent_class('TrafficEstimatorServiceGetResponse')) parent::__construct();
        $this->rval = $rval;
    }
}}


/**
 * Yahoo!スポンサードサーチAPI TargetingIdeaService SOAPクライアント
 *
 * @package     YahooSponsoredSearch
 * @subpackage  V1
 * @copyright   2011, GMO NIKKO Inc. All Rights Reserved.
 * @author      Nobuhiko Yuasa <n-Yuasa@koukoku.jp>
 */
if(!class_exists('TrafficEstimatorService')) {
class TrafficEstimatorService extends SponsoredSearchClient {

    /**
     * @var string
     */
    const SERVICE_NAME = 'TrafficEstimatorService';

    /**
     * @var array
     */
    public static $classmap = array(
        'EstimateRequest' => 'EstimateRequest',
        'EstimateTarget' => 'EstimateTarget',
        'EstimateKeyword' => 'EstimateKeyword',
        'Page' => 'Page',
        'TrafficEstimatorPage' => 'TrafficEstimatorPage',
        'EstimateValues' => 'EstimateValues',
        'EstimateResult' => 'EstimateResult',
        'TrafficEstimatorSelector' => 'TrafficEstimatorSelector',
        'get' => 'TrafficEstimatorServiceGet',
        'getResponse' => 'TrafficEstimatorServiceGetResponse'
    );

    /**
     *
     * コンストラクタ
     * @param unknown_type $version
     * @param unknown_type $authenticationIniFile
     * @param unknown_type $licenseKey
     * @param unknown_type $apiAccountID
     * @param unknown_type $apiAccountPassword
     * @param unknown_type $accountID
     * @param unknown_type $username
     * @param unknown_type $password
     */
    public function __construct($version = NULL,
        $authenticationIniFile = NULL,
        $licenseKey = NULL, $apiAccountID = NULL, $apiAccountPassword = NULL,
        $accountID = NULL, $username = NULL, $password = NULL) {

        parent::__construct(self::SERVICE_NAME, $version, self::$classmap,
            $authenticationIniFile,
            $licenseKey, $apiAccountID, $apiAccountPassword,
            $accountID, $username, $password);

    }

    /**
     * @param TrafficEstimatorSelector $selector
     */
    public function get($selector) {
        $arg = new TrafficEstimatorServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        }catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}
