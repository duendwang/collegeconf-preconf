<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Rate;
use Authorization\IdentityInterface;

/**
 * Rate policy
 */
class RatePolicy
{
    /**
     * Check if $user can add Rate
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Rate $rate
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Rate $rate)
    {
    }

    /**
     * Check if $user can edit Rate
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Rate $rate
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Rate $rate)
    {
    }

    /**
     * Check if $user can delete Rate
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Rate $rate
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Rate $rate)
    {
    }

    /**
     * Check if $user can view Rate
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Rate $rate
     * @return bool
     */
    public function canView(IdentityInterface $user, Rate $rate)
    {
    }
}
