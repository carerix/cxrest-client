<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\DataType\NSDictionary;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:57:52 +0000
 * @method AbstractCRData setDataID() setDataID(integer $value)
 * @method integer getDataID getDataID()
 * @method AbstractCRData setEntry() setEntry(string $value)
 * @method string getEntry getEntry()
 * @method AbstractCRData setInfo() setInfo(string $value)
 * @method string getInfo getInfo()
 * @method AbstractCRData setSection() setSection(string $value)
 * @method string getSection getSection()
 * @method AbstractCRData setDomain() setDomain(string $value)
 * @method string getDomain getDomain()
 * @method AbstractCRData setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRData setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRData setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRData setIsEditable() setIsEditable(integer $value)
 * @method integer getIsEditable getIsEditable()
 * @method AbstractCRData setIsVisible() setIsVisible(integer $value)
 * @method integer getIsVisible getIsVisible()
 * @method AbstractCRData setDefaultValue() setDefaultValue(string $value)
 * @method string getDefaultValue getDefaultValue()
 * @method AbstractCRData setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCRData setSettingConfig() setSettingConfig(NSDictionary|array $value)
 * @method NSDictionary|array getSettingConfig getSettingConfig()
 */
abstract class AbstractCRData extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRData';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $dataID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $entry = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $info = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $section = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 12
     */
    public $domain = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $isEditable = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $isVisible = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $defaultValue = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $sortOrder = null;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $settingConfig = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("dataID");
        $entityConfiguration->setName("CRData");
    }
}
