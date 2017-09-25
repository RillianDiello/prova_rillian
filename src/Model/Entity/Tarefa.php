<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tarefa Entity
 *
 * @property int $id
 * @property string $titulo
 * @property \Cake\I18n\FrozenDate $dia
 * @property string $descricao
 * @property \Cake\I18n\FrozenTime $inicio
 * @property \Cake\I18n\FrozenTime $fim
 * @property int $user_id
 * @property int $local_id
 * @property int $tipo_tarefa_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Locai $locai
 * @property \App\Model\Entity\TiposTarefa $tipos_tarefa
 */
class Tarefa extends Entity
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
        'titulo' => true,
        'dia' => true,
        'descricao' => true,
        'inicio' => true,
        'fim' => true,
        'user_id' => true,
        'local_id' => true,
        'tipo_tarefa_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'locai' => true,
        'tipos_tarefa' => true
    ];
}
