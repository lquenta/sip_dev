<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Indicadors Model
 *
 * @property \Cake\ORM\Association\HasMany $Derechos
 * @property \Cake\ORM\Association\HasMany $IndicadoresDerechos
 *
 * @method \App\Model\Entity\Indicador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Indicador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Indicador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Indicador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indicador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Indicador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Indicador findOrCreate($search, callable $callback = null)
 */
class IndicadorsTable extends Table
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

        $this->table('indicadors');
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->hasMany('Derechos', [
            'foreignKey' => 'indicador_id'
        ]);
        $this->hasMany('IndicadoresDerechos', [
            'foreignKey' => 'indicador_id'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        return $validator;
    }
}
