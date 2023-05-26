@extends('dashboard.layouts.app')
@section('title')
    لوحة التحكم | الإعدادات
@endsection

@section('content')
    <h3>تغيير كلمة المرور</h3>
    <hr>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="post" action="{{ route('dashboard.setting.update', Auth::user()->id) }}">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">كلمة المرور القديمة</label>
                    <input type="password" class="form-control mt-1 @error('old_password') is-invalid @enderror"
                        name="old_password" placeholder="*******" autofocus>
                    @error('old_password')
                        <strong class="lead text-danger">{{ $message }}</strong>
                    @enderror
                    @if (session('error'))
                        <strong class="text-danger">{{ session('error') }}</strong>
                    @endif
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">كلمة المرور الجديدة</label>
                    <input type="password" class="form-control mt-1" name="new_password" placeholder="*******">
                    @error('new_password')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">تأكيد كلمة المرور</label>
                    <input type="password" class="form-control mt-1" name="new_password_confirmation" placeholder="*******">
                    @error('new_password_confirmation')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-lg text-white mt-2">حفظ</button>
    </form>
@endsection
