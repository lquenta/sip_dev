<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PoblacionRecomendacionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PoblacionRecomendacionTable Test Case
 */
class PoblacionRecomendacionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PoblacionRecomendacionTable
     */
    public $PoblacionRecomendacion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.poblacion_recomendacion',
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
        'app.institucion_recomendacion',
        'app.institucions',
        'app.mecanismo_recomendacion',
        'app.mecanismos',
        'app.notificacions',
        'app.revisions',
        'app.versions',
        'app.poblacions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PoblacionRecomendacion') ? [] : ['className' => 'App\Model\Table\PoblacionRecomendacionTable'];
        $this->PoblacionRecomendacion = TableRegistry::get('PoblacionRecomendacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PoblacionRecomendacion);

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
