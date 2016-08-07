<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $password
 * @property string $username
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $mobile
 * @property string $email
 * @property string $address
 * @property string $blood_group
 * @property int $company_id
 * @property int $city_id
 * @property int $office_id
 * @property int $department_id
 * @property int $designation_id
 * @property int $reporting_user_id
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 * @property int $status
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Office $office
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\User $reporting_user
 * @property \App\Model\Entity\Leave[] $leaves
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
