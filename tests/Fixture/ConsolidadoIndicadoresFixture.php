<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConsolidadoIndicadoresFixture
 *
 */
class ConsolidadoIndicadoresFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'consolidado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'indicador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'consolidado_relaindicador_idx' => ['type' => 'index', 'columns' => ['indicador_id'], 'length' => []],
            'consolidado_relconsolidado_idx' => ['type' => 'index', 'columns' => ['consolidado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'consolidado_relaindicador' => ['type' => 'foreign', 'columns' => ['indicador_id'], 'references' => ['indicadors', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'consolidado_relconsolidado' => ['type' => 'foreign', 'columns' => ['consolidado_id'], 'references' => ['consolidados', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_spanish_ci'
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
            'consolidado_id' => 1,
            'indicador_id' => 1
        ],
    ];
}
