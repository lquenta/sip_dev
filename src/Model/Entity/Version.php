<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Version Entity.
 *
 * @property int $id
 * @property int $recomendacion_id
 * @property \App\Model\Entity\Recomendacion $recomendacion
 * @property string $titulo
 * @property string $descripcion
 * @property \Cake\I18n\Time $fecha
 * @property int $usuario_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\AdjuntosVersion[] $adjuntos_versions
 */
class Version extends Entity
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
