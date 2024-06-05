@extends('layouts.home')

@section('extra-content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #04134a;
            color: white;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .news-header {
            font-size: 2em;
            padding: 20px 0;
            text-align: center;
        }
        .main-news, .more-news {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .main-news-item, .more-news-item {
            background-color: #073983;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            text-align: center;
        }
        .main-news-item img, .more-news-item img {
            width: 100%;
            height: auto;
        }
        .main-news-item {
            width: 100%;
        }
        .more-news-item {
            width: 48%;
        }
        .news-content {
            padding: 10px;
        }
        .news-date {
            font-size: 0.9em;
            color: #ccc;
        }
        .news-title {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .news-title a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="news-header">NEWS</div>
        <div class="main-news">
            <div class="main-news-item">
                <img src="img/marine.jpg" alt="Main News Image">
                <div class="news-content">
                    <div class="news-date">May 13, 2024</div>
                    <div class="news-title"><a href="#">BS Marine Biology and BS Fisheries Students Successful in their Oral Defense Presentations!
Congratulations to our BS Marine Biology and BS Fisheries students for successfully navigating their oral defenses! With 7 BSMB student groups presenting on May 7 and 9, along with 5 BSFi student groups on May 10, it's been a testament to their passion and commitment. Here's to the culmination of hard work and the exciting new beginnings ahead!</a></div>
                </div>
            </div>
        </div>
        <div class="more-news">
            <div class="more-news-item">
                <img src="img/red.jpg" alt="More News Image 1">
                <div class="news-content">
                    <div class="news-date">May 8, 2024</div>
                    <div class="news-title"><a href="#"> Mass Blood Donation Drive
A total of 30 generous individuals have answered the call and participated in the Mass Blood Donation Drive. Their selfless contribution will make a significant impact in saving lives.</a></div>
                </div>
            </div>
            <div class="more-news-item">
                <img src="img/dance.jpg" alt="More News Image 2">
                <div class="news-content">
                    <div class="news-date">Every Wednesday</div>
                    <div class="news-title"><a href="#"> "Unleash your passion in dancing" the SLSU-BC Culture and the Arts is inviting all students who are into dancing to showcase their talents onto our dance audition</a></div>
                </div>
            </div>
            <div class="more-news-item">
                <img src="path/to/your/image4.png" alt="More News Image 3">
                <div class="news-content">
                    <div class="news-date">Apr 26, 2024</div>
                    <div class="news-title"><a href="#">SLSU - Glee Club grabs 2nd place during PASUC -NCAF '24</a></div>
                </div>
            </div>
        </div>
    </div>

@endsection