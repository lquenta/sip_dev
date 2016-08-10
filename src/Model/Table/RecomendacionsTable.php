<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recomendacions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\HasMany $Accions
 * @property \Cake\ORM\Association\HasMany $AdjuntosRecomendacions
 * @property \Cake\ORM\Association\HasMany $DerechoRecomendacion
 * @property \Cake\ORM\Association\HasMany $InstitucionRecomendacion
 * @property \Cake\ORM\Association\HasMany $MecanismoRecomendacion
 * @property \Cake\ORM\Association\HasMany $Notificacions
 * @property \Cake\ORM\Association\HasMany $PoblacionRecomendacion
 * @property \Cake\ORM\Association\HasMany $RecomendacionParametros
 * @property \Cake\ORM\Association\HasMany $Revisions
 * @property \Cake\ORM\Association\HasMany $Versions
 *
 * @method \App\Model\Entity\Recomendacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recomendacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recomendacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recomendacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recomendacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recomendacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recomendacion findOrCreate($search, callable $callback = null)
 */
class RecomendacionsTable extends Table
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

        $this->table('recomendacions');
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
        $this->hasMany('Accions', [
            'foreignKey' => 'recomendacion_id'
        ]);
        $this->hasMany('AdjuntosRecomendacions', [
            'foreignKey' => 'recomendacion_id'
        ]);
        $this->hasMany('DerechoRecomendacion', [
            'foreignKey' => 'recomendacion_id'
        ]);
        $this->hasMany('InstitucionRecomendacion', [
            'foreignKey' => 'recomendacion_id'
        ]);
        $this->hasMany('MecanismoRecomendacion', [
            'foreignKey' => 'recomendacion_id'
        ]);
        $this->hasMany('Notificacions', [
            'foreignKey' => 'recomendacion_id'
        ]);
        $this->hasMany('PoblacionRecomendacion', [
            'foreignKey' => 'recomendacion_id'
        ]);
        $this->hasMany('RecomendacionParametros', [
            'foreignKey' => 'recomendacion_id'
        ]);
        $this->hasMany('Revisions', [
            'foreignKey' => 'recomendacion_id'
        ]);
        $this->hasMany('Versions', [
            'foreignKey' => 'recomendacion_id'
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

        $validator
            ->dateTime('fecha_creacion')
            ->requirePresence('fecha_creacion', 'create')
            ->notEmpty('fecha_creacion');

        $validator
            ->dateTime('fecha_modificacion')
            ->requirePresence('fecha_modificacion', 'create')
            ->notEmpty('fecha_modificacion');

        $validator
            ->integer('año')
            ->requirePresence('año', 'create')
            ->notEmpty('año');

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
    public function obtenerUltimoCodigoRecomendacion(){
        $sql=$this->query('SELECT id FROM recomendacions ORDER BY id DESC LIMIT 1');
        $result = $this->connection()->execute($sql)->fetchAll('assoc');
        //debug(count($result));die;
        $ultimo_indice=$result[count($result)-1]['Recomendacions__id'];
        
        if($result!=null){
            $result = $ultimo_indice;    
            $result = $result + 1;
        }else{  
            $result = '1';
        }

        
        $codigo_numerico=str_pad($result,5,'0',STR_PAD_LEFT);
        $result = 'SPREC'.$codigo_numerico;
        return $result;
    }

}
