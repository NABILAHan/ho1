@extends('hotel')

@section('content')
<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h1 class="intro-text text-center">
                    <strong><h1><B>รายการอาหาร</B></h1></strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="{{asset('images/Bef.jpg')}}" alt=""style="width:800px;height:450px">
                <h2>อาหารเช้า
                    <br>
                    <small>ราคา 160 บาท /ท่าน/มื้อ</small>
                </h2>
                <p>สามารถเลือกเมนูอาหารได้ 1 ชุด / มิ้ออาหาร ฟรีน้ำเปล่าในมื้ออาหาร</p>
                <a href="#" class="btn btn-default btn-lg">เมนู</a>
                <hr>
            </div>
            <div class="col-lg-12 text-center">
                <img class=" img-responsive img-border img-full" src="{{asset('images/sat.jpg')}}" alt=""style="width:800px;height:450px">
                <h2>อาหารว่าง
                    <br>
                    <small>ราคา 50 บาท /ท่าน /มื้อ </small>
                </h2>
                <p>ฟรีน้ำเปล่า</p>
                <a href="#" class="btn btn-default btn-lg">เมนู</a>
                <hr>
            </div>
            <div class="col-lg-12 text-center">
                <img class=" img-responsive img-border img-full" src="{{asset('images/1111.png')}}" alt=""style="width:800px;height:450px">
                
                <h2>อาหารสำหรับหมู่คณะ
                    <br>
                    <small>ราคา 230 บาท /ท่าน /มื้อ </small>
                </h2>
                <p>โต๊ะละ 7 ท่าน (สามารถเลือกเมนูอาหารได้ 1 ชุด / มื้ออาหาร ฟรีน้ำเปล่าในมื้ออาหาร)</p>
                <a href="#" class="btn btn-default btn-lg">เมนู</a>
                <hr>
            </div>
            <div class="col-lg-12 text-center">
                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a>
                    </li>
                    <li class="next"><a href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
@endsection