<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Educations Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Education get($primaryKey, $options = [])
 * @method \App\Model\Entity\Education newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Education[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Education|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Education patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Education[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Education findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EducationsTable extends Table
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

        $this->table('educations');
        $this->displayField('education');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Users', [
            'foreignKey' => 'education_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'educations_users'
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
            ->requirePresence('education', 'create')
            ->notEmpty('education');

        return $validator;
    }
}
