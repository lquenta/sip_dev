<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComiteRecomendacionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComiteRecomendacionsTable Test Case
 */
class ComiteRecomendacionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ComiteRecomendacionsTable
     */
    public $ComiteRecomendacions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.comite_recomendacions',
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
        'app.derecho_recomendacion',
        'app.derechos',
        'app.indicadors',
        'app.indicadores_derechos',
        'app.mecanismo_recomendacion',
        'app.mecanismos',
        'app.notificacions',
        'app.poblacion_recomendacion',
        'app.poblacions',
        'app.recomendacion_parametros',
        'app.revisions',
        'app.versions',
        'app.adjuntos_versions',
        'app.comites'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ComiteRecomendacions') ? [] : ['className' => 'App\Model\Table\ComiteRecomendacionsTable'];
        $this->ComiteRecomendacions = TableRegistry::get('ComiteRecomendacions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ComiteRecomendacions);

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
