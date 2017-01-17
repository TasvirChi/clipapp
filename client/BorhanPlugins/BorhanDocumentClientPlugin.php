<?php
require_once(dirname(__FILE__) . "/../BorhanClientBase.php");
require_once(dirname(__FILE__) . "/../BorhanEnums.php");
require_once(dirname(__FILE__) . "/../BorhanTypes.php");

class BorhanDocumentEntryOrderBy
{
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

class BorhanDocumentFlavorParamsOrderBy
{
}

class BorhanDocumentFlavorParamsOutputOrderBy
{
}

class BorhanDocumentType
{
	const DOCUMENT = 11;
	const SWF = 12;
	const PDF = 13;
}

class BorhanPdfFlavorParamsOrderBy
{
}

class BorhanPdfFlavorParamsOutputOrderBy
{
}

class BorhanSwfFlavorParamsOrderBy
{
}

class BorhanSwfFlavorParamsOutputOrderBy
{
}

class BorhanDocumentEntry extends BorhanBaseEntry
{
	/**
	 * The type of the document
	 *
	 * @var BorhanDocumentType
	 * @insertonly
	 */
	public $documentType = null;


}

abstract class BorhanDocumentEntryBaseFilter extends BorhanBaseEntryFilter
{
	/**
	 * 
	 *
	 * @var BorhanDocumentType
	 */
	public $documentTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $documentTypeIn = null;


}

class BorhanDocumentEntryFilter extends BorhanDocumentEntryBaseFilter
{

}

class BorhanDocumentListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanDocumentEntry
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

abstract class BorhanDocumentFlavorParamsBaseFilter extends BorhanFlavorParamsFilter
{

}

class BorhanDocumentFlavorParamsFilter extends BorhanDocumentFlavorParamsBaseFilter
{

}

abstract class BorhanDocumentFlavorParamsOutputBaseFilter extends BorhanFlavorParamsOutputFilter
{

}

class BorhanDocumentFlavorParamsOutputFilter extends BorhanDocumentFlavorParamsOutputBaseFilter
{

}

abstract class BorhanPdfFlavorParamsBaseFilter extends BorhanFlavorParamsFilter
{

}

class BorhanPdfFlavorParamsFilter extends BorhanPdfFlavorParamsBaseFilter
{

}

abstract class BorhanPdfFlavorParamsOutputBaseFilter extends BorhanFlavorParamsOutputFilter
{

}

class BorhanPdfFlavorParamsOutputFilter extends BorhanPdfFlavorParamsOutputBaseFilter
{

}

abstract class BorhanSwfFlavorParamsBaseFilter extends BorhanFlavorParamsFilter
{

}

class BorhanSwfFlavorParamsFilter extends BorhanSwfFlavorParamsBaseFilter
{

}

abstract class BorhanSwfFlavorParamsOutputBaseFilter extends BorhanFlavorParamsOutputFilter
{

}

class BorhanSwfFlavorParamsOutputFilter extends BorhanSwfFlavorParamsOutputBaseFilter
{

}

class BorhanDocumentFlavorParams extends BorhanFlavorParams
{

}

class BorhanDocumentFlavorParamsOutput extends BorhanFlavorParamsOutput
{

}

class BorhanPdfFlavorParams extends BorhanFlavorParams
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $readonly = null;


}

class BorhanPdfFlavorParamsOutput extends BorhanFlavorParamsOutput
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $readonly = null;


}

class BorhanSwfFlavorParams extends BorhanFlavorParams
{

}

class BorhanSwfFlavorParamsOutput extends BorhanFlavorParamsOutput
{

}


class BorhanDocumentsService extends BorhanServiceBase
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
		$this->client->queueServiceActionCall("document_documents", "addFromUploadedFile", $kparams);
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
		$this->client->queueServiceActionCall("document_documents", "addFromEntry", $kparams);
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
		$this->client->queueServiceActionCall("document_documents", "addFromFlavorAsset", $kparams);
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
		$this->client->queueServiceActionCall("document_documents", "convert", $kparams);
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
		$this->client->queueServiceActionCall("document_documents", "get", $kparams);
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
		$this->client->queueServiceActionCall("document_documents", "update", $kparams);
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
		$this->client->queueServiceActionCall("document_documents", "delete", $kparams);
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
		$this->client->queueServiceActionCall("document_documents", "list", $kparams);
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
		$this->client->queueServiceActionCall("document_documents", "upload", $kparams, $kfiles);
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
		$this->client->queueServiceActionCall("document_documents", "convertPptToSwf", $kparams);
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
		$this->client->queueServiceActionCall('document_documents', 'serve', $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function serveByFlavorParamsId($entryId, $flavorParamsId = null, $forceProxy = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->addParam($kparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall('document_documents', 'serveByFlavorParamsId', $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}
}
class BorhanDocumentClientPlugin extends BorhanClientPlugin
{
	/**
	 * @var BorhanDocumentClientPlugin
	 */
	protected static $instance;

	/**
	 * @var BorhanDocumentsService
	 */
	public $documents = null;

	protected function __construct(BorhanClient $client)
	{
		parent::__construct($client);
		$this->documents = new BorhanDocumentsService($client);
	}

	/**
	 * @return BorhanDocumentClientPlugin
	 */
	public static function get(BorhanClient $client)
	{
		if(!self::$instance)
			self::$instance = new BorhanDocumentClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<BorhanServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'documents' => $this->documents,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'document';
	}
}

