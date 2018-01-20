{{--<h1><?php // echo 'Hello World';?></h1>--}}
<h1>{{ 'Hello World'}}</h1>

<h1>{!! 'Another Hello World'!!}</h1>
<hr >

{{--<a href="{{url('/new-one')}}">Home</a>--}}
{{--<a href="{{url('/new-two')}}">About</a>--}}


{{--<a href="{{URL::to('/new-one')}}">Home</a>--}}
{{--<a href="{{URL::to('/new-two')}}">About</a>--}}


<a href="{{route('new-one')}}">Home</a>
<a href="{{route('new-two')}}">About</a>
<br >

<h1>{{$name}}</h1>