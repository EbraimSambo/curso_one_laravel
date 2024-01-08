<x-layout>
    <section id="showpost" class="sect">
        @include('partials._hero')
        <x-container class="grid">
            @unless(count($listings) == 0)
            @foreach($listings as $listing)
            <x-listing-card :listing="$listing" />
            @endforeach
        </x-container>
        <div class="pagination">
            {{ $listings->links() }}
        </div>
        @else
            <p>Não existe Publicação</p>
        @endunless
    </section>
</x-layout>


