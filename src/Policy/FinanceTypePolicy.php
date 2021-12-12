<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\FinanceType;
use Authorization\IdentityInterface;

/**
 * FinanceType policy
 */
class FinanceTypePolicy
{
    /**
     * Check if $user can add FinanceType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\FinanceType $financeType
     * @return bool
     */
    public function canAdd(IdentityInterface $user, FinanceType $financeType)
    {
    }

    /**
     * Check if $user can edit FinanceType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\FinanceType $financeType
     * @return bool
     */
    public function canEdit(IdentityInterface $user, FinanceType $financeType)
    {
    }

    /**
     * Check if $user can delete FinanceType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\FinanceType $financeType
     * @return bool
     */
    public function canDelete(IdentityInterface $user, FinanceType $financeType)
    {
    }

    /**
     * Check if $user can view FinanceType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\FinanceType $financeType
     * @return bool
     */
    public function canView(IdentityInterface $user, FinanceType $financeType)
    {
    }
}
