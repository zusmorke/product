<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="trangchu.blade.php">Trang Chủ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="page1.blade.php">Giới Thiệu</a>
        </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Sản Phẩm</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="page2.blade.php">Bàn</a></li>
            <li><a class="dropdown-item" href="page3.blade.php">Ghế</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page4.blade.php">Liên Hệ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <h1>Đây là trang giới thiệu</h1>
</body>

</html>