<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdjuntosAccions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Accions
 *
 * @method \App\Model\Entity\AdjuntosAccion get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdjuntosAccion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdjuntosAccion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdjuntosAccion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdjuntosAccion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdjuntosAccion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdjuntosAccion findOrCreate($search, callable $callback = null)
 */
class AdjuntosAccionsTable extends Table
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

        $this->table('adjuntos_accions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Accions', [
            'foreignKey' => 'accion_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('link', 'create')
            ->notEmpty('link');

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
        $rules->add($rules->existsIn(['accion_id'], 'Accions'));
        return $rules;
    }
}
