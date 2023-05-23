<?php

namespace App\Http\Controllers;

use App\Http\Requests\Company\StoreRequest;
use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    use ResponseTrait;
    private object $model;

    public function __construct()
    {
        $this->model = Company::query();
    }


    public function index(Request $request)
    {
        $data = $this->model
            ->Where('name', 'like', '%' . $request->get('q') . '%')
            ->get();

        return $this->successResponse($data);
    }

    public function check($companyName)
    {
        $check =  $this->model
            ->Where('name', $companyName)
            ->exists();

        return $this->successResponse($check);
    }

    public function store(StoreRequest $request)
    {
        try {
            $arr = $request->validated();
            if ($request->hasFile('logo')) {
                $destination_path = 'public/company_logo';
                $image = $request->file('logo');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('logo')->storeAs($destination_path, $image_name);
                $arr['logo'] = $image_name;
            }

            Company::create($arr);
            // return $this->errorResponse('Loi roi');
            return $this->successResponse();
        } catch (\Throwable $th) {
            $message = '';
            if ($th->getCode() === '23000') {
                $message = 'Duplicate company name';
            }

            return $this->errorResponse($message);
        }
    }
}