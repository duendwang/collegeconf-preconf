<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\RegistrationTeam;
use Authorization\IdentityInterface;

/**
 * RegistrationTeam policy
 */
class RegistrationTeamPolicy
{
    /**
     * Check if $user can add RegistrationTeam
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeam $registrationTeam
     * @return bool
     */
    public function canAdd(IdentityInterface $user, RegistrationTeam $registrationTeam)
    {
    }

    /**
     * Check if $user can edit RegistrationTeam
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeam $registrationTeam
     * @return bool
     */
    public function canEdit(IdentityInterface $user, RegistrationTeam $registrationTeam)
    {
    }

    /**
     * Check if $user can delete RegistrationTeam
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeam $registrationTeam
     * @return bool
     */
    public function canDelete(IdentityInterface $user, RegistrationTeam $registrationTeam)
    {
    }

    /**
     * Check if $user can view RegistrationTeam
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeam $registrationTeam
     * @return bool
     */
    public function canView(IdentityInterface $user, RegistrationTeam $registrationTeam)
    {
    }
}
