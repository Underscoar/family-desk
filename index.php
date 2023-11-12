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
            <div class="character kid girl">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 96.3 211.3" style="enable-background:new 0 0 96.3 211.3;" xml:space="preserve">
                <style type="text/css">
                	.girl .st0{fill:#FFFFFF;}
                	.girl .st1{fill:#B1D2EF;}
                	.girl .st2{fill:none;stroke:#B1D2EF;stroke-width:2.5;stroke-miterlimit:10;}
                	.girl .st3{fill:none;stroke:#29255C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
                	.girl .st4{fill:none;stroke:#29255C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                </style>
                <g>
                	<path class="st0" d="M32,65.7c0,0-25.7,21.6-9.8,55.2c0,0-7.1,18.9-15.8,32.6c0,0,4.7,5,25.9,11.2l4.7,27.5c0,0,1.8-1,10.8-1
                		c0,0,3.2-1.1,12.4,0.8l4.5-27.7c0,0,12.6-1.4,27.5-10.6c0,0-12.1-21-15.8-32.8c0,0,16.7-25.7-9.6-55.8C67,65,52.8,75.2,32,65.7z"/>
                	<path class="st0" d="M6.4,60.7c0,0-4.5-25.2,20.4-35.7c0,0-1.4-22.3,22-23.5c0,0,22.2-0.8,22.6,24.2c0,0,20.9,6.1,18.7,34.9
                		c0,0-19.3,0-21.6-20.7c0,0-6.6,19.1-19.7,17.8c0,0-13.5,0.4-20.1-23.1C28.7,34.7,29.7,60.5,6.4,60.7z"/>
                </g>
                <g>
                	<path class="st0" d="M32.4,164.6l5.9,27.5h20.5l5.9-26.8C64.6,165.4,42.3,167.6,32.4,164.6"/>
                	<path class="st1" d="M66.1,66c0,0-5.9,2.9-12.5,3.3S40,68.6,40,68.6l-8.1-2.9c0,0,0,31.5-7.3,49.9C17.3,133.9,7,153,7,153
                		s20.9,12.8,40.7,12.8s44.4-12.1,44.4-12.1S69.4,126.5,66.1,66"/>
                	<path class="st2" d="M66.1,66c0,0-5.9,2.9-12.5,3.3S40,68.6,40,68.6l-8.1-2.9c0,0,0,31.5-7.3,49.9C17.3,133.9,7,153,7,153
                		s20.9,12.8,40.7,12.8s44.4-12.1,44.4-12.1S69.4,126.5,66.1,66z"/>
                	<path class="st0" d="M30.4,40.3c0,0,6.7,13.5,10.1,15.9s15.9,1.4,17.8-1s8.2-9.6,8.2-9.6l1.4-8.2L44.8,34L30.4,40.3z"/>
                	<path class="st0" d="M7.3,47.8c0,0,1-5.3,2.2-7.2s7.7-2.7,7.7-2.7L27.8,41l-1.2,5.8c0,0-9.2,4.3-9.6,4.3
                		C16.5,51.1,7.3,47.8,7.3,47.8"/>
                	<path class="st0" d="M89,47.8c0,0-1-5.3-2.2-7.2s-7.7-2.7-7.7-2.7L68.5,41l1.2,5.8c0,0,9.2,4.3,9.6,4.3C79.9,51.1,89,47.8,89,47.8"
                		/>
                	<path class="st3" d="M32.5,164.3l4.5,26"/>
                	<path class="st4" d="M26.2,24.1c0-12.5,10.1-22.6,22.6-22.6s22.6,10.1,22.6,22.6 M95,60.7c0,0-17.1,0.3-22.1-7.9
                		c-6.2-10-3.6-13.7-4-28.2 M47.7,15c0,0,5.4,4.7,10,6.2C62.3,22.6,91.5,27,90,57.8 M1.4,60.7c0,0,17.1,0.3,22.1-7.9
                		c6.2-10,3.6-13.7,4-28.2 M48.8,15c0,0-5.4,4.7-10,6.2C34.2,22.6,5,27,6.5,57.8 M28.7,27.9c0,16.5,9.3,29.9,20.8,29.9
                		s20.8-13.4,20.8-29.9 M67,65c0,0,25.3,24.5,9.6,55.8 M31.8,65c0,0-25.3,24.5-9.6,55.8 M31.9,64.8c5.1,3,11.1,4.7,17.5,4.7
                		s12.4-1.7,17.5-4.7L67,65c0,32.5,9.3,62.8,25.3,88.4v0.2c-10.6,7.5-25.9,12.2-42.8,12.2c-17.1,0-32.4-4.8-43.1-12.4
                		c16-25.6,25.3-56,25.3-88.4L31.9,64.8z"/>
                	<g>
                		<path class="st1" d="M67.5,201.1c1.1,4.7-1.9,8.5-6.7,8.5H37.2c-4.8,0-7.8-3.8-6.6-8.5l0.4-1.5c1.2-4.7,6.1-8.5,10.9-8.5h14.5
                			c4.8,0,9.7,3.8,10.8,8.5L67.5,201.1z"/>
                		<path class="st3" d="M67.5,201.1c1.1,4.7-1.9,8.5-6.7,8.5H37.2c-4.8,0-7.8-3.8-6.6-8.5l0.4-1.5c1.2-4.7,6.1-8.5,10.9-8.5h14.5
                			c4.8,0,9.7,3.8,10.8,8.5L67.5,201.1z"/>
                	</g>
                	<line class="st3" x1="48.8" y1="167.3" x2="48.8" y2="200.2"/>
                	<line class="st3" x1="64.6" y1="165.4" x2="60.2" y2="190.3"/>
                </g>
              </svg>
              <div class="buttons-wrap vertical">
                <button class="circle-button personal orange" data-side="personal" data-question="1" data-color="orange" type="button" name="button"></button>
              </div>
            </div>
            <div class="character kid boy">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 76 214" style="enable-background:new 0 0 76 214;" xml:space="preserve">
              <style type="text/css">
              	.boy .st0{fill:#FFFFFF;}
              	.boy .st1{fill:#B0D2F0;}
              	.boy .st2{fill:#29235C;}
              	.boy .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
              	.boy .st4{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
              </style>
              <g>
              	<path class="st0" d="M20.4,196.5l-0.3-42.7c0,0-18.4,2.5-18.3-18.1s0-32.4,0-32.4h72.7l0,33.3c0,0,2.5,18.2-18.5,17.8
              		c0,39.6,0,42.2,0,42.2H20.4z"/>
              	<path class="st0" d="M24.8,57.4c0,0,0.2,1.6,14,6.5C58.7,60.8,58,38,59.4,32.5S59,1,55.1,1.4S52,6,48,5s-9.9-3.6-9.9-3.6
              		C25.3,6.7,30,5,21.5,1.5C7.5,30.5,24.8,57.4,24.8,57.4z"/>
              </g>
              <g>
              	<g>
              		<path class="st1" d="M2.1,105l17.2,0.4V134h35.6v-29h18.7V83.4c0,0-3.3-12.1-8.4-13.2c-5.1-1.1-7.7-1.8-7.7-1.8s-8.1,7-18,7
              			s-12.8-2.2-12.8-2.2L18.6,68c0,0-9.5,1.5-12.1,5.5c-2.6,4-4,5.9-4.4,11.4C1.8,90.4,2.1,105,2.1,105"/>
              	</g>
              	<path class="st2" d="M20.4,193.8V90.2V193.8z"/>
              	<line class="st3" x1="20.4" y1="90.2" x2="20.4" y2="193.8"/>
              	<g>
              		<path class="st3" d="M58.2,38.1c0,14.2-9,25.7-20.1,25.7c-11.1,0-20.1-11.5-20.1-25.7c0-14.2,9-17.9,20.1-17.9
              			C49.2,20.2,58.2,23.9,58.2,38.1z"/>
              		<path class="st4" d="M18.1,39.1c-5.2-24,2.3-37.7,2.3-37.7"/>
              		<path class="st3" d="M18.7,67.9c-9.3,0-16.9,7.5-16.9,16.9v53.4c0,0-0.2,15.5,15.4,15.5 M57.6,67.3c-5,5-11.8,8-19.4,8
              			c-7.6,0-14.5-3.1-19.4-8 M56,1.4c0,0,5.2,9.5,3.9,26.6c-0.3,3.4-0.8,7.2-1.6,11.2"/>
              	</g>
              	<path class="st2" d="M56,193.8V90.2V193.8z"/>
              	<line class="st3" x1="56" y1="90.2" x2="56" y2="193.8"/>
              	<g>
              		<path class="st3" d="M21.9,134.1H56 M56.7,105h16.9 M1.8,105h18 M57.7,67.9c9.3,0,16.9,7.5,16.9,16.9v53.4c0,0,0.2,15.5-15.4,15.5
              			"/>
              		<path class="st4" d="M55.9,1.4c-4.5,0-4.5,3.5-8.9,3.5c-4.5,0-4.5-3.5-8.9-3.5c-4.5,0-4.5,3.5-8.9,3.5c-4.5,0-4.5-3.5-8.9-3.5"/>
              	</g>
              	<g>
              		<path class="st1" d="M63.3,204c0,4.8-3.9,8.8-8.8,8.8H22.2c-4.8,0-8.8-3.9-8.8-8.8v-1c0-4.8,3.9-8.8,8.8-8.8h32.3
              			c4.8,0,8.8,3.9,8.8,8.8V204z"/>
              		<path class="st3" d="M63.3,204c0,4.8-3.9,8.8-8.8,8.8H22.2c-4.8,0-8.8-3.9-8.8-8.8v-1c0-4.8,3.9-8.8,8.8-8.8h32.3
              			c4.8,0,8.8,3.9,8.8,8.8V204z"/>
              	</g>
              	<line class="st3" x1="38.1" y1="154.4" x2="38.1" y2="202.7"/>
              </g>
              </svg>
              <div class="buttons-wrap vertical">
                <button class="circle-button personal orange" data-side="personal" data-question="2" data-color="orange" type="button" name="button"></button>
                <button class="circle-button personal orange" data-side="personal" data-question="3" data-color="orange" type="button" name="button"></button>
              </div>
            </div>
            <div class="character spouse woman">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 114 334" style="enable-background:new 0 0 114 334;" xml:space="preserve">
              <style type="text/css">
              	.woman .st0{fill:#FFFFFF;}
              	.woman .st1{fill:#B0D2F0;}
              	.woman .st2{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
              	.woman .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
              </style>
              <g>
              	<path class="st0" d="M39,319l-1.7-7l-4.9-69.8l-17.5-64.3l-0.7-63.4c0,0-1.5-14.5,15.7-24.5C21,85,3.9,75,4.5,65.5
              		C11,57,16,52,19,31.5S36.8,0.1,56.4,2.1s28.2,0.3,35.9,19.6s4.5,31.6,17.6,44C107,74,96,84.1,86,91.1c10,8.9,14.3,11.6,14.2,30.8
              		s-0.6,62.7-0.6,62.7l-16.7,57.7L76.2,319H39z"/>
              </g>
              <g>
              	<g>
              		<path class="st1" d="M83,323.8c1.6,4.6-1.1,8.3-5.9,8.3H36.9c-4.8,0-7.4-3.7-5.8-8.2l0.7-2c1.6-4.5,6.9-8.2,11.7-8.2h27.2
              			c4.8,0,10,3.7,11.6,8.3L83,323.8z"/>
              		<path class="st2" d="M83,323.8c1.6,4.6-1.1,8.3-5.9,8.3H36.9c-4.8,0-7.4-3.7-5.8-8.2l0.7-2c1.6-4.5,6.9-8.2,11.7-8.2h27.2
              			c4.8,0,10,3.7,11.6,8.3L83,323.8z"/>
              		<path class="st3" d="M32.3,242.2l5,71.3 M80.1,47.1c0,16.3-10.9,29.6-24.3,29.6c-13.4,0-24.3-13.2-24.3-29.6 M24.5,50.1
              			c0,0,19.7-7.7,31.3-22.1 M49.1,17.7c0,0,17.5,21.7,37.8,32.4 M56.4,2.5C25-1.3,20.7,22.8,16.9,40.9C13.2,59,4.5,65.5,4.5,65.5
              			S4.9,75.4,21,84.8 M36.2,87c0,0-22.1,7.1-22.1,27.5l0.8,66 M82,242.4l-5,71.3 M58,2.6C89.4-1.1,93.6,23,97.4,41.1
              			c3.8,18.1,12.5,24.6,12.5,24.6s-0.4,9.9-16.6,19.3 M78.2,87.2c0,0,22.1,7.1,22.1,27.5l-0.8,66 M57.3,245.9v77.6"/>
              		<path class="st1" d="M77,87c0,10.8-9.1,19.6-20.4,19.6c-11.3,0-20.4-8.8-20.4-19.6c-15.9,15.1-9.9,28-5.4,43.9
              			c4.5,15.9-1.1,25-1.1,25c-5.5,7.7-10.3,15.9-14.4,24.6c-6.9,15-11.5,31.2-13.3,48.4c15.7,10.4,34.5,16.4,54.7,16.4l0.8,0.2
              			c20.2,0,39-6,54.7-16.4c-1.7-17.1-6.3-33.4-13.3-48.4c-4-8.7-8.8-16.9-14.4-24.6c0,0-5.6-9.1-1.1-25c4.5-15.9,10.5-28.8-5.4-43.9
              			L77,87z"/>
              		<path class="st3" d="M77,87c0,10.8-9.1,19.6-20.4,19.6c-11.3,0-20.4-8.8-20.4-19.6c-15.9,15.1-9.9,28-5.4,43.9
              			c4.5,15.9-1.1,25-1.1,25c-5.5,7.7-10.3,15.9-14.4,24.6c-6.9,15-11.5,31.2-13.3,48.4c15.7,10.4,34.5,16.4,54.7,16.4l0.8,0.2
              			c20.2,0,39-6,54.7-16.4c-1.7-17.1-6.3-33.4-13.3-48.4c-4-8.7-8.8-16.9-14.4-24.6c0,0-5.6-9.1-1.1-25c4.5-15.9,10.5-28.8-5.4-43.9
              			L77,87z"/>
              	</g>
              </g>
              </svg>
              <div class="buttons-wrap vertical">
                <button class="circle-button personal green" data-side="personal" data-question="2" data-color="green" type="button" name="button"></button>
              </div>
            </div>
            <!-- <div class="character spouse man">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 110 337.5" style="enable-background:new 0 0 110 337.5;" xml:space="preserve">
                <style type="text/css">
                	.man .st0{fill:#FFFFFF;}
                	.man .st1{fill:#B0D2F0;}
                	.man .st2{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
                	.man .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                	.man .st4{fill:none;stroke:#B0D2F0;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                </style>
                <g>
                	<path class="st0" d="M21.8,320.8l0-109.4c0,0-21-3.3-19.9-20.4C17,191,108,191,108,191s-2.4,19.5-20.2,19.7
                		c0.2,11.3-0.5,110.1-0.5,110.1H21.8z"/>
                	<path class="st0" d="M90.5,35.4c0-14.7-11.9-26.7-26.7-26.7c0,0-25-0.3-35.1-6.4c-2.3,3.7-3.7,8.1-3.7,12.9c0,7.1,3,13.5,7.9,17.9
                		l-2.4,0.7c-2.5,5.1-3.9,11-3.9,17.4c0,18.8,12.5,34.1,28,34.1c14.7,0,26.8-13.8,27.9-31.4l0.2,0.4C87.6,49.4,90.5,42.8,90.5,35.4z"
                		/>
                </g>
                <g>
                	<path class="st1" d="M97.4,327.2c0,4.8-3.9,8.8-8.8,8.8H21.2c-4.8,0-8.8-3.9-8.8-8.8v-1c0-4.8,3.9-8.8,8.8-8.8h67.4
                		c4.8,0,8.8,3.9,8.8,8.8V327.2z"/>
                	<rect x="87.8" y="222" class="st1" width="20.9" height="71"/>
                	<rect x="87.8" y="222" class="st2" width="20.9" height="71"/>
                	<line class="st3" x1="98.3" y1="199.5" x2="98.3" y2="221.9"/>
                	<path class="st1" d="M107.5,191.1v-68c0-17.7-14.4-32.1-32.1-32.1l0,0c-11.5,11.5-30.2,11.5-41.7,0l0,0C16,90.9,1.6,105.3,1.6,123
                		v68H107.5z"/>
                	<path class="st4" d="M107.5,191.1v-68c0-17.7-14.4-32.1-32.1-32.1l0,0c-11.5,11.5-30.2,11.5-41.7,0l0,0C16,90.9,1.6,105.3,1.6,123
                		v68H107.5z"/>
                	<path class="st3" d="M107.5,191.1v-68c0-17.7-14.4-32.1-32.1-32.1l0,0c-11.5,11.5-30.2,11.5-41.7,0l0,0C16,90.9,1.6,105.3,1.6,123
                		v68H107.5z"/>
                	<path class="st3" d="M33.7,92.6l8.1,18.6l11.7-11.4 M44.3,109.9l5.4,5.1l-3.8,60.3l8.7,7.7 M75.4,92.6l-8.1,18.6L55.6,99.8
                		 M64.8,109.9l-5.4,5.1l3.8,60.3l-8.7,7.7 M49.7,115h9.7 M21.8,210.7c-11.1,0-20.2-8.8-20.2-19.7 M87.3,210.7
                		c11.1,0,20.2-8.8,20.2-19.7 M87.3,127.8v188.4 M21.8,127.8v188.4 M70.2,22.7c7.5,6.1,12.4,16.5,12.4,28.3C82.6,69.8,70,85,54.6,85
                		c-15.5,0-28-15.3-28-34.1c0-6.3,1.4-12.3,3.9-17.4 M82.6,54c4.8-4.8,7.8-11.5,7.8-18.8c0-14.7-11.9-26.7-26.7-26.7
                		c0,0-25-0.3-35.1-6.4C26.4,5.9,25,10.3,25,15c0,13.5,10.9,24.4,24.4,24.4c9.7,0,18.1-5.7,22-13.8"/>
                	<line class="st2" x1="55.2" y1="220.4" x2="55.2" y2="327"/>
                	<path class="st2" d="M97.4,327.2c0,4.8-3.9,8.8-8.8,8.8H21.2c-4.8,0-8.8-3.9-8.8-8.8v-1c0-4.8,3.9-8.8,8.8-8.8h67.4
                		c4.8,0,8.8,3.9,8.8,8.8V327.2z"/>
                </g>
              </svg>
              <div class="buttons-wrap vertical">
                <button class="circle-button green" type="button" name="button"></button>
                <button class="circle-button light-blue" type="button" name="button"></button>
                <button class="circle-button red" type="button" name="button"></button>
                <button class="circle-button green" type="button" name="button"></button>
              </div>
            </div> -->
            <!-- <div class="character main-character woman">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 114 334" style="enable-background:new 0 0 114 334;" xml:space="preserve">
              <style type="text/css">
              	.woman .st0{fill:#FFFFFF;}
              	.woman .st1{fill:#B0D2F0;}
              	.woman .st2{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
              	.woman .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
              </style>
              <g>
              	<path class="st0" d="M39,319l-1.7-7l-4.9-69.8l-17.5-64.3l-0.7-63.4c0,0-1.5-14.5,15.7-24.5C21,85,3.9,75,4.5,65.5
              		C11,57,16,52,19,31.5S36.8,0.1,56.4,2.1s28.2,0.3,35.9,19.6s4.5,31.6,17.6,44C107,74,96,84.1,86,91.1c10,8.9,14.3,11.6,14.2,30.8
              		s-0.6,62.7-0.6,62.7l-16.7,57.7L76.2,319H39z"/>
              </g>
              <g>
              	<g>
              		<path class="st1" d="M83,323.8c1.6,4.6-1.1,8.3-5.9,8.3H36.9c-4.8,0-7.4-3.7-5.8-8.2l0.7-2c1.6-4.5,6.9-8.2,11.7-8.2h27.2
              			c4.8,0,10,3.7,11.6,8.3L83,323.8z"/>
              		<path class="st2" d="M83,323.8c1.6,4.6-1.1,8.3-5.9,8.3H36.9c-4.8,0-7.4-3.7-5.8-8.2l0.7-2c1.6-4.5,6.9-8.2,11.7-8.2h27.2
              			c4.8,0,10,3.7,11.6,8.3L83,323.8z"/>
              		<path class="st3" d="M32.3,242.2l5,71.3 M80.1,47.1c0,16.3-10.9,29.6-24.3,29.6c-13.4,0-24.3-13.2-24.3-29.6 M24.5,50.1
              			c0,0,19.7-7.7,31.3-22.1 M49.1,17.7c0,0,17.5,21.7,37.8,32.4 M56.4,2.5C25-1.3,20.7,22.8,16.9,40.9C13.2,59,4.5,65.5,4.5,65.5
              			S4.9,75.4,21,84.8 M36.2,87c0,0-22.1,7.1-22.1,27.5l0.8,66 M82,242.4l-5,71.3 M58,2.6C89.4-1.1,93.6,23,97.4,41.1
              			c3.8,18.1,12.5,24.6,12.5,24.6s-0.4,9.9-16.6,19.3 M78.2,87.2c0,0,22.1,7.1,22.1,27.5l-0.8,66 M57.3,245.9v77.6"/>
              		<path class="st1" d="M77,87c0,10.8-9.1,19.6-20.4,19.6c-11.3,0-20.4-8.8-20.4-19.6c-15.9,15.1-9.9,28-5.4,43.9
              			c4.5,15.9-1.1,25-1.1,25c-5.5,7.7-10.3,15.9-14.4,24.6c-6.9,15-11.5,31.2-13.3,48.4c15.7,10.4,34.5,16.4,54.7,16.4l0.8,0.2
              			c20.2,0,39-6,54.7-16.4c-1.7-17.1-6.3-33.4-13.3-48.4c-4-8.7-8.8-16.9-14.4-24.6c0,0-5.6-9.1-1.1-25c4.5-15.9,10.5-28.8-5.4-43.9
              			L77,87z"/>
              		<path class="st3" d="M77,87c0,10.8-9.1,19.6-20.4,19.6c-11.3,0-20.4-8.8-20.4-19.6c-15.9,15.1-9.9,28-5.4,43.9
              			c4.5,15.9-1.1,25-1.1,25c-5.5,7.7-10.3,15.9-14.4,24.6c-6.9,15-11.5,31.2-13.3,48.4c15.7,10.4,34.5,16.4,54.7,16.4l0.8,0.2
              			c20.2,0,39-6,54.7-16.4c-1.7-17.1-6.3-33.4-13.3-48.4c-4-8.7-8.8-16.9-14.4-24.6c0,0-5.6-9.1-1.1-25c4.5-15.9,10.5-28.8-5.4-43.9
              			L77,87z"/>
              	</g>
              </g>
              </svg>
              <div class="buttons-wrap vertical personal-btns">
                <button class="circle-button green" type="button" name="button"></button>
                <button class="circle-button light-blue" type="button" name="button"></button>
                <button class="circle-button red" type="button" name="button"></button>
                <button class="circle-button green" type="button" name="button"></button>
              </div>
              <div class="buttons-wrap vertical professional-btns">
                <button class="circle-button red" type="button" name="button"></button>
              </div>
            </div> -->
            <div class="character main-character man">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 110 337.5" style="enable-background:new 0 0 110 337.5;" xml:space="preserve">
                <style type="text/css">
                	.man .st0{fill:#FFFFFF;}
                	.man .st1{fill:#B0D2F0;}
                	.man .st2{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
                	.man .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                	.man .st4{fill:none;stroke:#B0D2F0;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                </style>
                <g>
                	<path class="st0" d="M21.8,320.8l0-109.4c0,0-21-3.3-19.9-20.4C17,191,108,191,108,191s-2.4,19.5-20.2,19.7
                		c0.2,11.3-0.5,110.1-0.5,110.1H21.8z"/>
                	<path class="st0" d="M90.5,35.4c0-14.7-11.9-26.7-26.7-26.7c0,0-25-0.3-35.1-6.4c-2.3,3.7-3.7,8.1-3.7,12.9c0,7.1,3,13.5,7.9,17.9
                		l-2.4,0.7c-2.5,5.1-3.9,11-3.9,17.4c0,18.8,12.5,34.1,28,34.1c14.7,0,26.8-13.8,27.9-31.4l0.2,0.4C87.6,49.4,90.5,42.8,90.5,35.4z"
                		/>
                </g>
                <g>
                	<path class="st1" d="M97.4,327.2c0,4.8-3.9,8.8-8.8,8.8H21.2c-4.8,0-8.8-3.9-8.8-8.8v-1c0-4.8,3.9-8.8,8.8-8.8h67.4
                		c4.8,0,8.8,3.9,8.8,8.8V327.2z"/>
                	<rect x="87.8" y="222" class="st1" width="20.9" height="71"/>
                	<rect x="87.8" y="222" class="st2" width="20.9" height="71"/>
                	<line class="st3" x1="98.3" y1="199.5" x2="98.3" y2="221.9"/>
                	<path class="st1" d="M107.5,191.1v-68c0-17.7-14.4-32.1-32.1-32.1l0,0c-11.5,11.5-30.2,11.5-41.7,0l0,0C16,90.9,1.6,105.3,1.6,123
                		v68H107.5z"/>
                	<path class="st4" d="M107.5,191.1v-68c0-17.7-14.4-32.1-32.1-32.1l0,0c-11.5,11.5-30.2,11.5-41.7,0l0,0C16,90.9,1.6,105.3,1.6,123
                		v68H107.5z"/>
                	<path class="st3" d="M107.5,191.1v-68c0-17.7-14.4-32.1-32.1-32.1l0,0c-11.5,11.5-30.2,11.5-41.7,0l0,0C16,90.9,1.6,105.3,1.6,123
                		v68H107.5z"/>
                	<path class="st3" d="M33.7,92.6l8.1,18.6l11.7-11.4 M44.3,109.9l5.4,5.1l-3.8,60.3l8.7,7.7 M75.4,92.6l-8.1,18.6L55.6,99.8
                		 M64.8,109.9l-5.4,5.1l3.8,60.3l-8.7,7.7 M49.7,115h9.7 M21.8,210.7c-11.1,0-20.2-8.8-20.2-19.7 M87.3,210.7
                		c11.1,0,20.2-8.8,20.2-19.7 M87.3,127.8v188.4 M21.8,127.8v188.4 M70.2,22.7c7.5,6.1,12.4,16.5,12.4,28.3C82.6,69.8,70,85,54.6,85
                		c-15.5,0-28-15.3-28-34.1c0-6.3,1.4-12.3,3.9-17.4 M82.6,54c4.8-4.8,7.8-11.5,7.8-18.8c0-14.7-11.9-26.7-26.7-26.7
                		c0,0-25-0.3-35.1-6.4C26.4,5.9,25,10.3,25,15c0,13.5,10.9,24.4,24.4,24.4c9.7,0,18.1-5.7,22-13.8"/>
                	<line class="st2" x1="55.2" y1="220.4" x2="55.2" y2="327"/>
                	<path class="st2" d="M97.4,327.2c0,4.8-3.9,8.8-8.8,8.8H21.2c-4.8,0-8.8-3.9-8.8-8.8v-1c0-4.8,3.9-8.8,8.8-8.8h67.4
                		c4.8,0,8.8,3.9,8.8,8.8V327.2z"/>
                </g>
              </svg>
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
          <h2>“Bol brengt jouw levenswerk in kaart”</h2>
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