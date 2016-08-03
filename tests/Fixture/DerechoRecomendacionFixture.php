<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DerechoRecomendacionFixture
 *
 */
class DerechoRecomendacionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'derecho_recomendacion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'derecho_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'recomendacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_derecho_recomendacion_1_idx' => ['type' => 'index', 'columns' => ['derecho_id'], 'length' => []],
            'fk_derecho_recomendacion_2_idx' => ['type' => 'index', 'columns' => ['recomendacion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_derecho_recomendacion_1' => ['type' => 'foreign', 'columns' => ['derecho_id'], 'references' => ['derechos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_derecho_recomendacion_2' => ['type' => 'foreign', 'columns' => ['recomendacion_id'], 'references' => ['recomendacions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'derecho_id' => 1,
            'recomendacion_id' => 1
        ],
    ];
}
