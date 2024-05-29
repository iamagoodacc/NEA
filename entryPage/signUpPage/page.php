<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap">

    <link rel="stylesheet" href="/NEA/rootStyles/colours.css" />
    <link rel="stylesheet" href="/NEA/rootStyles/text.css" />
    <link rel="stylesheet" href="/NEA/reusableComponents/sidePanel/sidePanel.scss" />

    <link rel="stylesheet" href="style.scss" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="signUpPage">
        <div class="backgroundPattern">
            <div class="patternColumn">
                <div class="roundedRectangle"></div>
                <div class="roundedRectangle"></div>
            </div>
            <div class="patternColumn">
                <div class="roundedRectangle"></div>
                <div class="roundedRectangle"></div>
            </div>
            <div class="patternColumn">
                <div class="roundedRectangle"></div>
                <div class="roundedRectangle"></div>
            </div>
            <div class="patternColumn">
                <div class="roundedRectangle"></div>
                <div class="roundedRectangle"></div>
            </div>
            <div class="patternColumn">
                <div class="roundedRectangle"></div>
                <div class="roundedRectangle"></div>
            </div>
        </div>

        <div class="signUpColumn">
            <div class="signUpContainer">
                <div class="signUpTitle">
                    <div class="rightArrow">
                        <svg width="24" height="36" viewBox="0 0 24 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.46501 0.36337C7.09073 -0.0224947 6.6449 -0.0691625 6.26215 0.0751966C6.04211 0.103664 5.82013 0.190933 5.61416 0.36337C3.97939 1.73307 2.40785 3.17293 0.895506 4.67757C0.244801 5.32486 0.567042 6.17841 1.1668 6.55486C4.32886 10.3167 7.93884 14.0415 11.0964 17.8069C7.51463 21.4055 4.06223 25.4815 0.625688 29.2139C0.240212 29.6326 0.224967 30.1262 0.409849 30.5299C0.43925 30.9138 0.6715 31.2653 1.00588 31.524C2.57842 32.7384 4.09746 34.0189 5.56967 35.3531C5.94014 35.9609 6.80528 36.2963 7.46454 35.6477C12.7249 30.4762 17.3305 24.6472 23.1029 20.0096C23.2613 19.8823 23.3679 19.7429 23.4343 19.5988C23.7645 19.1643 23.8478 18.5372 23.3723 18.0237C17.9891 12.2095 12.9853 6.05264 7.46501 0.36337ZM6.63067 33.0521C5.47719 32.0343 4.29424 31.0541 3.08687 30.101C6.36567 26.4393 9.74613 22.5114 13.2622 19.0657C13.4453 18.8864 13.5465 18.6897 13.5927 18.4923C13.887 18.0586 13.9561 17.4543 13.5319 16.946C10.3418 13.1248 6.68939 9.35244 3.48129 5.54676C4.44949 4.61325 5.44857 3.71295 6.46523 2.83202C11.4056 8.00009 15.9657 13.5122 20.7886 18.7885C15.6152 23.0761 11.3493 28.2909 6.63067 33.0521Z" />
                        </svg>

                    </div>
                    <div class="text">SIGN UP</div>
                </div>
                <div class="contents">
                    <div class="horizontalBar"></div>
                    <div class="details">
                        <div class="usernameContainer">
                            <input type="text" id="usernameInput" class="username" placeholder="USERNAME">
                            <div class="userIcon">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 7.79141C9.53321 7.79141 10.5241 7.38097 11.2547 6.65038C11.9853 5.9198 12.3957 4.92891 12.3957 3.8957C12.3957 2.8625 11.9853 1.87161 11.2547 1.14103C10.5241 0.410439 9.53321 0 8.5 0C7.46679 0 6.47591 0.410439 5.74532 1.14103C5.01473 1.87161 4.6043 2.8625 4.6043 3.8957C4.6043 4.92891 5.01473 5.9198 5.74532 6.65038C6.47591 7.38097 7.46679 7.79141 8.5 7.79141ZM8.5 9.503C3.32041 9.503 0 12.3613 0 13.753V16.3517H17V13.753C17 12.07 13.8565 9.503 8.5 9.503Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="passwordContainer">
                            <input type="password" id="passwordInput" class="password" placeholder="PASSWORD">
                            <div class="lockIcon">
                                <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.36667 11.8611V13.75M3.7625 7.63831C4.1966 7.61111 4.73176 7.61111 5.42 7.61111H11.3133C12.0016 7.61111 12.5368 7.61111 12.9708 7.63831M3.7625 7.63831C3.22076 7.67222 2.83641 7.74853 2.50835 7.91994C1.98855 8.19157 1.56594 8.62497 1.30109 9.15811C1 9.76425 1 10.5576 1 12.1444V13.4667C1 15.0535 1 15.8469 1.30109 16.453C1.56594 16.9861 1.98855 17.4195 2.50835 17.6912C3.09928 18 3.87285 18 5.42 18H11.3133C12.8605 18 13.634 18 14.225 17.6912C14.7448 17.4195 15.1674 16.9861 15.4322 16.453C15.7333 15.8469 15.7333 15.0535 15.7333 13.4667V12.1444C15.7333 10.5576 15.7333 9.76425 15.4322 9.15811C15.1674 8.62497 14.7448 8.19157 14.225 7.91994C13.8969 7.74853 13.5126 7.67222 12.9708 7.63831M3.7625 7.63831V5.72222C3.7625 3.11421 5.82386 1 8.36667 1C10.9095 1 12.9708 3.11421 12.9708 5.72222V7.63831" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                        </div>
                        <div class="confirmPasswordContainer">
                            <input type="password" id="passwordInput" class="password" placeholder="CONFIRM PASSWORD">
                            <div class="lockIcon">
                                <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.36667 11.8611V13.75M3.7625 7.63831C4.1966 7.61111 4.73176 7.61111 5.42 7.61111H11.3133C12.0016 7.61111 12.5368 7.61111 12.9708 7.63831M3.7625 7.63831C3.22076 7.67222 2.83641 7.74853 2.50835 7.91994C1.98855 8.19157 1.56594 8.62497 1.30109 9.15811C1 9.76425 1 10.5576 1 12.1444V13.4667C1 15.0535 1 15.8469 1.30109 16.453C1.56594 16.9861 1.98855 17.4195 2.50835 17.6912C3.09928 18 3.87285 18 5.42 18H11.3133C12.8605 18 13.634 18 14.225 17.6912C14.7448 17.4195 15.1674 16.9861 15.4322 16.453C15.7333 15.8469 15.7333 15.0535 15.7333 13.4667V12.1444C15.7333 10.5576 15.7333 9.76425 15.4322 9.15811C15.1674 8.62497 14.7448 8.19157 14.225 7.91994C13.8969 7.74853 13.5126 7.67222 12.9708 7.63831M3.7625 7.63831V5.72222C3.7625 3.11421 5.82386 1 8.36667 1C10.9095 1 12.9708 3.11421 12.9708 5.72222V7.63831" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="extras">
                            <div class="existingAccount">Already have an account? Sign in!</div>
                        </div>
                    </div>
                </div>
                <div class="signUpContainer">
                    <button id="signUpButton" class="signUpText">SIGN UP</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="script.js"></script>