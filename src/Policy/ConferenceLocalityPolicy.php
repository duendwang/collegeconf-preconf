<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ConferenceLocality;
use Authorization\IdentityInterface;

/**
 * ConferenceLocality policy
 */
class ConferenceLocalityPolicy
{
    /**
     * Check if $user can add ConferenceLocality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocality $conferenceLocality
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ConferenceLocality $conferenceLocality)
    {
    }

    /**
     * Check if $user can edit ConferenceLocality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocality $conferenceLocality
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ConferenceLocality $conferenceLocality)
    {
    }

    /**
     * Check if $user can delete ConferenceLocality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocality $conferenceLocality
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ConferenceLocality $conferenceLocality)
    {
    }

    /**
     * Check if $user can view ConferenceLocality
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ConferenceLocality $conferenceLocality
     * @return bool
     */
    public function canView(IdentityInterface $user, ConferenceLocality $conferenceLocality)
    {
    }
}
