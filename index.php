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

    <style type="text/css">
        .woman .st0{fill:#FFFFFF;}
        .woman .st1{fill:#B0D2F0;}
        .woman .st2{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
        .woman .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}

        .man .st0{fill:#FFFFFF;}
        .man .st1{fill:#B0D2F0;}
        .man .st2{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
        .man .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
        .man .st4{fill:none;stroke:#B0D2F0;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}

        .girl .st0{fill:#FFFFFF;}
        .girl .st1{fill:#B1D2EF;}
        .girl .st2{fill:none;stroke:#B1D2EF;stroke-width:2.5;stroke-miterlimit:10;}
        .girl .st3{fill:none;stroke:#29255C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
        .girl .st4{fill:none;stroke:#29255C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}

        .boy .st0{fill:#FFFFFF;}
        .boy .st1{fill:#B0D2F0;}
        .boy .st2{fill:#29235C;}
        .boy .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
        .boy .st4{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    </style>
  </head>
  <body>
    <main>
        <div id="app" class="graphic-wrap selector">
            <template v-if="step === 1">
                <div class="title-wrap">
                    <h1>Stap 1. Ben je een man of vrouw?</h1>
                </div>
                <div class="selector-wrap">
                    <div class="fill"><!-- FILL --></div>
                    <div class="characters">
                        <input type="radio" name="gender-select" id="woman-select" value="woman" v-model="gender">
                        <label for="woman-select" class="character woman">
                            <img src="assets/ondernemer-vrouw.svg" alt="">
                            <div class="input-wrap">
                                  <div class="styled-radio">
                                    <i class="fas fa-check"></i>
                                </div>
                                Vrouw
                            </div>
                        </label>
                        <input type="radio" name="gender-select" id="man-select" value="man" v-model="gender">
                        <label for="man-select" class="character spouse man">
                            <img src="assets/ondernemer-man.svg" alt="">
                            <div class="input-wrap">
                                  <div class="styled-radio">
                                    <i class="fas fa-check"></i>
                                </div>
                                Man
                            </div>
                        </label>
                    </div>
                    <div class="btn-wrap">
                        <button class="selector-btn" :disabled="!gender" @click="step = 2">
                            Volgende
                        </button>
                    </div>
                </div>
            </template>
            
            <template v-if="step === 2">
                <div class="title-wrap">
                    <h1>Stap 2. Heb je een partner?</h1>
                </div>
                <div class="selector-wrap">
                    <div class="btn-wrap">
                        <button class="selector-btn" @click="step = 1">
                            Vorige
                        </button>
                    </div>
                    <div class="characters">
                        <input type="radio" name="spouse-select" id="woman-spouse" value="woman" v-model="spouse">
                        <label for="woman-spouse" class="character woman">
                            <img src="assets/partner-vrouw.svg" alt="">
                            <div class="input-wrap">
                                  <div class="styled-radio">
                                    <i class="fas fa-check"></i>
                                </div>
                                Vrouw
                            </div>
                        </label>
                        <input type="radio" name="spouse-select" id="man-spouse" value="man" v-model="spouse">
                        <label for="man-spouse" class="character spouse man">
                            <img src="assets/partner-man.svg" alt="">
                            <div class="input-wrap">
                                  <div class="styled-radio">
                                    <i class="fas fa-check"></i>
                                </div>
                                Man
                            </div>
                        </label>
                        <input type="radio" name="spouse-select" id="no-spouse" value="none" v-model="spouse">
                        <label for="no-spouse" class="character">
                            <div class="input-wrap">
                                  <div class="styled-radio">
                                    <i class="fas fa-check"></i>
                                </div>
                                Geen
                            </div>
                        </label>
                    </div>
                    <div class="btn-wrap">
                        <button class="selector-btn" @click="step = 3">
                            Volgende
                        </button>
                    </div>
                </div>
            </template> 

            <template v-if="step === 3">
                <div class="title-wrap">
                    <h1>Stap 3. Heb je kinderen?</h1>
                </div>
                <div class="selector-wrap">
                    <div class="btn-wrap">
                        <button class="selector-btn" @click="step = 2">
                            Vorige
                        </button>
                    </div>
                    <div class="characters">
                        <div for="girl-select" class="character girl">
                            <div class="character kid girl">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 96.3 211.3" style="enable-background:new 0 0 96.3 211.3;" xml:space="preserve">
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
                                <div class="input-wrap">
                                    <div class="number-input-wrap">
                                        <button class="selector-btn number-control" :disabled="girls < 1" @click="girls--">-</button>
                                        <div class="amount">{{ girls }}</div>
                                        <button class="selector-btn number-control" :disabled="girls > 9" @click="girls++">+</button>
                                    </div>
                                    Meisje(s)
                                </div>
                            </div>
                        </div>
                        <input type="radio" name="gender-select" id="man-select" value="man" v-model="gender">
                        <div class="character kid boy">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 76 214" style="enable-background:new 0 0 76 214;" xml:space="preserve">
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
                            <div class="input-wrap">
                                <div class="number-input-wrap">
                                    <button class="selector-btn number-control" :disabled="boys < 1" @click="boys--">-</button>
                                    <div class="amount">{{ boys }}</div>
                                    <button class="selector-btn number-control" :disabled="boys > 9" @click="boys++">+</button>
                                </div>
                                Jongen(s)
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <button class="selector-btn" @click="goToFamilyDesk" :disabled="loading">
                            <template v-if="loading">
                                <i class="fa-solid fa-circle-notch"></i>
                                <span class="opacity-0">Volgende</span>
                            </template>
                            <span v-else>Volgende</span>
                        </button>
                    </div>
                </div>
            </template>
        </div>

      <footer class="with-border">
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

    <script async src="https://kit.fontawesome.com/5da4f89d11.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
    <script src="/js/main.js?v=<?=filemtime('js/main.js')?>"></script>
    <script src="/js/selector.js?v=<?=filemtime('js/selector.js')?>"></script>
  </body>
</html>
