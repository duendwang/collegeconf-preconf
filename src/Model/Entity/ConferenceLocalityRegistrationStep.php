<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConferenceLocalityRegistrationStep Entity
 *
 * @property int $id
 * @property int $conference_locality_id
 * @property int $registration_step_id
 * @property bool $completed
 * @property string|null $notes
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ConferenceLocality $conference_locality
 * @property \App\Model\Entity\RegistrationStep $registration_step
 */
class ConferenceLocalityRegistrationStep extends Entity
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
        'conference_locality_id' => true,
        'registration_step_id' => true,
        'completed' => true,
        'notes' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference_locality' => true,
        'registration_step' => true,
    ];
}
