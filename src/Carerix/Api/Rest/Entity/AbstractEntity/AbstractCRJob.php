<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRFinance;
use Carerix\Api\Rest\Entity\CRInvoiceLine;
use Carerix\Api\Rest\Entity\CRJobDocument;
use Carerix\Api\Rest\Entity\CRToDo;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserRole;
use Carerix\Api\Rest\Entity\CRVacancy;
use Carerix\Api\Rest\Entity\CRWeekHour;
use Carerix\Api\Rest\Entity\CRWeekHourJobView;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:57 +0000
 * @method AbstractCRJob setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRJob setEndDate() setEndDate(string $value)
 * @method string getEndDate getEndDate()
 * @method AbstractCRJob setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRJob setStartDate() setStartDate(string $value)
 * @method string getStartDate getStartDate()
 * @method AbstractCRJob setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRJob setHoursPerWeek() setHoursPerWeek(float $value)
 * @method float getHoursPerWeek getHoursPerWeek()
 * @method AbstractCRJob setDaysPerWeek() setDaysPerWeek(integer $value)
 * @method integer getDaysPerWeek getDaysPerWeek()
 * @method AbstractCRJob setHourlyWageGross() setHourlyWageGross(float $value)
 * @method float getHourlyWageGross getHourlyWageGross()
 * @method AbstractCRJob setHourlyTariffExtra() setHourlyTariffExtra(float $value)
 * @method float getHourlyTariffExtra getHourlyTariffExtra()
 * @method AbstractCRJob setHourlyTariffInvoice() setHourlyTariffInvoice(float $value)
 * @method float getHourlyTariffInvoice getHourlyTariffInvoice()
 * @method AbstractCRJob setJobID() setJobID(integer $value)
 * @method integer getJobID getJobID()
 * @method AbstractCRJob set_flags() set_flags(integer $value)
 * @method integer get_flags get_flags()
 * @method AbstractCRJob setStartTime() setStartTime(string $value)
 * @method string getStartTime getStartTime()
 * @method AbstractCRJob setMemoGeneral() setMemoGeneral(string $value)
 * @method string getMemoGeneral getMemoGeneral()
 * @method AbstractCRJob setMemoDeclaration() setMemoDeclaration(string $value)
 * @method string getMemoDeclaration getMemoDeclaration()
 * @method AbstractCRJob setMemoWeekLog() setMemoWeekLog(string $value)
 * @method string getMemoWeekLog getMemoWeekLog()
 * @method AbstractCRJob setInvoiceSubject() setInvoiceSubject(string $value)
 * @method string getInvoiceSubject getInvoiceSubject()
 * @method AbstractCRJob setNoticePeriodDays() setNoticePeriodDays(integer $value)
 * @method integer getNoticePeriodDays getNoticePeriodDays()
 * @method AbstractCRJob setSignatureRequired() setSignatureRequired(integer $value)
 * @method integer getSignatureRequired getSignatureRequired()
 * @method AbstractCRJob setHourlyWageStandBy() setHourlyWageStandBy(float $value)
 * @method float getHourlyWageStandBy getHourlyWageStandBy()
 * @method AbstractCRJob setTemplateName() setTemplateName(string $value)
 * @method string getTemplateName getTemplateName()
 * @method AbstractCRJob setHourlyTariffExtraNotes() setHourlyTariffExtraNotes(string $value)
 * @method string getHourlyTariffExtraNotes getHourlyTariffExtraNotes()
 * @method AbstractCRJob setPgcHours() setPgcHours(float $value)
 * @method float getPgcHours getPgcHours()
 * @method AbstractCRJob setRotationOff() setRotationOff(float $value)
 * @method float getRotationOff getRotationOff()
 * @method AbstractCRJob setRotationOn() setRotationOn(float $value)
 * @method float getRotationOn getRotationOn()
 * @method AbstractCRJob setLastTrialDate() setLastTrialDate(string $value)
 * @method string getLastTrialDate getLastTrialDate()
 * @method AbstractCRJob setStatus() setStatus(integer $value)
 * @method integer getStatus getStatus()
 * @method AbstractCRJob setFriWorkMinutes() setFriWorkMinutes(float $value)
 * @method float getFriWorkMinutes getFriWorkMinutes()
 * @method AbstractCRJob setJobInformation() setJobInformation(string $value)
 * @method string getJobInformation getJobInformation()
 * @method AbstractCRJob setMonWorkMinutes() setMonWorkMinutes(float $value)
 * @method float getMonWorkMinutes getMonWorkMinutes()
 * @method AbstractCRJob setPhoneNumber() setPhoneNumber(string $value)
 * @method string getPhoneNumber getPhoneNumber()
 * @method AbstractCRJob setSatWorkMinutes() setSatWorkMinutes(float $value)
 * @method float getSatWorkMinutes getSatWorkMinutes()
 * @method AbstractCRJob setSunWorkMinutes() setSunWorkMinutes(float $value)
 * @method float getSunWorkMinutes getSunWorkMinutes()
 * @method AbstractCRJob setThuWorkMinutes() setThuWorkMinutes(float $value)
 * @method float getThuWorkMinutes getThuWorkMinutes()
 * @method AbstractCRJob setTueWorkMinutes() setTueWorkMinutes(float $value)
 * @method float getTueWorkMinutes getTueWorkMinutes()
 * @method AbstractCRJob setWedWorkMinutes() setWedWorkMinutes(float $value)
 * @method float getWedWorkMinutes getWedWorkMinutes()
 * @method AbstractCRJob setExternalIdentifier() setExternalIdentifier(string $value)
 * @method string getExternalIdentifier getExternalIdentifier()
 * @method AbstractCRJob setForecastDate() setForecastDate(string $value)
 * @method string getForecastDate getForecastDate()
 * @method AbstractCRJob setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRJob setInvoiceDiscountPercentage() setInvoiceDiscountPercentage(float $value)
 * @method float getInvoiceDiscountPercentage getInvoiceDiscountPercentage()
 * @method AbstractCRJob setCustomerReference() setCustomerReference(string $value)
 * @method string getCustomerReference getCustomerReference()
 * @method AbstractCRJob setIsTemplate() setIsTemplate(integer $value)
 * @method integer getIsTemplate getIsTemplate()
 * @method AbstractCRJob setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRJob setCostPrice() setCostPrice(float $value)
 * @method float getCostPrice getCostPrice()
 * @method AbstractCRJob setSellingPrice() setSellingPrice(float $value)
 * @method float getSellingPrice getSellingPrice()
 * @method AbstractCRJob setPurchaseRate() setPurchaseRate(float $value)
 * @method float getPurchaseRate getPurchaseRate()
 * @method AbstractCRJob setSalesFactor() setSalesFactor(float $value)
 * @method float getSalesFactor getSalesFactor()
 * @method AbstractCRJob setTotalWorkHours() setTotalWorkHours(float $value)
 * @method float getTotalWorkHours getTotalWorkHours()
 * @method AbstractCRJob setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRJob setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRJob setLastCheckpointDate() setLastCheckpointDate(string $value)
 * @method string getLastCheckpointDate getLastCheckpointDate()
 * @method AbstractCRJob setLastCheckpointCreatedBySearchString() setLastCheckpointCreatedBySearchString(string $value)
 * @method string getLastCheckpointCreatedBySearchString getLastCheckpointCreatedBySearchString()
 * @method AbstractCRJob setChangedSinceLastBaseline() setChangedSinceLastBaseline(integer $value)
 * @method integer getChangedSinceLastBaseline getChangedSinceLastBaseline()
 * @method AbstractCRJob setModifiedByPerFieldSinceLastCheckpoint() setModifiedByPerFieldSinceLastCheckpoint(NSDictionary|array $value)
 * @method NSDictionary|array getModifiedByPerFieldSinceLastCheckpoint getModifiedByPerFieldSinceLastCheckpoint()
 * @method AbstractCRJob setDiffLastCheckpoint() setDiffLastCheckpoint(NSDictionary|array $value)
 * @method NSDictionary|array getDiffLastCheckpoint getDiffLastCheckpoint()
 * @method AbstractCRJob setIsConfidential() setIsConfidential(integer $value)
 * @method integer getIsConfidential getIsConfidential()
 * @method AbstractCRJob setConfidentialIamRole() setConfidentialIamRole(string $value)
 * @method string getConfidentialIamRole getConfidentialIamRole()
 * @method AbstractCRJob setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRJob setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRJob setAllWeekHours() setAllWeekHours(array|Collection $values)
 * @method Collection|CRWeekHour getAllWeekHours getAllWeekHours()
 * @method AbstractCRJob setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRJob setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRJob setToContractTypeNode() setToContractTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToContractTypeNode getToContractTypeNode($index = null)
 * @method AbstractCRJob setToInvoicePeriodNode() setToInvoicePeriodNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoicePeriodNode getToInvoicePeriodNode($index = null)
 * @method AbstractCRJob setToWorkUnitNode() setToWorkUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToWorkUnitNode getToWorkUnitNode($index = null)
 * @method AbstractCRJob setToRotationOffUnitNode() setToRotationOffUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToRotationOffUnitNode getToRotationOffUnitNode($index = null)
 * @method AbstractCRJob setToRotationOnUnitNode() setToRotationOnUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToRotationOnUnitNode getToRotationOnUnitNode($index = null)
 * @method AbstractCRJob setToPgcHoursUnitNode() setToPgcHoursUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToPgcHoursUnitNode getToPgcHoursUnitNode($index = null)
 * @method AbstractCRJob setToNoticeUnitNode() setToNoticeUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToNoticeUnitNode getToNoticeUnitNode($index = null)
 * @method AbstractCRJob set_todos() set_todos(array|Collection $values)
 * @method Collection|CRToDo get_todos get_todos()
 * @method AbstractCRJob setToEndReasonNode() setToEndReasonNode(array|CRDataNode $value)
 * @method CRDataNode getToEndReasonNode getToEndReasonNode($index = null)
 * @method AbstractCRJob setFinances() setFinances(array|Collection $values)
 * @method Collection|CRFinance getFinances getFinances()
 * @method AbstractCRJob setWeekHourJobViews() setWeekHourJobViews(array|Collection $values)
 * @method Collection|CRWeekHourJobView getWeekHourJobViews getWeekHourJobViews()
 * @method AbstractCRJob setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRJob setDocuments() setDocuments(array|Collection $values)
 * @method Collection|CRJobDocument getDocuments getDocuments()
 * @method AbstractCRJob setToWeekHourCompany() setToWeekHourCompany(array|CRCompany $value)
 * @method CRCompany getToWeekHourCompany getToWeekHourCompany($index = null)
 * @method AbstractCRJob setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCRJob setToHoursApprovementNode() setToHoursApprovementNode(array|CRDataNode $value)
 * @method CRDataNode getToHoursApprovementNode getToHoursApprovementNode($index = null)
 * @method AbstractCRJob setToPaymentPeriodNode() setToPaymentPeriodNode(array|CRDataNode $value)
 * @method CRDataNode getToPaymentPeriodNode getToPaymentPeriodNode($index = null)
 * @method AbstractCRJob setToTaxRateNode() setToTaxRateNode(array|CRDataNode $value)
 * @method CRDataNode getToTaxRateNode getToTaxRateNode($index = null)
 * @method AbstractCRJob setInvoiceLines() setInvoiceLines(array|Collection $values)
 * @method Collection|CRInvoiceLine getInvoiceLines getInvoiceLines()
 * @method AbstractCRJob setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRJob setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRJob setToCostPriceCurrencyNode() setToCostPriceCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToCostPriceCurrencyNode getToCostPriceCurrencyNode($index = null)
 * @method AbstractCRJob setToCostPriceUnitNode() setToCostPriceUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToCostPriceUnitNode getToCostPriceUnitNode($index = null)
 * @method AbstractCRJob setToSellingPriceCurrencyNode() setToSellingPriceCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToSellingPriceCurrencyNode getToSellingPriceCurrencyNode($index = null)
 * @method AbstractCRJob setToSellingPriceUnitNode() setToSellingPriceUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToSellingPriceUnitNode getToSellingPriceUnitNode($index = null)
 * @method AbstractCRJob setGroupNodes() setGroupNodes(array|Collection $values)
 * @method Collection|CRDataNode getGroupNodes getGroupNodes()
 * @method AbstractCRJob setToPurchaseRateCurrencyNode() setToPurchaseRateCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToPurchaseRateCurrencyNode getToPurchaseRateCurrencyNode($index = null)
 * @method AbstractCRJob setToPurchaseRateUnitNode() setToPurchaseRateUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToPurchaseRateUnitNode getToPurchaseRateUnitNode($index = null)
 * @method AbstractCRJob setToConfidentialUserRole() setToConfidentialUserRole(array|CRUserRole $value)
 * @method CRUserRole getToConfidentialUserRole getToConfidentialUserRole($index = null)
 */
