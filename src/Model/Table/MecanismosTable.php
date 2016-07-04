<?php
namespace App\Model\Table;

use App\Model\Entity\Mecanismo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mecanismos Model
 *
 * @property \Cake\ORM\Association\HasMany $MecanismoRecomendacion
 */
class MecanismosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('mecanismos');
        $this->displayField('descripcion');
        $this->primaryKey('id');

        $this->hasMany('MecanismoRecomendacion', [
            'foreignKey' => 'mecanismo_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        return $validator;
    }
}
