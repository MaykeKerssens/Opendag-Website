<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Opendag</title>

    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#004c35">
        <meta name="msapplication-TileColor" content="#ebf2f0">
        <meta name="theme-color" content="#ebf2f0">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@700&family=Inconsolata&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/43363efb2f.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php 
        require_once ('includes/header.php');
        ?>
    </header>    

    <main>
    <div class="grid">
        <div class="question-box">
            <h3>Welke vakken krijg je in het eerste jaar?</h3>
            <ul>
                <li><h4>NATIVE</h4><p>Hier leer je windows applicaties te maken, met codetalen zoals Python, C# en XAML.</p></li>
                <li><h4>Web Development</h4><p>In dit vak leer je de front en backend van websites coderen, met codetalen zoals Html, css en php.</p></li>
                <li><h4>Praktijkondersteuning</h4><p>In deze les leer je alles wat je op de werkvloer nodig gaat hebben dat niet programeren is. Zoals presenteren, wireframes maken en in groepen te werken.</p></li>
                <li><h4>Praktijkwerk</h4><p>In dit vak gebruik je alle theorie van de andere lessen in de praktijk. Je werkt hier 6 uur in de week aan projecten.</p></li>
                <li><h4>Basisvakken</h4><p>Net als alle andere opleidingen krijg je ook hier rekenen, Nederlands en Engels.</p></li>
            </ul>
        </div>
        <img src="img/Curio-terheijdenseweg-350.jpg" alt="Curio Terheijdenseweg 350">
        <div class="question-box">
            <h3>Hoe ziet het rooster voor eerstejaars eruit?</h3>
            <p>In het eerste jaar heb je ongeveer 24 uur lesuren in de week. Van de basisvakken heb je per week maar 1 uur, van de theorievakken NATIVE en Web development krijg je 4/5 uur in de week. Verder heb je elke week 6 uur Praktijkwerk en 2 uurtjes Praktijkondersteuning.</p>
        </div>
        <div class="question-box">
            <h3>Hoe is het jaar ingedeeld?</h3>
            <p>Elk schooljaar is verdeeld in 2 blokken die allebei een half jaar duuren. Wanneer je een blok niet haalt hoef je maar een halfjaar over te doen, in plaats van een heel schooljaar.</p>
        </div>
        <div class="question-box">
            <h3>Is het mogelijk om te versnellen?</h3>
            <p>De opleiding duurt normaal gesproken 4 jaar, maar het is mogelijk om de opleiding in 3 jaar af te ronden. Wanneer je versnelt, vlieg je sneller door alle stof heen en hoef je minder lang stage te lopen.</p>
        </div>
        <div class="question-box">
            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit?</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus placeat hic esse laboriosam libero voluptatibus tempore voluptatem vel sint aspernatur omnis, nulla repudiandae consequatur. Beatae eum doloribus voluptatibus ab minus?</p>
        </div>
        <div class="question-box big">
            <h3>Onze leraren:</h3>
            <div class="teachers">
                <div class="teacher-box">
                    <img src="img/corne.png" alt="Corne Wagtmans">
                    <div class="teacher-text">
                        <h4>Corne Wagtmans</h4>
                        <p>docent NATIVE/PRA</p>
                    </div>
                </div>
                <div class="teacher-box">
                    <img src="img/elton.jpg" alt="Elton Boekhoudt">
                    <div class="teacher-text">
                        <h4>Elton Boekhoudt</h4>
                        <p>docent WEB/TBZ</p>
                    </div>    
                </div>
                <div class="teacher-box">
                    <img src="img/michel.png" alt="Michel Meeuwesen">
                    <div class="teacher-text">
                        <h4>Michel Meeuwesen</h4>
                        <p>docent PRA</p>
                    </div>
                </div>
                <div class="teacher-box">
                    <img src="img/steven.png" alt="Bart Roos">
                    <div class="teacher-text">
                        <h4>Steven van Rosendaal</h4>
                        <p>docent PRO/SLB</p>
                    </div>
                </div>
                <div class="teacher-box">
                    <img src="img/ine.jpg" alt="Ine Vermeer">
                    <div class="teacher-text">
                        <h4>Ine Vermeer</h4>
                        <p>docent WEB/SLB</p>
                    </div>
                </div>
                <div class="teacher-box">
                    <img src="img/wicher.png" alt="Wicher Hulzenbosch">
                    <div class="teacher-text">
                        <h4>Wicher Hulzenbosch</h4>
                        <p>docent WIN/PRA</p>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    </main>
    <footer>
        <?php
        require_once ('includes/footer.php');
        ?>
    </footer>    
</body>
</html>