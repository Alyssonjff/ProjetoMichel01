<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsuariosInformaco $usuariosInformaco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuarios Informaco'), ['action' => 'edit', $usuariosInformaco->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuarios Informaco'), ['action' => 'delete', $usuariosInformaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosInformaco->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios Informacoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuarios Informaco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuariosInformacoes view content">
            <h3><?= h($usuariosInformaco->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($usuariosInformaco->Nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profissao') ?></th>
                    <td><?= h($usuariosInformaco->Profissao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usuariosInformaco->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Nascimento') ?></th>
                    <td><?= h($usuariosInformaco->Data_Nascimento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
