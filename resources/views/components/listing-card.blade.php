@props(['listing'])
<a href="/listings/{{$listing['id']}}" class="box">
    <div class="image">
    <img src="{{ $listing->logo ? asset('storage/' . $listing->logo ) : asset('assets/images/cover.jpg') }}" alt="">
    </div>

    <h2> {{$listing->title}} </h2>
    <p> {{$listing->description}} </p>
    <p> {{$listing->location}} </p>
</a>
