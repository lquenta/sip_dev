<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InstitucionSolicitudes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Institucions
 * @property \Cake\ORM\Association\BelongsTo $SolicitudInformacions
 *
 * @method \App\Model\Entity\InstitucionSolicitude get($primaryKey, $options = [])
 * @method \App\Model\Entity\InstitucionSolicitude newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InstitucionSolicitude[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InstitucionSolicitude|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InstitucionSolicitude patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InstitucionSolicitude[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InstitucionSolicitude findOrCreate($search, callable $callback = null)
 */
class InstitucionSolicitudesTable extends Table
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

        $this->table('institucion_solicitudes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Institucions', [
            'foreignKey' => 'institucion_id',
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
        $rules->add($rules->existsIn(['institucion_id'], 'Institucions'));
        $rules->add($rules->existsIn(['solicitud_informacion_id'], 'SolicitudInformacions'));

        return $rules;
    }
}
