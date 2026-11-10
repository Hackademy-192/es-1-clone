<x-layout titolo="Lezione Invio Mail">
    @if (session('input'))
        <div class="alert alert-success">
            {{ session('input') }}
        </div>
    @endif
</x-layout>