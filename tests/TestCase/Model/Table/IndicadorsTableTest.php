<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IndicadorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IndicadorsTable Test Case
 */
class IndicadorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IndicadorsTable
     */
    public $Indicadors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.indicadors',
        'app.derechos',
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
        'app.mecanismo_recomendacion',
        'app.mecanismos',
        'app.notificacions',
        'app.poblacion_recomendacion',
        'app.poblacions',
        'app.recomendacion_parametros',
        'app.revisions',
        'app.versions',
        'app.adjuntos_versions',
        'app.indicadores_derechos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Indicadors') ? [] : ['className' => 'App\Model\Table\IndicadorsTable'];
        $this->Indicadors = TableRegistry::get('Indicadors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Indicadors);

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
}
