<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RecomendacionParametros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Recomendacions
 *
 * @method \App\Model\Entity\RecomendacionParametro get($primaryKey, $options = [])
 * @method \App\Model\Entity\RecomendacionParametro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RecomendacionParametro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RecomendacionParametro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RecomendacionParametro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RecomendacionParametro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RecomendacionParametro findOrCreate($search, callable $callback = null)
 */
class RecomendacionParametrosTable extends Table
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

        $this->table('recomendacion_parametros');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Recomendacions', [
            'foreignKey' => 'recomendacion_id',
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
            ->decimal('prioridad')
            ->requirePresence('prioridad', 'create')
            ->notEmpty('prioridad');

        $validator
            ->decimal('tiempo')
            ->requirePresence('tiempo', 'create')
            ->notEmpty('tiempo');

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
        $rules->add($rules->existsIn(['recomendacion_id'], 'Recomendacions'));
        return $rules;
    }
}
