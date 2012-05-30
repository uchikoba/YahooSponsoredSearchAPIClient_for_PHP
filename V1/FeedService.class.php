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

if (!class_exists('FeedDataUploadTokenUrlSelector')) {
class FeedDataUploadTokenUrlSelector {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var boolean
     */
    public $zipped;

    /**
     * @var boolean
     */
    public $doUpload;

    public function getXsiTypeName() {
        return 'FeedDataUploadTokenUrlSelector';
    }

    /**
     * @param int $accountId
     * @param boolean $zipped
     * @param boolean $doUpload
     */
    public function __construct($accountId = NULL, $zipped = NULL, $doUpload = NULL) {
        if (get_parent_class('FeedDataUploadTokenUrlSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->zipped = $zipped;
        $this->doUpload = $doUpload;
    }
}}

if (!class_exists('FeedServiceGetFeedDataUploadTokenUrl')) {
class FeedServiceGetFeedDataUploadTokenUrl {
    /**
     * @var FeedDataUploadTokenUrlSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'FeedServiceGetFeedDataUploadTokenUrl';
    }

    /**
     * @param FeedDataUploadTokenUrlSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('FeedServiceGetFeedDataUploadTokenUrl')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('FeedDataUploadTokenUrlValue')) {
class FeedDataUploadTokenUrlValue extends ReturnValue {
    /**
     * @var int
     */
    public $reqId;

    /**
     * @var string
     */
    public $url;

    public function getXsiTypeName() {
        return 'FeedDataUploadTokenUrlValue';
    }

    /**
     * @param int $reqId
     * @param string $url
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($reqId = NULL, $url = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('FeedDataUploadTokenUrlValue')) parent::__construct();
        $this->reqId = $reqId;
        $this->url = $url;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('FeedServiceGetFeedDataUploadTokenUrlResponse')) {
class FeedServiceGetFeedDataUploadTokenUrlResponse {
    /**
     * @var FeedDataUploadTokenUrlValue
     */
    public $rval;

    public function getXsiTypeName() {
        return 'FeedServiceGetFeedDataUploadTokenUrlResponse';
    }

    public function __construct($rval = NULL) {
        if (get_parent_class('FeedServiceGetFeedDataUploadTokenUrlResponse')) parent::__construct();
        $this->rval = $rval;
    }
}}

if (!class_exists('BulkDownloadStatusSelector')) {
class BulkDownloadStatusSelector {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $reqId;

    public function getXsiTypeName() {
        return 'BulkDownloadStatusSelector';
    }

    /**
     * @param int $accountId
     * @param int $reqId
     */
    public function __construct($accountId = NULL, $reqId = NULL) {
        if (get_parent_class('BulkDownloadStatusSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->reqId = $reqId;
    }
}}

if (!class_exists('FeedServiceGetBulkDownloadStatus')) {
class FeedServiceGetBulkDownloadStatus {
    /**
     * @var BulkDownloadStatusSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'FeedServiceGetBulkDownloadStatus';
    }

    /**
     * @param BulkDownloadStatusSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('FeedServiceGetBulkDownloadStatus')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('BulkDownloadStatusValue')) {
class BulkDownloadStatusValue extends ReturnValue {
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var Enum: INCOMPLETED, COMPLETED, FAILED
     */
    public $status;

    public function getXsiTypeName() {
        return 'BulkDownloadStatusValue';
    }

    /**
     * @param string $downloadUrl
     * @param Enum $status
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($downloadUrl = NULL, $status = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('BulkDownloadStatusValue')) parent::__construct();
        $this->downloadUrl = $downloadUrl;
        $this->status = $status;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('FeedServiceGetBulkDownloadStatusResponse')) {
class FeedServiceGetBulkDownloadStatusResponse {
    /**
     * @var BulkDownloadStatusValue
     */
    public $rval;

    public function getXsiTypeName() {
        return 'FeedServiceGetBulkDownloadStatusResponse';
    }

    /**
     * @param BulkDownloadStatusValue $rval
     */
    public function __construct($rval = NULL) {
        if (get_parent_class('FeedServiceGetBulkDownloadStatusResponse')) parent::__construct();
        $this->rval = $rval;
    }
}}

if (!class_exists('LastBulkDownloadUrlSelector')) {
class LastBulkDownloadUrlSelector {
    /**
     * @var int
     */
    public $accountId;

    public function getXsiTypeName() {
        return 'LastBulkDownloadUrlSelector';
    }

    /**
     * @param int $accountId
     */
    public function __construct($accountId = NULL) {
        if (get_parent_class('LastBulkDownloadUrlSelector')) parent::__construct();
        $this->accountId = $accountId;
    }
}}

if (!class_exists('FeedServiceGetLastBulkDownloadUrl')) {
class FeedServiceGetLastBulkDownloadUrl {
    /**
     * @var LastBulkDownloadUrlSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'FeedServiceGetLastBulkDownloadUrl';
    }

    /**
     * @param LastBulkDownloadUrlSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('FeedServiceGetLastBulkDownloadUrl')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('LastBulkDownloadUrlValue')) {
class LastBulkDownloadUrlValue extends ReturnValue {
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var Enum: INCOMPLETED, COMPLETED, FAILED
     */
    public $status;

    /**
     * @var int
     */
    public $reqId;

    /**
     * @var DateTime
     */
    public $runTime;

    public function getXsiTypeName() {
        return 'LastBulkDownloadUrlValue';
    }

    /**
     * @param string $downloadUrl
     * @param Enum $status
     * @param int $reqId
     * @param DateTime $runTime
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($downloadUrl = NULL, $status = NULL, $reqId = NULL, $runTime = NULL,
        $operationSucceeded = NULL, $error = NULL
    ) {
        if (get_parent_class('LastBulkDownloadUrlValue')) parent::__construct();
        $this->downloadUrl = $downloadUrl;
        $this->status = $status;
        $this->reqId = $reqId;
        $this->runTime = $runTime;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('FeedServiceGetLastBulkDownloadUrlResponse')) {
class FeedServiceGetLastBulkDownloadUrlResponse {
    /**
     * @var LastBulkDownloadUrlValue
     */
    public $rval;

    public function getXsiTypeName() {
        return 'FeedServiceGetLastBulkDownloadUrlResponse';
    }

    /**
     * @param LastBulkDownloadUrlValue $rval
     */
    public function __construct($rval = NULL) {
        if (get_parent_class('FeedServiceGetLastBulkDownloadUrlResponse')) parent::__construct();
        $this->rval = $rval;
    }
}}

if (!class_exists('BulkUploadUrlSelector')) {
class BulkUploadUrlSelector {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var boolean
     */
    public $zipped;

    public function getXsiTypeName() {
        return 'BulkUploadUrlSelector';
    }

    /**
     * @param int $accountId
     * @param boolean $zipped
     */
    public function __construct($accountId = NULL, $zipped = NULL) {
        if (get_parent_class('BulkUploadUrlSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->zipped = $zipped;
    }
}}

if (!class_exists('FeedServiceGetBulkUploadUrl')) {
class FeedServiceGetBulkUploadUrl {
    /**
     * @var BulkUploadUrlSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'FeedServiceGetBulkUploadUrl';
    }

    /**
     * @param BulkUploadUrlSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('FeedServiceGetBulkUploadUrl')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('BulkUploadUrlValue')) {
class BulkUploadUrlValue extends ReturnValue {
    /**
     * @var int
     */
    public $reqId;

    /**
     * @var string
     */
    public $url;

    public function getXsiTypeName() {
        return 'BulkUploadUrlValue';
    }

    /**
     * @param int $reqId
     * @param string $url
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($reqId = NULL, $url = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('BulkUploadUrlValue')) parent::__construct();
        $this->reqId = $reqId;
        $this->url = $url;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('FeedServiceGetBulkUploadUrlResponse')) {
class FeedServiceGetBulkUploadUrlResponse {
    /**
     * @var BulkUploadUrlValue
     */
    public $rval;

    public function getXsiTypeName() {
        return 'FeedServiceGetBulkUploadUrlResponse';
    }

    public function __construct($rval = NULL) {
        if (get_parent_class('FeedServiceGetBulkUploadUrlResponse')) parent::__construct();
        $this->rval = $rval;
    }
}}

if (!class_exists('BulkUploadStatusSelector')) {
class BulkUploadStatusSelector {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $reqId;

    public function getXsiTypeName() {
        return 'BulkUploadStatusSelector';
    }

    /**
     * @param int $accountId
     * @param int $reqId
     */
    public function __construct($accountId = NULL, $reqId = NULL) {
        if (get_parent_class('BulkUploadStatusSelector')) parent::__construct();
        $this->accountId = $accountId;
        $this->reqId = $reqId;
    }
}}

if (!class_exists('FeedServiceGetBulkUploadStatus')) {
class FeedServiceGetBulkUploadStatus {
    /**
     * @var BulkUploadStatusSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'FeedServiceGetBulkUploadStatus';
    }

    /**
     * @param BulkUploadStatusSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('FeedServiceGetBulkUploadStatus')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('BulkUploadStatusValue')) {
class BulkUploadStatusValue extends ReturnValue {
    /**
     * @var int
     */
    public $reqId;

    /**
     * @var Enum: INCOMPLETED, COMPLETED, FAILED
     */
    public $status;

    public function getXsiTypeName() {
        return 'BulkUploadStatusValue';
    }

    /**
     * @param int $reqId
     * @param Enum $status
     * @param boolean $operationSucceeded
     * @param Error $error
     */
    public function __construct($reqId = NULL, $status = NULL, $operationSucceeded = NULL, $error = NULL) {
        if (get_parent_class('BulkUploadStatusValue')) parent::__construct();
        $this->reqId = $reqId;
        $this->status = $status;
        $this->operationSucceeded = $operationSucceeded;
        $this->error = $error;
    }
}}

if (!class_exists('FeedServiceGetBulkUploadStatusResponse')) {
class FeedServiceGetBulkUploadStatusResponse {
    /**
     * @var BulkUploadStatusValue
     */
    public $rval;

    public function getXsiTypeName() {
        return 'FeedServiceGetBulkUploadStatusResponse';
    }

    /**
     * @param BulkUploadStatusValue $rval
     */
    public function __construct($rval = NULL) {
        if (get_parent_class('FeedServiceGetBulkUploadStatusResponse')) parent::__construct();
        $this->rval = $rval;
    }
}}

if (!class_exists('FeedServiceFlushCurrentJob')) {
class FeedServiceFlushCurrentJob {
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $reqId;

    public function getXsiTypeName() {
        return 'FeedServiceFlushCurrentJob';
    }

    /**
     * @param int $accountId
     * @param int $reqId
     */
    public function __construct($accountId = NULL, $reqId = NULL) {
        if (get_parent_class('FeedServiceFlushCurrentJob')) parent::__construct();
        $this->accountId = $accountId;
        $this->reqId = $reqId;
    }
}}

if (!class_exists('FeedServiceFlushCurrentJobResponse')) {
class FeedServiceFlushCurrentJobResponse {
    /**
     * @var ReturnValue
     */
    public $rval;

    public function getXsiTypeName() {
        return 'FeedServiceFlushCurrentJobResponse';
    }

    /**
     * @param ReturnValue $rval
     */
    public function __construct($rval = NULL) {
        if (get_parent_class('FeedServiceFlushCurrentJobResponse')) parent::__construct();
        $this->rval = $rval;
    }
}}

if (!class_exists('FeedService')) {
class FeedService extends SponsoredSearchClient {
    const SERVICE_NAME = 'FeedService';

    public static $classmap = array(
        'ReturnValue' => 'ReturnValue',
        'FeedDataUploadTokenUrlSelector' => 'FeedDataUploadTokenUrlSelector',
        'getFeedDataUploadTokenUrl' => 'FeedServiceGetFeedDataUploadTokenUrl',
        'FeedDataUploadTokenUrlValue' => 'FeedDataUploadTokenUrlValue',
        'getFeedDataUploadTokenUrlResponse' => 'FeedServiceGetFeedDataUploadTokenUrlResponse',
        'BulkDownloadStatusSelector' => 'BulkDownloadStatusSelector',
        'getBulkDownloadStatus' => 'FeedServiceGetBulkDownloadStatus',
        'BulkDownloadStatusValue' => 'BulkDownloadStatusValue',
        'getBulkDownloadStatusResponse' => 'FeedServiceGetBulkDownloadStatusResponse',
        'LastBulkDownloadUrlSelector' => 'LastBulkDownloadUrlSelector',
        'getLastBulkDownloadUrl' => 'FeedServiceGetLastBulkDownloadUrl',
        'LastBulkDownloadUrlValue' => 'LastBulkDownloadUrlValue',
        'getLastBulkDownloadUrlResponse' => 'FeedServiceGetLastBulkDownloadUrlResponse',
        'BulkUploadUrlSelector' => 'BulkUploadUrlSelector',
        'getBulkUploadUrl' => 'FeedServiceGetBulkUploadUrl',
        'BulkUploadUrlValue' => 'BulkUploadUrlValue',
        'getBulkUploadUrlResponse' => 'FeedServiceGetBulkUploadUrlResponse',
        'BulkUploadStatusSelector' => 'BulkUploadStatusSelector',
        'getBulkUploadStatus' => 'FeedServiceGetBulkUploadStatus',
        'BulkUploadStatusValue' => 'BulkUploadStatusValue',
        'getBulkUploadStatusResponse' => 'FeedServiceGetBulkUploadStatusResponse',
        'flushCurrentJob' => 'FeedServiceFlushCurrentJob',
        'flushCurrentJobResponse' => 'FeedServiceFlushCurrentJobResponse',
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
     * @param FeedDataUploadTokenUrlSelector $selector
     */
    public function getFeedDataUploadTokenUrl($selector) {
        $arg = new FeedServiceGetFeedDataUploadTokenUrl($selector);
        try {
            $response = $this->soapCall('getFeedDataUploadTokenUrl', $arg);
            if ($response->error) {
                throw new Exception(
                    $response->error->message . ' ' . $response->error->detail->requestKey,
                    $response->error->code);
            }
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param BulkDownloadStatusSelector $selector
     */
    public function getBulkDownloadStatus($selector) {
        $arg = new FeedServiceGetBulkDownloadStatus($selector);
        try {
            $response = $this->soapCall('getBulkDownloadStatus', $arg);
            if ($response->error) {
                throw new Exception(
                    $response->error->message . ' ' . $response->error->detail->requestKey,
                    $response->error->code);
            }
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param LastBulkDownloadUrlSelector $selector
     */
    public function getLastBulkDownloadUrl($selector) {
        $arg = new FeedServiceGetLastBulkDownloadUrl($selector);
        try {
            $response = $this->soapCall('getLastBulkDownloadUrl', $arg);
            if ($response->error) {
                throw new Exception(
                    $response->error->message . ' ' . $response->error->detail->requestKey,
                    $response->error->code);
            }
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param BulkUploadUrlSelector $selector
     */
    public function getBulkUploadUrl($selector) {
        $arg = new FeedServiceGetBulkUploadUrl($selector);
        try {
            $response = $this->soapCall('getBulkUploadUrl', $arg);
            if ($response->error) {
                throw new Exception(
                    $response->error->message . ' ' . $response->error->detail->requestKey,
                    $response->error->code);
            }
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param BulkUploadStatusSelector $selector
     */
    public function getBulkUploadStatus($selector) {
        $arg = new FeedServiceGetBulkUploadStatus($selector);
        try {
            $response = $this->soapCall('getBulkUploadStatus', $arg);
            if ($response->error) {
                throw new Exdeption(
                    $response->error->message . ' ' . $response->error->detail->requestKey,
                    $response->error->code);
            }
            return $response->rval;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @param int $accountId
     * @param int $reqId
     */
    public function flushCurrentJob($accountId, $reqId) {
        $arg = new FeedServiceFlushCurrentJob($accountId, $reqId);
        try {
            $response = $this->soapCall('flushCurrentJob', $arg);
            if ($response->error) {
                throw new Exception(
                    $response->error->message . ' ' . $response->error->detail->requestKey,
                    $response->error->code);
            }
            return $response->operationSucceeded;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}
