<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\RateType;
use Authorization\IdentityInterface;

/**
 * RateType policy
 */
class RateTypePolicy
{
    /**
     * Check if $user can add RateType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RateType $rateType
     * @return bool
     */
    public function canAdd(IdentityInterface $user, RateType $rateType)
    {
    }

    /**
     * Check if $user can edit RateType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RateType $rateType
     * @return bool
     */
    public function canEdit(IdentityInterface $user, RateType $rateType)
    {
    }

    /**
     * Check if $user can delete RateType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RateType $rateType
     * @return bool
     */
    public function canDelete(IdentityInterface $user, RateType $rateType)
    {
    }

    /**
     * Check if $user can view RateType
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\RateType $rateType
     * @return bool
     */
    public function canView(IdentityInterface $user, RateType $rateType)
    {
    }
}
