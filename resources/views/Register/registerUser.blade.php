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


        @if (Session::has('message'))
            <script>
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        swalWithBootstrapButtons.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire({
                            title: "Cancelled",
                            text: "Your imaginary file is safe :)",
                            icon: "error"
                        });
                    }
                });
            </script>
        @endif

        <br><br><br>
    </div>
@endsection
