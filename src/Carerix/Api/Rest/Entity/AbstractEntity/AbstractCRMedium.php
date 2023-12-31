<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmailTemplate;
use Carerix\Api\Rest\Entity\CRMedium;
use Carerix\Api\Rest\Entity\CRStatusInfo;
use Carerix\Api\Rest\Entity\CRTemplateReference;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:58 +0000
 * @method AbstractCRMedium setMediumID() setMediumID(integer $value)
 * @method integer getMediumID getMediumID()
 * @method AbstractCRMedium setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRMedium setStatus() setStatus(integer $value)
 * @method integer getStatus getStatus()
 * @method AbstractCRMedium setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRMedium setActive() setActive(integer $value)
 * @method integer getActive getActive()
 * @method AbstractCRMedium setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRMedium setMediumTypeKey() setMediumTypeKey(integer $value)
 * @method integer getMediumTypeKey getMediumTypeKey()
 * @method AbstractCRMedium setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRMedium setCosts() setCosts(string $value)
 * @method string getCosts getCosts()
 * @method AbstractCRMedium setAutoPublish() setAutoPublish(integer $value)
 * @method integer getAutoPublish getAutoPublish()
 * @method AbstractCRMedium setIsHTML() setIsHTML(integer $value)
 * @method integer getIsHTML getIsHTML()
 * @method AbstractCRMedium setSubscription() setSubscription(string $value)
 * @method string getSubscription getSubscription()
 * @method AbstractCRMedium setValidUntil() setValidUntil(string $value)
 * @method string getValidUntil getValidUntil()
 * @method AbstractCRMedium setAgencyNo() setAgencyNo(string $value)
 * @method string getAgencyNo getAgencyNo()
 * @method AbstractCRMedium setCode() setCode(string $value)
 * @method string getCode getCode()
 * @method AbstractCRMedium setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRMedium setLanguages() setLanguages(string $value)
 * @method string getLanguages getLanguages()
 * @method AbstractCRMedium setCredits() setCredits(integer $value)
 * @method integer getCredits getCredits()
 * @method AbstractCRMedium setIsDefault() setIsDefault(integer $value)
 * @method integer getIsDefault getIsDefault()
 * @method AbstractCRMedium setExpireTime() setExpireTime(integer $value)
 * @method integer getExpireTime getExpireTime()
 * @method AbstractCRMedium setParserFromAddress() setParserFromAddress(string $value)
 * @method string getParserFromAddress getParserFromAddress()
 * @method AbstractCRMedium setJobBoardInfo() setJobBoardInfo(NSDictionary|array $value)
 * @method NSDictionary|array getJobBoardInfo getJobBoardInfo()
 * @method AbstractCRMedium setIsSystem() setIsSystem(integer $value)
 * @method integer getIsSystem getIsSystem()
 * @method AbstractCRMedium setParserSubjectCode() setParserSubjectCode(string $value)
 * @method string getParserSubjectCode getParserSubjectCode()
 * @method AbstractCRMedium setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRMedium setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRMedium setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRMedium setToEmailTemplate() setToEmailTemplate(array|CREmailTemplate $value)
 * @method CREmailTemplate getToEmailTemplate getToEmailTemplate($index = null)
 * @method AbstractCRMedium setDefaultStatusInfo() setDefaultStatusInfo(array|CRStatusInfo $value)
 * @method CRStatusInfo getDefaultStatusInfo getDefaultStatusInfo($index = null)
 * @method AbstractCRMedium setToTemplateReference() setToTemplateReference(array|CRTemplateReference $value)
 * @method CRTemplateReference getToTemplateReference getToTemplateReference($index = null)
 * @method AbstractCRMedium setToParentMedium() setToParentMedium(array|CRMedium $value)
 * @method CRMedium getToParentMedium getToParentMedium($index = null)
 * @method AbstractCRMedium setChildren() setChildren(array|Collection $values)
 * @method Collection|CRMedium getChildren getChildren()
 * @method AbstractCRMedium setToExpireUnitNode() setToExpireUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToExpireUnitNode getToExpireUnitNode($index = null)
 * @method AbstractCRMedium setToSourceMatchNode() setToSourceMatchNode(array|CRDataNode $value)
 * @method CRDataNode getToSourceMatchNode getToSourceMatchNode($index = null)
 * @method AbstractCRMedium setToParserTypeNode() setToParserTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToParserTypeNode getToParserTypeNode($index = null)
 */
abstract class AbstractCRMedium extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRMedium';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $mediumID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $creationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $status = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $active = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width 64
     */
    public $name = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $mediumTypeKey = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $notes = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $costs = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $autoPublish = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isHTML = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $subscription = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $validUntil = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 15
     */
    public $agencyNo = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $code = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     * @isUnique 1
     */
    public $importID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $languages = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $credits = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isDefault = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $expireTime = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $parserFromAddress = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $jobBoardInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isSystem = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $parserSubjectCode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name modifiedBy
     */
    public $modifiedBy = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name owner
     */
    public $owner = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name createdBy
     */
    public $createdBy = null;

    /**
     * @cx_field true
     * @access private
     * @var CREmailTemplate
     * @OneToOne (targetEntity="CREmailTemplate")
     * @mandatory 0
     * @destination_entity CREmailTemplate
     * @to_many 0
     * @name toEmailTemplate
     */
    public $toEmailTemplate = null;

    /**
     * @cx_field true
     * @access private
     * @var CRStatusInfo
     * @OneToOne (targetEntity="CRStatusInfo")
     * @mandatory 0
     * @destination_entity CRStatusInfo
     * @to_many 0
     * @name defaultStatusInfo
     */
    public $defaultStatusInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var CRTemplateReference
     * @OneToOne (targetEntity="CRTemplateReference")
     * @mandatory 0
     * @destination_entity CRTemplateReference
     * @to_many 0
     * @name toTemplateReference
     */
    public $toTemplateReference = null;

    /**
     * @cx_field true
     * @access private
     * @var CRMedium
     * @OneToOne (targetEntity="CRMedium")
     * @mandatory 0
     * @destination_entity CRMedium
     * @to_many 0
     * @name toParentMedium
     */
    public $toParentMedium = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRMedium")
     * @mandatory 0
     * @destination_entity CRMedium
     * @to_many 1
     * @name children
     */
    public $children = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toExpireUnitNode
     * @default 0
     * @nodeType Verlooptijd-eenheid
     */
    public $toExpireUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSourceMatchNode
     * @default 0
     * @nodeType Bron-Match
     */
    public $toSourceMatchNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toParserTypeNode
     * @default 0
     * @nodeType Parser-type
     */
    public $toParserTypeNode = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("mediumID");
        $entityConfiguration->setName("CRMedium");
    }
}
