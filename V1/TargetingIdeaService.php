<?php

require_once dirname(__FILE__) . '/SponsoredSearchClient.class.php';

//
if(!class_exists('TargetingIdeaSelector')) {
class TargetingIdeaSelector {
    /**
     * @var SearchParameter[]
     */
    public $searchParameter;

    /**
     * @var Paging
     */
    public $paging;


    public function getXsiTypeName() {
        return 'TargetingIdeaSelector';
    }

    /**
     * コンストラクタ
     * @param unknown_type $searchParameter
     * @param unknown_type $paging
     */
    public function __construct($searchParameter = NULL, $paging = NULL) {
        if(get_parent_class('TargetingIdeaSelector')) parent::__construct;
        $this->searchParameter = $searchParameter;
        $this->paging = $paging;
    }
}}

if (!class_exists('Paging')) {
class Paging {
    /**
     * ページの先頭のインデックス
     * @var int
     */
    public $startIndex;

    /**
     * ページの最大件数
     * @var int
     */
    public $numberResults;

    public function getXsiTypeName() {
        return 'Paging';
    }

    /**
     * コンストラクタ
     * @param int $startIndex
     * @param int $numberResults
     */
    public function __construct($startIndex = NULL, $numberResults = NULL) {
        if(get_parent_class('Paging')) parent::__construct();
        $this->startIndex = $startIndex;
        $this->numberResults = $numberResults;
    }
}}

if (!class_exists("ProposalKeyword")) {
class ProposalKeyword {
  /**
   * @var CriterionType
   */
  public $type;

  /**
   * @var string
   */
  public $text;

  /**
   * @var KeywordMatchType
   */
  public $matchType;

  public function getXsiTypeName() {
    return "ProposalKeyword";
  }

  public function __construct($type = NULL, $text = NULL, $matchType = NULL) {
    if(get_parent_class('ProposalKeyword')) parent::__construct();
    $this->text = $text;
    $this->matchType = $matchType;
  }
}}

if (!class_exists('SearchParameter')) {
class SearchParameter {
    /**
    * @var string
    */
    public $searchParameterUse;

/*
    private $_parameterMap = array (
        "SearchParameter.Use" => "SearchParameterUse",
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
*/

    public function getXsiTypeName() {
        return "SearchParameter";
    }

    public function __construct($searchParameterUse = NULL) {
        if(get_parent_class('SearchParameter')) parent::__construct();
        $this->searchParameterUse = $searchParameterUse;
    }
}}

if (!class_exists('RelatedToKeywordSearchParameter')) {
class RelatedToKeywordSearchParameter extends SearchParameter {
    /**
     * @var ProposalKeyword[]
     */
    public $keywords;

    public function getXsiTypeName() {
        return "RelatedToKeywordSearchParameter";
    }

    public function __construct($keywords = NULL, $SearchParameterUse = NULL) {
        if(get_parent_class('RelatedToKeywordSearchParameter')) parent::__construct();
        $this->keywords = $keywords;
        $this->searchParameterUse = $SearchParameterUse;
    }
}}


if (!class_exists('RelatedToUrlSearchParameter')) {
class RelatedToUrlSearchParameter extends SearchParameter {
    /**
     * @var string
     */
    public $url;

    /**
     * @var boolean
     */
    public $includeSubUrls;

    public function getXsiTypeName() {
        return "RelatedToUrlSearchParameter";
    }

    public function __construct($url = NULL, $includeSubUrls = NULL, $SearchParameterUse = NULL) {
        if(get_parent_class('RelatedToUrlSearchParameter')) parent::__construct();
        $this->url = $url;
        $this->includeSubUrls = $includeSubUrls;
        $this->searchParameterUse = $SearchParameterUse;
    }
}}

if (!class_exists('ExcludedKeywordSearchParameter')) {
class ExcludedKeywordSearchParameter extends SearchParameter {
  /**
   * @var ProposalKeyword
   */
  public $keywords;

  public function getXsiTypeName() {
    return "ExcludedKeywordSearchParameter";
  }

  public function __construct($keywords = NULL, $SearchParameterUse = NULL) {
    if(get_parent_class('ExcludedKeywordSearchParameter')) parent::__construct();
    $this->keywords = $keywords;
    $this->searchParameterUse = $SearchParameterUse;
  }
}}

