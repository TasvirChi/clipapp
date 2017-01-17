<?php
require_once("BorhanClientBase.php");

class BorhanBaseRestriction extends BorhanObjectBase
{

}

class BorhanAccessControl extends BorhanObjectBase
{
	/**
	 * The id of the Access Control Profile
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
	 * The name of the Access Control Profile
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * System name of the Access Control Profile
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * The description of the Access Control Profile
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Creation date as Unix timestamp (In seconds) 
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * True if this Conversion Profile is the default
	 * 
	 *
	 * @var BorhanNullableBoolean
	 */
	public $isDefault = null;

	/**
	 * Array of Access Control Restrictions
	 * 
	 *
	 * @var array of BorhanBaseRestriction
	 */
	public $restrictions;


}

abstract class BorhanSearchItem extends BorhanObjectBase
{

}

class BorhanFilter extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $orderBy = null;

	/**
	 * 
	 *
	 * @var BorhanSearchItem
	 */
	public $advancedSearch;


}

abstract class BorhanAccessControlBaseFilter extends BorhanFilter
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
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;

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


}

class BorhanAccessControlFilter extends BorhanAccessControlBaseFilter
{

}

class BorhanFilterPager extends BorhanObjectBase
{
	/**
	 * The number of objects to retrieve. (Default is 30, maximum page size is 500).
	 * 
	 *
	 * @var int
	 */
	public $pageSize = null;

	/**
	 * The page number for which {pageSize} of objects should be retrieved (Default is 1).
	 * 
	 *
	 * @var int
	 */
	public $pageIndex = null;


}

class BorhanAccessControlListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanAccessControl
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

class BorhanUser extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
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
	 * @var string
	 */
	public $screenName = null;

	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public $fullName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $email = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dateOfBirth = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $country = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $state = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $city = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $zip = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbnailUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Admin tags can be updated only by using an admin session
	 *
	 * @var string
	 */
	public $adminTags = null;

	/**
	 * 
	 *
	 * @var BorhanGender
	 */
	public $gender = null;

	/**
	 * 
	 *
	 * @var BorhanUserStatus
	 */
	public $status = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Can be used to store various partner related data as a string 
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $indexedPartnerDataInt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $indexedPartnerDataString = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $storageSize = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $password = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $firstName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $lastName = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isAdmin = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $lastLoginTime = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $statusUpdatedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $deletedAt = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $loginEnabled = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $roleIds = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $roleNames = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $isAccountOwner = null;


}

class BorhanAdminUser extends BorhanUser
{

}

class BorhanDynamicEnum extends BorhanObjectBase
{

}

abstract class BorhanOperationAttributes extends BorhanObjectBase
{

}

class BorhanBaseEntry extends BorhanObjectBase
{
	/**
	 * Auto generated 10 characters alphanumeric string
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Entry name (Min 1 chars)
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Entry description
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The ID of the user who is the owner of this entry 
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * Entry tags
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Entry admin tags can be updated only by administrators
	 * 
	 *
	 * @var string
	 */
	public $adminTags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categories = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesIds = null;

	/**
	 * 
	 *
	 * @var BorhanEntryStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Entry moderation status
	 * 
	 *
	 * @var BorhanEntryModerationStatus
	 * @readonly
	 */
	public $moderationStatus = null;

	/**
	 * Number of moderation requests waiting for this entry
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $moderationCount = null;

	/**
	 * The type of the entry, this is auto filled by the derived entry object
	 * 
	 *
	 * @var BorhanEntryType
	 */
	public $type = null;

	/**
	 * Entry creation date as Unix timestamp (In seconds)
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Entry update date as Unix timestamp (In seconds)
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Calculated rank
	 * 
	 *
	 * @var float
	 * @readonly
	 */
	public $rank = null;

	/**
	 * The total (sum) of all votes
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalRank = null;

	/**
	 * Number of votes
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $votes = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $groupId = null;

	/**
	 * Can be used to store various partner related data as a string 
	 * 
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * Download URL for the entry
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $downloadUrl = null;

	/**
	 * Indexed search text for full text search
	 *
	 * @var string
	 * @readonly
	 */
	public $searchText = null;

	/**
	 * License type used for this entry
	 * 
	 *
	 * @var BorhanLicenseType
	 */
	public $licenseType = null;

	/**
	 * Version of the entry data
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * Thumbnail URL
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $thumbnailUrl = null;

	/**
	 * The Access Control ID assigned to this entry (null when not set, send -1 to remove)  
	 * 
	 *
	 * @var int
	 */
	public $accessControlId = null;

	/**
	 * Entry scheduling start date (null when not set, send -1 to remove)
	 * 
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * Entry scheduling end date (null when not set, send -1 to remove)
	 * 
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * Entry external reference id
	 * 
	 *
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * ID of temporary entry that will replace this entry when it's approved and ready for replacement
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $replacingEntryId = null;

	/**
	 * ID of the entry that will be replaced when the replacement approved and this entry is ready
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $replacedEntryId = null;

	/**
	 * Status of the replacement readiness and approval
	 * 
	 *
	 * @var BorhanEntryReplacementStatus
	 * @readonly
	 */
	public $replacementStatus = null;

	/**
	 * Can be used to store various partner related data as a numeric value
	 * 
	 *
	 * @var int
	 */
	public $partnerSortValue = null;

	/**
	 * Override the default ingestion profile  
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * ID of source root entry, used for clipped, skipped and cropped entries that created from another entry  
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $rootEntryId = null;

	/**
	 * clipping, skipping and cropping attributes that used to create this entry  
	 * 
	 *
	 * @var array of BorhanOperationAttributes
	 */
	public $operationAttributes;


}

abstract class BorhanResource extends BorhanObjectBase
{

}

abstract class BorhanBaseEntryBaseFilter extends BorhanFilter
{
	/**
	 * This filter should be in use for retrieving only a specific entry (identified by its entryId).
	 * @var string
	 *
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * This filter should be in use for retrieving few specific entries (string should include comma separated list of entryId strings).
	 * @var string
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
	 * This filter should be in use for retrieving specific entries. It should include only one string to search for in entry names (no wildcards, spaces are treated as part of the string).
	 * @var string
	 *
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry names, while applying an OR logic to retrieve entries that contain at least one input string (no wildcards, spaces are treated as part of the string).
	 * @var string
	 *
	 * @var string
	 */
	public $nameMultiLikeOr = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry names, while applying an AND logic to retrieve entries that contain all input strings (no wildcards, spaces are treated as part of the string).
	 * @var string
	 *
	 * @var string
	 */
	public $nameMultiLikeAnd = null;

	/**
	 * This filter should be in use for retrieving entries with a specific name.
	 * @var string
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * This filter should be in use for retrieving only entries which were uploaded by/assigned to users of a specific Borhan Partner (identified by Partner ID).
	 * @var int
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * This filter should be in use for retrieving only entries within Borhan network which were uploaded by/assigned to users of few Borhan Partners  (string should include comma separated list of PartnerIDs)
	 * @var string
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * This filter parameter should be in use for retrieving only entries, uploaded by/assigned to a specific user (identified by user Id).
	 * @var string
	 *
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * This filter should be in use for retrieving specific entries. It should include only one string to search for in entry tags (no wildcards, spaces are treated as part of the string).
	 * @var string
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry tags, while applying an OR logic to retrieve entries that contain at least one input string (no wildcards, spaces are treated as part of the string).
	 * @var string
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry tags, while applying an AND logic to retrieve entries that contain all input strings (no wildcards, spaces are treated as part of the string).
	 * @var string
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * This filter should be in use for retrieving specific entries. It should include only one string to search for in entry tags set by an ADMIN user (no wildcards, spaces are treated as part of the string).
	 * @var string
	 *
	 * @var string
	 */
	public $adminTagsLike = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry tags, set by an ADMIN user, while applying an OR logic to retrieve entries that contain at least one input string (no wildcards, spaces are treated as part of the string).
	 * @var string
	 *
	 * @var string
	 */
	public $adminTagsMultiLikeOr = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry tags, set by an ADMIN user, while applying an AND logic to retrieve entries that contain all input strings (no wildcards, spaces are treated as part of the string).
	 * @var string
	 *
	 * @var string
	 */
	public $adminTagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesMatchAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesIdsMatchAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesIdsMatchOr = null;

	/**
	 * This filter should be in use for retrieving only entries, at a specific {@link ?object=BorhanEntryStatus BorhanEntryStatus}.
	 * @var BorhanEntryStatus
	 *
	 * @var BorhanEntryStatus
	 */
	public $statusEqual = null;

	/**
	 * This filter should be in use for retrieving only entries, not at a specific {@link ?object=BorhanEntryStatus BorhanEntryStatus}.
	 * @var BorhanEntryStatus
	 *
	 * @var BorhanEntryStatus
	 */
	public $statusNotEqual = null;

	/**
	 * This filter should be in use for retrieving only entries, at few specific {@link ?object=BorhanEntryStatus BorhanEntryStatus} (comma separated).
	 * @dynamicType BorhanEntryStatus
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * This filter should be in use for retrieving only entries, not at few specific {@link ?object=BorhanEntryStatus BorhanEntryStatus} (comma separated).
	 * @dynamicType BorhanEntryStatus
	 *
	 * @var string
	 */
	public $statusNotIn = null;

	/**
	 * 
	 *
	 * @var BorhanEntryModerationStatus
	 */
	public $moderationStatusEqual = null;

	/**
	 * 
	 *
	 * @var BorhanEntryModerationStatus
	 */
	public $moderationStatusNotEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $moderationStatusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $moderationStatusNotIn = null;

	/**
	 * 
	 *
	 * @var BorhanEntryType
	 */
	public $typeEqual = null;

	/**
	 * This filter should be in use for retrieving entries of few {@link ?object=BorhanEntryType BorhanEntryType} (string should include a comma separated list of {@link ?object=BorhanEntryType BorhanEntryType} enumerated parameters).
	 * @dynamicType BorhanEntryType
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * This filter parameter should be in use for retrieving only entries which were created at Borhan system after a specific time/date (standard timestamp format).
	 * @var int
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * This filter parameter should be in use for retrieving only entries which were created at Borhan system before a specific time/date (standard timestamp format).
	 * @var int
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

	/**
	 * 
	 *
	 * @var int
	 */
	public $groupIdEqual = null;

	/**
	 * This filter should be in use for retrieving specific entries while search match the input string within all of the following metadata attributes: name, description, tags, adminTags.
	 * @var string
	 *
	 * @var string
	 */
	public $searchTextMatchAnd = null;

