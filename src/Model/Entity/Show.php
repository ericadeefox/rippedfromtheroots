<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Show Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date
 * @property string $venue
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $other_bands
 * @property string $description
 * @property int $photo_id
 *
 * @property \App\Model\Entity\Photo $photo
 */
class Show extends Entity
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
        'date' => true,
        'venue' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'other_bands' => true,
        'description' => true,
        'photo_id' => true,
        'photo' => true
    ];
}
