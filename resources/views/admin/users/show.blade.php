@extends('layout.master') @push('css')

<style>
    .error {
        color: red !important;
    }

    input[data-switch]:checked+label:after {
        left: 90px;
    }

    input[data-switch]+label {
        width: 110px;
    }
</style>
@endpush @section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div id="div-error" class="alert alert-danger d-none"></div>
            <div class="card-body">
                <form class="form-horizontal" action="{{route('store', $user->id)}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name </label>
                        <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Show/Hide Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" name="password" class="form-control"
                                value="{{$user->password}}">
                            <div class="input-group-append" data-password="false">
                                <div class="input-group-text">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{$user->phone}}">
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" class="form-control" value="{{$user->city}}">
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" id="gender" name="gender" class="form-control"
                            value="{{$user->gender_name}}">
                    </div>
                    <div class="form-group">
                        <label>Avatar</label>
                        <input type="file" name="avatar" accept="image/*" class="form-control-file" />
                        <img id="pic" />
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" id="btn-submit">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection @push('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>

@endpush