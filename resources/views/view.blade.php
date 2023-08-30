<h1>view page</h1>

<br>
<a href="{{URL::to('/contact')}}"> contact</a>
<br><br>
<a href="{{URL::to('/view')}}"> view </a>
{{URL::previous()}}
@for ($i = 0; $i <20 ; $i++)
<h2> {{$i}}</h2>

    
@endfor
@csrf
<h1>rai shahid kharal</h1>