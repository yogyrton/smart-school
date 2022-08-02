@if(!empty($documents)  && count($documents) > 0)
    <section id="documents" class="pt-120 scrollreveal">
        <div class="container">
            <h2 class="accentColor mb-40">Документы</h2>
            <div class="wrapper">
                @foreach($documents as $document)
                    <a target="_blank" rel="noopener" href="{{ route('download', $document->id) }}">
                        <button class="document-button btn-doc text-bold">{{ $document->title }}</button>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif
