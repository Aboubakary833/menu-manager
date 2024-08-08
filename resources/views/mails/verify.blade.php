<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            mso-font-alt: 'Verdana';
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');
        }

        * {
            font-family: 'Roboto', Verdana;
        }
    </style>
    <style tailwind>
        /* layer: preflights */
        /* layer: default */
        .disabled\:pointer-events-none:disabled {
            pointer-events: none;
        }

        .m-auto {
            margin: auto;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .my-5 {
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .ml-2 {
            margin-left: 0.5rem;
        }

        .mt-10 {
            margin-top: 2.5rem;
        }

        .mt-3 {
            margin-top: 0.75rem;
        }

        .mt-5 {
            margin-top: 1.25rem;
        }

        .h-\[23px\] {
            height: 23px;
        }

        .h-10 {
            height: 2.5rem;
        }

        .w-\[200px\] {
            width: 200px;
        }

        .w-\[300px\] {
            width: 300px;
        }

        .w-6 {
            width: 1.5rem;
        }

        .w-fit {
            width: fit-content;
        }

        .inline-flex {
            display: inline-flex;
        }

        .items-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .whitespace-nowrap {
            white-space: nowrap;
        }

        .border {
            border-width: 1px;
        }

        .border-2 {
            border-width: 2px;
        }

        .border-gray-500 {
            border-color: rgb(107, 114, 128);
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .rounded-md {
            border-radius: 0.375rem;
        }

        .rounded-xl {
            border-radius: 0.75rem;
        }

        .bg-gray-100 {
            background-color: rgb(243, 244, 246);
        }

        .bg-primary {
            background-color: rgb(73, 130, 250);
        }

        .bg-slate-50 {
            background-color: rgb(248, 250, 252);
        }

        .bg-white {
            background-color: rgb(255, 255, 255);
        }

        .hover\:bg-primary\/90:hover {
            background-color: rgb(73, 130, 250, 0.9);
        }

        .fill-primary {
            fill: rgb(73, 130, 250);
        }

        .p-\[10px\] {
            padding: 10px;
        }

        .px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .py-1\.5 {
            padding-top: 0.375rem;
            padding-bottom: 0.375rem;
        }

        .text-center {
            text-align: center;
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .font-semibold {
            font-weight: 600;
        }

        .leading-none {
            line-height: 1;
        }

        .tracking-tight {
            letter-spacing: -0.025em;
        }

        .disabled\:opacity-50:disabled {
            opacity: 0.5;
        }

        .outline-0 {
            outline-width: 0px;
        }

        .focus-visible\:ring-2:focus-visible {
            box-shadow: 0 0 rgb(0, 0, 0, 0), 0 0 rgb(0, 0, 0, 0), 0 0 rgb(0, 0, 0, 0);
        }

        .focus-visible\:ring-2:focus-visible:focus-visible {
            box-shadow: 0 0 0 0px #fff, 0 0 0 calc(0px + 0px) rgb(147, 197, 253, 0.5), 0 0 rgb(0, 0, 0, 0);
        }

        .focus-visible\:ring-2:focus-visible:focus-visible {
            box-shadow: 0 0 0 0px #fff, 0 0 0 calc(0px + 0px) rgb(147, 197, 253, 0.5), 0 0 rgb(0, 0, 0, 0);
        }

        .focus-visible\:ring-2:focus-visible:focus-visible {
            box-shadow: 0 0 0 0px #fff, 0 0 0 calc(0px + 0px) rgb(147, 197, 253, 0.5), 0 0 rgb(0, 0, 0, 0);
        }

        .focus-visible\:ring-2:focus-visible:focus-visible {
            box-shadow: 0 0 0 0px #fff, 0 0 0 calc(0px + 0px) rgb(147, 197, 253, 0.5), 0 0 rgb(0, 0, 0, 0);
        }

        .focus-visible\:ring-2:focus-visible:focus-visible {
            box-shadow: 0 0 0 0px #fff, 0 0 0 calc(0px + 0px) rgb(147, 197, 253, 0.5), 0 0 rgb(0, 0, 0, 0);
        }

        .focus-visible\:ring-2:focus-visible:focus-visible {
            box-shadow: 0 0 0 0px #fff, 0 0 0 calc(0px + 0px) rgb(147, 197, 253, 0.5), 0 0 rgb(0, 0, 0, 0);
        }

        .transition-colors {
            transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        @media (min-width: 640px) {
            .sm\:w-\[500px\] {
                width: 500px;
            }
        }

        @media (min-width: 768px) {
            .md\:w-\[580px\] {
                width: 580px;
            }
        }
    </style>
</head>

<body class="bg-slate-50">
<div data-skip="true" style="display:none;line-height:1px;max-height:0;max-width:0;opacity:0;overflow:hidden">Verify<div> ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿ ‌​‍‎‏﻿</div>
</div>
<table align="center" width="100%" class="w-[300px] sm:w-[500px] md:w-[580px] p-[10px] bg-white mx-auto border-2 border-gray-500 rounded-lg" border="0" cellpadding="0" cellspacing="0" role="presentation">
    <tbody>
    <tr>
        <td>
            <table align="center" width="100%" role="presentation" cellspacing="0" cellpadding="0" border="0" style="max-width:37.5em">
                <tbody>
                <tr style="width:100%">
                    <td>
                        <table align="center" width="100%" class="w-fit m-auto" role="presentation" cellspacing="0" cellpadding="0" border="0">
                            <tbody style="width:100%">
                            <tr style="width:100%">
                                <td><img class="w-20 h-20" alt="Menu Manager" src="{{ $message->embed(public_path("logo.png"))  }}" style="border:none;display:block;outline:none;text-decoration:none"></td>
                            </tr>
                            </tbody>
                        </table>
                        <table align="center" width="100%" class="w-fit mt-5" border="0" cellpadding="0" cellspacing="0" role="presentation">
                            <tbody>
                            <tr>
                                <td>
                                    <p class="font-bold text-center" style="font-size:30px;line-height:24px;margin:16px 0">{{ __("mails.messages.verify.title", locale: $locale) }}</p>
                                    <p class="mt-10" style="font-size:18px;line-height:24px;margin:16px 0">{{ __("mails.messages.verify.greeting", locale: $locale) }}</p>
                                    <p class="mt-3" style="font-size:18px;line-height:24px;margin:16px 0">{{ __("mails.messages.verify.text", locale: $locale) }}</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table align="center" width="100%" class="my-5 text-center" border="0" cellpadding="0" cellspacing="0" role="presentation">
                            <tbody>
                            <tr>
                                <td><a href="{{ $url }}" class="w-[200px] font-semibold bg-primary hover:bg-primary/90 h-10 rounded-md px-3 inline-flex items-center justify-center whitespace-nowrap text-sm ring-offset-white transition-colors outline-0 focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50" style="color:#FFFFFF;text-decoration:none">{{ __("mails.messages.verify.button_text", locale: $locale) }}</a></td>
                            </tr>
                            </tbody>
                        </table>
                        <table align="center" width="100%" class="my-5" border="0" cellpadding="0" cellspacing="0" role="presentation">
                            <tbody>
                            <tr>
                                <td>
                                    <p class="leading-none" style="font-size:18px;line-height:24px;margin:16px 0">{{ __("mails.details.welcome", locale: $locale) }}</p>
                                    <p style="font-size:15px;line-height:24px;margin:16px 0;color:#3D3D3D">{{ __("mails.details.team", locale: $locale) }}</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <hr style="border:none;border-top:1px solid #eaeaea;width:100%">
                        <table align="center" width="100%" class="w-[200px] mx-auto" border="0" cellpadding="0" cellspacing="0" role="presentation">
                            <tbody>
                            <tr>
                                <td>
                                    <p style="font-size:14px;line-height:24px;margin:16px 0">{{ __("mails.details.reach_out", locale: $locale) }}</p>
                                    <table align="center" width="100%" class="text-center mx-auto" role="presentation" cellspacing="0" cellpadding="0" border="0">
                                        <tbody style="width:100%">
                                        <tr style="width:100%">
                                            <td><a href="#" style="color:#067df7;text-decoration:none"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiMzZDNkM2QiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1mYWNlYm9vayI+PHBhdGggZD0iTTE4IDJoLTNhNSA1IDAgMCAwLTUgNXYzSDd2NGgzdjhoNHYtOGgzbDEtNGgtNFY3YTEgMSAwIDAgMSAxLTFoM3oiLz48L3N2Zz4=" width="24" height="24" style="border:none;display:block;outline:none;text-decoration:none"></a></td>
                                            <td><a href="#" style="color:#067df7;text-decoration:none"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiMzZDNkM2QiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1saW5rZWRpbiI+PHBhdGggZD0iTTE2IDhhNiA2IDAgMCAxIDYgNnY3aC00di03YTIgMiAwIDAgMC0yLTIgMiAyIDAgMCAwLTIgMnY3aC00di03YTYgNiAwIDAgMSA2LTZ6Ii8+PHJlY3Qgd2lkdGg9IjQiIGhlaWdodD0iMTIiIHg9IjIiIHk9IjkiLz48Y2lyY2xlIGN4PSI0IiBjeT0iNCIgcj0iMiIvPjwvc3ZnPg==" width="24" height="24" style="border:none;display:block;outline:none;text-decoration:none"></a></td>
                                            <td><a href="#" style="color:#067df7;text-decoration:none"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiMzZDNkM2QiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS10d2l0dGVyIj48cGF0aCBkPSJNMjIgNHMtLjcgMi4xLTIgMy40YzEuNiAxMC05LjQgMTcuMy0xOCAxMS42IDIuMi4xIDQuNC0uNiA2LTJDMyAxNS41LjUgOS42IDMgNWMyLjIgMi42IDUuNiA0LjEgOSA0LS45LTQuMiA0LTYuNiA3LTMuOCAxLjEgMCAzLTEuMiAzLTEuMnoiLz48L3N2Zz4=" width="24" height="24" style="border:none;display:block;outline:none;text-decoration:none"></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>

</html>
