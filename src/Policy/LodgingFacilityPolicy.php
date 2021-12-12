<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\LodgingFacility;
use Authorization\IdentityInterface;

/**
 * LodgingFacility policy
 */
class LodgingFacilityPolicy
{
    /**
     * Check if $user can add LodgingFacility
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\LodgingFacility $lodgingFacility
     * @return bool
     */
    public function canAdd(IdentityInterface $user, LodgingFacility $lodgingFacility)
    {
    }

    /**
     * Check if $user can edit LodgingFacility
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\LodgingFacility $lodgingFacility
     * @return bool
     */
    public function canEdit(IdentityInterface $user, LodgingFacility $lodgingFacility)
    {
    }

    /**
     * Check if $user can delete LodgingFacility
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\LodgingFacility $lodgingFacility
     * @return bool
     */
    public function canDelete(IdentityInterface $user, LodgingFacility $lodgingFacility)
    {
    }

    /**
     * Check if $user can view LodgingFacility
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\LodgingFacility $lodgingFacility
     * @return bool
     */
    public function canView(IdentityInterface $user, LodgingFacility $lodgingFacility)
    {
    }
}
