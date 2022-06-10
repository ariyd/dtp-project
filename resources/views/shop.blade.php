
<!doctype html>
<html lang="en">

<head>
    <title>StarBooks</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icons/all.css')}}">
</head>

<body>
    <div class="container">
        <!-- Left Side Navbar -->
        <nav class="side-nav">
            <ul class="nav-links">
                <li><a href="#" class="nav-item active" data-target="burger"><i class="fas fa-book"
                            style="font-size:24px;margin-bottom:3px;"></i>Pemrograman</a></li>
                <li><a href="#" class="nav-item" data-target="chicken"><i class="fas fa-book"
                            style="font-size:24px;margin-bottom:3px;"></i>Matimatika</a></li>
                <li><a href="#" class="nav-item" data-target="fries"><i class="fas fa-book"
                            style="font-size:24px;margin-bottom:3px;"></i> b.inggris</a></li>
                <li><a href="#" class="nav-item" data-target="pizza"><i class="fas fa-book"
                            style="font-size:24px;margin-bottom:3px;"></i> ilmiah</a></li>
                <li><a href="#" class="nav-item" data-target="drink"><i class="fas fa-book"
                            style="font-size:24px;margin-bottom:3px;"></i> Fiksi</a></li>
            </ul>
        </nav>
        <!-- End Left Side Navbar -->

        <!-- Right Body -->
        <div class="main-body">
            <!-- Header -->
            <header class="header">
                <div class="logo">
                    <h2>StarBooks</h2>
                </div>
                <div class="search-bar">
                    <input type="text" name="menu" placeholder="Search menu..">
                    <button type="button"><i class="fas fa-search"></i></button>
                </div>
                <div class="usr-toggle">
                    <ul class="nav-links header">
                        <li><a href="#" class="nav-item"><i class="fas fa-list-ul"></i></a></li>
                        <li><a href="#" class="nav-item"><i class="fas fa-cog"></i></a></li>
                        <li><a href="#" class="nav-item"><i class="fas fa-user"></i></a></li>
                    </ul>
                </div>
            </header>
            <!-- End Header -->

            <!-- Main Menu -->
            <div class="main-menu">
                <div class="menu-page show-up" id="burger">
                    <!-- Category -->
                    <div class="category">
                        <ul class="nav-links category">
                            <li><a href="javascript:void(0)" id="all-burg" class="nav-item active">All</a></li>
                            <li><a href="javascript:void(0)" id="bacon-burg" class="nav-item">Specifik</a></li>
                            <li><a href="javascript:void(0)" id="beef-burg" class="nav-item">Complete</a></li>
                            <li><a href="javascript:void(0)" id="chesee-burg" class="nav-item">Semi Complete</a></li>
                            <li><a href="javascript:void(0)" id="chicken-burg" class="nav-item">Others</a></li>
                        </ul>
                    </div>
                    <!-- End Category -->
                    <!-- Menu items -->
                    <div class="menus">
                        <div class="menu burger" data-menu="beef-burg">
                            <img src="{{asset('assets/img/burger/15.png')}}" alt="beef">
                            <h2 class="price">$4.7</h2>
                            <div class="desc-item">
                                <h3>Buku Sakti Pemrograman web </h3>
                                <p>html, css, javascript, php, MySQL </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="beef-burg">
                            <img src="{{asset('assets/img/burger/8.png')}}" alt="beef">
                            <h2 class="price">$4.9</h2>
                            <div class="desc-item">
                                <h3>Buku Pemrograman WEB </h3>
                                <p>html,CSS,php,jQuery</p>
                                
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                       
                        <div class="menu burger" data-menu="bacon-burg">
                            <img src="{{asset('assets/img/burger/1.png')}}" alt="bacon">
                            <h2 class="price">$4.7</h2>
                            <div class="desc-item">
                                <h3>Buku Pemrograman Android </h3>
                                <p>pemrogram aplikasi android dengan Flutter</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="bacon-burg">
                            <img src="{{asset('assets/img/burger/9.png')}}" alt="beef">
                            <h2 class="price">$4.9</h2>
                            <div class="desc-item">
                                <h3>Jago Pemrograman PHP</h3>
                                <p>buku pemrograman PHP</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="bacon-burg">
                            <img src="{{asset('assets/img/burger/5.png')}}" alt="beef">
                            <h2 class="price">$4.9</h2>
                            <div class="desc-item">
                                <h3>Buku Sakti Pemrogramn php</h3>
                                <p>buku pemrogram khusus PHP</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="bacon-burg">
                            <img src="{{asset('assets/img/burger/12.png')}}" alt="beef">
                            <h2 class="price">$4.9</h2>
                            <div class="desc-item">
                                <h3>Buku Algoritma & Pemrograman</h3>
                                <p>Dalam bahasa pascal, C, C++</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="chesee-burg">
                            <img src="{{asset('assets/img/burger/4.png')}}" alt="chesee">
                            <h2 class="price">$4.8</h2>
                            <div class="desc-item">
                                <h3>Buku Sakti Pemrograman web 2</h3>
                                <p>html,CSS,php,jQuery</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="chesee-burg">
                            <img src="{{asset('assets/img/burger/2.png')}}" alt="chesee">
                            <h2 class="price">$5.3</h2>
                            <div class="desc-item">
                                <h3>Buku Pemrograman WEB</h3>
                                <p>pemrograman web dengan node.js dan javascript</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="chesee-burg">
                            <img src="{{asset('assets/img/burger/11.png')}}" alt="chesee">
                            <h2 class="price">$4.9</h2>
                            <div class="desc-item">
                                <h3>Modul Pemrograman WEB</h3>
                                <p>html, php MySQL-MariaDB</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="chicken-burg">
                            <img src="{{asset('assets/img/burger/6.png')}}" alt="chicken">
                            <h2 class="price">$5</h2>
                            <div class="desc-item">
                                <h3>Buku Sakti Design Grafis</h3>
                                <p>pengenalan design grafis</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="chicken-burg">
                            <img src="{{asset('assets/img/burger/10.png')}}" alt="chicken">
                            <h2 class="price">$4.8</h2>
                            <div class="desc-item">
                                <h3>Buku Dasar Design Grafis</h3>
                                <p>Belajar Dasar Design Grafis</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="chicken-burg">
                            <img src="{{asset('assets/img/burger/7.png')}}" alt="chicken">
                            <h2 class="price">$4.5</h2>
                            <div class="desc-item">
                                <h3>Buku Sakti Kuasai SPSS</h3>
                                <p>pengolahan data & Analisis data</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="chicken-burg">
                            <img src="{{asset('assets/img/burger/14.png')}}" alt="chicken">
                            <h2 class="price">$4.5</h2>
                            <div class="desc-item">
                                <h3>Buku Basis DATA</h3>
                                <p>belajar basis data edisi revisi ke-3</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu burger" data-menu="chicken-burg">
                            <img src="{{asset('assets/img/burger/13.png')}}" alt="chicken">
                            <h2 class="price">$4.5</h2>
                            <div class="desc-item">
                                <h3>Buku Struktur DATA</h3>
                                <p>belajar struktur datadenagan bahasa Pascal, C, C++ dan java</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                    </div>
                    <!-- End Menu Items -->
                </div>
                <div class="menu-page" id="chicken">
                    <!-- Category -->
                    <div class="category">
                        <ul class="nav-links category">
                            <li><a href="javascript:void(0)" id="all-chk" class="nav-item active">All</a></li>
                            <li><a href="javascript:void(0)" id="deluxe-chk" class="nav-item">SD</a></li>
                            <li><a href="javascript:void(0)" id="box-chk" class="nav-item">SMP</a></li>
                            <li><a href="javascript:void(0)" id="combo-chk" class="nav-item">SMA</a></li>
                        </ul>
                    </div>
                    <!-- End Category -->
                    <!-- Menu items -->
                    <div class="menus">
                        <div class="menu chicken" data-menu="deluxe-chk">
                            <img src="{{asset('assets/img/chicken/1.png')}}" alt="thighs">
                            <h2 class="price">$5.2</h2>
                            <div class="desc-item">
                                <h3>Buku Matimmatika Paten KSN </h3>
                                <p>membahas kisi-kisi KSN MTK untuk SD/MI</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu chicken" data-menu="deluxe-chk">
                            <img src="{{asset('assets/img/chicken/2.png')}}" alt="thighs">
                            <h2 class="price">$6.3</h2>
                            <div class="desc-item">
                                <h3>Best Score 100 Matimatika</h3>
                                <p>Bank Soal Matimatika untuk SD/MI</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu chicken" data-menu="deluxe-chk">
                            <img src="{{asset('assets/img/chicken/4.png')}}" alt="thighs">
                            <h2 class="price">$6.2</h2>
                            <div class="desc-item">
                                <h3>Tacktik Tokcer Matimatika</h3>
                                <p>Kuasai Matimatika untuk SD/MI kelas VI </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>

                        <div class="menu chicken" data-menu="combo-chk">
                            <img src="{{asset('assets/img/chicken/5.png')}}" alt="combo">
                            <h2 class="price">$12.5</h2>
                            <div class="desc-item">
                                <h3>The King Drillling Matimatika</h3>
                                <p>buku matimatika level host umtuk SMA </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu chicken" data-menu="combo-chk">
                            <img src="{{asset('assets/img/chicken/6.png')}}" alt="combo">
                            <h2 class="price">$12</h2>
                            <div class="desc-item">
                                <h3>Buku SKM Matematika </h3>
                                <p>Sukses Kuasa Materi matimatika untuk SMA </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu chicken" data-menu="combo-chk">
                            <img src="{{asset('assets/img/chicken/7.png')}}" alt="combo">
                            <h2 class="price">$15.3</h2>
                            <div class="desc-item">
                                <h3>Rumus Pocket Matimatika</h3>
                                <p>Pembahasan soal host Matimatika SMA</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu chicken" data-menu="box-chk">
                            <img src="{{asset('assets/img/chicken/3.png')}}" alt="box">
                            <h2 class="price">$8</h2>
                            <div class="desc-item">
                                <h3>Super Modul Matimatika</h3>
                                <p>buku matimatika untuk SMP</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu chicken" data-menu="box-chk">
                            <img src="{{asset('assets/img/chicken/8.png')}}" alt="box">
                            <h2 class="price">$8</h2>
                            <div class="desc-item">
                                <h3>Super Master KSN </h3>
                                <p>Kompetisi Sains Nasional Matimatika tingkat SMP</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu chicken" data-menu="box-chk">
                            <img src="{{asset('assets/img/chicken/9.png')}}" alt="box">
                            <h2 class="price">$8</h2>
                            <div class="desc-item">
                                <h3>Buku Pakar OSN matimatika</h3>
                                <p>Olimpiade Sains Nasional tingkat SMP</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                    </div>
                    <!-- End Menu Items -->
                </div>
                <div class="menu-page" id="fries">
                    <!-- Category -->
                    <div class="category">
                        <ul class="nav-links category">
                            <li><a href="javascript:void(0)" id="all-fr" class="nav-item active">All</a></li>
                            <li><a href="javascript:void(0)" id="original-fr" class="nav-item">Kamus</a></li>
                            <li><a href="javascript:void(0)" id="cheese-fr" class="nav-item">others</a></li>
                        </ul>
                    </div>
                    <!-- End Category -->
                    <!-- Menu items -->
                    <div class="menus">
                        <div class="menu fries" data-menu="original-fr">
                            <img src="{{asset('assets/img/fries/1.png')}}" alt="original">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Kamus Bahasa Inggris-Indonesia</h3>
                                <p> Kamus Updated edition </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu fries" data-menu="original-fr">
                            <img src="{{asset('assets/img/fries/2.png')}}" alt="original">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Oxford Dictionary </h3>
                                <p>kamus bahasa inggris Oxford</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu fries" data-menu="original-fr">
                            <img src="{{asset('assets/img/fries/4.png')}}" alt="original">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Kamus 900 Triliun </h3>
                                <p>kamus bahasa inggris-indonesia,indonesia-inggris </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu fries" data-menu="original-fr">
                            <img src="{{asset('assets/img/fries/5.png')}}" alt="original">
                            <h2 class="price">$12.5</h2>
                            <div class="desc-item">
                                <h3>Kamus Super Elite Bergamabar </h3>
                                <p>Kamus bahasa inggris disertai dengan gambar</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu fries" data-menu="cheese-fr">
                            <img src="{{asset('assets/img/fries/6.png')}}" alt="cheese">
                            <h2 class="price">$10</h2>
                            <div class="desc-item">
                                <h3>Mahir bahasa inggris dari Nol </h3>
                                <p>terlengkap dan terbaru</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu fries" data-menu="cheese-fr">
                            <img src="{{asset('assets/img/fries/7.png')}}" alt="cheese">
                            <h2 class="price">$12</h2>
                            <div class="desc-item">
                                <h3>Hello! Easy English</h3>
                                <p>Belajar bahasa inggris itu mudah </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu fries" data-menu="cheese-fr">
                            <img src="{{asset('assets/img/fries/8.png')}}" alt="cheese">
                            <h2 class="price">$12</h2>
                            <div class="desc-item">
                                <h3>Everyday English</h3>
                                <p>Idiom,Slang & UrbanWords </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu fries" data-menu="cheese-fr">
                            <img src="{{asset('assets/img/fries/9.png')}}" alt="cheese">
                            <h2 class="price">$12</h2>
                            <div class="desc-item">
                                <h3>SimpleMaster English Grammar</h3>
                                <p>cara baru menguasai tata bahasa inggris  </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu fries" data-menu="cheese-fr">
                            <img src="{{asset('assets/img/fries/10.png')}}" alt="cheese">
                            <h2 class="price">$12</h2>
                            <div class="desc-item">
                                <h3>SimpleMaster Crucial Words</h3>
                                <p>cara baru menguasai kata kata bahasa inggris  </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu fries" data-menu="cheese-fr">
                            <img src="{{asset('assets/img/fries/12.png')}}" alt="cheese">
                            <h2 class="price">$12</h2>
                            <div class="desc-item">
                                <h3>SimpleMaster English Conversation</h3>
                                <p>cara baru menguasai percakapan bahasa inggris  </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                       
                        <div class="menu fries" data-menu="cheese-fr">
                            <img src="{{asset('assets/img/fries/11.png')}}" alt="cheese">
                            <h2 class="price">$12</h2>
                            <div class="desc-item">
                                <h3>SmartMaster English Vocabs</h3>
                                <p>mudahnya menjadi Master english vocabulary</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>

                    </div>
                    <!-- End Menu Items -->
                </div>
                <div class="menu-page" id="pizza">
                    <!-- Category -->
                    <div class="category">
                        <ul class="nav-links category">
                            
                            <li><a href="javascript:void(0)" id="original-piz" class="nav-item">All</a></li>
                           
                        </ul>
                    </div>
                    <!-- End Category -->
                    <!-- Menu items -->
                    <div class="menus">
                        <div class="menu pizza" data-menu="original-piz">
                            <img src="{{asset('assets/img/pizza/1.png')}}" alt="pepperoni">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Tazkiyatun Nafs</h3>
                                <p>Belajar Membersihkan Hati </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu pizza" data-menu="original-piz">
                            <img src="{{asset('assets/img/pizza/2.png')}}" alt="pepperoni">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Ilmu Komunikasi </h3>
                                <p>Ilmiah & Populer</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu pizza" data-menu="original-piz">
                            <img src="{{asset('assets/img/pizza/3.png')}}" alt="pepperoni">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Teori Belajar </h3>
                                <p> lengkap dengan aplkasi pembelajaran  </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu pizza" data-menu="original-piz">
                            <img src="{{asset('assets/img/pizza/4.png')}}" alt="pepperoni">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>ISLAMku,ISLAMmu,ISLAMkita</h3>
                                <p> damai dan salam buat kita semua </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu pizza" data-menu="original-piz">
                            <img src="{{asset('assets/img/pizza/5.png')}}" alt="pepperoni">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Hipnosis Cinta</h3>
                                <p>cara unik dan ampuh mendapatkan cinta </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu pizza" data-menu="original-piz">
                            <img src="{{asset('assets/img/pizza/6.png')}}" alt="pepperoni">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Islam dan Tantangan Ekonomi</h3>
                                <p>membahas ekonomi islam  </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu pizza" data-menu="original-piz">
                            <img src="{{asset('assets/img/pizza/7.png')}}" alt="pepperoni">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Bertindak POSITIF </h3>
                                <p>dari berpikir positif ke bertindak positif </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu pizza" data-menu="original-piz">
                            <img src="{{asset('assets/img/pizza/8.png')}}" alt="pepperoni">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Belajar Internet of Think </h3>
                                <p> 14 jam belajar cepat IoT </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>
                        <div class="menu pizza" data-menu="original-piz">
                            <img src="{{asset('assets/img/pizza/9.png')}}" alt="pepperoni">
                            <h2 class="price">$8.2</h2>
                            <div class="desc-item">
                                <h3>Metodologi Penelitian </h3>
                                <p>cara mudah merencanakan dan melaksankan penilitian </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div>


                    </div>
                    <!-- End Menu Items -->
                </div>
                <div class="menu-page" id="drink">
                    <!-- Category -->
                    <div class="category">
                        <ul class="nav-links category">
                          
                            <li><a href="javascript:void(0)" id="cocacola-dri" class="nav-item">All</a></li>
                        </ul>
                    </div>
                    <!-- End Category -->
                    <!-- Menu items -->
                    <div class="menus">
                        <div class="menu drink" data-menu="cocacola-dri">
                            <img src="{{asset('assets/img/drink/1.png')}}" alt="coca cola">
                            <h2 class="price">$2.5</h2>
                            <div class="desc-item">
                                <h3>The Davinci Code </h3>
                                <p>buku fiksi davinci code</p>
                            </div>
                            <button type="button">&#43;</button>
                        </div><div class="menu drink" data-menu="cocacola-dri">
                            <img src="{{asset('assets/img/drink/2.png')}}" alt="coca cola">
                            <h2 class="price">$2.5</h2>
                            <div class="desc-item">
                                <h3>Buku BAPER</h3>
                                <p>Bawa Perubahan </p>
                            </div>
                            <button type="button">&#43;</button>
                        </div> 
                        <div class="menu drink" data-menu="cocacola-dri">
                            <img src="{{asset('assets/img/drink/3.png')}}" alt="coca cola">
                            <h2 class="price">$2.5</h2>
                            <div class="desc-item">
                                <h3>Legenda Nusantara</h3>
                                <p> kumpulan legenda nusantara favorit</p>
                            </div> 
                            <button type="button">&#43;</button>
                        </div>


                    </div>
                    <!-- End Menu Items -->
                </div>
            </div>
            <!-- End Main Menu -->

            <!-- Checkout Detail -->
            <div class="order">
                <div class="order-list">
                    <h3>Order Summary</h3>
                    <hr>
                    <div class="order-inner">
                        <div class="order-null">
                            <i class="fas fa-clipboard-list"></i>
                            <p>belum ada pesanan</p>
                        </div>
                    </div>
                    <hr>
                    <div class="checkout">
                        <div class="checkout-detail" id="qty">
                            <h5>0 item(s)</h5>
                            <h5>qty: <span>0</span></h5>
                        </div>
                        <div class="checkout-detail" id="subtotal">
                            <h5>Subtotal</h5>
                            <h4>$0</h4>
                        </div>
                        <div class="checkout-detail" id="tax" data-tax="5">
                            <h5>Tax</h5>
                            <h4>5%</h4>
                        </div>
                        <div class="checkout-detail" id="total">
                            <h3>Total</h3>
                            <h3>$0</h3>
                        </div>
                    </div>
                    <div class="checkout-detail">
                        <button type="button" class="btn-md outline">hold order</button>
                        <button type="button" class="btn-md fill">checkout</button>
                    </div>
                </div>
            </div>
            <!-- End Checkout Detail -->
        </div>
    </div>


    <!-- Optional JavaScript -->
    <script src="{{asset('assets/js/icons/all.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>