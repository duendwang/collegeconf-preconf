<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Email;
use Authorization\IdentityInterface;

/**
 * Email policy
 */
class EmailPolicy
{
    /**
     * Check if $user can add Email
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Email $email
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Email $email)
    {
    }

    /**
     * Check if $user can edit Email
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Email $email
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Email $email)
    {
    }

    /**
     * Check if $user can delete Email
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Email $email
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Email $email)
    {
    }

    /**
     * Check if $user can view Email
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Email $email
     * @return bool
     */
    public function canView(IdentityInterface $user, Email $email)
    {
    }
}
