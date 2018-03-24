<?php
namespace LeoGalleguillos\EntityTest\Model\Table;

use ArrayObject;
use Exception;
use LeoGalleguillos\Entity\Model\Table as EntityTable;
use LeoGalleguillos\EntityTest\TableTestCase;
use Zend\Db\Adapter\Adapter;
use PHPUnit\Framework\TestCase;

class EntityTypeTest extends TableTestCase
{
    /**
     * @var string
     */
    protected $sqlPath = __DIR__ . '/../../..' . '/sql/leogalle_test/entity_type/';

    protected function setUp()
    {
        $configArray     = require(__DIR__ . '/../../../config/autoload/local.php');
        $configArray     = $configArray['db']['adapters']['leogalle_test'];
        $this->adapter   = new Adapter($configArray);

        $this->entityTypeTable = new EntityTable\EntityType($this->adapter);

        $this->setForeignKeyChecks0();
        $this->dropTable();
        $this->createTable();
        $this->setForeignKeyChecks1();
    }

    protected function dropTable()
    {
        $sql = file_get_contents($this->sqlPath . 'drop.sql');
        $result = $this->adapter->query($sql)->execute();
    }

    protected function createTable()
    {
        $sql = file_get_contents($this->sqlPath . 'create.sql');
        $result = $this->adapter->query($sql)->execute();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            EntityTable\EntityType::class,
            $this->entityTypeTable
        );
    }

    public function testInsertAndSelectCount()
    {
        $this->assertSame(
            0,
            $this->entityTypeTable->selectCount()
        );
        $this->entityTypeTable->insert(
            'name'
        );
        $this->entityTypeTable->insert(
            'name2'
        );
        $this->entityTypeTable->insert(
            'name3'
        );
        $this->assertSame(
            3,
            $this->entityTypeTable->selectCount()
        );
    }

    public function testSelectWhereEntityTypeId()
    {
        $this->entityTypeTable->insert(
            'name'
        );
        $this->entityTypeTable->insert(
            'name2'
        );
        $this->entityTypeTable->insert(
            'name3'
        );
        $array = $this->entityTypeTable->selectWhereEntityTypeId(2);
        $this->assertSame(
            '2',
            $array['entity_type_id']
        );
        $this->assertSame(
            'name2',
            $array['name']
        );
    }

    public function testSelectWhereName()
    {
        $this->entityTypeTable->insert(
            'name'
        );
        $this->entityTypeTable->insert(
            'name2'
        );
        $this->entityTypeTable->insert(
            'name3'
        );
        $array = $this->entityTypeTable->selectWhereName('name3');
        $this->assertSame(
            '3',
            $array['entity_type_id']
        );
        $this->assertSame(
            'name3',
            $array['name']
        );
    }
}
