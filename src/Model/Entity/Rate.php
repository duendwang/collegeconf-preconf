<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rate Entity
 *
 * @property int $id
 * @property int $conference_location_id
 * @property int $rate_type_id
 * @property string $cost
 * @property bool $latefee_applies
 * @property bool $active
 * @property string|null $comment
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\ConferenceLocation $conference_location
 * @property \App\Model\Entity\RateType $rate_type
 */
class Rate extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'conference_location_id' => true,
        'rate_type_id' => true,
        'cost' => true,
        'latefee_applies' => true,
        'active' => true,
        'comment' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'conference_location' => true,
        'rate_type' => true,
    ];
}
