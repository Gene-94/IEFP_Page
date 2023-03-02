<div class="p-4 gmx-4">
    @include('form.partials.iefp_banner')
    <div class="flex items-center" data-layout="progressBar">
        <div class="relative flex items-center text-gray-500" data-layout="progress-colors">
            <div class="w-12 h-12 py-3 transition duration-500 ease-in-out border-2 border-gray-300 rounded-full progress-icon"
                data-layout="progress-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user-plus ">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="8.5" cy="7" r="4"></circle>
                    <line x1="20" y1="8" x2="20" y2="14"></line>
                    <line x1="23" y1="11" x2="17" y2="11"></line>
                </svg>
            </div>
            <div class="invisible sm:visible absolute top-0 w-32 mt-16 -ml-10 text-xs font-medium text-center text-gray-500 uppercase"
                data-layout="progress-text">
                Identificação</div>
        </div>
        <div class="flex-auto transition duration-500 ease-in-out border-t-2 border-gray-300"
            data-layout="progress-line" id=""></div>
        <div class="relative flex items-center text-gray-500" data-layout="progress-colors" id="step_imorada">
            <div class="w-12 h-12 py-3 transition duration-500 ease-in-out border-2 border-gray-300 rounded-full progress-icon"
                data-layout="progress-icon">
                <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-mail ">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.2796 3.71579C12.097 3.66261 11.903 3.66261 11.7203 3.71579C11.6678 3.7311 11.5754 3.7694 11.3789 3.91817C11.1723 4.07463 10.9193 4.29855 10.5251 4.64896L5.28544 9.3064C4.64309 9.87739 4.46099 10.0496 4.33439 10.24C4.21261 10.4232 4.12189 10.6252 4.06588 10.8379C4.00765 11.0591 3.99995 11.3095 3.99995 12.169V17.17C3.99995 18.041 4.00076 18.6331 4.03874 19.0905C4.07573 19.536 4.14275 19.7634 4.22513 19.9219C4.41488 20.2872 4.71272 20.5851 5.07801 20.7748C5.23658 20.8572 5.46397 20.9242 5.90941 20.9612C6.36681 20.9992 6.95893 21 7.82995 21H7.99995V18C7.99995 15.7909 9.79081 14 12 14C14.2091 14 16 15.7909 16 18V21H16.17C17.041 21 17.6331 20.9992 18.0905 20.9612C18.5359 20.9242 18.7633 20.8572 18.9219 20.7748C19.2872 20.5851 19.585 20.2872 19.7748 19.9219C19.8572 19.7634 19.9242 19.536 19.9612 19.0905C19.9991 18.6331 20 18.041 20 17.17V12.169C20 11.3095 19.9923 11.0591 19.934 10.8379C19.878 10.6252 19.7873 10.4232 19.6655 10.24C19.5389 10.0496 19.3568 9.87739 18.7145 9.3064L13.4748 4.64896C13.0806 4.29855 12.8276 4.07463 12.621 3.91817C12.4245 3.7694 12.3321 3.7311 12.2796 3.71579ZM11.1611 1.79556C11.709 1.63602 12.2909 1.63602 12.8388 1.79556C13.2189 1.90627 13.5341 2.10095 13.8282 2.32363C14.1052 2.53335 14.4172 2.81064 14.7764 3.12995L20.0432 7.81159C20.0716 7.83679 20.0995 7.86165 20.1272 7.88619C20.6489 8.34941 21.0429 8.69935 21.3311 9.13277C21.5746 9.49916 21.7561 9.90321 21.8681 10.3287C22.0006 10.832 22.0004 11.359 22 12.0566C22 12.0936 22 12.131 22 12.169V17.212C22 18.0305 22 18.7061 21.9543 19.2561C21.9069 19.8274 21.805 20.3523 21.5496 20.8439C21.1701 21.5745 20.5744 22.1701 19.8439 22.5496C19.3522 22.805 18.8274 22.9069 18.256 22.9543C17.706 23 17.0305 23 16.2119 23H15.805C15.7972 23 15.7894 23 15.7814 23C15.6603 23 15.5157 23.0001 15.3883 22.9895C15.2406 22.9773 15.0292 22.9458 14.8085 22.8311C14.5345 22.6888 14.3111 22.4654 14.1688 22.1915C14.0542 21.9707 14.0227 21.7593 14.0104 21.6116C13.9998 21.4843 13.9999 21.3396 13.9999 21.2185L14 18C14 16.8954 13.1045 16 12 16C10.8954 16 9.99995 16.8954 9.99995 18L9.99996 21.2185C10 21.3396 10.0001 21.4843 9.98949 21.6116C9.97722 21.7593 9.94572 21.9707 9.83107 22.1915C9.68876 22.4654 9.46538 22.6888 9.19142 22.8311C8.9707 22.9458 8.75929 22.9773 8.6116 22.9895C8.48423 23.0001 8.33959 23 8.21847 23C8.21053 23 8.20268 23 8.19495 23H7.78798C6.96944 23 6.29389 23 5.74388 22.9543C5.17253 22.9069 4.64769 22.805 4.15605 22.5496C3.42548 22.1701 2.8298 21.5745 2.4503 20.8439C2.19492 20.3523 2.09305 19.8274 2.0456 19.2561C1.99993 18.7061 1.99994 18.0305 1.99995 17.212L1.99995 12.169C1.99995 12.131 1.99993 12.0936 1.99992 12.0566C1.99955 11.359 1.99928 10.832 2.1318 10.3287C2.24383 9.90321 2.42528 9.49916 2.66884 9.13277C2.95696 8.69935 3.35105 8.34941 3.87272 7.8862C3.90036 7.86165 3.92835 7.83679 3.95671 7.81159L9.22354 3.12996C9.58274 2.81064 9.89467 2.53335 10.1717 2.32363C10.4658 2.10095 10.781 1.90627 11.1611 1.79556Z"
                        fill="#0F1729"></path>
                </svg>

            </div>
            <div class="invisible sm:visible absolute top-0 w-32 mt-16 -ml-10 text-xs font-medium text-center text-gray-500 uppercase"
                data-layout="progress-text">
                Morada</div>
        </div>
        <div class="flex-auto transition duration-500 ease-in-out border-t-2 border-gray-300"
            data-layout="progress-line"></div>
        <div class="relative flex items-center text-gray-500" data-layout="progress-colors">
            <div class="w-12 h-12 py-3 transition duration-500 ease-in-out border-2 border-gray-300 rounded-full progress-icon"
                data-layout="progress-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 640 480" xml:space="preserve" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="currentColor">
                    <defs>
                    </defs>
                    <g transform="matrix(3.13 0 0 3.5 321.62 237.75)">
                    <g style="">
                            <g transform="matrix(2.22 0 0 2.22 0 -25.96)">
                    <path transform=" translate(-45, -30.31)" d="M 45 46.769 c -1.603 0 -3.207 -0.256 -4.766 -0.769 L 2.346 33.551 l 0 0 C 0.942 33.09 0 31.788 0 30.311 c 0 -1.477 0.943 -2.779 2.346 -3.239 l 37.888 -12.449 c 3.119 -1.024 6.414 -1.024 9.53 0 l 37.889 12.449 c 1.403 0.46 2.346 1.762 2.347 3.239 c 0 1.477 -0.942 2.779 -2.347 3.241 L 49.765 46 C 48.206 46.513 46.604 46.769 45 46.769 z M 5.299 30.311 L 41.483 42.2 c 2.3 0.755 4.731 0.756 7.033 0 l 36.185 -11.889 L 48.517 18.422 c -2.302 -0.756 -4.733 -0.755 -7.033 0 L 5.299 30.311 z" stroke-linecap="round"></path>
                    </g>
                            <g transform="matrix(2.22 0 0 2.22 0 23.94)">
                    <path transform=" translate(-45, -52.79)" d="M 45 70.147 c -7.319 0 -14.637 -1.024 -21.905 -3.074 c -2.652 -0.749 -4.505 -3.177 -4.505 -5.905 V 37.44 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 23.728 c 0 0.946 0.654 1.791 1.591 2.056 c 13.814 3.897 27.822 3.896 41.638 0 c 0.937 -0.265 1.591 -1.11 1.591 -2.056 V 37.44 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 23.728 c 0 2.728 -1.853 5.156 -4.504 5.905 C 59.638 69.123 52.319 70.147 45 70.147 z" stroke-linecap="round"></path>
                    </g>
                            <g transform="matrix(2.22 0 0 2.22 85.44 3.41)">
                    <path transform=" translate(-83.49, -43.54)" d="M 83.489 56.27 c -1.104 0 -2 -0.896 -2 -2 V 32.814 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 V 54.27 C 85.489 55.374 84.594 56.27 83.489 56.27 z" stroke-linecap="round"></path>
                    </g>
                            <g transform="matrix(2.22 0 0 2.22 85.44 34.44)">
                    <path transform=" translate(-83.49, -57.52)" d="M 83.489 62.774 c -2.896 0 -5.253 -2.356 -5.253 -5.253 c 0 -2.896 2.356 -5.252 5.253 -5.252 c 2.896 0 5.252 2.356 5.252 5.252 C 88.741 60.418 86.385 62.774 83.489 62.774 z M 83.489 56.27 c -0.69 0 -1.253 0.562 -1.253 1.252 s 0.563 1.253 1.253 1.253 s 1.252 -0.563 1.252 -1.253 S 84.18 56.27 83.489 56.27 z" stroke-linecap="round"></path>
                    </g>
                            <g transform="matrix(2.22 0 0 2.22 85.44 49.85)">
                    <path transform=" translate(-83.49, -64.47)" d="M 83.489 70.161 c -1.104 0 -2 -0.896 -2 -2 v -7.387 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 7.387 C 85.489 69.266 84.594 70.161 83.489 70.161 z" stroke-linecap="round"></path>
                    </g>
                    </g>
                    </g>
                    </svg>
            </div>
            <div class="invisible sm:visible absolute top-0 w-32 mt-16 -ml-10 text-xs font-medium text-center text-gray-500 uppercase"
                data-layout="progress-text">
                Habilitações</div>
        </div>
        <div class="flex-auto transition duration-500 ease-in-out border-t-2 border-gray-300"
            data-layout="progress-line"></div>
        <div class="relative flex items-center text-gray-500" data-layout="progress-colors">
            <div class="w-12 h-12 py-3 transition duration-500 ease-in-out border-2 border-gray-300 rounded-full progress-icon"
                data-layout="progress-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 640 480" xml:space="preserve" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database ">
                    <g transform="matrix(1.43 0 0 1.24 322 240.04)" id="Combined-Shape">
                    <path transform=" translate(-213.33, -181.33)" d="M 277.333333 1.42108547e-14 L 298.666667 21.3333333 L 298.666 64 L 426.666667 64 L 426.666667 362.666667 L 3.55271368e-14 362.666667 L 3.55271368e-14 64 L 128 64 L 128 21.3333333 L 149.333333 1.42108547e-14 L 277.333333 1.42108547e-14 Z M 42.6664912 220.935181 L 42.6666667 320 L 384 320 L 384.000468 220.935097 C 341.375319 233.130501 298.701692 240.759085 256.000479 243.809455 L 256 277.333333 L 170.666667 277.333333 L 170.666323 243.809465 C 127.965163 240.759108 85.2915887 233.130549 42.6664912 220.935181 Z M 384 106.666667 L 42.6666667 106.666667 L 42.6668606 176.433085 C 99.6386775 193.933257 156.507113 202.666667 213.333333 202.666667 C 270.159803 202.666667 327.028489 193.933181 384.000558 176.432854 L 384 106.666667 Z M 256 42.6666667 L 170.666667 42.6666667 L 170.666667 64 L 256 64 L 256 42.6666667 Z" stroke-linecap="round"></path>
                    </g>
                    </svg>
            </div>
            <div class="invisible sm:visible absolute top-0 w-32 mt-16 -ml-10 text-xs font-medium text-center text-gray-500 uppercase progress-icon"
                data-layout="progress-text">
                Prof.</div>
        </div>
        <div class="flex-auto transition duration-500 ease-in-out border-t-2 border-gray-300"
            data-layout="progress-line"></div>
        <div class="relative flex items-center text-gray-500" data-layout="progress-colors">
            <div class="w-12 h-12 py-3 transition duration-500 ease-in-out border-2 border-gray-300 rounded-full progress-icon"
                data-layout="progress-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 640 480" xml:space="preserve" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="currentColor">
                    <g transform="matrix(0.75 0 0 0.75 421.49 209.94)">
                    <path transform=" translate(-256, -256)" d="M 473.818 0.003 c 0 0 -18.578 28.297 -139.938 70.172 c -123.719 42.688 -199.875 216.406 -199.875 216.406 c -18.344 35.578 -90.813 183.453 -90.813 183.453 c -19.953 38.172 16.625 60.734 38.063 21.313 c 41.156 -75.703 67.688 -144.875 130.25 -146.844 c 91.219 -2.875 153.609 -84.109 133.984 -80.359 c -25.844 11.484 -82.781 0.875 -49.234 -4.391 c 80.531 -6.594 130.125 -68.297 113.969 -72.5 c -28.563 11.219 -55.172 0.578 -60.391 -2.656 C 491.959 166.987 473.818 0.003 473.818 0.003 z" stroke-linecap="round"></path>
                    </g>
                    <g transform="matrix(18.31 0 0 17.22 164.39 367.91)">
                    <path transform=" translate(-12, -11.91)" d="M 9 12 L 10.6828 13.6828 V 13.6828 C 10.858 13.858 11.142 13.858 11.3172 13.6828 V 13.6828 L 15 10" stroke-linecap="round"></path>
                    </g>
                    </svg>
            </div>
            <div class="invisible sm:visible absolute top-0 w-32 mt-16 -ml-10 text-xs font-medium text-center text-gray-500 uppercase"
                data-layout="progress-text">
                Escolher
                <br>
                Formação
                </div>
        </div>
    </div>
