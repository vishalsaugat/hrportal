<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property string $name
 * @property string $unique_link
 * @property int $city_id
 * @property int $status
 * @property string $image_link
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Attendance[] $attendances
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Inventory[] $inventories
 * @property \App\Model\Entity\Notification[] $notifications
 * @property \App\Model\Entity\Office[] $offices
 * @property \App\Model\Entity\Policy[] $policies
 * @property \App\Model\Entity\User[] $users
 */
class Company extends Entity
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
        '*' => true,
        'id' => false
    ];
}
