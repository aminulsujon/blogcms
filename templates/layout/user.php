<!DOCTYPE html>
<html>
  <head>
      <?= $this->element('meta');?>
      <?= $this->Html->css('bootstrap.min.css') ?>
      <?= $this->Html->css('custom.css') ?>

  </head>
  <body>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <?= $this->Html->script('jquery-3.4.1.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>
  </body>
</html>
