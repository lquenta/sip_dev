<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InstitucionRecomendacion Entity
 *
 * @property int $id
 * @property int $institucion_id
 * @property int $recomendacion_id
 *
 * @property \App\Model\Entity\Institucion $institucion
 * @property \App\Model\Entity\Recomendacion $recomendacion
 */
class InstitucionRecomendacion extends Entity
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
