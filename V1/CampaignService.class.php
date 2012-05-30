<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

if (!class_exists('CampaignSelector')) {
class CampaignSelector {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int[]
     */
    public $campaignIds;

    /**
     * @var string Enum: ACTIVE, PAUSED
     */
    public $userStatus;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'CampaignSelector';
    }

    /**
     * @param int $accountId
     * @param int[] $campaignIds
     * @param string $userStatus
     * @param Paging $paging
     */
    public function __construct(
        $accountId = NULL, $campaignIds = NULL, $userStatus = NULL, $paging = NULL
    ) {
        if (get_parent_class('CampaignSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignIds = $campaignIds;
        $this->userStatus = $userStatus;
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

if (!class_exists('Campaign')) {
class Campaign {
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
     * @var string Enum: ACTIVE, PAUSED
     */
    public $userStatus;

    /**
     * @var string Enum: SERVING, ENDED, PENDING, STOP
     */
    public $servingStatus;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var Budget
     */
    public $budget;

    /**
     * @var BiddingStrategy
     */
    public $biddingStrategy;

    /**
     * @var string Enum: DESKTOP, WAP_MOBILE, HIGH_END_MOBILEa
     */
    public $platform;

    /**
     * @var string Enum: ANDROID, IPAD, IPHONE, ALL
     */
    public $mobilePlatform;

    /**
     * @var string Enum: OPTIMIZE, ROTATE
     */
    public $adServingOptimizationStatus;

    public function getXsiTypeName() {
        return 'Campaign';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param string $campaignName
     * @param string $userStatus
     * @param string $servingStatus
     * @param string $startDate
     * @param string $endDate
     * @param Budget $budget
     * @param BiddingStrategy $biddingStrategy
     * @param string $platform
     * @param string $mobilePlatform
     * @param string $adServingOptimizationStatus
     */
    public function __construct($accountId = NULL, $campaignId = NULL, $campaignName = NULL,
        $userStatus = NULL, $servingStatus = NULL, $startDate = NULL, $endDate = NULL,
        $budget = NULL, $biddingStrategy = NULL, $platform = NULL, $mobilePlatform = NULL,
        $adServingOptimizationStatus = NULL
    ) {
        if (get_parent_class('Campaign')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->userStatus = $userStatus;
        $this->servingStatus = $servingStatus;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->budget = $budget;
        $this->biddingStrategy = $biddingStrategy;
        $this->platform = $platform;
        $this->mobilePlatform = $mobilePlatform;
        $this->adServingOptimizationStatus = $adServingOptimizationStatus;
    }
}}

if (!class_exists('Budget')) {
class Budget {
    /**
     * @var string Enum: DAILY
     */
    public $period;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var string Enum: STANDARD, ACCELERATED
     */
    public $deliveryMethod;

    public function getXsiTypeName() {
        return 'Budget';
    }

    /**
     * @param string $period
     * @param int $amount
     * @param string $deliveryMethod
     */
    public function __construct($period = NULL, $amount = NULL, $deliveryMethod = NULL) {
        if (get_parent_class('Budget')) parent::__construct();
        $this->period = $period;
        $this->amount = $amount;
        $this->deliveryMethod = $deliveryMethod;
    }
}}

if (!class_exists('BiddingStrategy')) {
class BiddingStrategy {
    /**
     * @var string Enum: MANUAL_CPC, BUDGET_OPTIMIZER
     */
    public $type;

    public function getXsiTypeName() {
        return 'BiddingStrategy';
    }

    /**
     * @param string $type
     */
    public function __construct($type = NULL) {
        if (get_parent_class('BiddingStrategy')) parent::__construct();
        $this->type = $type;
    }
}}

if (!class_exists('ManualCPC')) {
class ManualCPC extends BiddingStrategy {
    public function getXsiTypeName() {
        return 'ManualCPC';
    }

    /**
     * @param string $type
     */
    public function __construct($type = NULL) {
        if (get_parent_class('ManualCPC')) parent::__construct();
        $this->type = $type;
    }
}}

if (!class_exists('BudgetOptimizer')) {
class BudgetOptimizer extends BiddingStrategy {
    /**
     * @var int
     */
    public $bidCeiling;

    public function getXsiTypeName() {
        return 'BudgetOptimizer';
    }

    /**
     * @param int $bidCeiling
     * @param string $type
     */
    public function __construct($bidCeiling = NULL, $type = NULL) {
        if (get_parent_class('BudgetOptimizer')) parent::__construct();
        $this->bidCeiling = $bidCeiling;
        $this->type = $type;
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

if (!class_exists('CampaignPage')) {
class CampaignPage extends Page {
    /**
     * @var CampaignValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'CampaignPage';
    }

    /**
     * @param CampaignValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('CampaignPage')) parent::__construct();
        $this->values = $values;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}}

if (!class_exists('CampaignValues')) {
class CampaignValues extends ReturnValue {
    /**
     * @var Campaign
     */
    public $campaign;

    public function getXsiTypeName() {
        return 'CampaignValues';
    }

    /**
     * @param Campaign $campaign
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($campaign = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('CampaignValues')) parent::__construct();
        $this->campaign = $campaign;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
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

if (!class_exists('CampaignOperation')) {
class CampaignOperation extends Operation {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var Campaign[]
     */
    public $operand;

    public function getXsiTypeName() {
        return 'CampaignOperation';
    }

    /**
     * @param int $accountId
     * @param Campaign[] $operand
     * @param string $operation
     */
    public function __construct($accountId = NULL, $operand = NULL, $operation = NULL) {
        if (get_parent_class('CampaignOperation')) parent::__construct();
        $this->accountId = $accountId;
        $this->operand = $operand;
        $this->operation = $operation;
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

if (!class_exists('CampaignReturnValue')) {
class CampaignReturnValue extends ListReturnValue {
    /**
     * @var CampaignValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'CampaignReturnValue';
    }

    /**
     * @param CampaignValues[] $values
     * @param string $ListReturnValueType
     * @param string $OperationType
     */
    public function __construct($values = NULL, $ListReturnValueType = NULL, $OperationType = NULL) {
        if (get_parent_class('CampaignReturnValue')) parent::__construct();
        $this->values = $values;
        $this->ListReturnValueType = $ListReturnValueType;
        $this->OperationType = $OperationType;
    }
}}

if (!class_exists('CampaignServiceGet')) {
class CampaignServiceGet {
    /**
     * @var CampaignSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'CampaignServiceGet';
    }

    /**
     * @param CampaignSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('CampaignServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('CampaignServiceGetResponse')) {
class CampaignServiceGetResponse {
    /**
     * @var CampaignPage
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'CampaignServiceGetResponse';
    }

    /**
     * @param CampaignPage $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('CampaignServiceGetResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('CampaignServiceMutate')) {
class CampaignServiceMutate {
    /**
     * @var CampaignOperation
     */
    public $operations;

    public function getXsiTypeName() {
        return 'CampaignServiceMutate';
    }

    /**
     * @param CampaignOperation
     */
    public function __construct($operations = NULL) {
        if (get_parent_class('CampaignServiceMutate')) parent::__construct();
        $this->operations = $operations;
    }
}}

if (!class_exists('CampaignServiceMutateResponse')) {
class CampaignServiceMutateResponse {
    /**
     * @var CampaignReturnValue
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'CampaignServiceMutateResponse';
    }

    /**
     * @param CampaignReturnValue $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('CampaignServiceMutateResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}


if (!class_exists('CampaignService')) {
class CampaignService extends SponsoredSearchClient {
    const SERVICE_NAME = 'CampaignService';

    public static $classmap = array(
        'CampaignSelector' => 'CampaignSelector',
        'Paging' => 'Paging',
        'Campaign' => 'Campaign',
        'Budget' => 'Budget',
        'BiddingStrategy' => 'BiddingStrategy',
        'ManualCPC' => 'ManualCPC',
        'BudgetOptimizer' => 'BudgetOptimizer',
        'CampaignPage' => 'CampaignPage',
        'CampaignValues' => 'CampaignValues',
        'ReturnValue' => 'ReturnValue',
        'Page' => 'Page',
        'CampaignOperation' => 'CampaignOperation',
        'Operation' => 'Operation',
        'CampaignReturnValue' => 'CampaignReturnValue',
        'ListReturnValue' => 'ListReturnValue',
        'get' => 'CampaignServiceGet',
        'getResponse' => 'CampaignServiceGetResponse',
        'mutate' => 'CampaignServiceMutate',
        'mutateResponse' => 'CampaignServiceMutateResponse',
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
     * @param CampaignSelector $selector
     */
    public function get($selector) {
        $arg = new CampaignServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param CampaignOperation $operations
     */
    public function mutate($operations) {
        $arg = new CampaignServiceMutate($operations);
        try {
            $response = $this->soapCall('mutate', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}
