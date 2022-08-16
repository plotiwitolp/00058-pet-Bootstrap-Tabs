<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>00058-pet-Bootstrap-Tabs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <!-- if buttons: ul class="nav nav-pills"  and data-bs-toggle="pill" -->
            <li class="nav-item"><a href="#home" data-bs-toggle="tab" class="nav-link active" aria-controls="home">Home</a></li>
            <li class="nav-item"><a href="#profile" data-bs-toggle="tab" class="nav-link" aria-controls="profile">Profile</a></li>
            <li class="nav-item"><a href="#messages" data-bs-toggle="tab" class="nav-link" aria-controls="messages">Messages</a></li>
            <li class="nav-item"><a href="#settings" data-bs-toggle="tab" class="nav-link" aria-controls="settings">Settings</a></li>
        </ul>
        <div class="tab-content border border-1 border-top-0 p-3">
            <div class="tab-pane active fade show" id="home" aria-labelledby="nav-home-tab">Home tab</div>
            <div class="tab-pane fade" id="profile" aria-labelledby="nav-profile-tab">Profile tab</div>
            <div class="tab-pane fade" id="messages" aria-labelledby="nav-messages-tab">Messages tab</div>
            <div class="tab-pane fade" id="settings" aria-labelledby="nav-settings-tab">Settings tab</div>
        </div>
    </div>




    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>