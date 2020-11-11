<div class="slider">
  <div id="about-slider">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel" data-interval="5000">
      <!-- Indicators -->
      <ol class="carousel-indicators visible-xs">
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo base_url('assets/img/mak2edit2.jpg')?>" class="img-responsive" alt="">
          <div class="carousel-caption">
            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
              <h2><span>Survey Kepuasan </span></h2>
              <h3>Canteen</h3>
            </div>
            <div class="col-md-10 col-md-offset-1">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <p>Daftar menu makanan akan berbeda setiap hari</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="<?php echo base_url('assets/img/mak3edit2.jpg')?>" class="img-responsive" alt="">
          <div class="carousel-caption">
            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
              <h2><span>Isi Polling </span></h2>
              <h3>Canteen</h3>
            </div>
            <div class="col-md-10 col-md-offset-1">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <p>Selalu isi polling setiap minggu untuk menentukan menu kesukaanmu</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>

      <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
    <!--/#carousel-slider-->
  </div>
  <!--/#about-slider-->
</div>
<!--/#slider-->    <br><br>

    <section class="gallery-block grid-gallery">
        <div class="container">
            <div class="heading py-5 mt-5 text-center">
                <h1>Menu Paket</h1>
                <hr>

                <div id="clock"></div>
                <script type="text/javascript">
                    function showTime() {
                        var a_p = "";
                        var today = new Date();
                        var curr_hour = today.getHours();
                        var curr_minute = today.getMinutes();
                        var curr_second = today.getSeconds();
                        if (curr_hour < 12) {
                            a_p = "AM";
                        } else {
                            a_p = "PM";
                        }
                        if (curr_hour == 0) {
                            curr_hour = 12;
                        }
                        if (curr_hour > 12) {
                            curr_hour = curr_hour - 12;
                        }
                        curr_hour = checkTime(curr_hour);
                        curr_minute = checkTime(curr_minute);
                        curr_second = checkTime(curr_second);
                    document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                        }
            
                    function checkTime(i) {
                        if (i < 10) {
                            i = "0" + i;
                        }
                        return i;
                    }
                    setInterval(showTime, 500);
                </script>
        
                <!-- Menampilkan Hari, Bulan dan Tahun -->
                <br>
                <script type='text/javascript'>
                    <!--
                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth();
                    var thisDay = date.getDay(),
                        thisDay = myDays[thisDay];
                    var yy = date.getYear();
                    var year = (yy < 1000) ? yy + 1900 : yy;
                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                    //-->
                </script>
                <br><br>

            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="container">
                        <div class="card" style="width:300px">
                                                                                </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="card" style="width:300px">
                                                                                </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="card" style="width:300px">
                                                                                </div>
                    </div>
                </div>
            </div>

            <div class="heading py-5 mt-5 text-center">
                <hr>
                
                <h1 class="text-center">Polling</h1>
                <hr>
                <h4>menu untuk tanggal 16-11-2020 sampai 20-11-2020</h4> <br>
                
            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="container">
                        <div class="card" style="width:300px">
                                                                                </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="card" style="width:300px">
                                                                                </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="card" style="width:300px">
                                                                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>