<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstitucionSolicitudesFixture
 *
 */
class InstitucionSolicitudesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'institucion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'solicitud_informacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_institucion_solicitudes_1_idx' => ['type' => 'index', 'columns' => ['institucion_id'], 'length' => []],
            'fk_institucion_solicitudes_2_idx' => ['type' => 'index', 'columns' => ['solicitud_informacion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_institucion_solicitudes_1' => ['type' => 'foreign', 'columns' => ['institucion_id'], 'references' => ['institucions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_institucion_solicitudes_2' => ['type' => 'foreign', 'columns' => ['solicitud_informacion_id'], 'references' => ['solicitud_informacions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'institucion_id' => 1,
            'solicitud_informacion_id' => 1
        ],
    ];
}
