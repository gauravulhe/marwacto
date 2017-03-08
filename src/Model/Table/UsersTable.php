<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\Utility\Text;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Children
 * @property \Cake\ORM\Association\BelongsTo $Heights
 * @property \Cake\ORM\Association\BelongsTo $Weights
 * @property \Cake\ORM\Association\BelongsTo $Communities
 * @property \Cake\ORM\Association\BelongsTo $Gotras
 * @property \Cake\ORM\Association\BelongsTo $MamaGotras
 * @property \Cake\ORM\Association\BelongsTo $Educations
 * @property \Cake\ORM\Association\BelongsTo $Professions
 * @property \Cake\ORM\Association\BelongsTo $Incomes
 * @property \Cake\ORM\Association\BelongsTo $Occupations
 * @property \Cake\ORM\Association\BelongsToMany $Cities
 * @property \Cake\ORM\Association\BelongsToMany $Communities
 * @property \Cake\ORM\Association\BelongsToMany $Countries
 * @property \Cake\ORM\Association\BelongsToMany $Educations
 * @property \Cake\ORM\Association\BelongsToMany $Gotras
 * @property \Cake\ORM\Association\BelongsToMany $Occupations
 * @property \Cake\ORM\Association\BelongsToMany $Professions
 * @property \Cake\ORM\Association\BelongsToMany $States
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('first_name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Children', [
            'foreignKey' => 'child_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Heights', [
            'foreignKey' => 'height_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Weights', [
            'foreignKey' => 'weight_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Communities', [
            'foreignKey' => 'community_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Gotras', [
            'foreignKey' => 'gotra_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MamaGotras', [
            'foreignKey' => 'mama_gotra_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Educations', [
            'foreignKey' => 'education_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Professions', [
            'foreignKey' => 'profession_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Incomes', [
            'foreignKey' => 'income_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Occupations', [
            'foreignKey' => 'occupation_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Likes', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Interests', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Cities', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'city_id',
            'joinTable' => 'cities_users'
        ]);
        $this->belongsToMany('Communities', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'community_id',
            'joinTable' => 'communities_users'
        ]);
        $this->belongsToMany('Countries', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'country_id',
            'joinTable' => 'countries_users'
        ]);
        $this->belongsToMany('Educations', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'education_id',
            'joinTable' => 'educations_users'
        ]);
        $this->belongsToMany('Gotras', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'gotra_id',
            'joinTable' => 'gotras_users'
        ]);
        $this->belongsToMany('Occupations', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'occupation_id',
            'joinTable' => 'occupations_users'
        ]);
        $this->belongsToMany('Professions', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'profession_id',
            'joinTable' => 'professions_users'
        ]);
        $this->belongsToMany('States', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'state_id',
            'joinTable' => 'states_users'
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
            ->uuid('uuid')
            ->allowEmpty('uuid')
            ->add('uuid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->requirePresence('mama_last_name', 'create')
            ->notEmpty('mama_last_name');

        $validator
            ->requirePresence('mobile_number', 'create')
            ->notEmpty('mobile_number');

        $validator
            ->requirePresence('middle_name', 'create')
            ->notEmpty('middle_name');

        $validator
            ->requirePresence('mother_name', 'create')
            ->notEmpty('mother_name');

        $validator
            ->requirePresence('date_of_birth', 'create')
            ->notEmpty('date_of_birth');

        $validator
            ->requirePresence('time_of_birth', 'create')
            ->notEmpty('time_of_birth');

        $validator
            ->requirePresence('rashi', 'create')
            ->notEmpty('rashi');

        // $validator
        //     ->requirePresence('age', 'create')
        //     ->notEmpty('age');

        $validator
            ->requirePresence('no_of_children', 'create')
            ->notEmpty('no_of_children');

        $validator
            ->requirePresence('place_of_birth', 'create')
            ->notEmpty('place_of_birth');

        $validator
            ->requirePresence('hobbies', 'create')
            ->notEmpty('hobbies');

        $validator
            ->requirePresence('mother_tongue', 'create')
            ->notEmpty('mother_tongue');

        $validator
            ->requirePresence('blood_group', 'create')
            ->notEmpty('blood_group');

        $validator
            ->requirePresence('marital_status', 'create')
            ->notEmpty('marital_status');

        $validator
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->requirePresence('manglik', 'create')
            ->notEmpty('manglik');

        $validator
            ->requirePresence('education_details', 'create')
            ->notEmpty('education_details');

        $validator
            ->requirePresence('profession_details', 'create')
            ->notEmpty('profession_details');

        $validator
            ->requirePresence('company', 'create')
            ->notEmpty('company');

        $validator
            ->requirePresence('designation', 'create')
            ->notEmpty('designation');

        $validator
            ->requirePresence('occupation_place', 'create')
            ->notEmpty('occupation_place');

        $validator
            ->requirePresence('occupation_country', 'create')
            ->notEmpty('occupation_country');

        $validator
            ->requirePresence('occupation_state', 'create')
            ->notEmpty('occupation_state');

        $validator
            ->requirePresence('occupation_city', 'create')
            ->notEmpty('occupation_city');

        $validator
            ->requirePresence('correspondence_address', 'create')
            ->notEmpty('correspondence_address');

        $validator
            ->requirePresence('correspondence_city', 'create')
            ->notEmpty('correspondence_city');

        $validator
            ->requirePresence('correspondence_state', 'create')
            ->notEmpty('correspondence_state');

        $validator
            ->requirePresence('correspondence_postal_code', 'create')
            ->notEmpty('correspondence_postal_code');

        $validator
            ->requirePresence('correspondence_country', 'create')
            ->notEmpty('correspondence_country');

        $validator
            ->requirePresence('permanent_address', 'create')
            ->notEmpty('permanent_address');

        $validator
            ->requirePresence('permanent_city', 'create')
            ->notEmpty('permanent_city');

        $validator
            ->requirePresence('permanent_state', 'create')
            ->notEmpty('permanent_state');

        $validator
            ->requirePresence('permanent_postal_code', 'create')
            ->notEmpty('permanent_postal_code');

        $validator
            ->requirePresence('permanent_country', 'create')
            ->notEmpty('permanent_country');

        $validator
            ->requirePresence('partner_min_age', 'create')
            ->notEmpty('partner_min_age');

        $validator
            ->requirePresence('partner_max_age', 'create')
            ->notEmpty('partner_max_age');

        $validator
            ->requirePresence('partner_min_height', 'create')
            ->notEmpty('partner_min_height');

        $validator
            ->requirePresence('partner_max_height', 'create')
            ->notEmpty('partner_max_height');

        // $validator
        //     ->requirePresence('partner_education', 'create')
        //     ->notEmpty('partner_education');

        // $validator
        //     ->requirePresence('partner_profession', 'create')
        //     ->notEmpty('partner_profession');

        // $validator
        //     ->requirePresence('partner_occupations', 'create')
        //     ->notEmpty('partner_occupations');

        // $validator
        //     ->requirePresence('partner_gender', 'create')
        //     ->notEmpty('partner_gender');

        // $validator
        //     ->requirePresence('partner_community', 'create')
        //     ->notEmpty('partner_community');

        // $validator
        //     ->requirePresence('partner_country', 'create')
        //     ->notEmpty('partner_country');

        // $validator
        //     ->requirePresence('partner_state', 'create')
        //     ->notEmpty('partner_state');

        // $validator
        //     ->requirePresence('partner_city', 'create')
        //     ->notEmpty('partner_city');

        // $validator
        //     ->requirePresence('photo1', 'create')
        //     ->notEmpty('photo1');

        // $validator
        //     ->allowEmpty('photo1_dir');

        // $validator
        //     ->requirePresence('photo2', 'create')
        //     ->notEmpty('photo2');

        // $validator
        //     ->allowEmpty('photo2_dir');

        // $validator
        //     ->requirePresence('photo3', 'create')
        //     ->notEmpty('photo3');

        // $validator
        //     ->requirePresence('photo4', 'create')
        //     ->notEmpty('photo4');

        $validator
            ->requirePresence('family_details', 'create')
            ->notEmpty('family_details');

        // $validator
        //     ->integer('agree')
        //     ->requirePresence('agree', 'create')
        //     ->notEmpty('agree');

        $validator
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        // $validator
        //     ->integer('profile_status')
        //     ->requirePresence('profile_status', 'create')
        //     ->notEmpty('profile_status');

        // $validator
        //     ->integer('payment_status')
        //     ->requirePresence('payment_status', 'create')
        //     ->notEmpty('payment_status');

        // $validator
        //     ->date('payment_date')
        //     ->requirePresence('payment_date', 'create')
        //     ->notEmpty('payment_date');

        // $validator
        //     ->date('expiry_date')
        //     ->requirePresence('expiry_date', 'create')
        //     ->notEmpty('expiry_date');

        // $validator
        //     ->integer('user_type')
        //     ->requirePresence('user_type', 'create')
        //     ->notEmpty('user_type');

        return $validator;
    }

    /**
     * beforeSave callback
     * @param  event $event  event object
     * @param  entity $entity entity object
     * @param  array $options array object
     * @return void
     */
    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew()) {
            $entity->uuid = $this->getUuid();
        }
    }

    /**
     * getUuid
     * this method is used to get the uuid
     * @return string $uuid
     */
    public function getUuid()
    {
        $uuid = Text::uuid();

        if ($this->isUniqueUuid($uuid)) {
            return $uuid;
        }

        $this->getUuid();
    }

    /**
     * isUniqueUuid
     * this method is used to validate for unique uuid
     * @param  string  $uuid uuid
     * @return bool result
     */
    public function isUniqueUuid($uuid)
    {
        $count = $this->find()->where(['uuid' => $uuid])->select('id')->count();

        return empty($count) ? true : false;
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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['uuid']));
        $rules->add($rules->existsIn(['child_id'], 'Children'));
        $rules->add($rules->existsIn(['height_id'], 'Heights'));
        $rules->add($rules->existsIn(['weight_id'], 'Weights'));
        $rules->add($rules->existsIn(['community_id'], 'Communities'));
        $rules->add($rules->existsIn(['gotra_id'], 'Gotras'));
        $rules->add($rules->existsIn(['mama_gotra_id'], 'MamaGotras'));
        $rules->add($rules->existsIn(['education_id'], 'Educations'));
        $rules->add($rules->existsIn(['profession_id'], 'Professions'));
        $rules->add($rules->existsIn(['income_id'], 'Incomes'));
        $rules->add($rules->existsIn(['occupation_id'], 'Occupations'));

        return $rules;
    }
}
