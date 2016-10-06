@extends('hotel')

@section('content')
<div class="mainslide smallmobile">

  <img src="{{asset('images/room/M5.jpg')}}" alt=""style="width:1349px;height:230px">
</div>

    </div>
</div>
</header>
<div class="container">
    <div class="row">
        
            <div class="col-lg-12">
            	<article>
    <form action="." method="post">  
      <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <div class="panel panel-success ">
      <div class="panel-heading" style="color:#003300"><h4>ขั้นตอนที่1: เลือกห้องและวันที่เข้าใช้บริการ </h4></div>
      <div class="panel-body1" style="color:#20B2AA" >
        <center> 
         
          <p>ห้อง : &nbsp; </p> 
          <div class="input-field col m6 col">
          <select name="room">
           <option ></option>
          <option value="ห้องใหญ่" style="background-color: #F2A4F2;color: #000000;">ห้องใหญ่</option>
          <option value="ห้องกลาง" style="background-color: #48A9F3;color: #000000;">ห้องกลาง</option>
          <option value="ห้องเล็ก" style="background-color: #1D04FA;color: #FFFFFF;">ห้องเล็ก</option>
        </select>
        </div>
         <table >
           <tr>
         </tr>
        <tr>
          <td align="right"><p>วันที่เข้า: &nbsp;</p></td>
          <td align="left"><input type="date" name="date"> </td>
        </tr>
        <tr>
          <td align="right"><p>วันที่ออก: &nbsp;</p></td>
          <td align="left"><input type="date" name="date"></td>
        </tr>
        <tr>
          <p>เวลา : &nbsp; <select name="time"></p> 
          <option ></option>
          <option value="กลางวัน" >ภาคกลางวัน</option>
          <option value="กลางคืน" >ภาคกลางคืน</option>
         </select>
         </tr>
        </tr>
      </table>
    </center> 
  </article>
</section>
</div>
<br>
<div class="col-lg-12">
<article>
   <div class="row">
<!-- <div class="alert alert-warning">   -->
   <div class="col-sm-2"></div>
    <div class="col-md-8">
      <div class="panel panel-success">
      <div class="panel-heading" style="color:#003300"> <h4>ขั้นตอนที่2:กรุณาใส่ชื่อผู้เข้าพักและรายละเอียด</h4></div>
      <div class="panel-body1">
  <br>
  <section>
    <center> 
      <table >
        <tr>   
          <td align="right"><p>ชื่อ : &nbsp;</p></td>
          <td align="left"><input name="name"   size="30" class="form-control" placeholder="โปรดใส่ชื่อของท่าน"><br></td>
        </tr>              
        <tr>  
          <td align="right" ><p>นามสกุล : &nbsp;</p></td>  
          <td align="left"><input type="text" class="form-control" name="surname" size="30" placeholder="โปรดใส่นามสกุลของท่าน"><br></td>
        </tr>
        <tr>   
          <td align="right"><p>อีเมล : &nbsp;</p></td>
          <td align="left"><input type="text" class="form-control" name="email" size="30" placeholder="กรุณากรอกอีเมลของท่าน"><br></td>
        </tr>
        <tr>
          <td align="right"><p>เบอร์โทรศัพท์ : &nbsp;</p></td>
          <td align="left"><input type="text" class="form-control" name="phone_Number" size="25"placeholder="กรุณากรอกหมายเลขโทรศัพท์ของท่าน"><br></td>
        </tr>
        <tr>   
          <td align="right"><p>ที่อยู่ : &nbsp;</p></td>
          <td align="left"><input type="text" class="form-control" name="address" size="30" placeholder="กรุณากรอกที่อยู่ของท่าน"><br></td>
        </tr>
        <!-- <tr>   
          <td align="right"><p>ที่อยู่2 : &nbsp;</p></td>
          <td align="left"><input type="text" class="form-control" name="address2" size="30"><br></td>
        </tr> -->
        <tr>   
          <td align="right"><p>รัฐ : &nbsp;</p></td>
          <td align="left"><input type="text" class="form-control" name="state" size="30" ><br></td>
        </tr>
        <tr>   
          <td align="right"><p>เมือง : &nbsp;</p></td>
          <td align="left"><input type="text" class="form-control" name="city" size="30" placeholder="กรุณากรอกเมืองที่ท่านอาศัยอยู่"><br></td>
        </tr>
        <tr>   
          <td align="right"><p>ประเทศ : &nbsp;</p></td>
          <td align="left"><input type="text"  name="country"   class="form-control" size="30" placeholder="กรุณากรอกประเทศของท่าน"><br></td>
        </tr>
        <tr>   
          <td align="right"><p>รหัสไปรษณีย์ : &nbsp;</p></td>
          <td align="left"><input type="text" name="postal_code"  class="form-control" size="10" placeholder="กรุณากรอกรหัสไปรษณีย์ของท่าน"><br></td>
        </tr>
      </table>

      <br>
      <center><button  type="submit"  class="btn btn-default">จองตอนนี้</button></a></br></center>
    </ul>
  </div>
</article>
</form>
 @endsection