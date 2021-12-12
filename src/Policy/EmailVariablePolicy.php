<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\EmailVariable;
use Authorization\IdentityInterface;

/**
 * EmailVariable policy
 */
class EmailVariablePolicy
{
    /**
     * Check if $user can add EmailVariable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\EmailVariable $emailVariable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, EmailVariable $emailVariable)
    {
    }

    /**
     * Check if $user can edit EmailVariable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\EmailVariable $emailVariable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, EmailVariable $emailVariable)
    {
    }

    /**
     * Check if $user can delete EmailVariable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\EmailVariable $emailVariable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, EmailVariable $emailVariable)
    {
    }

    /**
     * Check if $user can view EmailVariable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\EmailVariable $emailVariable
     * @return bool
     */
    public function canView(IdentityInterface $user, EmailVariable $emailVariable)
    {
    }
}
