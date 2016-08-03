<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdjuntosRecomendacions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Recomendacions
 *
 * @method \App\Model\Entity\AdjuntosRecomendacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdjuntosRecomendacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdjuntosRecomendacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdjuntosRecomendacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdjuntosRecomendacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdjuntosRecomendacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdjuntosRecomendacion findOrCreate($search, callable $callback = null)
 */
class AdjuntosRecomendacionsTable extends Table
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

        $this->table('adjuntos_recomendacions');
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
        $rules->add($rules->existsIn(['recomendacion_id'], 'Recomendacions'));
        return $rules;
    }
}
