<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitudRespuestasFixture
 *
 */
class SolicitudRespuestasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'solicitud_informacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'respuesta' => ['type' => 'string', 'length' => 2500, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_respuesta' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_solicitud_respuestas_1_idx' => ['type' => 'index', 'columns' => ['solicitud_informacion_id'], 'length' => []],
            'fk_solicitud_respuestas_2_idx' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_solicitud_respuestas_1' => ['type' => 'foreign', 'columns' => ['solicitud_informacion_id'], 'references' => ['solicitud_informacions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_solicitud_respuestas_2' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'solicitud_informacion_id' => 1,
            'respuesta' => 'Lorem ipsum dolor sit amet',
            'fecha_respuesta' => '2016-08-04 07:41:52',
            'usuario_id' => 1
        ],
    ];
}
