<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegistrationTeamConferenceLocality Entity
 *
 * @property int $id
 * @property int $registration_team_id
 * @property int $conference_locality_id
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\RegistrationTeam $registration_team
 * @property \App\Model\Entity\ConferenceLocality $conference_locality
 */
class RegistrationTeamConferenceLocality extends Entity
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
        'registration_team_id' => true,
        'conference_locality_id' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'registration_team' => true,
        'conference_locality' => true,
    ];
}
