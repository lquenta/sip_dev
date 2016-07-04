<?php
namespace App\Model\Table;

use App\Model\Entity\Rol;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rols Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Institucions
 * @property \Cake\ORM\Association\HasMany $Users
 */
class RolsTable extends Table
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

        $this->table('rols');
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->belongsTo('Institucions', [
            'foreignKey' => 'institucion_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'rol_id'
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['institucion_id'], 'Institucions'));
        return $rules;
    }
}
