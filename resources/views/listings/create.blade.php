<x-layout>
    <form action="/listings" method="post" enctype="multipart/form-data">
        @csrf
        <div class="inputgroup">
            <input type="text" name="company" id="" placeholder="Companinha" value="{{old('company')}}" >
            @error('company')
                <p>{{$message}}</p>
            @enderror
            <input type="file" name="logo" id="" placeholder="Fotto" value="{{old('logo')}}" >
            @error('logo')
                <p>{{$message}}</p>
            @enderror
            <input type="text" name="title" id="" placeholder="Titulo" value="{{old('title')}}" >
            @error('title')
                <p>{{$message}}</p>
            @enderror
            <input type="text" name="location" id="" placeholder="Localização" value="{{old('location')}}" >
            @error('location')
                <p>{{$message}}</p>
            @enderror
            <input type="text" name="email" id="" placeholder="Email" value="{{old('email')}}" >
            @error('email')
                <p>{{$message}}</p>
            @enderror
            <input type="text" name="website" id="" placeholder="URL" value="{{old('website')}}" >
            @error('website')
                <p>{{$message}}</p>
            @enderror
            <input type="text" name="tags" id="" placeholder="Tags" value="{{old('tags')}}" >
            @error('tags')
                <p>{{$message}}</p>
            @enderror
            <textarea name="description" id="" cols="30" rows="10" placeholder="Descrição">{{old('description')}}</textarea>
            @error('description')
                <p>{{$message}}</p>
            @enderror

            <button type="submit">Enviar</button>
        </div>
    </form>
</x-layout>
