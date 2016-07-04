<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdjuntosRecomendacionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdjuntosRecomendacionsTable Test Case
 */
class AdjuntosRecomendacionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdjuntosRecomendacionsTable
     */
    public $AdjuntosRecomendacions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adjuntos_recomendacions',
        'app.recomendacions',
        'app.usuarios',
        'app.estados',
        'app.accions',
        'app.adjuntos_accions',
        'app.autorizacions',
        'app.derecho_recomendacion',
        'app.institucion_recomendacion',
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
        $config = TableRegistry::exists('AdjuntosRecomendacions') ? [] : ['className' => 'App\Model\Table\AdjuntosRecomendacionsTable'];
        $this->AdjuntosRecomendacions = TableRegistry::get('AdjuntosRecomendacions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdjuntosRecomendacions);

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
