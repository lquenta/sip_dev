<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccionsTable Test Case
 */
class AccionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccionsTable
     */
    public $Accions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.accions',
        'app.usuarios',
        'app.recomendacions',
        'app.estados',
        'app.adjuntos_recomendacions',
        'app.autorizacions',
        'app.derecho_recomendacion',
        'app.institucion_recomendacion',
        'app.mecanismo_recomendacion',
        'app.notificacions',
        'app.poblacion_recomendacion',
        'app.revisions',
        'app.versions',
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
        $config = TableRegistry::exists('Accions') ? [] : ['className' => 'App\Model\Table\AccionsTable'];
        $this->Accions = TableRegistry::get('Accions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Accions);

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
