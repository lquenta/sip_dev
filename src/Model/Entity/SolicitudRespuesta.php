<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SolicitudRespuesta Entity
 *
 * @property int $id
 * @property int $solicitud_informacion_id
 * @property string $respuesta
 * @property \Cake\I18n\Time $fecha_respuesta
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\SolicitudInformacion $solicitud_informacion
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\AdjuntosSolicitudRespuesta[] $adjuntos_solicitud_respuestas
 */
class SolicitudRespuesta extends Entity
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
