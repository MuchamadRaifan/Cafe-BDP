<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe Bdp</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Bootsratp link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootsratp link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Poppins:ital,wght@0,400;0,500;0,600;1,400&display=swap"
    rel="stylesheet">
  <!-- Fonts Link -->
  <link rel="stylesheet" href="https://autoclicker.id.uptodown.com/windows/download">
  <!-- this is icons link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="all-content">
     {{-- navbar start  --}}
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" id="logo"><img class="gambar" src="" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fa-solid fa-bars" style="color: #fff; font-size: 23px;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" style="color: #000;" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/order" style="color: #000;">Product</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
     {{-- navbar end  --}}

     {{-- home section start  --}}
    <section id="home">
      <div class="content">
        <h3 style="color: rgb(216, 65, 10);">Welcome To <br>Cafe Wikrama</h3>
        <p>Fresh and Delicious Food Every day
        </p>
        <a href="/order" class="shop">order</a>
      </div>
    </section>
     {{-- home section end  --}}

     {{-- About section start  --}}

    <section id="about">
      <div class="container">
        <div class="heading">About <span>Us</span></div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img class="about" src="assets/images/1.jpg" alt="">
            </div>
          </div>

          <div class="col-md-6">
            <h3>Kantin Dengan Makanan sehat semuanya yaa</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium sapiente delectus voluptatum est
              ipsa, vero quibusdam quos veniam sequi quae Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Optio, est?
              <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad iusto voluptatum eligendi nisi
              consectetur suscipit modi ab, incidunt totam adipisci.
              <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad iusto voluptatum eligendi nisi
              consectetur suscipit modi ab, incidunt totam adipisci.
            </p>
            <button id="about-btn">Learn More.</button>
          </div>
        </div>
      </div>
    </section>
     {{-- about section end  --}}

     {{-- top card start  --}}
    <section id="top-cards">
      <div class="heading2">Top <span>Categories</span></div>
      <div class="container">
        <div class="row">

          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="assets/images/roti.png" alt="">
            </div>
          </div>

          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="assets/images/c1.png" alt="">
            </div>
          </div>

          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="assets/images/pempek.png" alt="">
            </div>
          </div>

        </div>
      </div>
    </section>
     {{-- top card end --}}

     {{-- footer start  --}}
    <footer id="footer">
      <div class="footer-logo text-center"><img src="./images/logo.png" alt=""></div>
      <div class="socail-links text-center">
        <i class="fa-brands fa-whatsapp"></i>
        <i class="fa-brands fa-git hub"></i>
        <a href="https://www.instagram.com/aleza_2775/"></a><i class="fa-brands fa-instagram"></i>
      </div>

      <div class="credits text-center">
        Dseigned By <a href="#"> <span>Raii</span></a>
      </div>

      <div class="copyright text-center">
        &copy; Copyright <strong> <span>Cafe Bdp</span></strong>. All Rights reserved
      </div>
    </footer>
     {{-- footer end  --}}
    <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>
