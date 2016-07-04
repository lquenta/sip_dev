<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recomendacion Entity.
 *
 * @property int $id
 * @property string $titulo
 * @property string $descripcion
 * @property \Cake\I18n\Time $fecha_creacion
 * @property \Cake\I18n\Time $fecha_modificacion
 * @property int $usuario_id
 * @property \App\Model\Entity\User $user
 * @property int $estado_id
 * @property \App\Model\Entity\Estado $estado
 * @property int $año
 * @property \App\Model\Entity\Accion[] $accions
 * @property \App\Model\Entity\AdjuntosRecomendacion[] $adjuntos_recomendacions
 * @property \App\Model\Entity\Autorizacion[] $autorizacions
 * @property \App\Model\Entity\DerechoRecomendacion[] $derecho_recomendacion
 * @property \App\Model\Entity\IndicadoresRecomendacion[] $indicadores_recomendacions
 * @property \App\Model\Entity\InstitucionRecomendacion[] $institucion_recomendacion
 * @property \App\Model\Entity\MecanismoRecomendacion[] $mecanismo_recomendacion
 * @property \App\Model\Entity\Notificacion[] $notificacions
 * @property \App\Model\Entity\PoblacionRecomendacion[] $poblacion_recomendacion
 * @property \App\Model\Entity\RecomendacionParametro[] $recomendacion_parametros
 * @property \App\Model\Entity\Revision[] $revisions
 * @property \App\Model\Entity\Version[] $versions
 */
class Recomendacion extends Entity
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
        'id' => false,
    ];
}
