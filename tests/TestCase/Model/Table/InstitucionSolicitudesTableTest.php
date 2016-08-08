<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitucionSolicitudesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitucionSolicitudesTable Test Case
 */
class InstitucionSolicitudesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitucionSolicitudesTable
     */
    public $InstitucionSolicitudes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.institucion_solicitudes',
        'app.institucions',
        'app.institucion_recomendacion',
        'app.recomendacions',
        'app.users',
        'app.rols',
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
        'app.solicitud_informacions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InstitucionSolicitudes') ? [] : ['className' => 'App\Model\Table\InstitucionSolicitudesTable'];
        $this->InstitucionSolicitudes = TableRegistry::get('InstitucionSolicitudes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InstitucionSolicitudes);

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
