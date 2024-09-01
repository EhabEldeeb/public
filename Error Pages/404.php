<?php
define('SITE_URL', "https://www.ehabeldeeb.com");
http_response_code(404);
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 - Page Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">Oops!</span> Page not found.</p>
            <p class="lead">
                You may not be able to visit this page due to one of the following reasons:
            <ol style="text-align:left">
                <li>An out-of-date bookmark/favourite.</li>
                <li>A search engine that has an out-of-date listing for this site.</li>
                <li>A mistyped address.</li>
                <li>You have no access to this page.</li>
                <li>The requested resource was not found.</li>
                <li>An error has occurred while processing your request.</li>
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