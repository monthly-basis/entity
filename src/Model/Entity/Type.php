<?php
namespace LeoGalleguillos\Entity\Model\Entity;

use LeoGalleguillos\Entity\Model\Entity as EntityEntity;

class Type
{
    protected $typeId;

    public function getTypeId() : int
    {
        return $this->typeId;
    }

    public function setTypeId(int $typeId) : EntityEntity\Type
    {
        $this->typeId = $typeId;
        return $this;
    }
}
