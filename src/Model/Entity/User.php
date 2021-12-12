<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int|null $attendee_id
 * @property string|null $cell_phone
 * @property string|null $email
 * @property int|null $locality_id
 * @property bool $active
 * @property \Cake\I18n\FrozenTime|null $last_login
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Attendee $attendee
 * @property \App\Model\Entity\Locality $locality
 * @property \App\Model\Entity\ConferenceLocality[] $conference_localities
 * @property \App\Model\Entity\RegistrationTeamUser[] $registration_team_users
 * @property \App\Model\Entity\UserAccountType[] $user_account_types
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'attendee_id' => true,
        'cell_phone' => true,
        'email' => true,
        'locality_id' => true,
        'active' => true,
        'last_login' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'attendee' => true,
        'locality' => true,
        'conference_localities' => true,
        'registration_team_users' => true,
        'user_account_types' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
