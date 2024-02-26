@extends('layouts.RegisterTemplate')

@section('content')
    <div class="container">
        <br>
        <form class="border border
         rounded p-5 mt-5" action="{{ route('AddUser') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6 mt-3">
                    <label class="text-primary"> ชื่อ </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-3">
                    <label class="text-primary"> นามสกุล </label>
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="นามสกุล">
                    @error('surname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-5">
                    <label class="text-primary"> ชื่อผู้ใช้ </label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อผู้ใช้">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-5">
                    <label class="text-primary">อีเมล</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label class="text-primary">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="passwordOne" name="passwordOne" placeholder="รหัสผ่าน">
                    @error('passwordOne')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label class="text-primary">รหัสผ่าน อีกครั้ง</label>
                    <input type="password" class="form-control" id="passwordTwo" name="passwordTwo" placeholder="รหัสผ่าน">
                    @error('passwordTwo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <br><br>
            <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
            <input type="button" class="btn btn-danger" value="ยกเลิก" />
        </form>

        <br><br><br>
    </div>
@endsection
