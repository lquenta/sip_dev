<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IndicadoresAccionSolicitud Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Indicadors
 * @property \Cake\ORM\Association\BelongsTo $AccionSolicituds
 *
 * @method \App\Model\Entity\IndicadoresAccionSolicitud get($primaryKey, $options = [])
 * @method \App\Model\Entity\IndicadoresAccionSolicitud newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IndicadoresAccionSolicitud[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IndicadoresAccionSolicitud|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IndicadoresAccionSolicitud patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IndicadoresAccionSolicitud[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IndicadoresAccionSolicitud findOrCreate($search, callable $callback = null)
 */
class IndicadoresAccionSolicitudTable extends Table
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

        $this->table('indicadores_accion_solicituds');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Indicadors', [
            'foreignKey' => 'indicador_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AccionSolicitud', [
            'foreignKey' => 'accion_solicitud_id',
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
        $rules->add($rules->existsIn(['indicador_id'], 'Indicadors'));
        $rules->add($rules->existsIn(['accion_solicitud_id'], 'AccionSolicitud'));

        return $rules;
    }
}
