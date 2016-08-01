<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MecanismosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MecanismosTable Test Case
 */
class MecanismosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MecanismosTable
     */
    public $Mecanismos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mecanismos',
        'app.mecanismo_recomendacion',
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
        'app.notificacions',
        'app.poblacion_recomendacion',
        'app.poblacions',
        'app.recomendacion_parametros',
        'app.revisions',
        'app.versions',
        'app.adjuntos_versions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Mecanismos') ? [] : ['className' => 'App\Model\Table\MecanismosTable'];
        $this->Mecanismos = TableRegistry::get('Mecanismos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mecanismos);

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
