<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usercontroll $usercontroll
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usercontroll'), ['action' => 'edit', $usercontroll->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usercontroll'), ['action' => 'delete', $usercontroll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usercontroll->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usercontrolls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usercontroll'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usercontrolls view content">
            <h3><?= h($usercontroll->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usergroup') ?></th>
                    <td><?= $usercontroll->has('usergroup') ? $this->Html->link($usercontroll->usergroup->name, ['controller' => 'Usergroups', 'action' => 'view', $usercontroll->usergroup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Controller') ?></th>
                    <td><?= h($usercontroll->controller) ?></td>
                </tr>
                <tr>
                    <th><?= __('Action') ?></th>
                    <td><?= h($usercontroll->action) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usercontroll->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($usercontroll->status) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
