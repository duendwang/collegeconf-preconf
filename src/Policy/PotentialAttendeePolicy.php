<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\PotentialAttendee;
use Authorization\IdentityInterface;

/**
 * PotentialAttendee policy
 */
class PotentialAttendeePolicy
{
    /**
     * Check if $user can add PotentialAttendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\PotentialAttendee $potentialAttendee
     * @return bool
     */
    public function canAdd(IdentityInterface $user, PotentialAttendee $potentialAttendee)
    {
    }

    /**
     * Check if $user can edit PotentialAttendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\PotentialAttendee $potentialAttendee
     * @return bool
     */
    public function canEdit(IdentityInterface $user, PotentialAttendee $potentialAttendee)
    {
    }

    /**
     * Check if $user can delete PotentialAttendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\PotentialAttendee $potentialAttendee
     * @return bool
     */
    public function canDelete(IdentityInterface $user, PotentialAttendee $potentialAttendee)
    {
    }

    /**
     * Check if $user can view PotentialAttendee
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\PotentialAttendee $potentialAttendee
     * @return bool
     */
    public function canView(IdentityInterface $user, PotentialAttendee $potentialAttendee)
    {
    }
}
