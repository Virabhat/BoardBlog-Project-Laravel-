@extends('layouts.LandingTemplate')

@section('content')
    <div class="container border border rounded p-3 mt-3 mb-5">
        <div class="jumbotron  rounded-2">
            <div class="text-center">
                <h1 class="display-4">
                    <img src="https://cdn1.iconfinder.com/data/icons/business-e-commerce-logistics-full-colours-set-1/91/Business_E-commerce__Logistics_C-06-256.png"
                        alt="" width="50" height="50">
                    : เว็บบอร์ด BoardBlog.com
                </h1>
                <p class="lead">กระทู้ ถามตอบ ปัญหา ความรู้ ข้อสงสัย ประสบการ์ณ เรื่องต่างๆ จิปาถะ</p>
                <span class="badge badge-pill badge-primary">Primary</span>
                <span class="badge badge-pill badge-secondary">Secondary</span>
                <span class="badge badge-pill badge-success">Success</span>
                <span class="badge badge-pill badge-danger">Danger</span>
                <span class="badge badge-pill badge-warning">Warning</span>
                <span class="badge badge-pill badge-info">Info</span>
                <span class="badge badge-pill badge-dark">Dark</span>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-sm-6">
                <div class="card mb-3">
                    <img class="card-img-top"
                        src="https://www.elegantthemes.com/blog/wp-content/uploads/2017/07/bbPress-how-to-use-FT-shutterstock_410930350-robuart.png"
                        alt="Card image cap" width="250" height="250">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card mb-3">
                    <img class="card-img-top"
                        src="https://static.vecteezy.com/system/resources/previews/003/009/863/original/cute-student-standing-front-of-board-cartoon-icon-illustration-vector.jpg"
                        alt="Card image cap" width="250" height="250">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-5">
            <div class="col-sm-6">
                <div class="card  border border-secondary text-center">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card  border border-secondary text-center">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
