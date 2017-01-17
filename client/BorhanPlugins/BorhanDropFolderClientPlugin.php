<?php
require_once(dirname(__FILE__) . "/../BorhanClientBase.php");
require_once(dirname(__FILE__) . "/../BorhanEnums.php");
require_once(dirname(__FILE__) . "/../BorhanTypes.php");

class BorhanDropFolderContentFileHandlerMatchPolicy
{
	const ADD_AS_NEW = 1;
	const MATCH_EXISTING_OR_ADD_AS_NEW = 2;
	const MATCH_EXISTING_OR_KEEP_IN_FOLDER = 3;
}

class BorhanDropFolderFileDeletePolicy
{
	const MANUAL_DELETE = 1;
	const AUTO_DELETE = 2;
}

class BorhanDropFolderFileErrorCode
{
	const ERROR_UPDATE_ENTRY = "1";
	const ERROR_ADD_ENTRY = "2";
	const FLAVOR_NOT_FOUND = "3";
	const FLAVOR_MISSING_IN_FILE_NAME = "4";
	const SLUG_REGEX_NO_MATCH = "5";
	const ERROR_READING_FILE = "6";
}

class BorhanDropFolderFileHandlerType
{
	const CONTENT = "1";
}

class BorhanDropFolderFileOrderBy
{
	const ID_ASC = "+id";
	const ID_DESC = "-id";
	const FILE_NAME_ASC = "+fileName";
	const FILE_NAME_DESC = "-fileName";
	const FILE_SIZE_ASC = "+fileSize";
	const FILE_SIZE_DESC = "-fileSize";
	const FILE_SIZE_LAST_SET_AT_ASC = "+fileSizeLastSetAt";
	const FILE_SIZE_LAST_SET_AT_DESC = "-fileSizeLastSetAt";
	const PARSED_SLUG_ASC = "+parsedSlug";
	const PARSED_SLUG_DESC = "-parsedSlug";
	const PARSED_FLAVOR_ASC = "+parsedFlavor";
	const PARSED_FLAVOR_DESC = "-parsedFlavor";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

class BorhanDropFolderFileStatus
{
	const UPLOADING = 1;
	const PENDING = 2;
	const WAITING = 3;
	const HANDLED = 4;
	const IGNORE = 5;
	const DELETED = 6;
	const PURGED = 7;
	const NO_MATCH = 8;
	const ERROR_HANDLING = 9;
	const ERROR_DELETING = 10;
}

class BorhanDropFolderOrderBy
{
	const ID_ASC = "+id";
	const ID_DESC = "-id";
	const NAME_ASC = "+name";
	const NAME_DESC = "-name";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

class BorhanDropFolderStatus
{
	const DISABLED = 0;
	const ENABLED = 1;
	const DELETED = 2;
}

class BorhanDropFolderType
{
	const LOCAL = "1";
}

abstract class BorhanDropFolderFileHandlerConfig extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var BorhanDropFolderFileHandlerType
	 * @readonly
	 */
	public $handlerType = null;


}

class BorhanDropFolder extends BorhanObjectBase
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
	 * @insertonly
	 */
	public $partnerId = null;

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
	public $description = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dc = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $path = null;

	/**
	 * The ammount of time, in seconds, that should pass so that a file with no change in size we'll be treated as "finished uploading to folder"
	 *
	 * @var int
	 */
	public $fileSizeCheckInterval = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileDeletePolicy
	 */
	public $fileDeletePolicy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $autoFileDeleteDays = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileHandlerType
	 */
	public $fileHandlerType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatterns = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileHandlerConfig
	 */
	public $fileHandlerConfig;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ignoreFileNamePatterns = null;

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


}

abstract class BorhanDropFolderBaseFilter extends BorhanFilter
{
	/**
	 * 
	 *
	 * @var int
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
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderType
	 */
	public $typeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $conversionProfileIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dcEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dcIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pathLike = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileHandlerType
	 */
	public $fileHandlerTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileHandlerTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;


}

