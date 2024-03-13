<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Free Novel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@200&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Outfit:wght@700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/main.css">
    <!-- Fonts -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable_inline{
            min-height: 200px;
        }
    </style>
    <!-- Scripts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@200&family=Chakra+Petch:wght@300&family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Outfit:wght@700&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'IBM Plex Sans Thai', sans-serif;
            
        }
        :root {
            --primary: #FBC257;
            --primary-light: #FCCC73;
            --dark-brown: #341413;
            --gray-1: #798092;
            --gray-2: #E6E6ED;
            --white: #FFFFFF;
            --header-1: 64px;
            --header-2: 48px;
            --header-3: 42px;
            --header-4: 32px;
            --text-medium: 18px;
            --text-regular: 16px;
            --text-light: 13px;
            --font-weight-bold: 700;
            --font-weight-semi-bold: 600;
            --font-weight-medium: 500;
            --font-weight-regular: 400;
            --font-weight-light: 300;
        }
        .btn{
            padding: 12px 22px;
            border-radius: 6px;
            font-size: var(--text-light);
            font-weight: var(--font-weight-medium);
            border: none;
        }
        .btn-primary{
            background-color: var(--primary);
            border: none;
        } 
        .btn-primary:focus{
            background-color: var(--primary-light);
        } 
        .btn-primary:hover{
            background-color: var(--primary-light);
        }
        .btn-secondary{
            background-color: var(--gray-2);
            color: var(--gray-1);
        } 
        .btn-secondary-focus{
            background-color: var(--white);
            box-shadow: 0px 4px 19px rgba(0, 0, 0, 0.05) !important;
            color: var(--gray-1);
        } 
        .btn-secondary-focus{
            background-color: var(--white);
            box-shadow: 0px 4px 19px rgba(0, 0, 0, 0.05) !important;
            color: var(--gray-1);
        } 
        .navbar-brand img{
            padding-right: 16px;
        }
        .navbar-brand span{
            font-size: var(--text-medium);
            font-weight: var(--font-weight-medium);
            color:var(--dark-brown);
        }
        .navbar{
            padding: 48px 0;
        }
        a.nav-link{
            margin-right: 39px;
            font-size: var(--text-regular);
            font-weight: var(--font-weight-regular);
            color: var(--dark-brown);
        }
        section.hero{
            margin: 5rem 0;
        }
        .text-label,
        .text-hero-bold,
        .text-hero-regular{
            margin: 24px 0;
        }
        .text-label{
            color: var(--primary);
            font-size: var(--text-regular);
            font-weight: var(--font-weight-regular);
            line-height: 31px;
        }
        .text-hero-bold{
            color: var(--dark-brown);
            font-size: var(--header-1);
            font-weight: var(--font-weight-bold);
            line-height: 74px;
        }
        .text-hero-regular{
            color: var(--gray-1);
            font-size: var(--text-regular);
            font-weight: var(--font-weight-regular);
            line-height: 31px;
        }
        .text-hero-regular-black{
            color: var(--dark-brown);
            font-size: var(--text-regular);
            font-weight: var(--font-weight-regular);
            line-height: 31px;
        }

        @media(max-width:576px){
            .navbar{
                padding: 28px 0;
            }
            .a.nav-link{
                margin-right:7px 0;
            }
            section.hero{
                margin: 2rem 0;
                text-align: center;
            }
            .btn{
                display: block;
                margin: 1rem 0;

            }
            .ms-3{
                margin-left: 0 !important;
            }
            .text-label,
            .text-hero-bold,
            .text-hero-regular{
                text-align: center;
            }
            .text-hero-bold{
                font-weight: var(--font-weight-bold);
                font-size: var(--header-3);
                line-height: 64px;
            }
            section.hero img{
                margin: 2rem 0;
            }
        }
        @media(max-width:768px){
            .navbar{
                padding: 28px 0;
            }
            .a.nav-link{
                margin-right:7px 0;
            }
            section.hero{
                margin: 2rem 0;
                text-align: center;     
            }
            .text-hero-bold{
                font-weight: var(--font-weight-bold);
                font-size: var(--header-3);
                line-height: 64px;
            }
            section.hero img{
                margin: 2rem 0;
            }
        }
        @media(max-width:992px){
            .navbar{
                padding: 28px 0;
            }
            .a.nav-link{
                margin-right:7px 0;
            }
            section.hero{
                margin: 2rem 0;
                text-align: center;     
            }
            .text-hero-bold{
                font-weight: var(--font-weight-bold);
                font-size: var(--header-3);
                line-height: 64px;
            }
            section.hero img{
                margin: 2rem 0;
            }
        }
        
    </style>
</head>
<body class="bg-white">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script> 
    <div id="app" class="bg-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="/" >
                    <img src="/img/logo.png" alt="brand" width="20%">
                    <span>FreeNovels</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class='bx bx-menu'></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            <a href="/" class="nav-link">หน้าหลัก</a>
                            
                            <a href="/allnovel" class="nav-link">นิยายทั้งหมด</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    หมวดหมู่นิยาย
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/category/love">
                                        นิยายรัก
                                    </a>
                                    <a class="dropdown-item" href="/category/fantasy">
                                        แฟนตาซี
                                    </a>
                                    <a class="dropdown-item" href="/category/funny">
                                        ตลก
                                    </a>
                                    <a class="dropdown-item" href="/category/investigate">
                                        สืบสวน
                                    </a>
                                    <a class="dropdown-item" href="/category/horror">
                                        สยองขวัญ
                                    </a>
                                </div>
                            </li>
                            <a href="/resume" class="nav-link">เกี่ยวกับผู้พัฒนา</a>    
                    </div>
                    @if (Route::has('login'))
                        <a class="btn btn-primary shadow-none me-2" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="btn btn-primary shadow-none" href="{{ route('register') }}">สมัครเป็นนักเขียน</a>
                    @endif
                    @else
                    <div class="navbar-nav ms-auto">
                            <a href="/" class="nav-link">หน้าหลัก</a>
                            <a href="/allnovel" class="nav-link">นิยายทั้งหมด</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    หมวดหมู่นิยาย
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/category/love">
                                        นิยายรัก
                                    </a>
                                    <a class="dropdown-item" href="/category/fantasy">
                                        แฟนตาซี
                                    </a>
                                    <a class="dropdown-item" href="/category/funny">
                                        ตลก
                                    </a>
                                    <a class="dropdown-item" href="/category/investigate">
                                        สืบสวน
                                    </a>
                                    <a class="dropdown-item" href="/category/horror">
                                        สยองขวัญ
                                    </a>
                                </div>
                            </li>
                            <a href="/resume" class="nav-link">เกี่ยวกับผู้พัฒนา</a>    

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    สวัสดี {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('blog') }}">
                                        รายการนิยาย
                                    </a>
                                    <a class="dropdown-item" href="{{ route('write') }}">
                                        เขียนนิยายใหม่
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        ออกจากระบบ
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>
        
        <main>
            @yield('content')
        </main>
    </div>
    
</body>
</html>
