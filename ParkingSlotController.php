<?php

namespace App\Controllers;

use App\Models\ParkingSlotModel;
use CodeIgniter\Controller;

class ParkingSlotController extends Controller
{
    public function index()
    {
        $data['slots'] = (new ParkingSlotModel())->findAll();
        return view('ParkingSlotView', $data);
    }

    public function updateStatus($id)
    {
        $slot = (new ParkingSlotModel())->find($id);
        if (!$slot) {
            return redirect()->to(base_url('public/ParkingSlotController/'));
        }

        $status = $slot['status'] == 'free' ? 'taken' : 'free';
        (new ParkingSlotModel())->update($id, ['status' => $status]);
        return redirect()->to(base_url('public/ParkingSlotController/'));
    }
}