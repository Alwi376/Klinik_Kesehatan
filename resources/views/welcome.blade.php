<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            *,
            ::after,
            ::before {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            ::after,
            ::before {
                --tw-content: ''
            }

            :host,
            html {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            pre,
            samp {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,
            select {
                text-transform: none
            }

            [type=button],
            [type=reset],
            [type=submit],
            button {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote,
            dd,
            dl,
            figure,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            p,
            pre {
                margin: 0
            }

            fieldset {
                margin: 0;
                padding: 0
            }

            legend {
                padding: 0
            }

            menu,
            ol,
            ul {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            [role=button],
            button {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            audio,
            canvas,
            embed,
            iframe,
            img,
            object,
            svg,
            video {
                display: block;
                vertical-align: middle
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            [hidden] {
                display: none
            }

            *,
            ::before,
            ::after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia:
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia:
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .-left-20 {
                left: -5rem
            }

            .top-0 {
                top: 0px
            }

            .-bottom-16 {
                bottom: -4rem
            }

            .-left-16 {
                left: -4rem
            }

            .-mx-3 {
                margin-left: -0.75rem;
                margin-right: -0.75rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-6 {
                margin-top: 1.5rem
            }

            .flex {
                display: flex
            }

            .grid {
                display: grid
            }

            .hidden {
                display: none
            }

            .aspect-video {
                aspect-ratio: 16 / 9
            }

            .size-12 {
                width: 3rem;
                height: 3rem
            }

            .size-5 {
                width: 1.25rem;
                height: 1.25rem
            }

            .size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .h-12 {
                height: 3rem
            }

            .h-40 {
                height: 10rem
            }

            .h-full {
                height: 100%
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-full {
                width: 100%
            }

            .w-\[calc\(100\%\+8rem\)\] {
                width: calc(100% + 8rem)
            }

            .w-auto {
                width: auto
            }

            .max-w-\[877px\] {
                max-width: 877px
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .flex-col {
                flex-direction: column
            }

            .items-start {
                align-items: flex-start
            }

            .items-center {
                align-items: center
            }

            .items-stretch {
                align-items: stretch
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .gap-2 {
                gap: 0.5rem
            }

            .gap-4 {
                gap: 1rem
            }

            .gap-6 {
                gap: 1.5rem
            }

            .self-center {
                align-self: center
            }

            .overflow-hidden {
                overflow: hidden
            }

            .rounded-\[10px\] {
                border-radius: 10px
            }

            .rounded-full {
                border-radius: 9999px
            }

            .rounded-lg {
                border-radius: 0.5rem
            }

            .rounded-md {
                border-radius: 0.375rem
            }

            .rounded-sm {
                border-radius: 0.125rem
            }

            .bg-\[\#FF2D20\]\/10 {
                background-color: rgb(255 45 32 / 0.1)
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity))
            }

            .bg-gradient-to-b {
                background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
            }

            .from-transparent {
                --tw-gradient-from: transparent var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
            }

            .via-white {
                --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .to-white {
                --tw-gradient-to: #fff var(--tw-gradient-to-position)
            }

            .stroke-\[\#FF2D20\] {
                stroke: #FF2D20
            }

            .object-cover {
                object-fit: cover
            }

            .object-top {
                object-position: top
            }

            .p-6 {
                padding: 1.5rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .px-3 {
                padding-left: 0.75rem;
                padding-right: 0.75rem
            }

            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .py-2 {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem
            }

            .pt-3 {
                padding-top: 0.75rem
            }

            .text-center {
                text-align: center
            }

            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
            }

            .text-sm {
                font-size: 0.875rem;
                line-height: 1.25rem
            }

            .text-sm\/relaxed {
                font-size: 0.875rem;
                line-height: 1.625
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .font-semibold {
                font-weight: 600
            }

            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .underline {
                -webkit-text-decoration-line: underline;
                text-decoration-line: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .ring-transparent {
                --tw-ring-color: transparent
            }

            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .transition {
                transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 150ms
            }

            .duration-300 {
                transition-duration: 300ms
            }

            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity))
            }

            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity))
            }

            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity))
            }

            .hover\:text-black\/70:hover {
                color: rgb(0 0 0 / 0.7)
            }

            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / 0.2)
            }

            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px
            }

            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            @media (min-width: 640px) {
                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem
                }

                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem
                }

                .sm\:pt-5 {
                    padding-top: 1.25rem
                }
            }

            @media (min-width: 768px) {
                .md\:row-span-3 {
                    grid-row: span 3 / span 3
                }
            }

            @media (min-width: 1024px) {
                .lg\:col-start-2 {
                    grid-column-start: 2
                }

                .lg\:h-16 {
                    height: 4rem
                }

                .lg\:max-w-7xl {
                    max-width: 80rem
                }

                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .lg\:flex-col {
                    flex-direction: column
                }

                .lg\:items-end {
                    align-items: flex-end
                }

                .lg\:justify-center {
                    justify-content: center
                }

                .lg\:gap-8 {
                    gap: 2rem
                }

                .lg\:p-10 {
                    padding: 2.5rem
                }

                .lg\:pb-10 {
                    padding-bottom: 2.5rem
                }

                .lg\:pt-0 {
                    padding-top: 0px
                }

                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity))
                }
            }

            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity))
                }

                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity))
                }

                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                }

                .dark\:text-white\/50 {
                    color: rgb(255 255 255 / 0.5)
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .dark\:text-white\/70 {
                    color: rgb(255 255 255 / 0.7)
                }

                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
                }

                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .dark\:hover\:text-white\/70:hover {
                    color: rgb(255 255 255 / 0.7)
                }

                .dark\:hover\:text-white\/80:hover {
                    color: rgb(255 255 255 / 0.8)
                }

                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
                }

                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
                }

                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
                }
            }
        </style>
    @endif
