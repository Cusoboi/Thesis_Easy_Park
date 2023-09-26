<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
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
<div class ="main">
   <div>
   <h1>Parking Slots</h1>
    <?php foreach ($slots as $slot): ?>
        <form method="post" action="<?= base_url('public/ParkingSlotController/update-status/' . $slot['id']) ?>">
            <button type="submit" style="background-color: <?= $slot['status'] == 'free' ? 'green' : 'red' ?>;">
                <?= $slot['slot_name'] ?>
            </button>
        </form>
    <?php endforeach; ?>
   </div>
</div>


</body>
</html>