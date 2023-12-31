<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRTalentPool;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:58:04 +0000
 * @method AbstractCRTalentPoolCompany setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRTalentPoolCompany setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRTalentPoolCompany setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 * @method AbstractCRTalentPoolCompany setToTalentPool() setToTalentPool(array|CRTalentPool $value)
 * @method CRTalentPool getToTalentPool getToTalentPool($index = null)
 */
abstract class AbstractCRTalentPoolCompany extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRTalentPoolCompany';

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
    public $modificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 1
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     */
    public $toCompany = null;

    /**
     * @cx_field true
     * @access private
     * @var CRTalentPool
     * @OneToOne (targetEntity="CRTalentPool")
     * @mandatory 1
     * @destination_entity CRTalentPool
     * @to_many 0
     * @name toTalentPool
     */
    public $toTalentPool = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolCompanyID");
        $entityConfiguration->setName("CRTalentPoolCompany");
    }
}
