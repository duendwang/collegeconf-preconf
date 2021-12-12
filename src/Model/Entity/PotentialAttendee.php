<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PotentialAttendee Entity
 *
 * @property int $id
 * @property int $conference_id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property int $locality_id
 * @property int|null $campus_id
 * @property string|null $allergies
 * @property int $status_id
 * @property string $cell_phone
 * @property string $email
 * @property string|null $comment
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Conference $conference
 * @property \App\Model\Entity\Locality $locality
 * @property \App\Model\Entity\Campus $campus
 * @property \App\Model\Entity\Status $status
 */
class PotentialAttendee extends Entity
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
        'conference_id' => true,
        'first_name' => true,
        'last_name' => true,
        'gender' => true,
        'locality_id' => true,
        'campus_id' => true,
        'allergies' => true,
        'status_id' => true,
        'cell_phone' => true,
        'email' => true,
        'comment' => true,
        'created' => true,
        'conference' => true,
        'locality' => true,
        'campus' => true,
        'status' => true,
    ];
}
