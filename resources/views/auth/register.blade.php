@extends('layouts.app')

@section('content')

<div class="min-h-screen  flex flex-col justify-center sm:px-6 lg:px-8">
  
  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Sign up your account
        </h2>
      </div>
      <form class="space-y-6" action="{{ route('register') }}" method="POST">
        @csrf

        <div class="grid grid-cols-2 gap-2">
          <div>
            <label for="firstname" class="block text-sm font-medium text-gray-700">
              Firstname
            </label>
          
            <div class="mt-1">
              <input id="firstname" name="firstname" value="{{ old('firstname') }}" type="text" value="{{ old('firstname') }}" autocomplete="firstname" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          
            </div>
          </div>

          <div>
            <label for="lastname" class="block text-sm font-medium text-gray-700">
              Lastname
            </label>
          
            <div class="mt-1">
              <input id="lastname" name="lastname" value="{{ old('lastname') }}" type="text" value="{{ old('lastname') }}" autocomplete="lastname" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          
            </div>
          </div>
        </div>
        
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">
            Email address
          </label>
        
          <div class="mt-1">
            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
         
          </div>
        </div>


        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">
            Password
          </label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        
          </div>
        </div>
        
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">
            Confirm Password
          </label>
          <div class="mt-1">
            <input id="password-confirm" name="password_confirmation" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Sign up
          </button>
        </div>
      </form>
      <div class="mt-6">
        <div class="relative">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-300"></div>
          </div>
          <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-white text-gray-500">
              Already have an account?
            </span>
          </div>
        </div>
        <!-- grid grid-cols-3 gap-3 -->
        <div class="mt-6 ">
          <div>
            <a href="{{ route('login') }}" class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
              Sign In
            </a>
          </div>

    
        </div>
      </div>
   
  </div>
</div>
@endsection
