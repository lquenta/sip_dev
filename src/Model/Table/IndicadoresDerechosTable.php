<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IndicadoresDerechos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Derechos
 * @property \Cake\ORM\Association\BelongsTo $Indicadors
 *
 * @method \App\Model\Entity\IndicadoresDerecho get($primaryKey, $options = [])
 * @method \App\Model\Entity\IndicadoresDerecho newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IndicadoresDerecho[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IndicadoresDerecho|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IndicadoresDerecho patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IndicadoresDerecho[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IndicadoresDerecho findOrCreate($search, callable $callback = null)
 */
class IndicadoresDerechosTable extends Table
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

        $this->table('indicadores_derechos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Derechos', [
            'foreignKey' => 'derecho_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Indicadors', [
            'foreignKey' => 'indicador_id',
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
        $rules->add($rules->existsIn(['derecho_id'], 'Derechos'));
        $rules->add($rules->existsIn(['indicador_id'], 'Indicadors'));
        return $rules;
    }
}
