<?php
    include_once("../config.php");

    $request = explode("/", $_SERVER['REQUEST_URI']);
    $page = strtolower($request[1]);

    if (!strlen($page)) {
        $page = "home";
    }

    if (file_exists("pages/" . $page . ".php")) {
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
    <title>Workout Tracker - <?php echo ucfirst($page); ?></title>
</head>
<body>

<?php
    }
    else {
        http_response_code(404);
?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
    <title>Workout Tracker - 404</title>
</head>
<body>
        <h1>404 - Not Found</h1>
        <p>The requested page does not exist on the server.</p>
</body>
</html>

<?php
        exit(1);
    }
?>