<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>


    <link rel="stylesheet" href="/css/estilomenu.css">
    <link rel="stylesheet" href="/css/estilocarrusel.css">
    <link rel="stylesheet" href="/css/estilovan.css">
    <link rel="stylesheet" href="/css/estiloacerca.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<div>
    @section ('header')
        <img src="images/logo.png" alt="" class="logo">
        <h1 class="frase">@yield('frase')</h1>
        <a href="index" title="Da click para ir al menu"><img style="width: 160px"    src="images/sticker.png" alt="" class="casa"></a>
    @show

</div>
