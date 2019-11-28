@extends('layouts.master')

@section('title')
Home Page
@endsection

@section('styles')
<style>
    h1{
      color: cornflowerblue;
    }
</style>
@endsection

@include('layouts.nav')
<hr>
 
@section('content')

<div class="col-md-12">
    
 <h1>World end</h1>
<p>You sure?</p>

 
@foreach($data as $item)
<li>{{$item}}</li>
@endforeach

</div>



@endsection

@section('scripts')
<script>
alert('hi');
</script>
@endsection