<!DOCTYPE html>
<html>
<head>
    <title>parking_view</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidenav">
    <a href="<?= base_url('public/Dashboard')?>">Dashboard</a>
    <a href="<?= base_url('public/Users')?>">Parking users</a>
    <a href="<?= base_url('public/ParkingMonitor')?>">Parking slots</a>
    <a href="#">Transaction history</a>
    <a href="#">Logout</a>
</div>

<div class="main">
    <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Parking Slots</div>
                        <div class="card-body">
                            <h1><?= $num_slots ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Users</div>
                        <div class="card-body">
                            <h1><?= $num_users ?></h1>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</div>


</body>
</html>