<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\UserAccountType;
use Authorization\IdentityInterface;

/**
 * UserAccountType policy
 */
class UserAccountTypePolicy
{
    /**
     * Check if $user can add UserAccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\UserAccountType $userAccountType
     * @return bool
     */
    public function canAdd(IdentityInterface $user, UserAccountType $userAccountType)
    {
    }

    /**
     * Check if $user can edit UserAccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\UserAccountType $userAccountType
     * @return bool
     */
    public function canEdit(IdentityInterface $user, UserAccountType $userAccountType)
    {
    }

    /**
     * Check if $user can delete UserAccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\UserAccountType $userAccountType
     * @return bool
     */
    public function canDelete(IdentityInterface $user, UserAccountType $userAccountType)
    {
    }

    /**
     * Check if $user can view UserAccountType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\UserAccountType $userAccountType
     * @return bool
     */
    public function canView(IdentityInterface $user, UserAccountType $userAccountType)
    {
    }
}
