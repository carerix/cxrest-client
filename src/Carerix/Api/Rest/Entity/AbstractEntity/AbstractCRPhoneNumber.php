<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Thu, 10 Sep 2026 15:07:44 +0200
 * @method AbstractCRPhoneNumber setPhoneNumberID() setPhoneNumberID(integer $value)
 * @method integer getPhoneNumberID getPhoneNumberID()
 * @method AbstractCRPhoneNumber setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRPhoneNumber setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRPhoneNumber setPhoneNumber() setPhoneNumber(string $value)
 * @method string getPhoneNumber getPhoneNumber()
 * @method AbstractCRPhoneNumber setSourceEntityID() setSourceEntityID(integer $value)
 * @method integer getSourceEntityID getSourceEntityID()
 * @method AbstractCRPhoneNumber setSourceEntityName() setSourceEntityName(string $value)
 * @method string getSourceEntityName getSourceEntityName()
 * @method AbstractCRPhoneNumber setIsPrimary() setIsPrimary(integer $value)
 * @method integer getIsPrimary getIsPrimary()
 * @method AbstractCRPhoneNumber setIsInvalid() setIsInvalid(integer $value)
 * @method integer getIsInvalid getIsInvalid()
 * @method AbstractCRPhoneNumber setToPhoneNumberLabel() setToPhoneNumberLabel(array|CRDataNode $value)
 * @method CRDataNode getToPhoneNumberLabel getToPhoneNumberLabel($index = null)
 */
abstract class AbstractCRPhoneNumber extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRPhoneNumber';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $phoneNumberID = null;

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
     * @allows_null 0
     */
    public $creationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width 128
     */
    public $phoneNumber = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $sourceEntityID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $sourceEntityName = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isPrimary = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isInvalid = null;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPhoneNumberLabel
     * @default 0
     * @nodeType PhoneNumber-label
     */
    public $toPhoneNumberLabel = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("phoneNumberID");
        $entityConfiguration->setName("CRPhoneNumber");
    }
}
