<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Recomendacions
 * @property \Cake\ORM\Association\HasMany $AdjuntosAccions
 * @property \Cake\ORM\Association\HasMany $Autorizacions
 *
 * @method \App\Model\Entity\Accion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Accion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Accion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Accion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Accion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Accion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Accion findOrCreate($search, callable $callback = null)
 */
class AccionsTable extends Table
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

        $this->table('accions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Recomendacions', [
            'foreignKey' => 'recomendacion_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AdjuntosAccions', [
            'foreignKey' => 'accion_id'
        ]);
        $this->hasMany('Autorizacions', [
            'foreignKey' => 'accion_id'
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
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->requirePresence('listado', 'create')
            ->notEmpty('listado');

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
        $rules->add($rules->existsIn(['recomendacion_id'], 'Recomendacions'));
        return $rules;
    }
     public function obtenerUltimoCodigoAccion($id_segumiento){
        $sql=$this->query('SELECT codigo FROM accions ORDER BY id DESC;');
        $result = $this->connection()->execute($sql)->fetchAll('assoc');
        $ultimo_indice=$result[count($result)-1]['Accions__id'];
        if($result!=null){
            $result = $ultimo_indice;    
            $result = $result + 1;
        }else{  
            $result = '1';
        }
        $codigo_numerico=str_pad($id_segumiento,5,'0',STR_PAD_LEFT);
        $codigo_parcial = 'SPSEG'.$codigo_numerico;
        $codigo_numerico=str_pad($result,3,'0',STR_PAD_LEFT);
        $result = $codigo_parcial.'-'.$codigo_numerico;
        return $result;
    }
}
