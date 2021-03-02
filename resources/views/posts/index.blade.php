<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>S.No.</th>
            <th>User</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->description }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>S.No.</th>
            <th>User</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </tfoot>
</table>

<div>

    {{ $posts->links() }}
</div>