	/**
	 * This filter should be in use for retrieving specific entries while search match the input string within at least one of the following metadata attributes: name, description, tags, adminTags.
	 * @var string
	 *
	 * @var string
	 */
	public $searchTextMatchOr = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $accessControlIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $accessControlIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDateGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDateLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDateGreaterThanOrEqualOrNull = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDateLessThanOrEqualOrNull = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDateGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDateLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDateGreaterThanOrEqualOrNull = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDateLessThanOrEqualOrNull = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $replacingEntryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $replacingEntryIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $replacedEntryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $replacedEntryIdIn = null;

	/**
	 * 
	 *
	 * @var BorhanEntryReplacementStatus
	 */
	public $replacementStatusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $replacementStatusIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerSortValueGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerSortValueLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rootEntryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rootEntryIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsNameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsNameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsNameMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsNameMultiLikeAnd = null;


}

class BorhanBaseEntryFilter extends BorhanBaseEntryBaseFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $freeText = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isRoot = null;


}

class BorhanBaseEntryListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanBaseEntry
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

class BorhanModerationFlag extends BorhanObjectBase
{
	/**
	 * Moderation flag id
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
	 * The user id that added the moderation flag
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The type of the moderation flag (entry or user)
	 *
	 * @var BorhanModerationObjectType
	 * @readonly
	 */
	public $moderationObjectType = null;

	/**
	 * If moderation flag is set for entry, this is the flagged entry id
	 *
	 * @var string
	 */
	public $flaggedEntryId = null;

	/**
	 * If moderation flag is set for user, this is the flagged user id
	 *
	 * @var string
	 */
	public $flaggedUserId = null;

	/**
	 * The moderation flag status
	 *
	 * @var BorhanModerationFlagStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The comment that was added to the flag
	 *
	 * @var string
	 */
	public $comments = null;

	/**
	 * 
	 *
	 * @var BorhanModerationFlagType
	 */
	public $flagType = null;

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

class BorhanModerationFlagListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanModerationFlag
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

class BorhanEntryContextDataParams extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $referrer = null;


}

class BorhanEntryContextDataResult extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $isSiteRestricted = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isCountryRestricted = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isSessionRestricted = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isIpAddressRestricted = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $previewLength = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isScheduledNow = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isAdmin = null;


}

class BorhanSchedulerStatus extends BorhanObjectBase
{
	/**
	 * The id of the Category
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The configured id of the scheduler
	 * 
	 *
	 * @var int
	 */
	public $schedulerConfiguredId = null;

	/**
	 * The configured id of the job worker
	 * 
	 *
	 * @var int
	 */
	public $workerConfiguredId = null;

	/**
	 * The type of the job worker.
	 * 
	 *
	 * @var BorhanBatchJobType
	 */
	public $workerType = null;

	/**
	 * The status type
	 * 
	 *
	 * @var BorhanSchedulerStatusType
	 */
	public $type = null;

	/**
	 * The status value
	 * 
	 *
	 * @var int
	 */
	public $value = null;

	/**
	 * The id of the scheduler
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $schedulerId = null;

	/**
	 * The id of the worker
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $workerId = null;


}

class BorhanSchedulerConfig extends BorhanObjectBase
{
	/**
	 * The id of the Category
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Creator name
	 * 
	 *
	 * @var string
	 */
	public $createdBy = null;

	/**
	 * Updater name
	 * 
	 *
	 * @var string
	 */
	public $updatedBy = null;

	/**
	 * Id of the control panel command that created this config item 
	 * 
	 *
	 * @var string
	 */
	public $commandId = null;

	/**
	 * The status of the control panel command 
	 * 
	 *
	 * @var string
	 */
	public $commandStatus = null;

	/**
	 * The id of the scheduler 
	 * 
	 *
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * The configured id of the scheduler 
	 * 
	 *
	 * @var int
	 */
	public $schedulerConfiguredId = null;

	/**
	 * The name of the scheduler 
	 * 
	 *
	 * @var string
	 */
	public $schedulerName = null;

	/**
	 * The id of the job worker
	 * 
	 *
	 * @var int
	 */
	public $workerId = null;

	/**
	 * The configured id of the job worker
	 * 
	 *
	 * @var int
	 */
	public $workerConfiguredId = null;

	/**
	 * The name of the job worker
	 * 
	 *
	 * @var string
	 */
	public $workerName = null;

	/**
	 * The name of the variable
	 * 
	 *
	 * @var string
	 */
	public $variable = null;

	/**
	 * The part of the variable
	 * 
	 *
	 * @var string
	 */
	public $variablePart = null;

	/**
	 * The value of the variable
	 * 
	 *
	 * @var string
	 */
	public $value = null;


}

class BorhanBaseJob extends BorhanObjectBase
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
	 * @var int
	 * @readonly
	 */
	public $deletedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $processorExpiration = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $executionAttempts = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $lockVersion = null;


}

class BorhanJobData extends BorhanObjectBase
{

}

class BorhanBatchJob extends BorhanBaseJob
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryName = null;

	/**
	 * 
	 *
	 * @var BorhanBatchJobType
	 * @readonly
	 */
	public $jobType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $jobSubType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $onStressDivertTo = null;

	/**
	 * 
	 *
	 * @var BorhanJobData
	 */
	public $data;

	/**
	 * 
	 *
	 * @var BorhanBatchJobStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $abort = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $checkAgainTimeout = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $progress = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatesCount = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priority = null;

	/**
	 * The id of identical job
	 *
	 * @var int
	 */
	public $twinJobId = null;

	/**
	 * The id of the bulk upload job that initiated this job
	 *
	 * @var int
	 */
	public $bulkJobId = null;

	/**
	 * When one job creates another - the parent should set this parentJobId to be its own id.
	 *
	 * @var int
	 */
	public $parentJobId = null;

	/**
	 * The id of the root parent job
	 *
	 * @var int
	 */
	public $rootJobId = null;

	/**
	 * The time that the job was pulled from the queue
	 *
	 * @var int
	 */
	public $queueTime = null;

	/**
	 * The time that the job was finished or closed as failed
	 *
	 * @var int
	 */
	public $finishTime = null;

	/**
	 * 
	 *
	 * @var BorhanBatchJobErrorTypes
	 */
	public $errType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $errNumber = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fileSize = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $lastWorkerRemote = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $workerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $batchIndex = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastSchedulerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastWorkerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dc = null;


}

class BorhanSchedulerWorker extends BorhanObjectBase
{
	/**
	 * The id of the Worker
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The id as configured in the batch config
	 * 
	 *
	 * @var int
	 */
	public $configuredId = null;

	/**
	 * The id of the Scheduler
	 * 
	 *
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * The id of the scheduler as configured in the batch config
	 * 
	 *
	 * @var int
	 */
	public $schedulerConfiguredId = null;

	/**
	 * The worker type
	 * 
	 *
	 * @var BorhanBatchJobType
	 */
	public $type = null;

	/**
	 * The friendly name of the type
	 * 
	 *
	 * @var string
	 */
	public $typeName = null;

	/**
	 * The scheduler name
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Array of the last statuses
	 * 
	 *
	 * @var array of BorhanSchedulerStatus
	 */
	public $statuses;

	/**
	 * Array of the last configs
	 * 
	 *
	 * @var array of BorhanSchedulerConfig
	 */
	public $configs;

	/**
	 * Array of jobs that locked to this worker
	 * 
	 *
	 * @var array of BorhanBatchJob
	 */
	public $lockedJobs;

	/**
	 * Avarage time between creation and queue time
	 * 
	 *
	 * @var int
	 */
	public $avgWait = null;

	/**
	 * Avarage time between queue time end finish time
	 * 
	 *
	 * @var int
	 */
	public $avgWork = null;

	/**
	 * last status time
	 * 
	 *
	 * @var int
	 */
	public $lastStatus = null;

	/**
	 * last status formated
	 * 
	 *
	 * @var string
	 */
	public $lastStatusStr = null;


}

class BorhanScheduler extends BorhanObjectBase
{
	/**
	 * The id of the Scheduler
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The id as configured in the batch config
	 * 
	 *
	 * @var int
	 */
	public $configuredId = null;

	/**
	 * The scheduler name
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * The host name
	 * 
	 *
	 * @var string
	 */
	public $host = null;

	/**
	 * Array of the last statuses
	 * 
	 *
	 * @var array of BorhanSchedulerStatus
	 * @readonly
	 */
	public $statuses;

	/**
	 * Array of the last configs
	 * 
	 *
	 * @var array of BorhanSchedulerConfig
	 * @readonly
	 */
	public $configs;

	/**
	 * Array of the workers
	 * 
	 *
	 * @var array of BorhanSchedulerWorker
	 * @readonly
	 */
	public $workers;

	/**
	 * creation time
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * last status time
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $lastStatus = null;

	/**
	 * last status formated
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $lastStatusStr = null;


}

abstract class BorhanBaseJobBaseFilter extends BorhanFilter
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
	 * @var int
	 */
	public $idGreaterThanOrEqual = null;

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
	public $partnerIdNotIn = null;

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

	/**
	 * 
	 *
	 * @var int
	 */
	public $processorExpirationGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $processorExpirationLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $executionAttemptsGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $executionAttemptsLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lockVersionGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lockVersionLessThanOrEqual = null;


}

class BorhanBaseJobFilter extends BorhanBaseJobBaseFilter
{

}

abstract class BorhanBatchJobBaseFilter extends BorhanBaseJobFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var BorhanBatchJobType
	 */
	public $jobTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $jobTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $jobTypeNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $jobSubTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $jobSubTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $jobSubTypeNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $onStressDivertToEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $onStressDivertToIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $onStressDivertToNotIn = null;

	/**
	 * 
	 *
	 * @var BorhanBatchJobStatus
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
	public $statusNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $abortEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $checkAgainTimeoutGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $checkAgainTimeoutLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $progressGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $progressLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatesCountGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatesCountLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $priorityIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $priorityNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $twinJobIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $twinJobIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $twinJobIdNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $bulkJobIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bulkJobIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bulkJobIdNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $parentJobIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentJobIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentJobIdNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $rootJobIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rootJobIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rootJobIdNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $queueTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $queueTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $finishTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $finishTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var BorhanBatchJobErrorTypes
	 */
	public $errTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errTypeNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $errNumberEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errNumberIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errNumberNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fileSizeLessThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fileSizeGreaterThan = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $lastWorkerRemoteEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $schedulerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $schedulerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $schedulerIdNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $workerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $workerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $workerIdNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $batchIndexEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $batchIndexIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $batchIndexNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastSchedulerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $lastSchedulerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $lastSchedulerIdNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastWorkerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $lastWorkerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $lastWorkerIdNotIn = null;

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
	public $dcNotIn = null;


}

class BorhanBatchJobFilter extends BorhanBatchJobBaseFilter
{

}

class BorhanWorkerQueueFilter extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $workerId = null;

	/**
	 * 
	 *
	 * @var BorhanBatchJobType
	 */
	public $jobType = null;

	/**
	 * 
	 *
	 * @var BorhanBatchJobFilter
	 */
	public $filter;


}

