<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VersionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VersionsTable Test Case
 */
class VersionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VersionsTable
     */
    public $Versions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.versions',
        'app.recomendacions',
        'app.usuarios',
        'app.rols',
        'app.accions',
        'app.adjuntos_accions',
        'app.autorizacions',
        'app.estados',
        'app.notificacions',
        'app.revisions',
        'app.adjuntos_recomendacions',
        'app.derecho_recomendacion',
        'app.derechos',
        'app.indicadors',
        'app.indicadores_recomendacions',
        'app.institucion_recomendacion',
        'app.institucions',
        'app.mecanismo_recomendacion',
        'app.mecanismos',
        'app.poblacion_recomendacion',
        'app.poblacions',
        'app.recomendacion_parametros',
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
        $config = TableRegistry::exists('Versions') ? [] : ['className' => 'App\Model\Table\VersionsTable'];
        $this->Versions = TableRegistry::get('Versions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Versions);

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
