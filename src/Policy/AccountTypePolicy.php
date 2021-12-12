<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\AccountType;
use Authorization\IdentityInterface;

/**
 * AccountType policy
 */
class AccountTypePolicy
{
    /**
     * Check if $user can add AccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AccountType $accountType
     * @return bool
     */
    public function canAdd(IdentityInterface $user, AccountType $accountType)
    {
    }

    /**
     * Check if $user can edit AccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AccountType $accountType
     * @return bool
     */
    public function canEdit(IdentityInterface $user, AccountType $accountType)
    {
    }

    /**
     * Check if $user can delete AccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AccountType $accountType
     * @return bool
     */
    public function canDelete(IdentityInterface $user, AccountType $accountType)
    {
    }

    /**
     * Check if $user can view AccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AccountType $accountType
     * @return bool
     */
    public function canView(IdentityInterface $user, AccountType $accountType)
    {
    }
}
