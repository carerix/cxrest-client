<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRLeadStage;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:58:07 +0000
 * @method AbstractCRLeadStageName setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRLeadStageName setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRLeadStageName setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRLeadStageName setToLanguageNode() setToLanguageNode(array|CRDataNode $value)
 * @method CRDataNode getToLanguageNode getToLanguageNode($index = null)
 * @method AbstractCRLeadStageName setToLeadStage() setToLeadStage(array|CRLeadStage $value)
 * @method CRLeadStage getToLeadStage getToLeadStage($index = null)
 */
abstract class AbstractCRLeadStageName extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRLeadStageName';

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
     * @allows_null 1
     * @width 255
     */
    public $name = null;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLanguageNode
     */
    public $toLanguageNode = null;

    /**
     * @cx_field true
     * @access private
     * @var CRLeadStage
     * @OneToOne (targetEntity="CRLeadStage")
     * @mandatory 0
     * @destination_entity CRLeadStage
     * @to_many 0
     * @name toLeadStage
     */
    public $toLeadStage = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("leadStageNameID");
        $entityConfiguration->setName("CRLeadStageName");
    }
}
