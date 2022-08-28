<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Category</th>
                <th>Tag</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $index => $item )
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->category }}</td>
                    <td>
                        @foreach (json_decode($item->tag) as $item2)
                            {{ $item2 }},
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
