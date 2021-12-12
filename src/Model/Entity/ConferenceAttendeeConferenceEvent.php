<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConferenceAttendeeConferenceEvent Entity
 *
 * @property int $id
 * @property int $conference_attendee_id
 * @property int $conference_event_id
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ConferenceAttendee $conference_attendee
 * @property \App\Model\Entity\ConferenceEvent $conference_event
 */
class ConferenceAttendeeConferenceEvent extends Entity
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
        'conference_attendee_id' => true,
        'conference_event_id' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference_attendee' => true,
        'conference_event' => true,
    ];
}
