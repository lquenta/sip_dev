<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdjuntosSolicitudRespuestasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdjuntosSolicitudRespuestasTable Test Case
 */
class AdjuntosSolicitudRespuestasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdjuntosSolicitudRespuestasTable
     */
    public $AdjuntosSolicitudRespuestas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adjuntos_solicitud_respuestas',
        'app.solicitud_respuestas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdjuntosSolicitudRespuestas') ? [] : ['className' => 'App\Model\Table\AdjuntosSolicitudRespuestasTable'];
        $this->AdjuntosSolicitudRespuestas = TableRegistry::get('AdjuntosSolicitudRespuestas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdjuntosSolicitudRespuestas);

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
