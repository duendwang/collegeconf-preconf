<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lodging Entity
 *
 * @property int $id
 * @property int $conference_id
 * @property int|null $locality_id
 * @property string|null $code
 * @property string|null $name
 * @property string|null $address
 * @property string|null $city
 * @property string|null $zip
 * @property string|null $home_phone
 * @property string|null $cell_phone
 * @property string|null $pet
 * @property string|null $gender
 * @property int|null $capacity
 * @property int $attendee_count
 * @property string|null $room
 * @property string|null $comment
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Conference $conference
 * @property \App\Model\Entity\Locality $locality
 * @property \App\Model\Entity\ConferenceAttendee[] $conference_attendees
 */
class Lodging extends Entity
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
        'conference_id' => true,
        'locality_id' => true,
        'code' => true,
        'name' => true,
        'address' => true,
        'city' => true,
        'zip' => true,
        'home_phone' => true,
        'cell_phone' => true,
        'pet' => true,
        'gender' => true,
        'capacity' => true,
        'attendee_count' => true,
        'room' => true,
        'comment' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference' => true,
        'locality' => true,
        'conference_attendees' => true,
    ];
}
