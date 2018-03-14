<?php
namespace LeoGalleguillos\Entity\Model\Factory;

use ArrayObject;
use DateTime;
use LeoGalleguillos\Entity\Model\Entity as EntityEntity;
use LeoGalleguillos\Entity\Model\Table as EntityTable;

class EntityType
{
    public function __construct(EntityTable\EntityType $entityTypeTable)
    {
        $this->entityTypeTable = $entityTypeTable;
    }

    public function buildFromEntityTypeId(int $entityTypeId)
    {
        $array = $this->entityTypeTable->selectWhereEntityTypeId(
            $entityTypeId
        );

        return $this->buildFromArray($array);
    }

    /**
     * Build from array.
     *
     * @param array $array
     * @return EntityEntity\EntityType
     */
    public function buildFromArray(array $array) : EntityEntity\EntityType
    {
        $entityTypeEntity = new EntityEntity\EntityType();

        $entityTypeEntity->setEntityTypeId($array['entity_type_id'])
                         ->setName($array['name']);

        return $entityTypeEntity;
    }
}
