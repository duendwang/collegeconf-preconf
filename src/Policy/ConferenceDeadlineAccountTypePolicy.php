<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ConferenceDeadlineAccountType;
use Authorization\IdentityInterface;

/**
 * ConferenceDeadlineAccountType policy
 */
class ConferenceDeadlineAccountTypePolicy
{
    /**
     * Check if $user can add ConferenceDeadlineAccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadlineAccountType $conferenceDeadlineAccountType
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ConferenceDeadlineAccountType $conferenceDeadlineAccountType)
    {
    }

    /**
     * Check if $user can edit ConferenceDeadlineAccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadlineAccountType $conferenceDeadlineAccountType
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ConferenceDeadlineAccountType $conferenceDeadlineAccountType)
    {
    }

    /**
     * Check if $user can delete ConferenceDeadlineAccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadlineAccountType $conferenceDeadlineAccountType
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ConferenceDeadlineAccountType $conferenceDeadlineAccountType)
    {
    }

    /**
     * Check if $user can view ConferenceDeadlineAccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadlineAccountType $conferenceDeadlineAccountType
     * @return bool
     */
    public function canView(IdentityInterface $user, ConferenceDeadlineAccountType $conferenceDeadlineAccountType)
    {
    }
}
