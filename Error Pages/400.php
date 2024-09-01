<?php
define('SITE_URL', "https://www.ehabeldeeb.com");
http_response_code(400);
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>400 - Bad Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">400</h1>
            <p class="fs-3"> <span class="text-danger">Oops!</span> Bad Request.</p>
            <p class="lead">
                the server cannot or will not process the request due to one of the following reasons:
            <ol style="text-align:left">
                <li>Malformed request syntax.</li>
                <li>Invalid request message framing.</li>
                <li>Deceptive request routing.</li>
            </ol>
            </p>
            <p>
                <a href="javascript:history.back();" class="btn btn-danger">Go Back</a>
                <a href="<?php echo SITE_URL; ?>" class="btn btn-primary">Go Home</a>
            </p>
        </div>
    </div>
</body>

</html>