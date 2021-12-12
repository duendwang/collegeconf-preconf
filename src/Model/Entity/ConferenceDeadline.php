<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConferenceDeadline Entity
 *
 * @property int $id
 * @property string $name
 * @property int $weeks_before
 * @property int $weekday
 * @property \Cake\I18n\Time|null $time
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\ConferenceDeadlineAccountType[] $conference_deadline_account_types
 * @property \App\Model\Entity\ConferenceDeadlineException[] $conference_deadline_exceptions
 */
class ConferenceDeadline extends Entity
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
        'weeks_before' => true,
        'weekday' => true,
        'time' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference_deadline_account_types' => true,
        'conference_deadline_exceptions' => true,
    ];
}
