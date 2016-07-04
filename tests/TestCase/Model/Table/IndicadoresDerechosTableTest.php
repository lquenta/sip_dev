<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IndicadoresDerechosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IndicadoresDerechosTable Test Case
 */
class IndicadoresDerechosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IndicadoresDerechosTable
     */
    public $IndicadoresDerechos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.indicadores_derechos',
        'app.derechos',
        'app.indicadors',
        'app.derecho_recomendacion',
        'app.recomendacions',
        'app.users',
        'app.rols',
        'app.institucions',
        'app.institucion_recomendacion',
        'app.estados',
        'app.autorizacions',
        'app.accions',
        'app.adjuntos_accions',
        'app.adjuntos_recomendacions',
        'app.indicadores_recomendacions',
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
        $config = TableRegistry::exists('IndicadoresDerechos') ? [] : ['className' => 'App\Model\Table\IndicadoresDerechosTable'];
        $this->IndicadoresDerechos = TableRegistry::get('IndicadoresDerechos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IndicadoresDerechos);

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
