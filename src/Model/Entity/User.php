<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $uuid
 * @property string $username
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $mama_last_name
 * @property string $mobile_number
 * @property string $middle_name
 * @property string $mother_name
 * @property string $date_of_birth
 * @property string $time_of_birth
 * @property string $rashi
 * @property string $age
 * @property string $child_id
 * @property string $no_of_children
 * @property string $place_of_birth
 * @property string $hobbies
 * @property string $mother_tongue
 * @property string $height_id
 * @property string $weight_id
 * @property string $blood_group
 * @property string $marital_status
 * @property string $gender
 * @property string $manglik
 * @property string $community_id
 * @property string $gotra_id
 * @property string $mama_gotra_id
 * @property string $education_id
 * @property string $education_details
 * @property string $profession_id
 * @property string $profession_details
 * @property string $income_id
 * @property string $occupation_id
 * @property string $company
 * @property string $designation
 * @property string $occupation_place
 * @property string $occupation_country
 * @property string $occupation_state
 * @property string $occupation_city
 * @property string $correspondence_address
 * @property string $correspondence_city
 * @property string $correspondence_state
 * @property string $correspondence_postal_code
 * @property string $correspondence_country
 * @property string $permanent_address
 * @property string $permanent_city
 * @property string $permanent_state
 * @property string $permanent_postal_code
 * @property string $permanent_country
 * @property string $partner_min_age
 * @property string $partner_max_age
 * @property string $partner_min_height
 * @property string $partner_max_height
 * @property string $partner_education
 * @property string $partner_profession
 * @property string $partner_occupations
 * @property string $partner_gender
 * @property string $partner_community
 * @property string $partner_country
 * @property string $partner_state
 * @property string $partner_city
 * @property string $photo1
 * @property string $photo1_dir
 * @property string $photo2
 * @property string $photo2_dir
 * @property string $photo3
 * @property string $photo4
 * @property string $family_details
 * @property int $agree
 * @property string $created_by
 * @property int $profile_status
 * @property int $payment_status
 * @property \Cake\I18n\Time $payment_date
 * @property \Cake\I18n\Time $expiry_date
 * @property int $user_type
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Child $child
 * @property \App\Model\Entity\Height $height
 * @property \App\Model\Entity\Weight $weight
 * @property \App\Model\Entity\Community[] $communities
 * @property \App\Model\Entity\Gotra[] $gotras
 * @property \App\Model\Entity\MamaGotra $mama_gotra
 * @property \App\Model\Entity\Education[] $educations
 * @property \App\Model\Entity\Occupation[] $occupations
 * @property \App\Model\Entity\Profession[] $professions
 * @property \App\Model\Entity\Income $income
 * @property \App\Model\Entity\City[] $cities
 * @property \App\Model\Entity\Country[] $countries
 * @property \App\Model\Entity\State[] $states
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }

}
