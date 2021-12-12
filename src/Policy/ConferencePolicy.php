<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Conference;
use Authorization\IdentityInterface;

/**
 * Conference policy
 */
class ConferencePolicy
{
    /**
     * Check if $user can add Conference
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Conference $conference
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Conference $conference)
    {
    }

    /**
     * Check if $user can edit Conference
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Conference $conference
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Conference $conference)
    {
    }

    /**
     * Check if $user can delete Conference
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Conference $conference
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Conference $conference)
    {
    }

    /**
     * Check if $user can view Conference
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Conference $conference
     * @return bool
     */
    public function canView(IdentityInterface $user, Conference $conference)
    {
    }
}
