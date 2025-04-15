<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'AirBnBreeze')</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="icon" href="{{ asset('assets/images/air-logo.png') }}" type="image/x-icon">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

  @include('partials.header')

  <main class="container">
    @yield('content')
  </main>

  @include('partials.footer')

</body>
</html>