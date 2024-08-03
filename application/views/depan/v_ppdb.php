<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>
<style>
        .text-container {
            margin-left: 50px;
        }
        .social-icons {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding-right: 20px;
        }
        .social-icons a {
            color: white;
            font-size: 24px;
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
        }
        .social-icons a:last-child {
            margin-right: 20px;
        }

        .search-section,
        .calendar-section {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .search-section .heading-blue,
        .calendar-section .heading-blue {
            background-color: #007bff;
            padding: 10px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            text-align: left;
            margin-bottom: 20px;
        }

        .calendar {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .calendar .month-indicator {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .calendar .day-of-week {
            display: flex;
            justify-content: space-between;
            width: 100%;
            font-weight: bold;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .calendar .date-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            width: 100%;
            gap: 10px;
            margin-top: 10px;
        }

        .calendar .date-grid button {
            background-color: #f8f9fa;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .calendar .date-grid button:hover {
            background-color: #007bff;
            color: white;
        }

        .calendar .date-grid button.today {
            background-color: #007bff;
            color: white;
        }

        .poster-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .poster-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .carousel-inner img {
            max-width: 100%;
            height: auto;
        }

</style>

<body>
<!-- <div style="position:fixed;left:20px;bottom:20px;">
<a href="https://api.whatsapp.com/send?phone=+6285100257920&text=Halo">
<button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px">
<img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Whatsapp Kami</button></a>
</div> -->
  <!--============================= HEADER =============================-->
  <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>(0356) 325079
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>smkmuhammadiyahtuban@yahoo.co.id
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Jl. HOS Cokroaminoto .PO.BOX.23 Tuban
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url().'theme/images/logo-darkk.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('about');?>">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru');?>">Guru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswa');?>">Siswa</a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">PPDB</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Kegitan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>">Bahan Ajar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li>
                                <!-- <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">Contact</a>
                                </li> -->
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section>
</section>
<!--//END HEADER -->

<div class="container section">
    <section class="mt-5">
        <div class="row">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('');?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">PPDB</li>
                    </ol>
                </nav>

                <!-- Poster Section Start -->
                <div class="poster-container">
                    <img src="<?php echo base_url('theme/images/poster_ppdb.jpg'); ?>" alt="Poster">
                </div>
                <!-- Poster Section End -->

                <!-- Carousel Section Start -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('theme/images/ppdb_carausel8.jpg'); ?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url('theme/images/ppdb_carausel1.jpg'); ?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url('theme/images/ppdb_carausel2.jpg'); ?>" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url('theme/images/ppdb_carausel3.jpg'); ?>" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url('theme/images/ppdb_carausel4.jpg'); ?>" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url('theme/images/ppdb_carausel5.jpg'); ?>" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url('theme/images/ppdb_carausel6.jpg'); ?>" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url('theme/images/ppdb_carausel7.jpg'); ?>" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- Carousel Section End -->

            </div>
            <div class="col-md-4">
                
                <div class="calendar-section">
                    <h2 class="heading-blue">Kalender</h2>
                    <div class="calendar">
                        <div class="month-indicator">
                            <select id="month-select">
                                <option value="0">January</option>
                                <option value="1">February</option>
                                <option value="2">March</option>
                                <option value="3">April</option>
                                <option value="4">May</option>
                                <option value="5">June</option>
                                <option value="6">July</option>
                                <option value="7">August</option>
                                <option value="8">September</option>
                                <option value="9">October</option>
                                <option value="10">November</option>
                                <option value="11">December</option>
                            </select>
                            <select id="year-select"></select>
                        </div>
                        <div class="day-of-week">
                            <div>M</div>
                            <div>T</div>
                            <div>W</div>
                            <div>T</div>
                            <div>F</div>
                            <div>S</div>
                            <div>S</div>
                        </div>
                        <div class="date-grid" id="date-grid"></div>
                        <a href="#" id="previous-month" class="mt-2">« Previous</a>
                        <a href="#" id="next-month" class="mt-2">Next »</a>
                    </div>
                </div>

                <!-- Daftar Online Button Start -->
                    <div class="text-center mt-4">
                        <a href="https://forms.gle/6U9YMcZLwPVnyDbA7" target="_blank" class="btn btn-primary btn-lg">Daftar Secara Online</a>
                    </div>
                <!-- Daftar Online Button End -->

            </div>
        </div>
    </section>
</div>
<br><br>

<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/logo-whitee.png'?>" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y');?> © copyright by Ricky A.S</a>. <br>All rights reserved.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sitemap">
                    <h3>Menu Utama</h3>
                    <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li><a href="<?php echo site_url('about');?>">About</a></li>
                        <li><a href="<?php echo site_url('artikel');?>">Kegiatan</a></li>
                        <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                        <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sitemap">
                    <h3>Akademik</h3>
                    <ul>
                        <li><a href="<?php echo site_url('guru');?>">Guru</a></li>
                        <li><a href="<?php echo site_url('siswa');?>">Siswa</a></li>
                        <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                        <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                        <li><a href="<?php echo site_url('download');?>">Bahan Ajar</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address">
                    <h3>Hubungi Kami</h3>
                    <p id="alamat" class="clickable-address"><span>Alamat : </span>  Jl. HOS Cokroaminoto .PO.BOX.23 Tuban, Jawa Timur, INA. 62381 (Klik Disini)</p>
                    <p>Email : smkmuhammadiyahtuban@yahoo.co.id
                        <br> No. Telepon : (0356) 325079 </p>
                    <ul class="footer-social-icons">
                        <li><a href="https://www.facebook.com/smkpelayarantuban"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/smkpm_tuban/"><i class="fa fa-instagram fa-in" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/@smkpelayaranmuhammadiyahtu9615"><i class="fa fa-youtube fa-tw" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--//END FOOTER -->

<!-- CSS untuk Gaya Teks Klik -->
<style>
    .clickable-address {
        color: blue;
        cursor: pointer;
        text-decoration: underline;
    }
    .clickable-address:hover {
        color: darkblue;
    }
</style>

<!-- JavaScript untuk Redirect ke Google Maps saat alamat diklik -->
<script>
    document.getElementById('alamat').addEventListener('click', function() {
        window.location.href = 'https://maps.app.goo.gl/GsECFJP24RpP14ZD6';
    });
</script>
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Kalender Dinamis
        const monthSelect = document.getElementById('month-select');
        const yearSelect = document.getElementById('year-select');
        const dateGrid = document.getElementById('date-grid');
        const previousMonthButton = document.getElementById('previous-month');
        const nextMonthButton = document.getElementById('next-month');

        function populateYearSelect() {
            const currentYear = new Date().getFullYear();
            for (let i = currentYear - 10; i <= currentYear + 10; i++) {
                const option = document.createElement('option');
                option.value = i;
                option.textContent = i;
                yearSelect.appendChild(option);
            }
        }

        function renderCalendar(month, year) {
            dateGrid.innerHTML = '';
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const today = new Date();
            const isCurrentMonth = (month === today.getMonth() && year === today.getFullYear());

            for (let i = 0; i < firstDay; i++) {
                const emptyCell = document.createElement('div');
                dateGrid.appendChild(emptyCell);
            }

            for (let i = 1; i <= daysInMonth; i++) {
                const dayButton = document.createElement('button');
                dayButton.textContent = i;
                if (isCurrentMonth && i === today.getDate()) {
                    dayButton.classList.add('today');
                }
                dateGrid.appendChild(dayButton);
            }

            monthSelect.value = month;
            yearSelect.value = year;
        }

        monthSelect.addEventListener('change', () => {
            const month = parseInt(monthSelect.value);
            const year = parseInt(yearSelect.value);
            renderCalendar(month, year);
        });

        yearSelect.addEventListener('change', () => {
            const month = parseInt(monthSelect.value);
            const year = parseInt(yearSelect.value);
            renderCalendar(month, year);
        });

        previousMonthButton.addEventListener('click', (event) => {
            event.preventDefault();
            let month = parseInt(monthSelect.value) - 1;
            let year = parseInt(yearSelect.value);
            if (month < 0) {
                month = 11;
                year -= 1;
            }
            renderCalendar(month, year);
        });

        nextMonthButton.addEventListener('click', (event) => {
            event.preventDefault();
            let month = parseInt(monthSelect.value) + 1;
            let year = parseInt(yearSelect.value);
            if (month > 11) {
                month = 0;
                year += 1;
            }
            renderCalendar(month, year);
        });

        document.addEventListener('DOMContentLoaded', () => {
            populateYearSelect();
            const today = new Date();
            renderCalendar(today.getMonth(), today.getFullYear());
        });
        </script>
    </body>

    </html>
