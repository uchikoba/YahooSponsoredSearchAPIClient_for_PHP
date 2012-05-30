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
     * @param int $PageType
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

if (!class_exists('AdGroupAdSelector')) {
class AdGroupAdSelector {
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
    public $adIds;

    /**
     * @var string[] Enum: ACTIVE, PAUSED
     */
    public $userStatuses;

    /**
     * @var string[] Enum: APPROVED, APPROVED_WITH_REVIEW, REVIEW, PRE_DISAPPROVED, POST_DISAPPROVED
     */
    public $approvalStatuses;

    /**
     * @var Paging
     */
    public $paging;

    public function getXsiTypeName() {
        return 'AdGroupAdSelector';
    }

    /**
     * @param int $accountId
     * @param int[] $campaignIds
     * @param int[] $adGroupIds
     * @param int[] $adIds
     * @param string $userStatuses
     * @param string $approvalStatuses
     * @param Paging $paging
     */
    public function __construct($accountId = NULL, $campaignIds = NULL, $adGroupIds = NULL,
        $adIds = NULL, $userStatuses = NULL, $approvalStatuses = NULL, $paging = NULL
    ) {
        if (get_parent_class('AdGroupAdSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignIds = $campaignIds;
        $this->adGroupIds = $adGroupIds;
        $this->adIds = $adIds;
        $this->userStatuses = $userStatuses;
        $this->approvalStatuses = $approvalStatuses;
        $this->paging = $paging;
    }
}}

if (!class_exists('AdGroupAdPage')) {
class AdGroupAdPage extends Page {
    /**
     * @var AdGroupAdValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'AdGroupAdPage';
    }

    /**
     * @param AdgroupAdValues[] $values
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($values = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        if (get_parent_class('AdGroupAdPage')) prent::__construct();
        $this->values = $values;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}}

if (!class_exists('AdGroupAdValues')) {
class AdGroupAdValues extends ReturnValue {
    /**
     * @var AdGroupAd
     */
    public $adGroupAd;

    public function getXsiTypeName() {
        return 'AdGroupAdValues';
    }

    /**
     * @param AdGroupAd $adGroupAd
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($adGroupAd = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('AdGroupAdValues')) parent::__construct();
        $this->adGroupAd = $adGroupAd;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('AdGroupAd')) {
class AdGroupAd {
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
     * @var int
     */
    public $adId;

    /**
     * @var int
     */
    public $adTrackId;

    /**
     * @var string
     */
    public $adName;

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
     * @var Ad
     */
    public $ad;

    public function getXsiTypeName() {
        return 'AdGroupAd';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param string $campaignName
     * @param int $adGroupId
     * @param string $adGroupName
     * @param int $adId
     * @param int $adTrackId
     * @param string $adName
     * @param string $userStatus
     * @param string $approvalStatus
     * @param string[] $disapprovalReasonCodes
     * @param Ad $ad
     */
    public function __construct($accountId = NULL, $campaignId = NULL, $campaignName = NULL,
        $adGroupId = NULL, $adGroupName = NULL, $adId = NULL, $adTrackId = NULL, $adName = NULL,
        $userStatus = NULL, $approvalStatus = NULL, $disapprovalReasonCodes = NULL, $ad = NULL
    ) {
        if (get_parent_class('AdGroupAd')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->adGroupId = $adGroupId;
        $this->adGroupName = $adGroupName;
        $this->adId = $adId;
        $this->adTrackId = $adTrackId;
        $this->adName = $adName;
        $this->userStatus = $userStatus;
        $this->approvalStatus = $approvalStatus;
        $this->disapprovalReasonCodes = $disapprovalReasonCodes;
        $this->ad = $ad;
    }
}}

if (!class_exists('Ad')) {
class Ad {
    /**
     * @var string Enum: TEXT_AD, MOBILE_AD
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $displayUrl;

    /**
     * @var string
     */
    public $headline;

    /**
     * @var string
     */
    public $landingUrl;

    /**
     * @var string
     */
    public $description;

    public function getXsiTypeName() {
        return 'Ad';
    }

    /**
     * @param string $type
     * @param string $url
     * @param string $displayUrl
     * @param string $headline
     * @param string $landingUrl
     * @param string $description
     */
    public function __construct($type = NULL, $url = NULL, $displayUrl = NULL,
        $headline = NULL, $landingUrl = NULL, $description = NULL
    ) {
        if (get_parent_class('Ad')) parent::__construct();
        $this->type = $type;
        $this->url = $url;
        $this->displayUrl = $displayUrl;
        $this->headline = $headline;
        $this->landingUrl = $landingUrl;
        $this->description = $description;
    }
}}

if (!class_exists('TextAd')) {
class TextAd extends Ad {
    public function getXsiTypeName() {
        return 'TextAd';
    }

    /**
     * @param string $type
     * @param string $url
     * @param string $displayUrl
     * @param string $headline
     * @param string $landingUrl
     * @param string $description
     */
    public function __construct($type = NULL, $url = NULL, $displayUrl = NULL,
        $headline = NULL, $landingUrl = NULL, $description = NULL
    ) {
        if (get_parent_class('TextAd')) parent::__construct();
        $this->type = $type;
        $this->url = $url;
        $this->displayUrl = $displayUrl;
        $this->headline = $headline;
        $this->landingUrl = $landingUrl;
        $this->description = $description;
    }
}}

if (!class_exists('MobileAd')) {
class MobileAd extends Ad {
    /**
     * @var string[] Enum: HTML, CHTML, XHTML, WML
     */
    public $markUpLanguages;

    /**
     * @var string[] Enum: DOCOMO, KDDI, SOFTBANK, ALL
     */
    public $mobileCarriers;

    /**
     * @var string
     */
    public $businessName;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $phoneNumber;

    public function getXsiTypeName() {
        return 'MobileAd';
    }

    /**
     * @param string[] $markUpLanguages
     * @param string[] $mobileCarriers
     * @param string $businessName
     * @param string $countryCode
     * @param string $phoneNumber
     * @param string $type
     * @param string $url
     * @param string $displayUrl
     * @param string $headline
     * @param string $landingUrl
     * @param string $description
     */
    public function __construct($markUpLanguages = NULL, $mobileCarriers = NULL,
        $businessName = NULL, $countryCode = NULL, $phoneNumber = NULL,
        $type = NULL, $url = NULL, $displayUrl = NULL,
        $headline = NULL, $landingUrl = NULL, $description = NULL
    ) {
        if (get_parent_class('MobileAd')) parent::__construct();
        $this->markUpLanguages = $markUpLanguages;
        $this->mobileCarriers = $mobileCarriers;
        $this->businessName = $businessName;
        $this->countryCode = $countryCode;
        $this->phoneNumber = $phoneNumber;
        $this->type = $type;
        $this->url = $url;
        $this->displayUrl = $displayUrl;
        $this->headline = $headline;
        $this->landingUrl = $landingUrl;
        $this->description = $description;
    }
}}

if (!class_exists('AdGroupAdOperation')) {
class AdGroupAdOperation extends Operation {
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
     * @var AdGroupAd[]
     */
    public $operand;

    public function getXsiTypeName() {
        return 'AdGroupAdOperation';
    }

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param int $adGroupId
     * @param AdGroupAd[] $operand
     * @param string $operator
     */
    public function __construct($accountId = NULL, $campaignId = NULL, $adGroupId = NULL,
        $operand = NULL, $operator = NULL
    ) {
        if (get_parent_class('AdGroupAdOperation')) parent::__construct();
        $this->accountId = $accountId;
        $this->campaignId = $campaignId;
        $this->adGroupId = $adGroupId;
        $this->operand = $operand;
        $this->operator = $operator;
    }
}}

if (!class_exists('AdGroupAdReturnValue')) {
class AdGroupAdReturnValue extends ListReturnValue {
    /**
     * @var AdGroupAdValues[]
     */
    public $values;

    public function getXsiTypeName() {
        return 'AdGroupAdReturnValue';
    }

    /**
     * @param AdGroupAdValues[] $values
     * @param string $ListReturnValueType
     * @param string $OperationType
     */
    public function __construct($values = NULL, $ListReturnValueType = NULL, $OperationType = NULL) {
        if (get_parent_class('AdGroupAdReturnValue')) parent::__construct();
        $this->values = $values;
        $this->ListReturnValueType = $ListReturnValueType;
        $this->OperationType = $OperationType;
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

if (!class_exists('AdGroupAdServiceGet')) {
class AdGroupAdServiceGet {
    /**
     * @var AdGroupAdSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'AdGroupAdServiceGet';
    }

    /**
     * @param AdGroupAdSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('AdGroupAdServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('AdGroupAdServiceGetResponse')) {
class AdGroupAdServiceGetResponse {
    /**
     * @var AdGroupAdPage
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'AdGroupAdServiceGetResponse';
    }

    /**
     * @param AdGroupAdPage $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('AdGroupAdServiceGetResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('AdGroupAdServiceMutate')) {
class AdGroupAdServiceMutate {
    /**
     * @var AdGroupAdOperation
     */
    public $operations;

    public function getXsiTypeName() {
        return 'AdGroupAdServiceMutate';
    }

    /**
     * @param AdGroupAdOperation $operations
     */
    public function __construct($operations = NULL) {
        if (get_parent_class('AdGroupAdServiceMutate')) parent::__construct();
        $this->operations = $operations;
    }
}}

if (!class_exists('AdGroupAdServiceMutateResponse')) {
class AdGroupAdServiceMutateResponse {
    /**
     * @var AdGroupAdReturnValue
     */
    public $rval;

    /**
     * @var Error[]
     */
    public $error;

    public function getXsiTypeName() {
        return 'AdGroupAdServiceMutateResponse';
    }

    /**
     * @param AdGroupAdReturnValue $rval
     * @param Error[] $error
     */
    public function __construct($rval = NULL, $error = NULL) {
        if (get_parent_class('AdGroupAdServiceMutateResponse')) parent::__construct();
        $this->rval = $rval;
        $this->error = $error;
    }
}}

if (!class_exists('AdGroupAdService')) {
class AdGroupAdService extends SponsoredSearchClient {
    const SERVICE_NAME = 'AdGroupAdService';

    public static $classmap = array(
        'AdGroupAdSelector' => 'AdGroupAdSelector',
        'AdGroupAdPage' => 'AdGroupAdPage',
        'AdGroupAdValues' => 'AdGroupAdValues',
        'AdGroupAd' => 'AdGroupAd',
        'Ad' => 'Ad',
        'TextAd' => 'TextAd',
        'MobileAd' => 'MobileAd',
        'AdGroupAdOperation' => 'AdGroupAdOperation',
        'AdGroupAdReturnValue' => 'AdGroupAdReturnValue',
        'Paging' => 'Paging',
        'ReturnValue' => 'ReturnValue',
        'Page' => 'Page',
        'Operation' => 'Operation',
        'ListReturnValue' => 'ListReturnValue',
        'get' => 'AdGroupAdServiceGet',
        'getResponse' => 'AdGroupAdServiceGetResponse',
        'mutate' => 'AdGroupAdServiceMutate',
        'mutateResponse' => 'AdGroupAdServiceMutateResponse',
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
     * @param AdGroupAdSelector $selector
     */
    public function get($selector) {
        $arg = new AdGroupAdServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param AdGroupAdOperation $operations
     */
    public function mutate($operations) {
        $arg = new AdGroupAdServiceMutate($operations);
        try {
            $response = $this->soapCall('mutate', $arg);
            print "<pre>";var_dump($response);print "</pre>";
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}
