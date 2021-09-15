@extends('layout.main')
@section('content')
<div class="container px-6 mx-auto grid mt-8">
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <h4 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
          Add Employee
        </h4>
        @if (Session::has('success'))
        
        <span class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-green-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" >
            <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <span>{{Session::get('success')}} </span>
            <span>Please check customer table for new customer</span>
            </div>
        </span>
        @endif
          <form  action="{{route('Customer.csv-store')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <label class="block text-sm mb-5 ">
              <span class="text-gray-700 dark:text-gray-400 ">Name</span>
              <input type="file" name="customer_data" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray border-2 form-input" placeholder="Name" value="{{old('name')}}">
                @error('customer_data')
                <p class=" text-red-500 text-sm text-center  error">*{{ $message }} </p>
                @enderror
            </label>
            <div class=" flex justify-end mb-2 ">
                <button type="submit" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  <span>Submit</span>
                </button>
              </div>
          </form>
        </div>      
</div>
@endsection