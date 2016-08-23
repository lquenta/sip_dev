<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * IndicadoresAccionSolicitud Entity
 *
 * @property int $id
 * @property int $indicador_id
 * @property int $accion_solicitud_id
 *
 * @property \App\Model\Entity\Indicador $indicador
 * @property \App\Model\Entity\AccionSolicitud $accion_solicitud
 */
class IndicadoresAccionSolicitud extends Entity
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
