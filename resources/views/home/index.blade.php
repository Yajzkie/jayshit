@extends('layouts.home')
@section('content')
        <!-- Background Video-->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="{{ asset('/vdo/slsubc.mp4')}}" type="video/mp4" /></video>
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
                                                <img style="display:block;width: 100%;"src="{{ asset('img/slsulogo.png')}}">
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                                <hr>
                                <h4 class="clearfix fst-italic lh-1 mb-4">Welcome to<br>SLSU - BONTOC CAMPUS</h4>
                                <p class="mb-0"><div class="contact-world-map">
                                    <ul class="contact-address" style="list-style-type: none;">
                                        <li><span class="fa fa-map-marker"> </span> Address: San Ramon, Bontoc, Southern Leyte</li>
                                        <li><span class="fa fa-phone"> </span> Mobile #: 09989791809</li>
                                        <li><span class="fa fa-envelope"> </span> Email: cd_bt@southernleytestateu.edu.ph</li>
                                        <li><span class="fa fa-globe"> </span> Website: <a href="http://www.slsuonline.edu.ph">www.southernleytestateu.edu.ph</a></li>
                                    </ul>
                                </div></p>
                               
                                <!--<span style="font-size: 10px;">Backgound Video | Source: https://southernleytestateu.edu.ph/index.php/en/bontoc-campus </span>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 p-5" style="z-index: 2;">
                    <div class="row m-auto">
                        <div class="col-sm-2 col-5 m-1" style="background: #00a2ab;border-radius: 8px;">
                            <a href="http://lms.southernleytestateu.edu.ph/" target="_blank">
                            <!--<a href="https://lms-maintenance.slsubc.com" target="_blank">-->
                                 <img style="display:block;width: 100%;"src="img/lms.png">
                            </a>
                        </div>
                        <div class="col-sm-2 col-5 m-1" style="background-color: #951d14;border-radius: 8px;">
                            <a href="http://v2.slsubc.com:2238" target="_blank">
                                 <img style="display:block;width: 100%;"src="img/survey.png">
                            </a>
                        </div>
                        <div class="col-sm-2 col-5 m-1" style="background-color: #15157e;border-radius: 8px;">
                            <a href="https://web.facebook.com/slsu.bontoc" target="_blank">
                                 <img style="display:block;width: 100%;"src="img/slsubcfb.png">
                            </a>
                        </div>
                        <div class="col-sm-2 col-5 m-1" style="background-color: #ffffff;border-radius: 8px;">
                            <a href="https://www.facebook.com/slsubitsofficial" target="_blank">
                                 <img style="display:block;width: 100%;"src="img/bitsFB.png">
                            </a>
                        </div> 
                         <div class="col-sm-2 col-5 m-1" style="background: #121c3e;border-radius: 8px;">
                            <a href="http://sis.bc.southernleytestateu.edu.ph/" target="_blank">
                                 <img style="display:block;width: 100%;"src="img/sis.png">
                            </a>
                        </div>
                        <div class="col-sm-2 col-5 m-1" style="background: #121c3e;border-radius: 8px;">
                            <a href="https://election.slsubc.com/" target="_blank">
                                 <img style="display:block;width: 100%;"src="img/evoting.png">
                            </a>
                        </div>
                         <div class="col-sm-2 col-5 m-1" style="background: white;border-radius: 8px;">
                            <a href="https://chatbot.slsubc.com/" target="_blank">
                                 <img style="display:block;width: 100%;"src="img/slsuask.png">
                            </a>
                        </div>
                    </div>
                    <div class="row m-auto">
                        
                        <!--<div class="col-sm-2 col-5 m-1" style="background-color: cadetblue;">-->
                        <!--    <a href="" target="_blank">-->
                        <!--         <img style="display:block;width: 100%;"src="img/survey.png">-->
                        <!--    </a>-->
                        <!--</div>-->
                        <!--<div class="col-sm-2 col-5 m-1" style="background-color: #15157e;">-->
                        <!--    <a href="https://web.facebook.com/slsu.bontoc" target="_blank">-->
                        <!--         <img style="display:block;width: 100%;"src="img/slsubcfb.png">-->
                        <!--    </a>-->
                        <!--</div>-->
                        <!--<div class="col-sm-2 col-5 m-1" style="background-color: #ffffff;">-->
                        <!--    <a href="https://web.facebook.com/bits.slsu.bc" target="_blank">-->
                        <!--         <img style="display:block;width: 100%;"src="img/bits.png">-->
                        <!--    </a>-->
                        <!--</div> -->
                        <!-- <div class="col-sm-2 col-5 m-1" style="background: #121c3e;">-->
                        <!--    <a href="http://sis.bc.southernleytestateu.edu.ph/" target="_blank">-->
                        <!--         <img style="display:block;width: 100%;"src="img/sis.png">-->
                        <!--    </a>-->
                        <!--</div>-->
                    </div>
                    <div class="row">
                       <!--  <div class="col-sm-2 col-6 mt-auto" style="background: #121c3e;">
                            <a href="http://sis.bc.southernleytestateu.edu.ph/" target="_blank">
                                 <img style="display:block;width: 100%;"src="img/sis.png">
                            </a>
                        </div> -->
                        <!-- <div class="col-md-3" style="background-color: cadetblue;">
                            <a href="" target="_blank">
                                 <img style="display:block;width: 100%;"src="img/survey.png">
                            </a>
                        </div>
                        <div class="col-md-3" style="background-color: #6868ff;">
                            <a href="https://web.facebook.com/slsu.bontoc" target="_blank">
                                 <img style="display:block;width: 100%;"src="img/slsubcfb.png">
                            </a>
                        </div>
                        <div class="col-md-3" style="background-color: #ffffff;">
                            <a href="https://web.facebook.com/bits.slsu.bc" target="_blank">
                                 <img style="display:block;width: 100%;"src="img/bits.png">
                            </a>
                        </div> -->
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