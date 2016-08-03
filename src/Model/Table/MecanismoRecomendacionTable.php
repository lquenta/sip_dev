<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MecanismoRecomendacion Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Mecanismos
 * @property \Cake\ORM\Association\BelongsTo $Recomendacions
 *
 * @method \App\Model\Entity\MecanismoRecomendacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\MecanismoRecomendacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MecanismoRecomendacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MecanismoRecomendacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MecanismoRecomendacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MecanismoRecomendacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MecanismoRecomendacion findOrCreate($search, callable $callback = null)
 */
class MecanismoRecomendacionTable extends Table
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

        $this->table('mecanismo_recomendacion');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Mecanismos', [
            'foreignKey' => 'mecanismo_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['recomendacion_id'], 'Recomendacions'));
        return $rules;
    }
}
