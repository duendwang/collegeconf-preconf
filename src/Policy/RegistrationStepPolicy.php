<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\RegistrationStep;
use Authorization\IdentityInterface;

/**
 * RegistrationStep policy
 */
class RegistrationStepPolicy
{
    /**
     * Check if $user can add RegistrationStep
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationStep $registrationStep
     * @return bool
     */
    public function canAdd(IdentityInterface $user, RegistrationStep $registrationStep)
    {
    }

    /**
     * Check if $user can edit RegistrationStep
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationStep $registrationStep
     * @return bool
     */
    public function canEdit(IdentityInterface $user, RegistrationStep $registrationStep)
    {
    }

    /**
     * Check if $user can delete RegistrationStep
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationStep $registrationStep
     * @return bool
     */
    public function canDelete(IdentityInterface $user, RegistrationStep $registrationStep)
    {
    }

    /**
     * Check if $user can view RegistrationStep
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RegistrationStep $registrationStep
     * @return bool
     */
    public function canView(IdentityInterface $user, RegistrationStep $registrationStep)
    {
    }
}
