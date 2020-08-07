<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="{{url('web/daftar/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('web/daftar/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{url('web/daftar/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('web/daftar/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('web/daftar/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
@if (Session::has('success'))
<div class="alert alert-success">
{{Session::get('success')}}
</div>

    
@endif
      <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                <form action="{{route("changeStatus")}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama</label>
                                    <input class="input--style-4" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Jenis kelamin</label>
                                    <input class="input--style-4" type="text" name="jenis_k">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="tlp">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Alamat</label>
                                    <input class="input--style-4" type="text" name="alamat">
                                </div>
                            </div>
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">password</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                            </div>  
                        </div>   
                        <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="pelatihan_id">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    @foreach (App\pelatihan::all() as $item)/
                                    <option value="{{$item->id}}">{{$item->nama_pelatihan}}</option>
                                    @endforeach
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="{{url('web/daftar/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{url('web/daftar/vendor/select2/select2.min.js')}}"></script>
    <script src="{{url('web/daftar/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{url('web/daftar/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{url('web/daftar/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->