</head>

<body class="font-body">

    <!-- home section -->
    <section class="bg-white py-10 md:mb-10">

        <div class="container max-w-screen-xl mx-auto px-4">

            <nav class="flex-wrap lg:flex items-center" x-data="{ navbarOpen: false }">
                <div class="flex items-center mb-10 lg:mb-0">
                    <img src="{{ asset('assets/image/logo2.png') }}" width="95" alt="Logo">

                    <button
                        class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center border border-blue-500 text-blue-500 rounded-md"
                        @click="navbarOpen = !navbarOpen">
                        <i data-feather="menu"></i>
                    </button>
                </div>



                <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-14"
                    :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                    <li
                        class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="/">Beranda</a>
                    </li>
                    <li
                        class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#tentang">Tentang</a>
                    </li>
                    <li
                        class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#layanan">Layanan</a>
                    </li>
                    <li
                        class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#">Fasilitas</a>
                    </li>

                </ul>
                <div class="lg:flex flex-col md:flex-row md:items-center text-center md:space-x-3"
                    :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 bg-blue-500 text-white font-semibold text-lg rounded-xl hover:bg-blue-700 transition ease-in-out duration-500 mb-5 md:mb-0">Masuk</a>

                    <a href="{{ route('register') }}"
                        class="px-4 py-2 border-2 border-blue-500 text-blue-500 font-semibold text-lg rounded-xl hover:bg-blue-700 hover:text-white transition ease-linear duration-500">Daftar</a>
                </div>
            </nav>

            <div class="flex flex-col lg:flex-row justify-between space-x-20">
                <div class="text-center lg:text-left mt-40">
                    <h1 class="font-semibold text-gray-900 text-3xl md:text-6xl leading-normal mb-6">Website Pengelolaan
                        <br> Klinik kesehatan
                    </h1>

                    <p class="font-light text-gray-400 text-md md:text-lg leading-normal mb-12">Sistem Informasi Klinik
                        yang Terjangkau <br> dan Mempermudah Bagi Pengguna</p>

                </div>

                <div class="mt-24">
                    <img src="{{ asset('assets/image/sss.png') }}" alt="Image">
                </div>
            </div>

        </div> <!-- container.// -->

    </section>

    <section id="tentang" class="bg-white py-16 md:mt-10">

        <div class="container max-w-screen-xl mx-auto px-4">

            <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center leading-normal mb-10">Peduli terhadap<br> kesehatan kita</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
                <div class="text-center py-16">

                    <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Tentang Kami</h4>

                    <p class="font-light text-gray-500 text-md md:text-lg mb-6">Selamat datang di klinik kami, mitra kesehatan terpercaya untuk Anda dan keluarga. Kami berkomitmen memberikan layanan kesehatan berkualitas dengan pendekatan yang profesional dan ramah.</p>


                </div>

                <div class="text-center py-16">

                    <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Misi Kami</h4>

                    <p class="font-light text-gray-500 text-md md:text-lg mb-6">Menyediakan pelayanan kesehatan terbaik melalui diagnosis yang akurat, pengobatan efektif, dan pendekatan yang berpusat pada pasien.</p>

                </div>

                <div class="text-center py-16">

                    <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Visi Kami</h4>

                    <p class="font-light text-gray-500 text-md md:text-lg mb-6">Menjadi klinik kesehatan terdepan yang memberikan solusi kesehatan holistik untuk masyarakat.</p>

                </div>
            </div>

        </div> <!-- container.// -->

    </section>

    <section id="layanan" class="bg-white py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="flex flex-col lg:flex-row justify-between space-x-16">
                <div class="flex justify-center lg:justify-start ">
                    <img src="assets/image/feature-img.png" class="img-fluid" alt="Image">
                </div>

                <div class="mt-16">
                    <h1 class="font-semibold text-gray-900 text-xl md:text-4xl mb-20">Kami menyediakan berbagai layanan
                        <br> seperti</h1>

                    <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20 mb-16">
                        <div class="mb-5 md:mb-0">
                            <h3 class="font-semibold text-gray-900 text-xl md:text-2xl mb-4">Layanan bantuan pelanggan
                                24/7</h3>

                            <p class="font-light text-gray-400 text-md md:text-lg">Membantu pengguna jika ada <br>
                                pertanyaan atau masalah <br> yang dihadapi kapan saja.</p>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 text-xl md:text-2xl mb-4">Layanan reservasi</h3>

                            <p class="font-light text-gray-400 text-md md:text-lg">Memudahkan pasien membuat <br>
                                janji temu dengan klinik <br> secara online.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20">
                        <div class="mb-5 md:mb-0">
                            <h3 class="font-semibold text-gray-900 text-xl md:text-2xl mb-4">Database dokter</h3>

                            <p class="font-light text-gray-400 text-md md:text-lg">Penyimpanan dan pengelolaan <br> data
                                dokter agar memudahkan <br> pencarian dan informasi<br> daftar doker.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div> <!-- container.// -->

    </section>









    <!-- component -->
    <footer class="bg-blue-900 text-white py-12 mt-40">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div class="sm:col-span-2">
                    <h1 class="max-w-lg text-xl font-semibold tracking-tight text-gray-800 xl:text-2xl dark:text-white">
                        Klinik kesehatan </h1>

                    <div>
                        <p class="text-sm text-gray-400">
                            2024 Klinik. All rights reserved.
                        </p>
                    </div>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-4">Kontak Kami</h2>
                    <a href="https://api.whatsapp.com/send/?phone=%2B6281216253590&text=Halo%2C+saya+ingin+menanyakan+informasi+tentang+klinik&type=phone_number&app_absent=0"
                        target="_blank" rel="noopener noreferrer" class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="#ffffff" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 406.834 406.834" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M183.163,274.62c-5.522,0-10-4.478-10-10s4.478-10,10-10h10.254v-10.254c0-5.522,4.478-10,10-10s10,4.478,10,10v10.254 h10.253c5.522,0,10,4.478,10,10s-4.478,10-10,10h-10.253v10.253c0,5.522-4.478,10-10,10s-10-4.478-10-10V274.62H183.163z M406.834,394.247c0,5.522-4.478,10-10,10H10c-5.522,0-10-4.478-10-10s4.478-10,10-10h38.349V241.351c0-5.522,4.478-10,10-10h98.229 c10.428-14.638,27.536-24.202,46.837-24.202c19.302,0,36.412,9.564,46.84,24.202h56.074v-22.748h-55.441c-5.522,0-10-4.478-10-10 v-87.159c0-5.522,4.478-10,10-10h130.888c5.522,0,10,4.478,10,10v87.159c0,5.522-4.478,10-10,10h-55.446v22.748h22.154 c5.522,0,10,4.478,10,10v142.896h38.351C402.356,384.247,406.834,388.724,406.834,394.247z M371.775,188.603v-67.159H260.888v67.159 H371.775z M165.946,264.62c0,20.661,16.809,37.47,37.469,37.47c20.662,0,37.473-16.809,37.473-37.47s-16.811-37.471-37.473-37.471 C182.755,227.149,165.946,243.958,165.946,264.62z M338.483,251.351h-79.142c1.011,4.26,1.546,8.704,1.546,13.269 c0,31.688-25.782,57.47-57.473,57.47c-31.688,0-57.469-25.781-57.469-57.47c0-4.564,0.535-9.009,1.546-13.269H68.349v132.896 h270.135V251.351z M9.473,265.561c1.445,0.729,2.982,1.074,4.497,1.074c3.654,0,7.177-2.012,8.936-5.497l29.737-58.937 c9.41-18.646,20.026-26.252,36.642-26.252h22.71c16.615,0,27.232,7.605,36.646,26.252c2.487,4.931,8.503,6.908,13.434,4.421 c4.93-2.488,6.909-8.503,4.42-13.434c-8.069-15.986-22.499-37.239-54.499-37.239h-22.71c-32.001,0-46.429,21.254-54.497,37.241 L5.05,252.128C2.562,257.059,4.542,263.074,9.473,265.561z M16.053,108.007c-1.374-6.18-2.07-12.527-2.07-18.867 c0-47.726,38.827-86.553,86.553-86.553c47.725,0,86.552,38.827,86.552,86.553c0,6.353-0.696,12.702-2.07,18.871 c-1.019,4.573-5.075,7.826-9.761,7.826h-31.649c-8.952,14.39-24.912,23.989-43.071,23.989c-18.158,0-34.118-9.6-43.07-23.989h-31.65 C21.128,115.837,17.069,112.583,16.053,108.007z M124.364,108.455c-21.216-5.186-37.236-23.763-38.56-46.229 C76.304,67.448,69.85,77.555,69.85,89.14c0,0.017,0,0.033,0,0.05c0.027,16.897,13.782,30.637,30.686,30.637 C110.144,119.827,118.733,115.389,124.364,108.455z M131.223,89.14c0-15.154-11.043-27.778-25.505-30.249 c-0.001,0.107-0.002,0.214-0.002,0.321c0,15.155,11.043,27.78,25.505,30.249c0.001-0.091,0.002-0.181,0.002-0.271 C131.223,89.173,131.223,89.157,131.223,89.14z M33.982,89.14c0,2.235,0.112,4.473,0.336,6.697h15.967 c-0.286-2.178-0.432-4.385-0.436-6.615c0-0.003,0-0.008,0-0.012c0-0.01,0-0.019,0-0.028c0-0.014,0-0.028,0-0.042 c0-26.463,20.385-48.254,46.275-50.496c0.106-0.011,0.214-0.02,0.322-0.027c1.349-0.108,2.711-0.163,4.088-0.163 c27.949,0,50.688,22.738,50.688,50.687c0,0.014,0,0.028,0,0.042c0,0,0,0.018,0,0.026c0,0.005,0,0.009,0,0.014 c-0.004,2.23-0.149,4.438-0.437,6.615h15.966c0.223-2.223,0.335-4.459,0.335-6.697c0-36.697-29.855-66.553-66.552-66.553 C63.838,22.587,33.982,52.443,33.982,89.14z">
                                </path>
                            </g>
                        </svg>
                        +62 812 1625 3590</a>

                    <p class="flex items-center gap-2 mt-2">
                        <svg class="w-5 h-5" fill="#ffffff" version="1.1" id="Icons"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 32 32" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M26.2,8.5c-2.2-3.2-5.6-5.2-9.3-5.5c-0.3,0-0.6,0-0.9,0c-3.7,0-7.2,1.6-9.7,4.3c-2.5,2.7-3.6,6.4-3.2,10.1 c0.7,6,5.5,10.8,11.5,11.4C15,29,15.5,29,16,29c2.6,0,5-0.7,7.2-2.2c0.5-0.3,0.6-0.9,0.3-1.4c-0.3-0.5-0.9-0.6-1.4-0.3 c-2.2,1.4-4.7,2.1-7.3,1.8c-5.1-0.5-9.1-4.6-9.7-9.7C4.7,14.1,5.7,11,7.8,8.7c2.3-2.5,5.6-3.9,9-3.6c3.2,0.2,6,1.9,7.8,4.6 c1.9,2.9,2.4,6.3,1.3,9.6l0,0.1c-0.3,1-1.3,1.7-2.4,1.7c-1.4,0-2.5-1.1-2.5-2.5V17v-2v-4c0-0.6-0.4-1-1-1s-1,0.4-1,1v0 c-0.8-0.6-1.9-1-3-1c-2.8,0-5,2.2-5,5v2c0,2.8,2.2,5,5,5c1.4,0,2.6-0.6,3.5-1.4c0.7,1.4,2.2,2.4,4,2.4c1.9,0,3.6-1.2,4.3-3.1l0-0.1 C29.1,16,28.5,11.9,26.2,8.5z M19,17c0,1.7-1.3,3-3,3s-3-1.3-3-3v-2c0-1.7,1.3-3,3-3s3,1.3,3,3V17z">
                                </path>
                            </g>
                        </svg>
                        'klinik@sehat.com'
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-4">Informasi</h2>

                    <ul>
                        <li class="mb-2">
                            <a href="#layanan" class="hover:text-gray-300">Layanan</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="hover:text-gray-300">Fasilitas</a>
                        </li>
                    </ul>
                </div>


            </div>


        </div>
    </footer>

    <script>
        feather.replace()
    </script>

</body>

</html>
