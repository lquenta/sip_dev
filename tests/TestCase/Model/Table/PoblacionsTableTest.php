<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PoblacionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PoblacionsTable Test Case
 */
class PoblacionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PoblacionsTable
     */
    public $Poblacions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.poblacions',
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
        $config = TableRegistry::exists('Poblacions') ? [] : ['className' => 'App\Model\Table\PoblacionsTable'];
        $this->Poblacions = TableRegistry::get('Poblacions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Poblacions);

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
