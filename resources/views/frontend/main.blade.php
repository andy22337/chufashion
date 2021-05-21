@extends('frontend.all')
@section('title', 'Home')   {{-- 因應不同頁面給予不同title --}}
@section('content')



<!-- 輪播 -->
<div>
    
    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img width="100%" class="d-block img-fluid" src="./img/Coverphoto1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img width="100%" class="d-block img-fluid" src="./img/Coverphoto2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img width="100%" class="d-block img-fluid" src="./img/Coverphoto3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

    
</div>
<!-- 輪播結束 -->


<div style="padding:0% 5% 0% 5%">
  <!-- C H U 新 聞 報 -->
  <div style="font-weight:lighter;width:100%;text-align:center;margin:5% 0% 5% 0%">
      <span style="font-size:2vw;color:#b81e20">C H U 新 聞 報</span>
      <br>
      <span style="font-size:1.2vw;color:#ffffff;background-color:#b81e20;border-radius:20px;">　　CHU NEWS　　</span>
      <br><br><br>
      <table width="100%" style="text-align:center">
      <tr>
          <td style="width:50%">
              <img src="./img/test1.jpg" style="width:95%">
          </td>
          <td style="width:50%;">
              <img src="./img/test1.jpg" style="width:95%">
          </td>
      </tr>
      </table>
  </div>
  <!-- C H U 新 聞 報end -->


  <!-- C H U 新 品 到 -->
  <div style="font-weight:lighter;width:100%;text-align:center;margin:5% 0% 5% 0%">
      <!-- <span style="font-size:45px;color:#b81e20">C H U 新 品 到</span>
      <br><br>
      <span style="font-size:25px;color:#ffffff;background-color:#b81e20;border-radius:20px;">　　NEW ARRIVAL　　</span>
      <br><br>
      <span style="font-size:35px;color:#b81e20;border:1px #b81e20 solid;">　本週上架 New fashion　</span>
      <br>
      <span style="font-size:20px;color:#b81e20;">　　MORE+　　</span> -->
      <img src="./img/UI/newarrival.png" style="width:20vw">
      <br>
      <a href="/itemlist"><img src="./img/UI/more.png" style="width:18vw"></a>
      <br><br>

      <div class="row">

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                <a href="/itemdetail"><img src="./img/fb/1.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.1rem;">The best</p>
                    <p style="margin-bottom:0.1rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/2.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.3rem;">The best</p>
                    <p style="margin-bottom:0.3rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/3.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.3rem;">The best</p>
                    <p style="margin-bottom:0.3rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/4.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.3rem;">The best</p>
                    <p style="margin-bottom:0.3rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

      </div>

  </div>
  <!-- C H U 新 品 到end -->

  <!-- H O T 熱 銷 款 -->
  <div style="font-weight:lighter;width:100%;text-align:center;margin:5% 0% 5% 0%">
      <!-- <span style="font-size:45px;color:#b81e20">H O T 熱 銷 款</span>
      <br><br>
      <span style="font-size:25px;color:#ffffff;background-color:#b81e20;border-radius:20px;">　　HOT SALE　　</span>
      <br><br>
      <span style="font-size:45px;color:#b81e20;border:1px #b81e20 solid;">　　潮流衣著 COATS&CLOTHES　　</span>
      <br>
      <span style="font-size:30px;color:#b81e20;">　　MORE+　　</span> -->

      <img src="./img/UI/hot.png" style="width:20vw">
      <br>
      <a href="/itemlist"><img src="./img/UI/more.png" style="width:20vw"></a>
      <br>

      <div class="row">

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/1.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.1rem;">The best</p>
                    <p style="margin-bottom:0.1rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/2.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.3rem;">The best</p>
                    <p style="margin-bottom:0.3rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/3.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.3rem;">The best</p>
                    <p style="margin-bottom:0.3rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/4.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.3rem;">The best</p>
                    <p style="margin-bottom:0.3rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

      </div>

  </div>
  <!-- H O T 熱 銷 款end -->

  <!-- 時尚褲裙 PANTS&SKIRTS -->
  <div style="font-weight:lighter;width:100%;text-align:center;margin:5% 0% 5% 0%">
      <!-- <span style="font-size:45px;color:#b81e20;border:1px #b81e20 solid;">　　時尚褲裙 PANTS&SKIRTS　　</span>
      <br>
      <span style="font-size:30px;color:#b81e20;">　　MORE+　　</span> -->

      <img src="./img/UI/pants.png" style="width:20vw">
      <br>
      <a href="/itemlist"><img src="./img/UI/more.png" style="width:20vw"></a>
      <br>

          <div class="row">

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/1.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.1rem;">The best</p>
                    <p style="margin-bottom:0.1rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/2.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.3rem;">The best</p>
                    <p style="margin-bottom:0.3rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/3.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.3rem;">The best</p>
                    <p style="margin-bottom:0.3rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
              <div>
                  <a href="/itemdetail"><img src="./img/fb/4.jpg" alt="" width="100%"></a>
                  <div>
                    <br>
                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">
                    

    
                    
                    <p style="margin-bottom:0.3rem;">The best</p>
                    <p style="margin-bottom:0.3rem;"><STRIKE>NT380</STRIKE>　優惠價 NT299</p>
                  </div>
                  
                </div>
            </div>

      </div>
      
  </div>
  <!-- 時尚褲裙 PANTS&SKIRTSend -->

  <table style="font-weight:lighter;width:100%;text-align:center;"width="100%">
    <tr>
      <td><img src="./img/UI/nice.png" alt="">
      </td>
      <td style="text-align:left;">品質保證<br>品質護航 購物無憂
      </td>
      <td width="1" bgcolor="#848484" height="0"></td>
      <td>　　<img src="./img/UI/seven.png" alt="">
      </td>
      <td style="text-align:left;">七天鑑賞期退換貨<br>為您提供售後無憂保障
      </td>
      <td width="1" bgcolor="#848484" height="0"></td>
      <td>　　<img src="./img/UI/special.png" alt="">
      </td>
      <td style="text-align:left;">特色服務體驗<br>老闆娘親自挑選服飾
      </td>
      <td style="width:0.3px" bgcolor="#848484" height="0"></td>

      <td>　　<img src="./img/UI/help.png" alt="">
      </td>
      <td style="text-align:left;">幫助中心<br>您的購物指南
      </td>
  
    </tr>
  </table>

</div>
@endsection