<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MecanismosRecomendacionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MecanismosRecomendacionsTable Test Case
 */
class MecanismosRecomendacionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MecanismosRecomendacionsTable
     */
    public $MecanismosRecomendacions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mecanismos_recomendacions',
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
        $config = TableRegistry::exists('MecanismosRecomendacions') ? [] : ['className' => 'App\Model\Table\MecanismosRecomendacionsTable'];
        $this->MecanismosRecomendacions = TableRegistry::get('MecanismosRecomendacions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MecanismosRecomendacions);

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
