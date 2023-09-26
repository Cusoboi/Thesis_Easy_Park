<?php namespace App\Models;

use CodeIgniter\Model;

class ParkingMonitorModel extends Model
{
    protected $table = 'Parking_users';
    protected $primaryKey = 'RFID_NO';
    protected $allowedFields = ['RFID_NO', 'Plate_NO', 'time_in','time_out'];

    public function getSortedParkingIn()
    {
        return $this->orderBy('time_in', 'desc')->findAll();
    }
    public function getSortedParkingOout()
    {
        return $this->orderBy('time_out', 'desc')->findAll();
    }
}