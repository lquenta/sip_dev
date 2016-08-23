<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComiteRecomendacionsFixture
 *
 */
class ComiteRecomendacionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'recomendacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'comite_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_mecanismos_recomendacions_1_idx' => ['type' => 'index', 'columns' => ['recomendacion_id'], 'length' => []],
            'fk_mecanismos_recomendacions_2_idx' => ['type' => 'index', 'columns' => ['comite_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_mecanismos_recomendacions_1' => ['type' => 'foreign', 'columns' => ['recomendacion_id'], 'references' => ['recomendacions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_mecanismos_recomendacions_2' => ['type' => 'foreign', 'columns' => ['comite_id'], 'references' => ['comites', 'IdComite'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'recomendacion_id' => 1,
            'comite_id' => 1
        ],
    ];
}
