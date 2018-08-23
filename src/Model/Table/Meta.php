<?php
namespace LeoGalleguillos\Entity\Model\Table;

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
}
