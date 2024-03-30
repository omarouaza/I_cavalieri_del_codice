<x-layout>

    <x-navbar />

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1"> Categoria :{{ $category->name}} </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            
            <x-card
            title="{{ $article->title }}"
            subtitle="{{ $artcile->subtitle }}"
            image="{{ $article->image }}"
            category="{{ $article->name }}"
            data="{{ $article->created_at->format(d/m/Y) }}"
            user="{{ $article->user->name }}"
            url="{{ route('article.show' , compact(article)) }}"
            urlCategory="{{ route('article.byCategory' , ['category' => $article->category->id])}}"
             />
                
            @endforeach
            
        </div>

    </div>