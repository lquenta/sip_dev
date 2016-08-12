<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccionSolicitudFixture
 *
 */
class AccionSolicitudFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'accion_solicitud';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'accion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'institucion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'respuesta' => ['type' => 'string', 'length' => 2000, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'link_adjunto' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'estado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_accion_sol1_idx' => ['type' => 'index', 'columns' => ['accion_id'], 'length' => []],
            'fk_accion_sol2_idx' => ['type' => 'index', 'columns' => ['institucion_id'], 'length' => []],
            'fk_accion_sol3_idx' => ['type' => 'index', 'columns' => ['estado_id'], 'length' => []],
            'fk_accion_sol4_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
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
            'accion_id' => 1,
            'institucion_id' => 1,
            'fecha' => '2016-08-11 05:43:08',
            'respuesta' => 'Lorem ipsum dolor sit amet',
            'link_adjunto' => 'Lorem ipsum dolor sit amet',
            'estado_id' => 1,
            'user_id' => 1
        ],
    ];
}
