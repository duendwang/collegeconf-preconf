<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Lodging;
use Authorization\IdentityInterface;

/**
 * Lodging policy
 */
class LodgingPolicy
{
    /**
     * Check if $user can add Lodging
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Lodging $lodging
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Lodging $lodging)
    {
    }

    /**
     * Check if $user can edit Lodging
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Lodging $lodging
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Lodging $lodging)
    {
    }

    /**
     * Check if $user can delete Lodging
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Lodging $lodging
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Lodging $lodging)
    {
    }

    /**
     * Check if $user can view Lodging
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Lodging $lodging
     * @return bool
     */
    public function canView(IdentityInterface $user, Lodging $lodging)
    {
    }
}
