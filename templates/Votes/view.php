<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vote $vote
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vote'), ['action' => 'edit', $vote->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vote'), ['action' => 'delete', $vote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vote->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Votes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vote'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="votes view content">
            <h3><?= h($vote->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($vote->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vote->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($vote->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($vote->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Voteoptions') ?></h4>
                <?php if (!empty($vote->voteoptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Vote Id') ?></th>
                            <th><?= __('Voption') ?></th>
                            <th><?= __('Vcount') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($vote->voteoptions as $voteoptions) : ?>
                        <tr>
                            <td><?= h($voteoptions->id) ?></td>
                            <td><?= h($voteoptions->vote_id) ?></td>
                            <td><?= h($voteoptions->voption) ?></td>
                            <td><?= h($voteoptions->vcount) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Voteoptions', 'action' => 'view', $voteoptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Voteoptions', 'action' => 'edit', $voteoptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Voteoptions', 'action' => 'delete', $voteoptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voteoptions->id)]) ?>
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
