<section style="padding-left: 80px; padding-top: 110px;">
    <h2><?= esc($title) ?></h2>

    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <form action=" <?php echo site_url('comments'); ?> " method="post">
        <?= csrf_field() ?>

        <label for="username">Username</label>
        <input type="input" name="username" value="<?= set_value('username') ?>">
        <br>

        <label for="body">Text</label>
        <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
        <br>

        <input type="submit" name="submit" value="Add a Comment">
    </form>
</section>