@extends('dashboard.layouts.app')
@section('title')
    لوحة التحكم| الصفحة الرئيسية
@endsection
@section('content')
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4 text-white bg-primary-gradient">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">-12.4%</span>
                    </div>
                    <div>Users</div>
                </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4 text-white bg-info-gradient">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="fs-4 fw-semibold">
                        <span class="fs-6 fw-normal">40.9%</span>
                    </div>
                    <div>Income</div>
                </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4 text-white bg-warning-gradient">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="fs-4 fw-semibold">
                        <span class="fs-6 fw-normal">84.7%</span>
                    </div>
                    <div>Conversion Rate</div>
                </div>
            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;">
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4 text-white bg-danger-gradient">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="fs-4 fw-semibold">
                        <span class="fs-6 fw-normal">-23.6%</span>
                    </div>
                    <div>Sessions</div>
                </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
@endsection