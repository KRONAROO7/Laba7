<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUBG</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
    if($_COOKIE['user']==''):
    ?>
    <?php else: ?>
    <div class="golovna">
        <H1>PUBG</H1>
        <p class="p1"><b>PlayerUnknown's Battlegrounds</b> - багатокористувацька відеогра, що розробляється корейською студією PUBG Corp. Доступна для Windows у сервісі Steam, iOS і
        Android, Xbox One і PlayStation 4. Гра базується на попередніх модифікаціях, які були розроблені для інших ігор
        Бренданом Гріном, відомим під псевдонімом PlayerUnknown, звідки й назва. PUBG створювалася під впливом кінострічки 2000
        року «Королівська битва» і перетворилася згодом на самостійну гру за творчого керування Брендана Гріна.</p>
        <div class="many">
            <div>
                <p><H3>Карти:</H3>
                    <ul>
                        <li><a href="maps/karakin.html">Karakin</a> </li>
                        <li><a href="maps/taego.html">Taego</a></li>
                        <li><a href="maps/rondo.html">Rondo</a></li>
                        <li><a href="maps/sanhok.html">Sanhok</a></li>
                        <li><a href="maps/erangel.html">Erangel</a></li>
                        <li><a href="maps/miramar.html">Miramar</a></li>
                    </ul> <br>
                    <h3>Зброя:</h3>
                    <ul>
                        <li><a href="guns/ar.html">AR</a> </li>
                        <li><a href="guns/dmr.html">GMR</a> </li>
                        <li><a href="guns/sr.html">SR</a></li>
                    </ul>
                </p>
            </div>
            <div class="video">
                <div>
                    <iframe class="video-1" src="https://www.youtube.com/embed/URBy9t6e8rY?si=5AfjwFf9rWWIzVCO"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="buton"><button ></button><button></button><button></button><button></button><button id="openModalBtn"></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button><button></button></div>
            </div>
        </div >
        <div id="myModal" class="modal">
        
            <div class="modal-content">
                <div>Іхі, ти все таки найшов</div>
                <div><button class="close">x</button></div>
            </div>
        
        </div>
        <div class="myframe">
            <button class="back" onclick="document.location='exit.php'">Вихід</button>
        </div>
    </div>
    <script src="java.js"></script>
    <?php endif;?>
</body>
</html>