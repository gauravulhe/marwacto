<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Community Entity
 *
 * @property int $id
 * @property string $community
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Gotra[] $gotras
 * @property \App\Model\Entity\MamaGotra[] $mama_gotras
 * @property \App\Model\Entity\User[] $users
 */
class Community extends Entity
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
}
