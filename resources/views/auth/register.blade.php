@extends('layout.app')

@section('content')

<div class="registerContainer">
    <div class="loginContainer flex flex-col justify-center items-center mx-auto border-2 bg-gray-200 max-w-[350px] border-gray-400">
        <div class="PageTitle w-full text-center mb-4 font-bold text-2xl mt-4">Register</div>
        <form action="{{url('registerUser')}}" method="post">
        @csrf
            <div class="fieldgroup w-full flex flex-col">
                <label for="name" class="font-bold">Name:</label>
                <input type="name" name="name" class="w-60 bg-transparent rounded border-gray-950 border px-2 py-1 my-2">

                <label for="email" class="font-bold">E-mail:</label>
                <input type="email" name="email" class="w-60 bg-transparent rounded border-gray-950 border px-2 py-1 my-2">
    
                <label for="password" class="font-bold">Password:</label>
                <input type="password" name="password" class="w-60 bg-transparent rounded border-gray-950 border px-2 py-1 my-2">

                <label for="password_confirmation" class="font-bold">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="w-60 bg-transparent rounded border-gray-950 border px-2 py-1 my-2">
            </div>  
            <div class="actions flex justify-center my-4">
                <button type="submit" class="bg-transparent border-black hover:bg-green-500 border-2 hover:border-white text-black hover:text-white px-4 py-1 font-bold rounded transition-all duration-150">Register</button>
            </div>
            <div class="my-2">
                Already Registered? Login <a href="{{route('login')}}"><span class="text-blue-500">Here</span></a>
            </div>
        </form>
    </div>
</div>

@endsection