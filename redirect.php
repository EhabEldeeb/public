<?php

// Example usage: redirect.php?url=https://www.ehabeldeeb.com&delay=10

define('DEFAULT_URL', "https://www.ehabeldeeb.com");
define('REDIRECT_URL', $_GET['url'] ?? DEFAULT_URL);
define('DELAY', $_GET['delay'] ?? 5);
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Redirect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="refresh" content="<?php echo DELAY; ?>; URL=<?php echo REDIRECT_URL; ?>">
</head>

<body>
    <script>
        var seconds = <?php echo DELAY; ?>;
        var clearIntervalVar;
        function redirect() {
            window.location.href = '<?php echo REDIRECT_URL; ?>';
        }

        function updateSecs() {
            document.getElementById("seconds").innerHTML = seconds;
            seconds--;
            if (seconds == 0) {
                clearInterval(clearIntervalVar);
                redirect();
            }
        }

        function countdownTimer() {
            clearIntervalVar = setInterval(function () {
                updateSecs()
            }, 1000);
        }

        countdownTimer();
    </script>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">External Link</h1>
            <p>You should be automatically redirected in <span id="seconds">
                    <?php echo DELAY; ?> </span> seconds.</p>
            <p><a href="<?php echo REDIRECT_URL; ?>">Click here if you are not redirected automatically.</a></p>
        </div>
    </div>
</body>

</html>