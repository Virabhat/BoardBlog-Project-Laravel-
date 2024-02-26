@extends('layouts.LoginTemplate')


@section('content')
    <section>
        <div class="container d-flex align-items-center justify-content-center">
            <div class="card mt-5 p-5">
                <h2 class="text-center"> <img
                        src="https://cdn1.iconfinder.com/data/icons/business-e-commerce-logistics-full-colours-set-1/91/Business_E-commerce__Logistics_C-06-256.png"
                        alt="" width="50" height="50"> : เข้าสู่ระบบ</h2>
                <form class="mt-2" action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">อีเมล</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
