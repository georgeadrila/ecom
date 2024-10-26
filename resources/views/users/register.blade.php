<x-layout>
    <h1 class="text-3xl text-center font-bold">Register</h1>
    <form action="/users" method="POST" class="w-1/2 mx-auto mt-8">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-bold mb-2">Name</label>
            <input type="text" value="{{old(name)}}" name="name" id="name" class="w-full p-2 border border-gray-300" value="{{old('name')}}">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-bold mb-2">Email</label>
            <input type="email" value="{{old(email)}}" name="email" id="email" class="w-full p-2 border border-gray-300" value="{{old('email')}}">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-bold mb-2">Password</label>
            <input type="password" value="{{old(password)}}" name="password" id="password" class="w-full p-2 border border-gray-300">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-bold mb-2">Confirm Password</label>
            <input type="password" value="{{old(password_confirmation)}}" name="password_confirmation" id="password_confirmation" class="w-full p-2 border border-gray-300">
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="bg-laravel text-white py-2 px-4 hover:bg-red-600">Register</button>
    </form>
</x-layout>