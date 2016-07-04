<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitucionRecomendacionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitucionRecomendacionTable Test Case
 */
class InstitucionRecomendacionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitucionRecomendacionTable
     */
    public $InstitucionRecomendacion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.institucion_recomendacion',
        'app.institucions',
        'app.recomendacions',
        'app.usuarios',
        'app.estados',
        'app.autorizacions',
        'app.accions',
        'app.adjuntos_accions',
        'app.adjuntos_recomendacions',
        'app.derecho_recomendacion',
        'app.derechos',
        'app.indicadors',
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
        $config = TableRegistry::exists('InstitucionRecomendacion') ? [] : ['className' => 'App\Model\Table\InstitucionRecomendacionTable'];
        $this->InstitucionRecomendacion = TableRegistry::get('InstitucionRecomendacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InstitucionRecomendacion);

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