class BorhanBatchQueuesStatus extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var BorhanBatchJobType
	 */
	public $jobType = null;

	/**
	 * The worker configured id
	 * 
	 *
	 * @var int
	 */
	public $workerId = null;

	/**
	 * The friendly name of the type
	 * 
	 *
	 * @var string
	 */
	public $typeName = null;

	/**
	 * The size of the queue
	 * 
	 *
	 * @var int
	 */
	public $size = null;

	/**
	 * The avarage wait time
	 * 
	 *
	 * @var int
	 */
	public $waitTime = null;


}

class BorhanControlPanelCommand extends BorhanObjectBase
{
	/**
	 * The id of the Category
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Creator name
	 * 
	 *
	 * @var string
	 */
	public $createdBy = null;

	/**
	 * Update date as Unix timestamp (In seconds)
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Updater name
	 * 
	 *
	 * @var string
	 */
	public $updatedBy = null;

	/**
	 * Creator id
	 * 
	 *
	 * @var int
	 */
	public $createdById = null;

	/**
	 * The id of the scheduler that the command refers to
	 * 
	 *
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * The id of the scheduler worker that the command refers to
	 * 
	 *
	 * @var int
	 */
	public $workerId = null;

	/**
	 * The id of the scheduler worker as configured in the ini file
	 * 
	 *
	 * @var int
	 */
	public $workerConfiguredId = null;

	/**
	 * The name of the scheduler worker that the command refers to
	 * 
	 *
	 * @var int
	 */
	public $workerName = null;

	/**
	 * The index of the batch process that the command refers to
	 * 
	 *
	 * @var int
	 */
	public $batchIndex = null;

	/**
	 * The command type - stop / start / config
	 * 
	 *
	 * @var BorhanControlPanelCommandType
	 */
	public $type = null;

	/**
	 * The command target type - data center / scheduler / job / job type
	 * 
	 *
	 * @var BorhanControlPanelCommandTargetType
	 */
	public $targetType = null;

	/**
	 * The command status
	 * 
	 *
	 * @var BorhanControlPanelCommandStatus
	 */
	public $status = null;

	/**
	 * The reason for the command
	 * 
	 *
	 * @var string
	 */
	public $cause = null;

	/**
	 * Command description
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Error description
	 * 
	 *
	 * @var string
	 */
	public $errorDescription = null;


}

class BorhanSchedulerStatusResponse extends BorhanObjectBase
{
	/**
	 * The status of all queues on the server
	 * 
	 *
	 * @var array of BorhanBatchQueuesStatus
	 */
	public $queuesStatus;

	/**
	 * The commands that sent from the control panel
	 * 
	 *
	 * @var array of BorhanControlPanelCommand
	 */
	public $controlPanelCommands;

	/**
	 * The configuration that sent from the control panel
	 * 
	 *
	 * @var array of BorhanSchedulerConfig
	 */
	public $schedulerConfigs;


}

abstract class BorhanControlPanelCommandBaseFilter extends BorhanFilter
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
	public $createdByIdEqual = null;

	/**
	 * 
	 *
	 * @var BorhanControlPanelCommandType
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
	 * @var BorhanControlPanelCommandTargetType
	 */
	public $targetTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $targetTypeIn = null;

	/**
	 * 
	 *
	 * @var BorhanControlPanelCommandStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;


}

class BorhanControlPanelCommandFilter extends BorhanControlPanelCommandBaseFilter
{

}

class BorhanControlPanelCommandListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanControlPanelCommand
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

class BorhanSchedulerListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanScheduler
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

class BorhanSchedulerWorkerListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanSchedulerWorker
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

class BorhanExclusiveLockKey extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $workerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $batchIndex = null;


}

class BorhanFreeJobResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var BorhanBatchJob
	 * @readonly
	 */
	public $job;

	/**
	 * 
	 *
	 * @var BorhanBatchJobType
	 * @readonly
	 */
	public $jobType = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $queueSize = null;


}

class BorhanBulkUploadPluginData extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $field = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $value = null;


}

class BorhanBulkUploadResult extends BorhanObjectBase
{
	/**
	 * The id of the result
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The id of the parent job
	 * 
	 *
	 * @var int
	 */
	public $bulkUploadJobId = null;

	/**
	 * The index of the line in the CSV
	 * 
	 *
	 * @var int
	 */
	public $lineIndex = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $entryStatus = null;

	/**
	 * The data as recieved in the csv
	 * 
	 *
	 * @var string
	 */
	public $rowData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $title = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

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
	public $url = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentType = null;

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
	public $accessControlProfileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $category = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $scheduleStartDate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $scheduleEndDate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbnailUrl = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $thumbnailSaved = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorDescription = null;

	/**
	 * 
	 *
	 * @var array of BorhanBulkUploadPluginData
	 */
	public $pluginsData;


}

class BorhanConvertCollectionFlavorData extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsOutputId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $readyBehavior = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $videoBitrate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $audioBitrate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncRemoteUrl = null;


}

class BorhanMediaInfo extends BorhanObjectBase
{
	/**
	 * The id of the media info
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The id of the related flavor asset
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * The file size
	 * 
	 *
	 * @var int
	 */
	public $fileSize = null;

	/**
	 * The container format
	 * 
	 *
	 * @var string
	 */
	public $containerFormat = null;

	/**
	 * The container id
	 * 
	 *
	 * @var string
	 */
	public $containerId = null;

	/**
	 * The container profile
	 * 
	 *
	 * @var string
	 */
	public $containerProfile = null;

	/**
	 * The container duration
	 * 
	 *
	 * @var int
	 */
	public $containerDuration = null;

	/**
	 * The container bit rate
	 * 
	 *
	 * @var int
	 */
	public $containerBitRate = null;

	/**
	 * The video format
	 * 
	 *
	 * @var string
	 */
	public $videoFormat = null;

	/**
	 * The video codec id
	 * 
	 *
	 * @var string
	 */
	public $videoCodecId = null;

	/**
	 * The video duration
	 * 
	 *
	 * @var int
	 */
	public $videoDuration = null;

	/**
	 * The video bit rate
	 * 
	 *
	 * @var int
	 */
	public $videoBitRate = null;

	/**
	 * The video bit rate mode
	 * 
	 *
	 * @var BorhanBitRateMode
	 */
	public $videoBitRateMode = null;

	/**
	 * The video width
	 * 
	 *
	 * @var int
	 */
	public $videoWidth = null;

	/**
	 * The video height
	 * 
	 *
	 * @var int
	 */
	public $videoHeight = null;

	/**
	 * The video frame rate
	 * 
	 *
	 * @var float
	 */
	public $videoFrameRate = null;

	/**
	 * The video display aspect ratio (dar)
	 * 
	 *
	 * @var float
	 */
	public $videoDar = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $videoRotation = null;

	/**
	 * The audio format
	 * 
	 *
	 * @var string
	 */
	public $audioFormat = null;

	/**
	 * The audio codec id
	 * 
	 *
	 * @var string
	 */
	public $audioCodecId = null;

	/**
	 * The audio duration
	 * 
	 *
	 * @var int
	 */
	public $audioDuration = null;

	/**
	 * The audio bit rate
	 * 
	 *
	 * @var int
	 */
	public $audioBitRate = null;

	/**
	 * The audio bit rate mode
	 * 
	 *
	 * @var BorhanBitRateMode
	 */
	public $audioBitRateMode = null;

	/**
	 * The number of audio channels
	 * 
	 *
	 * @var int
	 */
	public $audioChannels = null;

	/**
	 * The audio sampling rate
	 * 
	 *
	 * @var int
	 */
	public $audioSamplingRate = null;

	/**
	 * The audio resolution
	 * 
	 *
	 * @var int
	 */
	public $audioResolution = null;

	/**
	 * The writing library
	 * 
	 *
	 * @var string
	 */
	public $writingLib = null;

	/**
	 * The data as returned by the mediainfo command line
	 * 
	 *
	 * @var string
	 */
	public $rawData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $multiStreamInfo = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $scanType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $multiStream = null;


}

class BorhanNotification extends BorhanBaseJob
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $puserId = null;

	/**
	 * 
	 *
	 * @var BorhanNotificationType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var BorhanNotificationStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationData = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $numberOfAttempts = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationResult = null;

	/**
	 * 
	 *
	 * @var BorhanNotificationObjectType
	 */
	public $objType = null;


}

class BorhanKeyValue extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $key = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $value = null;


}

class BorhanPartner extends BorhanObjectBase
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
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $website = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $appearInSearch = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * deprecated - lastName and firstName replaces this field
	 *
	 * @var string
	 */
	public $adminName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var BorhanCommercialUseType
	 */
	public $commercialUse = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $landingPage = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userLandingPage = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentCategories = null;

	/**
	 * 
	 *
	 * @var BorhanPartnerType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $phone = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $describeYourself = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $adultContent = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defConversionProfileType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $notify = null;

	/**
	 * 
	 *
	 * @var BorhanPartnerStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $allowQuickEdit = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mergeEntryLists = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationsConfig = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxUploadSize = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerPackage = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $secret = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $adminSecret = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $cmsPassword = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $allowMultiNotification = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $adminLoginUsersQuota = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminUserId = null;

	/**
	 * firstName and lastName replace the old (deprecated) adminName
	 *
	 * @var string
	 */
	public $firstName = null;

	/**
	 * lastName and firstName replace the old (deprecated) adminName
	 *
	 * @var string
	 */
	public $lastName = null;

	/**
	 * country code (2char) - this field is optional
	 * 
	 *
	 * @var string
	 */
	public $country = null;

	/**
	 * state code (2char) - this field is optional
	 *
	 * @var string
	 */
	public $state = null;

	/**
	 * 
	 *
	 * @var array of BorhanKeyValue
	 * @insertonly
	 */
	public $additionalParams;


}

class BorhanBatchGetExclusiveNotificationJobsResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanNotification
	 * @readonly
	 */
	public $notifications;

	/**
	 * 
	 *
	 * @var array of BorhanPartner
	 * @readonly
	 */
	public $partners;


}

class BorhanFileExistsResponse extends BorhanObjectBase
{
	/**
	 * Indicates if the file exists
	 * 
	 *
	 * @var bool
	 */
	public $exists = null;

	/**
	 * Indicates if the file size is right
	 * 
	 *
	 * @var bool
	 */
	public $sizeOk = null;


}

class BorhanBulkUpload extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $uploadedBy = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $uploadedByUserId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uploadedOn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $numOfEntries = null;

	/**
	 * 
	 *
	 * @var BorhanBatchJobStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $logFileUrl = null;

	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public $csvFileUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bulkFileUrl = null;

	/**
	 * 
	 *
	 * @var array of BorhanBulkUploadResult
	 */
	public $results;

	/**
	 * 
	 *
	 * @var string
	 */
	public $error = null;

	/**
	 * 
	 *
	 * @var BorhanBatchJobErrorTypes
	 */
	public $errorType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $errorNumber = null;


}

class BorhanBulkUploadListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanBulkUpload
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

class BorhanCategory extends BorhanObjectBase
{
	/**
	 * The id of the Category
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
	 */
	public $parentId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $depth = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The name of the Category. 
	 * The following characters are not allowed: '<', '>', ','
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * The full name of the Category
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $fullName = null;

	/**
	 * Number of entries in this Category (including child categories)
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $entriesCount = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;


}

abstract class BorhanCategoryBaseFilter extends BorhanFilter
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
	public $parentIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $depthEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullNameStartsWith = null;


}

class BorhanCategoryFilter extends BorhanCategoryBaseFilter
{

}

class BorhanCategoryListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanCategory
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

abstract class BorhanConversionProfileAssetParamsBaseFilter extends BorhanFilter
{
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
	public $assetParamsIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetParamsIdIn = null;

	/**
	 * 
	 *
	 * @var BorhanFlavorReadyBehaviorType
	 */
	public $readyBehaviorEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $readyBehaviorIn = null;

	/**
	 * 
	 *
	 * @var BorhanAssetParamsOrigin
	 */
	public $originEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $originIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;


}

abstract class BorhanConversionProfileBaseFilter extends BorhanFilter
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
	 * @var BorhanConversionProfileStatus
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
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;

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
	 * @var string
	 */
	public $defaultEntryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultEntryIdIn = null;


}

class BorhanConversionProfileFilter extends BorhanConversionProfileBaseFilter
{

}

abstract class BorhanAssetParamsBaseFilter extends BorhanFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;

	/**
	 * 
	 *
	 * @var BorhanNullableBoolean
	 */
	public $isSystemDefaultEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsEqual = null;

	/**
	 * 
	 *
	 * @var BorhanContainerFormat
	 */
	public $formatEqual = null;


}

class BorhanAssetParamsFilter extends BorhanAssetParamsBaseFilter
{

}

class BorhanConversionProfileAssetParamsFilter extends BorhanConversionProfileAssetParamsBaseFilter
{
	/**
	 * 
	 *
	 * @var BorhanConversionProfileFilter
	 */
	public $conversionProfileIdFilter;

	/**
	 * 
	 *
	 * @var BorhanAssetParamsFilter
	 */
	public $assetParamsIdFilter;


}

class BorhanConversionProfileAssetParams extends BorhanObjectBase
{
	/**
	 * The id of the conversion profile
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $conversionProfileId = null;

	/**
	 * The id of the asset params
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $assetParamsId = null;

	/**
	 * The ingestion origin of the asset params
	 * 
	 *
	 * @var BorhanFlavorReadyBehaviorType
	 */
	public $readyBehavior = null;

	/**
	 * The ingestion origin of the asset params
	 * 
	 *
	 * @var BorhanAssetParamsOrigin
	 */
	public $origin = null;

	/**
	 * Asset params system name
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;


}

class BorhanConversionProfileAssetParamsListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanConversionProfileAssetParams
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

class BorhanCropDimensions extends BorhanObjectBase
{
	/**
	 * Crop left point
	 * 
	 *
	 * @var int
	 */
	public $left = null;

	/**
	 * Crop top point
	 * 
	 *
	 * @var int
	 */
	public $top = null;

	/**
	 * Crop width
	 * 
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * Crop height
	 * 
	 *
	 * @var int
	 */
	public $height = null;


}

class BorhanConversionProfile extends BorhanObjectBase
{
	/**
	 * The id of the Conversion Profile
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
	 * @var BorhanConversionProfileStatus
	 */
	public $status = null;

	/**
	 * The name of the Conversion Profile
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * System name of the Conversion Profile
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * Comma separated tags
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * The description of the Conversion Profile
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * ID of the default entry to be used for template data
	 * 
	 *
	 * @var string
	 */
	public $defaultEntryId = null;

	/**
	 * Creation date as Unix timestamp (In seconds) 
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * List of included flavor ids (comma separated)
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsIds = null;

	/**
	 * Indicates that this conversion profile is system default
	 * 
	 *
	 * @var BorhanNullableBoolean
	 */
	public $isDefault = null;

	/**
	 * Indicates that this conversion profile is partner default
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $isPartnerDefault = null;

	/**
	 * Cropping dimensions
	 * DEPRECATED
	 *
	 * @var BorhanCropDimensions
	 */
	public $cropDimensions;

	/**
	 * Clipping start position (in miliseconds)
	 * DEPRECATED
	 *
	 * @var int
	 */
	public $clipStart = null;

	/**
	 * Clipping duration (in miliseconds)
	 * DEPRECATED
	 *
	 * @var int
	 */
	public $clipDuration = null;

	/**
	 * XSL to transform ingestion MRSS XML
	 * 
	 *
	 * @var string
	 */
	public $xslTransformation = null;

	/**
	 * ID of default storage profile to be used for linked net-storage file syncs
	 * 
	 *
	 * @var int
	 */
	public $storageProfileId = null;


}

class BorhanConversionProfileListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanConversionProfile
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

class BorhanDataEntry extends BorhanBaseEntry
{
	/**
	 * The data of the entry
	 *
	 * @var string
	 */
	public $dataContent = null;

	/**
	 * indicator whether to return the object for get action with the dataContent field.
	 *
	 * @var bool
	 * @insertonly
	 */
	public $retrieveDataContentByGet = null;


}

abstract class BorhanDataEntryBaseFilter extends BorhanBaseEntryFilter
{

}

class BorhanDataEntryFilter extends BorhanDataEntryBaseFilter
{

}

class BorhanDataListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanDataEntry
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

class BorhanConversionAttribute extends BorhanObjectBase
{
	/**
	 * The id of the flavor params, set to null for source flavor
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsId = null;

	/**
	 * Attribute name  
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Attribute value  
	 * 
	 *
	 * @var string
	 */
	public $value = null;


}

class BorhanEmailIngestionProfile extends BorhanObjectBase
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
	 * @var string
	 */
	public $emailAddress = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $mailboxId = null;

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
	 */
	public $conversionProfile2Id = null;

	/**
	 * 
	 *
	 * @var BorhanEntryModerationStatus
	 */
	public $moderationStatus = null;

	/**
	 * 
	 *
	 * @var BorhanEmailIngestionProfileStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultCategory = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultUserId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultTags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultAdminTags = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxAttachmentSizeKbytes = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxAttachmentsPerMail = null;


}

class BorhanPlayableEntry extends BorhanBaseEntry
{
	/**
	 * Number of plays
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $plays = null;

	/**
	 * Number of views
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $views = null;

	/**
	 * The width in pixels
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $width = null;

	/**
	 * The height in pixels
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $height = null;

	/**
	 * The duration in seconds
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $duration = null;

	/**
	 * The duration in miliseconds
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $msDuration = null;

	/**
	 * The duration type (short for 0-4 mins, medium for 4-20 mins, long for 20+ mins)
	 * 
	 *
	 * @var BorhanDurationType
	 * @readonly
	 */
	public $durationType = null;


}

class BorhanMediaEntry extends BorhanPlayableEntry
{
	/**
	 * The media type of the entry
	 * 
	 *
	 * @var BorhanMediaType
	 * @insertonly
	 */
	public $mediaType = null;

	/**
	 * Override the default conversion quality
	 * DEPRECATED - use conversionProfileId instead
	 *
	 * @var string
	 * @insertonly
	 */
	public $conversionQuality = null;

	/**
	 * The source type of the entry 
	 *
	 * @var BorhanSourceType
	 * @insertonly
	 */
	public $sourceType = null;

	/**
	 * The search provider type used to import this entry
	 *
	 * @var BorhanSearchProviderType
	 * @insertonly
	 */
	public $searchProviderType = null;

	/**
	 * The ID of the media in the importing site
	 *
	 * @var string
	 * @insertonly
	 */
	public $searchProviderId = null;

	/**
	 * The user name used for credits
	 *
	 * @var string
	 */
	public $creditUserName = null;

	/**
	 * The URL for credits
	 *
	 * @var string
	 */
	public $creditUrl = null;

	/**
	 * The media date extracted from EXIF data (For images) as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $mediaDate = null;

	/**
	 * The URL used for playback. This is not the download URL.
	 *
	 * @var string
	 * @readonly
	 */
	public $dataUrl = null;

	/**
	 * Comma separated flavor params ids that exists for this media entry
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $flavorParamsIds = null;


}

class BorhanAsset extends BorhanObjectBase
{
	/**
	 * The ID of the Flavor Asset
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * The entry ID of the Flavor Asset
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The status of the Flavor Asset
	 * 
	 *
	 * @var BorhanFlavorAssetStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The version of the Flavor Asset
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * The size (in KBytes) of the Flavor Asset
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $size = null;

	/**
	 * Tags used to identify the Flavor Asset in various scenarios
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * The file extension
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $fileExt = null;

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
	 * @var int
	 * @readonly
	 */
	public $deletedAt = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $description = null;


}

class BorhanFlavorAsset extends BorhanAsset
{
	/**
	 * The Flavor Params used to create this Flavor Asset
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $flavorParamsId = null;

	/**
	 * The width of the Flavor Asset 
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $width = null;

	/**
	 * The height of the Flavor Asset
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $height = null;

	/**
	 * The overall bitrate (in KBits) of the Flavor Asset 
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $bitrate = null;

	/**
	 * The frame rate (in FPS) of the Flavor Asset
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $frameRate = null;

	/**
	 * True if this Flavor Asset is the original source
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $isOriginal = null;

	/**
	 * True if this Flavor Asset is playable in BDP
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $isWeb = null;

	/**
	 * The container format
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $containerFormat = null;

	/**
	 * The video codec
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $videoCodecId = null;


}

abstract class BorhanContentResource extends BorhanResource
{

}

abstract class BorhanAssetBaseFilter extends BorhanFilter
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
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdIn = null;

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
	 * @var BorhanFlavorAssetStatus
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
	public $statusNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sizeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sizeLessThanOrEqual = null;

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

	/**
	 * 
	 *
	 * @var int
	 */
	public $deletedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $deletedAtLessThanOrEqual = null;


}

class BorhanAssetFilter extends BorhanAssetBaseFilter
{

}

class BorhanFlavorAssetListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanFlavorAsset
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

class BorhanString extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $value = null;


}

class BorhanAssetParams extends BorhanObjectBase
{
	/**
	 * The id of the Flavor Params
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
	 * The name of the Flavor Params
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * System name of the Flavor Params
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * The description of the Flavor Params
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * True if those Flavor Params are part of system defaults
	 * 
	 *
	 * @var BorhanNullableBoolean
	 * @readonly
	 */
	public $isSystemDefault = null;

