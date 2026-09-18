<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Thu, 10 Sep 2026 15:02:49 +0200
 */
abstract class AbstractCRStatusInfoLink extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRStatusInfoLink';

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("statusInfoLinkID");
        $entityConfiguration->setName("CRStatusInfoLink");
    }
}
