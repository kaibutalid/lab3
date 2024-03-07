<section style="padding: 110px 0 0 60px; max-height: 100vh; overflow-y: auto; ">
    <h1 style="text-decoration: underline; font-weight: bold;">Comments</h1>

    <?php if (! empty($comments) && is_array($comments)): ?>

        <?php foreach ($comments as $comments_item): ?>

            <h3 style="display: inline-block; background-color: #d8a1c2; padding: 10px 14px 10px 14px; border-radius: 30px; color: #ffffff;"><?= esc($comments_item['username']) ?></h3>

            <div class="main" style="background-color: #f8f8f8; padding: 10px; margin-right: 60px; border-radius: 5px; height: 80px;">
                <?= esc($comments_item['body']) ?>
            </div>

        <?php endforeach ?>

    <?php else: ?>

        <h3>No Comments :(</h3>

        <p>Please add some!.</p>

    <?php endif ?>

    <br>

    <div>
        <div>
            <button style="display: inline-block;padding: 10px 20px;background-color: #926a93;color: #ffffff;box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.1);border-radius: 5px;text-decoration: none;font-size: 16px;cursor: pointer;" onmouseover="this.style.backgroundColor='#d8a1c2';" onmouseout="this.style.backgroundColor='#926a93';">
                <a style="text-decoration:none; color: #ffffff;" onmousedown="this.style.color='#926a93';" href="<?= base_url('comments/new') ?>" >Add Comment</a>
            </button>
        </div>
        <div style="padding: 20px 0px 20px 0px;">
            <button style="display: inline-block;padding: 10px 20px;background-color: #926a93;color: #ffffff;box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.1);border-radius: 5px;text-decoration: none;font-size: 16px;cursor: pointer;" onmouseover="this.style.backgroundColor='#d8a1c2';" onmouseout="this.style.backgroundColor='#926a93';">
                <a style="text-decoration:none; color: #ffffff;" onmousedown="this.style.color='#926a93';" href="<?= base_url('kai') ?>" >Back to Main Page!</a>
            </button>
        </div>
    </div>
</section>