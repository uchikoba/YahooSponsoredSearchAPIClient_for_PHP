<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

if (!class_exists('ReportSelector')) {
class ReportSelector {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int[]
     */
    public $reportIds;

    /**
     * @var int[]
     */
    public $reportJobIds;

    /**
     * @var string Enum: COMPLETED, IN_PROGRESS, FAILED
     */
    public $reportJobStatuses;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'ReportSelector';
    }

    /**
     * @param int $accountId
     * @param int[] $reportIds
     * @param int[] $reportJobIds
     * @param string $reportJobStatuses
     * @param Paging $paging
     */
    public function __construct($accountId = NULL, $reportIds = NULL, $reportJobIds = NULL, $reportJobStatuses = NULL, $paging = NULL) {
        if (get_parent_class('ReportSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->reportIds = $reportIds;
        $this->reportJobIds = $reportJobIds;
        $this->reportJobStatuses = $reportJobStatuses;
        $this->paging = $paging;
    }
}}

if (!class_exists('ReportDownloadUrlSelector')) {
class ReportDownloadUrlSelector {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int[]
     */
    public $reportJobIds;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'ReportDownloadUrlSelector';
    }

    /**
     * @param int $accountId
     * @param int[] $reportJobIds
     * @param Paging $paging
     */
    public function __construct($accountId = NULL, $reportJobIds = NULL, $paging = NULL) {
        if (get_parent_class('ReportDownloadUrlSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->reportJobIds = $reportJobIds;
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
        if (get_parent_class('Paging')) self::__construct();
        $this->startIndex = $startIndex;
        $this->numberResults = $numberResults;
    }
}}

if (!class_exists('ReportRecord')) {
class ReportRecord {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $reportJobId;

    /**
     * @var int
     */
    public $reportId;

    /**
     * @var string
     */
    public $reportName;

    /**
     * @var string
     */
    public $requestTime;

    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var string Enum: TODAY, YESTERDAY, LAST_7_DAYS, LAST_WEEK, LAST_14_DAYS, LAST_30_DAYS,
     * LAST_BUSINESS_WEEK, THIS_MONTH, LAST_MONTH, ALL_TIME, CUSTOM_DATE
     */
    public $dateRangeType;

    /**
     * @var ReportDateRange
     */
    public $dateRange;

    /**
     * @var string Enum: COMPLETED, IN_PROGRESS, FAILED
     */
    public $status;

    public function getXsiTypeName() {
        return 'ReportRecord';
    }

    /**
     * @param int $accountId
     * @param int $reportJobId
     * @param int $reportId
     * @param string $reportName
     * @param string $requestTime
     * @param string $completeTime
     * @param string $dateRangeType
     * @param ReportDateRange $dateRange
     * @param string $status
     */
    public function __construct($accountId = NULL, $reportJobId = NULL, $reportId = NULL, $reportName = NULL,
        $requestTime = NULL, $completeTime = NULL, $dateRangeType = NULL, $dateRange = NULL, $status = NULL
    ) {
        if (get_parent_class('ReportRecord')) parent::__construct();
        $this->accountId = $accountId;
        $this->reportJobId = $reportJobId;
        $this->reportId = $reportId;
        $this->reportName = $reportName;
        $this->requestTime = $requestTime;
        $this->completeTime = $completeTime;
        $this->dateRangeType = $dateRangeType;
        $this->dateRange = $dateRange;
        $this->status = $status;
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

if (!class_exists('ReportPage')) {
class ReportPage extends Page {
    /**
     * @var ReportValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'ReportPage';
    }

    /**
     * @param ReportValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('ReportPage')) parent::__construct();
        $this->values = $values;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}}

if (!class_exists('ReportDownloadUrlPage')) {
class ReportDownloadUrlPage extends Page {
    /**
     * @var ReportDownloadUrlValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'ReportDownloadUrlPage';
    }

    /**
     * @param ReportDownloadUrlValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('ReportDownloadUrlPage')) parent::__construct();
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

if (!class_exists('ReportValues')) {
class ReportValues extends ReturnValue {
    /**
     * @var ReportRecord
     */
    public $campaign;

    public function getXsiTypeName() {
        return 'ReportValues';
    }

    /**
     * @param ReportRecord $campaign
     * @param boolean $operationSucceeded
     * @param Error[] $error
     */
    public function __construct($campaign = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('ReportValues')) parent::__construct();
        $this->campaign = $campaign;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('ReportDownloadUrlValues')) {
class ReportDownloadUrlValues extends ReturnValue {
    /**
     * @var ReportDownloadUrl
     */
    public $campaign;

    public function getXsiTypeName() {
        return 'ReportDownloadUrlValues';
    }

    /**
     * @param ReportDownloadUrl $campaign
     * @param boolean $operationSucceeded
     * @param Error[] $error
     */
    public function __construct($campaign = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('ReportDownloadUrlValues')) parent::__construct();
        $this->campaign = $campaign;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('ReportDownloadUrl')) {
class ReportDownloadUrl extends ReportRecord {
    /**
     * @var string
     */
    public $downloadUrl;

    public function getXsiTypeName() {
        return 'ReportDownloadUrl';
    }

    /**
     * @param string $downloadUrl
     * @param int $accountId
     * @param int $reportJobId
     * @param int $reportId
     * @param string $reportName
     * @param string $requestTime
     * @param string $completeTime
     * @param string $dateRangeType
     * @param ReportDateRange $dateRange
     * @param string $status
     */
    public function __construct($downloadUrl = NULL,
        $accountId = NULL, $reportJobId = NULL, $reportId = NULL, $reportName = NULL,
        $requestTime = NULL, $completeTime = NULL, $dateRangeType = NULL, $dateRange = NULL, $status = NULL
    ) {
        if (get_parent_class('ReportDownloadUrl')) parent::__construct();
        $this->downloadUrl = $downloadUrl;
        $this->accountId = $accountId;
        $this->reportJobId = $reportJobId;
        $this->reportId = $reportId;
        $this->reportName = $reportName;
        $this->requestTime = $requestTime;
        $this->completeTime = $completeTime;
        $this->dateRangeType = $dateRangeType;
        $this->dateRange = $dateRange;
        $this->status = $status;
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

if (!class_exists('ReportOperation')) {
class ReportOperation extends Operation {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var ReportRecord[]
     */
    public $operand;

    public function getXsiTypeName() {
        return 'ReportOperation';
    }

    /**
     * @param int $accountId
     * @param ReportRecord[] $operand
     * @param string $operator
     */
    public function __construct($accountId = NULL, $operand = NULL, $operator = NULL) {
        if (get_parent_class('ReportOperation')) parent::__construct();
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

if (!class_exists('ReportReturnValue')) {
class ReportReturnValue extends ListReturnValue {
    /**
     * @var ReportValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'ReportReturnValue';
    }

    /**
     * @param ReportValues[] $values
     * @param string $ListReturnValueType
     * @param string $OperationType
     */
    public function __construct($values = NULL, $ListReturnValueType = NULL, $OperationType = NULL) {
        if (get_parent_class('ReportReturnValue')) parent::__construct();
        $this->values = $values;
        $this->ListReturnValueType = $ListReturnValueType;
        $this->OperationType = $OperationType;
    }
}}

if (!class_exists('ReportServiceGet')) {
class ReportServiceGet {
    /**
     * @var ReportSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'ReportServiceGet';
    }

    /**
     * @param ReportSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('ReportServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('ReportServiceGetResponse')) {
class ReportServiceGetResponse {
    /**
     * @var ReportPage
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'ReportServiceGetResponse';
    }

    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('ReportServiceGetResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('ReportServiceGetDownloadUrl')) {
class ReportServiceGetDownloadUrl {
    /**
     * @var ReportDownloadUrlSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'ReportServiceGetDownloadUrl';
    }

    /**
     * @param ReportDownloadUrlSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('ReportServiceGetDownloadUrl')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('ReportServiceGetDownloadUrlResponse')) {
class ReportServiceGetDownloadUrlResponse {
    /**
     * @var ReportDownloadUrlPage
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'ReportServiceGetDownloadUrlResponse';
    }

    /**
     * @param ReportDownloadUrlPage $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('ReportServiceGetDownloadUrlResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('ReportServiceMutate')) {
class ReportServiceMutate {
    /**
     * @var ReportOperation
     */
    public $operations;

    public function getXsiTypeName() {
        return 'ReportServiceMutate';
    }

    public function __construct($operations) {
        if (get_parent_class('ReportServiceMutate')) parent::__construct();
        $this->operations = $operations;
    }
}}

if (!class_exists('ReportServiceMutateResponse')) {
class ReportServiceMutateResponse {
    /**
     * @var ReportReturnValue
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'ReportServiceMutateResponse';
    }

    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('ReportServiceMutateResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('ReportService')) {
class ReportService extends SponsoredSearchClient {
    const SERVICE_NAME = 'ReportService';

    public static $classmap = array(
        'ReportSelector' => 'ReportSelector',
        'ReportDownloadUrlSelector' => 'ReportDownloadUrlSelector',
        'Paging' => 'Paging',
        'ReportJobStatus' => 'ReportJobStatus',
        'ReportRecord' => 'ReportRecord',
        'ReportDateRangeType' => 'ReportDateRangeType',
        'ReportDateRange' => 'ReportDateRange',
        'ReportPage' => 'ReportPage',
        'ReportDownloadUrlPage' => 'ReportDownloadUrlPage',
        'ReportValues' => 'ReportValues',
        'ReportDownloadUrlValues' => 'ReportDownloadUrlValues',
        'ReportDownloadUrl' => 'ReportDownloadUrl',
        'ReturnValue' => 'ReturnValue',
        'Page' => 'Page',
        'ReportOperation' => 'ReportOperation',
        'Operation' => 'Operation',
        'ReportReturnValue' => 'ReportReturnValue',
        'ListReturnValue' => 'ListReturnValue',
        'get' => 'ReportServiceGet',
        'getResponse' => 'ReportServiceGetResponse',
        'getDownloadUrl' => 'ReportServiceGetDownloadUrl',
        'getDownloadUrlResponse' => 'ReportServiceGetDownloadUrlResponse',
        'mutate' => 'ReportServiceMutate',
        'mutateResponse' => 'ReportServiceMutateResponse',
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
     * @param ReportSelector $selector
     */
    public function get($selector) {
        $arg = new ReportServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param ReportDownloadUrlSelector $selector
     */
    public function getDownloadUrl($selector) {
        $arg = new ReportServiceGetDownloadUrl($selector);
        try {
            $response = $this->soapCall('getDownloadUrl', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param ReportOperation $operations
     */
    public function mutate($operations) {
        $arg = new ReportServiceMutate($operations);
        try {
            $response = $this->soapCall('mutate', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}
