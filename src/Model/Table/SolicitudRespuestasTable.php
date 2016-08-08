<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SolicitudRespuestas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SolicitudInformacions
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $AdjuntosSolicitudRespuestas
 *
 * @method \App\Model\Entity\SolicitudRespuesta get($primaryKey, $options = [])
 * @method \App\Model\Entity\SolicitudRespuesta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SolicitudRespuesta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudRespuesta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SolicitudRespuesta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudRespuesta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudRespuesta findOrCreate($search, callable $callback = null)
 */
class SolicitudRespuestasTable extends Table
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

        $this->table('solicitud_respuestas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('SolicitudInformacions', [
            'foreignKey' => 'solicitud_informacion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AdjuntosSolicitudRespuestas', [
            'foreignKey' => 'solicitud_respuesta_id'
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
            ->requirePresence('respuesta', 'create')
            ->notEmpty('respuesta');

        $validator
            ->dateTime('fecha_respuesta')
            ->requirePresence('fecha_respuesta', 'create')
            ->notEmpty('fecha_respuesta');

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
        $rules->add($rules->existsIn(['solicitud_informacion_id'], 'SolicitudInformacions'));
        $rules->add($rules->existsIn(['usuario_id'], 'Users'));

        return $rules;
    }
}
