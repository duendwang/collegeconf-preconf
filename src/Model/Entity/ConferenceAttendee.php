<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConferenceAttendee Entity
 *
 * @property int $id
 * @property int $conference_id
 * @property int $attendee_id
 * @property int|null $barcode_id
 * @property bool $conf_contact
 * @property string|null $lodging_group
 * @property int|null $lodging_id
 * @property string|null $submitter
 * @property string|null $rate
 * @property string|null $amd_paid
 * @property string|null $check_num
 * @property \Cake\I18n\FrozenDate|null $paid_date
 * @property bool $part_time
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Conference $conference
 * @property \App\Model\Entity\Attendee $attendee
 * @property \App\Model\Entity\Barcode $barcode
 * @property \App\Model\Entity\Lodging $lodging
 * @property \App\Model\Entity\Cancel[] $cancels
 * @property \App\Model\Entity\CheckIn[] $check_ins
 * @property \App\Model\Entity\ConferenceAttendeeConferenceEvent[] $conference_attendee_conference_events
 * @property \App\Model\Entity\OnsiteRegistration[] $onsite_registrations
 * @property \App\Model\Entity\Payment[] $payments
 */
class ConferenceAttendee extends Entity
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
        'attendee_id' => true,
        'barcode_id' => true,
        'conf_contact' => true,
        'lodging_group' => true,
        'lodging_id' => true,
        'submitter' => true,
        'rate' => true,
        'amd_paid' => true,
        'check_num' => true,
        'paid_date' => true,
        'part_time' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference' => true,
        'attendee' => true,
        'barcode' => true,
        'lodging' => true,
        'cancels' => true,
        'check_ins' => true,
        'conference_attendee_conference_events' => true,
        'onsite_registrations' => true,
        'payments' => true,
    ];
}
