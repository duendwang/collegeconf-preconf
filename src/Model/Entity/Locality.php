<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Locality Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $preferred_conference
 * @property string|null $comment
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Attendee[] $attendees
 * @property \App\Model\Entity\ConferenceLocality[] $conference_localities
 * @property \App\Model\Entity\Finance[] $finances
 * @property \App\Model\Entity\Lodging[] $lodgings
 * @property \App\Model\Entity\Lrc[] $lrcs
 * @property \App\Model\Entity\Payment[] $payments
 * @property \App\Model\Entity\PotentialAttendee[] $potential_attendees
 * @property \App\Model\Entity\User[] $users
 */
class Locality extends Entity
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
        'name' => true,
        'preferred_conference' => true,
        'comment' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'attendees' => true,
        'conference_localities' => true,
        'finances' => true,
        'lodgings' => true,
        'lrcs' => true,
        'payments' => true,
        'potential_attendees' => true,
        'users' => true,
    ];
}
