<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>PHP Test Page</h1>
        <?php echo '<p>Hello World</p>'; ?>
        <h2>PHP Info</h2>
        <?php
            if (str_contains($_SERVER['HTTP_USER_AGENT'], 'curl')) {
                echo '<p>Running in CLI mode</p>';
            } else {
                echo '<p>Running in web mode</p>';
            }
        ?>
    </body>
</html>