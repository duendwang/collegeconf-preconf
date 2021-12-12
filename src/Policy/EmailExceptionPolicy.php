<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\EmailException;
use Authorization\IdentityInterface;

/**
 * EmailException policy
 */
class EmailExceptionPolicy
{
    /**
     * Check if $user can add EmailException
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\EmailException $emailException
     * @return bool
     */
    public function canAdd(IdentityInterface $user, EmailException $emailException)
    {
    }

    /**
     * Check if $user can edit EmailException
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\EmailException $emailException
     * @return bool
     */
    public function canEdit(IdentityInterface $user, EmailException $emailException)
    {
    }

    /**
     * Check if $user can delete EmailException
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\EmailException $emailException
     * @return bool
     */
    public function canDelete(IdentityInterface $user, EmailException $emailException)
    {
    }

    /**
     * Check if $user can view EmailException
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\EmailException $emailException
     * @return bool
     */
    public function canView(IdentityInterface $user, EmailException $emailException)
    {
    }
}
