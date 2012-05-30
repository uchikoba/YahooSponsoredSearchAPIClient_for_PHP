<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

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

if (!class_exists('CampaignTargetSelector')) {
class CampaignTargetSelector {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int[]
     */
    public $campaignIds;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'CampaignTargetSelector';
    }

    /**
     * @param int $accountId
     * @param int[] $campaignIds
     * @param Paging $paging
     */
    public function __construct($accountId = NULL, $campaignIds = NULL, $paging = NULL) {
        if (get_parent_class('CampaignTargetSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignIds = $campaignIds;
        $this->paging = $paging;
    }
}}

if (!class_exists('CampaignTargetPage')) {
class CampaignTargetPage extends Page {
    /**
     * @var CampaignTargetValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'CampaignTargetPage';
    }

    /**
     * @param CampaignTargetValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('CampaignTargetPage')) parent::__construct();
        $this->values = $values;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}}

if (!class_exists('CampaignTargetList')) {
class CampaignTargetList {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $campaignId;

    /**
     * @var TargetList[]
     */
    public $targets;

    public function getXsiTypeName() {
        return 'CampaignTargetList';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param TargetList[] $targets
     */
    public function __construct($accountId = NULL, $campaignId = NULL, $targets = NULL) {
        if (get_parent_class('CampaignTargetList')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->targets = $targets;
    }
}}

if (!class_exists('TargetList')) {
class TargetList {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $campaignId;

    /**
     * @var string Enum: PROVINCE_TARGET, AD_SCHEDULE_TARGET, NETWORK_TARGET
     */
    public $type;

    public function getXsiTypeName() {
        return 'TargetList';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param string $type
     */
    public function __construct($accountId = NULL, $campaignId = NULL, $type = NULL) {
        if (get_parent_class('TargetList')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->type = $type;
    }
}}

if (!class_exists('AdScheduleTargetList')) {
class AdScheduleTargetList extends TargetList {
    /**
     * @var AdScheduleTarget[]
     */
    public $targets;

    public function getXsiTypeName() {
        return 'AdScheduleTargetList';
    }

    /**
     * @param AdScheduleTarget[] $targets
     * @param int $accountId
     * @param int $campaignId
     * @param string $type
     */
    public function __construct($targets = NULL, $accountId = NULL, $campaignId = NULL, $type = NULL) {
        if (get_parent_class('AdScheduleTargetList')) parent::__construct();
        $this->targets = $targets;
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->type = $type;
    }
}}

if (!class_exists('AdScheduleTarget')) {
class AdScheduleTarget {
    /**
     * @var string Enum: PROVINCE_TARGET, AD_SCHEDULE_TARGET, NETWORK_TARGET
     */
    public $type;

    /**
     * @var string Enum: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY
     */
    public $dayOfWeek;

    /**
     * @var int
     */
    public $startHour;

    /**
     * @var string Enum: ZERO, FIFTEEN, THIRTY, FORTY_FIVE
     */
    public $startMinute;

    /**
     * @var int
     */
    public $endHour;

    /**
     * @var string Enum: ZERO, FIFTEEN, THIRTY, FORTY_FIVE
     */
    public $endMinute;

    /**
     * @var int
     */
    public $bidMultiplier;

    public function getXsiTypeName() {
        return 'AdScheduleTarget';
    }

    /**
     * @param string $type
     * @param string $dayOfWeek
     * @param int $startHour
     * @param string $startMinute
     * @param int $endHour
     * @param string $endMinute
     * @param int $bidMultiplier
     */
    public function __construct($type = NULL, $dayOfWeek = NULL,
        $startHour = NULL, $startMinute = NULL, $endHour = NULL, $endMinute = NULL,
        $bidMultiplier = NULL
    ) {
        if (get_parent_class('AdScheduleTarget')) parent::__construct();
        $this->type = $type;
        $this->dayOfWeek = $dayOfWeek;
        $this->startHour = $startHour;
        $this->startMinute = $startMinute;
        $this->endHour = $endHour;
        $this->endMinute = $endMinute;
        $this->bidMultiplier = $bidMultiplier;
    }
}}

if (!class_exists('NetworkTargetList')) {
class NetworkTargetList extends TargetList {
    /**
     * @var NetworkTarget
     */
    public $targets;

    public function getXsiTypeName() {
        return 'NetworkTargetList';
    }

    /**
     * @param NetworkTarget $targets
     * @param int $accountId
     * @param int $campaignId
     * @param string $type
     */
    public function __construct($targets = NULL, $accountId = NULL, $campaignId = NULL, $type = NULL) {
        if (get_parent_class('NetworkTargetList')) parent::__construct();
        $this->targets = $targets;
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->type = $type;
    }
}}

if (!class_exists('NetworkTarget')) {
class NetworkTarget {
    /**
     * @var string Enum: PROVINCE_TARGET, AD_SCHEDULE_TARGET, NETWORK_TARGET
     */
    public $type;

    /**
     * @var string Enum: YAHOO_SEARCH
     */
    public $networkCoverageType;

    public function getXsiTypeName() {
        return 'NetworkTarget';
    }

    /**
     * @param string $type
     * @param string $networkCoverageType
     */
    public function __construct($type = NULL, $networkCoverageType = NULL) {
        if (get_parent_class('NetworkTarget')) parent::__construct();
        $this->type = $type;
        $this->networkCoverageType = $networkCoverageType;
    }
}}

if (!class_exists('GeoTargetList')) {
class GeoTargetList extends TargetList {
    /**
     * @var GeoTarget
     */
    public $targets;

    public function getXsiTypeName() {
        return 'GeoTargetList';
    }

    /**
     * @param GeoTarget $targets
     * @param int $accountId
     * @param int $campaignId
     * @param string $type
     */
    public function __construct($targets = NULL, $accountId = NULL, $campaignId = NULL, $type = NULL) {
        if (get_parent_class('GeoTargetList')) parent::__construct();
        $this->targets = $targets;
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->type = $type;
    }
}}

if (!class_exists('GeoTarget')) {
class GeoTarget {
    /**
     * @var string Enum: PROVINCE_TARGET, AD_SCHEDULE_TARGET, NETWORK_TARGET
     */
    public $type;

    /**
     * @var string Enum: INCLUDED, EXCLUDED
     */
    public $excluded;

    public function getXsiTypeName() {
        return 'GeoTarget';
    }

    /**
     * @param string $type
     * @param string $excluded
     */
    public function __construct($type = NULL, $excluded = NULL) {
        if (get_parent_class('GeoTarget')) parent::__construct();
        $this->type = $type;
        $this->excluded = $excluded;
    }
}}

if (!class_exists('ProvinceTarget')) {
class ProvinceTarget extends GeoTarget {
    /**
     * @var string
     */
    public $provinceCode;

    public function getXsiTypeName() {
        return 'ProvinceTarget';
    }

    /**
     * @param string $provinceCode
     * @param string $type
     * @param string $excluded
     */
    public function __construct($provinceCode = NULL, $type = NULL, $excluded = NULL) {
        if (get_parent_class('ProvinceTarget')) parent::__construct();
        $this->provinceCode = $provinceCode;
        $this->type = $type;
        $this->excluded = $excluded;
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

if (!class_exists('CampaignTargetOperation')) {
class CampaignTargetOperation extends Operation {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var CampaignTargetList
     */
    public $operand;

    public function getXsiTypeName() {
        return 'CampaignTargetOperation';
    }

    /**
     * @param int $accountId
     * @param CampaignTargetList $operand
     * @param string $operator
     */
    public function __construct($accountId = NULL, $operand = NULL, $operator = NULL) {
        if (get_parent_class('CampaignTargetOperation')) parent::__construct();
        $this->accountId = $accountId;
        $this->operand = $operand;
        $this->operator = $operator;
    }
}}

if (!class_exists('CampaignTargetReturnValue')) {
class CampaignTargetReturnValue extends ListReturnValue {
    /**
     * @var CampaignTargetValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'CampaignTargetReturnValue';
    }

    /**
     * @param CampaignTargetValues[] $values
     * @param string $ListReturnValueType
     * @param string $OperationType
     */
    public function __construct($values = NULL, $ListReturnValueType = NULL, $OperationType = NULL) {
        if (get_parent_class('CampaignTargetReturnValue')) parent::__construct();
        $this->values = $values;
        $this->ListReturnValueType = $ListReturnValueType;
        $this->OperationType = $OperationType;
    }
}}

if (!class_exists('CampaignTargetValues')) {
class CampaignTargetValues extends ReturnValue {
    /**
     * @var CampaignTargetList
     */
    public $targetList;

    public function getXsiTypeName() {
        return 'CampaignTargetValues';
    }

    /**
     * @param CampaignTargetList $targetList
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($targetList = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('CampaignTargetValues')) parent::__construct();
        $this->targetList = $targetList;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('CampaignTargetServiceGet')) {
class CampaignTargetServiceGet {
    /**
     * @var CampaignTargetSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'CampaignTargetServiceGet';
    }

    /**
     * @param CampaignTargetSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('CampaignTargetServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('CampaignTargetServiceGetResponse')) {
class CampaignTargetServiceGetResponse {
    /**
     * @var CampaignTargetPage
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'CampaignTargetServiceGetResponse';
    }

    /**
     * @param CampaignTargetPage $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('CampaignTargetServiceGetResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('CampaignTargetServiceMutate')) {
class CampaignTargetServiceMutate {
    /**
     * @var CampaignTargetOperation
     */
    public $operations;

    public function getXsiTypeName() {
        return 'CampaignTargetServiceMutate';
    }

    /**
     * @param CampaignTargetOperation $operations
     */
    public function __construct($operations = NULL) {
        if (get_parent_class('CampaignTargetServiceMutate')) parent::__construct();
        $this->operations = $operations;
    }
}}

if (!class_exists('CampaignTargetServiceMutateResponse')) {
class CampaignTargetServiceMutateResponse {
    /**
     * @var CampaignTargetReturnValue
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'CampaignTargetServiceMutateResponse';
    }

    /**
     * @param CampaignTargetReturnValue $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('CampaignTargetServiceMutateResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('CampaignTargetService')) {
class CampaignTargetService {
    const SERVICE_NAME = 'CampaignTargetService';

    public static $classmap = array(
        'CampaignTargetSelector' => 'CampaignTargetSelector',
        'Paging' => 'Paging',
        'CampaignTargetPage' => 'CampaignTargetPage',
        'Page' => 'Page',
        'ReturnValue' => 'ReturnValue',
        'CampaignTargetList' => 'CampaignTargetList',
        'TargetList' => 'TargetList',
        'AdScheduleTargetList' => 'AdScheduleTargetList',
        'AdScheduleTarget' => 'AdScheduleTarget',
        'NetworkTargetList' => 'NetworkTargetList',
        'NetworkTarget' => 'NetworkTarget',
        'GeoTargetList' => 'GeoTargetList',
        'GeoTarget' => 'GeoTarget',
        'ProvinceTarget' => 'ProvinceTarget',
        'CampaignTargetOperation' => 'CampaignTargetOperation',
        'CampaignTargetReturnValue' => 'CampaignTargetReturnValue',
        'CampaignTargetValues' => 'CampaignTargetValues',
        'Operation' => 'Operation',
        'ListReturnValue' => 'ListReturnValue',
        'get' => 'CampaignTargetServiceGet',
        'getResponse' => 'CampaignTargetServiceGetResponse',
        'mutate' => 'CampaignTargetServiceMutate',
        'mutateResponse' => 'CampaignTargetServiceMutateResponse',
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
     * @param CampaignTargetSelector $selector
     */
    public function get($selector) {
        $arg = new CampaignTargetServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param CampaignTargetOperation $operations
     */
    public function mutate($operations) {
        $arg = new CampaignTargetServiceMutate($operations);
        try {
            $response = $this->soapCall('mutate', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}
