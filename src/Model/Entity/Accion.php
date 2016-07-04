<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Accion Entity.
 *
 * @property int $id
 * @property string $descripcion
 * @property \Cake\I18n\Time $fecha
 * @property int $usuario_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property int $recomendacion_id
 * @property \App\Model\Entity\Recomendacion $recomendacion
 * @property string $politica
 * @property string $programa
 * @property string $direccion
 * @property string $reporte
 * @property string $desafios
 * @property \App\Model\Entity\AdjuntosAccion[] $adjuntos_accions
 */
class Accion extends Entity
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
