<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <h3><?= esc($guest_item['title']) ?></h3>

        <div class="main">
            <?= esc($guest_item['body']) ?>
        </div>
        <p><a href="./guest/<?= esc($guest_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No GuestS :(</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>