<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WARLEN| Home</title>

    <link rel="shortcut icon" href="../../public/img/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/responsive-style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.3.0/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/script.js')}}"></script>
     <script src="{{ asset('js/app.js') }}"></script>
  </head>
<body>
  <header id="myHeader">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <!-- <img src="assets/img/logo_header_dark.png" alt="main logo" class="img-fluid"> -->
          WARTEG ONLEN IS HERE!
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-md-auto d-md-flex">
            <li class="nav-item">
              <a class="nav-link" href="#Keuntungan">Keuntungan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Keunggulan">Keunggulan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#DePlaza">Apa itu dePlaza</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#HargaPaket">Harga Paket </a>
            </li>
          </ul>
          &nbsp;&nbsp;
          <ul>
             @if (Auth::guest())
                <li class="nav-item box-line">
                <a class="nav-link" href="register">DAFTAR</a>
                </li>
                &nbsp;
                <li class="nav-item box-line">
                <a class="nav-link" href="login">LOGIN</a>
                </li>
          
            @else
               <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-tem box-line">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                           @endif
                      </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="home" id="Home">
    <div class="block-width">
      <div class="col-half text">
        <h1 class="hero-text">Warteg Online untuk lengkapi keseharian Anda</h1>
        <p class="sub">Ayo pesan cita rasa masakan warteg tanpa perlu keluar kosan</p>
        <div class="action">
          <a href="#Daftar" class="btn btn-white">DAFTAR SEKARANG</a>
          <span>atau</span>
          <a href="#Keuntungan" class="link">lihat yang kami lakukan</a>
          <a href="#Keuntungan" class="img-link"><img src="{{asset('/img/down-state.png')}}" class="img-fluid"/></a>
        </div>
      </div>
      <div class="col-half images">
        <img src="{{asset('/img/bule.png')}}" alt="image-big" class="">
      </div>
    </div>
    <div class="container-fluid">
      <img src="{{asset('/img/deplaza-home_03.png')}}" alt="bg-white" class="trapsium">
    </div>
  </div>

  <div id="Keuntungan" class="section">
    <div class="container">
      <div class="head text-center">
        <h3>Bisnis Sampingan Omset Jutaan</h3>
        <p>Alasan kenapa harus memiliki Market Place canggih</p>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-7 col-12">
            <div class="box-number step">
              <span class="number">1</span>
              <h5>Apa Saja Kelebihan<br>dePlaza Untuk anda</h5>
              <P>Market Place Dengan Nama Pilihan Anda sendiri.<br/>
                  Di Toped adalah Nge Kost, di dePLAZA punya rumah sendiri<br/>
                  (Ada Perbandingan, kalo jualan di <strong>Toped</strong> sama di <span class="green strong">dePLAZA</span>).</P>
            </div>
          </div>
          <div class="col-md-5 col-12">
            <div class="box-image step text-center">
              <img src="{{asset('/img/1-converted-.png')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="box-image step text-center growth">
              <img src="{{asset('/img/growth.png')}}" alt="" class="img-fluid growth">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="box-number step">
              <span class="number">2</span>
              <h5>Tersedia berbagai macam menu masakan<br/>
                  untuk Anda</h5>
              <ol>
                <li><span class="green">1.</span> Kangkung</li>
                <li><span class="green">2.</span> Produk merupakan produk laris di market place</li>
                <li><span class="green">3.</span> Tidak perlu memikirkan Stok</li>
                <li><span class="green">4.</span> Tidak perlu Memikirkan Pengiriman, dibantu oleh team kami</li>
              </ol>
            </div>
          </div> 
        </div>
        <div class="divider"></div>
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="box-number step">
              <span class="number">3</span>
              <h5>dePlaza menyiapakan<br/>Team Chat untuk Anda</h5>
              <ol>
                <li><span class="green">1.</span> Tidak repot chating</li>
                <li><span class="green">2.</span> Team Chat adalah Para <span class="green strong">Top Seller marketplace</span> yang membantu Anda</li>
              </ol>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="box-image step text-center">
              <img src="{{asset('/img/cloud.png')}}" alt="" class="img-fluid cloud">
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="box-number step">
              <span class="number">4</span>
              <h5>dePlaza : Bisa jual Produk Milik sendiri<br/>ataupun Suplier</h5>
              <ol class="order-icon">
                <li><div class="icon-mg"><img src="{{asset('/img/icon_1.png')}}" class="icon-img"/></div><span class="strong green"> Reseller</span><br/>Merek, Produk, delivery sampai Komplain di Urus Suplier yang adalah para top seler market place</li>
                <li><div class="icon-mg"><img src="{{asset('/img/icon_2.png')}}" class="icon-img"/></div><span class="strong green"> Dropship</span><br/>Produk, Packing, Delivery adalah milik suplier tapi Merek Bisa anda Ganti dengan Merek Anda</li>
                <li><div class="icon-mg"><img src="{{asset('/img/icon_3.png')}}" class="icon-img"/></div><span class="strong green"> Jual Produk Sendiri</span><br/>Produk, Merek, Chatting, Packing dan delivery oleh anda sendiri</li>
              </ol>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="box-image step text-center">
              <img src="{{asset('/img/reseller.png')}}" alt="" class="img-fluid cloud">
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="box-number step">
              <span class="number">5</span>
              <h5>dePlaza : Menyediakan Sistem Ware Housing</h5>
              <p>Website anda dilengkapi dengan system Ware Housing menggunakan Scan Android Mobile. Data In/Out dan stock SKU produk anda rapih dan tepat</p>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="box-image step text-center">
              <img src="{{asset('/img/drop.png')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="box-image step text-center growth">
              <img src="{{asset('/img/credit-card.png')}}" alt="" class="img-fluid growth">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="box-number step">
              <span class="number">6</span>
              <h5>dePlaza : Menyediakan semua Sistem Pembayaran sampai dengan alfa mart</h5>
              <ul class="partner">
                <li><div class="transfer"><span class="strong">TRANSFER<br/>BANK</span></div></li>
                <li><img src="{{asset('/img/daftarklikbca.jpg')}}" alt="klik BCA" class="img-fluid"></li>
                <li><img src="{{asset('/img/logo_bcaklikpay.jpg')}}" alt="BCA Pay" class="img-fluid"></li>
                <li><img src="{{asset('/img/mandiri_clickpay.png')}}" alt="Mandiri" class="img-fluid"></li>
                <li><img src="{{asset('/img/ecashmandiri.jpg')}}" alt="Ecash Mandiri" class="img-fluid"></li>
                <li class="bottom"><img src="{{asset('/img/logo_epay_bri.png')}}" alt="Epay BRI" class="img-fluid"></li>
                <li class="bottom mid"><img src="{{asset('/img/visa_png2.png')}}" alt="VISA" class="img-fluid"></li>
                <li class="bottom last"><img src="{{asset('/img/alfamart-logo1_1.png')}}" alt="Alfamart" class="img-fluid"></li>
              </ul>
            </div>
          </div> 
        </div>
        <div class="divider"></div>
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="box-number step">
              <span class="number">7</span>
              <h5>dePlaza : Menjaga keamanan & kualitas Website anda</h5>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="box-image step text-center">
              <img src="{{asset('/img/security.png')}}" alt="" class="img-fluid cloud">
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="box-image step text-center">
              <img src="{{asset('/img/graph.png')}}" alt="" class="img-fluid cloud">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="box-number step">
              <span class="number">8</span>
              <h5>Anda Memiliki data base pelanggan Anda</h5>
              <p>Dengan data base di Tangan, Anda dapat melakukan cross selling Up selling dll.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <img src="{{asset('/img/deplaza-home_02.png')}}" alt="divider grey" class="trapsium">
  </div>
  <div id="Keunggulan" class="section bg-grey">
    <div class="container">
      <div class="head text-center">
        <h3>Mengapa Harus membuat Market Place di dePLAZA?</h3>
        <p>Kami Terus Melakukan Inovasi Untuk Menjadikan dePLAZA Layanan Reseller dan Dropship Terbaik.</p>
      </div>
      <div class="divider"></div>
      <div class="content">
        <div class="row">
          <div class="col-md-4 col-12">
            <div class="box-feature text-center">
              <div class="icon-feature">
                <img src="{{asset('/img/001-online-shopping.png')}}" alt="online shopping" class="img-fluid">
              </div>
              <h5>CEK STOK ONLINE</h5>
              <p>Cek stok online 24 jam. Dapatkan info stok tanpa harus menunggu balasan CS.</p>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="box-feature text-center">
              <div class="icon-feature">
                <img src="{{asset('/img/002-speech-bubble.png')}}" alt="online shopping" class="img-fluid">
              </div>
              <h5>SMS RESI OTOMATIS</h5>
              <p>Order dan duduk manis, kami akan kirim resi via sms secara otomatis.</p>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="box-feature text-center">
              <div class="icon-feature">
                <img src="{{asset('/img/003-tag.png')}}" alt="online shopping" class="img-fluid">
              </div>
              <h5>WHITE LABEL DROPSHIP</h5>
              <p>Kami pastikan setiap barang yang dikirim adalah atas nama dan logo Anda.</p>
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="divider"></div>
        <div class="row">
          <div class="col-md-4 col-12">
            <div class="box-feature text-center">
              <div class="icon-feature">
                <img src="{{asset('/img/005-delivery-truck.png')}}" alt="online shopping" class="img-fluid">
              </div>
              <h5>GARANSI RETUR</h5>
              <p>Garansi retur hingga 30 hari sejak barang diterima, bisa tukar jika produk tidak sesuai.</p>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="box-feature text-center">
              <div class="icon-feature">
                <img src="{{asset('/img/006-call-center.png')}}" alt="online shopping" class="img-fluid">
              </div>
              <h5>DISKUSI PRODUK</h5>
              <p>Ada permasalahan terkait bisnis online? Diskusikan di grup komunitas member dePLAZA.</p>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="box-feature text-center">
              <div class="icon-feature">
                <img src="{{asset('/img/004-phone.png')}}" alt="online shopping')}}" class="img-fluid">
              </div>
              <h5>APLIKASI MOBILE</h5>
              <p>Tersedia aplikasi Android dan IOS untuk mempermudah akses produk dan pesanan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-grey-min"></div>
  </div>

  <div id="DePlaza" class="bg-clips bg-grey">
    <div class="block-width">
      <div class="col-half">
        <img src="{{asset('/img/macbook_pro.png')}}" alt="" class="img-fluid">
      </div>
      <div class="col-half">
        <div class="slider__item">
          <div id="slider__item_list" class="slider-class">
            <div class="owl-carousel slider_text owl-theme">
              <div class="item">
                <h1>Miliki Market Place Cangih seperti Toped, BL dan Shopee</h1>
                <p>Langsung punya ribuan Produk yang dapat Anda jual kembali. tanpa ribet nyari suplier. Produk di sediakan top seller Market place ternama.</p>
              </div>
              <div class="item">
                <h1>Langsung Punya ribuan Produk yang dapat anda Jual kembali</h1>
                <p>Langsung punya ribuan Produk yang dapat Anda jual kembali. tanpa ribet nyari suplier. Produk di sediakan top seller Market place ternama.</p>
              </div>
              <div class="item">
                <h1>Punya Team untuk Support Administrasi, ChAt dan Delivery</h1>
                <p>Langsung punya ribuan Produk yang dapat Anda jual kembali. tanpa ribet nyari suplier. Produk di sediakan top seller Market place ternama.</p>
              </div>
              <div class="item">
                <h1>Support semua sistem pembayaran</h1>
                <p>Langsung punya ribuan Produk yang dapat Anda jual kembali. tanpa ribet nyari suplier. Produk di sediakan top seller Market place ternama.</p>
              </div>
              <div class="item">
                <h1>Di Ajarkan cara Promo dengan Kursus Internet Marketing <span class="strong">GRATIS</span> dari babastudio senilai <span class="strong">10 Juta</span></h1>
                <p>Langsung punya ribuan Produk yang dapat Anda jual kembali. tanpa ribet nyari suplier. Produk di sediakan top seller Market place ternama.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="action">
          <a href="#Dafar" class="btn btn-white">DAFTAR SEKARANG</a>
        </div>
      </div>
    </div>
  </div>

  <div id="HargaPaket" class="section">
    <div class="block-width">
      <div class="col-half images">
        <img src="{{asset('/img/image-side.jpg')}}" alt="big-image" class="img-fluid">
      </div>
      <div class="col-half">
        <div class="box-package">
          <h1>Harga Paket</h1>
          <div class="package-list">
            <p class="title">HARGA PEMBELIAN AWAL</p>
            <h2 class="strong green">IDR 5jt</h2>
            <h4><span class="strong">IDR 3.000.000</span> <span class="normal">/per tahun</span></h4>
            <a href="#Daftar" class="btn bt-hover btn-green">Beli</a>
          </div>
          <div class="package-list">
            <p class="title">EARLY BIRD<br/>HARGA PEMBELIAN AWAL</p>
            <h2 class="strong green">IDR 3jt</h2>
            <h4><span class="strong">IDR 2.000.000</span> <span class="normal">/per tahun</span></h4>
            <a href="#Daftar" class="btn bt-hover btn-green">Beli</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section" id="Daftar">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">
          <h2>Mulailah bergabung dengan kami!</h2>
          <h4>Kunci kesuksesan ada di tangan Anda, mulailah sekarang juga</h4>
        </div>
        <div class="col-md-6 col-12">
          <div class="form">
            <form  method="post" action="daftar.php">
            <div class="form-group">
                <input type="text" name="usernameg" id="" class="form-control" placeholder="Masukan username">
              </div>
              <div class="form-group">
                <input type="text" name="nama" id="" class="form-control" placeholder="Masukan nama lengkap">
              </div>
              <div class="form-group">
                <input type="email" name="email" id="" class="form-control" placeholder="Masukan Alamat Email">
              </div>
              <div class="form-group">
                <input type="text" name="nohp" id="" class="form-control" placeholder="Masukan nomor HP">
              </div>
              <div class="form-group">
                <input type="text" name="alamat" id="" class="form-control" placeholder="Masukan alamat rumah">
              </div>
              <div class="form-group">
                <input type="password" name="passwordg" id="" class="form-control" placeholder="Masukan password">
              </div>
              <div class="action">
              <input type="submit" name="daftar" value="DAFTAR" id="inputdaftar" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <div class="container">
      <div class="block-width">
        <div class="col-half">
          <ul class="copyright">
            <li><a href="#Home"><img src="{{asset('/img/logo_header_light.png')}}" alt="" class="img-fluid"></a></li>
            <li>© 2018, <a href="#">wartegOnline.</a> All rights reserved.</li>
          </ul>
        </div>
        <div class="col-half">
          <ul class="menu">
            <li><a href="#Keuntungan">Keuntungan</a></li>
            <li><a href="#Keunggulan">Keunggulan</a></li>
            <li><a href="#DePlaza">Apa Itu dePlaza</a></li>
            <li><a href="#HargaPaket">Harga Paket</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  

  <div id="id01" class="modal">
  
    <form class="modal-content animate" action="login.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="{{asset('/img/avatar.png')}}" Avatar" class="avatar">
      </div>
  
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
          
        
        <input type="submit" name="login" value="Login" id="logincoy" />
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
  
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw" onclick="document.getElementById('id01').style.display='none'" >Belum daftar? Kuy<a href="#Daftar"> KLIK DISINI </a></span>
      </div>
    </form>
  </div>
  
</body>
</html>

<script type="text/javascript">
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
});

$('.owl-carousel.slider_text').owlCarousel({
    loop:true,
    margin:25,
    autoplay:true,
    navText: ["<img src="{{asset('/img/prev.png')}}">","<img src="{{asset('/img/next.png')}}>"],
    autoplayTimeout:5000,
    responsiveClass:true,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }
})
</script>
