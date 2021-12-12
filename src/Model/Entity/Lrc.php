<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lrc Entity
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property int $locality_id
 * @property string $gender
 * @property string|null $cell_phone
 * @property string $email
 * @property string|null $comment
 * @property bool $active
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Locality $locality
 */
class Lrc extends Entity
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
        'last_name' => true,
        'first_name' => true,
        'locality_id' => true,
        'gender' => true,
        'cell_phone' => true,
        'email' => true,
        'comment' => true,
        'active' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'locality' => true,
    ];
}
