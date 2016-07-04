<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstitucionRecomendacionFixture
 *
 */
class InstitucionRecomendacionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'institucion_recomendacion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'institucion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'recomendacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_institucion_recomendacion_1_idx' => ['type' => 'index', 'columns' => ['institucion_id'], 'length' => []],
            'fk_institucion_recomendacion_2_idx' => ['type' => 'index', 'columns' => ['recomendacion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_institucion_recomendacion_1' => ['type' => 'foreign', 'columns' => ['institucion_id'], 'references' => ['institucions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_institucion_recomendacion_2' => ['type' => 'foreign', 'columns' => ['recomendacion_id'], 'references' => ['recomendacions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'recomendacion_id' => 1
        ],
    ];
}
