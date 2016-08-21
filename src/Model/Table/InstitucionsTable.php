<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Institucions Model
 *
 * @property \Cake\ORM\Association\HasMany $InstitucionRecomendacion
 * @property \Cake\ORM\Association\HasMany $Rols
 *
 * @method \App\Model\Entity\Institucion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Institucion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Institucion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Institucion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Institucion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Institucion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Institucion findOrCreate($search, callable $callback = null)
 */
class InstitucionsTable extends Table
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

        $this->table('institucions');
        $this->displayField('descripcion');
        $this->primaryKey('id');

        $this->hasMany('InstitucionRecomendacion', [
            'foreignKey' => 'institucion_id'
        ]);
        $this->hasMany('Rols', [
            'foreignKey' => 'institucion_id'
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

    public function obtenerGrupos(){
        $sql=$this->query('SELECT distinct grupo FROM institucions');
        $result = $this->connection()->execute($sql)->fetchAll('assoc');
        debug($result);
        return $result;
    }
}
