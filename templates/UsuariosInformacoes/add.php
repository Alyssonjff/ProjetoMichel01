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
            <?= $this->Html->link(__('List Usuarios Informacoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuariosInformacoes form content">
            <?= $this->Form->create($usuariosInformaco) ?>
            <fieldset>
                <legend><?= __('Add Usuarios Informaco') ?></legend>
                <?php
                    echo $this->Form->control('Nome');
                    echo $this->Form->control('Data_Nascimento');
                    echo $this->Form->control('Profissao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
