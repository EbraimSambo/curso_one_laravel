<x-layout>
    <h1>Registrar</h1>
    <form action="/users" method="post">
        @csrf
        <div class="groupInput">
            <label for="">Nome</label>
            <input type="text" name="name" id="" value="{{old('name')}}" >
            @error('name')
            <p> {{$message}} </p>
            @enderror
        </div>
        <div class="groupInput">
            <label for="">Email</label>
            <input type="email" name="email" id="" value="{{old('email')}}">
            @error('email')
            <p> {{$message}} </p>
            @enderror
        </div>
        <div class="groupInput">
            <label for="">Password</label>
            <input type="password" name="password" id="" value="{{old('password')}}">
            @error('password')
                <p> {{$message}} </p>
            @enderror
        </div>

        <div class="groupInput">
            <label for="">Repete a password</label>
            <input type="password" name="password_confirmation" id="" value="{{old('password')}}>
            @error('password_confirmation')
                <p> {{$message}} </p>
            @enderror
        </div>

        <div class="groupInput">
            <button type="submit">Registrar</button>
        </div>
        <a href="/login">Login</a>
    </form>

</x-layout>
