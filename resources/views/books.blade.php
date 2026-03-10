<h1>Books</h1>
<ul>
@foreach($books as $book)
    <li>{{ $book->title }} by {{ $book->author->name }} - {{ $book->published_date }}</li>
@endforeach
</ul>