@php
    $config_seo = json_decode(getValueSetting('config_seo'));
    $config_website = json_decode(getValueSetting('config_website'));
    $ver = '1.2.2';
     
@endphp

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('front_end.layout.config_seo_header')

    <link rel="stylesheet" href="{{ asset('assets/plugin/font-awesome/css/font-awesome.min.css') }}?v=1.2.2"
        media="all" type="text/css">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/css_minified.min.css' . "?v=$ver") }}" />  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css' . "?v=$ver") }}" /> 
</head>

<body>
    
  <div class="container">
    @include('front_end.layout.header')
    @yield('content')
    @include('front_end.layout.footer')
  </div>
    <script
    src="{{ asset('assets/js/app.js' . "?v=$ver") }}"  defer">
    </script>
    {{-- <link rel="stylesheet"
        href="https://web.archive.org/web/20221006061539cs_/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" /> --}}
    <script>
        new menu();
        var cl = cloudinary.Cloudinary.new({
            cloud_name: 'simplemenu'
        });
        cl.responsive();
    </script>
</body>

</html>
