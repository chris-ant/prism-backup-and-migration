<!DOCTYPE html>
<html>
    <body>
        <h1>Hello</h1>
        <p><?= htmlspecialchars($name ?? 'World', ENT_QUOTES, 'UTF-8') ?></p>

        <?php
        ?>
    </body>
</html>