	/**
	 * The Flavor Params tags are used to identify the flavor for different usage (e.g. web, hd, mobile)
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * The container format of the Flavor Params
	 * 
	 *
	 * @var BorhanContainerFormat
	 */
	public $format = null;

	/**
	 * Array of partner permisison names that required for using this asset params
	 * 
	 *
	 * @var array of BorhanString
	 */
	public $requiredPermissions;


}

class BorhanFlavorParams extends BorhanAssetParams
{
	/**
	 * The video codec of the Flavor Params
	 * 
	 *
	 * @var BorhanVideoCodec
	 */
	public $videoCodec = null;

	/**
	 * The video bitrate (in KBits) of the Flavor Params
	 * 
	 *
	 * @var int
	 */
	public $videoBitrate = null;

	/**
	 * The audio codec of the Flavor Params
	 * 
	 *
	 * @var BorhanAudioCodec
	 */
	public $audioCodec = null;

	/**
	 * The audio bitrate (in KBits) of the Flavor Params
	 * 
	 *
	 * @var int
	 */
	public $audioBitrate = null;

	/**
	 * The number of audio channels for "downmixing"
	 * 
	 *
	 * @var int
	 */
	public $audioChannels = null;

	/**
	 * The audio sample rate of the Flavor Params
	 * 
	 *
	 * @var int
	 */
	public $audioSampleRate = null;

	/**
	 * The desired width of the Flavor Params
	 * 
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * The desired height of the Flavor Params
	 * 
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * The frame rate of the Flavor Params
	 * 
	 *
	 * @var int
	 */
	public $frameRate = null;

	/**
	 * The gop size of the Flavor Params
	 * 
	 *
	 * @var int
	 */
	public $gopSize = null;

	/**
	 * The list of conversion engines (comma separated)
	 * 
	 *
	 * @var string
	 */
	public $conversionEngines = null;

	/**
	 * The list of conversion engines extra params (separated with "|")
	 * 
	 *
	 * @var string
	 */
	public $conversionEnginesExtraParams = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $twoPass = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $deinterlice = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $rotate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $operators = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $engineVersion = null;


}

class BorhanFlavorAssetWithParams extends BorhanObjectBase
{
	/**
	 * The Flavor Asset (Can be null when there are params without asset)
	 * 
	 *
	 * @var BorhanFlavorAsset
	 */
	public $flavorAsset;

	/**
	 * The Flavor Params
	 * 
	 *
	 * @var BorhanFlavorParams
	 */
	public $flavorParams;

	/**
	 * The entry id
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;


}

abstract class BorhanFlavorParamsBaseFilter extends BorhanAssetParamsFilter
{

}

class BorhanFlavorParamsFilter extends BorhanFlavorParamsBaseFilter
{

}

class BorhanFlavorParamsListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanFlavorParams
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

class BorhanBatchJobResponse extends BorhanObjectBase
{
	/**
	 * The main batch job
	 * 
	 *
	 * @var BorhanBatchJob
	 */
	public $batchJob;

	/**
	 * All batch jobs that reference the main job as root
	 * 
	 *
	 * @var array of BorhanBatchJob
	 */
	public $childBatchJobs;


}

class BorhanMailJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var BorhanMailType
	 */
	public $mailType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mailPriority = null;

	/**
	 * 
	 *
	 * @var BorhanMailJobStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recipientName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recipientEmail = null;

	/**
	 * kuserId  
	 *
	 * @var int
	 */
	public $recipientId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fromName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fromEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bodyParams = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $subjectParams = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templatePath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $culture = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $campaignId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $minSendDate = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isHtml = null;


}

class BorhanBatchJobFilterExt extends BorhanBatchJobFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $jobTypeAndSubTypeIn = null;


}

class BorhanBatchJobListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanBatchJob
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

class BorhanLiveStreamBitrate extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $bitrate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $height = null;


}

class BorhanLiveStreamEntry extends BorhanMediaEntry
{
	/**
	 * The message to be presented when the stream is offline
	 * 
	 *
	 * @var string
	 */
	public $offlineMessage = null;

	/**
	 * The stream id as provided by the provider
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $streamRemoteId = null;

	/**
	 * The backup stream id as provided by the provider
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $streamRemoteBackupId = null;

	/**
	 * Array of supported bitrates
	 * 
	 *
	 * @var array of BorhanLiveStreamBitrate
	 */
	public $bitrates;

	/**
	 * 
	 *
	 * @var string
	 */
	public $primaryBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $secondaryBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $streamName = null;


}

class BorhanLiveStreamAdminEntry extends BorhanLiveStreamEntry
{
	/**
	 * The broadcast primary ip
	 * 
	 *
	 * @var string
	 */
	public $encodingIP1 = null;

	/**
	 * The broadcast secondary ip
	 * 
	 *
	 * @var string
	 */
	public $encodingIP2 = null;

	/**
	 * The broadcast password
	 * 
	 *
	 * @var string
	 */
	public $streamPassword = null;

	/**
	 * The broadcast username
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $streamUsername = null;


}

abstract class BorhanPlayableEntryBaseFilter extends BorhanBaseEntryFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $durationLessThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $durationGreaterThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $durationLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $durationGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $msDurationLessThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $msDurationGreaterThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $msDurationLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $msDurationGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $durationTypeMatchOr = null;


}

class BorhanPlayableEntryFilter extends BorhanPlayableEntryBaseFilter
{

}

abstract class BorhanMediaEntryBaseFilter extends BorhanPlayableEntryFilter
{
	/**
	 * 
	 *
	 * @var BorhanMediaType
	 */
	public $mediaTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $mediaTypeIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaDateGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaDateLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsIdsMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsIdsMatchAnd = null;


}

class BorhanMediaEntryFilter extends BorhanMediaEntryBaseFilter
{

}

abstract class BorhanLiveStreamEntryBaseFilter extends BorhanMediaEntryFilter
{

}

class BorhanLiveStreamEntryFilter extends BorhanLiveStreamEntryBaseFilter
{

}

class BorhanLiveStreamListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanLiveStreamEntry
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

class BorhanSearch extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $keyWords = null;

	/**
	 * 
	 *
	 * @var BorhanSearchProviderType
	 */
	public $searchSource = null;

	/**
	 * 
	 *
	 * @var BorhanMediaType
	 */
	public $mediaType = null;

	/**
	 * Use this field to pass dynamic data for searching
	 * For example - if you set this field to "mymovies_$partner_id"
	 * The $partner_id will be automatically replcaed with your real partner Id
	 * 
	 *
	 * @var string
	 */
	public $extraData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $authData = null;


}

class BorhanSearchResult extends BorhanSearch
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $title = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

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
	public $url = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceLink = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $credit = null;

	/**
	 * 
	 *
	 * @var BorhanLicenseType
	 */
	public $licenseType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flashPlaybackType = null;


}

class BorhanMediaListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanMediaEntry
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

class BorhanMixEntry extends BorhanPlayableEntry
{
	/**
	 * Indicates whether the user has submited a real thumbnail to the mix (Not the one that was generated automaticaly)
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $hasRealThumbnail = null;

	/**
	 * The editor type used to edit the metadata
	 * 
	 *
	 * @var BorhanEditorType
	 */
	public $editorType = null;

	/**
	 * The xml data of the mix
	 *
	 * @var string
	 */
	public $dataContent = null;


}

abstract class BorhanMixEntryBaseFilter extends BorhanPlayableEntryFilter
{

}

class BorhanMixEntryFilter extends BorhanMixEntryBaseFilter
{

}

class BorhanMixListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanMixEntry
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

class BorhanClientNotification extends BorhanObjectBase
{
	/**
	 * The URL where the notification should be sent to 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * The serialized notification data to send
	 *
	 * @var string
	 */
	public $data = null;


}

class BorhanPartnerUsage extends BorhanObjectBase
{
	/**
	 * Partner total hosting in GB on the disk
	 * 
	 *
	 * @var float
	 * @readonly
	 */
	public $hostingGB = null;

	/**
	 * percent of usage out of partner's package. if usageGB is 5 and package is 10GB, this value will be 50
	 * 
	 *
	 * @var float
	 * @readonly
	 */
	public $Percent = null;

	/**
	 * package total BW - actually this is usage, which represents BW+storage
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $packageBW = null;

	/**
	 * total usage in GB - including bandwidth and storage
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $usageGB = null;

	/**
	 * date when partner reached the limit of his package (timestamp)
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $reachedLimitDate = null;

	/**
	 * a semi-colon separated list of comma-separated key-values to represent a usage graph.
	 * keys could be 1-12 for a year view (1,1.2;2,1.1;3,0.9;...;12,1.4;)
	 * keys could be 1-[28,29,30,31] depending on the requested month, for a daily view in a given month (1,0.4;2,0.2;...;31,0.1;)
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $usageGraph = null;


}

abstract class BorhanPermissionItem extends BorhanObjectBase
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
	 * @var BorhanPermissionItemType
	 * @readonly
	 */
	public $type = null;

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
	 * @var string
	 */
	public $tags = null;

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

abstract class BorhanPermissionItemBaseFilter extends BorhanFilter
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
	 * @var BorhanPermissionItemType
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

class BorhanPermissionItemFilter extends BorhanPermissionItemBaseFilter
{

}

class BorhanPermissionItemListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanPermissionItem
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

class BorhanPermission extends BorhanObjectBase
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
	 * @var BorhanPermissionType
	 * @readonly
	 */
	public $type = null;

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
	public $friendlyName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var BorhanPermissionStatus
	 */
	public $status = null;

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
	 * @var string
	 */
	public $dependsOnPermissionNames = null;

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
	public $permissionItemsIds = null;

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
	 * @var string
	 */
	public $partnerGroup = null;


}

abstract class BorhanPermissionBaseFilter extends BorhanFilter
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
	 * @var BorhanPermissionType
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
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $friendlyNameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $descriptionLike = null;

	/**
	 * 
	 *
	 * @var BorhanPermissionStatus
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
	public $dependsOnPermissionNamesMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dependsOnPermissionNamesMultiLikeAnd = null;

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

class BorhanPermissionFilter extends BorhanPermissionBaseFilter
{

}

class BorhanPermissionListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanPermission
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

class BorhanMediaEntryFilterForPlaylist extends BorhanMediaEntryFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $limit = null;


}

class BorhanPlaylist extends BorhanBaseEntry
{
	/**
	 * Content of the playlist - 
	 * XML if the playlistType is dynamic 
	 * text if the playlistType is static 
	 * url if the playlistType is mRss 
	 *
	 * @var string
	 */
	public $playlistContent = null;

	/**
	 * 
	 *
	 * @var array of BorhanMediaEntryFilterForPlaylist
	 */
	public $filters;

	/**
	 * 
	 *
	 * @var int
	 */
	public $totalResults = null;

	/**
	 * Type of playlist  
	 *
	 * @var BorhanPlaylistType
	 */
	public $playlistType = null;

	/**
	 * Number of plays
	 *
	 * @var int
	 * @readonly
	 */
	public $plays = null;

	/**
	 * Number of views
	 *
	 * @var int
	 * @readonly
	 */
	public $views = null;

	/**
	 * The duration in seconds
	 *
	 * @var int
	 * @readonly
	 */
	public $duration = null;


}

