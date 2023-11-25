<?php
  $mainCharacter = 'man';
  $spouse = null;
  $kids = [];
  
  if (isset($_GET['gender']) && ($_GET['gender'] === 'man' || $_GET['gender'] === 'woman')) {
    $mainCharacter = $_GET['gender'];
  }

  if (isset($_GET['spouse']) && ($_GET['spouse'] === 'man' || $_GET['spouse'] === 'woman')) {
    $spouse = $_GET['spouse'];
  }

  if (isset($_GET['kids'])) {
    $kids = explode(',', $_GET['kids']);
  }
?>

<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Bol Adviseurs - Family Desk</title>

    <link rel="icon" type="image/x-icon" href="/assets/family-desk-favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css?v=<?=filemtime('css/styles.css')?>">
  </head>
  <body>
    <main>
      <div class="graphic-wrap">
        <button class="back-btn" type="button" name="button" onclick="resetView();">
          <i class="fa-solid fa-chevron-left"></i> Terug
        </button>
        <div class="painting left-painting">
          <img class="hanger" src="assets/haakje.svg" alt="">
          <img src="assets/schilderij-1.svg" alt="">
            <div class="buttons-wrap horizontal">
              <button class="circle-button personal light-blue" data-side="personal" data-question="1" data-color="light-blue" type="button" name="button"></button>
            </div>
        </div>
        <div class="painting right-painting">
          <img class="hanger" src="assets/haakje.svg" alt="">
          <img src="assets/schilderij-2.svg" alt="">
            <div class="buttons-wrap vertical buttons-custom">
              <button class="circle-button professional green" data-side="professional" data-question="3" data-color="green" type="button" name="button"></button>
            </div>
        </div>

        <div class="bell-wrap">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 60 92" style="enable-background:new 0 0 60 92;" xml:space="preserve">
          <style type="text/css">
          	.bell-wrap .st0{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
          	.bell-wrap .st1{fill:#FFFFFF;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
          </style>
          <g>
          	<path class="st0" d="M58.1,49.7c0,4.4-3.6,8-8,8H10.3c-4.4,0-8-3.6-8-8V10c0-4.4,3.6-8,8-8h39.7c4.4,0,8,3.6,8,8V49.7z"/>
          </g>
          <path class="st1" d="M30,35.2c-6.8,0-12.4,5.5-12.4,12.4V64l-5.3,11.3h18.6"/>
          <path class="st1" d="M30,35.2c6.8,0,12.4,5.5,12.4,12.4V64l5.3,11.3H29.1"/>
          <path class="st1" d="M33.5,76.2c0,2.2-1.8,4-4,4s-4-1.8-4-4"/>
          <path class="st1" d="M42.4,81.6c-2.2,5.2-7.3,8.5-12.9,8.5s-10.7-3.4-12.9-8.5"/>
          <path class="st1" d="M25.8,77.7c0.6,1.5,2.1,2.4,3.7,2.4s3-1,3.7-2.4"/>
          <path class="st1" d="M37.8,79.7c-1.4,3.2-4.6,5.5-8.3,5.5c-3.7,0-6.9-2.3-8.3-5.5"/>
          <path class="st1" d="M33.5,76.2c0,2.2-1.8,4-4,4s-4-1.8-4-4"/>
          </svg>
          <div class="buttons-wrap vertical">
            <button class="circle-button professional green" data-side="professional" data-question="2" data-color="green" type="button" name="button"></button>
          </div>
        </div>

        <div class="cloud-wrap">

          <!-- <div class="cloud-content">
            <ul>
              <li>Droom 1</li>
              <li>Droom 2</li>
            </ul>
          </div> -->
        </div>

        <div class="think-clouds personal">
          <div class="cloud cloud-1">
            <img src="assets/boot.svg" alt="">
            <div class="buttons-wrap horizontal">
              <button class="circle-button personal red" data-side="personal" data-question="1" data-color="red" type="button" name="button"></button>
            </div>
          </div>
          <div class="cloud cloud-2">
            <div class="buttons-wrap horizontal">
              <button class="circle-button personal red" data-side="personal" data-question="2" data-color="red" type="button" name="button"></button>
            </div>
          </div>
          <div class="cloud cloud-3">
            <div class="buttons-wrap horizontal">
              <button class="circle-button personal red" data-side="personal" data-question="3" data-color="red" type="button" name="button"></button>
            </div>
          </div>
        </div>

        <div class="think-clouds professional">
          <div class="cloud cloud-1">
            <img src="assets/fabriek.svg" alt="">
            <div class="buttons-wrap horizontal">
              <button class="circle-button professional red" data-side="professional" data-question="1" data-color="red" type="button" name="button"></button>
            </div>
          </div>
          <div class="cloud cloud-2">
            <div class="buttons-wrap horizontal">
              <button class="circle-button professional red" data-side="professional" data-question="2" data-color="red" type="button" name="button"></button>
            </div>
          </div>
          <div class="cloud cloud-3"></div>
        </div>

        <div class="lamp-wrap">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 148.5 298" style="enable-background:new 0 0 148.5 298;" xml:space="preserve">
            <style type="text/css">
            	.lamp-wrap .st0{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            	.lamp-wrap .st1{fill:#FFFFFF;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            </style>
            <path class="st0" d="M109.4,18.1C99.8,8,86.2,1.6,71.1,1.6c-29,0-52.5,23.5-52.5,52.5v226.8"/>
            <path class="st1" d="M147.2,57.3c0-20.9-16.9-37.8-37.8-37.8c-20.9,0-37.8,16.9-37.8,37.8H147.2z"/>
            <path class="st1" d="M94.8,58.1c0,8.8,7.1,15.9,15.9,15.9s15.9-7.1,15.9-15.9"/>
            <path class="st0" d="M2.2,296.5c0-8.8,7.1-15.9,15.9-15.9S34,287.7,34,296.5"/>
          </svg>
        </div>

        <div class="couch-wrap">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 325.3 170.5" style="enable-background:new 0 0 325.3 170.5;" xml:space="preserve">
            <style type="text/css">
            	.couch-wrap .st0{fill:#FFFFFF;}
            	.couch-wrap .st1{fill:none;stroke:#29235C;stroke-width:2.5;stroke-miterlimit:10;}
            	.couch-wrap .st2{fill:#FFFFFF;stroke:#29235C;stroke-width:2.5;stroke-miterlimit:10;}
            	.couch-wrap .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            </style>
            <g>
            	<path class="st0" d="M301.4,106.5V39.1c0-20.5-17.1-37.1-38.1-37.1c0,0-55.1,0-55.1,0h-146c-21,0-38.1,16.6-38.1,37.1v62.4"/>
            	<path class="st1" d="M208.2,2h-146c-21,0-38.1,16.6-38.1,37.1v17.3v46.5h277.2V56.4"/>
            	<path class="st1" d="M301.4,56.4V39.1c0-20.5-17.1-37.1-38.1-37.1h-55.1"/>
            	<path class="st0" d="M273.6,143.1l10,21.5c2.5,4.4,7.9,5.7,12,3c4.1-2.7,5.3-8.5,2.8-12.9l-7.7-16.1"/>
            	<path class="st2" d="M51.9,143.1l-10,21.5c-2.5,4.4-7.9,5.7-12,3c-4.1-2.7-5.3-8.5-2.8-12.9l7.7-16.1"/>
            	<path class="st1" d="M273.6,143.1l10,21.5c2.5,4.4,7.9,5.7,12,3c4.1-2.7,5.3-8.5,2.8-12.9l-7.7-16.1"/>
            	<path class="st0" d="M212.4,143.3L50,143.1c-7.7,0-14.5-3.8-18.5-9.6L18,101.5l0,0C8.4,98.9,1.4,90.3,1.4,80
            		c0-12.3,10.2-22.4,22.8-22.4c7.9,0,14.8,3.9,18.9,9.9l12.1,23.1l0.7,0.5c14.5-6.8,35.2-11,58.1-11h97.6c22.9,0,43.6,4.2,58.1,11
            		l0.7-0.5l12.1-23.1c4.1-5.9,11-9.9,18.9-9.9c12.6,0,22.8,10,22.8,22.4c0,10.2-7,18.9-16.6,21.5l0,0L294,133.5
            		c-4,5.8-10.8,9.6-18.5,9.6l-64,0.2"/>
            	<path class="st3" d="M212.4,143.3L50,143.1c-7.7,0-14.5-3.8-18.5-9.6L18,101.5l0,0C8.4,98.9,1.4,90.3,1.4,80
            		c0-12.3,10.2-22.4,22.8-22.4c7.9,0,14.8,3.9,18.9,9.9l12.1,23.1l0.7,0.5c14.5-6.8,35.2-11,58.1-11h97.6c22.9,0,43.6,4.2,58.1,11
            		l0.7-0.5l12.1-23.1c4.1-5.9,11-9.9,18.9-9.9c12.6,0,22.8,10,22.8,22.4c0,10.2-7,18.9-16.6,21.5l0,0L294,133.5
            		c-4,5.8-10.8,9.6-18.5,9.6l-64,0.2"/>
            	<path class="st0" d="M24.1,39.1v62.4"/>
            </g>
          </svg>
        </div>

        <div class="desk-wrap">
          <div class="desk-top">
            <div class="desk-lamp">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 80 102" style="enable-background:new 0 0 80 102;" xml:space="preserve">
                <style type="text/css">
                	.desk-lamp .st0{fill:#FFFFFF;}
                	.desk-lamp .st1{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
                	.desk-lamp .st2{fill:#FFFFFF;stroke:#29235C;stroke-width:2.5;stroke-miterlimit:10;}
                	.desk-lamp .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-miterlimit:10;}
                </style>
                <g>
                	<path class="st0" d="M3.9,100.5c0-7.4,6-13.4,13.4-13.4c7.4,0,13.4,6,13.4,13.4"/>
                	<path class="st1" d="M3.9,100.5c0-7.4,6-13.4,13.4-13.4c7.4,0,13.4,6,13.4,13.4"/>
                </g>
                <path class="st2" d="M57,14.1L62,25.2l16-16L66.9,3.7l-1.4-0.9L55.9,12L57,14.1z M13.9,87.6L5.5,54.9L57,3.7"/>
                <g>
                	<path class="st0" d="M9.5,54.9c0,2.2-1.8,4-4,4s-4-1.8-4-4c0-2.2,1.8-4,4-4S9.5,52.7,9.5,54.9"/>
                	<path class="st3" d="M9.5,54.9c0,2.2-1.8,4-4,4s-4-1.8-4-4c0-2.2,1.8-4,4-4S9.5,52.7,9.5,54.9z"/>
                	<path class="st0" d="M59,3.9c0,1.3-1,2.3-2.3,2.3c-1.3,0-2.3-1-2.3-2.3c0-1.3,1-2.3,2.3-2.3C58,1.6,59,2.6,59,3.9"/>
                	<path class="st1" d="M59,3.9c0,1.3-1,2.3-2.3,2.3c-1.3,0-2.3-1-2.3-2.3c0-1.3,1-2.3,2.3-2.3C58,1.6,59,2.6,59,3.9z"/>
                </g>
              </svg>
            </div>
            <div class="monitor">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 133.8 106.2" style="enable-background:new 0 0 133.8 106.2;" xml:space="preserve">
                <style type="text/css">
                	.monitor .st0{fill:#FFFFFF;}
                	.monitor .st1{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
                	.monitor .st2{fill:none;stroke:#29235C;stroke-width:2.5;stroke-miterlimit:10;}
                </style>
                <rect x="61.2" y="76.6" class="st0" width="11.7" height="21.6"/>
                <rect x="61.2" y="76.6" class="st1" width="11.7" height="21.6"/>
                <path class="st0" d="M132.5,69.2c0,4.6-3.8,8.4-8.4,8.4h-114c-4.6,0-8.4-3.8-8.4-8.4V9.7c0-4.6,3.8-8.4,8.4-8.4h114
                	c4.6,0,8.4,3.8,8.4,8.4V69.2z"/>
                <path class="st2" d="M132.5,69.2c0,4.6-3.8,8.4-8.4,8.4h-114c-4.6,0-8.4-3.8-8.4-8.4V9.7c0-4.6,3.8-8.4,8.4-8.4h114
                	c4.6,0,8.4,3.8,8.4,8.4V69.2z"/>
                <path class="st1" d="M132.5,69.2c0,4.6-3.8,8.4-8.4,8.4h-114c-4.6,0-8.4-3.8-8.4-8.4V57.6V9.7c0-4.6,3.8-8.4,8.4-8.4h114
                	c4.6,0,8.4,3.8,8.4,8.4V69.2z"/>
                <path class="st0" d="M40.3,104.7v-3.2c0-1.8,3.8-3.2,8.4-3.2h35.1c4.6,0,8.4,1.5,8.4,3.2v3.2"/>
                <path class="st2" d="M40.3,104.7v-3.2c0-1.8,3.8-3.2,8.4-3.2h35.1c4.6,0,8.4,1.5,8.4,3.2v3.2"/>
                <path class="st1" d="M40.3,104.7v-3.2c0-1.8,3.8-3.2,8.4-3.2h35.1c4.6,0,8.4,1.5,8.4,3.2v3.2"/>
                <path class="st1" d="M13.4,60.2l10-8.6l17.9,6l23.2-19.9l6,3.3l6-3.3l9.3,8c2-2.7,27.2-29.2,27.2-29.2"/>
                <path class="st1" d="M105.4,16.4"/>
                <g>
                	<line class="st1" x1="113.7" y1="15.8" x2="113.7" y2="23.3"/>
                	<line class="st1" x1="106.2" y1="15.8" x2="113.7" y2="15.8"/>
                </g>
                <path class="st1" d="M10.1,17.8"/>
                <polyline class="st1" points="13.4,12.5 13.4,66.9 112.3,66.9 "/>
              </svg>

            <div class="monitor-content">
              <!-- Bedrijfsnaam -->
              <div class="buttons-wrap horizontal">
                <button class="circle-button professional light-blue" data-side="professional" data-question="2" data-color="light-blue" type="button" name="button"></button>
                <button class="circle-button professional orange" data-side="professional" data-question="3" data-color="orange" type="button" name="button"></button>
                <button class="circle-button professional red" data-side="professional" data-question="3" data-color="red" type="button" name="button"></button>
              </div>
            </div>
          </div>
          </div>
          <div class="desk">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 348 133" style="enable-background:new 0 0 348 133;" xml:space="preserve">
              <style type="text/css">
              	.desk .st0{fill:#FFFFFF;}
              	.desk .st1{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
              </style>
              <rect x="12.4" y="8.4" class="st0" width="321.3" height="16.7"/>
              <rect x="12.4" y="8.4" class="st1" width="321.3" height="16.7"/>
              <rect x="1.7" y="2" class="st0" width="344.9" height="6.5"/>
              <rect x="1.7" y="2" class="st1" width="344.9" height="6.5"/>
              <rect x="42" y="25.1" class="st0" width="7.9" height="106.4"/>
              <rect x="42" y="25.1" class="st1" width="7.9" height="106.4"/>
              <rect x="299" y="25.1" class="st0" width="10.2" height="106.4"/>
              <rect x="299" y="25.1" class="st1" width="10.2" height="106.4"/>
              <rect x="231.9" y="25.1" class="st0" width="67.1" height="87.9"/>
              <rect x="231.9" y="25.1" class="st1" width="67.1" height="87.9"/>
              <line class="st1" x1="233.9" y1="48.7" x2="299" y2="48.7"/>
              <line class="st1" x1="233.9" y1="69" x2="299" y2="69"/>
            </svg>
          </div>
        </div>

        <div class="flipover-wrap">
          <div class="flipover-content">
            <!-- <ul>
              <li>Ambitie 1</li>
              <li>Ambitie 2</li>
            </ul> -->
            <div class="flipover-graphic">
              <img src="assets/bar-chart.svg" alt="">
            </div>
            <div class="flipover-graphic">
              <img src="assets/pie-chart.svg" alt="">
            </div>
            <div class="buttons-wrap vertical">
              <button class="circle-button professional light-blue" data-side="professional" data-question="1" data-color="light-blue" type="button" name="button"></button>
              <button class="circle-button professional orange" data-side="professional" data-question="1" data-color="orange" type="button" name="button"></button>
              <button class="circle-button professional orange" data-side="professional" data-question="2" data-color="orange" type="button" name="button"></button>
              <button class="circle-button professional green" data-side="professional" data-question="1" data-color="green" type="button" name="button"></button>
            </div>
          </div>
          <img class="stand" src="assets/flipover-poten.svg" alt="" >
        </div>

        <div class="characters-wrap">
          <div class="character dog">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 101.5 110.3" style="enable-background:new 0 0 101.5 110.3;" xml:space="preserve">
            <style type="text/css">
            	.dog .st0{fill:#FFFFFF;}
            	.dog .st1{fill:none;stroke:#29255C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            </style>
            <g>
            	<path class="st0" d="M26,108.8c0,0-3.1-25.4,13.5-47.9c0,0,13.1-17.7,12.2-27.2c0,0-7.2-2-3.8-13.2c0,0,6.2-20.4,23.6-19.3
            		c0,0,12-2.5,14.6,10.6l14.1,1.8c0,0,1.7,12.4-9.1,14c0,0-16.2-1.9-13.1,13.6c0,0,7.7,19.7,3,34.2c0,0-7.5,14.6-3.6,33.5L26,108.8z"
            		/>
            </g>
            <g>
            	<g>
            		<path class="st0" d="M26.4,95.2c0,0,0.4-6.6,3.3-13.9c2.9-7.3,7-15,9.5-19.4c2.6-4.4,10.3-16.1,11-18.7c0.7-2.6,1.8-8.8,1.8-8.8
            			s-6.2-5.8-4.8-12.1C48.7,16.1,55,6.2,60.1,3.6s13.6-2.9,16.1-1.8c2.6,1.1,2.9,0,5.9,3.7c2.9,3.7,3.3,6.2,3.3,6.2l14.7,2.6
            			c0,0,0,10.3-3.7,11.4s-8.1,1.5-8.8,1.5c-0.7,0-5.1-0.7-7.3,2.2c-2.2,2.9-2.2,4.1-2.6,5.9c-0.4,1.8-0.7,5.8,0.7,10.2
            			c1.5,4.4,4,15,2.9,23.8S76.2,82.1,76.2,88s1.1,20.9,1.1,20.9H26L26.4,95.2z"/>
            		<path class="st1" d="M20.7,63c0,0-19.4,0-19.4,22.9S26,108.8,26,108.8v-5.3c0-37,25.7-50.8,25.7-69.5 M68.3,13.6
            			c0,0,0,21.2-10.6,21.2c-5.3,0-11.4-1.8-10.6-8.8C48.9,10.1,61.2,1.3,66.5,1.3h7.1C84.1,1.3,86,11.9,86,11.9l14.1,1.8
            			c0,0,1.8,14.1-10.6,14.1s-11.7,6.6-11.7,12.1s4.6,12.6,4.6,21.4c0,15.9-3.4,16.8-5.3,26.5c-1.8,8.8,0,21.2,0,21.2h10.6"/>
            	</g>
            	<line class="st1" x1="77.1" y1="13.6" x2="77.1" y2="10"/>
            	<g>
            		<path class="st1" d="M76.6,108.8H26.4 M78.3,43.5c0,0-2.9,1.8-13.5,1.8s-14.1-3.5-14.1-3.5 M56,108.8
            			c14.1-35.3-10.6-35.3-10.6-35.3"/>
            	</g>
            </g>
            </svg>
          </div>
          <div class="humans">
            <?php foreach($kids as $index => $kid) { ?>
              <div class="character kid <?php echo $kid === 'girl' ? 'girl' : 'boy'; ?>">
                <?php include $kid === 'girl' ? 'girlSVG.php' : 'boySVG.php'; ?>
                <div class="buttons-wrap vertical">
                  <?php if (count($kids) === 1) { ?>
                    <button class="circle-button personal orange" data-side="personal" data-question="1" data-color="orange" type="button" name="button"></button>
                    <button class="circle-button personal orange" data-side="personal" data-question="2" data-color="orange" type="button" name="button"></button>
                    <button class="circle-button personal orange" data-side="personal" data-question="3" data-color="orange" type="button" name="button"></button>
                  <?php } ?>

                  <?php if (count($kids) === 2) { ?>
                    <?php if ($index === 1) { ?>
                      <button class="circle-button personal orange" data-side="personal" data-question="1" data-color="orange" type="button" name="button"></button>
                    <?php } else { ?>
                      <button class="circle-button personal orange" data-side="personal" data-question="2" data-color="orange" type="button" name="button"></button>
                      <button class="circle-button personal orange" data-side="personal" data-question="3" data-color="orange" type="button" name="button"></button>
                    <?php } ?>
                  <?php } ?>

                  <?php if (count($kids) > 2) { ?>
                    <?php if ($index === count($kids) - 1) { ?>
                      <button class="circle-button personal orange" data-side="personal" data-question="1" data-color="orange" type="button" name="button"></button>
                    <?php } else if ($index === count($kids) - 2) { ?>
                      <button class="circle-button personal orange" data-side="personal" data-question="2" data-color="orange" type="button" name="button"></button>
                    <?php } else if ($index === count($kids) - 3) { ?>
                      <button class="circle-button personal orange" data-side="personal" data-question="3" data-color="orange" type="button" name="button"></button>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
            <?php } ?>
           
            <?php if (isset($spouse) && $spouse === 'woman') { ?>
              <div class="character spouse woman">
                <img src="assets/partner-vrouw.svg" alt="">
                <div class="buttons-wrap vertical">
                  <button class="circle-button personal green" data-side="personal" data-question="2" data-color="green" type="button" name="button"></button>
                </div>
              </div>
            <?php } else if (isset($spouse) && $spouse === 'man') { ?>
              <div class="character spouse man">
                <img src="assets/partner-man.svg" alt="">
                <div class="buttons-wrap vertical">
                  <button class="circle-button personal green" data-side="personal" data-question="2" data-color="green" type="button" name="button"></button>
                </div>
              </div>
            <?php } ?>
            <?php if ($mainCharacter === 'woman') { ?>
              <div class="character main-character woman">
                <img src="assets/ondernemer-vrouw.svg" alt="">
                <div class="buttons-wrap vertical personal-btns">
                  <button class="circle-button personal green" data-side="personal" data-question="3" data-color="green" type="button" name="button"></button>
                  <button class="circle-button personal light-blue" data-side="personal" data-question="2" data-color="light-blue" type="button" name="button"></button>
                  <button class="circle-button personal red" data-side="personal" data-question="4" data-color="red" type="button" name="button"></button>
                  <button class="circle-button personal green" data-side="personal" data-question="1" data-color="green" type="button" name="button"></button>
                  <button class="circle-button personal light-blue" data-side="personal" data-question="3" data-color="light-blue" type="button" name="button"></button>
                  <button class="circle-button personal light-blue" data-side="personal" data-question="4" data-color="light-blue" type="button" name="button"></button>
                </div>
                <div class="buttons-wrap vertical professional-btns">
                  <button class="circle-button professional red" data-side="professional" data-question="4" data-color="red" type="button" name="button"></button>
                </div>
              </div>
            <?php } else if ($mainCharacter === 'man') { ?>
              <div class="character main-character man">
                <img src="assets/ondernemer-man.svg" alt="">
                <div class="buttons-wrap vertical personal-btns">
                  <button class="circle-button personal green" data-side="personal" data-question="3" data-color="green" type="button" name="button"></button>
                  <button class="circle-button personal light-blue" data-side="personal" data-question="2" data-color="light-blue" type="button" name="button"></button>
                  <button class="circle-button personal red" data-side="personal" data-question="4" data-color="red" type="button" name="button"></button>
                  <button class="circle-button personal green" data-side="personal" data-question="1" data-color="green" type="button" name="button"></button>
                  <button class="circle-button personal light-blue" data-side="personal" data-question="3" data-color="light-blue" type="button" name="button"></button>
                  <button class="circle-button personal light-blue" data-side="personal" data-question="4" data-color="light-blue" type="button" name="button"></button>
                </div>
                <div class="buttons-wrap vertical professional-btns">
                  <button class="circle-button professional red" data-side="professional" data-question="4" data-color="red" type="button" name="button"></button>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>

        <div class="all-bubbles">
          <div class="bubbles-personal">
            <div class="question-bubble orange bubble-1">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Hoe bereid je jouw kinderen voor op de toekomst?
                </div>
              </div>
            </div>

            <div class="question-bubble orange bubble-2">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Hoe kijken jouw kinderen aan tegen jouw bedrijf?
                </div>
              </div>
            </div>

            <div class="question-bubble orange bubble-3">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Hoe bewaak je dat jouw kinderen de juiste keuzes maken?
                </div>
              </div>
            </div>

            <div class="question-bubble green bubble-1">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Hoe ziet jouw OASE eruit?
                </div>
              </div>
            </div>

            <div class="question-bubble green bubble-2">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Wat is het grootste risico als je relatie eindigt?
                </div>
              </div>
            </div>

            <div class="question-bubble green bubble-3">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Zeg in vijf woorden wat er gebeurt als jij er niet meer bent?
                </div>
              </div>
            </div>

            <div class="question-bubble red bubble-1">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Wat is je ultieme droom na jouw pensioen?
                </div>
              </div>
            </div>

            <div class="question-bubble red bubble-2">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Hoe lang wil je nog actief blijven in jouw bedrijf?
                </div>
              </div>
            </div>

            <div class="question-bubble red bubble-3">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Hoe ziet je dag/week/maand eruit na je pensioen?
                </div>
              </div>
            </div>

            <div class="question-bubble red bubble-4">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Waar word je écht blij van?
                </div>
              </div>
            </div>

            <div class="question-bubble light-blue bubble-1">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Wat kom je nog tekort om lang en gelukkig oud te worden?
                </div>
              </div>
            </div>

            <div class="question-bubble light-blue bubble-2">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Ligt er een plan om je leven lang je brood te kopen?
                </div>
              </div>
            </div>

            <div class="question-bubble light-blue bubble-3">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Heb je inzicht in wat er binnenkomt en wat je uitgeeft?
                </div>
              </div>
            </div>

            <div class="question-bubble light-blue bubble-4">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Wat vormt de grootste onzekerheid in je financiële positie?
                </div>
              </div>
            </div>

          </div>
          <!-- Bubbles professional -->
          <div class="bubbles-professional">
            <div class="question-bubble orange bubble-1">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Welke trends en ontwikkelingen zijn voor jouw bedrijf van belang?
                </div>
              </div>
            </div>

            <div class="question-bubble orange bubble-2">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Welke elementen beïnvloeden de waarde van je onderneming?
                </div>
              </div>
            </div>

            <div class="question-bubble orange bubble-3">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Waar staat jouw bedrijf over 5 jaar?
                </div>
              </div>
            </div>

            <div class="question-bubble green bubble-1">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Hoe ziet jouw opvolgingstraject eruit?
                </div>
              </div>
            </div>

            <div class="question-bubble green bubble-2">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Hoe ziet jouw noodopvolgingsplan eruit?
                </div>
              </div>
            </div>

            <div class="question-bubble green bubble-3">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Naar wie wordt gekeken als je (tijdelijk) uitvalt?
                </div>
              </div>
            </div>

            <div class="question-bubble red bubble-1">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Wat is jouw ultieme droom om met je onderneming te bereiken?
                </div>
              </div>
            </div>

            <div class="question-bubble red bubble-2">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Wanneer ben jij tevreden? Wanneer is het voor jou geslaagd?
                </div>
              </div>
            </div>

            <div class="question-bubble red bubble-3">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Hoe ziet groei er voor jou uit?
                </div>
              </div>
            </div>

            <div class="question-bubble red bubble-4">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Wat maakt jou bedrijf uniek/bijzonder?
                </div>
              </div>
            </div>

            <div class="question-bubble light-blue bubble-1">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Welke kengetallen gebruik je om beslissingen te maken?
                </div>
              </div>
            </div>

            <div class="question-bubble light-blue bubble-2">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Wat is de grootste kans voor je bedrijf?
                </div>
              </div>
            </div>

            <div class="question-bubble light-blue bubble-3">
              <div class="bubble-bubble">
                <div class="bubble-content">
                  Hoeveel risico loop jij met je bedrijf?
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
      <div class="categories-wrap">
        <div class="category-half categories-personal">
          <button class="category red" data-color="red" data-side="personal" role="button">
            <img src="assets/icoon-hart.svg" alt="" width="65">
            <h5>Dromen en ambities</h5>
          </button>
          <button class="category orange" data-color="orange" data-side="personal" role="button">
            <img src="assets/icoon-klok.svg" alt="" width="65">
            <h5>Toekomst</h5>
          </button>
          <button class="category light-blue" data-color="light-blue" data-side="personal" role="button">
            <img src="assets/icoon-spaarvarken.svg" alt="" width="65">
            <h5>Inzicht (financiële) positie</h5>
          </button>
          <button class="category green" data-color="green" data-side="personal" role="button">
            <img src="assets/icoon-medisch.svg" alt="" width="65">
            <h5>Noodopvolging</h5>
          </button>
        </div>

        <div class="category-half categories-professional">
          <button class="category red" data-color="red" data-side="professional" role="button">
            <img src="assets/icoon-hart.svg" alt="" width="65">
            <h5>Dromen en ambities</h5>
          </button>
          <button class="category orange" data-color="orange" data-side="professional" role="button">
            <img src="assets/icoon-klok.svg" alt="" width="65">
            <h5>Toekomst</h5>
          </button>
          <button class="category light-blue" data-color="light-blue" data-side="professional" role="button">
            <img src="assets/icoon-spaarvarken.svg" alt="" width="65">
            <h5>Inzicht (financiële) positie</h5>
          </button>
          <button class="category green" data-color="green" data-side="professional" role="button">
            <img src="assets/icoon-medisch.svg" alt="" width="65">
            <h5>Noodopvolging</h5>
          </button>
        </div>
      </div>

      <footer>
        <div class="column">
          <img src="assets/bol-logo.svg" alt="Bol Adviseurs - Logo" width="75">
        </div>
        <div class="footer-center">
          <h2>“Samen brengen wij jouw levenswerk in kaart”</h2>
        </div>
        <div class="column">
          <!-- Fill -->
        </div>
      </footer>
    </main>

    <div class="mobile-alert">
      De Bol Family Desk is gemaakt voor grotere schermen. Gebruik een tablet, laptop of desktop om deze applicatie te gebruiken.
    </div>

    <div class="debug-menu d-none">
      <button type="button" name="button" onClick="addCharacter('man', charactersSvg.man);">Voeg man toe</button>
      <button type="button" name="button" onClick="addCharacter('woman', charactersSvg.woman);">Voeg vrouw toe</button>
      <button type="button" name="button" onClick="addCharacter('kid boy', charactersSvg.boy);">Voeg jongen toe</button>
      <button type="button" name="button" onClick="addCharacter('kid girl', charactersSvg.girl);">Voeg meisje toe</button>
    </div>

    <script async src="https://kit.fontawesome.com/5da4f89d11.js" crossorigin="anonymous"></script>
    <script src="/js/main.js?v=<?=filemtime('js/main.js')?>"></script>
  </body>
</html>
