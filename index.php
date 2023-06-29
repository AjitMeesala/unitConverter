<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta name="description" content="Here's the place where you can convert from one unit to another unit">
    <meta name="keywords" content="Unit Converter">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="author" content="Ajit Meesala">
    <link rel="shortcut icon" href="./assets/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="./assets/favicon_io/site.webmanifest">
    <link rel="apple-touch-icon" href="./assets/favicon_io/apple-touch-icon.png">
    <link rel="stylesheet" href="./css/button.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary shadow">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="./index.php">
            <img src="./assets/favicon_io/favicon-32x32.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <b><i>Unit Converter</i></b>
            </a>
        </div>
    </nav>
    <div class="mt-5 mx-auto w-75 text-center">
        <h2><b><i><u>Feet to Inch</u></i></b></h2>
    </div>
    <div class="mx-auto mt-5 w-75 bg-secondary bg-gradient rounded p-3">
        <div class="input-group mb-3">
            <input type="number" placeholder="1.0000" name="input1" id="input1" class="form-control" aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1"><b>ft</b></span>
        </div>
        <div class="text-center">
            <svg class="mb-3" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 15C14.7761 15 15 14.7761 15 14.5V2.70711L18.1464 5.85355C18.3417 6.04882 18.6583 6.04882 18.8536 5.85355C19.0488 5.65829 19.0488 5.34171 18.8536 5.14645L14.8536 1.14645C14.6583 0.951184 14.3417 0.951184 14.1464 1.14645L10.1464 5.14645C9.95118 5.34171 9.95118 5.65829 10.1464 5.85355C10.3417 6.04882 10.6583 6.04882 10.8536 5.85355L14 2.70711V14.5C14 14.7761 14.2239 15 14.5 15Z" fill="blue" stroke="blue" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 1C5.77614 1 6 1.22386 6 1.5V13.2929L9.14645 10.1464C9.34171 9.95118 9.65829 9.95118 9.85355 10.1464C10.0488 10.3417 10.0488 10.6583 9.85355 10.8536L5.85355 14.8536C5.65829 15.0488 5.34171 15.0488 5.14645 14.8536L1.14645 10.8536C0.951184 10.6583 0.951184 10.3417 1.14645 10.1464C1.34171 9.95118 1.65829 9.95118 1.85355 10.1464L5 13.2929V1.5C5 1.22386 5.22386 1 5.5 1Z" fill="blue" stroke="blue" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="input-group mb-5">
            <input type="number" placeholder="12.0000" name="input2" id="input2" class="form-control" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2"><b>in</b></span>
        </div>
        <div class="text-center">
            <button type="button" class="button" name="button" id="button"><b><i>Reset</i></b></button>
        </div>
    </div>
</body>
<script src="./js/feet_to_inch.js"></script>
</html>