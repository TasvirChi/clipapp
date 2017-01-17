<?php
require_once(dirname(__FILE__) . "/../BorhanClientBase.php");
require_once(dirname(__FILE__) . "/../BorhanEnums.php");
require_once(dirname(__FILE__) . "/../BorhanTypes.php");

class BorhanStatsKey extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $parentId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $isLeaf = null;


}

class BorhanStatsKeyListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanStatsKey
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}


class BorhanStatskeyService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function listDescendants($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("statskey_statskey", "listDescendants", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStatsKeyListResponse");
		return $resultObject;
	}
}
class BorhanStatskeyClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanStatskeyClientPlugin
	 */
	protected static $instance;

	/**
	 * @var BorhanStatskeyService
	 */
	public $Statskey = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->Statskey = new BorhanStatskeyService($client);
	}

	/**
	 * @return BorhanStatskeyClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		if(!self::$instance)
			self::$instance = new BorhanStatskeyClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'Statskey' => $this->Statskey,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'statskey';
	}
}

