<?php 
session_start();
if(isset($_SESSION['userId']))
{
    if($_SESSION['userId'] == null)
    {
        header('location:index.php');
    }
}
    
    
    
?>
<html>
    <head>
        <title>Racuni</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/tooltip.css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/Chart.js"></script>
        <script src="js/dataProc.js"></script>
        <script src="js/tooltip.js"></script>
    </head>
    <body >
        <header class="top-header">
            <span class="menu-icon" onclick="">☰</span>
            <div class="top-header-navigation">
                <ul class="navigation-items" title="Bills">
                    <li><a href="info.php">DOMOV</a></li>
                    <li><a>RACUNI</a></li>
                    <li><a href="php/login.php?a=odjava">ODJAVA</a></li>
                </ul>
            </div>
        </header>
        <div class="content-div">
            <div class="side-div">
                <header class="side-header">
                    <ul class="top-ul">
                        <br/>
                        <li class="side-menu-li"><span class="tooltip" onmouseover="tooltip.pop(this, '<span class=\'red\'>Vnos novega računa</span>', {position:1})" onlclick="window.location='info.php'">
                            Dodaj nov račun
                            </span></li>
                        <li class="side-menu-li"><span class="tooltip" onmouseover="tooltip.pop(this, '<span class=\'red\'>Urejanje računov in njegovih vrednosti</span>', {position:1})">
                            Urejanje računov
                            </span>
                        </li>
                        <li class="side-menu-li"><span class="tooltip" onmouseover="tooltip.pop(this, '<span class=\'red\'>Izpis posameznih stroškov</span>', {position:1})">
                            Izpis mesečnih stroškov
                            </span>

                        </li>
                    </ul>
                </header>

            </div>
            <div class="seperator-div-vertical"></div>
            <div class="main-div">
                <canvas id="letniChart" ></canvas>
                <script>
                    var ctx = document.getElementById("letniChart");
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["Januar" , "Februar" , "Marec", "April", "May" , "Junij", "Julij", "Avgust", "September", "Oktober", "November", "December"],
                            datasets: [{
                                label: '€ spent in each Month',
                                data: [500,600,550,300,400,700,2000,800,900,700,600,0],
                                backgroundColor: [
                                    'rgba(13, 128, 227, 0.5)'
                                ],
                                borderColor: [
                                    'rgba(13, 128, 227, 0.97)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                </script>
                <div class="seperator-div-horizontal"></div>
                <canvas id="letni2Chart" ></canvas>
                <script>
                    var ctx = document.getElementById("letni2Chart");
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["Januar" , "Februar" , "Marec", "April", "May" , "Junij", "Julij", "Avgust", "September", "Oktober", "November", "December"],
                            datasets: [{
                                label: '€ spent in each Month',
                                data: [350,250,150,400,230,150,180,180,250,320,300,100],
                                backgroundColor: [
                                    'rgba(13, 128, 227, 0.5)'
                                ],
                                borderColor: [
                                    'rgba(13, 128, 227, 0.97)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                </script>
                <div class="seperator-div-horizontal"></div>

            </div>
        </div>
    </body>
    <footer>
        
    </footer>
</html>