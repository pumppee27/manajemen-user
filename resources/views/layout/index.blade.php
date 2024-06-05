<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{url("/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{url("/css/style.css")}}>
    <link rel="shortcut icon" href="/assets/img/favicon.png" sizes="32x32" type="image/png">
    {{-- <link rel="stylesheet" href={{url("/css/select2.min.css")}}> --}}
    

    <script src={{url("/js/bootstrap.bundle.min.js")}}></script>
    {{-- <script src={{url("/js/select2.min.min.js")}}></script>
     --}}
    
    <title>@yield('title')</title>
</head>
<body>
    <div class="backdrop"></div>
    @include("components.header")
    @include("components.aside")
    @include("components.main")
    @include("components.footer")
    
    
    
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
    <script src={{url("/js/myScript.js")}}></script>
    @if(count($errors) > 0)
    <script type="text/javascript">
        $(document).ready(function(){
            $('.modal').show();
            $('.backdrop').show();
        })
    </script>
    @endif
    @stack('scripts')
</body>
</html>