if (!class_exists('TargetingIdeaValues')) {
class TargetingIdeaValues {
  /**
   * @var TypeAttributeMapEntry
   */
  public $data;

  public function getXsiTypeName() {
    return "TargetingIdeaValues";
  }

  public function __construct($data = NULL) {
    if(get_parent_class('TargetingIdeaValues')) parent::__construct();
    $this->data = $data;
  }
}}


if (!class_exists('TargetingIdeaPage')) {
class TargetingIdeaPage {
  /**
   * @var TargetingIdeaValues[]
   */
  public $values;

  public function getXsiTypeName() {
    return "TargetingIdeaPage";
  }

  public function __construct($values = NULL) {
    if(get_parent_class('TargetingIdeaPage')) parent::__construct();
    $this->values = $values;
  }
}}

//
if(!class_exists('TargetingIdeaServiceGet')) {
class TargetingIdeaServiceGet {

    /**
     * @var TargetingIdeaSelector
     */
    public $selector;

    public function getXsiTypeName() {
        return 'TargetingIdeaServiceGet';
    }

    /**
     * @param TargetingIdeaSelector $selector
     */
    public function __construct($selector = NULL) {
        if (get_parent_class('TargetingIdeaServiceGet')) parent::__construct();
        $this->selector = $selector;
    }
}}

if (!class_exists('TargetingIdeaServiceGetResponse')) {
class TargetingIdeaServiceGetResponse {
  /**
   * @var TargetingIdeaPage
   */
  public $rval;

  public function getXsiTypeName() {
    return 'TargetingIdeaServiceGetResponse';
  }

  public function __construct($rval = NULL) {
    if(get_parent_class('TargetingIdeaServiceGetResponse')) parent::__construct();
    $this->rval = $rval;
  }
}}

/**
 * Yahoo!スポンサードサーチAPI TargetingIdeaService SOAPクライアント
 *
 * @package     YahooSponsoredSearch
 * @subpackage  V1
 * @copyright   2011, GMO NIKKO Inc. All Rights Reserved.
 * @author      Nobuhiko Yuasa <n-Yuasa@koukoku.jp>
 */
if(!class_exists('TargetingIdeaService')) {
class TargetingIdeaService extends SponsoredSearchClient {

    /**
     * @var string
     */
    const SERVICE_NAME = 'TargetingIdeaService';

    /**
     * @var array
     */
    public static $classmap = array(
        'TargetingIdeaSelector' => 'TargetingIdeaSelector',
        'Paging' => 'Paging',
        'ProposalKeyword' => 'ProposalKeyword',
        'RelatedToKeywordSearchParameter' => 'RelatedToKeywordSearchParameter',
        'RelatedToUrlSearchParameter' => 'RelatedToUrlSearchParameter',
        'ExcludedKeywordSearchParameter' => 'ExcludedKeywordSearchParameter',
        'TargetingIdeaValues' => 'TargetingIdeaValues',
        'TargetingIdeaPage' => 'TargetingIdeaPage',
        'get' => 'TargetingIdeaServiceGet',
        'getResponse' => 'TargetingIdeaServiceGetResponse'
    );

    public function __construct($version = NULL,
        $authenticationIniFile = NULL,
        $licenseKey = NULL, $apiAccountID = NULL, $apiAccountPassword = NULL,
        $accountID = NULL, $username = NULL, $password = NULL) {

        parent::__construct(self::SERVICE_NAME, $version, self::$classmap,
            $authenticationIniFile,
            $licenseKey, $apiAccountID, $apiAccountPassword,
            $accountID, $username, $password);

    }

    /**
     * @param TargetingIdeaSelector $selector
     */
    public function get($selector) {
        $arg = new TargetingIdeaServiceGet($selector);
        try {
            $response = $this->soapCall('get', $arg);
            return $response->rval;
        }catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}}