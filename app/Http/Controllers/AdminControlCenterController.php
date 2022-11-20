<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

    public function updatePatientForm($id)
    {
        $user = User::query()->find($id);
        if(!$user)
            return view('errors.404');
        return view('admin.patients.update',['user' => $user]);    }

    public function updatePatient(Request $request,$id)
    {
        // return $id;
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails())
            return redirect('all-patients-to-view')->withErrors($validator)->withInput();

        $user = User::query()->find($id);
        return $user;
//        if(!$user)
//            return view('errors.404');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        session()->flash('success','user updated successfully');
        return redirect()->back();
    }

    public function deletePatient()
    {

    }
}
