<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Event;
use Authorization\IdentityInterface;

/**
 * Event policy
 */
class EventPolicy
{
    /**
     * Check if $user can add Event
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Event $event
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Event $event)
    {
    }

    /**
     * Check if $user can edit Event
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Event $event
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Event $event)
    {
    }

    /**
     * Check if $user can delete Event
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Event $event
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Event $event)
    {
    }

    /**
     * Check if $user can view Event
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Event $event
     * @return bool
     */
    public function canView(IdentityInterface $user, Event $event)
    {
    }
}
