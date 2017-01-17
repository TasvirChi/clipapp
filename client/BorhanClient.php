<?php
require_once("BorhanClientBase.php");
require_once("BorhanEnums.php");
require_once("BorhanTypes.php");


class BorhanAccessControlService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanAccessControl $accessControl)
	{
		$kparams = array();
		$this->client->addParam($kparams, "accessControl", $accessControl->toParams());
		$this->client->queueServiceActionCall("accesscontrol", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControl");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("accesscontrol", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControl");
		return $resultObject;
	}

	function update($id, BorhanAccessControl $accessControl)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "accessControl", $accessControl->toParams());
		$this->client->queueServiceActionCall("accesscontrol", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControl");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("accesscontrol", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanAccessControlFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("accesscontrol", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAccessControlListResponse");
		return $resultObject;
	}
}

class BorhanAdminUserService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function updatePassword($email, $password, $newEmail = "", $newPassword = "")
	{
		$kparams = array();
		$this->client->addParam($kparams, "email", $email);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "newEmail", $newEmail);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("adminuser", "updatePassword", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanAdminUser");
		return $resultObject;
	}

	function resetPassword($email)
	{
		$kparams = array();
		$this->client->addParam($kparams, "email", $email);
		$this->client->queueServiceActionCall("adminuser", "resetPassword", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function login($email, $password, $partnerId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "email", $email);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("adminuser", "login", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function setInitialPassword($hashKey, $newPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hashKey", $hashKey);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("adminuser", "setInitialPassword", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class BorhanBaseEntryService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanBaseEntry $entry, $type = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("baseentry", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	function addContent($entryId, BorhanResource $resource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->queueServiceActionCall("baseentry", "addContent", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	function addFromUploadedFile(BorhanBaseEntry $entry, $uploadTokenId, $type = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("baseentry", "addFromUploadedFile", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("baseentry", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	function update($entryId, BorhanBaseEntry $baseEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "baseEntry", $baseEntry->toParams());
		$this->client->queueServiceActionCall("baseentry", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	function updateContent($entryId, BorhanResource $resource, $conversionProfileId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("baseentry", "updateContent", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	function getByIds($entryIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryIds", $entryIds);
		$this->client->queueServiceActionCall("baseentry", "getByIds", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanBaseEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("baseentry", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntryListResponse");
		return $resultObject;
	}

	function count(BorhanBaseEntryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("baseentry", "count", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function upload($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("baseentry", "upload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function updateThumbnailJpeg($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("baseentry", "updateThumbnailJpeg", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	function updateThumbnailFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("baseentry", "updateThumbnailFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	function updateThumbnailFromSourceEntry($entryId, $sourceEntryId, $timeOffset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
		$this->client->addParam($kparams, "timeOffset", $timeOffset);
		$this->client->queueServiceActionCall("baseentry", "updateThumbnailFromSourceEntry", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	function flag(BorhanModerationFlag $moderationFlag)
	{
		$kparams = array();
		$this->client->addParam($kparams, "moderationFlag", $moderationFlag->toParams());
		$this->client->queueServiceActionCall("baseentry", "flag", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reject($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "reject", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function approve($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "approve", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listFlags($entryId, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("baseentry", "listFlags", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanModerationFlagListResponse");
		return $resultObject;
	}

	function anonymousRank($entryId, $rank)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "rank", $rank);
		$this->client->queueServiceActionCall("baseentry", "anonymousRank", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function getContextData($entryId, BorhanEntryContextDataParams $contextDataParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "contextDataParams", $contextDataParams->toParams());
		$this->client->queueServiceActionCall("baseentry", "getContextData", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEntryContextDataResult");
		return $resultObject;
	}
}

class BorhanBatchcontrolService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function reportStatus(BorhanScheduler $scheduler, array $schedulerStatuses, array $workerQueueFilters)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduler", $scheduler->toParams());
		foreach($schedulerStatuses as $index => $obj)
		{
			$this->client->addParam($kparams, "schedulerStatuses:$index", $obj->toParams());
		}
		foreach($workerQueueFilters as $index => $obj)
		{
			$this->client->addParam($kparams, "workerQueueFilters:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("batchcontrol", "reportStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSchedulerStatusResponse");
		return $resultObject;
	}

	function configLoaded(BorhanScheduler $scheduler, $configParam, $configValue, $configParamPart = null, $workerConfigId = null, $workerName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduler", $scheduler->toParams());
		$this->client->addParam($kparams, "configParam", $configParam);
		$this->client->addParam($kparams, "configValue", $configValue);
		$this->client->addParam($kparams, "configParamPart", $configParamPart);
		$this->client->addParam($kparams, "workerConfigId", $workerConfigId);
		$this->client->addParam($kparams, "workerName", $workerName);
		$this->client->queueServiceActionCall("batchcontrol", "configLoaded", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSchedulerConfig");
		return $resultObject;
	}

	function stopScheduler($schedulerId, $adminId, $cause)
	{
		$kparams = array();
		$this->client->addParam($kparams, "schedulerId", $schedulerId);
		$this->client->addParam($kparams, "adminId", $adminId);
		$this->client->addParam($kparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "stopScheduler", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanControlPanelCommand");
		return $resultObject;
	}

	function stopWorker($workerId, $adminId, $cause)
	{
		$kparams = array();
		$this->client->addParam($kparams, "workerId", $workerId);
		$this->client->addParam($kparams, "adminId", $adminId);
		$this->client->addParam($kparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "stopWorker", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanControlPanelCommand");
		return $resultObject;
	}

	function kill($workerId, $batchIndex, $adminId, $cause)
	{
		$kparams = array();
		$this->client->addParam($kparams, "workerId", $workerId);
		$this->client->addParam($kparams, "batchIndex", $batchIndex);
		$this->client->addParam($kparams, "adminId", $adminId);
		$this->client->addParam($kparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "kill", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanControlPanelCommand");
		return $resultObject;
	}

	function startWorker($workerId, $adminId, $cause = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "workerId", $workerId);
		$this->client->addParam($kparams, "adminId", $adminId);
		$this->client->addParam($kparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "startWorker", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanControlPanelCommand");
		return $resultObject;
	}

	function setSchedulerConfig($schedulerId, $adminId, $configParam, $configValue, $configParamPart = null, $cause = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "schedulerId", $schedulerId);
		$this->client->addParam($kparams, "adminId", $adminId);
		$this->client->addParam($kparams, "configParam", $configParam);
		$this->client->addParam($kparams, "configValue", $configValue);
		$this->client->addParam($kparams, "configParamPart", $configParamPart);
		$this->client->addParam($kparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "setSchedulerConfig", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanControlPanelCommand");
		return $resultObject;
	}

	function setWorkerConfig($workerId, $adminId, $configParam, $configValue, $configParamPart = null, $cause = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "workerId", $workerId);
		$this->client->addParam($kparams, "adminId", $adminId);
		$this->client->addParam($kparams, "configParam", $configParam);
		$this->client->addParam($kparams, "configValue", $configValue);
		$this->client->addParam($kparams, "configParamPart", $configParamPart);
		$this->client->addParam($kparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "setWorkerConfig", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanControlPanelCommand");
		return $resultObject;
	}

	function setCommandResult($commandId, $status, $errorDescription = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "commandId", $commandId);
		$this->client->addParam($kparams, "status", $status);
		$this->client->addParam($kparams, "errorDescription", $errorDescription);
		$this->client->queueServiceActionCall("batchcontrol", "setCommandResult", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanControlPanelCommand");
		return $resultObject;
	}

	function listCommands(BorhanControlPanelCommandFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("batchcontrol", "listCommands", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanControlPanelCommandListResponse");
		return $resultObject;
	}

	function getCommand($commandId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "commandId", $commandId);
		$this->client->queueServiceActionCall("batchcontrol", "getCommand", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanControlPanelCommand");
		return $resultObject;
	}

	function listSchedulers()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("batchcontrol", "listSchedulers", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSchedulerListResponse");
		return $resultObject;
	}

	function listWorkers()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("batchcontrol", "listWorkers", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSchedulerWorkerListResponse");
		return $resultObject;
	}

	function getFullStatus()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("batchcontrol", "getFullStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanControlPanelCommand");
		return $resultObject;
	}
}

class BorhanBatchService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function getExclusiveImportJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveImportJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveImportJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveImportJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveImportJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveImportJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveBulkUploadJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveBulkUploadJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneBulkUploadJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneBulkUploadJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveBulkUploadJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveBulkUploadJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveBulkUploadJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveBulkUploadJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function addBulkUploadResult(BorhanBulkUploadResult $bulkUploadResult, array $pluginDataArray = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "bulkUploadResult", $bulkUploadResult->toParams());
		if ($pluginDataArray !== null)
			foreach($pluginDataArray as $index => $obj)
			{
				$this->client->addParam($kparams, "pluginDataArray:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("batch", "addBulkUploadResult", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUploadResult");
		return $resultObject;
	}

	function getBulkUploadLastResult($bulkUploadJobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "bulkUploadJobId", $bulkUploadJobId);
		$this->client->queueServiceActionCall("batch", "getBulkUploadLastResult", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUploadResult");
		return $resultObject;
	}

	function countBulkUploadEntries($bulkUploadJobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "bulkUploadJobId", $bulkUploadJobId);
		$this->client->queueServiceActionCall("batch", "countBulkUploadEntries", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function updateBulkUploadResults($bulkUploadJobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "bulkUploadJobId", $bulkUploadJobId);
		$this->client->queueServiceActionCall("batch", "updateBulkUploadResults", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function getExclusiveAlmostDoneConvertCollectionJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneConvertCollectionJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneConvertProfileJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneConvertProfileJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveConvertCollectionJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job, array $flavorsData = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		if ($flavorsData !== null)
			foreach($flavorsData as $index => $obj)
			{
				$this->client->addParam($kparams, "flavorsData:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("batch", "updateExclusiveConvertCollectionJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function updateExclusiveConvertProfileJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveConvertProfileJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveConvertCollectionJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveConvertCollectionJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function freeExclusiveConvertProfileJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveConvertProfileJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveConvertCollectionJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveConvertCollectionJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveConvertJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveConvertJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneConvertJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneConvertJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveConvertJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveConvertJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function updateExclusiveConvertJobSubType($id, BorhanExclusiveLockKey $lockKey, $subType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "subType", $subType);
		$this->client->queueServiceActionCall("batch", "updateExclusiveConvertJobSubType", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveConvertJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveConvertJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusivePostConvertJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusivePostConvertJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusivePostConvertJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusivePostConvertJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusivePostConvertJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusivePostConvertJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveCaptureThumbJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveCaptureThumbJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveCaptureThumbJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveCaptureThumbJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveCaptureThumbJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveCaptureThumbJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveExtractMediaJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveExtractMediaJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveExtractMediaJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveExtractMediaJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function addMediaInfo(BorhanMediaInfo $mediaInfo)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaInfo", $mediaInfo->toParams());
		$this->client->queueServiceActionCall("batch", "addMediaInfo", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaInfo");
		return $resultObject;
	}

	function freeExclusiveExtractMediaJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveExtractMediaJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveStorageExportJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveStorageExportJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveStorageExportJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveStorageExportJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveStorageExportJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveStorageExportJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveStorageDeleteJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveStorageDeleteJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveStorageDeleteJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveStorageDeleteJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveStorageDeleteJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveStorageDeleteJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveNotificationJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveNotificationJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchGetExclusiveNotificationJobsResponse");
		return $resultObject;
	}

	function updateExclusiveNotificationJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveNotificationJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveNotificationJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveNotificationJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveMailJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveMailJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveMailJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveMailJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveMailJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveMailJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveBulkDownloadJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveBulkDownloadJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneBulkDownloadJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneBulkDownloadJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveBulkDownloadJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveBulkDownloadJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveBulkDownloadJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveBulkDownloadJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveProvisionProvideJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveProvisionProvideJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneProvisionProvideJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneProvisionProvideJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveProvisionProvideJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveProvisionProvideJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveProvisionProvideJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveProvisionProvideJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveProvisionDeleteJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveProvisionDeleteJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneProvisionDeleteJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneProvisionDeleteJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveProvisionDeleteJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveProvisionDeleteJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function freeExclusiveProvisionDeleteJob($id, BorhanExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveProvisionDeleteJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function resetJobExecutionAttempts($id, BorhanExclusiveLockKey $lockKey, $jobType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("batch", "resetJobExecutionAttempts", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function freeExclusiveJob($id, BorhanExclusiveLockKey $lockKey, $jobType, $resetExecutionAttempts = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "jobType", $jobType);
		$this->client->addParam($kparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFreeJobResponse");
		return $resultObject;
	}

	function getQueueSize(BorhanWorkerQueueFilter $workerQueueFilter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "workerQueueFilter", $workerQueueFilter->toParams());
		$this->client->queueServiceActionCall("batch", "getQueueSize", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function getExclusiveJobs(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null, $jobType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->addParam($kparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("batch", "getExclusiveJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDone(BorhanExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, BorhanBatchJobFilter $filter = null, $jobType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($kparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->addParam($kparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDone", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveJob($id, BorhanExclusiveLockKey $lockKey, BorhanBatchJob $job)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($kparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function cleanExclusiveJobs()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("batch", "cleanExclusiveJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function logConversion($flavorAssetId, $data)
	{
		$kparams = array();
		$this->client->addParam($kparams, "flavorAssetId", $flavorAssetId);
		$this->client->addParam($kparams, "data", $data);
		$this->client->queueServiceActionCall("batch", "logConversion", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function checkFileExists($localPath, $size)
	{
		$kparams = array();
		$this->client->addParam($kparams, "localPath", $localPath);
		$this->client->addParam($kparams, "size", $size);
		$this->client->queueServiceActionCall("batch", "checkFileExists", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFileExistsResponse");
		return $resultObject;
	}
}

class BorhanBulkUploadService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add($conversionProfileId, $fileData, $bulkUploadType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->addParam($kparams, "bulkUploadType", $bulkUploadType);
		$this->client->queueServiceActionCall("bulkupload", "add", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUpload");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUpload");
		return $resultObject;
	}

	function listAction(BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("bulkupload", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBulkUploadListResponse");
		return $resultObject;
	}
}

class BorhanCategoryService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanCategory $category)
	{
		$kparams = array();
		$this->client->addParam($kparams, "category", $category->toParams());
		$this->client->queueServiceActionCall("category", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategory");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("category", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategory");
		return $resultObject;
	}

	function update($id, BorhanCategory $category)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "category", $category->toParams());
		$this->client->queueServiceActionCall("category", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategory");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("category", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanCategoryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("category", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCategoryListResponse");
		return $resultObject;
	}
}

class BorhanConversionProfileAssetParamsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(BorhanConversionProfileAssetParamsFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("conversionprofileassetparams", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfileAssetParamsListResponse");
		return $resultObject;
	}

	function update($conversionProfileId, $assetParamsId, BorhanConversionProfileAssetParams $conversionProfileAssetParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->addParam($kparams, "assetParamsId", $assetParamsId);
		$this->client->addParam($kparams, "conversionProfileAssetParams", $conversionProfileAssetParams->toParams());
		$this->client->queueServiceActionCall("conversionprofileassetparams", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfileAssetParams");
		return $resultObject;
	}
}

class BorhanConversionProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function setAsDefault($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("conversionprofile", "setAsDefault", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfile");
		return $resultObject;
	}

	function getDefault()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("conversionprofile", "getDefault", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfile");
		return $resultObject;
	}

	function add(BorhanConversionProfile $conversionProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfile", $conversionProfile->toParams());
		$this->client->queueServiceActionCall("conversionprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfile");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("conversionprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfile");
		return $resultObject;
	}

	function update($id, BorhanConversionProfile $conversionProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "conversionProfile", $conversionProfile->toParams());
		$this->client->queueServiceActionCall("conversionprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfile");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("conversionprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanConversionProfileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("conversionprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanConversionProfileListResponse");
		return $resultObject;
	}
}

class BorhanDataService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanDataEntry $dataEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dataEntry", $dataEntry->toParams());
		$this->client->queueServiceActionCall("data", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDataEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("data", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDataEntry");
		return $resultObject;
	}

	function update($entryId, BorhanDataEntry $documentEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("data", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDataEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("data", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanDataEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("data", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDataListResponse");
		return $resultObject;
	}

	function serve($entryId, $version = -1, $forceProxy = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->addParam($kparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall('data', 'serve', $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}
}

class BorhanDocumentService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function addFromUploadedFile(BorhanDocumentEntry $documentEntry, $uploadTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("document", "addFromUploadedFile", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	function addFromEntry($sourceEntryId, BorhanDocumentEntry $documentEntry = null, $sourceFlavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
		if ($documentEntry !== null)
			$this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
		$this->client->addParam($kparams, "sourceFlavorParamsId", $sourceFlavorParamsId);
		$this->client->queueServiceActionCall("document", "addFromEntry", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	function addFromFlavorAsset($sourceFlavorAssetId, BorhanDocumentEntry $documentEntry = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sourceFlavorAssetId", $sourceFlavorAssetId);
		if ($documentEntry !== null)
			$this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("document", "addFromFlavorAsset", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	function convert($entryId, $conversionProfileId = null, array $dynamicConversionAttributes = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		if ($dynamicConversionAttributes !== null)
			foreach($dynamicConversionAttributes as $index => $obj)
			{
				$this->client->addParam($kparams, "dynamicConversionAttributes:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("document", "convert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("document", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	function update($entryId, BorhanDocumentEntry $documentEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("document", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("document", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanDocumentEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("document", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDocumentListResponse");
		return $resultObject;
	}

	function upload($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("document", "upload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function convertPptToSwf($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("document", "convertPptToSwf", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function serve($entryId, $flavorAssetId = null, $forceProxy = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "flavorAssetId", $flavorAssetId);
		$this->client->addParam($kparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall('document', 'serve', $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function serveByFlavorParamsId($entryId, $flavorParamsId = null, $forceProxy = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->addParam($kparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall('document', 'serveByFlavorParamsId', $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}
}

class BorhanEmailIngestionProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanEmailIngestionProfile $EmailIP)
	{
		$kparams = array();
		$this->client->addParam($kparams, "EmailIP", $EmailIP->toParams());
		$this->client->queueServiceActionCall("emailingestionprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEmailIngestionProfile");
		return $resultObject;
	}

	function getByEmailAddress($emailAddress)
	{
		$kparams = array();
		$this->client->addParam($kparams, "emailAddress", $emailAddress);
		$this->client->queueServiceActionCall("emailingestionprofile", "getByEmailAddress", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEmailIngestionProfile");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("emailingestionprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEmailIngestionProfile");
		return $resultObject;
	}

	function update($id, BorhanEmailIngestionProfile $EmailIP)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "EmailIP", $EmailIP->toParams());
		$this->client->queueServiceActionCall("emailingestionprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanEmailIngestionProfile");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("emailingestionprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function addMediaEntry(BorhanMediaEntry $mediaEntry, $uploadTokenId, $emailProfId, $fromAddress, $emailMsgId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->addParam($kparams, "emailProfId", $emailProfId);
		$this->client->addParam($kparams, "fromAddress", $fromAddress);
		$this->client->addParam($kparams, "emailMsgId", $emailMsgId);
		$this->client->queueServiceActionCall("emailingestionprofile", "addMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}
}

class BorhanFlavorAssetService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add($entryId, BorhanFlavorAsset $flavorAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "flavorAsset", $flavorAsset->toParams());
		$this->client->queueServiceActionCall("flavorasset", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAsset");
		return $resultObject;
	}

	function update($id, BorhanFlavorAsset $flavorAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "flavorAsset", $flavorAsset->toParams());
		$this->client->queueServiceActionCall("flavorasset", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAsset");
		return $resultObject;
	}

	function setContent($id, BorhanContentResource $contentResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("flavorasset", "setContent", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAsset");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorasset", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAsset");
		return $resultObject;
	}

	function getByEntryId($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("flavorasset", "getByEntryId", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function listAction(BorhanAssetFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("flavorasset", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorAssetListResponse");
		return $resultObject;
	}

	function getWebPlayableByEntryId($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("flavorasset", "getWebPlayableByEntryId", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function convert($entryId, $flavorParamsId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("flavorasset", "convert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reconvert($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorasset", "reconvert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorasset", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function getDownloadUrl($id, $useCdn = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "useCdn", $useCdn);
		$this->client->queueServiceActionCall("flavorasset", "getDownloadUrl", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function getFlavorAssetsWithParams($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("flavorasset", "getFlavorAssetsWithParams", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

class BorhanFlavorParamsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanFlavorParams $flavorParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "flavorParams", $flavorParams->toParams());
		$this->client->queueServiceActionCall("flavorparams", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorParams");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorparams", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorParams");
		return $resultObject;
	}

	function update($id, BorhanFlavorParams $flavorParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "flavorParams", $flavorParams->toParams());
		$this->client->queueServiceActionCall("flavorparams", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorParams");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("flavorparams", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanFlavorParamsFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("flavorparams", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanFlavorParamsListResponse");
		return $resultObject;
	}

	function getByConversionProfileId($conversionProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("flavorparams", "getByConversionProfileId", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

class BorhanJobsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function getImportStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getImportStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteImport($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteImport", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortImport($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortImport", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryImport($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryImport", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getProvisionProvideStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getProvisionProvideStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteProvisionProvide($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteProvisionProvide", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortProvisionProvide($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortProvisionProvide", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryProvisionProvide($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryProvisionProvide", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getProvisionDeleteStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getProvisionDeleteStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteProvisionDelete($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteProvisionDelete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortProvisionDelete($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortProvisionDelete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryProvisionDelete($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryProvisionDelete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getBulkUploadStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getBulkUploadStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteBulkUpload($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteBulkUpload", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortBulkUpload($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortBulkUpload", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryBulkUpload($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryBulkUpload", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getConvertStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getConvertStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getConvertCollectionStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getConvertCollectionStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getConvertProfileStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getConvertProfileStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function addConvertProfileJob($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("jobs", "addConvertProfileJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getRemoteConvertStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getRemoteConvertStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteConvert($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteConvert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortConvert($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortConvert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryConvert($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryConvert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteRemoteConvert($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteRemoteConvert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortRemoteConvert($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortRemoteConvert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryRemoteConvert($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryRemoteConvert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteConvertCollection($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteConvertCollection", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteConvertProfile($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteConvertProfile", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortConvertCollection($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortConvertCollection", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortConvertProfile($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortConvertProfile", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryConvertCollection($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryConvertCollection", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryConvertProfile($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryConvertProfile", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getPostConvertStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getPostConvertStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deletePostConvert($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deletePostConvert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortPostConvert($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortPostConvert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryPostConvert($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryPostConvert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getCaptureThumbStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getCaptureThumbStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteCaptureThumb($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteCaptureThumb", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortCaptureThumb($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortCaptureThumb", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryCaptureThumb($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryCaptureThumb", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getPullStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getPullStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deletePull($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deletePull", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortPull($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortPull", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryPull($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryPull", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getExtractMediaStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getExtractMediaStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteExtractMedia($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteExtractMedia", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortExtractMedia($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortExtractMedia", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryExtractMedia($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryExtractMedia", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getStorageExportStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getStorageExportStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteStorageExport($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteStorageExport", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortStorageExport($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortStorageExport", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryStorageExport($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryStorageExport", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getStorageDeleteStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getStorageDeleteStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteStorageDelete($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteStorageDelete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortStorageDelete($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortStorageDelete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryStorageDelete($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryStorageDelete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getNotificationStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getNotificationStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteNotification($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteNotification", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortNotification($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortNotification", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryNotification($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryNotification", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function getMailStatus($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getMailStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteMail($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteMail", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortMail($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortMail", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryMail($jobId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryMail", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function addMailJob(BorhanMailJobData $mailJobData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mailJobData", $mailJobData->toParams());
		$this->client->queueServiceActionCall("jobs", "addMailJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function addBatchJob(BorhanBatchJob $batchJob)
	{
		$kparams = array();
		$this->client->addParam($kparams, "batchJob", $batchJob->toParams());
		$this->client->queueServiceActionCall("jobs", "addBatchJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJob");
		return $resultObject;
	}

	function getStatus($jobId, $jobType, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->addParam($kparams, "jobType", $jobType);
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("jobs", "getStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function deleteJob($jobId, $jobType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->addParam($kparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("jobs", "deleteJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function abortJob($jobId, $jobType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->addParam($kparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("jobs", "abortJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function retryJob($jobId, $jobType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jobId", $jobId);
		$this->client->addParam($kparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("jobs", "retryJob", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobResponse");
		return $resultObject;
	}

	function listBatchJobs(BorhanBatchJobFilterExt $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("jobs", "listBatchJobs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBatchJobListResponse");
		return $resultObject;
	}
}

class BorhanLiveStreamService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanLiveStreamAdminEntry $liveStreamEntry, $sourceType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "liveStreamEntry", $liveStreamEntry->toParams());
		$this->client->addParam($kparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("livestream", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamAdminEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("livestream", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamEntry");
		return $resultObject;
	}

	function update($entryId, BorhanLiveStreamAdminEntry $liveStreamEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "liveStreamEntry", $liveStreamEntry->toParams());
		$this->client->queueServiceActionCall("livestream", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamAdminEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livestream", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanLiveStreamEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("livestream", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamListResponse");
		return $resultObject;
	}

	function updateOfflineThumbnailJpeg($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("livestream", "updateOfflineThumbnailJpeg", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamEntry");
		return $resultObject;
	}

	function updateOfflineThumbnailFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("livestream", "updateOfflineThumbnailFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanLiveStreamEntry");
		return $resultObject;
	}
}

class BorhanMediaService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanMediaEntry $entry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->queueServiceActionCall("media", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function addContent($entryId, BorhanResource $resource = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($resource !== null)
			$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->queueServiceActionCall("media", "addContent", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function addFromBulk(BorhanMediaEntry $mediaEntry, $url, $bulkUploadId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "url", $url);
		$this->client->addParam($kparams, "bulkUploadId", $bulkUploadId);
		$this->client->queueServiceActionCall("media", "addFromBulk", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function addFromUrl(BorhanMediaEntry $mediaEntry, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("media", "addFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function addFromSearchResult(BorhanMediaEntry $mediaEntry = null, BorhanSearchResult $searchResult = null)
	{
		$kparams = array();
		if ($mediaEntry !== null)
			$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		if ($searchResult !== null)
			$this->client->addParam($kparams, "searchResult", $searchResult->toParams());
		$this->client->queueServiceActionCall("media", "addFromSearchResult", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function addFromUploadedFile(BorhanMediaEntry $mediaEntry, $uploadTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("media", "addFromUploadedFile", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function addFromRecordedWebcam(BorhanMediaEntry $mediaEntry, $webcamTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "webcamTokenId", $webcamTokenId);
		$this->client->queueServiceActionCall("media", "addFromRecordedWebcam", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function addFromEntry($sourceEntryId, BorhanMediaEntry $mediaEntry = null, $sourceFlavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
		if ($mediaEntry !== null)
			$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($kparams, "sourceFlavorParamsId", $sourceFlavorParamsId);
		$this->client->queueServiceActionCall("media", "addFromEntry", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function addFromFlavorAsset($sourceFlavorAssetId, BorhanMediaEntry $mediaEntry = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sourceFlavorAssetId", $sourceFlavorAssetId);
		if ($mediaEntry !== null)
			$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->queueServiceActionCall("media", "addFromFlavorAsset", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function convert($entryId, $conversionProfileId = null, array $dynamicConversionAttributes = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		if ($dynamicConversionAttributes !== null)
			foreach($dynamicConversionAttributes as $index => $obj)
			{
				$this->client->addParam($kparams, "dynamicConversionAttributes:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("media", "convert", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("media", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function update($entryId, BorhanMediaEntry $mediaEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->queueServiceActionCall("media", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function updateContent($entryId, BorhanResource $resource, $conversionProfileId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("media", "updateContent", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function approveReplace($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "approveReplace", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function cancelReplace($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "cancelReplace", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function listAction(BorhanMediaEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("media", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaListResponse");
		return $resultObject;
	}

	function count(BorhanMediaEntryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("media", "count", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function upload($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("media", "upload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function updateThumbnail($entryId, $timeOffset, $flavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "timeOffset", $timeOffset);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("media", "updateThumbnail", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function updateThumbnailFromSourceEntry($entryId, $sourceEntryId, $timeOffset, $flavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
		$this->client->addParam($kparams, "timeOffset", $timeOffset);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("media", "updateThumbnailFromSourceEntry", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function updateThumbnailJpeg($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("media", "updateThumbnailJpeg", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMediaEntry");
		return $resultObject;
	}

	function updateThumbnailFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("media", "updateThumbnailFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseEntry");
		return $resultObject;
	}

	function requestConversion($entryId, $fileFormat)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "fileFormat", $fileFormat);
		$this->client->queueServiceActionCall("media", "requestConversion", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function flag(BorhanModerationFlag $moderationFlag)
	{
		$kparams = array();
		$this->client->addParam($kparams, "moderationFlag", $moderationFlag->toParams());
		$this->client->queueServiceActionCall("media", "flag", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reject($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "reject", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function approve($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "approve", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listFlags($entryId, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("media", "listFlags", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanModerationFlagListResponse");
		return $resultObject;
	}

	function anonymousRank($entryId, $rank)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "rank", $rank);
		$this->client->queueServiceActionCall("media", "anonymousRank", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class BorhanMixingService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanMixEntry $mixEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mixEntry", $mixEntry->toParams());
		$this->client->queueServiceActionCall("mixing", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixEntry");
		return $resultObject;
	}

	function update($entryId, BorhanMixEntry $mixEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "mixEntry", $mixEntry->toParams());
		$this->client->queueServiceActionCall("mixing", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("mixing", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanMixEntryFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("mixing", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixListResponse");
		return $resultObject;
	}

	function count(BorhanMediaEntryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("mixing", "count", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function cloneAction($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("mixing", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixEntry");
		return $resultObject;
	}

	function appendMediaEntry($mixEntryId, $mediaEntryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mixEntryId", $mixEntryId);
		$this->client->addParam($kparams, "mediaEntryId", $mediaEntryId);
		$this->client->queueServiceActionCall("mixing", "appendMediaEntry", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanMixEntry");
		return $resultObject;
	}

	function requestFlattening($entryId, $fileFormat, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "fileFormat", $fileFormat);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "requestFlattening", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function getMixesByMediaId($mediaEntryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaEntryId", $mediaEntryId);
		$this->client->queueServiceActionCall("mixing", "getMixesByMediaId", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getReadyMediaEntries($mixId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mixId", $mixId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "getReadyMediaEntries", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function anonymousRank($entryId, $rank)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "rank", $rank);
		$this->client->queueServiceActionCall("mixing", "anonymousRank", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class BorhanNotificationService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function getClientNotification($entryId, $type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("notification", "getClientNotification", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanClientNotification");
		return $resultObject;
	}
}

class BorhanPartnerService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function register(BorhanPartner $partner, $cmsPassword = "")
	{
		$kparams = array();
		$this->client->addParam($kparams, "partner", $partner->toParams());
		$this->client->addParam($kparams, "cmsPassword", $cmsPassword);
		$this->client->queueServiceActionCall("partner", "register", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartner");
		return $resultObject;
	}

	function update(BorhanPartner $partner, $allowEmpty = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partner", $partner->toParams());
		$this->client->addParam($kparams, "allowEmpty", $allowEmpty);
		$this->client->queueServiceActionCall("partner", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartner");
		return $resultObject;
	}

	function getSecrets($partnerId, $adminEmail, $cmsPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "adminEmail", $adminEmail);
		$this->client->addParam($kparams, "cmsPassword", $cmsPassword);
		$this->client->queueServiceActionCall("partner", "getSecrets", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartner");
		return $resultObject;
	}

	function getInfo()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "getInfo", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartner");
		return $resultObject;
	}

	function getUsage($year = "", $month = 1, $resolution = "days")
	{
		$kparams = array();
		$this->client->addParam($kparams, "year", $year);
		$this->client->addParam($kparams, "month", $month);
		$this->client->addParam($kparams, "resolution", $resolution);
		$this->client->queueServiceActionCall("partner", "getUsage", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPartnerUsage");
		return $resultObject;
	}
}

class BorhanPermissionItemService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanPermissionItem $permissionItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItem", $permissionItem->toParams());
		$this->client->queueServiceActionCall("permissionitem", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionItem");
		return $resultObject;
	}

	function get($permissionItemId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItemId", $permissionItemId);
		$this->client->queueServiceActionCall("permissionitem", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionItem");
		return $resultObject;
	}

	function update($permissionItemId, BorhanPermissionItem $permissionItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItemId", $permissionItemId);
		$this->client->addParam($kparams, "permissionItem", $permissionItem->toParams());
		$this->client->queueServiceActionCall("permissionitem", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionItem");
		return $resultObject;
	}

	function delete($permissionItemId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionItemId", $permissionItemId);
		$this->client->queueServiceActionCall("permissionitem", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionItem");
		return $resultObject;
	}

	function listAction(BorhanPermissionItemFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("permissionitem", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionItemListResponse");
		return $resultObject;
	}
}

class BorhanPermissionService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanPermission $permission)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permission", $permission->toParams());
		$this->client->queueServiceActionCall("permission", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermission");
		return $resultObject;
	}

	function get($permissionName)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionName", $permissionName);
		$this->client->queueServiceActionCall("permission", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermission");
		return $resultObject;
	}

	function update($permissionName, BorhanPermission $permission)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionName", $permissionName);
		$this->client->addParam($kparams, "permission", $permission->toParams());
		$this->client->queueServiceActionCall("permission", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermission");
		return $resultObject;
	}

	function delete($permissionName)
	{
		$kparams = array();
		$this->client->addParam($kparams, "permissionName", $permissionName);
		$this->client->queueServiceActionCall("permission", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermission");
		return $resultObject;
	}

	function listAction(BorhanPermissionFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("permission", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPermissionListResponse");
		return $resultObject;
	}

	function getCurrentPermissions()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("permission", "getCurrentPermissions", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

class BorhanPlaylistService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanPlaylist $playlist, $updateStats = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "playlist", $playlist->toParams());
		$this->client->addParam($kparams, "updateStats", $updateStats);
		$this->client->queueServiceActionCall("playlist", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylist");
		return $resultObject;
	}

	function get($id, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("playlist", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylist");
		return $resultObject;
	}

	function update($id, BorhanPlaylist $playlist, $updateStats = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "playlist", $playlist->toParams());
		$this->client->addParam($kparams, "updateStats", $updateStats);
		$this->client->queueServiceActionCall("playlist", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylist");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("playlist", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function cloneAction($id, BorhanPlaylist $newPlaylist = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		if ($newPlaylist !== null)
			$this->client->addParam($kparams, "newPlaylist", $newPlaylist->toParams());
		$this->client->queueServiceActionCall("playlist", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylist");
		return $resultObject;
	}

	function listAction(BorhanPlaylistFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("playlist", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylistListResponse");
		return $resultObject;
	}

	function execute($id, $detailed = "")
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "detailed", $detailed);
		$this->client->queueServiceActionCall("playlist", "execute", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function executeFromContent($playlistType, $playlistContent, $detailed = "")
	{
		$kparams = array();
		$this->client->addParam($kparams, "playlistType", $playlistType);
		$this->client->addParam($kparams, "playlistContent", $playlistContent);
		$this->client->addParam($kparams, "detailed", $detailed);
		$this->client->queueServiceActionCall("playlist", "executeFromContent", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function executeFromFilters(array $filters, $totalResults, $detailed = "")
	{
		$kparams = array();
		foreach($filters as $index => $obj)
		{
			$this->client->addParam($kparams, "filters:$index", $obj->toParams());
		}
		$this->client->addParam($kparams, "totalResults", $totalResults);
		$this->client->addParam($kparams, "detailed", $detailed);
		$this->client->queueServiceActionCall("playlist", "executeFromFilters", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getStatsFromContent($playlistType, $playlistContent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "playlistType", $playlistType);
		$this->client->addParam($kparams, "playlistContent", $playlistContent);
		$this->client->queueServiceActionCall("playlist", "getStatsFromContent", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanPlaylist");
		return $resultObject;
	}
}

class BorhanReportService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function getGraphs($reportType, BorhanReportInputFilter $reportInputFilter, $dimension = null, $objectIds = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "dimension", $dimension);
		$this->client->addParam($kparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getGraphs", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getTotal($reportType, BorhanReportInputFilter $reportInputFilter, $objectIds = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getTotal", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanReportTotal");
		return $resultObject;
	}

	function getTable($reportType, BorhanReportInputFilter $reportInputFilter, BorhanFilterPager $pager, $order = null, $objectIds = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->addParam($kparams, "order", $order);
		$this->client->addParam($kparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getTable", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanReportTable");
		return $resultObject;
	}

	function getUrlForReportAsCsv($reportTitle, $reportText, $headers, $reportType, BorhanReportInputFilter $reportInputFilter, $dimension = null, BorhanFilterPager $pager = null, $order = null, $objectIds = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportTitle", $reportTitle);
		$this->client->addParam($kparams, "reportText", $reportText);
		$this->client->addParam($kparams, "headers", $headers);
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "dimension", $dimension);
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->addParam($kparams, "order", $order);
		$this->client->addParam($kparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getUrlForReportAsCsv", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

class BorhanSearchService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function search(BorhanSearch $search, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "search", $search->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("search", "search", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSearchResultResponse");
		return $resultObject;
	}

	function getMediaInfo(BorhanSearchResult $searchResult)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchResult", $searchResult->toParams());
		$this->client->queueServiceActionCall("search", "getMediaInfo", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSearchResult");
		return $resultObject;
	}

	function searchUrl($mediaType, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaType", $mediaType);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("search", "searchUrl", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSearchResult");
		return $resultObject;
	}

	function externalLogin($searchSource, $userName, $password)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchSource", $searchSource);
		$this->client->addParam($kparams, "userName", $userName);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("search", "externalLogin", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSearchAuthData");
		return $resultObject;
	}
}

class BorhanSessionService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function start($secret, $userId = "", $type = 0, $partnerId = null, $expiry = 86400, $privileges = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("session", "start", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function end()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("session", "end", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function impersonate($secret, $impersonatedPartnerId, $userId = "", $type = 0, $partnerId = null, $expiry = 86400, $privileges = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->addParam($kparams, "impersonatedPartnerId", $impersonatedPartnerId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("session", "impersonate", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function startWidgetSession($widgetId, $expiry = 86400)
	{
		$kparams = array();
		$this->client->addParam($kparams, "widgetId", $widgetId);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->queueServiceActionCall("session", "startWidgetSession", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStartWidgetSessionResponse");
		return $resultObject;
	}
}

class BorhanStatsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function collect(BorhanStatsEvent $event)
	{
		$kparams = array();
		$this->client->addParam($kparams, "event", $event->toParams());
		$this->client->queueServiceActionCall("stats", "collect", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function bmcCollect(BorhanStatsBmcEvent $bmcEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "bmcEvent", $bmcEvent->toParams());
		$this->client->queueServiceActionCall("stats", "bmcCollect", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reportKceError(BorhanCEError $borhanCEError)
	{
		$kparams = array();
		$this->client->addParam($kparams, "borhanCEError", $borhanCEError->toParams());
		$this->client->queueServiceActionCall("stats", "reportKceError", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanCEError");
		return $resultObject;
	}
}

class BorhanStorageProfileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(BorhanStorageProfileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("storageprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStorageProfileListResponse");
		return $resultObject;
	}

	function updateStatus($storageId, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "storageId", $storageId);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("storageprofile", "updateStatus", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function get($storageProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "storageProfileId", $storageProfileId);
		$this->client->queueServiceActionCall("storageprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStorageProfile");
		return $resultObject;
	}

	function update($storageProfileId, BorhanStorageProfile $storageProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "storageProfileId", $storageProfileId);
		$this->client->addParam($kparams, "storageProfile", $storageProfile->toParams());
		$this->client->queueServiceActionCall("storageprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStorageProfile");
		return $resultObject;
	}

	function add(BorhanStorageProfile $storageProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "storageProfile", $storageProfile->toParams());
		$this->client->queueServiceActionCall("storageprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanStorageProfile");
		return $resultObject;
	}
}

class BorhanSyndicationFeedService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanBaseSyndicationFeed $syndicationFeed)
	{
		$kparams = array();
		$this->client->addParam($kparams, "syndicationFeed", $syndicationFeed->toParams());
		$this->client->queueServiceActionCall("syndicationfeed", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseSyndicationFeed");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("syndicationfeed", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseSyndicationFeed");
		return $resultObject;
	}

	function update($id, BorhanBaseSyndicationFeed $syndicationFeed)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "syndicationFeed", $syndicationFeed->toParams());
		$this->client->queueServiceActionCall("syndicationfeed", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseSyndicationFeed");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("syndicationfeed", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanBaseSyndicationFeedFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("syndicationfeed", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanBaseSyndicationFeedListResponse");
		return $resultObject;
	}

	function getEntryCount($feedId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "feedId", $feedId);
		$this->client->queueServiceActionCall("syndicationfeed", "getEntryCount", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanSyndicationFeedEntryCount");
		return $resultObject;
	}

	function requestConversion($feedId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "feedId", $feedId);
		$this->client->queueServiceActionCall("syndicationfeed", "requestConversion", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

class BorhanSystemService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function ping()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("system", "ping", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

class BorhanThumbAssetService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add($entryId, BorhanThumbAsset $thumbAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "thumbAsset", $thumbAsset->toParams());
		$this->client->queueServiceActionCall("thumbasset", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	function setContent($id, BorhanContentResource $contentResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("thumbasset", "setContent", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	function update($id, BorhanThumbAsset $thumbAsset, BorhanContentResource $contentResource = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "thumbAsset", $thumbAsset->toParams());
		if ($contentResource !== null)
			$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("thumbasset", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	function serveByEntryId($entryId, $thumbParamId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "thumbParamId", $thumbParamId);
		$this->client->queueServiceActionCall('thumbasset', 'serveByEntryId', $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function serve($thumbAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall('thumbasset', 'serve', $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function setAsDefault($thumbAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "setAsDefault", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function generateByEntryId($entryId, $destThumbParamsId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "destThumbParamsId", $destThumbParamsId);
		$this->client->queueServiceActionCall("thumbasset", "generateByEntryId", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	function generate($entryId, BorhanThumbParams $thumbParams, $sourceAssetId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "thumbParams", $thumbParams->toParams());
		$this->client->addParam($kparams, "sourceAssetId", $sourceAssetId);
		$this->client->queueServiceActionCall("thumbasset", "generate", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	function regenerate($thumbAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "regenerate", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	function get($thumbAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	function getByEntryId($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("thumbasset", "getByEntryId", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function listAction(BorhanAssetFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("thumbasset", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAssetListResponse");
		return $resultObject;
	}

	function addFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("thumbasset", "addFromUrl", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	function addFromImage($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("thumbasset", "addFromImage", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbAsset");
		return $resultObject;
	}

	function delete($thumbAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class BorhanThumbParamsService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanThumbParams $thumbParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "thumbParams", $thumbParams->toParams());
		$this->client->queueServiceActionCall("thumbparams", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbParams");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("thumbparams", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbParams");
		return $resultObject;
	}

	function update($id, BorhanThumbParams $thumbParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "thumbParams", $thumbParams->toParams());
		$this->client->queueServiceActionCall("thumbparams", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbParams");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("thumbparams", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanThumbParamsFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("thumbparams", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanThumbParamsListResponse");
		return $resultObject;
	}

	function getByConversionProfileId($conversionProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("thumbparams", "getByConversionProfileId", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

class BorhanUiConfService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanUiConf $uiConf)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("uiconf", "add", $kparams);
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
		$this->client->queueServiceActionCall("uiconf", "update", $kparams);
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
		$this->client->queueServiceActionCall("uiconf", "get", $kparams);
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
		$this->client->queueServiceActionCall("uiconf", "delete", $kparams);
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
		$this->client->queueServiceActionCall("uiconf", "clone", $kparams);
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
		$this->client->queueServiceActionCall("uiconf", "listTemplates", $kparams);
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
		$this->client->queueServiceActionCall("uiconf", "list", $kparams);
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
		$this->client->queueServiceActionCall("uiconf", "getAvailableTypes", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

class BorhanUploadService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function upload($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("upload", "upload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function getUploadedFileTokenByFileName($fileName)
	{
		$kparams = array();
		$this->client->addParam($kparams, "fileName", $fileName);
		$this->client->queueServiceActionCall("upload", "getUploadedFileTokenByFileName", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUploadResponse");
		return $resultObject;
	}
}

class BorhanUploadTokenService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanUploadToken $uploadToken = null)
	{
		$kparams = array();
		if ($uploadToken !== null)
			$this->client->addParam($kparams, "uploadToken", $uploadToken->toParams());
		$this->client->queueServiceActionCall("uploadtoken", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUploadToken");
		return $resultObject;
	}

	function get($uploadTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("uploadtoken", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUploadToken");
		return $resultObject;
	}

	function upload($uploadTokenId, $fileData, $resume = false, $finalChunk = true, $resumeAt = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->addParam($kparams, "resume", $resume);
		$this->client->addParam($kparams, "finalChunk", $finalChunk);
		$this->client->addParam($kparams, "resumeAt", $resumeAt);
		$this->client->queueServiceActionCall("uploadtoken", "upload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUploadToken");
		return $resultObject;
	}

	function delete($uploadTokenId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("uploadtoken", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(BorhanUploadTokenFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("uploadtoken", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUploadTokenListResponse");
		return $resultObject;
	}
}

class BorhanUserRoleService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanUserRole $userRole)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRole", $userRole->toParams());
		$this->client->queueServiceActionCall("userrole", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRole");
		return $resultObject;
	}

	function get($userRoleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRole");
		return $resultObject;
	}

	function update($userRoleId, BorhanUserRole $userRole)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->addParam($kparams, "userRole", $userRole->toParams());
		$this->client->queueServiceActionCall("userrole", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRole");
		return $resultObject;
	}

	function delete($userRoleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRole");
		return $resultObject;
	}

	function listAction(BorhanUserRoleFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("userrole", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRoleListResponse");
		return $resultObject;
	}

	function cloneAction($userRoleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserRole");
		return $resultObject;
	}
}

class BorhanUserService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanUser $user)
	{
		$kparams = array();
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	function update($userId, BorhanUser $user)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	function get($userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	function getByLoginId($loginId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->queueServiceActionCall("user", "getByLoginId", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	function delete($userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	function listAction(BorhanUserFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("user", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUserListResponse");
		return $resultObject;
	}

	function notifyBan($userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "notifyBan", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function login($partnerId, $userId, $password, $expiry = 86400, $privileges = "*")
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("user", "login", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function loginByLoginId($loginId, $password, $partnerId = null, $expiry = 86400, $privileges = "*")
	{
		$kparams = array();
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("user", "loginByLoginId", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function updateLoginData($oldLoginId, $password, $newLoginId = "", $newPassword = "", $newFirstName = null, $newLastName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "oldLoginId", $oldLoginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "newLoginId", $newLoginId);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->addParam($kparams, "newFirstName", $newFirstName);
		$this->client->addParam($kparams, "newLastName", $newLastName);
		$this->client->queueServiceActionCall("user", "updateLoginData", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function resetPassword($email)
	{
		$kparams = array();
		$this->client->addParam($kparams, "email", $email);
		$this->client->queueServiceActionCall("user", "resetPassword", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function setInitialPassword($hashKey, $newPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hashKey", $hashKey);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("user", "setInitialPassword", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function enableLogin($userId, $loginId, $password = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("user", "enableLogin", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}

	function disableLogin($userId = null, $loginId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->queueServiceActionCall("user", "disableLogin", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanUser");
		return $resultObject;
	}
}

class BorhanWidgetService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanWidget $widget)
	{
		$kparams = array();
		$this->client->addParam($kparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanWidget");
		return $resultObject;
	}

	function update($id, BorhanWidget $widget)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanWidget");
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("widget", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanWidget");
		return $resultObject;
	}

	function cloneAction(BorhanWidget $widget)
	{
		$kparams = array();
		$this->client->addParam($kparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanWidget");
		return $resultObject;
	}

	function listAction(BorhanWidgetFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("widget", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanWidgetListResponse");
		return $resultObject;
	}
}

class BorhanXInternalService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function xAddBulkDownload($entryIds, $flavorParamsId = "")
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryIds", $entryIds);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("xinternal", "xAddBulkDownload", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

class BorhanClient extends BorhanClientBase
{
	/**
	 * @var string
	 */
	protected $apiVersion = '3.1.3';

	/**
	 * Add & Manage Access Controls
	 * @var BorhanAccessControlService
	 */
	public $accessControl = null;

	/**
	 * Manage details for the administrative user
	 * @var BorhanAdminUserService
	 */
	public $adminUser = null;

	/**
	 * Base Entry Service
	 * @var BorhanBaseEntryService
	 */
	public $baseEntry = null;

	/**
	 * batch service lets you handle different batch process from remote machines.
	 * As oppesed to other ojects in the system, locking mechanism is critical in this case.
	 * For this reason the GetExclusiveXX, UpdateExclusiveXX and FreeExclusiveXX actions are important for the system's intergity.
	 * In general - updating batch object should be done only using the UpdateExclusiveXX which in turn can be called only after 
	 * acuiring a batch objet properly (using  GetExclusiveXX).
	 * If an object was aquired and should be returned to the pool in it's initial state - use the FreeExclusiveXX action 
	 * 
	 * @var BorhanBatchcontrolService
	 */
	public $batchcontrol = null;

	/**
	 * batch service lets you handle different batch process from remote machines.
	 * As oppesed to other ojects in the system, locking mechanism is critical in this case.
	 * For this reason the GetExclusiveXX, UpdateExclusiveXX and FreeExclusiveXX actions are important for the system's intergity.
	 * In general - updating batch object should be done only using the UpdateExclusiveXX which in turn can be called only after 
	 * acuiring a batch objet properly (using  GetExclusiveXX).
	 * If an object was aquired and should be returned to the pool in it's initial state - use the FreeExclusiveXX action 
	 * 
	 * @var BorhanBatchService
	 */
	public $batch = null;

	/**
	 * Bulk upload service is used to upload & manage bulk uploads using CSV files
	 * @var BorhanBulkUploadService
	 */
	public $bulkUpload = null;

	/**
	 * Add & Manage Categories
	 * @var BorhanCategoryService
	 */
	public $category = null;

	/**
	 * Manage the connection between Conversion Profiles and Asset Params
	 * @var BorhanConversionProfileAssetParamsService
	 */
	public $conversionProfileAssetParams = null;

	/**
	 * Add & Manage Conversion Profiles
	 * @var BorhanConversionProfileService
	 */
	public $conversionProfile = null;

	/**
	 * Data service lets you manage data content (textual content)
	 * @var BorhanDataService
	 */
	public $data = null;

	/**
	 * Document service
	 * DEPRECATED
	 * @var BorhanDocumentService
	 */
	public $document = null;

	/**
	 * EmailIngestionProfile service lets you manage email ingestion profile records
	 * @var BorhanEmailIngestionProfileService
	 */
	public $EmailIngestionProfile = null;

	/**
	 * Retrieve information and invoke actions on Flavor Asset
	 * @var BorhanFlavorAssetService
	 */
	public $flavorAsset = null;

	/**
	 * Add & Manage Flavor Params
	 * @var BorhanFlavorParamsService
	 */
	public $flavorParams = null;

	/**
	 * batch service lets you handle different batch process from remote machines.
	 * As oppesed to other ojects in the system, locking mechanism is critical in this case.
	 * For this reason the GetExclusiveXX, UpdateExclusiveXX and FreeExclusiveXX actions are important for the system's intergity.
	 * In general - updating batch object should be done only using the UpdateExclusiveXX which in turn can be called only after 
	 * acuiring a batch objet properly (using  GetExclusiveXX).
	 * If an object was aquired and should be returned to the pool in it's initial state - use the FreeExclusiveXX action 
	 * 
	 * @var BorhanJobsService
	 */
	public $jobs = null;

	/**
	 * Live Stream service lets you manage live stream channels
	 * @var BorhanLiveStreamService
	 */
	public $liveStream = null;

	/**
	 * Media service lets you upload and manage media files (images / videos & audio)
	 * @var BorhanMediaService
	 */
	public $media = null;

	/**
	 * A Mix is an XML unique format invented by Borhan, it allows the user to create a mix of videos and images, in and out points, transitions, text overlays, soundtrack, effects and much more...
	 * Mixing service lets you create a new mix, manage its metadata and make basic manipulations.   
	 * @var BorhanMixingService
	 */
	public $mixing = null;

	/**
	 * Notification Service
	 * @var BorhanNotificationService
	 */
	public $notification = null;

	/**
	 * partner service allows you to change/manage your partner personal details and settings as well
	 * @var BorhanPartnerService
	 */
	public $partner = null;

	/**
	 * PermissionItem service lets you create and manage permission items
	 * @var BorhanPermissionItemService
	 */
	public $permissionItem = null;

	/**
	 * Permission service lets you create and manage user permissions
	 * @var BorhanPermissionService
	 */
	public $permission = null;

	/**
	 * Playlist service lets you create,manage and play your playlists
	 * Playlists could be static (containing a fixed list of entries) or dynamic (baseed on a filter)
	 * @var BorhanPlaylistService
	 */
	public $playlist = null;

	/**
	 * api for getting reports data by the report type and some inputFilter
	 * @var BorhanReportService
	 */
	public $report = null;

	/**
	 * Search service allows you to search for media in various media providers
	 * This service is being used mostly by the CW component
	 * @var BorhanSearchService
	 */
	public $search = null;

	/**
	 * Session service
	 * @var BorhanSessionService
	 */
	public $session = null;

	/**
	 * Stats Service
	 * @var BorhanStatsService
	 */
	public $stats = null;

	/**
	 * Storage Profiles service
	 * @var BorhanStorageProfileService
	 */
	public $storageProfile = null;

	/**
	 * Add & Manage Syndication Feeds
	 * @var BorhanSyndicationFeedService
	 */
	public $syndicationFeed = null;

	/**
	 * System service is used for internal system helpers & to retrieve system level information
	 * @var BorhanSystemService
	 */
	public $system = null;

	/**
	 * Retrieve information and invoke actions on Thumb Asset
	 * @var BorhanThumbAssetService
	 */
	public $thumbAsset = null;

	/**
	 * Add & Manage Thumb Params
	 * @var BorhanThumbParamsService
	 */
	public $thumbParams = null;

	/**
	 * UiConf service lets you create and manage your UIConfs for the various flash components
	 * This service is used by the BMC-ApplicationStudio
	 * @var BorhanUiConfService
	 */
	public $uiConf = null;

	/**
	 * 
	 * @var BorhanUploadService
	 */
	public $upload = null;

	/**
	 * 
	 * @var BorhanUploadTokenService
	 */
	public $uploadToken = null;

	/**
	 * UserRole service lets you create and manage user roles
	 * @var BorhanUserRoleService
	 */
	public $userRole = null;

	/**
	 * Manage partner users on Borhan's side
	 * The userId in borhan is the unique Id in the partner's system, and the [partnerId,Id] couple are unique key in borhan's DB
	 * @var BorhanUserService
	 */
	public $user = null;

	/**
	 * widget service for full widget management
	 * @var BorhanWidgetService
	 */
	public $widget = null;

	/**
	 * Internal Service is used for actions that are used internally in Borhan applications and might be changed in the future without any notice.
	 * @var BorhanXInternalService
	 */
	public $xInternal = null;

	/**
	 * Borhan client constructor
	 *
	 * @param BorhanConfiguration $config
	 */
	public function __construct(BorhanConfiguration $config)
	{
		parent::__construct($config);
		
		$this->accessControl = new BorhanAccessControlService($this);
		$this->adminUser = new BorhanAdminUserService($this);
		$this->baseEntry = new BorhanBaseEntryService($this);
		$this->batchcontrol = new BorhanBatchcontrolService($this);
		$this->batch = new BorhanBatchService($this);
		$this->bulkUpload = new BorhanBulkUploadService($this);
		$this->category = new BorhanCategoryService($this);
		$this->conversionProfileAssetParams = new BorhanConversionProfileAssetParamsService($this);
		$this->conversionProfile = new BorhanConversionProfileService($this);
		$this->data = new BorhanDataService($this);
		$this->document = new BorhanDocumentService($this);
		$this->EmailIngestionProfile = new BorhanEmailIngestionProfileService($this);
		$this->flavorAsset = new BorhanFlavorAssetService($this);
		$this->flavorParams = new BorhanFlavorParamsService($this);
		$this->jobs = new BorhanJobsService($this);
		$this->liveStream = new BorhanLiveStreamService($this);
		$this->media = new BorhanMediaService($this);
		$this->mixing = new BorhanMixingService($this);
		$this->notification = new BorhanNotificationService($this);
		$this->partner = new BorhanPartnerService($this);
		$this->permissionItem = new BorhanPermissionItemService($this);
		$this->permission = new BorhanPermissionService($this);
		$this->playlist = new BorhanPlaylistService($this);
		$this->report = new BorhanReportService($this);
		$this->search = new BorhanSearchService($this);
		$this->session = new BorhanSessionService($this);
		$this->stats = new BorhanStatsService($this);
		$this->storageProfile = new BorhanStorageProfileService($this);
		$this->syndicationFeed = new BorhanSyndicationFeedService($this);
		$this->system = new BorhanSystemService($this);
		$this->thumbAsset = new BorhanThumbAssetService($this);
		$this->thumbParams = new BorhanThumbParamsService($this);
		$this->uiConf = new BorhanUiConfService($this);
		$this->upload = new BorhanUploadService($this);
		$this->uploadToken = new BorhanUploadTokenService($this);
		$this->userRole = new BorhanUserRoleService($this);
		$this->user = new BorhanUserService($this);
		$this->widget = new BorhanWidgetService($this);
		$this->xInternal = new BorhanXInternalService($this);
	}
	
}

