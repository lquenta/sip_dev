<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mecanismos Model
 *
 * @property \Cake\ORM\Association\HasMany $MecanismoRecomendacion
 *
 * @method \App\Model\Entity\Mecanismo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mecanismo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mecanismo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mecanismo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mecanismo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mecanismo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mecanismo findOrCreate($search, callable $callback = null)
 */
class MecanismosTable extends Table
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

        $this->table('mecanismos');
        $this->displayField('descripcion');
        $this->primaryKey('id');

        $this->hasMany('MecanismoRecomendacion', [
            'foreignKey' => 'mecanismo_id'
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
