<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\CheckIn;
use Authorization\IdentityInterface;

/**
 * CheckIn policy
 */
class CheckInPolicy
{
    /**
     * Check if $user can add CheckIn
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CheckIn $checkIn
     * @return bool
     */
    public function canAdd(IdentityInterface $user, CheckIn $checkIn)
    {
    }

    /**
     * Check if $user can edit CheckIn
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CheckIn $checkIn
     * @return bool
     */
    public function canEdit(IdentityInterface $user, CheckIn $checkIn)
    {
    }

    /**
     * Check if $user can delete CheckIn
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CheckIn $checkIn
     * @return bool
     */
    public function canDelete(IdentityInterface $user, CheckIn $checkIn)
    {
    }

    /**
     * Check if $user can view CheckIn
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CheckIn $checkIn
     * @return bool
     */
    public function canView(IdentityInterface $user, CheckIn $checkIn)
    {
    }
}
