@extends('layouts.app')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="pb-5 border-b border-gray-200">
  <h3 class="text-lg leading-6 font-medium text-gray-900">
     Welcome, {{ Auth::user()->firstname }}!
  </h3>
</div>

@endsection
