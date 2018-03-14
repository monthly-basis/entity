<?php
namespace LeoGalleguillos\Entity\Model\Entity;

use LeoGalleguillos\Entity\Model\Entity as EntityEntity;

class EntityType
{
    protected $entityTypeId;

    public function getEntityTypeId() : int
    {
        return $this->entityTypeId;
    }

    public function setEntityTypeId(int $entityTypeId) : EntityEntity\EntityType
    {
        $this->entityTypeId = $entityTypeId;
        return $this;
    }
}