abstract class BorhanPlaylistBaseFilter extends BorhanBaseEntryFilter
{

}

class BorhanPlaylistFilter extends BorhanPlaylistBaseFilter
{

}

class BorhanPlaylistListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanPlaylist
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

class BorhanReportInputFilter extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $fromDate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $toDate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $keywords = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $searchInTags = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $searchInAdminTags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categories = null;

	/**
	 * time zone offset in minutes
	 *
	 * @var int
	 */
	public $timeZoneOffset = null;


}

class BorhanReportGraph extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;


}

class BorhanReportTotal extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $header = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;


}

class BorhanReportTable extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $header = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $data = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class BorhanSearchResultResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanSearchResult
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $needMediaInfo = null;


}

class BorhanSearchAuthData extends BorhanObjectBase
{
	/**
	 * The authentication data that further should be used for search
	 * 
	 *
	 * @var string
	 */
	public $authData = null;

	/**
	 * Login URL when user need to sign-in and authorize the search
	 *
	 * @var string
	 */
	public $loginUrl = null;

	/**
	 * Information when there was an error
	 *
	 * @var string
	 */
	public $message = null;


}

class BorhanStartWidgetSessionResponse extends BorhanObjectBase
{
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
	 * @var string
	 * @readonly
	 */
	public $ks = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;


}

class BorhanStatsEvent extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $clientVer = null;

	/**
	 * 
	 *
	 * @var BorhanStatsEventType
	 */
	public $eventType = null;

	/**
	 * the client's timestamp of this event
	 * 
	 *
	 * @var float
	 */
	public $eventTimestamp = null;

	/**
	 * a unique string generated by the client that will represent the client-side session: the primary component will pass it on to other components that sprout from it
	 *
	 * @var string
	 */
	public $sessionId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * the UV cookie - creates in the operational system and should be passed on ofr every event 
	 *
	 * @var string
	 */
	public $uniqueViewer = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $widgetId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uiconfId = null;

	/**
	 * the partner's user id 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * the timestamp along the video when the event happend 
	 *
	 * @var int
	 */
	public $currentPoint = null;

	/**
	 * the duration of the video in milliseconds - will make it much faster than quering the db for each entry 
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * will be retrieved from the request of the user 
	 *
	 * @var string
	 * @readonly
	 */
	public $userIp = null;

	/**
	 * the time in milliseconds the event took
	 *
	 * @var int
	 */
	public $processDuration = null;

	/**
	 * the id of the GUI control - will be used in the future to better understand what the user clicked
	 *
	 * @var string
	 */
	public $controlId = null;

	/**
	 * true if the user ever used seek in this session 
	 *
	 * @var bool
	 */
	public $seek = null;

	/**
	 * timestamp of the new point on the timeline of the video after the user seeks 
	 *
	 * @var int
	 */
	public $newPoint = null;

	/**
	 * the referrer of the client
	 *
	 * @var string
	 */
	public $referrer = null;

	/**
	 * will indicate if the event is thrown for the first video in the session
	 *
	 * @var bool
	 */
	public $isFirstInSession = null;


}

class BorhanStatsBmcEvent extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $clientVer = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bmcEventActionPath = null;

	/**
	 * 
	 *
	 * @var BorhanStatsBmcEventType
	 */
	public $bmcEventType = null;

	/**
	 * the client's timestamp of this event
	 * 
	 *
	 * @var float
	 */
	public $eventTimestamp = null;

	/**
	 * a unique string generated by the client that will represent the client-side session: the primary component will pass it on to other components that sprout from it
	 *
	 * @var string
	 */
	public $sessionId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $widgetId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uiconfId = null;

	/**
	 * the partner's user id 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * will be retrieved from the request of the user 
	 *
	 * @var string
	 * @readonly
	 */
	public $userIp = null;


}

class BorhanCEError extends BorhanObjectBase
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
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $browser = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverIp = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverOs = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $phpVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ceAdminEmail = null;

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
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;


}

abstract class BorhanStorageProfileBaseFilter extends BorhanFilter
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
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;

	/**
	 * 
	 *
	 * @var BorhanStorageProfileStatus
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
	 * @var BorhanStorageProfileProtocol
	 */
	public $protocolEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $protocolIn = null;


}

class BorhanStorageProfileFilter extends BorhanStorageProfileBaseFilter
{

}

class BorhanStorageProfile extends BorhanObjectBase
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
	 * @var int
	 * @readonly
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
	public $systemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $desciption = null;

	/**
	 * 
	 *
	 * @var BorhanStorageProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var BorhanStorageProfileProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storageUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storageBaseDir = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storageUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storagePassword = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $storageFtpPassiveMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $deliveryHttpBaseUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $deliveryRmpBaseUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $deliveryIisBaseUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $minFileSize = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxFileSize = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsIds = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxConcurrentConnections = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pathManagerClass = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $urlManagerClass = null;

	/**
	 * No need to create enum for temp field
	 * 
	 *
	 * @var int
	 */
	public $trigger = null;


}

class BorhanStorageProfileListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanStorageProfile
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

abstract class BorhanBaseSyndicationFeed extends BorhanObjectBase
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
	 * @var string
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * link a playlist that will set what content the feed will include
	 * if empty, all content will be included in feed
	 * 
	 *
	 * @var string
	 */
	public $playlistId = null;

	/**
	 * feed name
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * feed status
	 * 
	 *
	 * @var BorhanSyndicationFeedStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * feed type
	 * 
	 *
	 * @var BorhanSyndicationFeedType
	 * @insertonly
	 */
	public $type = null;

	/**
	 * Base URL for each video, on the partners site
	 * This is required by all syndication types.
	 *
	 * @var string
	 */
	public $landingPage = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * allow_embed tells google OR yahoo weather to allow embedding the video on google OR yahoo video results
	 * or just to provide a link to the landing page.
	 * it is applied on the video-player_loc property in the XML (google)
	 * and addes media-player tag (yahoo)
	 *
	 * @var bool
	 */
	public $allowEmbed = null;

	/**
	 * Select a uiconf ID as player skin to include in the bwidget url
	 *
	 * @var int
	 */
	public $playerUiconfId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $transcodeExistingContent = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $addToDefaultConversionProfile = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categories = null;


}

abstract class BorhanBaseSyndicationFeedBaseFilter extends BorhanFilter
{

}

class BorhanBaseSyndicationFeedFilter extends BorhanBaseSyndicationFeedBaseFilter
{

}

class BorhanBaseSyndicationFeedListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanBaseSyndicationFeed
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

class BorhanSyndicationFeedEntryCount extends BorhanObjectBase
{
	/**
	 * the total count of entries that should appear in the feed without flavor filtering
	 *
	 * @var int
	 */
	public $totalEntryCount = null;

	/**
	 * count of entries that will appear in the feed (including all relevant filters)
	 *
	 * @var int
	 */
	public $actualEntryCount = null;

	/**
	 * count of entries that requires transcoding in order to be included in feed
	 *
	 * @var int
	 */
	public $requireTranscodingCount = null;


}

class BorhanThumbAsset extends BorhanAsset
{
	/**
	 * The Flavor Params used to create this Flavor Asset
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $thumbParamsId = null;

	/**
	 * The width of the Flavor Asset 
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $width = null;

	/**
	 * The height of the Flavor Asset
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $height = null;


}

class BorhanThumbParams extends BorhanAssetParams
{
	/**
	 * 
	 *
	 * @var BorhanThumbCropType
	 */
	public $cropType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $quality = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $cropX = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $cropY = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $cropWidth = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $cropHeight = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $videoOffset = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $scaleWidth = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $scaleHeight = null;

	/**
	 * Hexadecimal value
	 *
	 * @var string
	 */
	public $backgroundColor = null;

	/**
	 * Id of the flavor params or the thumbnail params to be used as source for the thumbnail creation
	 *
	 * @var int
	 */
	public $sourceParamsId = null;


}

class BorhanThumbAssetListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanThumbAsset
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

abstract class BorhanThumbParamsBaseFilter extends BorhanAssetParamsFilter
{

}

class BorhanThumbParamsFilter extends BorhanThumbParamsBaseFilter
{

}

class BorhanThumbParamsListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanThumbParams
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

class BorhanUiConf extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Name of the uiConf, this is not a primary key
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
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var BorhanUiConfObjType
	 */
	public $objType = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $objTypeAsString = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $htmlParams = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $swfUrl = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $confFilePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $confFile = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $confFileFeatures = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $confVars = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $useCdn = null;

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
	public $swfUrlVersion = null;

	/**
	 * Entry creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Entry creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var BorhanUiConfCreationMode
	 */
	public $creationMode = null;


}

abstract class BorhanUiConfBaseFilter extends BorhanFilter
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
	 * @var string
	 */
	public $nameLike = null;

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
	 * @var BorhanUiConfObjType
	 */
	public $objTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objTypeIn = null;

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

	/**
	 * 
	 *
	 * @var BorhanUiConfCreationMode
	 */
	public $creationModeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $creationModeIn = null;


}

class BorhanUiConfFilter extends BorhanUiConfBaseFilter
{

}

class BorhanUiConfListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanUiConf
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

class BorhanUiConfTypeInfo extends BorhanObjectBase
{
	/**
	 * UiConf Type
	 * 
	 *
	 * @var BorhanUiConfObjType
	 */
	public $type = null;

	/**
	 * Available versions
	 * 
	 *
	 * @var array of BorhanString
	 */
	public $versions;

	/**
	 * The direcotry this type is saved at
	 * 
	 *
	 * @var string
	 */
	public $directory = null;

	/**
	 * Filename for this UiConf type
	 * 
	 *
	 * @var string
	 */
	public $filename = null;


}

class BorhanUploadResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $uploadTokenId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fileSize = null;

	/**
	 * 
	 *
	 * @var BorhanUploadErrorCode
	 */
	public $errorCode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorDescription = null;


}

class BorhanUploadToken extends BorhanObjectBase
{
	/**
	 * Upload token unique ID
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Partner ID of the upload token
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * User id for the upload token
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * Status of the upload token
	 *
	 * @var BorhanUploadTokenStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Name of the file for the upload token, can be empty when the upload token is created and will be updated internally after the file is uploaded
	 *
	 * @var string
	 * @insertonly
	 */
	public $fileName = null;

