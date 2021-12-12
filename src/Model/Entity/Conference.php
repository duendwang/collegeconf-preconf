<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conference Entity
 *
 * @property int $id
 * @property string $term
 * @property string $year
 * @property string $part
 * @property int|null $conference_location_id
 * @property \Cake\I18n\FrozenDate|null $start_date
 * @property string $code
 * @property int|null $last_barcode_id
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\ConferenceLocation $conference_location
 * @property \App\Model\Entity\LastBarcode $last_barcode
 * @property \App\Model\Entity\ConferenceAttendee[] $conference_attendees
 * @property \App\Model\Entity\ConferenceDeadlineException[] $conference_deadline_exceptions
 * @property \App\Model\Entity\ConferenceEvent[] $conference_events
 * @property \App\Model\Entity\ConferenceLocality[] $conference_localities
 * @property \App\Model\Entity\EmailException[] $email_exceptions
 * @property \App\Model\Entity\Finance[] $finances
 * @property \App\Model\Entity\Lodging[] $lodgings
 * @property \App\Model\Entity\Payment[] $payments
 * @property \App\Model\Entity\PotentialAttendee[] $potential_attendees
 */
class Conference extends Entity
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
        'term' => true,
        'year' => true,
        'part' => true,
        'conference_location_id' => true,
        'start_date' => true,
        'code' => true,
        'last_barcode_id' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference_location' => true,
        'last_barcode' => true,
        'conference_attendees' => true,
        'conference_deadline_exceptions' => true,
        'conference_events' => true,
        'conference_localities' => true,
        'email_exceptions' => true,
        'finances' => true,
        'lodgings' => true,
        'payments' => true,
        'potential_attendees' => true,
    ];
}
