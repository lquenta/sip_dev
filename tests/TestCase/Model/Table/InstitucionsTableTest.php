<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitucionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitucionsTable Test Case
 */
class InstitucionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitucionsTable
     */
    public $Institucions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Institucions') ? [] : ['className' => 'App\Model\Table\InstitucionsTable'];
        $this->Institucions = TableRegistry::get('Institucions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Institucions);

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
