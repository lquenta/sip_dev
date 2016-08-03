<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MecanismoRecomendacionFixture
 *
 */
class MecanismoRecomendacionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mecanismo_recomendacion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'mecanismo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'recomendacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_mecanismo_recomendacion_1_idx' => ['type' => 'index', 'columns' => ['mecanismo_id'], 'length' => []],
            'fk_mecanismo_recomendacion_2_idx' => ['type' => 'index', 'columns' => ['recomendacion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_mecanismo_recomendacion_1' => ['type' => 'foreign', 'columns' => ['mecanismo_id'], 'references' => ['mecanismos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_mecanismo_recomendacion_2' => ['type' => 'foreign', 'columns' => ['recomendacion_id'], 'references' => ['recomendacions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'mecanismo_id' => 1,
            'recomendacion_id' => 1
        ],
    ];
}
