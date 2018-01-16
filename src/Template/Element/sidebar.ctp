<div class="content col-lg-2 col-md-3" align="center">
    <h1 class="logo-no-sidebar accent-font">
        <?= $this->Html->link('Erica Dee Fox',
            ['controller' => 'Pages', 'action' => 'home']);
        ?>
    </h1>
    <?php if ($erica): ?>
        <div class="content" align="center">
            <h5>Admin area!</h5>
            <?= $this->Html->link('Add a New Blog Post',
                ['controller' => 'Articles', 'action' => 'add'],
                ['class' => 'sidebar-link']
            ) ?>
            <?= $this->Html->link('Add a New Icon',
                ['controller' => 'Icons', 'action' => 'add'],
                ['class' => 'sidebar-link']
            ) ?>
            <?= $this->Html->link('Add a New Site',
                ['controller' => 'Sites', 'action' => 'add'],
                ['class' => 'sidebar-link']
            ) ?>
            <?= $this->Html->link('Add a New Talk',
                ['controller' => 'Talks', 'action' => 'add'],
                ['class' => 'sidebar-link']
            ) ?>
            <?= $this->Html->link('Edit Front Page Bio',
                ['controller' => 'Users', 'action' => 'account'],
                ['class' => 'sidebar-link']
            ) ?>
            <?= $this->Html->link('Icons',
                ['controller' => 'Icons', 'action' => 'index'],
                ['class' => 'sidebar-link']
            ) ?>
            <?= $this->Html->link('View Blog Drafts',
                ['controller' => 'Articles', 'action' => 'drafts'],
                ['class' => 'sidebar-link']
            ) ?>
        </div>
    <?php endif ?>
    <div class="content" align="center">
        <h4><?= $this->Html->link('Blog',
                ['controller' => 'Articles', 'action' => 'index']
            ) ?>
        </h4>
    <?php if ($latestPost): ?>
            <h5>Most Recent Post</h5>
            <?php
            $slug = strtolower($latestPost->title);
            $slug = explode (' ', $slug);
            $slug = implode ($slug, '-');
            ?>
            <?= $this->Html->link($latestPost->title,
                ['controller' => 'Articles', 'action' => 'view', $latestPost->id, $slug],
                ['class' => 'sidebar-link']
            ) ?>
            <?php if ($latestPost->icon_id): ?>
                <?= $this->Html->image('icons/' . $latestPost->icon['file'], [
                    'alt' => $latestPost->icon['name']
                ]) ?>
            <?php endif ?>
    <?php endif ?>
    </div>
    <div class="content" align="center">
        <h4><?= $this->Html->link('Sites',
                ['controller' => 'Sites', 'action' => 'index']
            ) ?>
        </h4>
    </div>
    <div class="content" align="center">
        <h4><?= $this->Html->link('Talks',
                ['controller' => 'Talks', 'action' => 'index']
            ) ?>
        </h4>
    </div>
</div>
