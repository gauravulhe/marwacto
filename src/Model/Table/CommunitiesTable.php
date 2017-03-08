<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Communities Model
 *
 * @property \Cake\ORM\Association\HasMany $Gotras
 * @property \Cake\ORM\Association\HasMany $MamaGotras
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Community get($primaryKey, $options = [])
 * @method \App\Model\Entity\Community newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Community[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Community|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Community patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Community[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Community findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CommunitiesTable extends Table
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

        $this->table('communities');
        $this->displayField('community');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Gotras', [
            'foreignKey' => 'community_id'
        ]);
        $this->hasMany('MamaGotras', [
            'foreignKey' => 'community_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'community_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'communities_users'
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
            ->requirePresence('community', 'create')
            ->notEmpty('community');

        return $validator;
    }
}
