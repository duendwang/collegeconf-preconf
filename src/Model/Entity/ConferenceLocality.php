<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConferenceLocality Entity
 *
 * @property int $id
 * @property int $conference_id
 * @property int $locality_id
 * @property int|null $user_id
 * @property bool $registering
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Conference $conference
 * @property \App\Model\Entity\Locality $locality
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\ConferenceLocalityRegistrationStep[] $conference_locality_registration_steps
 * @property \App\Model\Entity\RegistrationTeamConferenceLocality[] $registration_team_conference_localities
 */
class ConferenceLocality extends Entity
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
        'locality_id' => true,
        'user_id' => true,
        'registering' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference' => true,
        'locality' => true,
        'user' => true,
        'conference_locality_registration_steps' => true,
        'registration_team_conference_localities' => true,
    ];
}
