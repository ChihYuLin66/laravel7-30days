@extends('layouts.app')

@section('page-style')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">姓名</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" id="name" value="{{ old("user", $user->name)}}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">性別</label>

                            <div class="col-md-6">
                                <select class="form-control" name="gender" id="gender">
                                    <option value="male"   {{ "male" == old('gender', optional($user->profile)->gender ) ? 'selected' : '' }} >male</option>
                                    <option value="female" {{ "female" == old('gender', optional($user->profile)->gender ) ? 'selected' : '' }} >female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">生日</label>

                            <div class="col-md-6">
                                <input type="date" name="birthday" id="birthday" class="form-control" value="{{ old('birthday', optional(optional($user->profile)->birthday)->format('Y-m-d'))}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">地址</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address" id="address" value="{{ old('address', optional($user->profile)->address)}}">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    更新
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')

@endsection