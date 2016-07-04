<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DerechosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DerechosTable Test Case
 */
class DerechosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DerechosTable
     */
    public $Derechos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.derechos',
        'app.indicadors',
        'app.derecho_recomendacion',
        'app.recomendacions',
        'app.usuarios',
        'app.estados',
        'app.accions',
        'app.adjuntos_accions',
        'app.adjuntos_recomendacions',
        'app.autorizacions',
        'app.institucion_recomendacion',
        'app.mecanismo_recomendacion',
        'app.notificacions',
        'app.poblacion_recomendacion',
        'app.revisions',
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
        $config = TableRegistry::exists('Derechos') ? [] : ['className' => 'App\Model\Table\DerechosTable'];
        $this->Derechos = TableRegistry::get('Derechos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Derechos);

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
