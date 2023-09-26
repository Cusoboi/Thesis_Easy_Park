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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="card">
                            <div class="card-header">
                                <h4>Entry parkings</h4>
                             </div>
                                    <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>RFID No.</th>
                                                        <th>Plate number</th>
                                                        <th>Time In</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($entries as $entry): ?>
                                                        <tr>
                                                            <td><?= $entry['RFID_NO'] ?></td>
                                                            <td><?= $entry['Plate_NO'] ?></td>
                                                            <td><?= $entry['time_in'] ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="card">
                                <div class="card-header">
                                    <h4>Exit parkings</h4>
                                </div>
                                    <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>RFID No.</th>
                                                        <th>Plate number</th>
                                                        <th>Time Out</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($exits as $exit): ?>
                                                        <tr>
                                                            <td><?= $exit['RFID_NO'] ?></td>
                                                            <td><?= $exit['Plate_NO'] ?></td>
                                                            <td><?= $exit['time_out'] ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                             </tbody>
                                   </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>