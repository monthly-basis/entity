<?php
namespace MonthlyBasis\Entity\Model\Entity;

use MonthlyBasis\Entity\Model\Entity as EntityEntity;

class EntityType
{
    protected $entityTypeId;
    protected $name;

    public function getEntityTypeId() : int
    {
        return $this->entityTypeId;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : EntityEntity\EntityType
    {
        $this->name = $name;
        return $this;
    }

    public function setEntityTypeId(int $entityTypeId) : EntityEntity\EntityType
    {
        $this->entityTypeId = $entityTypeId;
        return $this;
    }
}
