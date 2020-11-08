<?php
namespace MonthlyBasis\Entity\Model\Table;

use Exception;
use Generator;
use Zend\Db\Adapter\Adapter;

class Meta
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
        int $entityId,
        array $array
    ): int {
        $sql = '
            INSERT
              INTO `meta`
                   (`entity_id`, `name`)
            VALUES ?, ?
                 ;
        ';
        $parameters = [
            $entityId,
            $array['name'],
        ];
        return (int) $this->adapter
                          ->query($sql)
                          ->execute($parameters)
                          ->getGeneratedValue();
    }
}
