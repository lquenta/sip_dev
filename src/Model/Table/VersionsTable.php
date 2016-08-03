<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Versions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Recomendacions
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $AdjuntosVersions
 *
 * @method \App\Model\Entity\Version get($primaryKey, $options = [])
 * @method \App\Model\Entity\Version newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Version[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Version|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Version patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Version[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Version findOrCreate($search, callable $callback = null)
 */
class VersionsTable extends Table
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

        $this->table('versions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Recomendacions', [
            'foreignKey' => 'recomendacion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AdjuntosVersions', [
            'foreignKey' => 'version_id'
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
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

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
        $rules->add($rules->existsIn(['recomendacion_id'], 'Recomendacions'));
        $rules->add($rules->existsIn(['usuario_id'], 'Users'));
        return $rules;
    }
}
