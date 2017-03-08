<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Occupations Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Occupation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Occupation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Occupation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Occupation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Occupation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Occupation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Occupation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OccupationsTable extends Table
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

        $this->table('occupations');
        $this->displayField('occupation');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Users', [
            'foreignKey' => 'occupation_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'occupations_users'
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
            ->requirePresence('occupation', 'create')
            ->notEmpty('occupation');

        return $validator;
    }
}
