<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
    <script src="script1.js"></script>
    <style>
        <?php include('main1.css'); ?>
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <h3>ADMIN</h3>
            </div>
            <div class="nav" id="small_menu">
                <ul>
                    <li><a href="tampilan1.php">Home</a></li>
                    <li><a href="#streaming">Film</a></li>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="read.php">Crud Film</a></li>
                    <li><a href="logout_admin.php">Log Out</a></li>

    
                </ul>
            </div>
            <div class="user">
                <i class="fas fa-bell"></i>
                <label for="gelapcuy"> 
                <input type="checkbox" id="gelapcuy" />
                </label>
            </div>  
        </div>
    </header>
    
    <section class="landing">
        <div>
            
        </div>
        <div class="boks">
            <form action="code.php" method='post' autocomplete="off">
                
            </form>
        </div>
    </section>

    <section id="streaming">
        <div class="streaming">
            <div class = "container-1">
                <div class="poster">
                    <div class="imeg">
                        <img src="1.jpg" alt="">
                    </div>
                </div>
                <div class="inside-streaming">
                    <span>NOW STREAMING</span>
                    <div class="line1"></div>
                    <h1>AVENGERS : END GAME</h1>
                    <p>Action,Adventure </p>
                    <p>| 2018 | USA | 180 min</p>
                    <div class="btn1">
                    <a href="#"><i class="fas fa-play"></i>Watch Now</a>
                    <a href="#"><i class="fas fa-heart"></i>Watch Later</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="streaming">
            <div class = "container-1">
                <div class="poster">
                    <div class="imeg">
                        <img src="2.jpg" alt="">
                    </div>
                </div>
                <div class="inside-streaming">
                    <span>NOW STREAMING</span>
                    <div class="line1"></div>
                    <h1>LASKAR PELANGI 2008</h1>
                    <p>Drama,Comedy </p>
                    <p>| 2008 | INDO | 130 min</p>
                    <div class="btn1">
                    <a href=""><i class="fas fa-play"></i>Watch Now</a>
                    <a href=""><i class="fas fa-heart"></i>Watch Later</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="streaming">
            <div class = "container-1">
                <div class="poster">
                    <div class="imeg">
                        <img src="3.png" alt="">
                    </div>
                </div>
                <div class="inside-streaming">
                    <span>NOW STREAMING</span>
                    <div class="line1"></div>
                    <h1>GODZILA VS KONG 2021</h1>
                    <p>Action,Adventure </p>
                    <p>| 2021 | USA | 160 min</p>
                    <div class="btn1">
                    <a href=""><i class="fas fa-play"></i>Watch Now</a>
                    <a href=""><i class="fas fa-heart"></i>Watch Later</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="streaming">
            <div class = "container-1">
                <div class="poster">
                    <div class="imeg">
                        <img src="4.jpg" alt="">
                    </div>
                </div>
                <div class="inside-streaming">
                    <span>NOW STREAMING</span>
                    <div class="line1"></div>
                    <h1>JUMAJI THE NEXT LEVEL</h1>
                    <p>Action,Adventure </p>
                    <p>| 2019 | USA | 190 min</p>
                    <div class="btn1">
                    <a href="#"><i class="fas fa-play"></i>Watch Now</a>
                    <a href="#"><i class="fas fa-heart"></i>Watch Later</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="streaming">
            <div class = "container-1">
                <div class="poster">
                    <div class="imeg">
                        <img src="5.jpg" alt="">
                    </div>
                </div>
                <div class="inside-streaming">
                    <span>NOW STREAMING</span>
                    <div class="line1"></div>
                    <h1>FAST & FURIOUS 9 (2021)</h1>
                    <p>Action,Adventure </p>
                    <p>| 2021 | USA | 190 min</p>
                    <div class="btn1">
                    <a href="#"><i class="fas fa-play"></i>Watch Now</a>
                    <a href="#"><i class="fas fa-heart"></i>Watch Later</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about"></section>
    <div class="about">
        <h1>ABOUT ME</h1>
        <p>NAMA : Diky Dwicandra <br> NIM : 2109106038 <br> Alasan memilih tema ini: <br>
            <span id="less">...</span>
            <span id="more">
                Saya memilih tema ini karena sangat menarik, bisa menginformasikan ke khalayak
                umum melalui dunia maya,dengan fasilitas internet,, juga memudahkan orang lain
                untuk membaca artikel tentang entertainment, terutama tentang masalah film
            </span>
        </p>
        <button onclick="myFunction()" id="btn">Read More</button>
    </div>
    </section>
    <footer>
        <section class="footer">
            <div class="inside-footer">
                <div class="logopart">
                    <h1>Lm21</h1>
                </div>
                <div class="copyright">
                    <p>copyright &copy <span>Informatika</span>,All Rights Reserved-2021.</p>
                </div>
                <div class="socials">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>                    
                </div>
                  
            </div>
        </section>
    </footer>
    
    
    
</body>

</html>