<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRMedium;
use Carerix\Api\Rest\Entity\CRPosting;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRVacancy;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:58 +0000
 * @method AbstractCRPublication setPublicationID() setPublicationID(integer $value)
 * @method integer getPublicationID getPublicationID()
 * @method AbstractCRPublication setCampaign() setCampaign(string $value)
 * @method string getCampaign getCampaign()
 * @method AbstractCRPublication setPublicationStart() setPublicationStart(string $value)
 * @method string getPublicationStart getPublicationStart()
 * @method AbstractCRPublication setPublicationEnd() setPublicationEnd(string $value)
 * @method string getPublicationEnd getPublicationEnd()
 * @method AbstractCRPublication setDeadlineMaterial() setDeadlineMaterial(string $value)
 * @method string getDeadlineMaterial getDeadlineMaterial()
 * @method AbstractCRPublication setNumberOfPublications() setNumberOfPublications(integer $value)
 * @method integer getNumberOfPublications getNumberOfPublications()
 * @method AbstractCRPublication setCostExclVAT() setCostExclVAT(float $value)
 * @method float getCostExclVAT getCostExclVAT()
 * @method AbstractCRPublication setConfirmationClient() setConfirmationClient(integer $value)
 * @method integer getConfirmationClient getConfirmationClient()
 * @method AbstractCRPublication setRefresh() setRefresh(integer $value)
 * @method integer getRefresh getRefresh()
 * @method AbstractCRPublication setStatus() setStatus(integer $value)
 * @method integer getStatus getStatus()
 * @method AbstractCRPublication setClosed() setClosed(integer $value)
 * @method integer getClosed getClosed()
 * @method AbstractCRPublication setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRPublication setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRPublication setExternalIdentifier() setExternalIdentifier(string $value)
 * @method string getExternalIdentifier getExternalIdentifier()
 * @method AbstractCRPublication setVacancyNo() setVacancyNo(string $value)
 * @method string getVacancyNo getVacancyNo()
 * @method AbstractCRPublication setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRPublication setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRPublication setApplicationContactInformation() setApplicationContactInformation(string $value)
 * @method string getApplicationContactInformation getApplicationContactInformation()
 * @method AbstractCRPublication setCompanyInformation() setCompanyInformation(string $value)
 * @method string getCompanyInformation getCompanyInformation()
 * @method AbstractCRPublication setFunctionContactInformation() setFunctionContactInformation(string $value)
 * @method string getFunctionContactInformation getFunctionContactInformation()
 * @method AbstractCRPublication setIntroInformation() setIntroInformation(string $value)
 * @method string getIntroInformation getIntroInformation()
 * @method AbstractCRPublication setLayoutInstruction() setLayoutInstruction(string $value)
 * @method string getLayoutInstruction getLayoutInstruction()
 * @method AbstractCRPublication setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRPublication setOfferInformation() setOfferInformation(string $value)
 * @method string getOfferInformation getOfferInformation()
 * @method AbstractCRPublication setPublicationSpecifications() setPublicationSpecifications(string $value)
 * @method string getPublicationSpecifications getPublicationSpecifications()
 * @method AbstractCRPublication setRequirementsInformation() setRequirementsInformation(string $value)
 * @method string getRequirementsInformation getRequirementsInformation()
 * @method AbstractCRPublication setTitleInformation() setTitleInformation(string $value)
 * @method string getTitleInformation getTitleInformation()
 * @method AbstractCRPublication setVacancyInformation() setVacancyInformation(string $value)
 * @method string getVacancyInformation getVacancyInformation()
 * @method AbstractCRPublication setWorkLocation() setWorkLocation(string $value)
 * @method string getWorkLocation getWorkLocation()
 * @method AbstractCRPublication setMetaTags() setMetaTags(string $value)
 * @method string getMetaTags getMetaTags()
 * @method AbstractCRPublication setLog() setLog(string $value)
 * @method string getLog getLog()
 * @method AbstractCRPublication setLockStatusString() setLockStatusString(string $value)
 * @method string getLockStatusString getLockStatusString()
 * @method AbstractCRPublication setMainPublication() setMainPublication(string $value)
 * @method string getMainPublication getMainPublication()
 * @method AbstractCRPublication setApplyUrl() setApplyUrl(string $value)
 * @method string getApplyUrl getApplyUrl()
 * @method AbstractCRPublication setPostingMappings() setPostingMappings(NSDictionary|array $value)
 * @method NSDictionary|array getPostingMappings getPostingMappings()
 * @method AbstractCRPublication setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRPublication setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRPublication setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRPublication setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRPublication setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRPublication setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRPublication setToMedium() setToMedium(array|CRMedium $value)
 * @method CRMedium getToMedium getToMedium($index = null)
 * @method AbstractCRPublication setToCostCurrencyNode() setToCostCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToCostCurrencyNode getToCostCurrencyNode($index = null)
 * @method AbstractCRPublication setPostings() setPostings(array|Collection $values)
 * @method Collection|CRPosting getPostings getPostings()
 * @method AbstractCRPublication setToStatusReservationNode() setToStatusReservationNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusReservationNode getToStatusReservationNode($index = null)
 * @method AbstractCRPublication setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRPublication setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCRPublication setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 */
abstract class AbstractCRPublication extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRPublication';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $publicationID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $campaign = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $publicationStart = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $publicationEnd = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $deadlineMaterial = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $numberOfPublications = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $costExclVAT = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $confirmationClient = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $refresh = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $status = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $closed = null;

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
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $externalIdentifier = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 15
     */
    public $vacancyNo = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $deleted = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $applicationContactInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $companyInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $functionContactInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $introInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $layoutInstruction = null;

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
    public $offerInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $publicationSpecifications = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $requirementsInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $titleInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $vacancyInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $workLocation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $metaTags = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $log = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $lockStatusString = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 64
     */
    public $mainPublication = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $applyUrl = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $postingMappings = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfoPartial = null;

    /**
     * @cx_field true
     * @access private
     * @var CRVacancy
     * @OneToOne (targetEntity="CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 0
     * @name toVacancy
     */
    public $toVacancy = null;

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
     * @name modifiedBy
     */
    public $modifiedBy = null;

    /**
     * @cx_field true
     * @access private
     * @var CRMedium
     * @OneToOne (targetEntity="CRMedium")
     * @mandatory 0
     * @destination_entity CRMedium
     * @to_many 0
     * @name toMedium
     */
    public $toMedium = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCostCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toCostCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRPosting")
     * @mandatory 0
     * @destination_entity CRPosting
     * @to_many 1
     * @name postings
     */
    public $postings = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusReservationNode
     * @default 0
     * @nodeType Publicatie-Status-Reservering
     */
    public $toStatusReservationNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     * @default 1
     * @nodeType Publicatie-status
     */
    public $toStatusNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRAttributeChange")
     * @mandatory 0
     * @destination_entity CRAttributeChange
     * @to_many 1
     * @name attributeChanges
     */
    public $attributeChanges = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRAttachment")
     * @mandatory 0
     * @destination_entity CRAttachment
     * @to_many 1
     * @name attachments
     */
    public $attachments = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("publicationID");
        $entityConfiguration->setName("CRPublication");
    }
}
