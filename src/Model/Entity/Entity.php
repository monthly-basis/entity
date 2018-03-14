<?php
namespace LeoGalleguillos\Entity\Model\Entity;

use LeoGalleguillos\Entity\Model\Entity as EntityEntity;

class Entity
{
    protected $entityId;

    public function getEntityId() : int
    {
        return $this->entityId;
    }

    public function setEntityId(int $entityId) : EntityEntity\Entity
    {
        $this->entityId = $entityId;
        return $this;
    }
}
