<!doctype html>
<html dir="ltr">
<head>
  <meta charset="utf-8">
  @stack('meta_data')
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('images/favicon.png') }}">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  @livewireStyles
  @stack('styes')
</head>
<body>

  
 <livewire:toasts />
  <main x-data>
      {{$slot}}
  </main>

  @toastScripts
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @stack("script")
  @livewireScripts
</body>
</html>