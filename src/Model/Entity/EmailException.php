<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmailException Entity
 *
 * @property int $id
 * @property int $email_id
 * @property int $conference_id
 * @property string|null $subject
 * @property string|null $body
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Email $email
 * @property \App\Model\Entity\Conference $conference
 */
class EmailException extends Entity
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
        'email_id' => true,
        'conference_id' => true,
        'subject' => true,
        'body' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'email' => true,
        'conference' => true,
    ];
}
