<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Thu, 10 Sep 2026 15:04:34 +0200
 */
abstract class AbstractCRTalentPoolMatchStageLink extends \Carerix\Api\Rest\Entity
{
    public const ENTITY = 'CRTalentPoolMatchStageLink';

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolMatchStageLinkID");
        $entityConfiguration->setName("CRTalentPoolMatchStageLink");
    }
}
