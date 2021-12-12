<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date
 * @property int $conference_id
 * @property int|null $conference_attendee_id
 * @property int $locality_id
 * @property string|null $cash
 * @property int|null $check_number
 * @property string|null $check
 * @property string|null $credit_card
 * @property string|null $comment
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Conference $conference
 * @property \App\Model\Entity\ConferenceAttendee $conference_attendee
 * @property \App\Model\Entity\Locality $locality
 */
class Payment extends Entity
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
        'date' => true,
        'conference_id' => true,
        'conference_attendee_id' => true,
        'locality_id' => true,
        'cash' => true,
        'check_number' => true,
        'check' => true,
        'credit_card' => true,
        'comment' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference' => true,
        'conference_attendee' => true,
        'locality' => true,
    ];
}
