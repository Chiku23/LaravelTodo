@extends('layout.app')

@section('content')

    <div class="HomeContainer flex flex-col justify-center items-center mx-auto">
        @if (!empty($user))
        <div class="UserWelcome">Hello... {{$user->name;}}</div>
        @endif
        <div class="HomePageTitle w-full text-center mb-4 font-bold text-2xl mt-4">My ToDo's</div>
        <div class="TodoContainer flex flex-col w-1/2 mx-auto">
            <div class="TopFormSection bg-gray-200 mb-5 p-4 rounded">
                <form action="{{route('addtodo')}}" method="post">
                    @csrf
                    <div class="formContainer flex flex-col justify-center">
                        <input type="text" name="todo" class="flex bg-transparent rounded border-gray-950 border px-2 py-1 my-2">
                        <button type="submit" class="bg-transparent border-black hover:bg-green-500 border-2 hover:border-white text-black hover:text-white px-4 py-1 font-bold rounded transition-all duration-150 w-32 mx-auto">Save</button>
                    </div>
                </form>
            </div>
            <div class="TodoContents bg-gray-200 p-4 rounded">
                <div class="ListTodos">
                   
                    @if(!empty($todos))
                        @foreach($todos as $todo)
                        <div class="Todo border border-gray-400 p-4 m-2 flex flex-col justify-center text-center">
                            <div class="item mb-2">{{$todo['todo']}}</div>
                            {{-- <div class="actions mt-2">
                                <span class="editbutton bg-transparent border-black hover:bg-blue-500 border-2 hover:border-white text-black hover:text-white px-4 py-1 font-bold rounded transition-all duration-150 cursor-pointer mx-1">Edit</span>
                                <span class="deletebutton bg-transparent border-black hover:bg-red-500 border-2 hover:border-white text-black hover:text-white px-4 py-1 font-bold rounded transition-all duration-150 cursor-pointer mx-1">Delete</span>
                            </div> --}}
                        </div>
                        @endforeach
                        @else
                        There are No Todos.
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
