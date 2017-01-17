<?php
require_once(dirname(__FILE__) . "/../BorhanClientBase.php");
require_once(dirname(__FILE__) . "/../BorhanEnums.php");
require_once(dirname(__FILE__) . "/../BorhanTypes.php");

class BorhanMediaEntryWithDistributionsOrderBy
{
	const MEDIA_TYPE_ASC = "+mediaType";
	const MEDIA_TYPE_DESC = "-mediaType";
	const PLAYS_ASC = "+plays";
	const PLAYS_DESC = "-plays";
	const VIEWS_ASC = "+views";
	const VIEWS_DESC = "-views";
	const DURATION_ASC = "+duration";
	const DURATION_DESC = "-duration";
	const MS_DURATION_ASC = "+msDuration";
	const MS_DURATION_DESC = "-msDuration";
	const NAME_ASC = "+name";
	const NAME_DESC = "-name";
	const MODERATION_COUNT_ASC = "+moderationCount";
	const MODERATION_COUNT_DESC = "-moderationCount";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
	const RANK_ASC = "+rank";
	const RANK_DESC = "-rank";
	const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
	const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
}

class BorhanVampEntryOrderBy
{
	const PUBLISHING_STARTED_AT_ASC = "+publishingStartedAt";
	const PUBLISHING_STARTED_AT_DESC = "-publishingStartedAt";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

class BorhanVampWorkflowStatus
{
	const INCOMPLETE = 0;
	const COMPLETE = 1;
	const PUBLISHING = 2;
	const PUBLISHED = 3;
	const PENDING_SUBMISSION = 11;
	const SUBMITTED = 12;
	const APPROVED = 13;
	const REJECTED = 14;
}

class BorhanVampSystemStatusSummary extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $uploadingErrors = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $transcodingErrors = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $transcodingInProgress = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $transcodingComplete = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $publishingSunrise = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $publishingSunset = null;


}

class BorhanEntryDistributionDetails extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var BorhanMediaEntry
	 */
	public $entry;

	/**
	 * 
	 *
	 * @var int
	 */
	public $date = null;


}

class BorhanMediaEntryWithDistributions extends BorhanMediaEntry
{
	/**
	 * 
	 *
	 * @var array of BorhanEntryDistribution
	 */
	public $entryDistributions;


}

class BorhanMediaEntryWithDistributionsResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanMediaEntryWithDistributions
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

class BorhanVampEntry extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var BorhanEntryStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var BorhanVampWorkflowStatus
	 * @readonly
	 */
	public $workflowStatus = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $publishingStartedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var BorhanBaseEntry
	 * @readonly
	 */
	public $entry;

	/**
	 * 
	 *
	 * @var array of BorhanEntryDistribution
	 * @readonly
	 */
	public $entryDistributions;


}

abstract class BorhanVampEntryBaseFilter extends BorhanFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 *
	 * @var BorhanEntryStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var BorhanEntryStatus
	 */
	public $statusNotEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusNotIn = null;

	/**
	 * 
	 *
	 * @var BorhanVampWorkflowStatus
	 */
	public $workflowStatusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $workflowStatusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $workflowStatusNotIn = null;


}

class BorhanVampEntryFilter extends BorhanVampEntryBaseFilter
{

}

class BorhanVampEntryListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanVampEntry
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

abstract class BorhanMediaEntryWithDistributionsBaseFilter extends BorhanMediaEntryFilter
{

}

class BorhanMediaEntryWithDistributionsFilter extends BorhanMediaEntryWithDistributionsBaseFilter
{

}


class BorhanDashboardService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function getSystemStatusSummary()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vamp_dashboard", "getSystemStatusSummary", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanVampSystemStatusSummary");
		return $resultObject;
	}

	function getEntriesForDistributionSunriseLast24Hours()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vamp_dashboard", "getEntriesForDistributionSunriseLast24Hours", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getEntriesForDistributionSunsetLast24Hours()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vamp_dashboard", "getEntriesForDistributionSunsetLast24Hours", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getLastDistributedEntries($limit)
	{
		$kparams = array();
		$this->client->addParam($kparams, "limit", $limit);
		$this->client->queueServiceActionCall("vamp_dashboard", "getLastDistributedEntries", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function listMediaWithEntryDistributions(BorhanMediaEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("vamp_dashboard", "listMediaWithEntryDistributions", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntryWithDistributionsResponse");
		return $resultObject;
	}

	function notifyEntryCreatedFromUploadPage($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("vamp_dashboard", "notifyEntryCreatedFromUploadPage", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class BorhanVampEntryService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampentry", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanVampEntry");
		return $resultObject;
	}

	function listAction(BorhanVampEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("vamp_vampentry", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanVampEntryListResponse");
		return $resultObject;
	}

	function approve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampentry", "approve", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reject($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampentry", "reject", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function submitForModeration($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampentry", "submitForModeration", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function publish($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampentry", "publish", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class BorhanVampUiConfService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanUiConf $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("vamp_vampuiconf", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConf");
		return $resultObject;
	}

	function update($id, BorhanUiConf $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("vamp_vampuiconf", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConf");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampuiconf", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConf");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampuiconf", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function cloneAction($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampuiconf", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConf");
		return $resultObject;
	}

	function listTemplates(BorhanUiConfFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("vamp_vampuiconf", "listTemplates", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConfListResponse");
		return $resultObject;
	}

	function listAction(BorhanUiConfFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("vamp_vampuiconf", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUiConfListResponse");
		return $resultObject;
	}

	function getAvailableTypes()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vamp_vampuiconf", "getAvailableTypes", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}
class BorhanVampClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanVampClientPlugin
	 */
	protected static $instance;

	/**
	 * @var BorhanDashboardService
	 */
	public $dashboard = null;

	/**
	 * @var BorhanVampEntryService
	 */
	public $vampEntry = null;

	/**
	 * @var BorhanVampUiConfService
	 */
	public $vampUiConf = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->dashboard = new BorhanDashboardService($client);
		$this->vampEntry = new BorhanVampEntryService($client);
		$this->vampUiConf = new BorhanVampUiConfService($client);
	}

	/**
	 * @return BorhanVampClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		if(!self::$instance)
			self::$instance = new BorhanVampClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'dashboard' => $this->dashboard,
			'vampEntry' => $this->vampEntry,
			'vampUiConf' => $this->vampUiConf,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'vamp';
	}
}

