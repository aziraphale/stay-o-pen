<?php
if (strcasecmp($_SERVER['HTTP_HOST'], 'stay.o.pen.wf') !== 0) {
    header("Location: http://stay.o.pen.wf/", true, 301);
    die();
}
?><!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Stay Open! Keep Your Browser Windows Open!</title>
    <link rel="canonical" href="http://stay.o.pen.wf/">
    <link rev="canonical" href="http://o.pen.wf/">
    <link rel="shorturl" href="http://o.pen.wf/">

    <link rel="icon" href="icon_512.png" type="image/png"/>
    <link rel="shortcut icon" href="icon_512.png" type="image/png"/>
    <link rel="mask-icon" href="icon.svg">
    <link rel="fluid-icon" href="icon_512.png" title="stay.o.pen.wf">

    <link rel="icon" type="image/png" href="icon_16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="icon_32.png" sizes="32x32">
    <link rel="shortcut icon" href="icon_m.ico">
    <meta property="og:image" content="icon_512.png">
    <meta name="theme-color" content="#252525">

    <link rel="apple-touch-icon" type="image/png" href="icon_512.png">
    <link rel="apple-touch-icon-precomposed" type="image/png" href="icon_512.png">

    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Stay Open! Keep Your Browser Window Open! stay.o.pen.wf" />
    <meta property="og:description" content="Prevent accidental closing of browser windows by keeping this site open!" />
    <meta property="og:url" content="http://stay.o.pen.wf/" />
    <meta property="og:site_name" content="stay.o.pen.wf" />
    <meta property="og:image" content="http://stay.o.pen.wf/icon_512.png" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Prevent accidental closing of browser windows by keeping this site open!" />
    <meta name="twitter:title" content="Stay Open! Keep Your Browser Window Open! stay.o.pen.wf" />
    <meta name="twitter:image" content="http://stay.o.pen.wf/icon_512.png" />

    <style type="text/css">
        body
        {
            margin: 0;
            padding: 2em 15%;
            font-family: Verdana, Arial, sans-serif;
            background-color: #252525;
            color: #cacaca;
        }
        header h1
        {
            margin: 0;
            text-align: center;
            font-size: 1em;
            font-weight: normal;
            color: #808080;
        }
        header h1 a
        {
            text-decoration: none;
            color: inherit;
        }
        header h1 span
        {
            font-size: 2em;
            font-weight: bold;
            color: #cacaca;
        }
        article
        {
            margin: 2em 0;
            line-height: 1.7em;
            font-weight: normal;
            font-size: 1.1em;
            text-align: center;
        }
        p
        {
            margin: 0;
        }
        footer
        {
            font-size: 0.8em;
            color: #a0a0a0;
            position: absolute;
            bottom: 2em;
            width: 70%;
        }
        footer a
        {
            color: #808080;
        }
        footer .icon-credit
        {
            margin-top: 1em;
            text-align: right;
        }
    </style>
    <script>
        window.onbeforeunload = function() {
            return "Are you sure you wish to close this browser window?";
        };
    </script>
</head>
<body>
<header>
    <h1><a href="/"><span>stay.o.pen</span>.wf</a></h1>
</header>
<article>
    <p>Keep accidentally closing your browser windows? Keep this page open in a tab (pin it! bookmark it!) in each window to force your browser to confirm any attempts to close a window!</p>
</article>
<footer>
    <p>This page was heavily inspired by “<a href="http://www.maki-chan.de/preventclose.htm">Prevent browser close tab</a>”. My main reason for “forking” it was to add a ‘<a href="https://en.wikipedia.org/wiki/Favicon">favicon</a>’ for easier identification amongst my pinned tabs — a nicer URL (using a domain that I already owned and which happened to fit this purpose nicely) and other tweaks are simply added extras!</p>
    <p class="icon-credit">Icon by <a href="https://icomoon.io/app">IcoMoon</a></p>
</footer>
</body>
</html>
