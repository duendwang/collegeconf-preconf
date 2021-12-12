<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ConferenceAttendee;
use Authorization\IdentityInterface;

/**
 * ConferenceAttendee policy
 */
class ConferenceAttendeePolicy
{
    /**
     * Check if $user can add ConferenceAttendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendee $conferenceAttendee
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ConferenceAttendee $conferenceAttendee)
    {
    }

    /**
     * Check if $user can edit ConferenceAttendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendee $conferenceAttendee
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ConferenceAttendee $conferenceAttendee)
    {
    }

    /**
     * Check if $user can delete ConferenceAttendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendee $conferenceAttendee
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ConferenceAttendee $conferenceAttendee)
    {
    }

    /**
     * Check if $user can view ConferenceAttendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendee $conferenceAttendee
     * @return bool
     */
    public function canView(IdentityInterface $user, ConferenceAttendee $conferenceAttendee)
    {
    }
}
