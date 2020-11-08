<?php
namespace MonthlyBasis\Entity\Model\Factory;

use MonthlyBasis\Entity\Model\Entity as EntityEntity;
use MonthlyBasis\Entity\Model\Table as EntityTable;

class EntityType
{
    public function __construct(EntityTable\EntityType $entityTypeTable)
    {
        $this->entityTypeTable = $entityTypeTable;
    }

    public function buildFromEntityTypeId(
        int $entityTypeId
    ): EntityEntity\EntityType {
        return $this->buildFromArray(
            $this->entityTypeTable->selectWhereEntityTypeId($entityTypeId)
        );

    }

    public function buildFromName(string $name)
    {
        return $this->buildFromArray(
            $this->entityTypeTable->selectWhereName($name)
        );

    }

    /**
     * Build from array.
     *
     * @param array $array
     * @return EntityEntity\EntityType
     */
    public function buildFromArray(array $array): EntityEntity\EntityType
    {
        $entityTypeEntity = new EntityEntity\EntityType();

        $entityTypeEntity->setEntityTypeId($array['entity_type_id'])
                         ->setName($array['name']);

        return $entityTypeEntity;
    }
}
