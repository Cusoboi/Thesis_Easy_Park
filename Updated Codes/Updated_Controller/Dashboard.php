<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ParkingSlotModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $parkingSlotModel = new ParkingSlotModel();
        
        $data['num_users'] = $userModel->countAll();
        $data['num_slots'] = $parkingSlotModel->countAll();


        return view('DashboardView', $data);
    }
}