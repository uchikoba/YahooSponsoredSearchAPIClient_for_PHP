<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

if (!class_exists('BalanceSelector')) {
class BalanceSelector {
    /**
     * @var int[]
     */
    public $accountIds;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'BalanceSelector';
    }

    /**
     * @param int[] $accountIds
     * @param Paging $paging
     */
    public function __construct($accountIds = NULL, $paging = NULL) {
        if (get_parent_class('BalanceSelector')) parent::__construct();
        $this->accountIds = $accountIds;
        $this->paging = $paging;
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

    private $_parameterMap = array(
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

    public function getParameterMap() {
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
        if (get_parent_class('Page')) parent::__construct();
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}}

if (!class_exists('ReturnValue')) {
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

if (!class_exists('BalancePage')) {
class BalancePage extends Page {
    /**
     * @var BalanceValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'BalancePage';
    }

    /**
     * @param BalanceValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('BalancePage')) parent::__construct();
        $this->values = $values;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}}

if (!class_exists('BalanceValues')) {
class BalanceValues extends ReturnValue {
    /**
     * @var Balance
     */
    public $balance;

    public function getXsiTypeName() {
        return 'BalanceValues';
    }

    /**
     * @param Balance $balance
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($balance = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('BalanceValues')) parent::__construct();
        $this->balance = $balance;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('Balance')) {
class Balance {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $balance;

    public function getXsiTypeName() {
        return 'Balance';
    }

    /**
     * @param int $accountId
     * @param int $balance
     */
    public function __construct($accountId = NULL, $balance = NULL) {
        if (get_parent_class('Balance')) parent::__construct();
        $this->accountId = $accountId;
        $this->balance = $balance;
    }
}}

if (!class_exists('Paging')) {
class Paging {
    /**
     * @var int
     */
    public $startIndex;

    /**
     * @var int
     */
    public $numberResults;

    public function getXsiTypeName() {
        return 'Paging';
    }

    /**
     * @param int $startIndex
     * @param int $numberResults
     */
    public function __construct($startIndex = NULL, $numberResults = NULL) {
        if (get_parent_class('Paging')) parent::__construct();
        $this->startIndex = $startIndex;
        $this->numberResults = $numberResults;
    }
}}

if (!class_exists('BalanceServiceGet')) {
class BalanceServiceGet {
    /**
     * @var BalanceSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'BalanceServiceGet';
    }

    /**
     * @param BalanceSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('BalanceServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('BalanceServiceGetResponse')) {
class BalanceServiceGetResponse {
    /**
     * @var BalancePage
     */
    public $rval;

    /**
     * @var Error
     */
    public $error;

    public function getXsiTypeName() {
        return 'BalanceServiceGetResponse';
    }

    /**
     * @param BalancePage $rval
     * @param Error $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('BalanceServiceGetResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('BalanceService')) {
class BalanceService extends SponsoredSearchClient {
    const SERVICE_NAME = 'BalanceService';

    public static $classmap = array(
        'BalanceSelector' => 'BalanceSelector',
        'BalancePage' => 'BalancePage',
        'BalanceValues' => 'BalanceValues',
        'Balance' => 'Balance',
        'Paging' => 'Paging',
        'ReturnValue' => 'ReturnValue',
        'Page' => 'Page',
        'get' => 'BalanceServiceGet',
        'getResponse' => 'BalanceServiceGetResponse',
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
     * @param BalanceSelector $selector
     */
    public function get($selector) {
        $arg = new BalanceServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}