class BorhanDropFolderFilter extends BorhanDropFolderBaseFilter
{

}

class BorhanDropFolderListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanDropFolder
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

class BorhanDropFolderFile extends BorhanObjectBase
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
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $dropFolderId = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $fileName = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fileSize = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $fileSizeLastSetAt = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlug = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavor = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileErrorCode
	 */
	public $errorCode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorDescription = null;

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


}

abstract class BorhanDropFolderFileBaseFilter extends BorhanFilter
{
	/**
	 * 
	 *
	 * @var int
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
	 * @var int
	 */
	public $dropFolderIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dropFolderIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameLike = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileStatus
	 */
	public $statusEqual = null;

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
	public $parsedSlugEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlugIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlugLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorLike = null;

	/**
	 * 
	 *
	 * @var BorhanDropFolderFileErrorCode
	 */
	public $errorCodeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorCodeIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;


}

class BorhanDropFolderFileFilter extends BorhanDropFolderFileBaseFilter
{

}

class BorhanDropFolderFileListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanDropFolderFile
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

class BorhanDropFolderFileResource extends BorhanDataCenterContentResource
{
	/**
	 * Id of the drop folder file object
	 *
	 * @var int
	 */
	public $dropFolderFileId = null;


}

class BorhanDropFolderContentFileHandlerConfig extends BorhanDropFolderFileHandlerConfig
{
	/**
	 * 
	 *
	 * @var BorhanDropFolderContentFileHandlerMatchPolicy
	 */
	public $contentMatchPolicy = null;

	/**
	 * Regular expression that defines valid file names to be handled.
	 * The following might be extracted from the file name and used if defined:
	 * - (?P<referenceId>\w+) - will be used as the drop folder file's parsed slug.
	 * - (?P<flavorName>\w+)  - will be used as the drop folder file's parsed flavor.
	 * 
	 *
	 * @var string
	 */
	public $slugRegex = null;


}


class BorhanDropFolderService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanDropFolder $dropFolder)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolder", $dropFolder->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolder");
		return $resultObject;
	}

	function get($dropFolderId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolder");
		return $resultObject;
	}

	function update($dropFolderId, BorhanDropFolder $dropFolder)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->addParam($kparams, "dropFolder", $dropFolder->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolder");
		return $resultObject;
	}

	function delete($dropFolderId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolder");
		return $resultObject;
	}

	function listAction(BorhanDropFolderFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderListResponse");
		return $resultObject;
	}
}

class BorhanDropFolderFileService extends BorhanServiceBase
{
	function __construct(BorhanClient $client = null)
	{
		parent::__construct($client);
	}

	function add(BorhanDropFolderFile $dropFolderFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFile", $dropFolderFile->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}

	function get($dropFolderFileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}

	function update($dropFolderFileId, BorhanDropFolderFile $dropFolderFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->addParam($kparams, "dropFolderFile", $dropFolderFile->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}

	function delete($dropFolderFileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}

	function listAction(BorhanDropFolderFileFilter $filter = null, BorhanFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFileListResponse");
		return $resultObject;
	}

	function ignore($dropFolderFileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "ignore", $kparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "BorhanDropFolderFile");
		return $resultObject;
	}
}
class BorhanDropFolderClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanDropFolderClientPlugin
	 */
	protected static $instance;

	/**
	 * @var BorhanDropFolderService
	 */
	public $dropFolder = null;

	/**
	 * @var BorhanDropFolderFileService
	 */
	public $dropFolderFile = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->dropFolder = new BorhanDropFolderService($client);
		$this->dropFolderFile = new BorhanDropFolderFileService($client);
	}

	/**
	 * @return BorhanDropFolderClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		if(!self::$instance)
			self::$instance = new BorhanDropFolderClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'dropFolder' => $this->dropFolder,
			'dropFolderFile' => $this->dropFolderFile,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'dropFolder';
	}
}

