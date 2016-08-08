<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdjuntosSolicitudRespuestas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SolicitudRespuestas
 *
 * @method \App\Model\Entity\AdjuntosSolicitudRespuesta get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdjuntosSolicitudRespuesta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdjuntosSolicitudRespuesta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdjuntosSolicitudRespuesta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdjuntosSolicitudRespuesta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdjuntosSolicitudRespuesta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdjuntosSolicitudRespuesta findOrCreate($search, callable $callback = null)
 */
class AdjuntosSolicitudRespuestasTable extends Table
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

        $this->table('adjuntos_solicitud_respuestas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('SolicitudRespuestas', [
            'foreignKey' => 'solicitud_respuesta_id',
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
        $rules->add($rules->existsIn(['solicitud_respuesta_id'], 'SolicitudRespuestas'));

        return $rules;
    }
}
