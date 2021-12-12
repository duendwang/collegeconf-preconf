<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Locality;
use Authorization\IdentityInterface;

/**
 * Locality policy
 */
class LocalityPolicy
{
    /**
     * Check if $user can add Locality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Locality $locality
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Locality $locality)
    {
    }

    /**
     * Check if $user can edit Locality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Locality $locality
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Locality $locality)
    {
    }

    /**
     * Check if $user can delete Locality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Locality $locality
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Locality $locality)
    {
    }

    /**
     * Check if $user can view Locality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Locality $locality
     * @return bool
     */
    public function canView(IdentityInterface $user, Locality $locality)
    {
    }
}
