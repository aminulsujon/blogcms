<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagesetting $pagesetting
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pagesetting'), ['action' => 'edit', $pagesetting->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pagesetting'), ['action' => 'delete', $pagesetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagesetting->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pagesettings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pagesetting'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pagesettings view content">
            <h3><?= h($pagesetting->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pagename') ?></th>
                    <td><?= h($pagesetting->pagename) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metatitle') ?></th>
                    <td><?= h($pagesetting->metatitle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metakey') ?></th>
                    <td><?= h($pagesetting->metakey) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metades') ?></th>
                    <td><?= h($pagesetting->metades) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pagesetting->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($pagesetting->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($pagesetting->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $pagesetting->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