	/**
	 * File size in bytes, can be empty when the upload token is created and will be updated internally after the file is uploaded
	 *
	 * @var float
	 * @insertonly
	 */
	public $fileSize = null;

	/**
	 * Uploaded file size in bytes, can be used to identify how many bytes were uploaded before resuming
	 *
	 * @var float
	 * @readonly
	 */
	public $uploadedFileSize = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;


}

abstract class BorhanUploadTokenBaseFilter extends BorhanFilter
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
	public $userIdEqual = null;

	/**
	 * 
	 *
	 * @var BorhanUploadTokenStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;


}

class BorhanUploadTokenFilter extends BorhanUploadTokenBaseFilter
{

}

class BorhanUploadTokenListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanUploadToken
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

class BorhanUserRole extends BorhanObjectBase
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
	 * @var BorhanUserRoleStatus
	 */
	public $status = null;

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
	 * @var string
	 */
	public $permissionNames = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

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

abstract class BorhanUserRoleBaseFilter extends BorhanFilter
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
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $descriptionLike = null;

	/**
	 * 
	 *
	 * @var BorhanUserRoleStatus
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

class BorhanUserRoleFilter extends BorhanUserRoleBaseFilter
{

}

class BorhanUserRoleListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanUserRole
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

abstract class BorhanUserBaseFilter extends BorhanFilter
{
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
	public $screenNameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $screenNameStartsWith = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $emailLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $emailStartsWith = null;

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
	 * @var BorhanUserStatus
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
	 * @var bool
	 */
	public $isAdminEqual = null;


}

class BorhanUserFilter extends BorhanUserBaseFilter
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
	 * @var bool
	 */
	public $loginEnabledEqual = null;


}

class BorhanUserListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanUser
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

class BorhanWidget extends BorhanObjectBase
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
	 * @var string
	 */
	public $sourceWidgetId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $rootWidgetId = null;

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
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uiConfId = null;

	/**
	 * 
	 *
	 * @var BorhanWidgetSecurityType
	 */
	public $securityType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $securityPolicy = null;

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
	 * Can be used to store various partner related data as a string 
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $widgetHTML = null;


}

abstract class BorhanWidgetBaseFilter extends BorhanFilter
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
	public $sourceWidgetIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rootWidgetIdEqual = null;

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
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uiConfIdEqual = null;

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

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerDataLike = null;


}

class BorhanWidgetFilter extends BorhanWidgetBaseFilter
{

}

class BorhanWidgetListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanWidget
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

abstract class BorhanPartnerBaseFilter extends BorhanFilter
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
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var int
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
	public $partnerPackageEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerPackageGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerPackageLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerNameDescriptionWebsiteAdminNameAdminEmailLike = null;


}

class BorhanPartnerFilter extends BorhanPartnerBaseFilter
{

}

class BorhanPartnerListResponse extends BorhanObjectBase
{
	/**
	 * 
	 *
	 * @var array of BorhanPartner
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

abstract class BorhanFlavorParamsOutputBaseFilter extends BorhanFlavorParamsFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsVersionEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetVersionEqual = null;


}

class BorhanFlavorParamsOutputFilter extends BorhanFlavorParamsOutputBaseFilter
{

}

class BorhanFlavorParamsOutput extends BorhanFlavorParams
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $commandLinesStr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $readyBehavior = null;


}

abstract class BorhanThumbParamsOutputBaseFilter extends BorhanThumbParamsFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $thumbParamsIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbParamsVersionEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetVersionEqual = null;


}

class BorhanThumbParamsOutputFilter extends BorhanThumbParamsOutputBaseFilter
{

}

class BorhanThumbParamsOutput extends BorhanThumbParams
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $thumbParamsId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbParamsVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetVersion = null;


}

abstract class BorhanMediaInfoBaseFilter extends BorhanFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetIdEqual = null;


}

class BorhanMediaInfoFilter extends BorhanMediaInfoBaseFilter
{

}

class BorhanCountryRestriction extends BorhanBaseRestriction
{
	/**
	 * Country restriction type (Allow or deny)
	 * 
	 *
	 * @var BorhanCountryRestrictionType
	 */
	public $countryRestrictionType = null;

	/**
	 * Comma separated list of country codes to allow to deny 
	 * 
	 *
	 * @var string
	 */
	public $countryList = null;


}

class BorhanDirectoryRestriction extends BorhanBaseRestriction
{
	/**
	 * Borhan directory restriction type
	 * 
	 *
	 * @var BorhanDirectoryRestrictionType
	 */
	public $directoryRestrictionType = null;


}

class BorhanIpAddressRestriction extends BorhanBaseRestriction
{
	/**
	 * Ip address restriction type (Allow or deny)
	 * 
	 *
	 * @var BorhanIpAddressRestrictionType
	 */
	public $ipAddressRestrictionType = null;

	/**
	 * Comma separated list of ip address to allow to deny 
	 * 
	 *
	 * @var string
	 */
	public $ipAddressList = null;


}

class BorhanSessionRestriction extends BorhanBaseRestriction
{

}

class BorhanPreviewRestriction extends BorhanSessionRestriction
{
	/**
	 * The preview restriction length 
	 * 
	 *
	 * @var int
	 */
	public $previewLength = null;


}

class BorhanSiteRestriction extends BorhanBaseRestriction
{
	/**
	 * The site restriction type (allow or deny)
	 * 
	 *
	 * @var BorhanSiteRestrictionType
	 */
	public $siteRestrictionType = null;

	/**
	 * Comma separated list of sites (domains) to allow or deny
	 * 
	 *
	 * @var string
	 */
	public $siteList = null;


}

class BorhanSearchCondition extends BorhanSearchItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $field = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $value = null;


}

class BorhanSearchComparableCondition extends BorhanSearchCondition
{
	/**
	 * 
	 *
	 * @var BorhanSearchConditionComparison
	 */
	public $comparison = null;


}

class BorhanSearchOperator extends BorhanSearchItem
{
	/**
	 * 
	 *
	 * @var BorhanSearchOperatorType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var array of BorhanSearchItem
	 */
	public $items;


}

abstract class BorhanMailJobBaseFilter extends BorhanBaseJobFilter
{

}

class BorhanMailJobFilter extends BorhanMailJobBaseFilter
{

}

abstract class BorhanNotificationBaseFilter extends BorhanBaseJobFilter
{

}

class BorhanNotificationFilter extends BorhanNotificationBaseFilter
{

}

abstract class BorhanAssetParamsOutputBaseFilter extends BorhanAssetParamsFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $assetParamsIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetParamsVersionEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetVersionEqual = null;


}

class BorhanAssetParamsOutputFilter extends BorhanAssetParamsOutputBaseFilter
{

}

abstract class BorhanFlavorAssetBaseFilter extends BorhanAssetFilter
{

}

class BorhanFlavorAssetFilter extends BorhanFlavorAssetBaseFilter
{

}

abstract class BorhanMediaFlavorParamsBaseFilter extends BorhanFlavorParamsFilter
{

}

class BorhanMediaFlavorParamsFilter extends BorhanMediaFlavorParamsBaseFilter
{

}

abstract class BorhanMediaFlavorParamsOutputBaseFilter extends BorhanFlavorParamsOutputFilter
{

}

class BorhanMediaFlavorParamsOutputFilter extends BorhanMediaFlavorParamsOutputBaseFilter
{

}

abstract class BorhanThumbAssetBaseFilter extends BorhanAssetFilter
{

}

class BorhanThumbAssetFilter extends BorhanThumbAssetBaseFilter
{

}

abstract class BorhanLiveStreamAdminEntryBaseFilter extends BorhanLiveStreamEntryFilter
{

}

class BorhanLiveStreamAdminEntryFilter extends BorhanLiveStreamAdminEntryBaseFilter
{

}

abstract class BorhanAdminUserBaseFilter extends BorhanUserFilter
{

}

class BorhanAdminUserFilter extends BorhanAdminUserBaseFilter
{

}

abstract class BorhanGoogleVideoSyndicationFeedBaseFilter extends BorhanBaseSyndicationFeedFilter
{

}

class BorhanGoogleVideoSyndicationFeedFilter extends BorhanGoogleVideoSyndicationFeedBaseFilter
{

}

abstract class BorhanITunesSyndicationFeedBaseFilter extends BorhanBaseSyndicationFeedFilter
{

}

class BorhanITunesSyndicationFeedFilter extends BorhanITunesSyndicationFeedBaseFilter
{

}

abstract class BorhanTubeMogulSyndicationFeedBaseFilter extends BorhanBaseSyndicationFeedFilter
{

}

class BorhanTubeMogulSyndicationFeedFilter extends BorhanTubeMogulSyndicationFeedBaseFilter
{

}

abstract class BorhanYahooSyndicationFeedBaseFilter extends BorhanBaseSyndicationFeedFilter
{

}

class BorhanYahooSyndicationFeedFilter extends BorhanYahooSyndicationFeedBaseFilter
{

}

abstract class BorhanApiActionPermissionItemBaseFilter extends BorhanPermissionItemFilter
{

}

class BorhanApiActionPermissionItemFilter extends BorhanApiActionPermissionItemBaseFilter
{

}

abstract class BorhanApiParameterPermissionItemBaseFilter extends BorhanPermissionItemFilter
{

}

class BorhanApiParameterPermissionItemFilter extends BorhanApiParameterPermissionItemBaseFilter
{

}

abstract class BorhanGenericSyndicationFeedBaseFilter extends BorhanBaseSyndicationFeedFilter
{

}

class BorhanGenericSyndicationFeedFilter extends BorhanGenericSyndicationFeedBaseFilter
{

}

abstract class BorhanGenericXsltSyndicationFeedBaseFilter extends BorhanGenericSyndicationFeedFilter
{

}

class BorhanGenericXsltSyndicationFeedFilter extends BorhanGenericXsltSyndicationFeedBaseFilter
{

}

class BorhanClipAttributes extends BorhanOperationAttributes
{
	/**
	 * Offset in milliseconds
	 *
	 * @var int
	 */
	public $offset = null;

	/**
	 * Duration in milliseconds
	 *
	 * @var int
	 */
	public $duration = null;


}

class BorhanAssetParamsResourceContainer extends BorhanResource
{
	/**
	 * The content resource to associate with asset params
	 *
	 * @var BorhanContentResource
	 */
	public $resource;

	/**
	 * The asset params to associate with the reaource
	 *
	 * @var int
	 */
	public $assetParamsId = null;


}

class BorhanAssetResource extends BorhanContentResource
{
	/**
	 * ID of the source asset 
	 *
	 * @var string
	 */
	public $assetId = null;


}

class BorhanAssetsParamsResourceContainers extends BorhanResource
{
	/**
	 * Array of resources associated with asset params ids
	 *
	 * @var array of BorhanAssetParamsResourceContainer
	 */
	public $resources;


}

abstract class BorhanDataCenterContentResource extends BorhanContentResource
{

}

