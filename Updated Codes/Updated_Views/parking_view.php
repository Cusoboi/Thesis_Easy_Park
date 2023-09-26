<!DOCTYPE html>
<html>
<head>
    <title>parking_view</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
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
                                <h4>Recent parkings</h4>
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
                                            <?php foreach ($cars as $car): ?>
                                                <tr>
                                                    <td><?= $car['RFID_NO'] ?></td>
                                                    <td><?= $car['Plate_NO'] ?></td>
                                                    <td><?= $car['time_in'] ?></td>
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
                    
                        <div class="parking-layout">
                            <div class="parking-row left-parking">
                            <?php foreach ($parking_slots as $slot) : ?>
                                <?php if ($slot['slot_number'] <= 3) : ?>
                                    <div class="parking-slot <?php echo $slot['status'] ?>" data-slot-id="<?php echo $slot['slot_number'] ?>" onclick="updateSlotStatus(<?php echo $slot['id'] ?>)">
                                        <?php echo $slot['slot_number'] ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </div>
                            <div class = "gap"></div>
                            <div class="parking-row right-parking">
                                <?php foreach ($parking_slots as $slot) : ?>
                                    <?php if ($slot['slot_number'] > 3) : ?>
                                        <div class="parking-slot <?php echo $slot['status'] ?>" data-slot-id="<?php echo $slot['slot_number'] ?>" onclick="updateSlotStatus(<?php echo $slot['id'] ?>)">
                                            <?php echo $slot['slot_number'] ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>