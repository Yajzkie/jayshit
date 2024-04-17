@extends('layouts.home')

@section('content')
<style>
    /* Custom CSS for iframe responsiveness */
    .embed-responsive {
        position: relative;
        display: block;
        width: 81%;
        height: 514px;
        padding: 0;
        overflow: hidden;
        z-index: 1;
    }
    .embed-responsive iframe {
        display:flex;
        justify-content: center;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>
    <!-- Background Video-->
<div class="container" style="height: inherit;">
    <div class="row d-flex justify-content-center">
        <h6 class="mt-3" style="color: aliceblue;font-family: sans-serif;">SLSU Bontoc Campus Conceptual and Future Designs 3D Models</h6> 
    </div>
    <div class="row d-flex justify-content-center">
        <div class="embed-responsive embed-responsive-16by9 m-1">
            <iframe src="https://3dwarehouse.sketchup.com/embed/f6f6e760-8fea-4d44-ba80-c34eb4f7af71?token=aldWunJp-Rw=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="580" height="326" allowfullscreen autoplay></iframe>
        </div>
    </div>
</div>
@endsection