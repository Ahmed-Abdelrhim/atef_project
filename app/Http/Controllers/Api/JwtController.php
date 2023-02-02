<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Encoding\Stream\Enbrotli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JwtController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails())
            return response()->json(['status' => '400', 'msg' => 'failed to register', 'data' => $validator->errors()]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = auth()->user();
            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['token' => $token, 'status' => 200, 'msg' => 'Login Success']);
            //            return response()->json([
            //                'status' => 'error',
            //                'message' => 'Unauthorized',
            //            ], 401);
        }
        return response()->json(['msg' => 'Username or Password Is Incorrect!', 'status' => 403]);

        //        $user = Auth::user();
        //        return $this->respondWithToken($token);


        //        return response()->json([
        //            'status' => 'success',
        //            'user' => $user,
        //            'authorisation' => [
        //                'token' => $token,
        //                'type' => 'bearer',
        //            ]
        //        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:6',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'age' => 'nullable|numeric|between:2,100',
            'gender' => 'required|between:0,1',
            'phone_number' => 'nullable|regex:/(01)[0-9]{9}/'
        ]);

        if ($validator->fails())
            return response()->json(['status' => '400', 'msg' => 'failed to register', 'data' => $validator->errors()]);
        try {
            DB::beginTransaction();
            $user = User::query()->create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'age' => $request->get('age'),
                'gender' => $request->get('gender'),
                'phone_number' => $request->get('phone_number'),
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 400, 'msg' => 'Something went wrong while registration , ty again']);
        }

        return response()->json(['status' => 200, 'msg' => 'User Successfully Created , now you can login']);

        // $token = Auth::login($user);
        //        return response()->json([
        //            'status' => 'success',
        //            'message' => 'User created successfully',
        //            'user' => $user,
        //            'authorisation' => [
        //                'token' => $token,
        //                'type' => 'bearer',
        //            ]
        //        ]);

    }

    public function logout()
    {
        $name = auth()->user()->name;
        Auth::logout();
        return response()->json([
            'status' => 200,
            'message' => 'GoodBye ' . $name . ' hope see you again with us.',
        ]);
    }

    public function getPsa($user_id)
    {
        if (!$user_id || !is_numeric($user_id)) {
            return response()->json(['msg' => 'Send a valid user id', 'status' => 400]);
        }
        $user = User::query()->find($user_id);
        if (!$user) {
            return response()->json(['msg' => 'User with id ' . $user_id . ' not found', 'status' => 400]);
        }

        return response()->json(['data' => $user, 'status' => 200, 'msg' => 'Success']);

    }

    public function addPsaResult(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'psa_result' => 'required|numeric|between:0,5',
            'user_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors(), 'status' => 400]);
        }

        $user_id = $request->user_id;
        $psa_result = $request->psa_result;

        if ($user_id <= 0) {
            return response()->json(['msg' => 'User ID should be valid integer', 'status' => 400]);
        }

        $user = User::query()->find($user_id);
        if (!$user) {
            return response()->json(['msg' => 'User with id ' . $user_id . ' not found', 'status' => 400]);
        }

        $user->psa_result = $psa_result;
        $user->save();

        return response()->json(['msg' => 'Psa result Stored Successfully' , 'status' => 200 ]);
    }


    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
