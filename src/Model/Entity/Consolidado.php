<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consolidado Entity
 *
 * @property int $id
 * @property int $accion_id
 * @property string $texto_consolidado
 * @property int $user_id
 * @property \Cake\I18n\Time $fecha_consolidado
 *
 * @property \App\Model\Entity\Accion $accion
 * @property \App\Model\Entity\User $user
 */
class Consolidado extends Entity
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
