<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attendee Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $gender
 * @property int $locality_id
 * @property int|null $campus_id
 * @property bool $new_one
 * @property string|null $allergies
 * @property int|null $status_id
 * @property string|null $cell_phone
 * @property string|null $email
 * @property string|null $city_state
 * @property string|null $comment
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Locality $locality
 * @property \App\Model\Entity\Campus $campus
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\ConferenceAttendee[] $conference_attendees
 * @property \App\Model\Entity\User[] $users
 */
class Attendee extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'gender' => true,
        'locality_id' => true,
        'campus_id' => true,
        'new_one' => true,
        'allergies' => true,
        'status_id' => true,
        'cell_phone' => true,
        'email' => true,
        'city_state' => true,
        'comment' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'locality' => true,
        'campus' => true,
        'status' => true,
        'conference_attendees' => true,
        'users' => true,
    ];
}