class BorhanEntryResource extends BorhanContentResource
{
	/**
	 * ID of the source entry 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * ID of the source flavor params, set to null to use the source flavor
	 *
	 * @var int
	 */
	public $flavorParamsId = null;


}

class BorhanFileSyncResource extends BorhanContentResource
{
	/**
	 * The object type of the file sync object 
	 *
	 * @var int
	 */
	public $fileSyncObjectType = null;

	/**
	 * The object sub-type of the file sync object 
	 *
	 * @var int
	 */
	public $objectSubType = null;

	/**
	 * The object id of the file sync object 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * The version of the file sync object 
	 *
	 * @var string
	 */
	public $version = null;


}

class BorhanLocalFileResource extends BorhanDataCenterContentResource
{
	/**
	 * Full path to the local file 
	 *
	 * @var string
	 */
	public $localFilePath = null;


}

class BorhanOperationResource extends BorhanContentResource
{
	/**
	 * 
	 *
	 * @var BorhanContentResource
	 */
	public $resource;

	/**
	 * 
	 *
	 * @var array of BorhanOperationAttributes
	 */
	public $operationAttributes;

	/**
	 * ID of alternative asset params to be used instead of the system default flavor params 
	 *
	 * @var int
	 */
	public $assetParamsId = null;


}

class BorhanUrlResource extends BorhanContentResource
{
	/**
	 * Remote URL, FTP, HTTP or HTTPS 
	 *
	 * @var string
	 */
	public $url = null;


}

class BorhanRemoteStorageResource extends BorhanUrlResource
{
	/**
	 * ID of storage profile to be associated with the created file sync, used for file serving URL composing. 
	 *
	 * @var int
	 */
	public $storageProfileId = null;


}

class BorhanUploadedFileTokenResource extends BorhanDataCenterContentResource
{
	/**
	 * Token that returned from upload.upload action or uploadToken.add action. 
	 *
	 * @var string
	 */
	public $token = null;


}

class BorhanWebcamTokenResource extends BorhanDataCenterContentResource
{
	/**
	 * Token that returned from media server such as FMS or red5. 
	 *
	 * @var string
	 */
	public $token = null;


}

class BorhanMailJob extends BorhanBaseJob
{
	/**
	 * 
	 *
	 * @var BorhanMailType
	 */
	public $mailType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mailPriority = null;

	/**
	 * 
	 *
	 * @var BorhanMailJobStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recipientName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recipientEmail = null;

	/**
	 * kuserId  
	 *
	 * @var int
	 */
	public $recipientId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fromName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fromEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bodyParams = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $subjectParams = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templatePath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $culture = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $campaignId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $minSendDate = null;


}

class BorhanBulkDownloadJobData extends BorhanJobData
{
	/**
	 * Comma separated list of entry ids
	 * 
	 *
	 * @var string
	 */
	public $entryIds = null;

	/**
	 * Flavor params id to use for conversion
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsId = null;

	/**
	 * The id of the requesting user
	 * 
	 *
	 * @var string
	 */
	public $puserId = null;


}

class BorhanBulkUploadJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * The screen name of the user
	 * 
	 *
	 * @var string
	 */
	public $uploadedBy = null;

	/**
	 * Selected profile id for all bulk entries
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * Created by the API
	 * 
	 *
	 * @var string
	 */
	public $resultsFileLocalPath = null;

	/**
	 * Created by the API
	 * 
	 *
	 * @var string
	 */
	public $resultsFileUrl = null;

	/**
	 * Number of created entries
	 * 
	 *
	 * @var int
	 */
	public $numOfEntries = null;

	/**
	 * The bulk upload file path
	 *
	 * @var string
	 */
	public $filePath = null;


}

class BorhanCaptureThumbJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileSyncLocalPath = null;

	/**
	 * The translated path as used by the scheduler
	 *
	 * @var string
	 */
	public $actualSrcFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileSyncRemoteUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $thumbParamsOutputId = null;

	/**
	 * 
	 *
	 * @var BorhanThumbParamsOutput
	 */
	public $thumbParamsOutput;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetId = null;

	/**
	 * 
	 *
	 * @var BorhanAssetType
	 */
	public $srcAssetType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbPath = null;


}

class BorhanConvartableJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileSyncLocalPath = null;

	/**
	 * The translated path as used by the scheduler
	 *
	 * @var string
	 */
	public $actualSrcFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileSyncRemoteUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $engineVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsOutputId = null;

	/**
	 * 
	 *
	 * @var BorhanFlavorParamsOutput
	 */
	public $flavorParamsOutput;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaInfoId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $currentOperationSet = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $currentOperationIndex = null;


}

class BorhanConvertCollectionJobData extends BorhanConvartableJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $destDirLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destDirRemoteUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $inputXmlLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $inputXmlRemoteUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $commandLinesStr = null;

	/**
	 * 
	 *
	 * @var array of BorhanConvertCollectionFlavorData
	 */
	public $flavors;


}

class BorhanConvertJobData extends BorhanConvartableJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncRemoteUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $logFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remoteMediaId = null;


}

class BorhanConvertProfileJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $inputFileSyncLocalPath = null;

	/**
	 * The height of last created thumbnail, will be used to comapare if this thumbnail is the best we can have
	 * 
	 *
	 * @var int
	 */
	public $thumbHeight = null;

	/**
	 * The bit rate of last created thumbnail, will be used to comapare if this thumbnail is the best we can have
	 * 
	 *
	 * @var int
	 */
	public $thumbBitrate = null;


}

class BorhanExtractMediaJobData extends BorhanConvartableJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;


}

class BorhanFlattenJobData extends BorhanJobData
{

}

class BorhanImportJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;


}

class BorhanNotificationJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 *
	 * @var BorhanNotificationType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $typeAsString = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var BorhanNotificationStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $numberOfAttempts = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationResult = null;

	/**
	 * 
	 *
	 * @var BorhanNotificationObjectType
	 */
	public $objType = null;


}

class BorhanPostConvertJobData extends BorhanConvartableJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * Indicates if a thumbnail should be created
	 * 
	 *
	 * @var bool
	 */
	public $createThumb = null;

	/**
	 * The path of the created thumbnail
	 * 
	 *
	 * @var string
	 */
	public $thumbPath = null;

	/**
	 * The position of the thumbnail in the media file
	 * 
	 *
	 * @var int
	 */
	public $thumbOffset = null;

	/**
	 * The height of the movie, will be used to comapare if this thumbnail is the best we can have
	 * 
	 *
	 * @var int
	 */
	public $thumbHeight = null;

	/**
	 * The bit rate of the movie, will be used to comapare if this thumbnail is the best we can have
	 * 
	 *
	 * @var int
	 */
	public $thumbBitrate = null;


}

class BorhanProvisionJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $streamID = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $backupStreamID = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rtmp = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $encoderIP = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $backupEncoderIP = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $encoderPassword = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $encoderUsername = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $returnVal = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $primaryBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $secondaryBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $streamName = null;


}

class BorhanPullJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileLocalPath = null;


}

class BorhanRemoteConvertJobData extends BorhanConvartableJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileUrl = null;

	/**
	 * Should be set by the API
	 * 
	 *
	 * @var string
	 */
	public $destFileUrl = null;


}

class BorhanStorageJobData extends BorhanJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $serverUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverPassword = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $ftpPassiveMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileSyncId = null;


}

class BorhanStorageDeleteJobData extends BorhanStorageJobData
{

}

class BorhanStorageExportJobData extends BorhanStorageJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncStoredPath = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $force = null;


}

class BorhanAssetParamsOutput extends BorhanAssetParams
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $assetParamsId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetParamsVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $readyBehavior = null;


}

class BorhanMediaFlavorParams extends BorhanFlavorParams
{

}

class BorhanMediaFlavorParamsOutput extends BorhanFlavorParamsOutput
{

}

class BorhanApiActionPermissionItem extends BorhanPermissionItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $service = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $action = null;


}

class BorhanApiParameterPermissionItem extends BorhanPermissionItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $object = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parameter = null;

	/**
	 * 
	 *
	 * @var BorhanApiParameterPermissionItemAction
	 */
	public $action = null;


}

class BorhanGenericSyndicationFeed extends BorhanBaseSyndicationFeed
{
	/**
	 * feed description
	 * 
	 *
	 * @var string
	 */
	public $feedDescription = null;

	/**
	 * feed landing page (i.e publisher website)
	 * 
	 *
	 * @var string
	 */
	public $feedLandingPage = null;


}

class BorhanGenericXsltSyndicationFeed extends BorhanGenericSyndicationFeed
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $xslt = null;


}

class BorhanGoogleVideoSyndicationFeed extends BorhanBaseSyndicationFeed
{
	/**
	 * 
	 *
	 * @var BorhanGoogleSyndicationFeedAdultValues
	 */
	public $adultContent = null;


}

class BorhanITunesSyndicationFeed extends BorhanBaseSyndicationFeed
{
	/**
	 * feed description
	 * 
	 *
	 * @var string
	 */
	public $feedDescription = null;

	/**
	 * feed language
	 * 
	 *
	 * @var string
	 */
	public $language = null;

	/**
	 * feed landing page (i.e publisher website)
	 * 
	 *
	 * @var string
	 */
	public $feedLandingPage = null;

	/**
	 * author/publisher name
	 * 
	 *
	 * @var string
	 */
	public $ownerName = null;

	/**
	 * publisher email
	 * 
	 *
	 * @var string
	 */
	public $ownerEmail = null;

	/**
	 * podcast thumbnail
	 * 
	 *
	 * @var string
	 */
	public $feedImageUrl = null;

	/**
	 * 
	 *
	 * @var BorhanITunesSyndicationFeedCategories
	 * @readonly
	 */
	public $category = null;

	/**
	 * 
	 *
	 * @var BorhanITunesSyndicationFeedAdultValues
	 */
	public $adultContent = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $feedAuthor = null;


}

class BorhanTubeMogulSyndicationFeed extends BorhanBaseSyndicationFeed
{
	/**
	 * 
	 *
	 * @var BorhanTubeMogulSyndicationFeedCategories
	 * @readonly
	 */
	public $category = null;


}

class BorhanYahooSyndicationFeed extends BorhanBaseSyndicationFeed
{
	/**
	 * 
	 *
	 * @var BorhanYahooSyndicationFeedCategories
	 * @readonly
	 */
	public $category = null;

	/**
	 * 
	 *
	 * @var BorhanYahooSyndicationFeedAdultValues
	 */
	public $adultContent = null;

	/**
	 * feed description
	 * 
	 *
	 * @var string
	 */
	public $feedDescription = null;

	/**
	 * feed landing page (i.e publisher website)
	 * 
	 *
	 * @var string
	 */
	public $feedLandingPage = null;


}

