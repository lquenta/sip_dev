<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SolicitudesPendientesRespuestas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\BelongsTo $SolicitudInformacions
 *
 * @method \App\Model\Entity\SolicitudesPendientesRespuesta get($primaryKey, $options = [])
 * @method \App\Model\Entity\SolicitudesPendientesRespuesta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SolicitudesPendientesRespuesta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudesPendientesRespuesta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SolicitudesPendientesRespuesta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudesPendientesRespuesta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudesPendientesRespuesta findOrCreate($search, callable $callback = null)
 */
class SolicitudesPendientesRespuestasTable extends Table
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

        $this->table('solicitudes_pendientes_respuestas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SolicitudInformacions', [
            'foreignKey' => 'solicitud_informacion_id',
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
            ->dateTime('fecha_modificacion')
            ->requirePresence('fecha_modificacion', 'create')
            ->notEmpty('fecha_modificacion');

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
        $rules->add($rules->existsIn(['usuario_id'], 'Users'));
        $rules->add($rules->existsIn(['estado_id'], 'Estados'));
        $rules->add($rules->existsIn(['solicitud_informacion_id'], 'SolicitudInformacions'));

        return $rules;
    }
}
