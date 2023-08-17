<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Hotel</th>
        <th>Customer</th>
        <th>Day</th>
        <th>Action</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td><a href="/hotels/{{$book->hotel_id}}">{{ $book->hotel_id }}</a></td>
            <td><a href="/customers/{{$book->customer_id}}">{{ $book->customer_id }}</a></td>
            <td>{{ $book->timestamps }}</td>            
            <td>
                <a href="/books/{{$book->id}}/edit">Edit</a>
                <form action="/books/{{ $book->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<input type="button" value="Create" onclick="location='/books/create'" />