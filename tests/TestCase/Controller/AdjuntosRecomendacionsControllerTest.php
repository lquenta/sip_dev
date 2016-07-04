<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AdjuntosRecomendacionsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AdjuntosRecomendacionsController Test Case
 */
class AdjuntosRecomendacionsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
