<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="globals.css" />

    <link rel="stylesheet" href="/NEA/rootStyles/colours.css" />
    <link rel="stylesheet" href="/NEA/rootStyles/text.css" />
    <link rel="stylesheet" href="/NEA/reusableComponents/sidePanel.scss" />

    <link rel="stylesheet" href="style.scss" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="behaviourPage">
        <?php include_once "../../../reusableComponents/sidePanel.php" ?>

        <div class="pageTitle">
            Behaviour
        </div>

        <div class="page">
            <div class="topBar">
                <div class="message">
                    Ready to reflect on your behaviour? Let's see how you're doing.
                </div>

                <div class="options">
                    <svg class="settingsIcon" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 23.125C21.0543 23.125 23.125 21.0543 23.125 18.5C23.125 15.9457 21.0543 13.875 18.5 13.875C15.9457 13.875 13.875 15.9457 13.875 18.5C13.875 21.0543 15.9457 23.125 18.5 23.125Z" stroke="#A09D9A" stroke-width="2" />
                        <path d="M5.6444 16.4018C6.37291 16.8595 6.84165 17.6393 6.84165 18.4995C6.84164 19.3599 6.3729 20.1397 5.6444 20.5974C5.14866 20.9088 4.82926 21.1578 4.60201 21.454C4.1042 22.1029 3.88449 22.9227 3.99124 23.7335C4.07128 24.3415 4.43044 24.9636 5.14877 26.2079C5.86711 27.452 6.22627 28.074 6.71283 28.4474C7.3616 28.9452 8.18155 29.1649 8.99231 29.0582C9.36236 29.0095 9.73761 28.8574 10.2551 28.5839C11.0159 28.1818 11.9257 28.1658 12.6709 28.596C13.416 29.0263 13.8569 29.8221 13.8891 30.6819C13.911 31.267 13.9669 31.6681 14.1097 32.013C14.4227 32.7684 15.0229 33.3687 15.7784 33.6817C16.3451 33.9163 17.0633 33.9163 18.5 33.9163C19.9367 33.9163 20.655 33.9163 21.2217 33.6817C21.9771 33.3687 22.5774 32.7684 22.8904 32.013C23.0331 31.6681 23.0891 31.267 23.111 30.6821C23.143 29.8221 23.584 29.0263 24.3292 28.596C25.0743 28.1659 25.984 28.182 26.7447 28.584C27.2624 28.8575 27.6376 29.0097 28.0076 29.0584C28.8184 29.1652 29.6384 28.9454 30.2871 28.4476C30.7737 28.0743 31.1329 27.4521 31.8513 26.208C32.171 25.6541 32.4197 25.2235 32.6041 24.8624M31.3555 20.5976C30.6271 20.1399 30.1584 19.3601 30.1582 18.4998C30.1582 17.6394 30.6271 16.8595 31.3555 16.4018C31.8513 16.0904 32.1706 15.8414 32.3978 15.5452C32.8956 14.8965 33.1153 14.0765 33.0086 13.2657C32.9286 12.6577 32.5694 12.0356 31.851 10.7914C31.1327 9.54723 30.7735 8.92515 30.287 8.55179C29.6382 8.05397 28.8182 7.83427 28.0075 7.941C27.6375 7.98973 27.2622 8.14183 26.7447 8.41537C25.9839 8.81745 25.0741 8.83349 24.3291 8.40324C23.584 7.97302 23.143 7.17721 23.111 6.31747C23.0891 5.73239 23.0331 5.3313 22.8904 4.9864C22.5774 4.2309 21.9771 3.63065 21.2217 3.31771C20.655 3.08301 19.9367 3.08301 18.5 3.08301C17.0633 3.08301 16.3451 3.08301 15.7784 3.31771C15.0229 3.63065 14.4227 4.2309 14.1097 4.9864C13.9669 5.33127 13.911 5.73233 13.8891 6.31733C13.8569 7.17715 13.416 7.97304 12.6708 8.40324C11.9257 8.83345 11.016 8.81738 10.2553 8.41532C9.73769 8.14177 9.3624 7.98965 8.99233 7.94092C8.18156 7.83419 7.36161 8.0539 6.71285 8.55171C6.22628 8.92508 5.86712 9.54717 5.14878 10.7913C4.82899 11.3452 4.58039 11.7758 4.39589 12.1368" stroke="#A09D9A" stroke-width="2" stroke-linecap="round" />
                    </svg>

                    <svg class="signoutIcon" width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.5 23.75L4.75 19L9.5 14.25" stroke="#A09D9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4.75 19H26.9167" stroke="#A09D9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.834 12.6663V7.91634C15.834 7.49642 16.0008 7.09369 16.2977 6.79676C16.5947 6.49982 16.9974 6.33301 17.4173 6.33301H31.6673C32.0872 6.33301 32.49 6.49982 32.7869 6.79676C33.0838 7.09369 33.2507 7.49642 33.2507 7.91634V30.083C33.2507 30.5029 33.0838 30.9057 32.7869 31.2026C32.49 31.4995 32.0872 31.6663 31.6673 31.6663H17.4173C16.9974 31.6663 16.5947 31.4995 16.2977 31.2026C16.0008 30.9057 15.834 30.5029 15.834 30.083V25.333" stroke="#A09D9A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="pageView">
                <div class="recentBehaviourEvents">
                    <div class="behaviourEventsTitle">
                        Recent Events
                    </div>
                    <div class="behaviourEventsBar"></div>
                    <div class="recentEvents">
                        <template id="behaviourEventTemplate" class="behaviourEvent">
                            <div class="bar"></div>
                            <div class="details">
                                <div class="positiveBehaviourIcon">
                                    <div class="outerCircle">
                                        <div class="innerCircle">
                                            <div class="text">+1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher">
                                    MR JACKSON
                                </div>
                                <div class="dateTime">
                                    <svg class="dateIcon" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 2.17647L2.22222 1M12 2.17647L10.7778 1M4.66667 6.29412L5.88889 7.47059L8.33333 5.11765M11.3889 6.29412C11.3889 8.89312 9.20007 11 6.5 11C3.79994 11 1.61111 8.89312 1.61111 6.29412C1.61111 3.69513 3.79994 1.58824 6.5 1.58824C9.20007 1.58824 11.3889 3.69513 11.3889 6.29412Z" stroke="#B9D1FC" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <div class="date">
                                        14th February 2024
                                    </div>
                                </div>
                            </div>
                            <div class="description">
                                <div class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum tincidunt libero, at fringilla lorem commodo sit amet. Etiam maximus felis sem, sit amet dapibus urna molestie nec. Aenean sed fringilla metus. Morbi in leo ornare, scelerisque mauris ac, maximus ligula. Nunc tincidunt leo ac lorem elementum, vel porta risus viverra. Phasellus tincidunt at eros sed porttitor. Suspendisse consectetur sit amet sapien eget aliquam.
                                </div>
                                <div class="dropDownIcon" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <svg class="dropDownSVG" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.70711 7.02651C6.31661 7.43561 5.68341 7.43561 5.29291 7.02651L0.292891 1.78841C-0.0976302 1.37928 -0.0976302 0.715966 0.292891 0.306838C0.683421 -0.102279 1.31658 -0.102279 1.70711 0.306838L6.00001 4.80419L10.2929 0.306838C10.6834 -0.102279 11.3166 -0.102279 11.7071 0.306838C12.0976 0.715966 12.0976 1.37928 11.7071 1.78841L6.70711 7.02651Z" fill="#36D7FD" />
                                    </svg>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="graphs">

                </div>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>