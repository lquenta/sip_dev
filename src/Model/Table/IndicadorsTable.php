<?php
namespace App\Model\Table;

use App\Model\Entity\Indicador;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Indicadors Model
 *
 * @property \Cake\ORM\Association\HasMany $Derechos
 */
class IndicadorsTable extends Table
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

        $this->table('indicadors');
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->hasMany('Derechos', [
            'foreignKey' => 'indicador_id'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        return $validator;
    }
}
