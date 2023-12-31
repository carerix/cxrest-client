<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Wed, 11 Oct 2023 08:58:00 +0000
 * @method AbstractCRToDoNotes setNotesHash() setNotesHash(string $value)
 * @method string getNotesHash getNotesHash()
 * @method AbstractCRToDoNotes setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 */
abstract class AbstractCRToDoNotes extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRToDoNotes';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width 32
     */
    public $notesHash = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $notes = null;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("toDoNotesID");
        $entityConfiguration->setName("CRToDoNotes");
    }
}
