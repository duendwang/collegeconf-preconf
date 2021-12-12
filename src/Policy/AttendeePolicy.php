<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Attendee;
use Authorization\IdentityInterface;

/**
 * Attendee policy
 */
class AttendeePolicy
{
    /**
     * Check if $user can add Attendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Attendee $attendee
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Attendee $attendee)
    {
    }

    /**
     * Check if $user can edit Attendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Attendee $attendee
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Attendee $attendee)
    {
    }

    /**
     * Check if $user can delete Attendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Attendee $attendee
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Attendee $attendee)
    {
    }

    /**
     * Check if $user can view Attendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Attendee $attendee
     * @return bool
     */
    public function canView(IdentityInterface $user, Attendee $attendee)
    {
    }
}
