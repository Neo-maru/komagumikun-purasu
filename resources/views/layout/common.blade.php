<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>コマ組＋</title>
</head>
<body>
  <main class="p-4">
    <div class="container">
      <div class="justify-content-center">
        @yield('content')
      </div>
    </div>
  </main>
  <script src="{{ asset('/assets/js/style.js') }}"></script>
</body>
</html>