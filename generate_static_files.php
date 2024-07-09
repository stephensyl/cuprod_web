<?php
$files = ['index.php', 'about.php', 'contact.php', 'events.php', 'lineup.php', 'music.php', 'resources.php', 'footer.php', 'header.php']; // all PHP files here

foreach ($files as $file) {
    ob_start();
    include $file;
    $content = ob_get_clean();
    $outputFile = str_replace('.php', '.html', $file);
    file_put_contents('static/' . $outputFile, $content);
}
?>
