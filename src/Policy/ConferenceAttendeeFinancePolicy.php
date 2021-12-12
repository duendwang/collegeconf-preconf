<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ConferenceAttendeeFinance;
use Authorization\IdentityInterface;

/**
 * ConferenceAttendeeFinance policy
 */
class ConferenceAttendeeFinancePolicy
{
    /**
     * Check if $user can add ConferenceAttendeeFinance
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendeeFinance $conferenceAttendeeFinance
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ConferenceAttendeeFinance $conferenceAttendeeFinance)
    {
    }

    /**
     * Check if $user can edit ConferenceAttendeeFinance
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendeeFinance $conferenceAttendeeFinance
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ConferenceAttendeeFinance $conferenceAttendeeFinance)
    {
    }

    /**
     * Check if $user can delete ConferenceAttendeeFinance
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendeeFinance $conferenceAttendeeFinance
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ConferenceAttendeeFinance $conferenceAttendeeFinance)
    {
    }

    /**
     * Check if $user can view ConferenceAttendeeFinance
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceAttendeeFinance $conferenceAttendeeFinance
     * @return bool
     */
    public function canView(IdentityInterface $user, ConferenceAttendeeFinance $conferenceAttendeeFinance)
    {
    }
}
