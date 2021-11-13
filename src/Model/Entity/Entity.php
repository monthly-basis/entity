<?php
namespace MonthlyBasis\Entity\Model\Entity;

use DateTime;
use MonthlyBasis\Entity\Model\Entity as EntityEntity;

class Entity
{
    protected DateTime $deletedDateTime;
    protected string $deletedReason;
    protected int $deletedUserId;
    protected int $entityId;

    public function getDeletedDateTime(): DateTime
    {
        return $this->deletedDateTime;
    }

    public function getDeletedReason(): string
    {
        return $this->deletedReason;
    }

    public function getDeletedUserId(): int
    {
        return $this->deletedUserId;
    }

    public function getEntityId(): int
    {
        return $this->entityId;
    }

    public function setDeletedDateTime(DateTime $deletedDateTime): EntityEntity\Entity
    {
        $this->deletedDateTime = $deletedDateTime;
        return $this;
    }

    public function setDeletedReason(string $deletedReason): EntityEntity\Entity
    {
        $this->deletedReason = $deletedReason;
        return $this;
    }

    public function setDeletedUserId(int $deletedUserId): EntityEntity\Entity
    {
        $this->deletedUserId = $deletedUserId;
        return $this;
    }

    public function setEntityId(int $entityId): EntityEntity\Entity
    {
        $this->entityId = $entityId;
        return $this;
    }
}
