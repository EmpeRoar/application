 @extends('master')

 @section('main_content')
 <hr>
    @foreach($customers as $customer)
    {{$customer->name}}
    @endforeach

    @if(true)
    {{ 'hello' }}
    @endif    
@stop