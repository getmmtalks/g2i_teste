<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veiculo Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $marca_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 *
 * @property \App\Model\Entity\Marca $marca
 */
class Veiculo extends Entity
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
        'nome' => true,
        'marca_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'deleted_at' => true,
        'marca' => true,
    ];
}
