<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

if (!class_exists('ReportDefinitionSelector')) {
class ReportDefinitionSelector {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int[]
     */
    public $reportIds;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'ReportDefinitionSelector';
    }

    /**
     * @param int $accountId
     * @param int[] $reportIds
     * @param Paging $paging
     */
    public function __construct($accountId = NULL, $reportIds = NULL, $paging = NULL) {
        if (get_parent_class('ReportDefinitionSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->reportIds = $reportIds;
        $this->paging = $paging;
    }
}}

if (!class_exists('ReportDateRange')) {
class ReportDateRange {
    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;

    public function getXsiTypeName() {
        return 'ReportDateRange';
    }

    /**
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct($startDate = NULL, $endDate = NULL) {
        if (get_parent_class('ReportDateRange')) parent::__construct();
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
}}

if (!class_exists('ReportFilter')) {
class ReportFilter {
    /**
     * @var string
     */
    public $field;

    /**
     * @var string  Enum: EQUALS, NOT_EQUALS, GREATER_THAN, GREATER_THAN_EQUALS, LESS_THAN, LESS_THAN_EQUALS, CONTAINS, IN
     */
    public $operator;

    /**
     * @var string
     */
    public $values;

    public function getXsiTypeName() {
        return 'ReportFilter';
    }

    /**
     * @param string $field
     * @param string $operator
     * @param string $values
     */
    public function __construct($field = NULL, $operator = NULL, $values = NULL) {
        if (get_parent_class('ReportFilter')) parent::__construct();
        $this->field = $field;
        $this->operator = $operator;
        $this->values = $values;
    }
}}

if (!class_exists('Page')) {
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

if (!class_exists('ReportDefinitionPage')) {
class ReportDefinitionPage extends Page {
    /**
     * @var ReportDefinitionValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'ReportDefinitionPage';
    }

    /**
     * @param ReportDefinitionValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('ReportDefinitionPage')) parent::__construct();
        $this->values = $values;
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
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'ReturnValue';
    }

    /**
     * @param boolean $operationSucceeded
     * @param Error[] $error
     */
    public function __construct($operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('ReturnValue')) parent::__construct();
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('ReportDefinitionValues')) {
class ReportDefinitionValues extends ReturnValue {
    /**
     * @var ReportDefinition
     */
    public $reportDefinition;

    public function getXsiTypeName() {
        return 'ReportDefinitionValues';
    }

    /**
     * @param ReportDefinition $reportDefinition
     * @param boolean $operationSucceeed
     * @param Error[] $error
     */
    public function __construct($reportDefinition = NULL, $operationSucceeed = NULL, $error = NULL) {
        if (get_parent_class('ReportDefinitionValues')) parent::__construct();
        $this->reportDefinition = $reportDefinition;
        $this->operationSucceeded = $operationSucceeed;
        $this->error = $error;
    }
}}

if (!class_exists('ReportDefinition')) {
class ReportDefinition {
    /**
     * @var int
     */
    public $reportId;

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
    public $kwIds;

    /**
     * @var int[]
     */
    public $adIds;

    /**
     * @var string
     */
    public $reportName;

    /**
     * @var string Enum: ACCOUNT, CAMPAIGN, ADGROUP, AD, KEYWORDS, SEARCH_QUERY, DESTINATION_URL, GEO
     */
    public $reportType;

    /**
     * @var string Enum: TODAY, YESTERDAY, LAST_7_DAYS, LAST_WEEK, LAST_14_DAYS, LAST_30_DAYS, LAST_BUSINESS_WEEK, THIS_MONTH, LAST_MONTH, ALL_TIME, CUSTOM_DATE
     */
    public $dateRangeType;

    /**
     * @var ReportDateRange
     */
    public $dateRange;

    /**
     * @var ReportFilter[]
     */
    public $filters;

    /**
     * @var string[] Enum: NETWORK, DEVICE, DAY, DAYOFWEEK, WEEK, HOUROFDAY, MONTH, MONTHOFYEAR, QUATER, YEAR, COUNTRYCRITERIAID, PREFECTURE, CITY, ADKEYWORDID
     */
    public $segments;

    /**
     * @var sort
     */
    public $sort;

    /**
     * @var string[]
     */
    public $fields;

    /**
     * @var string Enum: CSV, XML
     */
    public $format;

    /**
     * @var string Enum: UTF-8, SJIS, EUC
     */
    public $encode;

    /**
     * @var string Enum: ON, OFF
     */
    public $zip;

    /**
     * @var string Enum: JA, EN
     */
    public $lang;

    /**
     * @var string Enum: ONETIME, DAILY, EVERYSUN, EVERYMON, EVERYTUE, EVERYWED, EVERYTHU, EVERYFRI, EVERYSAT, SPECIFYDAY
     */
    public $frequency;

    /**
     * @var int
     */
    public $specifyDay;

    /**
     * @var string Enum: YES, NO
     */
    public $addTemplate;

    public function getXsiTypeName() {
        return 'ReportDefinition';
    }

    /**
     * @param int $reportId
     * @param int $accountId
     * @param int[] $campaignIds
     * @param int[] $adGroupIds
     * @param int[] $kwIds
     * @param int[] $adIds
     * @param string $reportName
     * @param string $reportType
     * @param string $dateRangeType
     * @param ReportDateRange $dateRange
     * @param ReportFilter[] $filters
     * @param string[] $segments
     * @param string $sort
     * @param string[] $fields
     * @param string $format
     * @param string $encode
     * @param string $zip
     * @param string $lang
     * @param string $frequency
     * @param int $specifyDay
     * @param string $addTemplate
     */
    public function __construct(
        $reportId = NULL, $accountId = NULL, $campaignIds = NULL, $adGroupIds = NULL, $kwIds = NULL, $adIds = NULL,
        $reportName = NULL, $reportType = NULL, $dateRangeType = NULL, $dateRange = NULL, $filters = NULL,
        $segments = NULL, $sort = NULL, $fields = NULL, $format = NULL, $encode = NULL, $zip = NULL, $lang = NULL,
        $frequency = NULL, $specifyDay = NULL, $addTemplate = NULL
    ) {
        if (get_parent_class('ReportDefinition')) parent::__construct();
        $this->reportId = $reportId;
        $this->accountId = $accountId;
        $this->campaignIds = $campaignIds;
        $this->adGroupIds = $adGroupIds;
        $this->kwIds = $kwIds;
        $this->adIds = $adIds;
        $this->reportName = $reportName;
        $this->reportType = $reportType;
        $this->dateRangeType = $dateRangeType;
        $this->dateRange = $dateRange;
        $this->filters = $filters;
        $this->segments = $segments;
        $this->sort = $sort;
        $this->fields = $fields;
        $this->format = $format;
        $this->encode = $encode;
        $this->zip = $zip;
        $this->lang = $lang;
        $this->frequency = $frequency;
        $this->specifyDay = $specifyDay;
        $this->addTemplate = $addTemplate;
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

if (!class_exists('ReportDefinitionOperation')) {
class ReportDefinitionOperation extends Operation {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var ReportDefinition[]
     */
    public $operand;

    public function getXsiTypeName() {
        return 'ReportDefinitionOperation';
    }

    /**
     * @param int $accountId
     * @param ReportDefinition[] $operand
     * @param string $operator
     */
    public function __construct($accountId = NULL, $operand = NULL, $operator = NULL) {
        if (get_parent_class('ReportDefinitionOperation')) parent::__construct();
        $this->accountId = $accountId;
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

if (!class_exists('ReportDefinitionReturnValue')) {
class ReportDefinitionReturnValue extends ListReturnValue {
    /**
     * @var ReportDefinitionValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'ReportDefinitionReturnValue';
    }

    /**
     * @param ReportDefinitionValues[] $values
     * @param string $ListReturnValueType
     * @param string $OperationType
     */
    public function __construct($values = NULL, $ListReturnValueType = NULL, $OperationType = NULL) {
        if (get_parent_class('ReportDefinitionReturnValue')) parent::__construct();
        $this->values = $values;
        $this->ListReturnValueType = $ListReturnValueType;
        $this->OperationType = $OperationType;
    }
}}

if (!class_exists("ReturnValue")) {
class ReturnValue {
    /**
     * @var boolean
     */
    public $operationSucceeded;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'ReturnValue';
    }

    /**
     * @param boolean $operationSucceeded
     * @param Error[] $error
     */
    public function __construct($operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('ReturnValue')) parent::__construct();
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('ReportDefinitionFieldValue')) {
class ReportDefinitionFieldValue extends ReturnValue {
    public $field;

    public function getXsiTypeName() {
        return 'ReportDefinitionFieldValue';
    }

    public function __construct($field = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('ReportDefinitionFieldValue')) parent::__construct();
        $this->field = $field;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('ReportDefinitionField')) {
class ReportDefinitionField {
    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $displayFieldName;

    /**
     * @var string
     */
    public $xmlAttributeName;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var string[]
     */
    public $enumValues;

    /**
     * @var boolean
     */
    public $canSelect;

    /**
     * @var boolean
     */
    public $canFilter;

    public function getXsiTypeName() {
        return 'ReportDefinitionField';
    }

    /**
     * @param string $fieldName
     * @param string $displayFieldName
     * @param string $xmlAttributeName
     * @param string $fieldType
     * @param string[] $enumValues
     * @param boolean $canSelect
     * @param boolean $canFilter
     */
    public function __construct($fieldName = NULL, $displayFieldName = NULL, $xmlAttributeName = NULL,
        $fieldType = NULL, $enumValues = NULL, $canSelect = NULL, $canFilter = NULL
    ) {
        if (get_parent_class('ReportDefinitionField')) parent::__construct();
        $this->fieldName = $fieldName;
        $this->displayFieldName = $displayFieldName;
        $this->fieldType = $fieldType;
        $this->enumValues = $enumValues;
        $this->canSelect = $canSelect;
        $this->canFilter = $canFilter;
    }
}}

if (!class_exists('ReportDefinitionServiceGet')) {
class ReportDefinitionServiceGet {
    /**
     * @var ReportDefinitionSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'ReportDefinitionServiceGet';
    }

    /**
     * @param ReportDefinitionSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('ReportDefinitionServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('ReportDefinitionServiceGetResponse')) {
class ReportDefinitionServiceGetResponse {
    /**
     * @var ReportDefinitionPage
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'ReportDefinitionServiceGetResponse';
    }

    /**
     * @param ReportDefinitionPage $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('ReportDefinitionServiceGetResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('ReportDefinitionServiceMutate')) {
class ReportDefinitionServiceMutate {
    /**
     * @var ReportDefinitionOperation
     */
    public $operations;

    public function getXsiTypeName() {
        return 'ReportDefinitionServiceMutate';
    }

    /**
     * @param ReportDefinitionOperation $operations
     */
    public function __construct($operations = NULL) {
        if (get_parent_class('ReportDefinitionServiceMutate')) parent::__construct();
        $this->operations = $operations;
    }
}}

if (!class_exists('ReportDefinitionServiceMutateResponse')) {
class ReportDefinitionServiceMutateResponse {
    /**
     * @var ReportDefinitionReturnValue
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'ReportDefinitionServiceMutateResponse';
    }

    /**
     * @param ReportDefinitionReturnValue $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('ReportDefinitionServiceMutateResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('ReportDefinitionServiceGetReportFields')) {
class ReportDefinitionServiceGetReportFields {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string Enum: ACCOUNT, CAMPAIGN, ADGROUP, AD, KEYWORDS, SEARCH_QUERY, DESTINATION_URL, GEO
     */
    public $reportType;

    public function getXsiTypeName() {
        return 'ReportDefinitionServiceGetReportFields';
    }

    /**
     * @param int $accountId
     * @param string $reportType
     */
    public function __construct($accountId = NULL, $reportType = NULL) {
        if (get_parent_class('ReportDefinitionServiceGetReportFields')) parent::__construct();
        $this->accountId = $accountId;
        $this->reportType = $reportType;
    }
}}

if (!class_exists('ReportDefinitionServiceGetReportFieldsResponse')) {
class ReportDefinitionServiceGetReportFieldsResponse {
    /**
     * @var ReportDefinitionFieldValue
     */
    public $rval;

    public function getXsiTypeName() {
        return 'ReportDefinitionServiceGetReportFieldsResponse';
    }

    /**
     * @param ReportDefinitionFieldValue $rval
     */
    public function __construct($rval = NULL) {
        if (get_parent_class('ReportDefinitionServiceGetReportFieldsResponse')) parent::__construct();
        $this->rval = $rval;
    }
}}

if (!class_exists('ReportDefinitionService')) {
class ReportDefinitionService extends SponsoredSearchClient {
    const SERVICE_NAME = 'ReportDefinitionService';

    public static $classmap = array(
        'ReportDefinitionSelector' => 'ReportDefinitionSelector',
        'ReportDateRange' => 'ReportDateRange',
        'ReportFilter' => 'ReportFilter',
        'ReportDefinitionPage' => 'ReportDefinitionPage',
        'ReportDefinitionValues' => 'ReportDefinitionValues',
        'ReportDefinition' => 'ReportDefinition',
        'Paging' => 'Paging',
        'ReturnValue' => 'ReturnValue',
        'Page' => 'Page',
        'ReportDefinitionOperation' => 'ReportDefinitionOperation',
        'Operation' => 'Operation',
        'ReportDefinitionReturnValue' => 'ReportDefinitionReturnValue',
        'ReportDefinitionFieldValue' => 'ReportDefinitionFieldValue',
        'ReportDefinitionField' => 'ReportDefinitionField',
        'ListReturnValue' => 'ListReturnValue',
        'get' => 'ReportDefinitionServiceGet',
        'getResponse' => 'ReportDefinitionServiceGetResponse',
        'mutate' => 'ReportDefinitionServiceMutate',
        'mutateResponse' => 'ReportDefinitionServiceMutateResponse',
        'getReportFields' => 'ReportDefinitionServiceGetReportFields',
        'getReportFieldsResponse' => 'ReportDefinitionServiceGetReportFieldsResponse',
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
     * @param ReportDefinitionSelector $selector
     */
    public function get($selector) {
        $arg = new ReportDefinitionServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param ReportDefinitionOperation $operations
     */
    public function mutate($operations) {
        $arg = new ReportDefinitionServiceMutate($operations);
        try {
            $response = $this->soapCall('mutate', $arg);
            if ($response->error) {
                throw new Exception($response->error->message . ' ' . $response->error->detail->requestKey, $response->error->code);
            }
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param int $accountId
     * @param string $reportType ACCOUNT, CAMPAIGN, ADGROUP, AD, KEYWORDS, SEARCH_QUERY, DESTINATION_URL, GEO
     */
    public function getReportFields($accountId, $reportType) {
        $arg = new ReportDefinitionServiceGetReportFields($accountId, $reportType);
        try {
            $response = $this->soapCall('getReportFields', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}
