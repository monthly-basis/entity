<?php
namespace MonthlyBasis\Entity\Model\Table;

use Exception;
use Generator;
use Zend\Db\Adapter\Adapter;

class EntityType
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
        string $name
    ) {
        $sql = '
            INSERT
              INTO `entity_type` (`name`)
            VALUES (:name)
                 ;
        ';
        $parameters = [
            'name' => $name,
        ];
        return $this->adapter
                    ->query($sql)
                    ->execute($parameters)
                    ->getGeneratedValue();
    }

    public function selectCount()
    {
        $sql = '
            SELECT COUNT(*) AS `count`
              FROM `entity_type`
                 ;
        ';
        $row = $this->adapter->query($sql)->execute()->current();
        return (int) $row['count'];
    }

    public function selectWhereEntityTypeId(int $entityTypeId) : array
    {
        $sql = '
            SELECT `entity_type_id`
                 , `name`
              FROM `entity_type`
             WHERE `entity_type_id` = :entityTypeId
                 ;
        ';
        $parameters = [
            'entityTypeId' => $entityTypeId
        ];
        return $this->adapter->query($sql)->execute($parameters)->current();
    }

    public function selectWhereName(string $name) : array
    {
        $sql = '
            SELECT `entity_type_id`
                 , `name`
              FROM `entity_type`
             WHERE `name` = ?
                 ;
        ';
        $parameters = [
            $name,
        ];
        return $this->adapter->query($sql)->execute($parameters)->current();
    }
}
