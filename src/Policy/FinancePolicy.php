<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Finance;
use Authorization\IdentityInterface;

/**
 * Finance policy
 */
class FinancePolicy
{
    /**
     * Check if $user can add Finance
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Finance $finance
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Finance $finance)
    {
    }

    /**
     * Check if $user can edit Finance
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Finance $finance
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Finance $finance)
    {
    }

    /**
     * Check if $user can delete Finance
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Finance $finance
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Finance $finance)
    {
    }

    /**
     * Check if $user can view Finance
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Finance $finance
     * @return bool
     */
    public function canView(IdentityInterface $user, Finance $finance)
    {
    }
}
