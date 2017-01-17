<?php
require_once(dirname(__FILE__) . "/../BorhanClientBase.php");
require_once(dirname(__FILE__) . "/../BorhanEnums.php");
require_once(dirname(__FILE__) . "/../BorhanTypes.php");

class BorhanInternalToolsSession extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $partner_id = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $valid_until = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partner_pattern = null;

	/**
	 * 
	 *
	 * @var BorhanSessionType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $error = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $rand = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $user = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privileges = null;


}


class BorhanBorhanInternalToolsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}
}

class BorhanBorhanInternalToolsSystemHelperService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function fromSecureString($str)
	{
		$kparams = array();
		$this->client->addParam($kparams, "str", $str);
		$this->client->queueServiceActionCall("borhaninternaltools_borhaninternaltoolssystemhelper", "fromSecureString", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanInternalToolsSession");
		return $resultObject;
	}

	function iptocountry($remote_addr)
	{
		$kparams = array();
		$this->client->addParam($kparams, "remote_addr", $remote_addr);
		$this->client->queueServiceActionCall("borhaninternaltools_borhaninternaltoolssystemhelper", "iptocountry", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function getRemoteAddress()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("borhaninternaltools_borhaninternaltoolssystemhelper", "getRemoteAddress", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}
class BorhanBorhanInternalToolsClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanBorhanInternalToolsClientPlugin
	 */
	protected static $instance;

	/**
	 * @var BorhanBorhanInternalToolsService
	 */
	public $BorhanInternalTools = null;

	/**
	 * @var BorhanBorhanInternalToolsSystemHelperService
	 */
	public $BorhanInternalToolsSystemHelper = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->BorhanInternalTools = new BorhanBorhanInternalToolsService($client);
		$this->BorhanInternalToolsSystemHelper = new BorhanBorhanInternalToolsSystemHelperService($client);
	}

	/**
	 * @return BorhanBorhanInternalToolsClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		if(!self::$instance)
			self::$instance = new BorhanBorhanInternalToolsClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'BorhanInternalTools' => $this->BorhanInternalTools,
			'BorhanInternalToolsSystemHelper' => $this->BorhanInternalToolsSystemHelper,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'BorhanInternalTools';
	}
}

