@extends('hotel')

@section('content')
<section>
             <div class="mainslide smallmobile">
              <img src="{{asset('images/room/s2.jpg')}}" alt=""style="width:1349px;height:553px">
            </div>

          </section>
        
        <header>
          
           <div class="wrapper">
            <h1 class="titleDesk">ห้องประชุมกลาง</h1>
            <div class="acc-content">
             <p><b>มีจำนวน 2 ห้อง ดั้งนี้</b></p>
             <li> ห้องประชุม "ประดู่" รองรับลูกค้า 70 - 100 ท่าน</li>
             <li> ห้องประชุม "จัตุรัส" รองรับลูกค้า 80 - 120 ท่าน</li>

             <div class="col-sm-4">
              <p><b>โดยแบ่งราคาออกเป็น 2 ช่วงเวลา ดังนี้</b></p>
              <ul>
               <li>ภาคกลางวัน ตั้งแต่ 08.00-17.00น. ราคา 3,500 บาท</li>
               <li>ภาคกลางคืน ตั้งแต่ 17.00-22.00นใ ราคา 3,00 บาท</li>
             </ul>
           </div>

           <div class="col-sm-5">
            <div class="ratebox">
                       <!--<p class="rate-text">Rates per night start from</p>
                       <div id="roomArea1"></div>-->
                       <a href="https://v4.reservation-system.net/booking/index.aspx?langcd=en&amp;hotelcd=HT12004907"><button class="book_room">book now</button></a>
                     </div>
                   </div>
                   <div class="clearfix"></div>
                 </div>
                 <div class="clearfix"></div>
               </div>
           </header>
           <section id="portfolio">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2>รูปแบบการจัดโต๊ะ</h2>
                  <hr class="star-primary">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 portfolio-item">
                  <div class="caption">
                    <div class="caption-content">
                      <i class="fa fa-search-plus fa-3x"></i>
                    </div>
                  </div>
                  <img src="http://placehold.it/300x200" class="img-responsive" alt="">
                </div>
                <div class="col-sm-4 portfolio-item">

                  <div class="caption">
                    <div class="caption-content">
                      <i class="fa fa-search-plus fa-3x"></i>
                    </div>
                  </div>
                  <img src="http://placehold.it/300x200" class="img-responsive" alt="">
                </div>
                <div class="col-sm-4 portfolio-item">
                  <div class="caption">
                    <div class="caption-content">
                    </div>
                  </div>
                  <img src="http://placehold.it/300x200" class="img-responsive" alt="">
                </div>
                <div class="col-sm-4 portfolio-item">
                  <div class="caption">
                    <div class="caption-content">
                    </div>
                  </div>
                  <img src="http://placehold.it/300x200" class="img-responsive" alt="">
                </div>
                <div class="col-sm-4 portfolio-item">
                  <div class="caption">
                    <div class="caption-content">
                    </div>
                  </div>
                  <img src="http://placehold.it/300x200" class="img-responsive" alt="">
                </a>
              </div>
              <div class="col-sm-4 portfolio-item">
                <div class="caption">
                  <div class="caption-content">
                  </div>
                </div>
                <img src="http://placehold.it/300x200" class="img-responsive" alt="">
              </div>
            </div>
          </div>
        </section>
  @endsection