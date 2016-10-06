@extends('hotel')

@section('content')
 <section>
                     <div class="mainslide smallmobile">
                      <img src="{{asset('images/room/s1.png')}}" alt=""style="width:1349px;height:553px">
                     </div>

                 </section>
              </nav>

         <div class="wrapper">
              <h1 class="titleDesk">ห้องประชุมใหญ่</h1>
              <div class="acc-content">
                 <p><b>มีจำนวน 2 ห้อง ดั้งนี้</b></p>
                 <li> ห้องประชุม "ริมเล" รองรับลูกค้า 270 - 500 ท่าน</li>
                 <li> ห้องประชุม "ลีลาใหญ่" รองรับลูกค้า 300 - 450 ท่าน</li>
                 
                 <div class="col-sm-4">
                  <p><b>โดยแบ่งราคาออกเป็น 2 ช่วงเวลา ดังนี้</b></p>
                    <ul>
                       <li>ภาคกลางวัน ตั้งแต่ 08.00-17.00น. ราคา 4,000 บาท</li>
                       <li>ภาคกลางคืน ตั้งแต่ 17.00-22.00นใ ราคา 3,500 บาท</li>
                    </ul>
                 </div>
                 
                 <div class="col-sm-5">
                    <div class="ratebox">
                       <!--<p class="rate-text">Rates per night start from</p>
                       <div id="roomArea1"></div>-->
            <a href="{{url('RgMeetingRoom')}}"><button class="book_room">book now</button></a>
                    </div>
                 </div>
                 <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
           </div>
 @endsection