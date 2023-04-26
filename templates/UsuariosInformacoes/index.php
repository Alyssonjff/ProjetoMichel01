<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UsuariosInformaco> $usuariosInformacoes
 */
?>
<div class="usuariosInformacoes index content">
    <?= $this->Html->link(__('New Usuarios Informaco'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuarios Informacoes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Data_Nascimento') ?></th>
                    <th><?= $this->Paginator->sort('Profissao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuariosInformacoes as $usuariosInformaco): ?>
                <tr>
                    <td><?= $this->Number->format($usuariosInformaco->id) ?></td>
                    <td><?= h($usuariosInformaco->Nome) ?></td>
                    <td><?= h($usuariosInformaco->Data_Nascimento) ?></td>
                    <td><?= h($usuariosInformaco->Profissao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuariosInformaco->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuariosInformaco->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuariosInformaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosInformaco->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
