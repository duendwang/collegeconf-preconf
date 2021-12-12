<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ConferenceLocation;
use Authorization\IdentityInterface;

/**
 * ConferenceLocation policy
 */
class ConferenceLocationPolicy
{
    /**
     * Check if $user can add ConferenceLocation
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocation $conferenceLocation
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ConferenceLocation $conferenceLocation)
    {
    }

    /**
     * Check if $user can edit ConferenceLocation
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocation $conferenceLocation
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ConferenceLocation $conferenceLocation)
    {
    }

    /**
     * Check if $user can delete ConferenceLocation
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocation $conferenceLocation
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ConferenceLocation $conferenceLocation)
    {
    }

    /**
     * Check if $user can view ConferenceLocation
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocation $conferenceLocation
     * @return bool
     */
    public function canView(IdentityInterface $user, ConferenceLocation $conferenceLocation)
    {
    }
}
