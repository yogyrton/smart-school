<section id="documents" class="mb-160 scrollreveal">
    <div class="container">
        <h2 class="accentColor mb-40">Документы</h2>
        <div class="wrapper">
            <a target="_blank" href="/">
                <button class="document-button btn-doc text-bold">Электронный журнал</button>
            </a>
            @foreach($documents as $document)
                <a target="_blank" href="{{ route('download', $document->id) }}">
                    <button class="document-button btn-doc text-bold">{{ $document->title }}</button>
                </a>
            @endforeach
        </div>
    </div>
</section>
