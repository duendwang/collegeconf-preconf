<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\OnsiteRegistration;
use Authorization\IdentityInterface;

/**
 * OnsiteRegistration policy
 */
class OnsiteRegistrationPolicy
{
    /**
     * Check if $user can add OnsiteRegistration
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\OnsiteRegistration $onsiteRegistration
     * @return bool
     */
    public function canAdd(IdentityInterface $user, OnsiteRegistration $onsiteRegistration)
    {
    }

    /**
     * Check if $user can edit OnsiteRegistration
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\OnsiteRegistration $onsiteRegistration
     * @return bool
     */
    public function canEdit(IdentityInterface $user, OnsiteRegistration $onsiteRegistration)
    {
    }

    /**
     * Check if $user can delete OnsiteRegistration
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\OnsiteRegistration $onsiteRegistration
     * @return bool
     */
    public function canDelete(IdentityInterface $user, OnsiteRegistration $onsiteRegistration)
    {
    }

    /**
     * Check if $user can view OnsiteRegistration
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\OnsiteRegistration $onsiteRegistration
     * @return bool
     */
    public function canView(IdentityInterface $user, OnsiteRegistration $onsiteRegistration)
    {
    }
}
