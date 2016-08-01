<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Poblacions Model
 *
 * @property \Cake\ORM\Association\HasMany $PoblacionRecomendacion
 *
 * @method \App\Model\Entity\Poblacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Poblacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Poblacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Poblacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Poblacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Poblacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Poblacion findOrCreate($search, callable $callback = null)
 */
class PoblacionsTable extends Table
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

        $this->table('poblacions');
        $this->displayField('descripcion');
        $this->primaryKey('id');

        $this->hasMany('PoblacionRecomendacion', [
            'foreignKey' => 'poblacion_id'
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

        return $validator;
    }
}
