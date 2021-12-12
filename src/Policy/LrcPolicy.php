<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Lrc;
use Authorization\IdentityInterface;

/**
 * Lrc policy
 */
class LrcPolicy
{
    /**
     * Check if $user can add Lrc
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Lrc $lrc
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Lrc $lrc)
    {
    }

    /**
     * Check if $user can edit Lrc
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Lrc $lrc
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Lrc $lrc)
    {
    }

    /**
     * Check if $user can delete Lrc
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Lrc $lrc
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Lrc $lrc)
    {
    }

    /**
     * Check if $user can view Lrc
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Lrc $lrc
     * @return bool
     */
    public function canView(IdentityInterface $user, Lrc $lrc)
    {
    }
}
