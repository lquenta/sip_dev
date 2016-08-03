<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PoblacionRecomendacion Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Recomendacions
 * @property \Cake\ORM\Association\BelongsTo $Poblacions
 *
 * @method \App\Model\Entity\PoblacionRecomendacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\PoblacionRecomendacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PoblacionRecomendacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PoblacionRecomendacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PoblacionRecomendacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PoblacionRecomendacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PoblacionRecomendacion findOrCreate($search, callable $callback = null)
 */
class PoblacionRecomendacionTable extends Table
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

        $this->table('poblacion_recomendacion');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Recomendacions', [
            'foreignKey' => 'recomendacion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Poblacions', [
            'foreignKey' => 'poblacion_id',
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
        $rules->add($rules->existsIn(['poblacion_id'], 'Poblacions'));
        return $rules;
    }
}
