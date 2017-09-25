<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposTarefasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposTarefasTable Test Case
 */
class TiposTarefasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposTarefasTable
     */
    public $TiposTarefas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipos_tarefas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TiposTarefas') ? [] : ['className' => TiposTarefasTable::class];
        $this->TiposTarefas = TableRegistry::get('TiposTarefas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposTarefas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
