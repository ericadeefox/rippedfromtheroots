<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photo Entity
 *
 * @property int $id
 * @property string $filename
 * @property string $caption
 *
 * @property \App\Model\Entity\Album[] $albums
 * @property \App\Model\Entity\Merch[] $merch
 * @property \App\Model\Entity\Show[] $shows
 */
class Photo extends Entity
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
        'filename' => true,
        'caption' => true,
        'albums' => true,
        'merch' => true,
        'shows' => true
    ];
}
