<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use App\Http\Requests\Auth\RegisteringRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\UserProfileRequest;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    use ResponseTrait;
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        $roles = UserRoleEnum::getRolesForRegister();
        return view('auth.register', [
            'roles' => $roles,
        ]);
    }

    public function callback($provider)
    {
        $data = Socialite::driver($provider)->user();

        $user = User::query()
            ->Where('email', $data->getEmail())
            ->first();
        $checkExists = true;

        if (is_null($user)) {
            $user = new User();
            $user->email = $data->getEmail();
            $user->role  = UserRoleEnum::APPLICANT;
            $checkExists = false;
        }
        $user->name = $data->getName();
        $user->avatar = $data->getAvatar();

        Auth::login($user, true);
        // if ($checkExists) {
        $role = getRoleByKey($user->role);
        if ($role === 'admin') {
            return redirect()->route("$role.welcome");
        } else if ($role === 'applicant') {
            return redirect()->route("$role.index");
        }
        // return redirect()->route("$role.welcome");
        // }

        // return redirect()->route('register');
    }

    public function registering(RegisteringRequest $request)
    {
        $password = Hash::make($request->get('password'));
        $role     = $request->get('role');

        if (auth()->check()) {
            User::where('id', auth()->user()->id)
                ->update([
                    'password' => $password,
                    'role'     => $role,
                ]);
        } else {
            $user = User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => $password,
                'role'     => $role,
            ]);
            Auth::login($user);
        }
        dd(1);
        $role = getRoleByKey($role);

        if ($role === 'admin') {
            return redirect()->route("$role.welcome");
        } else if ($role === 'applicant') {
            return redirect()->route("$role.index");
        }
        // return $this->errorResponse('Trùng email is invalid');
        // return redirect()->route("register");
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        return redirect()->route('login');
    }

    public function processLogin(Request $request)
    {
        try {
            // dd(User::query()->get());
            $user = User::query()
                ->Where('email', $request->get('email'))
                ->firstOrFail();

            if (Hash::check($request->get('password'), $user->password)) {
                Auth::login($user);
                $role     = auth()->user()->role;
                $role = getRoleByKey($role);
                if ($role === 'admin') {
                    return redirect()->route("$role.welcome");
                } else if ($role === 'applicant') {
                    return redirect()->route("$role.index");
                }
            }
            // Auth::login($user);
            // $role     = auth()->user()->role;
            // $role = getRoleByKey($role);

            // return redirect()->route("$role.welcome");
        } catch (\Throwable $e) {
            return redirect()->route('login');
        }
    }

    public function profile($userId)
    {
        $user = User::query()
            ->findOrFail($userId);

        // dd($user->gender_name);
        return view('edit', [
            'user' => $user,
        ]);
    }

    public function store(UserProfileRequest $request, $profileId)
    {
        try {
            $arr = $request->validated();
            $arr['password'] = Hash::make($request->get('password'));

            if ($request->hasFile('avatar')) {
                $destination_path = 'public/avatars';
                $image = $request->file('avatar');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('avatar')->storeAs($destination_path, $image_name);
                $arr['avatar'] = $image_name;
            }

            $object = User::find($profileId);
            $object->name = $arr['name'];
            $object->email = $arr['email'];
            $object->password = $arr['password'];
            $object->city = $arr['city'];
            $object->phone = $arr['phone'];
            $object->gender = ($arr['gender'] === 'Male') ? 0 : 1;
            $object->avatar = $arr['avatar'];
            // dd($object->toArray());
            $object->save();
            // return $this->successResponse();
            return redirect()->back();
        } catch (\Throwable $th) {
            return $this->errorResponse();
        }
    }
}
