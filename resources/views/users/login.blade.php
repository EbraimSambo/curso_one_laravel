<x-layout>
    <h1>Registrar</h1>
    <form action="/users/authenticate" method="post">
        @csrf
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
            <button type="submit">Entrar</button>
        </div>
        <a href="/register">Registrar</a>
    </form>

</x-layout>
