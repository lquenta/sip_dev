<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConsolidadoIndicadores Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Consolidados
 * @property \Cake\ORM\Association\BelongsTo $Indicadors
 *
 * @method \App\Model\Entity\ConsolidadoIndicadore get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConsolidadoIndicadore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ConsolidadoIndicadore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConsolidadoIndicadore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConsolidadoIndicadore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConsolidadoIndicadore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConsolidadoIndicadore findOrCreate($search, callable $callback = null)
 */
class ConsolidadoIndicadoresTable extends Table
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

        $this->table('consolidado_indicadores');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Consolidados', [
            'foreignKey' => 'consolidado_id'
        ]);
        $this->belongsTo('Indicadors', [
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
        $rules->add($rules->existsIn(['consolidado_id'], 'Consolidados'));
        $rules->add($rules->existsIn(['indicador_id'], 'Indicadors'));

        return $rules;
    }
}
