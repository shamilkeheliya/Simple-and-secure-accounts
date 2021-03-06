<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);
if (! $error)
{
    $error = 'Oops! An unknown error happened.';
}
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Secure Accounts: Error</title>
        <meta name="description" content="A simple and modern php login framework with data-filtering and encryption.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/icons/icon.png">

        <!-- Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="css/vendor/normalize.css" />
        <link type="text/css" rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <div class="grid-container">
            <div class="grid-item">
                <h1>There was a problem</h1>
                <p class="error"><?php echo $error; ?></p>
            </div>
        </div>
    </body>
</html>