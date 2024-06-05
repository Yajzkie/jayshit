@extends('layouts.home')

@section('content')
<style>
    /* Custom CSS for iframe responsiveness */
    .embed-responsive {
        position: relative;
        display: block;
        width: 88%;
        height: 327px;
        padding: 0;
        overflow: hidden;
    }
    .embed-responsive iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .picture-section {
        border: 2px solid red;
        padding: 10px;
        text-align: center;
        margin: 20px 0;
        float: left;
        width: 30%;
    }
    .picture-section img {
        display: block;
        width: 100%;
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
        justify-content: center;
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
        text-align: left;
    }
    .news-title a {
        color: white;
        text-decoration: none;

    }
</style>
<!-- Masthead-->
<div class="container-fluid" style="height: inherit;">
    <div class="row" style="height: inherit;">
        <div class="masthead col-md-5">
            <div class="masthead-content text-white">
                <div class="">
                    <table>
                        <thead>
                            <tr>
                                <td>
                                    <img style="display:block;width: 100%;" src="{{ asset('img/slsulogo.png') }}">
                                </td>
                            </tr>
                        </thead>
                    </table>
                    <hr>
                    <h4 class="clearfix fst-italic lh-1 mb-4">Welcome to<br>SLSU - BONTOC CAMPUS</h4>
                    <p class="mb-0">
                        <div class="contact-world-map">
                            <ul class="contact-address" style="list-style-type: none;">
                                <li><span class="fa fa-map-marker"> </span> Address: San Ramon, Bontoc, Southern Leyte</li>
                                <li><span class="fa fa-phone"> </span> Mobile #: 09989791809</li>
                                <li><span class="fa fa-envelope"> </span> Email: cd_bt@southernleytestateu.edu.ph</li>
                                <li><span class="fa fa-globe"> </span> Website: <a href="http://www.slsuonline.edu.ph">www.southernleytestateu.edu.ph</a></li>
                            </ul>
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 p-5" style="z-index: 2;">
            <div class="row m-auto">
                <div class="col-sm-2 col-5 m-1" style="background: #00a2ab;border-radius: 8px;">
                    <a href="http://lms.southernleytestateu.edu.ph/" target="_blank">
                        <img style="display:block;width: 100%;" src="{{ asset('img/lms.png') }}">
                    </a>
                </div>
                <div class="col-sm-2 col-5 m-1" style="background-color: #951d14;border-radius: 8px;">
                    <a href="http://v2.slsubc.com:2238" target="_blank">
                        <img style="display:block;width: 100%;" src="{{ asset('img/survey.png') }}">
                    </a>
                </div>
                <div class="col-sm-2 col-5 m-1" style="background-color: #15157e;border-radius: 8px;">
                    <a href="https://web.facebook.com/slsu.bontoc" target="_blank">
                        <img style="display:block;width: 100%;" src="{{ asset('img/slsubcfb.png') }}">
                    </a>
                </div>
                <div class="col-sm-2 col-5 m-1" style="background-color: #ffffff;border-radius: 8px;">
                    <a href="https://www.facebook.com/slsubitsofficial" target="_blank">
                        <img style="display:block;width: 100%;" src="{{ asset('img/bitsFB.png') }}">
                    </a>
                </div> 
                <div class="col-sm-2 col-5 m-1" style="background: #121c3e;border-radius: 8px;">
                    <a href="http://sis.bc.southernleytestateu.edu.ph/" target="_blank">
                        <img style="display:block;width: 100%;" src="{{ asset('img/sis.png') }}">
                    </a>
                </div>
                <div class="col-sm-2 col-5 m-1" style="background: #121c3e;border-radius: 8px;">
                    <a href="https://election.slsubc.com/" target="_blank">
                        <img style="display:block;width: 100%;" src="{{ asset('img/evoting.png') }}">
                    </a>
                </div>
                <div class="col-sm-2 col-5 m-1" style="background: white;border-radius: 8px;">
                    <a href="https://chatbot.slsubc.com/" target="_blank">
                        <img style="display:block;width: 100%;" src="{{ asset('img/slsuask.png') }}">
                    </a>
                </div>
                <div class="col-sm-2 col-5 m-1 text-center" style="background: white;border-radius: 8px;">
                    <a href="https://slsubc.com/3dmodel" target="_blank">
                        <img style="display:block;width: 100%;" src="{{ asset('img/slsu3D.png') }}">
                    </a>
                    <span>3D Model</span>
                </div>
            </div>
            
            <div class="row m-auto">
                <div class="embed-responsive embed-responsive-16by9 m-1">
                    <!--<iframe src="https://3dwarehouse.sketchup.com/embed/f6f6e760-8fea-4d44-ba80-c34eb4f7af71?token=aldWunJp-Rw=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="580" height="326" allowfullscreen autoplay></iframe>-->
                    <!--<iframe src="https://3dwarehouse.sketchup.com/embed/32386b20-f081-46e6-8b0b-4825ee409407?token=M24eDiP0F9o=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="580" height="326" allowfullscreen></iframe>-->
                </div>
            </div>

            <!-- Picture sections -->
            <div class="container">
                <div class="news-header">NEWS</div>
                <div class="main-news">
                    <div class="main-news-item col" >
                        <img src="img/fma.jpg" alt="Main News Image">
                        <div class="news-content">
                            <div class="news-date">May 27-31, 2024</div>
                            <div><a href="https://www.facebook.com/share/p/bFsaPgrPVSuqhGQA/">see more</a></div>
                            <div class="news-title"><a href="">Exciting Updates from the FMA-9 Sardines Workshop!<br>

