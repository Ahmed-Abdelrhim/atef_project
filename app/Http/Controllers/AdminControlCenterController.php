<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminControlCenterController extends Controller
{
    public function allPatients()
    {
        return view('admin.patients.index');
    }

    public function viewAllPatients()
    {
        $patients = User::get();
        return DataTables::of($patients)->addIndexColumn()
            ->setRowClass(function ($row) {
                return $row->id % 2 == 0 ? 'alert-primary' : 'alert-warning' . $row->id;
            })

            ->setRowId(function ($row) {
                return $row->id;
            })
            ->addColumn('action', function ($row) {
                return $btn = '
                <a href="' . Route('admin.update.patient', $row->id) . '" class="btn btn-primary">Update</a>
                <a href="' . Route('admin.delete.patient', $row->id) . '" class="btn btn-danger mt-2">Delete</a>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function updatePatient()
    {

    }

    public function deletePatient()
    {

    }
}
