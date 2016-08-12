<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccionSolicitud Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Accions
 * @property \Cake\ORM\Association\BelongsTo $Institucions
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\AccionSolicitud get($primaryKey, $options = [])
 * @method \App\Model\Entity\AccionSolicitud newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AccionSolicitud[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccionSolicitud|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccionSolicitud patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AccionSolicitud[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccionSolicitud findOrCreate($search, callable $callback = null)
 */
class AccionSolicitudTable extends Table
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

        $this->table('accion_solicitud');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Accions', [
            'foreignKey' => 'accion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Institucions', [
            'foreignKey' => 'institucion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

       

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
        $rules->add($rules->existsIn(['accion_id'], 'Accions'));
        $rules->add($rules->existsIn(['institucion_id'], 'Institucions'));
        $rules->add($rules->existsIn(['estado_id'], 'Estados'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
