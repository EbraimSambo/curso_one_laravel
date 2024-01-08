<x-layout>
    <form action="/listings/{{$listing->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="inputgroup">
            <h1>Editar {{$listing->title}}</h1>
            <input type="text" name="company" id="" placeholder="Companinha" value="{{$listing->company}}" >
            @error('company')
                <p>{{$message}}</p>
            @enderror
            <input type="file" name="logo" id="" placeholder="Fotto" value="{{old('logo')}}" >
            @error('logo')
                <p>{{$message}}</p>
            @enderror
            <div class="image">
                <img src="{{ $listing->logo ? asset('storage/' . $listing->logo ) : asset('assets/images/cover.jpg') }}" alt="">
                </div>
            <p>Editar Titulo</p>
            <input type="text" name="title" id="" placeholder="Titulo" value="{{$listing->title}}" >
            @error('title')
                <p>{{$message}}</p>
            @enderror
            <input type="text" name="location" id="" placeholder="Localização" value="{{$listing->location}}" >
            @error('location')
                <p>{{$message}}</p>
            @enderror
            <input type="text" name="email" id="" placeholder="Email" value="{{$listing->email}}" >
            @error('email')
                <p>{{$message}}</p>
            @enderror
            <input type="text" name="website" id="" placeholder="URL" value="{{$listing->website}}" >
            @error('website')
                <p>{{$message}}</p>
            @enderror
            <input type="text" name="tags" id="" placeholder="Tags" value="{{$listing->tags}}" >
            @error('tags')
                <p>{{$message}}</p>
            @enderror
            <textarea name="description" id="" cols="30" rows="10"  placeholder="Descrição">{{$listing->description}}</textarea>
            @error('description')
                <p>{{$message}}</p>
            @enderror

            <button type="submit">Enviar</button>
        </div>
    </form>
</x-layout>
