<x-layout>
    <div class="image">
        <img src="{{ $listing->logo ? asset('storage/' . $listing->logo ) : asset('assets/images/cover.jpg') }}" alt="">
    </div>
    <h1> {{$listing->title}} </h1>
    <p> {{$listing->description}} </p>
    <h2> {{$listing->company}} </h2>
    <a href="malito:{{$listing->email}}">{{$listing->email}}</a>
    <br>
    <a href="malito:{{$listing->website}}">Visitar fonte</a>
    <br>
    @auth
        <div class="optios">
            <a class="edit" href="/listings/{{$listing->id}}/edit">Editar</a>
            <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete">Eleminar</button>
            </form>
        </div>
    @endauth
    <a href="/">Voltar</a>
    <x-listing-tags :tagsCsv="$listing->tags" />
</x-layout>
