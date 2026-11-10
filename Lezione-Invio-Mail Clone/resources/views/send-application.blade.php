<x-layout titolo="Lavora con noi">
    
    <main class="container my-5">
        <section class="row justify-content-center">
            <article class="col-12 col-md-6">
                    @if (session('input'))
                        <div class="alert alert-success">
                            {{ session('input') }}
                        </div>
                    @endif
                <h2 class="text-center">Inviaci i tuoi dati</h2>
                <form method="POST" action={{route("send_email")}}>
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Nome Utente</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Lettera di presentazione</label>
                        <textarea id="description" class="form-control" rows="5" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </article>
        </section>
    </main>
    
</x-layout>