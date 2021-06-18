@extends('layouts.app')

@section('content')
<form action="{{route('gst.calc')}}" method="POST">
    @csrf
    <label for="amount">Enter your amount in MYR</label>
    <input type="text" name="amount" value="{{ $amt }}"/>
    <br>
    <label for="gst">Enter gst percent</label>
    <input type="text" name="gst" value="{{ $gst }}">
    <br>
    <input type="submit" value="Submit" />
</form>
Output: Amount of gst is MYR. {{ $output }}
@endsection