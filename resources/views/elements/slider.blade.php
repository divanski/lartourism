@section('style')
    <link rel="stylesheet" href="{{ asset('assets/plugins/horizontal-parallax/css/horizontal-parallax.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/parallax-slider/css/parallax-slider.css')}}">
@endsection

<!--=== Slider ===-->
<div id="sequence-theme" class="sequence-inner">
    <div id="sequence">
        <ul>
            <li class="animate-in">
                <div class="info">
                    <h2>Built using Sequence.js</h2>
                    <p>The Responsive Slider with Advanced CSS3 Transitions</p>
                </div>
                <img class="balloon" src="{{url('assets/plugins/horizontal-parallax/images/balloon.png')}}" alt="Balloon" />
            </li>
            <li>
                <div class="info">
                    <h2>Creative Control</h2>
                    <p>Create unique sliders using CSS3 transitions -- no jQuery knowledge required!</p>
                </div>
                <img class="aeroplane" src="{{url('assets/plugins/horizontal-parallax/images/aeroplane.png')}}" alt="Aeroplane" />
            </li>
            <li>
                <div class="info">
                    <h2>Cutting Edge</h2>
                    <p>Supports modern browsers, old browsers (IE8+), touch devices and responsive designs</p>
                </div>
                <img class="kite" src="{{url('assets/plugins/horizontal-parallax/images/kite.png')}}" alt="Kite" />
            </li>
        </ul>
        <div class="da-arrows">
            <span class="da-arrows-prev prev"></span>
            <span class="da-arrows-next next"></span>
        </div>
    </div>
</div>

@section('script')
    <script type="text/javascript" src="{{ asset('assets/plugins/horizontal-parallax/js/sequence.jquery-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/horizontal-parallax/js/horizontal-parallax.js')}}"></script>
@endsection
<!--/sequence-theme-->
<!--=== End Slider ===-->