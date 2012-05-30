<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once 'YAML/spyc.php';

/**
 * アカウント別エンドポイントコロケーションの情報を保持します。
 *
 * @package     YahooAPIClients
 * @subpackage  SponsoredSearch
 * @copyright   2011, GMO NIKKO Inc. All Rights Reserved.
 * @author      Mitsugi Uchikoba <m-uchikoba@koukoku.jp>
 */
class CachedEndpointLocation {
    /** アカウントID */
    public $accountID;

    /** エンドポイントロケーション */
    public $endpointLocation;

    /**
     * コンストラクタ
     *
     * @param string $accountID アカウントID
     * @param string $endpointLocation エンドポイントロケーション
     */
    public function __construct($accountID, $endpointLocation) {
        $this->accountID = $accountID;
        $this->endpointLocation = $endpointLocation;
    }
}

/**
 * エンドポイントURL格納ファイルへの参照を提供するDAO
 *
 * @package     YahooAPIClients
 * @subpackage  SponsoredSearch
 * @copyright   2011, GMO NIKKO Inc. All Rights Reserved.
 * @author      Mitsugi Uchikoba <m-uchikoba@koukoku.jp>
 */
class CachedEndpointLocationsDAO {
    /** キャッシュファイルのデフォルトファイル名 */
    const DEFAULT_CACHED_LOCATIONS_FILE = 'cachedlocations.yaml';

    /** キャッシュ済みエンドポイントロケーションの配列 */
    private $cachedLocations = NULL;

    /** キャッシュファイルのパス */
    private $cachedLocationsFile = '';

    /**
     * コンストラクタ
     *
     * @param string $cachedLocationsFile キャッシュファイルのパス
     */
    public function __construct($cachedLocationsFile = NULL) {
        if (empty($cachedLocationsFile)) {
            $cachedLocationsFile = dirname(__FILE__) . '/'
                                 . self::DEFAULT_CACHED_LOCATIONS_FILE;
        }
        $this->cachedLocationsFile = $cachedLocationsFile;

        $this->cachedLocations = Spyc::YAMLLoad($this->cachedLocationsFile);
    }

    /**
     * アカウントIDと一致するエンドポイントロケーションを検索します。
     *
     * @param string $accountID アカウントID
     */
    public function retrieveByAccountID($accountID) {
        $endpointLocation = array_key_exists($accountID, $this->cachedLocations) ?
                            $this->cachedLocations["$accountID"] : NULL;
        if ($endpointLocation) {
            return new CachedEndpointLocation($accountID, $endpointLocation);
        }
        return NULL;
    }

    /**
     * アカウントIDとエンドポイントロケーションを保存します。
     */
    public function insertRow(CachedEndpointLocation $row) {
        $this->cachedLocations[(string)$row->accountID] = $row->endpointLocation;

        try {
            $fp = fopen($this->cachedLocationsFile, 'w');
            fwrite($fp, Spyc::YAMLDump($this->cachedLocations));
            fclose($fp);
        } catch (Exception $e) {
        }
    }
}
