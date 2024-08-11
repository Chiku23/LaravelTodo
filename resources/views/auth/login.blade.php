@extends('layout.app')

@section('content')

<div class="loginContainer flex flex-col justify-center items-center mx-auto border-2 bg-gray-200 max-w-[350px] border-gray-400">
    <div class="PageTitle w-full text-center mb-4 font-bold text-2xl mt-4">Login</div>
    <form action="{{url('loginUser')}}" method="post">
    @csrf
        <div class="fieldgroup w-full flex flex-col">
            <label for="email" class="font-bold">E-mail:</label>
            <input type="email" name="email" class="w-60 bg-transparent rounded border-gray-950 border px-2 py-1 my-2">

            <label for="password" class="font-bold">Password:</label>
            <input type="password" name="password" class="w-60 bg-transparent rounded border-gray-950 border px-2 py-1 my-2">
        </div>  
        <div class="actions flex justify-center my-4">
            <button type="submit" class="bg-transparent border-black hover:bg-green-500 border-2 hover:border-white text-black hover:text-white px-4 py-1 font-bold rounded transition-all duration-150">Login</button>
        </div>
    </form>
</div>

@endsection