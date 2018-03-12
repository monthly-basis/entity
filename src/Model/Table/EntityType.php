<?php
namespace LeoGalleguillos\Entity\Model\Table;

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
}
