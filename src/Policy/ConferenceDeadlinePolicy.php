<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ConferenceDeadline;
use Authorization\IdentityInterface;

/**
 * ConferenceDeadline policy
 */
class ConferenceDeadlinePolicy
{
    /**
     * Check if $user can add ConferenceDeadline
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadline $conferenceDeadline
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ConferenceDeadline $conferenceDeadline)
    {
    }

    /**
     * Check if $user can edit ConferenceDeadline
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadline $conferenceDeadline
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ConferenceDeadline $conferenceDeadline)
    {
    }

    /**
     * Check if $user can delete ConferenceDeadline
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadline $conferenceDeadline
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ConferenceDeadline $conferenceDeadline)
    {
    }

    /**
     * Check if $user can view ConferenceDeadline
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadline $conferenceDeadline
     * @return bool
     */
    public function canView(IdentityInterface $user, ConferenceDeadline $conferenceDeadline)
    {
    }
}
