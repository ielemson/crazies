<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>THE CRAZIES</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Luckiest+Guy&family=Press+Start+2P&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="{{asset("frontend/assets/css/styles.css")}}" rel="stylesheet" />

</head>
<body>
    {{-- <div id="loader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div> --}}

  <!-- Minimal Navbar -->
 @include("frontend.includes.header")

  <!-- Hero Section -->
  @yield("hero")

  <!-- Footer -->
 @include("frontend.includes.footer")

    <!-- Sidebar JS -->
  <script src="{{asset("frontend/assets/js/main.js")}}"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
