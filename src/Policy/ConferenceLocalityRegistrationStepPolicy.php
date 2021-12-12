<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ConferenceLocalityRegistrationStep;
use Authorization\IdentityInterface;

/**
 * ConferenceLocalityRegistrationStep policy
 */
class ConferenceLocalityRegistrationStepPolicy
{
    /**
     * Check if $user can add ConferenceLocalityRegistrationStep
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocalityRegistrationStep $conferenceLocalityRegistrationStep
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ConferenceLocalityRegistrationStep $conferenceLocalityRegistrationStep)
    {
    }

    /**
     * Check if $user can edit ConferenceLocalityRegistrationStep
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocalityRegistrationStep $conferenceLocalityRegistrationStep
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ConferenceLocalityRegistrationStep $conferenceLocalityRegistrationStep)
    {
    }

    /**
     * Check if $user can delete ConferenceLocalityRegistrationStep
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocalityRegistrationStep $conferenceLocalityRegistrationStep
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ConferenceLocalityRegistrationStep $conferenceLocalityRegistrationStep)
    {
    }

    /**
     * Check if $user can view ConferenceLocalityRegistrationStep
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocalityRegistrationStep $conferenceLocalityRegistrationStep
     * @return bool
     */
    public function canView(IdentityInterface $user, ConferenceLocalityRegistrationStep $conferenceLocalityRegistrationStep)
    {
    }
}
