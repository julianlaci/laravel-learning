<x-layout>
    <x-setting heading="Manage Posts">
        <table class="table-fixed">
            <thead>
            <tr>
                <th>The post title</th>
                <th>Published</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td><a href="/posts/{{$post->slug}}">{{ $post->title }}</a></td>
                    <td>Active</td>
                    <td>
                        <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                        <form method="POST" action="/admin/posts/{{ $post->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </x-setting>
</x-layout>
