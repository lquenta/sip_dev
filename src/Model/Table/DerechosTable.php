<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Derechos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Indicadors
 * @property \Cake\ORM\Association\HasMany $DerechoRecomendacion
 * @property \Cake\ORM\Association\HasMany $IndicadoresDerechos
 *
 * @method \App\Model\Entity\Derecho get($primaryKey, $options = [])
 * @method \App\Model\Entity\Derecho newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Derecho[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Derecho|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Derecho patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Derecho[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Derecho findOrCreate($search, callable $callback = null)
 */
class DerechosTable extends Table
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

        $this->table('derechos');
        $this->displayField('descripcion');
        $this->primaryKey('id');

        $this->belongsTo('Indicadors', [
            'foreignKey' => 'indicador_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('DerechoRecomendacion', [
            'foreignKey' => 'derecho_id'
        ]);
        $this->hasMany('IndicadoresDerechos', [
            'foreignKey' => 'derecho_id'
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['indicador_id'], 'Indicadors'));
        return $rules;
    }
}
