<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Calendar PHP</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/vendor/fullcalendar/lib/main.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css">
</head>

<body>

    <header class="sticky-top">
        <div class="navbar navbar-dark bg-dark navbar-expand-lg">
            <div class="container">
                <a href="/" class="navbar-brand">Full Calendar</a>
            </div>
        </div>
    </header>
    <main>
        <div class="container my-4">
            <div class="py-2">
                <button class="btn btn-dark" data-toggle="modal" data-target="#add-event">Add Event</button>
            </div>
            <div id="calendar"></div>
        </div>

        <?php include_once(__DIR__ . '/includes/events/add.php') ?>
    </main>
    <footer>
    </footer>

    <script src="/vendor/jquery-3.6.0.min.js"></script>
    <script src="/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="/vendor/moment.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/fullcalendar/lib/main.min.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>