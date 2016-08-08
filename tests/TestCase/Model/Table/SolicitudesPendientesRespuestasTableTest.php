<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitudesPendientesRespuestasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitudesPendientesRespuestasTable Test Case
 */
class SolicitudesPendientesRespuestasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitudesPendientesRespuestasTable
     */
    public $SolicitudesPendientesRespuestas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.solicitudes_pendientes_respuestas',
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
        'app.solicitud_informacions',
        'app.institucion_solicitudes',
        'app.solicitud_respuestas',
        'app.adjuntos_solicitud_respuestas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SolicitudesPendientesRespuestas') ? [] : ['className' => 'App\Model\Table\SolicitudesPendientesRespuestasTable'];
        $this->SolicitudesPendientesRespuestas = TableRegistry::get('SolicitudesPendientesRespuestas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SolicitudesPendientesRespuestas);

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
