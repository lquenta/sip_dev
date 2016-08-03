<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IndicadoresDerechosFixture
 *
 */
class IndicadoresDerechosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'derecho_id' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'indicador_id' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'lnk_indicadores_derechos_indicadors' => ['type' => 'index', 'columns' => ['indicador_id'], 'length' => []],
            'lnk_indicadores_derechos_derechos' => ['type' => 'index', 'columns' => ['derecho_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'lnk_indicadores_derechos_derechos' => ['type' => 'foreign', 'columns' => ['derecho_id'], 'references' => ['derechos', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'lnk_indicadores_derechos_indicadors' => ['type' => 'foreign', 'columns' => ['indicador_id'], 'references' => ['indicadors', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'derecho_id' => 1,
            'indicador_id' => 1
        ],
    ];
}
