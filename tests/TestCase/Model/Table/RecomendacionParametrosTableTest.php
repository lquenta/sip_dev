<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecomendacionParametrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecomendacionParametrosTable Test Case
 */
class RecomendacionParametrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecomendacionParametrosTable
     */
    public $RecomendacionParametros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recomendacion_parametros',
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
        'app.poblacion_recomendacion',
        'app.poblacions',
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
        $config = TableRegistry::exists('RecomendacionParametros') ? [] : ['className' => 'App\Model\Table\RecomendacionParametrosTable'];
        $this->RecomendacionParametros = TableRegistry::get('RecomendacionParametros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RecomendacionParametros);

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
