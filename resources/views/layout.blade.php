<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title')| FreeNovel</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">FreeNovel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="" href="/">หน้าหลัก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('blog')}}">นิยายทั้งหมด</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('category')}}">หมวดหมู่นิยาย</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('write')}}">เขียนนิยาย</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">เกี่ยวกับเรา</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="ค้นหาได้เลย" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">ค้นหา</button>
            </form>
          </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>