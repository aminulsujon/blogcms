<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usergroup $usergroup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usergroup'), ['action' => 'edit', $usergroup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usergroup'), ['action' => 'delete', $usergroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usergroup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usergroups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usergroup'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usergroups view content">
            <h3><?= h($usergroup->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($usergroup->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usergroup->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Usercontrolls') ?></h4>
                <?php if (!empty($usergroup->usercontrolls)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Usergroup Id') ?></th>
                            <th><?= __('Controller') ?></th>
                            <th><?= __('Action') ?></th>
                            <th><?= __('Status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usergroup->usercontrolls as $usercontrolls) : ?>
                        <tr>
                            <td><?= h($usercontrolls->id) ?></td>
                            <td><?= h($usercontrolls->usergroup_id) ?></td>
                            <td><?= h($usercontrolls->controller) ?></td>
                            <td><?= h($usercontrolls->action) ?></td>
                            <td><?= h($usercontrolls->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Usercontrolls', 'action' => 'view', $usercontrolls->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Usercontrolls', 'action' => 'edit', $usercontrolls->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usercontrolls', 'action' => 'delete', $usercontrolls->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usercontrolls->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($usergroup->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Usergroup Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usergroup->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->usergroup_id) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->status) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
