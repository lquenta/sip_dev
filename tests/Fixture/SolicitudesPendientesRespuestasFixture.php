<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitudesPendientesRespuestasFixture
 *
 */
class SolicitudesPendientesRespuestasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_modificacion' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'solicitud_informacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_solicitudes_pendientes_respuestas_1_idx' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
            'fk_solicitudes_pendientes_respuestas_2_idx' => ['type' => 'index', 'columns' => ['estado_id'], 'length' => []],
            'fk_solicitudes_pendientes_respuestas_3_idx' => ['type' => 'index', 'columns' => ['solicitud_informacion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_solicitudes_pendientes_respuestas_1' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_solicitudes_pendientes_respuestas_2' => ['type' => 'foreign', 'columns' => ['estado_id'], 'references' => ['estados', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_solicitudes_pendientes_respuestas_3' => ['type' => 'foreign', 'columns' => ['solicitud_informacion_id'], 'references' => ['solicitud_informacions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'usuario_id' => 1,
            'estado_id' => 1,
            'fecha_modificacion' => '2016-08-04 08:14:45',
            'solicitud_informacion_id' => 1
        ],
    ];
}
