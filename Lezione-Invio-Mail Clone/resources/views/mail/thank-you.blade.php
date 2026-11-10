<x-layout titolo="Grazie per averci contattato">
    <main class="container">
        <section class="row">
            <article class="col-12">
                @if (session('input'))
                <h1>
                    {{ session('input') }}
                </h1>
                @endif
            </article>
        </section>
    </main>
</x-layout>