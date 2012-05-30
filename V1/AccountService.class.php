<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

if (!class_exists('AccountSelector')) {
class AccountSelector {
    /**
     * @var int[]
     */
    public $accountIds;

    /**
     * @var string[] Enum: PREPAY, INVOICE
     */
    public $accountTypes;

    /**
     * @var string[] Enum: INPROGRESS, PENDING, WAIT_DECIDE, SUSPENDED, SERVING, ENDED
     */
    public $accountStatuses;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'AccountSelector';
    }

    /**
     * @param int[] $accountIds
     * @param int[] $accountTypes
     * @param string[] $accountStatuses
     * @param Paging $paging
     */
    public function __construct($accountIds = NULL, $accountTypes = NULL, $accountStatuses = NULL, $paging = NULL) {
        if (get_parent_class('AccountStatus')) parent::__construct();
        $this->accountIds = $accountIds;
        $this->accountTypes = $accountTypes;
        $this->accountStatuses = $accountStatuses;
        $this->paging = $paging;
    }
}}

if (!class_exists("Page")) {
/**
 * getメソッドの結果を含みます
 *
 * @package     YahooSponsoredSearch
 * @subpackage  V1
 * @copyright   2011, GMO NIKKO Inc. All Rights Reserved.
 * @author      Mitsugi Uchikoba <m-uchikoba@koukoku.jp>
 */
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

if (!class_exists("AccountPage")) {
class AccountPage extends Page {
    /**
     * @var AccountValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'AccountPage';
    }

    /**
     * @param AccountValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('AccountPage')) parent::__construct();
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
        $this->values = $values;
    }
}}

if (!class_exists("ReturnValue")) {
class ReturnValue {
    /**
     * @var boolean
     */
    public $operationSucceeded;

    /**
     * @var Error
     */
    public $error;

    public function getXsiTypeName() {
        return 'ReturnValue';
    }

    /**
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('ReturnValue')) parent::__construct();
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('AccountValues')) {
class AccountValues extends ReturnValue {
    /**
     * @var Account
     */
    public $account;

    public function getXsiTypeName() {
        return 'AccountValues';
    }

    /**
     * @param Account
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($account = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('AccountValues')) parent::__construct();
        $this->account = $account;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('Account')) {
class Account {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string Enum: PREPAY, INVOICE
     */
    public $accountType;

    /**
     * @var string Enum: INPROGRESS, PENDING, WAIT_DECIDE, SUSPENDED, SERVING, ENDED
     */
    public $accountStatus;

    /**
     * @var string Enum: ACTIVE, PAUSED
     */
    public $deliveryStatus;

    /**
     * @var AccountBudget
     */
    public $budget;

    public function getXsiTypeName() {
        return 'Account';
    }

    /**
     * @param int $accountId
     * @param string $accountName
     * @param string $accountType
     * @param string $accountStatus
     * @param string $deliveryStatus
     * @param AccountBudget $budget
     */
    public function __construct($accountId = NULL, $accountName = NULL, $accountType = NULL, $accountStatus = NULL, $deliveryStatus = NULL, $budget = NULL) {
        if (get_parent_class('Account')) parent::__construct();
        $this->accountId = $accountId;
        $this->accountName = $accountName;
        $this->accountType = $accountType;
        $this->accountStatus = $accountStatus;
        $this->deliveryStatus = $deliveryStatus;
        $this->budget = $budget;
    }
}}

if (!class_exists('AccountServiceGet')) {
class AccountServiceGet {
    /**
     * @var AccountSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'AccountServiceGet';
    }

    /**
     * @param AccountSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('AccountServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('AccountServiceGetResponse')) {
class AccountServiceGetResponse {
    /**
     * @var AccountPage
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'AccountServiceGetResponse';
    }

    /**
     * @param AccountPage $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('AccountServiceGetResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

/**
 * Yahoo!スポンサードサーチAPI AccountService SOAPクライアント
 *
 * @package     YahooSponsoredSearch
 * @subpackage  V1
 * @copyright   2011, GMO NIKKO Inc. All Rights Reserved.
 * @author      Mitsugi Uchikoba <m-uchikoba@koukoku.jp>
 */
class AccountService extends SponsoredSearchClient {
    const SERVICE_NAME = 'AccountService';

    public static $classmap = array(
        "Page" => "Page",
        "AccountPage" => "AccountPage",
        "ReturnValue" => "ReturnValue",
        "AccountValues" => "AccountValues",
        "Account" => "Account",
        "AccountSelector" => "AccountSelector",
        "get" => "AccountServiceGet",
        "getResponse" => "AccountServiceGetResponse",
    );

    public function __construct($version = NULL,
        $authenticationIniFile = NULL,
        $licenseKey = NULL, $apiAccountID = NULL, $apiAccountPassword = NULL,
        $accountID = NULL, $username = NULL, $password = NULL
    ) {
        parent::__construct(self::SERVICE_NAME, $version, self::$classmap,
            $authenticationIniFile,
            $licenseKey, $apiAccountID, $apiAccountPassword,
            $accountID, $username, $password);
    }

    /**
     * @param AccountSelector $selector
     */
    public function get($selector) {
        $arg = new AccountServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}
