<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IndicadoresAccionSolicitudFixture
 *
 */
class IndicadoresAccionSolicitudFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'indicadores_accion_solicitud';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'indicador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'accion_solicitud_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_indicadores_accion_solicitud_1_idx' => ['type' => 'index', 'columns' => ['indicador_id'], 'length' => []],
            'fk_indicadores_accion_solicitud_2_idx' => ['type' => 'index', 'columns' => ['accion_solicitud_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_indicadores_accion_solicitud_1' => ['type' => 'foreign', 'columns' => ['indicador_id'], 'references' => ['indicadors', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'indicador_id' => 1,
            'accion_solicitud_id' => 1
        ],
    ];
}
