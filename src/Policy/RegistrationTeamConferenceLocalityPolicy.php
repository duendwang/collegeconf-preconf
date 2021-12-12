<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\RegistrationTeamConferenceLocality;
use Authorization\IdentityInterface;

/**
 * RegistrationTeamConferenceLocality policy
 */
class RegistrationTeamConferenceLocalityPolicy
{
    /**
     * Check if $user can add RegistrationTeamConferenceLocality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeamConferenceLocality $registrationTeamConferenceLocality
     * @return bool
     */
    public function canAdd(IdentityInterface $user, RegistrationTeamConferenceLocality $registrationTeamConferenceLocality)
    {
    }

    /**
     * Check if $user can edit RegistrationTeamConferenceLocality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeamConferenceLocality $registrationTeamConferenceLocality
     * @return bool
     */
    public function canEdit(IdentityInterface $user, RegistrationTeamConferenceLocality $registrationTeamConferenceLocality)
    {
    }

    /**
     * Check if $user can delete RegistrationTeamConferenceLocality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeamConferenceLocality $registrationTeamConferenceLocality
     * @return bool
     */
    public function canDelete(IdentityInterface $user, RegistrationTeamConferenceLocality $registrationTeamConferenceLocality)
    {
    }

    /**
     * Check if $user can view RegistrationTeamConferenceLocality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationTeamConferenceLocality $registrationTeamConferenceLocality
     * @return bool
     */
    public function canView(IdentityInterface $user, RegistrationTeamConferenceLocality $registrationTeamConferenceLocality)
    {
    }
}
