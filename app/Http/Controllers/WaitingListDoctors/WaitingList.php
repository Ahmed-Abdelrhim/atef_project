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
                <a href="' . Route('accept.doctor', $row->id) . '" class="btn btn-primary">Accept</a>
                <a href="' . Route('reject.doctor', $row->id) . '" class="btn btn-danger mt-2">Reject</a>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function acceptDoctor()
    {

    }

    public function rejectDoctor()
    {

    }
}
