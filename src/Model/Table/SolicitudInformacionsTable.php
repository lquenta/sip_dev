<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SolicitudInformacions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\HasMany $InstitucionSolicitudes
 * @property \Cake\ORM\Association\HasMany $SolicitudRespuestas
 *
 * @method \App\Model\Entity\SolicitudInformacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\SolicitudInformacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SolicitudInformacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudInformacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SolicitudInformacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudInformacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudInformacion findOrCreate($search, callable $callback = null)
 */
class SolicitudInformacionsTable extends Table
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

        $this->table('solicitud_informacions');
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
        $this->hasMany('InstitucionSolicitudes', [
            'foreignKey' => 'solicitud_informacion_id'
        ]);
        $this->hasMany('SolicitudRespuestas', [
            'foreignKey' => 'solicitud_informacion_id'
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
            ->requirePresence('codigo', 'create')
            ->notEmpty('codigo');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

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

        return $rules;
    }
     public function obtenerUltimoCodigoSolicitud(){
        $sql=$this->query('SELECT codigo FROM solicitud_informacions ORDER BY id DESC;');
        $result = $this->connection()->execute($sql)->fetchAll('assoc');
        if($result!=null){
            $result = $result[0]['SolicitudInformacions__id'];    
            $result = $result + 1;
        }else{  
            $result = '1';
        }
        $codigo_numerico=str_pad($result,5,'0',STR_PAD_LEFT);
        $result = 'SPSOL'.$codigo_numerico;
        return $result;
    }
}
