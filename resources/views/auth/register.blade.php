@extends('auth.layout.main')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Register your account
        </h2>
      </div>
      <form class="mt-8 space-y-6" action="{{route('Register.register-submit')}}" method="POST">
        @csrf
        <div class="rounded-md shadow-sm  flex justify-between flex-col">
          <div class="mb-2">
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address" value="{{old('email')}}">
            @error('email')
            <p class=" text-red-500 text-sm text-center  error">*{{ $message }} </p>
            @enderror
          </div>

          <div class="mb-2">
            <label for="name" class="sr-only">Name</label>
            <input id="name" name="name" type="name"  required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="name" value="{{old('name')}}">
            @error('name')
            <p class=" text-red-500 text-sm text-center  error">*{{ $message }} </p>
            @enderror
          </div>

          <div class="mb-2">
            <label for="phone" class="sr-only">Phone</label>
            <input id="phone" name="phone" type="phone"  required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Phone" value="{{old('phone')}}">
            @error('phone')
            <p class=" text-red-500 text-sm text-center  error">*{{ $message }} </p>
            @enderror
          </div>

          <div class="mb-2">
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
            @error('password')
            <p class=" text-red-500 text-sm text-center  error">*{{ $message }} </p>
            @enderror
          </div>

          <div >
            <label for="password_confirmation " class="sr-only">Confirm password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm password">
          </div>
        </div>
  
        <div class="flex items-center justify-between">
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <!-- Heroicon name: solid/lock-closed -->
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            Register
          </button>
        </div>
        <p class=" text-gray-500 text-sm text-center">*Have an account? <a href="{{route('Login.login')}}" class=" text-indigo-500 "> Click here to login</a> </p>
      </form>
    </div>
  </div> 
@endsection
@section('js')
    <script>
      $(document).ready(function () {
        //removing validation error after 5 sec if exixtis
        if ($('.error').length) {
          $('.error').fadeOut(5000);
        }
      });
    </script>
@endsection