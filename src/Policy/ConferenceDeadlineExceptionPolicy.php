<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ConferenceDeadlineException;
use Authorization\IdentityInterface;

/**
 * ConferenceDeadlineException policy
 */
class ConferenceDeadlineExceptionPolicy
{
    /**
     * Check if $user can add ConferenceDeadlineException
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadlineException $conferenceDeadlineException
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ConferenceDeadlineException $conferenceDeadlineException)
    {
    }

    /**
     * Check if $user can edit ConferenceDeadlineException
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadlineException $conferenceDeadlineException
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ConferenceDeadlineException $conferenceDeadlineException)
    {
    }

    /**
     * Check if $user can delete ConferenceDeadlineException
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadlineException $conferenceDeadlineException
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ConferenceDeadlineException $conferenceDeadlineException)
    {
    }

    /**
     * Check if $user can view ConferenceDeadlineException
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceDeadlineException $conferenceDeadlineException
     * @return bool
     */
    public function canView(IdentityInterface $user, ConferenceDeadlineException $conferenceDeadlineException)
    {
    }
}
