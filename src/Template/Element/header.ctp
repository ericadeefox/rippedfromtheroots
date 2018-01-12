<nav class="navbar navbar-toggleable-md navbar-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php if ($this->request->getParam('action') != 'home'): ?>
    <?= $this->Html->link('Ripped From the Roots',
      ['controller' => 'Pages', 'action' => 'home'],
      [
          'class'=>'logo-no-sidebar accent-font',
      ]);
    ?>
  <?php endif ?>
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
      <ul class="navbar-nav float-right">
          <li class="nav-item">
              <a href="https://www.facebook.com/rippedfromtheroots">
                  <img src="/img/icons/facebook.png" />
                  <span class="sr-only">
                      Visit our Facebook Page
                  </span>
              </a>
          </li>
          <li class="nav-item">
              <a href="https://www.youtube.com/results?search_query=ripped+from+the+roots+muncie">
                  <img src="/img/icons/you-tube.png" />
                  <span class="sr-only">
                      Check us out on Youtube
                  </span>
              </a>
          </li>
      </ul>
  </div>
</nav>
