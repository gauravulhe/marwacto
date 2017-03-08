<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gotras Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Communities
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Gotra get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gotra newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gotra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gotra|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gotra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gotra[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gotra findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GotrasTable extends Table
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

        $this->table('gotras');
        $this->displayField('gotra');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Communities', [
            'foreignKey' => 'community_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'gotra_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'gotras_users'
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
            ->requirePresence('gotra', 'create')
            ->notEmpty('gotra');

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
        $rules->add($rules->existsIn(['community_id'], 'Communities'));

        return $rules;
    }
}
