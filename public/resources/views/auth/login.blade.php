@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-50 flex flex-col justify-center sm:px-6 lg:px-8">
  
  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Sign in to your account
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600 max-w">
        Or
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
            start your 14-day free trial
        </a>
        </p>
    </div>

      <form class="space-y-6" action="{{ route('login') }}" method="POST">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">
            Email address
          </label>
        
          <div class="mt-1">
            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('email') is-invalid @enderror">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">
            Password
          </label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="@error('password') is-invalid @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember"  {{ old('remember') ? 'checked' : '' }} name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
           
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
              Remember me
            </label>
          </div>

          <div class="text-sm">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                Forgot your password?
                </a>
            @endif
          </div>
        </div>

        <div>
          <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Sign in
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
              Don't have an account yet?
            </span>
          </div>
        </div>
        <!-- grid grid-cols-3 gap-3 -->
        <div class="mt-6 ">
          <div>
            <a href="{{ route('register') }}" class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
              Create an account
            </a>
          </div>

    
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