abstract class AbstractCRJob extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRJob';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $endDate = null;

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
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startDate = null;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hoursPerWeek = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $daysPerWeek = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hourlyWageGross = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hourlyTariffExtra = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hourlyTariffInvoice = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $jobID = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $_flags = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 5
     */
    public $startTime = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $memoGeneral = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $memoDeclaration = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $memoWeekLog = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $invoiceSubject = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $noticePeriodDays = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $signatureRequired = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hourlyWageStandBy = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $templateName = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $hourlyTariffExtraNotes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $pgcHours = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $rotationOff = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $rotationOn = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $lastTrialDate = null;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $friWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $jobInformation = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $monWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $phoneNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $satWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $sunWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $thuWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $tueWorkMinutes = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $wedWorkMinutes = null;

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
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $forecastDate = null;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $invoiceDiscountPercentage = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $customerReference = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTemplate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $name = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $costPrice = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $sellingPrice = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $purchaseRate = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $salesFactor = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $totalWorkHours = null;

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
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $lastCheckpointDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $lastCheckpointCreatedBySearchString = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $changedSinceLastBaseline = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $modifiedByPerFieldSinceLastCheckpoint = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $diffLastCheckpoint = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isConfidential = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $confidentialIamRole = null;

    /**
     * @cx_field true
     * @access private
     * @var CREmployee
     * @OneToOne (targetEntity="CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 0
     * @name toEmployee
     */
    public $toEmployee = null;

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
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHour")
     * @mandatory 0
     * @destination_entity CRWeekHour
     * @to_many 1
     * @name allWeekHours
     */
    public $allWeekHours = null;

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
     * @var Collection
     * @OneToMany (targetEntity="CRAttachment")
     * @mandatory 0
     * @destination_entity CRAttachment
     * @to_many 1
     * @name attachments
     */
    public $attachments = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toContractTypeNode
     * @default 1
     * @nodeType Plaatsing-Contract-type
     */
    public $toContractTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoicePeriodNode
     * @default 1
     * @nodeType Facturatieperiode
     */
    public $toInvoicePeriodNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toWorkUnitNode
     * @default 1
     * @nodeType Werktijden-eenheid
     */
    public $toWorkUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toRotationOffUnitNode
     * @default 1
     * @nodeType Werkschema-eenheid
     */
    public $toRotationOffUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toRotationOnUnitNode
     * @default 1
     * @nodeType Werkschema-eenheid
     */
    public $toRotationOnUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPgcHoursUnitNode
     * @default 1
     * @nodeType Resturen-eenheid
     */
    public $toPgcHoursUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toNoticeUnitNode
     * @default 1
     * @nodeType Opzegtermijn-eenheid
     */
    public $toNoticeUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 1
     * @name _todos
     * @inverseName toJob
     */
    public $_todos = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toEndReasonNode
     * @default 0
     * @nodeType Plaatsing-reden-beeindiging
     */
    public $toEndReasonNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRFinance")
     * @mandatory 0
     * @destination_entity CRFinance
     * @to_many 1
     * @name finances
     */
    public $finances = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHourJobView")
     * @mandatory 0
     * @destination_entity CRWeekHourJobView
     * @to_many 1
     * @name weekHourJobViews
     */
    public $weekHourJobViews = null;

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
     * @nodeType Plaatsing-status
     */
    public $toStatusNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRJobDocument")
     * @mandatory 0
     * @destination_entity CRJobDocument
     * @to_many 1
     * @name documents
     */
    public $documents = null;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toWeekHourCompany
     */
    public $toWeekHourCompany = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toHoursApprovementNode
     * @default 0
     * @nodeType Plaatsing-goedkeuring-uren
     */
    public $toHoursApprovementNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPaymentPeriodNode
     * @default 1
     * @nodeType Betalingstermijn
     */
    public $toPaymentPeriodNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTaxRateNode
     * @default 1
     * @nodeType BTW-tarief
     */
    public $toTaxRateNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRInvoiceLine")
     * @mandatory 0
     * @destination_entity CRInvoiceLine
     * @to_many 1
     * @name invoiceLines
     */
    public $invoiceLines = null;

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
     * @name modifiedBy
     */
    public $modifiedBy = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCostPriceCurrencyNode
     */
    public $toCostPriceCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCostPriceUnitNode
     */
    public $toCostPriceUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSellingPriceCurrencyNode
     */
    public $toSellingPriceCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSellingPriceUnitNode
     */
    public $toSellingPriceUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name groupNodes
     */
    public $groupNodes = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPurchaseRateCurrencyNode
     */
    public $toPurchaseRateCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPurchaseRateUnitNode
     */
    public $toPurchaseRateUnitNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUserRole
     * @OneToOne (targetEntity="CRUserRole")
     * @mandatory 0
     * @destination_entity CRUserRole
     * @to_many 0
     * @name toConfidentialUserRole
     */
    public $toConfidentialUserRole = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("jobID");
        $entityConfiguration->setName("CRJob");
    }
}
