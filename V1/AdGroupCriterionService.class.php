<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

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

if (!class_exists('Operation')) {
class Operation {
    /**
     * @var string Enum: ADD, SET, REMOVE
     */
    public $operator;

    /**
     * @var string
     */
    public $OperationType;

    private $_parameterMap = array(
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

    public function getParameterMap() {
        return $this->_parameterMap;
    }

    public function getXsiTypeName() {
        return 'Operation';
    }

    /**
     * @param string $operator
     * @param string $OperationType
     */
    public function __construct($operator = NULL, $OperationType = NULL) {
        if (get_parent_class('Operation')) parent::__construct();
        $this->operator = $operator;
        $this->OperationType = $OperationType;
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

if (!class_exists('AdGroupCriterionSelector')) {
class AdGroupCriterionSelector {
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
     * @var int[]
     */
    public $criterionIds;

    /**
     * @var string Enum: BIDDABLE, NEGATIVE
     */
    public $criterionUse;

    /**
     * @var string Enum: ACTIVE, PAUSED
     */
    public $userStatuses;

    /**
     * @var string Enum: APPROVED, APPROVED_WITH_REVIEW, REVIEW, PRE_DISAPPROVED, POST_DISAPPROVED
     */
    public $approvalStatuses;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'AdGroupCriterionSelector';
    }

    /**
     * @param int $accountId
     * @param int[] $campaignIds
     * @param int[] $adGroupIds
     * @param int[] $criterionIds
     * @param string $criterionUse
     * @param string $userStatuses
     * @param string $approvalStatuses
     * @param Paging $paging
     */
    public function __construct($accountId = NULL, $campaignIds = NULL, $adGroupIds = NULL,
        $criterionIds = NULL, $criterionUse = NULL, $userStatuses = NULL, $approvalStatuses = NULL, $paging = NULL
    ) {
        if (get_parent_class('AdGroupCriterionSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignIds = $campaignIds;
        $this->adGroupIds = $adGroupIds;
        $this->criterionIds = $criterionIds;
        $this->criterionUse = $criterionUse;
        $this->userStatuses = $userStatuses;
        $this->approvalStatuses = $approvalStatuses;
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

if (!class_exists('AdGroupCriterionPage')) {
class AdGroupCriterionPage extends Page {
    /**
     * @var AdGroupCriterionValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'AdGroupCriterionPage';
    }

    /**
     * @param AdGroupCriterionValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('AdGroupCriterionPage')) parent::__construct();
        $this->values = $values;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}}

if (!class_exists('AdGroupCriterionValues')) {
class AdGroupCriterionValues extends ReturnValue {
    /**
     * @var AdGroupCriterion
     */
    public $adGroupCriterion;

    public function getXsiTypeName() {
        return 'AdGroupCriterionValues';
    }

    /**
     * @param AdGroupCriterion $adGroupCriterion
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($adGroupCriterion = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('AdGroupCriterionValues')) parent::__construct();
        $this->adGroupCriterion = $adGroupCriterion;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('AdGroupCriterion')) {
class AdGroupCriterion {
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
     * @var string Enum: BIDDABLE, NEGATIVE
     */
    public $criterionUse;

    /**
     * @var Criterion
     */
    public $criterion;

    public function getXsiTypeName() {
        return 'AdGroupCriterion';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param string $campaignName
     * @param int $adGroupId
     * @param string $adGroupName
     * @param string $criterionUse
     * @param Criterion $criterion
     */
    public function __construct($accountId = NULL, $campaignId = NULL, $campaignName = NULL,
        $adGroupId = NULL, $adGroupName = NULL, $criterionUse = NULL, $criterion = NULL
    ) {
        if (get_parent_class('AdGroupCriterion')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->adGroupId = $adGroupId;
        $this->adGroupName = $adGroupName;
        $this->criterionUse = $criterionUse;
        $this->criterion = $criterion;
    }
}}

if (!class_exists('NegativeAdGroupCriterion')) {
class NegativeAdGroupCriterion extends AdGroupCriterion {
    public function getXsiTypeName() {
        return 'NegativeAdGroupCriterion';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param string $campaignName
     * @param int $adGroupId
     * @param string $adGroupName
     * @param string $criterionUse
     * @param Criterion $criterion
     */
    public function __construct($accountId = NULL, $campaignId = NULL, $campaignName = NULL,
        $adGroupId = NULL, $adGroupName = NULL, $criterionUse = NULL, $criterion = NULL
    ) {
        if (get_parent_class('NegativeAdGroupCriterion')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->adGroupId = $adGroupId;
        $this->adGroupName = $adGroupName;
        $this->criterionUse = $criterionUse;
        $this->criterion = $criterion;
    }
}}

if (!class_exists('Criterion')) {
class Criterion {
    /**
     * @var int
     */
    public $criterionId;

    /**
     * @var string Enum: KEYWORD
     */
    public $type;

    public function getXsiTypeName() {
        return 'Criterion';
    }

    /**
     * @param int $criterionId
     * @param string $type
     */
    public function __construct($criterionId = NULL, $type = NULL) {
        if (get_parent_class('Criterion')) parent::__construct();
        $this->criterionId = $criterionId;
        $this->type = $type;
    }
}}

if (!class_exists('Keyword')) {
class Keyword extends Criterion {
    /**
     * @var string
     */
    public $text;

    /**
     * @var string Enum: EXACT, PHRASE, BROAD
     */
    public $matchType;

    public function getXsiTypeName() {
        return 'Keyword';
    }

    /**
     * @param string $text
     * @param string $matchType
     * @param int $criterionId
     * @param string $type
     */
    public function __construct($text = NULL, $matchType = NULL,
        $criterionId = NULL, $type = NULL
    ) {
        if (get_parent_class('Keyword')) parent::__construct();
        $this->text = $text;
        $this->matchType = $matchType;
        $this->criterionId = $criterionId;
        $this->type = $type;
    }
}}

if (!class_exists('BiddableAdGroupCriterion')) {
class BiddableAdGroupCriterion extends AdGroupCriterion {
    /**
     * @var string Enum: ACTIVE, PAUSED
     */
    public $userStatus;

    /**
     * @var string Enum: APPROVED, APPROVED_WITH_REVIEW, REVIEW, PRE_DISAPPROVED, POST_DISAPPROVED
     */
    public $approvalStatus;

    /**
     * @var string[]
     */
    public $disapprovalReasonCodes;

    /**
     * @var string
     */
    public $destinationUrl;

    /**
     * @var AdGroupCriterionBid
     */
    public $bid;

    public function getXsiTypeName() {
        return 'BiddableAdGroupCriterion';
    }

    /**
     * @param string $userStatus
     * @param string $approvalStatus
     * @param string[] $disapprovalReasonCodes
     * @param string $destinationUrl
     * @param AdGroupCriterionBid $bid
     * @param int $accountId
     * @param int $campaignId
     * @param string $campaignName
     * @param int $adGroupId
     * @param string $adGroupName
     * @param string $criterionUse
     * @param Criterion $criterion
     */
    public function __construct($userStatus = NULL, $approvalStatus = NULL,
        $disapprovalReasonCodes = NULL, $destinationUrl = NULL, $bid = NULL,
        $accountId = NULL, $campaignId = NULL, $campaignName = NULL,
        $adGroupId = NULL, $adGroupName = NULL, $criterionUse = NULL, $criterion = NULL
    ) {
        if (get_parent_class('BiddableAdGroupCriterion')) parent::__construct();
        $this->userStatus = $userStatus;
        $this->approvalStatus = $approvalStatus;
        $this->disapprovalReasonCodes = $disapprovalReasonCodes;
        $this->destinationUrl = $destinationUrl;
        $this->bid = $bid;
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->adGroupId = $adGroupId;
        $this->adGroupName = $adGroupName;
        $this->criterionUse = $criterionUse;
        $this->criterion = $criterion;
    }
}}

if (!class_exists('AdGroupCriterionBid')) {
class AdGroupCriterionBid {
    /**
     * @var string Enum: MANUAL_CPC, BUDGET_OPTIMIZER
     */
    public $type;

    public function getXsiTypeName() {
        return 'AdGroupCriterionBid';
    }

    /**
     * @param string $type
     */
    public function __construct($type = NULL) {
        if (get_parent_class('AdGroupCriterionBid')) parent::__construct();
        $this->type = $type;
    }
}}

if (!class_exists('ManualCPCAdGroupCriterionBid')) {
class ManualCPCAdGroupCriterionBid extends AdGroupCriterionBid {
    /**
     * @var int
     */
    public $maxCpc;

    /**
     * @var string Enum: ADGROUP, CRITERION
     */
    public $bidSource;

    public function getXsiTypeName() {
        return 'ManualCPCAdGroupCriterionBid';
    }

    /**
     * @param int $maxCpc
     * @param string $bidSource
     * @param string $type
     */
    public function __construct($maxCpc = NULL, $bidSource = NULL, $type = NULL) {
        if (get_parent_class('ManualCPCAdGroupCriterionBid')) parent::__construct();
        $this->maxCpc = $macCpc;
        $this->bidSource = $bidSource;
        $this->type = $type;
    }
}}

if (!class_exists('BudgetOptimizerAdGroupCriterionBid')) {
class BudgetOptimizerAdGroupCriterionBid extends AdGroupCriterionBid {
    public function getXsiTypeName() {
        return 'BudgetOptimizerAdGroupCriterionBid';
    }

    /**
     * @param string $type
     */
    public function __construct($type = NULL) {
        if (get_parent_class('BudgetOptimizerAdGroupCriterionBid')) parent::__construct();
        $this->type = $type;
    }
}}

if (!class_exists('AdGroupCriterionOperation')) {
class AdGroupCriterionOperation extends Operation {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $campaignId;

    /**
     * @var int
     */
    public $adGroupId;

    /**
     * @var string Enum: BIDDABLE, NEGATIVE
     */
    public $criterionUse;

    /**
     * @var AdGroupCriterion
     */
    public $operand;

    public function getXsiTypeName() {
        return 'AdGroupCriterionOperation';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param int $adGroupId
     * @param string $criterionUse
     * @param AdGroupCriterion $operand
     * @param string $operator
     * @param string $OperationType
     */
    public function __construct($accountId = NULL, $campaignId = NULL, $adGroupId = NULL,
        $criterionUse = NULL, $operand = NULL, $operator = NULL, $OperationType = NULL
    ) {
        if (get_parent_class('AdGroupCriterionOperation')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->adGroupId = $adGroupId;
        $this->criterionUse = $criterionUse;
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}}

if (!class_exists('AdGroupCriterionReturnValue')) {
class AdGroupCriterionReturnValue extends ListReturnValue {
    /**
     * @var AdGroupCriterionValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'AdGroupCriterionReturnValue';
    }

    /**
     * @param AdGroupCriterionValues[] $values
     * @param string $ListReturnValueType
     * @param string $OperationType
     */
    public function __construct($values = NULL, $ListReturnValueType = NULL, $OperationType = NULL) {
        if (get_parent_class('AdGroupCriterionReturnValue')) parent::__construct();
        $this->values = $values;
        $this->ListReturnValueType = $ListReturnValueType;
        $this->OperationType = $OperationType;
    }
}}

if (!class_exists('AdGroupCriterionServiceGet')) {
class AdGroupCriterionServiceGet {
    /**
     * @var AdGroupCriterionSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'AdGroupCriterionServiceGet';
    }

    /**
     * @param AdGroupCriterionSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('AdGroupCriterionServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('AdGroupCriterionServiceGetResponse')) {
class AdGroupCriterionServiceGetResponse {
    /**
     * @var AdGroupCriterionPage
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'AdGroupCriterionServiceGet';
    }

    /**
     * @param AdGroupCriterionPage $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('AdGroupCriterionServiceGet')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('AdGroupCriterionServiceMutate')) {
class AdGroupCriterionServiceMutate {
    /**
     * @var AdGroupCriterionOperation
     */
    public $operations;

    public function getXsiTypeName() {
        return 'AdGroupCriterionServiceMutate';
    }

    public function __construct($operations = NULL) {
        if (get_parent_class('AdGroupCriterionServiceMutate')) parent::__construct();
        $this->operations = $operations;
    }
}}

if (!class_exists('AdGroupCriterionServiceMutateResponse')) {
class AdGroupCriterionServiceMutateResponse {
    /**
     * @var AdGroupCriterionReturnValue
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'AdGroupCriterionServiceMutateResponse';
    }

    /**
     * @param AdGroupCriterionReturnValue $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('AdGroupCriterionServiceMutateResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('AdGroupCriterionService')) {
class AdGroupCriterionService extends SponsoredSearchClient {
    const SERVICE_NAME = 'AdGroupCriterionService';

    public static $classmap = array(
        'AdGroupCriterionSelector' => 'AdGroupCriterionSelector',
        'Paging' => 'Paging',
        'AdGroupCriterionPage' => 'AdGroupCriterionPage',
        'AdGroupCriterionValues' => 'AdGroupCriterionValues',
        'AdGroupCriterion' => 'AdGroupCriterion',
        'NegativeAdGroupCriterion' => 'NegativeAdGroupCriterion',
        'Criterion' => 'Criterion',
        'Keyword' => 'Keyword',
        'BiddableAdGroupCriterion' => 'BiddableAdGroupCriterion',
        'AdGroupCriterionBid' => 'AdGroupCriterionBid',
        'ManualCPCAdGroupCriterionBid' => 'ManualCPCAdGroupCriterionBid',
        'BudgetOptimizerAdGroupCriterionBid' => 'BudgetOptimizerAdGroupCriterionBid',
        'AdGroupCriterionOperation' => 'AdGroupCriterionOperation',
        'AdGroupCriterionReturnValue' => 'AdGroupCriterionReturnValue',
        'ReturnValue' => 'ReturnValue',
        'Page' => 'Page',
        'Operation' => 'Operation',
        'ListReturnValue' => 'ListReturnValue',
        'get' => 'AdGroupCriterionServiceGet',
        'getResponse' => 'AdGroupCriterionServiceGetResponse',
        'mutate' => 'AdGroupCriterionServiceMutate',
        'mutateResponse' => 'AdGroupCriterionServiceMutateResponse',
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
     * @param AdGroupCriterionSelector $selector
     */
    public function get($selector) {
        $arg = new AdGroupCriterionServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param AdGroupCriterionOperation $operations
     */
    public function mutate($operations) {
        $arg = new AdGroupCriterionServiceMutate($operations);
        try {
            $response = $this->soapCall('mutate', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}
