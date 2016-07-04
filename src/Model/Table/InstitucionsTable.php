<?php
namespace App\Model\Table;

use App\Model\Entity\Institucion;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Institucions Model
 *
 * @property \Cake\ORM\Association\HasMany $InstitucionRecomendacion
 * @property \Cake\ORM\Association\HasMany $Rols
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
}
