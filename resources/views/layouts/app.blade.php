<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="FASBMB - Federation of African Societies of Biochemistry and Molecular Biology">
  <meta name="keywords" content="FASBMB - Federation of African Societies of Biochemistry and Molecular Biology">
  <meta name="author" content="Mahmud Bakale, Mudassir Ahmad Adili">
  <title>FASBMB - Federation of African Societies of Biochemistry and Molecular Biology</title>
  <link rel="shortcut icon" href="{{asset('img/fasbmb.jpg')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
</head>

<body>
  <div class="content-wrapper">
    @include('partials.header')
    @yield('content')
  </div>
  @include('partials.footer')
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
 {{--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script> --}}
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/js/jquery.min.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>