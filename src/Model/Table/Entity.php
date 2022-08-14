<?php
namespace MonthlyBasis\Entity\Model\Table;

use Laminas\Db\Adapter\Adapter;

class Entity
{
    /**
     * @var Adapter
     */
    protected $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function insert(
        int $entityTypeId,
        int $typeId
    ):int {
        $sql = '
            INSERT
              INTO `entity` (`entity_type_id`, `type_id`)
            VALUES (?, ?)
                 ;
        ';
        $parameters = [
            $entityTypeId,
            $typeId,
        ];
        return (int) $this->adapter
                          ->query($sql)
                          ->execute($parameters)
                          ->getGeneratedValue();
    }
}
