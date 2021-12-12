<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Cancel;
use Authorization\IdentityInterface;

/**
 * Cancel policy
 */
class CancelPolicy
{
    /**
     * Check if $user can add Cancel
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Cancel $cancel
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Cancel $cancel)
    {
    }

    /**
     * Check if $user can edit Cancel
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Cancel $cancel
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Cancel $cancel)
    {
    }

    /**
     * Check if $user can delete Cancel
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Cancel $cancel
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Cancel $cancel)
    {
    }

    /**
     * Check if $user can view Cancel
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Cancel $cancel
     * @return bool
     */
    public function canView(IdentityInterface $user, Cancel $cancel)
    {
    }
}
