<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ConferenceEvent;
use Authorization\IdentityInterface;

/**
 * ConferenceEvent policy
 */
class ConferenceEventPolicy
{
    /**
     * Check if $user can add ConferenceEvent
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceEvent $conferenceEvent
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ConferenceEvent $conferenceEvent)
    {
    }

    /**
     * Check if $user can edit ConferenceEvent
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceEvent $conferenceEvent
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ConferenceEvent $conferenceEvent)
    {
    }

    /**
     * Check if $user can delete ConferenceEvent
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceEvent $conferenceEvent
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ConferenceEvent $conferenceEvent)
    {
    }

    /**
     * Check if $user can view ConferenceEvent
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceEvent $conferenceEvent
     * @return bool
     */
    public function canView(IdentityInterface $user, ConferenceEvent $conferenceEvent)
    {
    }
}
