<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConferenceAttendeeFinance Entity
 *
 * @property int $id
 * @property int $finance_id
 * @property int|null $add_conference_attendee_id
 * @property int|null $cancel_conference_attendee_id
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Finance $finance
 * @property \App\Model\Entity\ConferenceAttendee $conference_attendee
 */
class ConferenceAttendeeFinance extends Entity
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
        'finance_id' => true,
        'add_conference_attendee_id' => true,
        'cancel_conference_attendee_id' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'finance' => true,
        'conference_attendee' => true,
    ];
}