We're delighted to announce the latest highlights from the recent Formulation of the FMA-9 Fisheries Management Plan (FMP) for Sardines Workshop - Phase 2, which took place at Villa Paraiso, Poblacion, Mambajao, Camiguin Province!

Representing Southern Leyte State University - Bontoc Campus, Mr. Jimmy E. Salamida participated in this pivotal event. The workshop, which ran from May 27th to May 31st, 2024, convened key members of the FMA-9 community to refine and finalize crucial strategies for sustainable sardine fisheries management.

The workshop was a collaborative effort supported by the Bureau of Fisheries and Aquatic Resources (BFAR), FishCoRe Project, and various stakeholders dedicated to the future of our marine resources.

A special thank you extends to all the participants and the Scientific Advisory Group (SAG) for their invaluable contributions. Your expertise and dedication were instrumental in achieving our goals.

📸 View the moments captured during the event! From engaging discussions to collaborative planning, these images reflect the hard work and commitment of everyone involved.
We anticipate the positive impacts these efforts will bring to our fisheries and coastal communities. Let's continue to work together for a sustainable future!</a></div>
                        </div>
                    </div>
                </div>
                <div class="more-news">
                    <div class="more-news-item">
                        <img src="img/red.jpg" alt="More News Image 1">
                        <div class="news-content">
                            <div class="news-date">May 8, 2024</div>
                            <div><a href="https://www.facebook.com/share/p/qwGosspgHDhCncjP/">see more</a></div>
                            <div class="news-title"><a href="#"> Mass Blood Donation Drive
                            A total of 30 generous individuals have answered the call and participated in the Mass Blood Donation Drive. Their selfless contribution will make a significant impact in saving lives.</a></div>
                        </div>
                    </div>
                    <div class="more-news-item">
                        <img src="img/marine.jpg" alt="More News Image 2">
                        <div class="news-content">
                            <div class="news-date">May 13, 2024</div>
                            <div><a href="https://www.facebook.com/share/p/niN9qMXiir4A4Q46/">see more</a></div>
                            <div class="news-title"><a href="#"> BS Marine Biology and BS Fisheries Students Successful in their Oral Defense Presentations!
Congratulations to our BS Marine Biology and BS Fisheries students for successfully navigating their oral defenses! With 7 BSMB student groups presenting on May 7 and 9, along with 5 BSFi student groups on May 10, it's been a testament to their passion and commitment. Here's to the culmination of hard work and the exciting new beginnings ahead!</a></div>
                        </div>
                    </div>
                    <div class="more-news-item">
                        <img src="img/cots.jpg" alt="More News Image 3">
                        <div class="news-content">
                            <div class="news-date">May 8, 2024</div>
                            <div><a href="https://www.facebook.com/share/p/hFs1t9KgReAGn8B7/">see more</a></div>
                            <div class="news-title"><a href="#">Another exciting partnership on the make! SLSU-Bontoc Faculty Researchers presented their  findings from the 3-day COTS (crown-of-thorns starfish) manual extraction activity organized by LGU-Liloan, a soon-to-be partner. The said activity, in hopes of reducing predation pressure by this coral-eating predators, was also participated by various offices and environmental groups of Liloan, Southern Leyte. Proposal on establishing a marine laboratory as research hub was also presented. Liloan's Municipal Mayor, Hon. Jonna C. Adan, is grateful to the enormous support received and looks forward to an improved COTS management initiatives. The Honorable Mayor further expressed her commitment to officially recognize and eventually, strengthens partnership with SLSU-Bontoc.</a></div>
                        </div>
                    </div>
                    <div class="more-news-item">
                        <img src="img/pic1.jpg" alt="More News Image 3">
                        <div class="news-content">
                            <div class="news-date">May 10, 2024</div>
                            <div><a href="https://www.facebook.com/share/p/nX5GsVDvNDVV43o7/">see more</a></div>
                            <div class="news-title"><a href="#">Before this workday comes to a close...Huge thanks  to the visiting Engineers of the Regional Agricultural Engineering Group-DA RFO VIII who came for an onsite validation of the proposed Tilapia grow-out ponds rehabilitation project of SLSU-Bontoc.</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="bootstrap5/js/bootstrap.min.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62719b2c7b967b11798da60f/1g293sv54';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
@endsection
