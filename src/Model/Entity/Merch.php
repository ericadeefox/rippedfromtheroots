<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Merch Entity
 *
 * @property int $id
 * @property string $type
 * @property string $description
 * @property int $photo_id
 *
 * @property \App\Model\Entity\Photo $photo
 */
class Merch extends Entity
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
        'type' => true,
        'description' => true,
        'photo_id' => true,
        'photo' => true
    ];
}
