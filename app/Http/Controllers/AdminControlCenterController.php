<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminControlCenterController extends Controller
{
    public function allPatients()
    {
        return view('admin.index');
    }

    public function viewAllPatients()
    {
        $patients = User::query()->get();

        // return $posts = BlogPost::with('author')->all();
        //return  DataTables::of($posts)->addIndexColumn()->make(true);

        return DataTables::of($patients)->addIndexColumn()
            ->setRowClass(function ($row) {
                return $row->id % 2 == 0 ? 'alert-primary' : 'alert-warning' . $row->id;
            })

            ->setRowId(function ($row) {
                return $row->id;
            })
            ->addColumn('action', function ($row) {
                return $btn = '
                <a href="' . Route('update.post', $row->id) . '" class="btn btn-primary">Update</a>
                <a href="' . Route('delete.post', $row->id) . '" class="btn btn-danger mt-2">Delete</a>
                ';
            })
            ->editColumn('created_at' , function(User $post) {
                return $post->created_at->diffForHumans();
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
