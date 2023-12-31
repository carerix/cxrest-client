<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRUserRole;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:58:01 +0000
 * @method AbstractCRUserRoleKey setUserRoleKey() setUserRoleKey(string $value)
 * @method string getUserRoleKey getUserRoleKey()
 * @method AbstractCRUserRoleKey setValue() setValue(string $value)
 * @method string getValue getValue()
 * @method AbstractCRUserRoleKey setUserRoleID() setUserRoleID(integer $value)
 * @method integer getUserRoleID getUserRoleID()
 * @method AbstractCRUserRoleKey setToUserRole() setToUserRole(array|CRUserRole $value)
 * @method CRUserRole getToUserRole getToUserRole($index = null)
 */
abstract class AbstractCRUserRoleKey extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRUserRoleKey';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $userRoleKey = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $value = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $userRoleID = null;

    /**
     * @cx_field true
     * @access private
     * @var CRUserRole
     * @OneToOne (targetEntity="CRUserRole")
     * @mandatory 0
     * @destination_entity CRUserRole
     * @to_many 0
     * @name toUserRole
     */
    public $toUserRole = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("userRoleKeyID");
        $entityConfiguration->setName("CRUserRoleKey");
    }
}
