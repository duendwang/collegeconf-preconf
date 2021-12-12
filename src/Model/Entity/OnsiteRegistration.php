<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OnsiteRegistration Entity
 *
 * @property int $id
 * @property int $conference_attendee_id
 * @property \Cake\I18n\FrozenTime|null $registration
 * @property \Cake\I18n\FrozenTime|null $cashier
 * @property \Cake\I18n\FrozenTime|null $hospitality
 * @property \Cake\I18n\FrozenTime|null $badge
 * @property bool|null $need_cashier
 * @property bool|null $need_hospitality
 * @property bool|null $need_badge
 * @property bool|null $need_old
 * @property string|null $old_first
 * @property string|null $old_last
 * @property int|null $old_locality_id
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\ConferenceAttendee $conference_attendee
 * @property \App\Model\Entity\Locality $locality
 */
class OnsiteRegistration extends Entity
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
        'registration' => true,
        'cashier' => true,
        'hospitality' => true,
        'badge' => true,
        'need_cashier' => true,
        'need_hospitality' => true,
        'need_badge' => true,
        'need_old' => true,
        'old_first' => true,
        'old_last' => true,
        'old_locality_id' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference_attendee' => true,
        'locality' => true,
    ];
}
