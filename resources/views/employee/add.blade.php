@extends('layout.main')
@section('content')
<div class="container px-6 mx-auto grid mt-8">
    

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <h4 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Add Employee
    </h4>
      <form  action="{{route('Employee.insert')}}" method="POST">
      @csrf
        <label class="block text-sm mb-5 ">
          <span class="text-gray-700 dark:text-gray-400 ">Name</span>
          <input type="rext" name="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray border-2 form-input" placeholder="Name" value="{{old('name')}}">
            @error('name')
            <p class=" text-red-500 text-sm text-center  error">*{{ $message }} </p>
            @enderror
        </label>

        <label class="block text-sm mb-5">
          <span class="text-gray-700 dark:text-gray-400">Email</span>
          <input type="text" name="email"  autocomplete="email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray border-2 form-input" placeholder="Email" value="{{old('email')}}">
           @error('email')
            <p class=" text-red-500 text-sm text-center  error">*{{ $message }} </p>
            @enderror
        </label>

        <label class="block text-sm mb-5">
          <span class="text-gray-700 dark:text-gray-400">Phone</span>
          <input type="text" name="phone" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray border-2 form-input" placeholder="Phone" value="{{old('phone')}}">
           @error('phone')
            <p class=" text-red-500 text-sm text-center  error">*{{ $message }} </p>
            @enderror
        </label>

        <label class="block text-sm mb-5">
          <span class="text-gray-700 dark:text-gray-400">Password</span>
          <input type="password" name="password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray border-2 form-input" placeholder="Password">
           @error('password')
            <p class=" text-red-500 text-sm text-center  error">*{{ $message }} </p>
            @enderror
        </label>

        <label class="block text-sm mb-5">
          <span class="text-gray-700 dark:text-gray-400">Confirm password</span>
          <input name="password_confirmation" type="password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray border-2 form-input" placeholder="Password">
        </label>

        <div class=" flex justify-end mb-2 ">
        <button type="submit" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          <span>Submit</span>
        </a>
      </div>
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