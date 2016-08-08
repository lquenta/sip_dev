<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SolicitudesPendientesRespuesta Entity
 *
 * @property int $id
 * @property int $usuario_id
 * @property int $estado_id
 * @property \Cake\I18n\Time $fecha_modificacion
 * @property int $solicitud_informacion_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\SolicitudInformacion $solicitud_informacion
 */
class SolicitudesPendientesRespuesta extends Entity
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
