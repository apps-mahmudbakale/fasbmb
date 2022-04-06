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
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="{{ asset('css/admin.css')}}" rel="stylesheet">
   <script src="{{asset('js/jquery.min.js')}}"></script>
  <link href="{{asset('css/summernote.min.css')}}" rel="stylesheet">
  <script src="{{asset('js/summernote.min.js')}}"></script>
  <livewire:styles />
</head>

<body>
 <body>
  @include('admin.partials.header')
  @include('admin.partials.sidebar')
    @yield('content')
  @include('admin.partials.footer')
  <livewire:scripts />
  <script src="{{ asset('js/admin.js') }}"></script>
  <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 400, 
                placeholder: '',
            });
        });
      </script>
</body>
</body>
</html>