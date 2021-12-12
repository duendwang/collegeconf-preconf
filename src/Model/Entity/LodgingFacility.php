<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LodgingFacility Entity
 *
 * @property int $id
 * @property int $conference_location_id
 * @property string $code
 * @property string|null $location
 * @property string|null $room
 * @property string|null $accomodations
 * @property int|null $capacity
 * @property string|null $address
 * @property string|null $city
 * @property string|null $zip
 * @property string|null $phone
 * @property string|null $comments
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\ConferenceLocation $conference_location
 */
class LodgingFacility extends Entity
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
        'conference_location_id' => true,
        'code' => true,
        'location' => true,
        'room' => true,
        'accomodations' => true,
        'capacity' => true,
        'address' => true,
        'city' => true,
        'zip' => true,
        'phone' => true,
        'comments' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference_location' => true,
    ];
}
