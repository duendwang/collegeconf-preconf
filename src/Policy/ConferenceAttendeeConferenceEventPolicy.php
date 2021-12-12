<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ConferenceAttendeeConferenceEvent;
use Authorization\IdentityInterface;

/**
 * ConferenceAttendeeConferenceEvent policy
 */
class ConferenceAttendeeConferenceEventPolicy
{
    /**
     * Check if $user can add ConferenceAttendeeConferenceEvent
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendeeConferenceEvent $conferenceAttendeeConferenceEvent
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ConferenceAttendeeConferenceEvent $conferenceAttendeeConferenceEvent)
    {
    }

    /**
     * Check if $user can edit ConferenceAttendeeConferenceEvent
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendeeConferenceEvent $conferenceAttendeeConferenceEvent
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ConferenceAttendeeConferenceEvent $conferenceAttendeeConferenceEvent)
    {
    }

    /**
     * Check if $user can delete ConferenceAttendeeConferenceEvent
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendeeConferenceEvent $conferenceAttendeeConferenceEvent
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ConferenceAttendeeConferenceEvent $conferenceAttendeeConferenceEvent)
    {
    }

    /**
     * Check if $user can view ConferenceAttendeeConferenceEvent
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendeeConferenceEvent $conferenceAttendeeConferenceEvent
     * @return bool
     */
    public function canView(IdentityInterface $user, ConferenceAttendeeConferenceEvent $conferenceAttendeeConferenceEvent)
    {
    }
}
