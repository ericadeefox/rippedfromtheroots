<nav class="navbar navbar-toggleable-md navbar-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?= $this->Html->link('Ripped From the Roots',
    ['controller' => 'Pages', 'action' => 'home'],
    [
        'class'=>'logo-no-sidebar accent-font',
    ]);
  ?>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <?= $this->Html->link('News', ['controller' => 'Articles', 'action' => 'index'], ['class'=>'nav-link header-link']) ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link('Shows', ['controller' => 'Shows', 'action' => 'index'], ['class'=>'nav-link header-link']) ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link('Music', ['controller' => 'Albums', 'action' => 'index'], ['class'=>'nav-link header-link']) ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link('Photos', ['controller' => 'Photos', 'action' => 'index'], ['class'=>'nav-link header-link']) ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link('Merch', ['controller' => 'Merch', 'action' => 'index'], ['class'=>'nav-link header-link']) ?>
        </li>
    </ul>
  </div>
</nav>
