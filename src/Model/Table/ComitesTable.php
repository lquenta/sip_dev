<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comites Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Mecanismos
 *
 * @method \App\Model\Entity\Comite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Comite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comite findOrCreate($search, callable $callback = null)
 */
class ComitesTable extends Table
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

        $this->table('comites');
        $this->displayField('Descripcion');
        $this->primaryKey('IdComite');

        $this->belongsTo('Mecanismos', [
            'foreignKey' => 'mecanismo_id',
            'joinType' => 'INNER'
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
            ->integer('IdComite')
            ->allowEmpty('IdComite', 'create');

        $validator
            ->requirePresence('Descripcion', 'create')
            ->notEmpty('Descripcion');

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
        $rules->add($rules->existsIn(['mecanismo_id'], 'Mecanismos'));

        return $rules;
    }
}
