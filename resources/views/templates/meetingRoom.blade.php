@extends('hotel')

@section('content')
<section>
 <div class="mainslide smallmobile">

  <img src="{{asset('images/room/s4.jpg')}}" alt=""style="width:1349px;height:230px">
</div>

</section>

<div class="container">
<div class="row">
  <div class="box">
    <div class="col-lg-12">
      <hr>
      <h1 class="intro-text text-center">
        <strong>ห้องสัมมนา & ห้องประชุม</strong>
      </h1>
      <hr>
    </div>
    <div class="container">
      <div class="col-lg-12 ">
          <div class="col-sm-4 team-grids">
          
            <a href="{{url('Buffet')}}"><img  src="{{asset('images/room/meeting-4.jpg')}}" class="img-thumbnail zoom-img"  alt="" ></a>
            <div class="caption">
            <h3><br>ห้องประชุมเล็ก</br></h3>
            </div>
          </div>
          <div class="col-sm-4 team-grids">
           <a href="{{url('MeetingRoom1')}}"><img src="{{asset('images/room/m1.jpg')}}" class="img-thumbnail zoom-img" alt=""></a>
           <h3><br>ห้องประชุมใหญ่</br></h3>

         </div>
         <div class="col-sm-4 team-grids">
          <a href="{{url('MeetingRoom2')}}"><img  src="{{asset('images/room/rooms.png')}}" class="img-thumbnail zoom-img" alt=""></a>
          <h3><br>ห้องประชุมกลาง</br> </h3>  
        </div>

      </div>
    </div>
  </div>

</div>

<div class="wrapper">

  <h2 class="intro-text text-Right">
    <strong>หมายเหตุ</strong>: ในห้องประชุมฟรีอุปกรณ์ คอมพิวเตอร์ Notebook, เครื่องฉายโปรเจคเตอร์ LCD, ไมล์พร้อมเครื่องขยายเสียง
  </h2>
  <br>ในกรณีที่ลูกค้าทานอาหาร 10 โต๊ะขึ้นไป ฟรีห้องประชุม 3 ชั่วโมง หากใช้เกินเวลา ทางรีสอร์จำเป็นต้องคิดค่าบริการส่วนที่เกินต่อชั่วโมงตามขนาดห้องประชุม ดังนี้
  <canter> <li type="disc"> ห้องประชุมใหญ่ ชั่วโมงละ 500 บาท</li>
   <li type="disc"> ห้องประชุมกลาง ชั่วโมงละ 400 บาท</li>
   <li type="disc"> ห้องประชุมเล็ก ชั่วโมงละ 300 บาท</li></canter> 
   <br>ในกรณีที่ลูกค้าทานอาหาร 15 โต๊ะ ขึ้นไป ฟรีห้องประชุม</br>
   <br>ในกรณีที่ลูกค้าใช้ห้องประชุมทั้งวัน (ภาคกลางวันและภาคกลางคืน) และนำป้ายมาเอง ทางรีสอร์ทให้ส่วนลดค่าห้องประชุม 20%</br>
   <br>ในกรณีที่ลูกค้านำอาหารว่าง (เบรก) มาเอง ทางรีสอร์ทจำเป็นต้องคิดค่าบริการ 20 บาท/ท่าน</br>
   <br>
   <br>
   <br>
 </div>
</div>

@endsection