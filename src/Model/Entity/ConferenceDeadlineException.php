<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConferenceDeadlineException Entity
 *
 * @property int $id
 * @property int $conference_id
 * @property int $conference_deadline_id
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\Time|null $time
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Conference $conference
 * @property \App\Model\Entity\ConferenceDeadline $conference_deadline
 */
class ConferenceDeadlineException extends Entity
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
        'conference_deadline_id' => true,
        'date' => true,
        'time' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference' => true,
        'conference_deadline' => true,
    ];
}
