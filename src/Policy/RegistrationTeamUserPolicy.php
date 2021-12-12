<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\RegistrationTeamUser;
use Authorization\IdentityInterface;

/**
 * RegistrationTeamUser policy
 */
class RegistrationTeamUserPolicy
{
    /**
     * Check if $user can add RegistrationTeamUser
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeamUser $registrationTeamUser
     * @return bool
     */
    public function canAdd(IdentityInterface $user, RegistrationTeamUser $registrationTeamUser)
    {
    }

    /**
     * Check if $user can edit RegistrationTeamUser
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeamUser $registrationTeamUser
     * @return bool
     */
    public function canEdit(IdentityInterface $user, RegistrationTeamUser $registrationTeamUser)
    {
    }

    /**
     * Check if $user can delete RegistrationTeamUser
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeamUser $registrationTeamUser
     * @return bool
     */
    public function canDelete(IdentityInterface $user, RegistrationTeamUser $registrationTeamUser)
    {
    }

    /**
     * Check if $user can view RegistrationTeamUser
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeamUser $registrationTeamUser
     * @return bool
     */
    public function canView(IdentityInterface $user, RegistrationTeamUser $registrationTeamUser)
    {
    }
}
