<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PoblacionRecomendacionFixture
 *
 */
class PoblacionRecomendacionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'poblacion_recomendacion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'recomendacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'poblacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_recomendacion_poblacion_1_idx' => ['type' => 'index', 'columns' => ['recomendacion_id'], 'length' => []],
            'fk_recomendacion_poblacion_2_idx' => ['type' => 'index', 'columns' => ['poblacion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_recomendacion_poblacion_1' => ['type' => 'foreign', 'columns' => ['recomendacion_id'], 'references' => ['recomendacions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_recomendacion_poblacion_2' => ['type' => 'foreign', 'columns' => ['poblacion_id'], 'references' => ['poblacions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'recomendacion_id' => 1,
            'poblacion_id' => 1
        ],
    ];
}
