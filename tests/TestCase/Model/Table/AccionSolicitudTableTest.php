<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccionSolicitudTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccionSolicitudTable Test Case
 */
class AccionSolicitudTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccionSolicitudTable
     */
    public $AccionSolicitud;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.accion_solicitud',
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
        'app.adjuntos_accions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AccionSolicitud') ? [] : ['className' => 'App\Model\Table\AccionSolicitudTable'];
        $this->AccionSolicitud = TableRegistry::get('AccionSolicitud', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccionSolicitud);

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
