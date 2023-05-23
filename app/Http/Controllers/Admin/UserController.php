<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    private object $model;
    private string $table;

    public function __construct()
    {
        $this->model = User::query();
        $this->table = (new User())->getTable();

        View::share('title', ucwords($this->table));
        View::share('table', $this->table);
    }

    public function index(Request $request)
    {
        $selectedRole    = $request->get('role');
        $selectedCity    = $request->get('city');
        $selectedCompany = $request->get('company');
        // dd($selectedRole);
        $query = $this->model->clone()
            ->with('company:id,name')
            ->latest();
        if (!is_null($selectedRole)) {
            $query->where('role', $selectedRole);
        }
        if (!is_null($selectedCity)) {
            $query->where('city', $selectedCity);
        }
        if (!is_null($selectedCompany)) {
            $query->whereHas('company', function ($q) use ($selectedCompany) {
                return $q->where('id', $selectedCompany);
            });
        }

        // $query = $this->model->clone()
        //     ->When($request->has('role'), function ($q) {
        //         return $q->Where('role', request('role'));
        //     })
        //     ->with('company:id,name')
        //     ->latest();

        // if (!empty($selectedRole) && $selectedRole !== 'All') {
        //     $query->where('role', $selectedRole);
        // }
        // if (
        //     !empty($selectedCity) && $selectedCity !== 'All'
        // ) {
        //     $query->where('city', $selectedCity);
        // }
        // if (!empty($selectedCompany) && $selectedCompany !== 'All') {
        //     $query->whereHas('company', function ($q) use ($selectedCompany) {
        //         return $q->where('id', $selectedCompany);
        //     });
        // }

        $data =  $query->paginate(1)
            ->appends($request->all());

        $roles = UserRoleEnum::asArray();
        // dd($roles);
        $companies = Company::query()
            ->get([
                'id',
                'name',
            ]);

        // dd($companies);

        $cities = $this->model->clone()
            ->distinct()
            ->limit(100)
            ->WhereNotNull('city')
            ->pluck('city');

        // dd($cities);

        return view("admin.$this->table.index", [
            'data' => $data,
            'roles' => $roles,
            'cities' => $cities,
            'companies' => $companies,
            // 'selectedRole' => request('role'),
            'selectedRole' => $selectedRole,
            'selectedCity' => $selectedCity,
            'selectedCompany' => $selectedCompany,
        ]);
    }

    public function show($userId)
    {
        $user = User::query()
            ->findOrFail($userId);

        $title = $user->name;

        return view('admin.users.show', [
            'user' => $user,
            'title' => $title,
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

    public  function destroy($userId)
    {
        User::destroy($userId);
        return redirect()->back();
    }
}