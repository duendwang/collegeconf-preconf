<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Campus;
use Authorization\IdentityInterface;

/**
 * Campus policy
 */
class CampusPolicy
{
    /**
     * Check if $user can add Campus
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Campus $campus
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Campus $campus)
    {
    }

    /**
     * Check if $user can edit Campus
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Campus $campus
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Campus $campus)
    {
    }

    /**
     * Check if $user can delete Campus
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Campus $campus
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Campus $campus)
    {
    }

    /**
     * Check if $user can view Campus
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Campus $campus
     * @return bool
     */
    public function canView(IdentityInterface $user, Campus $campus)
    {
    }
}
