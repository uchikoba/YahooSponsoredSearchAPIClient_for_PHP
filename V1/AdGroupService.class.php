<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

if (!class_exists('AdGroupSelector')) {
class AdGroupSelector {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int[]
     */
    public $campaignIds;

    /**
     * @var int[]
     */
    public $adGroupIds;

    /**
     * @var string[] Enum: ACTIVE, PAUSED
     */
    public $userStatuses;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'AdGroupSelector';
    }

    /**
     * @param int $accountId
     * @param int[] $campaignIds
     * @param int[] $adGroupIds
     * @param status[] $userStatuses
     * @param Paging $paging
     */
    public function __construct($accountId = NULL, $campaignIds = NULL, $adGroupIds = NULL, $userStatuses = NULL, $paging = NULL) {
        if (get_parent_class('AdGroupSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignIds = $campaignIds;
        $this->adGroupIds = $adGroupIds;
        $this->userStatuses = $userStatuses;
        $this->paging = $paging;
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

if (!class_exists("Page")) {
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

if (!class_exists('AdGroupPage')) {
class AdGroupPage extends Page {
    /**
     * @var AdGroupValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'AdGroupPage';
    }

    /**
     * @param AdGroupValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('AdGroupPage')) parent::__construct();
        $this->values = $values;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
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
     * @param int $error
     */
    public function __construct($operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('ReturnValue')) parent::__construct();
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('AdGroupValues')) {
class AdGroupValues extends ReturnValue {
    /**
     * @var AdGroup
     */
    public $adGroup;

    public function getXsiTypeName() {
        return 'AdGroupValues';
    }

    /**
     * @param AdGroup $adGroup
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($adGroup = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('AdGroupValues')) parent::__construct();
        $this->adGroup = $adGroup;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('AdGroup')) {
class AdGroup {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $campaignId;

    /**
     * @var string
     */
    public $campaignName;

    /**
     * @var int
     */
    public $adGroupId;

    /**
     * @var string
     */
    public $adGroupName;

    /**
     * @var string Enum: ACTIVE, PAUSED
     */
    public $userStatus;

    /**
     * @var AdGroupBid
     */
    public $bid;

    public function getXsiTypeName() {
        return 'AdGroup';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param string $campaignName
     * @param int $adGroupId
     * @param string $adGroupName
     * @param string $userStatus
     * @param AdGroupBid $bid
     */
    public function __construct(
        $accountId = NULL, $campaignId = NULL, $campaignName = NULL,
        $adGroupId = NULL, $adGroupName = NULL, $userStatus = NULL, $bid = NULL
    ) {
        if (get_parent_class('AdGroup')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->adGroupId = $adGroupId;
        $this->adGroupName = $adGroupName;
        $this->userStatus = $userStatus;
        $this->bid = $bid;
    }
}}


if (!class_exists('AdGroupBid')) {
class AdGroupBid {
    /**
     * @var string Enum: BUDGET_OPTIMIZER, MANUAL_CPC
     */
    public $type;

    public function getXsiTypeName() {
        return 'AdGroupBid';
    }

    /**
     * @param string $type
     */
    public function __construct($type = NULL) {
        if (get_parent_class('AdGroupBid')) parent::__construct();
        $this->type = $type;
    }
}}


if (!class_exists('BudgetOptimizerAdGroupBid')) {
class BudgetOptimizerAdGroupBid extends AdGroupBid {
    /**
     * @var int
     */
    public $keywordMaxCpc;

    public function getXsiTypeName() {
        return 'BudgetOptimizerAdGroupBid';
    }

    /**
     * @param int $keywordMaxCpc
     * @param string $type
     */
    public function __construct($keywordMaxCpc = NULL, $type = NULL) {
        if (get_parent_class('BudgetOptimizerAdGroupBid')) parent::__construct();
        $this->keywordMaxCpc = $keywordMaxCpc;
        $this->type = $type;
    }
}}


if (!class_exists('ManualCPCAdGroupBid')) {
class ManualCPCAdGroupBid {
    /**
     * @var int
     */
    public $keywordMaxCpc;

    public function getXsiTypeName() {
        return 'ManualCPCAdGroupBid';
    }

    /**
     * @param int $keywordMaxCpc
     * @param string $type
     */
    public function __construct($keywordMaxCpc = NULL, $type = NULL) {
        if (get_parent_class('BudgetOptimizerAdGroupBid')) parent::__construct();
        $this->keywordMaxCpc = $keywordMaxCpc;
        $this->type = $type;
    }
}}


if (!class_exists('Operation')) {
class Operation {
    /**
     * @var string Enum: ADD, SET, REMOVE
     */
    public $operator;

    public function getXsiTypeName() {
        return 'Operation';
    }

    /**
     * @param string $operator
     */
    public function __construct($operator = NULL) {
        if (get_parent_class('Operation')) parent::__construct();
        $this->operator = $operator;
    }
}}


if (!class_exists('AdGroupOperation')) {
class AdGroupOperation extends Operation {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $campaignId;

    /**
     * @var AdGroup[]
     */
    public $operand;

    public function getXsiTypeName() {
        return 'AdGroupOperation';
    }

    public function __construct($accountId = NULL, $campaignId = NULL, $operand = NULL, $operator = NULL) {
        if (get_parent_class('AdGroupOperation')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->operand = $operand;
        $this->operator = $operator;
    }
}}


if (!class_exists('ListReturnValue')) {
class ListReturnValue {
    /**
     * @var string
     */
    public $ListReturnValueType;

    /**
     * @var string
     */
    public $OperationType;

    private $_parameterMap = array (
        'ListReturnValue.Type' => 'ListReturnValueType',
        'Operation.Type' => 'OperationType',
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
        return 'ListReturnValue';
    }

    /**
     * @param string $ListReturnValueType
     * @param string $OperationType
     */
    public function __construct($ListReturnValueType = NULL, $OperationType = NULL) {
        if (get_parent_class('ListReturnValue')) parent::__construct();
        $this->ListReturnValueType = $ListReturnValueType;
        $this->OperationType = $OperationType;
    }
}}

if (!class_exists('AdGroupReturnValue')) {
class AdGroupReturnValue extends ListReturnValue {
    /**
     * @var AdGroupValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'AdGroupReturnValue';
    }

    /**
     * @param AdGroupValues[] $values
     * @param string $ListReturnValueType
     * @param string $OperationType
     */
    public function __construct($values = NULL, $ListReturnValueType = NULL, $OperationType = NULL) {
        if (get_parent_class('AdGroupReturnValue')) parent::__construct();
        $this->values = $values;
        $this->ListReturnValueType = $ListReturnValueType;
        $this->OperationType = $OperationType;
    }
}}

if (!class_exists('AdGroupServiceGet')) {
class AdGroupServiceGet {
    /**
     * @var AdGroupSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'AdGroupServiceGet';
    }

    /**
     * @param AdGroupSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('AdGroupServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('AdGroupServiceGetResponse')) {
class AdGroupServiceGetResponse {
    /**
     * @var AdGroupPage
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'AdGroupServiceGetResponse';
    }

    /**
     * @param AdGroupPage $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('AdGroupServiceGetResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('AdGroupServiceMutate')) {
class AdGroupServiceMutate {
    /**
     * @var AdGroupOperation
     */
    public $operations;

    public function getXsiTypeName() {
        return 'AdGroupServiceMutate';
    }

    /**
     * @param AdGroupOperation $operations
     */
    public function __construct($operations = NULL) {
        if (get_parent_class('AdGroupServiceMutate')) parent::__construct();
        $this->operations = $operations;
    }
}}

if (!class_exists('AdGroupServiceMutateResponse')) {
class AdGroupServiceMutateResponse {
    /**
     * @var AdGroupReturnValue
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'AdGroupServiceMutateResponse';
    }

    /**
     * @param AdGroupReturnValue $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('AdGroupServiceMutateResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('AdGroupService')) {
class AdGroupService extends SponsoredSearchClient {
    const SERVICE_NAME = 'AdGroupService';

    public static $classmap = array(
        'AdGroupSelector' => 'AdGroupSelector',
        'Paging' => 'Paging',
        'Page' => 'Page',
        'AdGroupPage' => 'AdGroupPage',
        'ReturnValue' => 'ReturnValue',
        'AdGroupValues' => 'ReturnValue',
        'AdGroup' => 'AdGroup',
        'AdGroupBid' => 'AdGroupBid',
        'BudgetOptimizerAdGroupBid' => 'BudgetOptimizerAdGroupBid',
        'ManualCPCAdGroupBid' => 'ManualCPCAdGroupBid',
        'Operation' => 'Operation',
        'AdGroupOperation' => 'AdGroupOperation',
        'ListReturnValue' => 'ListReturnValue',
        'AdGroupReturnValue' => 'AdGroupReturnValue',
        'get' => 'AdGroupServiceGet',
        'getResponse' => 'AdGroupServiceGetResponse',
        'mutate' => 'AdGroupServiceMutate',
        'mutateResponse' => 'AdGroupServiceMutateResponse',
        'Operator' => 'Operator',
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
     * @param AdGroupSelector $selector
     */
    public function get($selector) {
        $arg = new AdGroupServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param AdGroupOperation $operations
     */
    public function mutate($operations) {
        $arg = new AdGroupServiceMutate($operations);
        try {
            $response = $this->soapCall('mutate', $arg);
            LoggerManager::getLogger('SAM')->debug($this->getLastRequest());
            LoggerManager::getLogger('SAM')->debug($this->getLastResponse());
            return $response->rval;
        } catch (Exception $e) {
            LoggerManager::getLogger('SAM')->warn($this->getLastRequest());
            LoggerManager::getLogger('SAM')->warn($this->getLastResponse());
            error_log($e->getMessage());
        }
    }
}}
