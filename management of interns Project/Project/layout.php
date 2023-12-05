<?php
session_start();
require_once "bd.php";
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="logout.js"></script>
<script src="contenu.js"></script>

<link href="styles.css" rel="stylesheet">
<link href="cont.css" rel="stylesheet">

<div class="navbar navbar-default navbar-fixed-top">
    <div id="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="http://www.cni.tn/index.php/fr/">

                <img src="cni.png" alt="">
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" id="link1">Inters</a>
                </li>
                <li><a href="#" id="link2">Supervisors</a></li>

                <li><a href="#" id="link3">Topics</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" id="logout">
                        <span class="glyphicon glyphicon-user"></span> 
                        <i><?= $_SESSION['name'] ?></i>
                    </a>

                </li>
            </ul>
        </div>
    </div>
</div>

<div id="content" class="con">
    <div clas="ex">
        <div class="header">

            <!--Content before waves-->
            <div class="inner-header flex">
                <!--Just the logo.. Don't mind this-->

                <h1>Centre National de l'Informatique</h1>
            </div>


            <!--Waves Container-->
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#f8f8f8" />
                    </g>
                </svg>
            </div>
            <!--Waves end-->

        </div>
        <!--Header ends-->

        <!--Content starts-->
        <div class="xxx flex">
            <p>developped by Fassatoui Mohamed Ali</p>
        </div>
        <!--Content ends-->
    </div>
</div>
</div>