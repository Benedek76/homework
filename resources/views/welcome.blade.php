<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- csrf_token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{url('css/styles.css')}}">
        <!-- Styles -->
        <style>        
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="logo flex justify-center">                    
                    <!-- Brokerchooser svg img  -->
                    <svg version="1.0" id="katman_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 149 107" style="enable-background:new 0 0 149 107;" xml:space="preserve">
                        <style type="text/css">
                            .st0{clip-path:url(#SVGID_00000155136726493894403060000008522058332806584219_);}
                            .st1{fill:#A8A8A8;}
                        </style>
                        <g>
                            <defs>
                                <rect id="SVGID_1_" x="30.9" y="72.2" width="85.4" height="6.2"/>
                            </defs>
                            <clipPath id="SVGID_00000116922942412854803870000011446179808640503469_">
                                <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                            </clipPath>
                            <g style="clip-path:url(#SVGID_00000116922942412854803870000011446179808640503469_);">
                                <path class="st1" d="M30.9,72.3v6h3.2c1.5,0,2.4-0.7,2.4-1.7c0-0.8-0.5-1.4-1.2-1.5c0.6-0.2,1-0.7,1-1.3c0-0.9-0.9-1.5-2.4-1.5
                                    H30.9z M32.9,73.7h0.9c0.3,0,0.5,0.2,0.5,0.4c0,0.3-0.2,0.4-0.5,0.4h-0.9V73.7z M32.9,75.9h0.9c0.4,0,0.6,0.2,0.6,0.4
                                    c0,0.3-0.2,0.5-0.6,0.5h-0.9V75.9z"/>
                                <path class="st1" d="M40.9,78.3h2.2l-1.2-2c0.6-0.4,0.9-1,0.9-1.9c0-1.4-0.9-2.2-2.5-2.2h-2.9v6h2v-1.6h0.7L40.9,78.3z M39.4,75.2
                                    v-1.4h0.9c0.4,0,0.7,0.3,0.7,0.7c0,0.5-0.2,0.7-0.7,0.7H39.4z"/>
                                <path class="st1" d="M47,72.2c-1.9,0-3.3,1.3-3.3,3.1c0,1.8,1.4,3.1,3.3,3.1c1.9,0,3.3-1.3,3.3-3.1C50.2,73.5,48.9,72.2,47,72.2z
                                    M47,73.9c0.7,0,1.2,0.6,1.2,1.4c0,0.8-0.5,1.4-1.2,1.4c-0.7,0-1.3-0.6-1.3-1.4C45.7,74.5,46.3,73.9,47,73.9z"/>
                                <path class="st1" d="M54.9,78.3h2.4L55,74.7l2.1-2.4h-2.3l-1.8,2.1v-2.1h-2v6h2v-1.4l0.6-0.7L54.9,78.3z"/>
                                <path class="st1" d="M63.1,73.8v-1.5h-5.1v6h5.1v-1.5h-3.2V76h2.8v-1.5h-2.8v-0.7H63.1z"/>
                                <path class="st1" d="M67.7,78.3H70l-1.2-2c0.6-0.4,0.9-1,0.9-1.9c0-1.4-0.9-2.2-2.5-2.2h-2.9v6h2v-1.6H67L67.7,78.3z M66.3,75.2
                                    v-1.4h0.9c0.4,0,0.7,0.3,0.7,0.7c0,0.5-0.2,0.7-0.7,0.7H66.3z"/>
                                <path class="st1" d="M73.8,72.2c-1.9,0-3.2,1.3-3.2,3.1c0,1.8,1.3,3.1,3.2,3.1c0.9,0,1.9-0.5,2.6-1.2l-1.1-1.2
                                    c-0.4,0.4-0.9,0.7-1.4,0.7c-0.7,0-1.2-0.6-1.2-1.4c0-0.8,0.5-1.4,1.2-1.4c0.5,0,1,0.3,1.4,0.8l1.1-1.4
                                    C75.7,72.6,74.7,72.2,73.8,72.2z"/>
                                <path class="st1" d="M82.8,78.3v-6h-2v2.3H79v-2.3h-2v6h2v-2.2h1.9v2.2H82.8z"/>
                                <path class="st1" d="M101,72.2c-1.6,0-2.6,0.8-2.6,2c0,2.1,3.1,1.6,3.1,2.4c0,0.2-0.2,0.3-0.5,0.3c-0.6,0-1.7-0.4-2.3-0.9L98,77.4
                                    c0.8,0.6,2,1,3,1c1.3,0,2.5-0.6,2.5-1.9c0-2.2-3.1-1.7-3.1-2.5c0-0.2,0.1-0.2,0.4-0.2c0.5,0,1.5,0.4,2.1,0.7l0.7-1.5
                                    C102.9,72.5,101.9,72.2,101,72.2z"/>
                                <path class="st1" d="M109.4,73.8v-1.5h-5.1v6h5.1v-1.5h-3.2V76h2.8v-1.5h-2.8v-0.7H109.4z"/>
                                <path class="st1" d="M114,78.3h2.2l-1.2-2c0.6-0.4,0.9-1,0.9-1.9c0-1.4-0.9-2.2-2.5-2.2h-2.9v6h2v-1.6h0.7L114,78.3z M112.6,75.2
                                    v-1.4h0.9c0.4,0,0.7,0.3,0.7,0.7c0,0.5-0.2,0.7-0.7,0.7H112.6z"/>
                                <path class="st1" d="M87.1,77.3c-1.2,0.1-2.3-0.9-2.2-2.1c0-0.1-0.2-0.1-0.2,0c-0.1,1.3,1.2,2.4,2.4,2.3
                                    C87.2,77.6,87.2,77.4,87.1,77.3z"/>
                                <path class="st1" d="M97.4,74.5c-0.6-2.7-4.7-3.1-6.1-0.9c-0.4-0.3-1-0.3-1.4,0c-1.2-1.9-4.5-2-5.7,0c-1.2,2,0.1,4.6,2.5,4.7
                                    c2.3,0.3,4.3-1.8,3.5-4.1c0.3-0.2,0.6-0.2,0.9,0C89.7,79.5,98.3,79.8,97.4,74.5z M89.7,76c-0.3,1.1-1.5,1.8-2.6,1.8
                                    c-2.3,0.1-3.6-2.7-1.9-4.3C87.1,71.9,90.4,73.3,89.7,76z M96.8,76c-0.3,1.1-1.5,1.8-2.6,1.8c-2.3,0.1-3.6-2.7-1.9-4.3
                                    C94.2,71.9,97.5,73.3,96.8,76z"/>
                                <path class="st1" d="M94.2,77.3c-1.2,0.1-2.3-0.9-2.2-2.1c0-0.1-0.2-0.1-0.2,0c-0.1,1.3,1.2,2.4,2.4,2.3
                                    C94.3,77.6,94.4,77.4,94.2,77.3z"/>
                            </g>
                        </g>
                        <path class="st1" d="M54.3,59.7c-6.6,0.3-13-4.8-12.7-11.7c-0.1-0.8-1.4-0.8-1.4,0c-0.3,7.4,6.6,13.3,13.9,13
                            C54.9,61.1,55.1,59.9,54.3,59.7z"/>
                        <path class="st1" d="M95.1,59.7c-6.6,0.3-13-4.8-12.7-11.7c-0.1-0.8-1.4-0.8-1.4,0c-0.3,7.4,6.6,13.3,13.9,13
                            C95.8,61.1,95.9,59.9,95.1,59.7z"/>
                        <path class="st1" d="M44.8,66.6c-2.3-1.1-4.8-1.7-7.4-1.6c-1.6,0-5,1.1-4.9,1.6c0.1,0.9,4.6,2.2,6,2.2c5.3,0,6.2-1.6,6.3-2.1
                            C44.8,66.6,44.8,66.6,44.8,66.6z"/>
                        <path class="st1" d="M38.5,62.7c-1.9-1.8-4.1-3.1-6.6-3.8c-1.5-0.5-5.2-0.6-5.3,0c-0.2,0.9,3.6,3.5,5,3.9
                            C37.6,64.7,38.5,62.7,38.5,62.7z"/>
                        <path class="st1" d="M34.2,57.2c-1.4-2.3-3.4-4.3-5.8-5.7c-1.4-0.9-5.2-2-5.5-1.5c-0.5,0.9,2.8,4.6,4.1,5.4
                            C32.7,59.1,34.2,57.2,34.2,57.2z"/>
                        <path class="st1" d="M25.6,47.7c4.9,4.7,6.7,3.1,6.7,3.1c-1-2.6-2.6-4.9-4.6-6.7c-1.3-1.2-4.8-3-5.1-2.5
                            C22,42.3,24.5,46.6,25.6,47.7z"/>
                        <path class="st1" d="M33,45.4c-0.2-2.6-1.1-5.1-2.5-7.3l0,0c-0.8-1.4-3.6-4-4.1-3.7c-0.8,0.5,0.4,5.1,1.1,6.3
                            C30.9,46.2,33,45.4,33,45.4z"/>
                        <path class="st1" d="M34.8,39.6c0.4-2,0.4-4.1-0.2-6.1l0,0c-0.3-1.3-1.9-4-2.3-3.9c-0.7,0.2-0.9,3.9-0.6,5
                            C32.9,39.7,34.8,39.6,34.8,39.6z"/>
                        <path class="st1" d="M38.1,35.6c0.8-1.5,1.3-3.1,1.3-4.8l0,0c0.1-1.1-0.5-3.7-0.9-3.7c-0.6-0.1-1.6,2.8-1.7,3.7
                            C36.6,35.1,38.1,35.6,38.1,35.6z"/>
                        <path class="st1" d="M47.7,66.6c-1.2,0.3-3.5,1.9-3.3,2.2c0.3,0.6,3.9,0.6,4.9,0.3c3.9-1.1,4.2-2.5,4.2-2.9c0,0,0-0.1,0-0.1
                            C51.6,65.9,49.6,66,47.7,66.6z"/>
                        <path class="st1" d="M57.5,66.6c-0.9,0.4-2.6,1.9-2.4,2.2c0.3,0.5,3.2,0.1,4-0.2c3.1-1.3,3.2-2.5,3.1-2.8c0,0,0-0.1,0-0.1
                            C60.6,65.6,59,65.9,57.5,66.6z"/>
                        <path class="st1" d="M67.3,64.2c-0.5,0.5-1.3,2.1-1.1,2.2c0.3,0.3,2.3-0.8,2.7-1.3c1.8-1.8,1.5-2.7,1.4-2.9c0,0,0,0,0-0.1
                            C69.2,62.6,68.2,63.3,67.3,64.2z"/>
                        <path class="st1" d="M81.3,64.1c0.5,0.5,1.2,2,1,2.1c-0.3,0.3-2.2-0.8-2.6-1.3c-1.7-1.8-1.4-2.6-1.3-2.8c0,0,0,0,0-0.1
                            C79.6,62.6,80.6,63.2,81.3,64.1z"/>
                        <path class="st1" d="M91.5,66.6c0.9,0.4,2.6,1.9,2.4,2.2c-0.3,0.5-3.2,0.1-4-0.2c-3.1-1.3-3.2-2.5-3.1-2.8c0,0,0-0.1,0-0.1
                            C88.4,65.6,90,65.9,91.5,66.6z"/>
                        <path class="st1" d="M111.6,65c-2.6-0.1-5.1,0.5-7.4,1.6c0,0,0,0.1,0,0.1c0.1,0.5,1,2.1,6.3,2.1c1.4,0,5.9-1.3,6-2.2
                            C116.6,66,113.1,65,111.6,65z"/>
                        <path class="st1" d="M105.2,65c1.1,0,4.5-0.9,4.6-1.5c0-0.4-2.2-1-3.5-1.1c0.8-0.5,1.6-1.1,2.3-1.8c0.7,0,1.6-0.1,3.1-0.5
                            c0.8-0.2,3.3-1.7,3.1-2.2c-0.1-0.3-2.4-0.2-3.4,0c-0.2,0.1-0.5,0.1-0.7,0.2c0.3-0.4,0.6-0.9,0.8-1.3c0.7-0.1,1.8-0.5,3.2-1.4
                            c0.8-0.5,3-2.8,2.7-3.4c-0.2-0.3-2.7,0.4-3.7,0.9c-0.3,0.2-0.6,0.4-0.9,0.6c0.2-0.7,0.4-1.3,0.5-2.1c0.6-0.3,1.3-0.8,2.1-1.5
                            c0.7-0.6,2.3-3.1,2-3.6c-0.2-0.3-2.5,0.8-3.3,1.5c-0.2,0.1-0.3,0.2-0.4,0.4c0-0.8,0-1.7-0.1-2.5c0.5-0.4,1-1,1.5-1.9
                            c0.5-0.7,1.2-3.3,0.7-3.6c-0.3-0.2-2.1,1.3-2.6,2.1l0,0c-0.1,0.1-0.1,0.2-0.2,0.3c-0.2-0.7-0.5-1.4-0.8-2c0.2-0.4,0.4-0.9,0.6-1.5
                            c0.2-0.6,0.1-2.8-0.4-2.8c-0.3-0.1-1.2,1.3-1.5,2.1c-7-10.2-25.6-10.5-32.3,0.6c-2.4-1.6-5.7-1.7-8.1,0C63.8,28.2,45.3,28,38.1,38.5
                            c-0.2-0.7-1.2-2.2-1.5-2.1c-0.5,0.1-0.6,2.2-0.4,2.8c0.2,0.7,0.4,1.2,0.6,1.6c-0.3,0.7-0.6,1.3-0.8,2c-0.1-0.1-0.1-0.2-0.2-0.3l0,0
                            c-0.5-0.8-2.3-2.3-2.6-2.1c-0.5,0.3,0.3,2.9,0.7,3.6c0.5,0.8,1,1.4,1.5,1.8c-0.1,0.8-0.2,1.7-0.1,2.5c-0.1-0.1-0.2-0.2-0.3-0.3
                            c-0.8-0.7-3.1-1.7-3.3-1.5c-0.4,0.4,1.2,2.9,2,3.6c0.8,0.7,1.5,1.2,2.1,1.5c0.2,0.7,0.4,1.5,0.6,2.2c-0.3-0.2-0.7-0.4-1-0.6
                            c-1-0.6-3.5-1.3-3.7-0.9c-0.3,0.5,1.9,2.9,2.7,3.4c1.6,1,2.7,1.3,3.4,1.4c0.3,0.5,0.6,1,0.9,1.4c-0.4-0.1-0.7-0.2-1.1-0.3
                            c-1-0.3-3.3-0.3-3.4,0c-0.1,0.5,2.3,2,3.1,2.2c1.6,0.5,2.6,0.5,3.3,0.4c0.7,0.6,1.4,1.2,2.2,1.8c-1.3,0.1-3.7,0.8-3.6,1.1
                            c0.1,0.6,3.5,1.5,4.6,1.5c1.6,0,2.7-0.2,3.5-0.4c1.5,0.5,3.1,0.8,4.8,0.9c13.3,1.7,24.6-10.2,20-23.2c1.5-1.1,3.6-1.1,5,0
                            c-5,18.4,12.1,26.2,24.6,22.3C102.4,64.8,103.5,65,105.2,65z M68.9,52c-1.7,6.4-8.3,10.3-14.8,10.1c-13.4,0.6-20.8-15.2-10.7-24.3
                            C54.3,29.1,73.1,37.1,68.9,52z M94.9,62.1C81.6,62.7,74.1,47,84.2,37.9c11-8.9,29.8-0.9,25.5,14.3C107.9,58.5,101.3,62.3,94.9,62.1z
                            "/>
                        <path class="st1" d="M117,58.9c-2.5,0.7-4.7,2-6.6,3.8c0,0,0.9,2,6.9,0.1c1.3-0.4,5.2-3,5-3.9C122.2,58.3,118.6,58.4,117,58.9z"/>
                        <path class="st1" d="M120.6,51.5c-2.4,1.4-4.3,3.4-5.8,5.7c0,0,1.5,1.9,7.2-1.8c1.3-0.8,4.5-4.6,4.1-5.4
                            C125.8,49.5,122,50.6,120.6,51.5z"/>
                        <path class="st1" d="M116.6,50.8c0,0,1.8,1.5,6.7-3.1c1.1-1,3.6-5.3,3-6.1c-0.4-0.5-3.9,1.3-5.1,2.5
                            C119.2,45.9,117.6,48.2,116.6,50.8z"/>
                        <path class="st1" d="M121.4,40.7c0.7-1.3,1.9-5.8,1.1-6.3c-0.5-0.3-3.3,2.3-4.1,3.7l0,0c-1.4,2.2-2.3,4.7-2.5,7.3
                            C116,45.4,118.1,46.2,121.4,40.7z"/>
                        <path class="st1" d="M117.3,34.7c0.3-1.1,0.1-4.8-0.6-5c-0.4-0.1-2,2.6-2.3,3.9l0,0c-0.6,2-0.7,4.1-0.2,6.1
                            C114.2,39.6,116.1,39.7,117.3,34.7z"/>
                        <path class="st1" d="M109.6,30.7c0,1.7,0.5,3.4,1.3,4.8c0,0,1.4-0.5,1.2-4.8c-0.1-1-1.1-3.8-1.7-3.7
                            C110.1,27.1,109.5,29.6,109.6,30.7L109.6,30.7z"/>
                        <path class="st1" d="M101.3,66.6c-1.9-0.6-3.9-0.7-5.8-0.4c0,0,0,0.1,0,0.1c0,0.4,0.3,1.8,4.2,2.9c1,0.3,4.6,0.3,4.9-0.3
                            C104.8,68.5,102.5,67,101.3,66.6z"/>
                        <path class="st1" d="M74.5,63.7c0.6,0,1.1-0.5,1.1-1.1c0-0.6-0.5-1.1-1.1-1.1c-0.6,0-1.1,0.5-1.1,1.1C73.4,63.3,73.9,63.7,74.5,63.7
                            z"/>
                    </svg>
                </div>
                
                <div class="mt-16" >
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">                    
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>                            
                                <div class="h-16 w-160  flex items-center justify-center rounded-full">
                                <button id="testButton">Apply Variant Button</button>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">A/B Testing:</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                (also known as bucket testing, split-run testing, or split testing) is a user experience research methodology. A/B tests consist of a randomized experiment that usually involves two variants (A and B), although the concept can be also extended to multiple variants of the same variable. It includes application of statistical hypothesis testing or "two-sample hypothesis testing" as used in the field of statistics. A/B testing is a way to compare multiple versions of a single variable, for example by testing a subject's response to variant A against variant B, and determining which of the variants is more effective.
                                </p>
                            </div>
                        </div>                            
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    <script src="{{ asset('js/ab_test.js') }}"></script>
    </body>
</html>
