<?php

namespace App\Http\Controllers\WaitingListDoctors;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Facades\DataTables;

class WaitingList extends Controller
{
    public function viewWaitingListDoctors()
    {
        if (!Gate::allows('access-to-view-doctors'))
            return view('errors.403');
        return view('doctors.waiting');
    }

    public function dataTables()
    {
        $posts = Doctor::query()->get();
        return DataTables::of($posts)->addIndexColumn()
            ->setRowClass(function ($row) {
                return $row->id % 2 == 0 ? 'alert-primary' : 'alert-warning' . $row->id;
            })
            ->setRowId(function ($row) {
                return $row->id;
            })
            ->addColumn('action', function ($row) {
                return $btn = '

                <a class="btn btn-primary" href="'.route('accept.doctor', $row->id).'">Accept</a>
                <a class="btn btn-danger mt-2 reject" href="'.route('reject.doctor' ,$row->id).'">Reject</a>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function acceptDoctor($doctor_id)
    {
        if (!Gate::allows('access-to-view-doctors'))
            return view('errors.404');

            $doctor = Doctor::query()->find($doctor_id);
        if (!$doctor)
            return view('errors.404');

        return $doctor;
    }

    public function rejectDoctor($doctor_id)
    {
        if (!Gate::allows('access-to-view-doctors'))
            return view('errors.404');
        $doctor = Doctor::query()->find($doctor_id);
        if (!$doctor)
            return view('errors.404');
        return $doctor;
    }
}

// <a href="' . Route('accept.doctor', $row->id) . '" class="btn btn-primary accept">Accept</a>
// <a href="' . Route('reject.doctor', $row->id) . '" class="btn btn-danger mt-2 reject">Reject</a>
