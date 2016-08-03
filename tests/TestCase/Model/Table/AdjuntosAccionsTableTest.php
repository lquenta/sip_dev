<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdjuntosAccionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdjuntosAccionsTable Test Case
 */
class AdjuntosAccionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdjuntosAccionsTable
     */
    public $AdjuntosAccions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adjuntos_accions',
        'app.accions',
        'app.users',
        'app.rols',
        'app.institucions',
        'app.institucion_recomendacion',
        'app.recomendacions',
        'app.estados',
        'app.autorizacions',
        'app.adjuntos_recomendacions',
        'app.derecho_recomendacion',
        'app.derechos',
        'app.indicadors',
        'app.mecanismo_recomendacion',
        'app.mecanismos',
        'app.notificacions',
        'app.poblacion_recomendacion',
        'app.poblacions',
        'app.recomendacion_parametros',
        'app.revisions',
        'app.versions',
        'app.adjuntos_versions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdjuntosAccions') ? [] : ['className' => 'App\Model\Table\AdjuntosAccionsTable'];
        $this->AdjuntosAccions = TableRegistry::get('AdjuntosAccions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdjuntosAccions);

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
