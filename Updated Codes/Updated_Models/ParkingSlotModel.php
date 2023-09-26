<?php

namespace App\Models;

use CodeIgniter\Model;

class ParkingSlotModel extends Model
{
    protected $table = 'parking_slots';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status'];
}