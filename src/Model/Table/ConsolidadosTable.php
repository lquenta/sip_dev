<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;

/**
 * Consolidados Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Accions
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $AdjuntosConsolidados
 *
 * @method \App\Model\Entity\Consolidado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Consolidado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Consolidado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Consolidado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consolidado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Consolidado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Consolidado findOrCreate($search, callable $callback = null)
 */
class ConsolidadosTable extends Table
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

        $this->table('consolidados');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Accions', [
            'foreignKey' => 'accion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AdjuntosConsolidados', [
            'foreignKey' => 'consolidado_id'
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
            ->requirePresence('texto_consolidado', 'create')
            ->notEmpty('texto_consolidado');

        $validator
            ->dateTime('fecha_consolidado')
            ->requirePresence('fecha_consolidado', 'create')
            ->notEmpty('fecha_consolidado');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }

    public function getIndicadoresConsolidados($id_consolidado)
    {
        $strquery = 'select 
                        ind.*, 1 as checked
                    from
                        consolidado_indicadores ci
                            inner join
                        indicadors  ind ON ind.id = ci.indicador_id
                    where
                        ci.consolidado_id = '.$id_consolidado.'
                    union 
                    select 
                        ind.*, 0 as checked
                    from
                        indicadors ind
                    where
                        id not in (select 
                                indicador_id
                            from
                                consolidado_indicadores
                            where
                                consolidado_id = '.$id_consolidado.')
                    limit 5; '; 
        $connAux = ConnectionManager::get('default');
        $stmt = $connAux->execute($strquery);
        $results = $stmt ->fetchAll('assoc');
        
        return $results;      
    }
}
