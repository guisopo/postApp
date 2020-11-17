@extends('layout.app')

@section('content')

  <div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
      
    <form action="{{ route('register') }}" method="post">
      {{-- Name --}}
      <div class="mb-4">
        <label for="name" class="sr-only">Name</label>
        <input type="text"  name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value ="">
      </div>
      {{-- Username --}}
      <div class="mb-4">
        <label for="username" class="sr-only">Username</label>
        <input type="text"  name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value ="">
      </div>
      {{-- Email --}}
      <div class="mb-4">
        <label for="email" class="sr-only">Email</label>
        <input type="text"  name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value ="">
      </div>
      {{-- Password --}}
      <div class="mb-4">
        <label for="password" class="sr-only">Password</label>
        <input type="password"  name="password" id="password" placeholder="Choose your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value ="">
      </div>
      {{-- Confirm Password --}}
      <div class="mb-4">
        <label for="password_confirmation" class="sr-only">Password again</label>
        <input type="password"  name="password_confirmation" id="password" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value ="">
      </div>
      {{-- Register Button --}}
      <div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
          Register
        </button>
      </div>
    </form>

    </div>
  </div>

@endsection