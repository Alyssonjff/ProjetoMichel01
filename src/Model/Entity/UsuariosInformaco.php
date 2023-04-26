<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsuariosInformaco Entity
 *
 * @property int $id
 * @property string $Nome
 * @property \Cake\I18n\FrozenDate $Data_Nascimento
 * @property string $Profissao
 */
class UsuariosInformaco extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'Nome' => true,
        'Data_Nascimento' => true,
        'Profissao' => true,
    ];
}
