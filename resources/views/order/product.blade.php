<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Order</title>
    <link rel="stylesheet" href="{{asset ('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootsratp link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Poppins:ital,wght@0,400;0,500;0,600;1,400&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- Fonts Link -->
  <link rel="stylesheet" href="https://autoclicker.id.uptodown.com/windows/download">
  <!-- this is icons link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section id="menu">
        <div class="container">
          <div class="heading3">Menu</div>
        </div>

        <div class="container" id="container2">


          <div class="row">

            @foreach($products as $product)
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">

                <img src="{{ $product->image }}">
                <div class="card-body">
                  <div class="star text-center">
                    <i class="fas fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                  </div>

                  <h3>{{ $product->name }}</h3>
                  <p>{{ $product->description }}</p>
                  <div class="card-body" style="display: flex;">
                    <a href="{{ route('add_to_cart',$product->id) }}" class="btn btn-primary w-100"></i>cart</button></a>

                  </div>
                </div>

              </div>
            </div>
            @endforeach

          </div>
        </div>
      </section>
       {{-- eaw --}}
       <form action="{{ route('cart') }}">
       <div class="eaw">

        <button class="button-30" role="button"><i class="apahayoo fa-solid fa-cart-shopping"></i>Check Out <p class="jikakalau">{{ count((array) session('cart')) }}</p></button>

      </div>
    </form>
      {{-- end eaw --}}
</body>
</html>
