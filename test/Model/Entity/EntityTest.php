<?php
namespace MonthlyBasis\EntityTest\Model\Entity;

use DateTime;
use MonthlyBasis\Entity\Model\Entity as EntityEntity;
use PHPUnit\Framework\TestCase;

class EntityTest extends TestCase
{
    protected function setUp(): void
    {
        $this->entityEntity = new EntityEntity\Entity();
    }

    public function testGettersAndSetters()
    {
        $deletedDatetime = new DateTime();
        $this->assertSame(
            $this->entityEntity,
            $this->entityEntity->setDeletedDatetime($deletedDatetime)
        );
        $this->assertSame(
            $deletedDatetime,
            $this->entityEntity->getDeletedDateTime()
        );

        $deletedReason = 'reason for deletion';
        $this->assertSame(
            $this->entityEntity,
            $this->entityEntity->setDeletedReason($deletedReason)
        );
        $this->assertSame(
            $deletedReason,
            $this->entityEntity->getDeletedReason()
        );

        $deletedUserId = 2718;
        $this->assertSame(
            $this->entityEntity,
            $this->entityEntity->setDeletedUserId($deletedUserId)
        );
        $this->assertSame(
            $deletedUserId,
            $this->entityEntity->getDeletedUserId()
        );

        $entityId = 314159;
        $this->assertSame(
            $this->entityEntity,
            $this->entityEntity->setEntityId($entityId)
        );
        $this->assertSame(
            $entityId,
            $this->entityEntity->getEntityId()
        );
    }
}
