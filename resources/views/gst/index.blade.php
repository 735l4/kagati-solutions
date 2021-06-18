@extends('layouts.app')

@section('content')
<form action="{{route('gst.calc')}}" method="POST">
    @csrf
    <input type="text" name="amount" value="5" />
    <br>
    <input type="text" name="gst" value="6">
    <input type="submit" value="Submit" />
</form>
Output: Amount of gst is MYR. {{ $output }}
@endsection