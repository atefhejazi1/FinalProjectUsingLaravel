@section('title')
المكتبة الرقمية - الرئيسية
@stop

<!DOCTYPE html>
<html lang="ar" dir='rtl'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .wave-container {
            position: relative;
            background: #54c53f;
            color: #fff;
            text-align: center;
            overflow: hidden;
        }

        h1 {
            font-size: 5rem;
            margin: 7rem 1.25rem 2.5rem 1.25rem;
            font-family: "Lora", serif;
        }

        p {
            font-size: 1.8rem;
            margin: 0 1.25rem 5rem 1.25rem;
            font-family: "Merriweather", serif;
        }

        .navbar {
            background-color: #54c53f;
            margin-bottom: 0 !important;
            border: none;
            color: #fff;
            z-index: 100;
            transition: background-color 1s ease 0s;
        }

        nav .navbar-brand {
            margin-left: 20px;
            color: #fff;
            font-size: 25px;
            font-weight: bold;
            font-family: "Archivo Narrow", sans-serif;
        }


        .navbar .navbar-nav .nav-link,
        .navbar .navbar-nav .nav-link:hover,
        .navbar .navbar-nav .nav-link,
        .navbar .navbar-nav .nav-link.active,
        .navbar .navbar-nav .nav-link,
        .navbar .navbar-nav .nav-link:focus {
            margin-left: 20px;
            color: #fff;
            padding: 13px 2px;
            font-size: 16px;
            font-weight: bold;
            font-family: "Archivo Narrow", sans-serif;
        }

        table thead {
            background: #54c53f;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="homepage">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">المكتبة الرقمية</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">الصفحة الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#books">الكتب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#booksAuthors">المؤلفين</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#booksHouses">دور النشر</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#booksRatings">تصنيفات الكتب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/' . $page='home') }}">لوحة التحكم</a>
                        </li>
                        <form method="get" action="{{url('/searchHomePage')}}">
                            <input class="form-control" name="query" placeholder="ابحث عن كتاب ..." type="search">
                            <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wave-container" id="home">
            <h1>مرحبا بكم في المكتبة الرقمية</h1>
            <p>المكتبة الرقمية الأولى فلسطينياً</p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#54c53f" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,202.7C384,224,480,224,576,186.7C672,149,768,75,864,80C960,85,1056,171,1152,213.3C1248,256,1344,256,1392,256L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
    </div>

    <div class="container mt-5">
        <table class="table mt-5" id="books">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الكتاب</th>
                    <th scope="col">اسم المؤلف</th>
                    <th scope="col">اسم دار النشر</th>
                    <th scope="col">اسم تصنيف الكتاب</th>
                    <th scope="col">اصدار الكتاب</th>
                </tr>
            </thead>
            <tbody>
                @php
                $x = 0;
                @endphp

                @foreach ( $books as $book )
                <tr>
                    <th scope="row">{{++$x }}</th>
                    <td>{{$book-> book_name}}</td>
                    <td>{{$book-> authors->author_name}}</td>
                    <td>{{$book-> publishing_houses->publishing_house_name}}</td>
                    <td>{{$book-> book_ratings->book_rating_name}}</td>
                    <td>{{$book-> issue_number}}</td>
                </tr>

                @endforeach

            </tbody>
        </table>











    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#54c53f" fill-opacity="1" d="M0,64L21.8,58.7C43.6,53,87,43,131,48C174.5,53,218,75,262,101.3C305.5,128,349,160,393,154.7C436.4,149,480,107,524,101.3C567.3,96,611,128,655,144C698.2,160,742,160,785,176C829.1,192,873,224,916,229.3C960,235,1004,213,1047,170.7C1090.9,128,1135,64,1178,74.7C1221.8,85,1265,171,1309,197.3C1352.7,224,1396,192,1418,176L1440,160L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
    </svg>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>