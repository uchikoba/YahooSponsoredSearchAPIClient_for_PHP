<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

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

if (!class_exists('CampaignCriterionSelector')) {
class CampaignCriterionSelector {
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
    public $criterionIds;

    /**
     * @var string Enum: BIDDABLE, NEGATIVE
     */
    public $criterionUse;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'CampaignCriterionSelector';
    }

    /**
     * @param int $accountId
     * @param int[] $campaignIds
     * @param int[] $criterionIds
     * @param string $criterionUse
     * @param Paging $paging
     */
    public function __construct($accountId = NULL, $campaignIds = NULL,
        $criterionIds = NULL, $criterionUse = NULL, $paging = NULL
    ) {
        if (get_parent_class('CampaignCriterionSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignIds = $campaignIds;
        $this->criterionIds = $criterionIds;
        $this->criterionUse = $criterionUse;
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

if (!class_exists('CampaignCriterionPage')) {
class CampaignCriterionPage extends Page {
    /**
     * @var CampaignCriterionValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'CampaignCriterionPage';
    }

    /**
     * @param CampaignCriterionValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('CampaignCriterionPage')) parent::__construct();
        $this->values = $values;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}}

if (!class_exists('CampaignCriterion')) {
class CampaignCriterion {
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
     * @var string Enum: BIDDABLE, NEGATIVE
     */
    public $criterionUse;

    /**
     * @var Criterion
     */
    public $criterion;

    public function getXsiTypeName() {
        return 'CampaignCriterion';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param string $campaignName
     * @param string $criterionUse
     * @param Criterion $criterion
     */
    public function __construct($accountId = NULL,
        $campaignId = NULL, $campaignName = NULL, $criterionUse = NULL, $criterion = NULL
    ) {
        if (get_parent_class('CampaignCriterion')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->criterionUse = $criterionUse;
        $this->criterion = $criterion;
    }
}}

if (!class_exists('NegativeCampaignCriterion')) {
class NegativeCampaignCriterion extends CampaignCriterion {
    public function getXsiTypeName() {
        return 'NegativeCampaignCriterion';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param string $campaignName
     * @param string $criterionUse
     * @param Criterion $criterion
     */
    public function __construct($accountId = NULL,
        $campaignId = NULL, $campaignName = NULL, $criterionUse = NULL, $criterion = NULL
    ) {
        if (get_parent_class('NegativeCampaignCriterion')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
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

if (!class_exists('CampaignCriterionOperation')) {
class CampaignCriterionOperation extends Operation {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $campaignId;

    /**
     * @var string Enum: BIDDABLE, NEGATIVE
     */
    public $criterionUse;

    /**
     * @var CampaignCriterion
     */
    public $operand;

    public function getXsiTypeName() {
        return 'CampaignCriterionOperation';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param string $criterionUse
     * @param CampaignCriterion $operand
     * @param string $operator
     */
    public function __construct($accountId = NULL, $campaignId = NULL,
        $criterionUse = NULL, $operand = NULL, $operator = NULL
    ) {
        if (get_parent_class('CampaignCriterionOperation')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->criterionUse = $criterionUse;
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

if (!class_exists('CampaignCriterionReturnValue')) {
class CampaignCriterionReturnValue extends ListReturnValue {
    /**
     * @var CampaignCriterionValues
     */
    public $values;

    public function getXsiTypeName() {
        return 'CampaignCriterionReturnValue';
    }

    /**
     * @param CampaignCriterionValues $values
     * @param string $ListReturnValueType
     * @param string $OperationType
     */
    public function __construct($values = NULL, $ListReturnValueType = NULL, $OperationType = NULL) {
        if (get_parent_class('CampaignCriterionReturnValue')) parent::__construct();
        $this->values = $values;
        $this->ListReturnValueType = $ListReturnValueType;
        $this->OperationType = $OperationType;
    }
}}

if (!class_exists('CampaignCriterionValues')) {
class CampaignCriterionValues extends ReturnValue {
    /**
     * @var CampaignCriterion
     */
    public $campaignCriterion;

    public function getXsiTypeName() {
        return 'CampaignCriterionValues';
    }

    /**
     * @param CampaignCriterion $campaignCriterion
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($campaignCriterion = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('CampaignCriterionValues')) parent::__construct();
        $this->campaignCriterion = $campaignCriterion;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('CampaignCriterionServiceGet')) {
class CampaignCriterionServiceGet {
    /**
     * @var CampaignCriterionSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'CampaignCriterionServiceGet';
    }

    /**
     * @param CampaignCriterionSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('CampaignCriterionServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('CampaignCriterionServiceGetResponse')) {
class CampaignCriterionServiceGetResponse {
    /**
     * @var CampaignCriterionPage
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'CampaignCriterionServiceGetResponse';
    }

    /**
     * @param CampaignCriterionPage $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('CampaignCriterionServiceGetResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('CampaignCriterionServiceMutate')) {
class CampaignCriterionServiceMutate {
    /**
     * @var CampaignCriterionOperation
     */
    public $operations;

    public function getXsiTypeName() {
        return 'CampaignCriterionServiceMutate';
    }

    /**
     * @param CampaignCriterionOperation $operations
     */
    public function __construct($operations = NULL) {
        if (get_parent_class('CampaignCriterionServiceMutate')) parent::__construct();
        $this->operations = $operations;
    }
}}

if (!class_exists('CampaignCriterionServiceMutateResponse')) {
class CampaignCriterionServiceMutateResponse {
    /**
     * @var CampaignCriterionReturnValue
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'CampaignCriterionServiceMutateResponse';
    }

    /**
     * @param CampaignCriterionReturnValue $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('CampaignCriterionServiceMutateResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('CampaignCriterionService')) {
class CampaignCriterionService extends SponsoredSearchClient {
    const SERVICE_NAME = 'CampaignCriterionService';

    public static $classmap = array(
        'CampaignCriterionSelector' => 'CampaignCriterionSelector',
        'Paging' => 'Paging',
        'CampaignCriterionPage' => 'CampaignCriterionPage',
        'Page' => 'Page',
        'ReturnValue' => 'ReturnValue',
        'CampaignCriterion' => 'CampaignCriterion',
        'NegativeCampaignCriterion' => 'NegativeCampaignCriterion',
        'Criterion' => 'Criterion',
        'Keyword' => 'Keyword',
        'CampaignCriterionOperation' => 'CampaignCriterionOperation',
        'CampaignCriterionReturnValue' => 'CampaignCriterionReturnValue',
        'CampaignCriterionValues' => 'CampaignCriterionValues',
        'Operation' => 'Operation',
        'ListReturnValue' => 'ListReturnValue',
        'get' => 'CampaignCriterionServiceGet',
        'getResponse' => 'CampaignCriterionServiceGetResponse',
        'mutate' => 'CampaignCriterionServiceMutate',
        'mutateResponse' => 'CampaignCriterionServiceMutateResponse',
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
     * @param CampaignCriterionSelector $selector
     */
    public function get($selector) {
        $arg = new CampaignCriterionServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param CampaignCriterionOperation $operations
     */
    public function mutate($operations) {
        $arg = new CampaignCriterionServiceMutate($operations);
        try {
            $response = $this->soapCall('mutate', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}
