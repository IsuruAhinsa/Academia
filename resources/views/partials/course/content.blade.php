@section('css')
    <style>
        ul.timeline {
            list-style-type: none;
            position: relative;
        }
        ul.timeline:before {
            content: ' ';
            background: #51be78;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }
        ul.timeline > li {
            margin: 20px 0;
            padding-left: 20px;
        }
        ul.timeline > li:before {
            content: ' ';
            background: #51be78;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #51be78;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
        }
    </style>
@endsection

<ul class="timeline">

    <li>
        <h4 class="font-weight-bold text-primary">First Stage</h4>
        <span class="float-right text-info font-weight-bold">Rs. 5000.00</span>
        <ol>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
        </ol>
    </li>

    <li>
        <h4 class="font-weight-bold text-primary">Second Stage</h4>
        <span class="float-right text-info font-weight-bold">Rs. 5000.00</span>
        <ol>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
        </ol>
    </li>

    <li>
        <h4 class="font-weight-bold text-primary">Third Stage</h4>
        <span class="float-right text-info font-weight-bold">Rs. 5000.00</span>
        <ol>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
            <li>adsda</li>
        </ol>
    </li>

</ul>

