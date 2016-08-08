<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitudInformacionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitudInformacionsTable Test Case
 */
class SolicitudInformacionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitudInformacionsTable
     */
    public $SolicitudInformacions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.solicitud_informacions',
        'app.users',
        'app.rols',
        'app.institucions',
        'app.institucion_recomendacion',
        'app.recomendacions',
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
        'app.institucion_solicitudes',
        'app.solicitud_respuestas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SolicitudInformacions') ? [] : ['className' => 'App\Model\Table\SolicitudInformacionsTable'];
        $this->SolicitudInformacions = TableRegistry::get('SolicitudInformacions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SolicitudInformacions);

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
