<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdjuntosVersionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdjuntosVersionsTable Test Case
 */
class AdjuntosVersionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdjuntosVersionsTable
     */
    public $AdjuntosVersions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adjuntos_versions',
        'app.versions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdjuntosVersions') ? [] : ['className' => 'App\Model\Table\AdjuntosVersionsTable'];
        $this->AdjuntosVersions = TableRegistry::get('AdjuntosVersions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdjuntosVersions);

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
