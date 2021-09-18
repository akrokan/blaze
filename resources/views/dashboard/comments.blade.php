<x-app-layout>

<table class="md:mx-auto md:max-w-screen-sm table-fixed bg-gray-800 border-t-4 border-gray-700 rounded-sm shadow-lg">
    <thead>
        <tr class="uppercase text-left">
            <th class="px-2 py-1 w-10">ID</th>
            <th class="px-2 py-1 w-20">User</th>
            <th class="px-2 py-1 truncate">Content</th>
            <th class="px-2 py-2 w-20">Action</th>
        </tr>
    </thead>
    @foreach ($comments as $comment)
        <tbody>
            <tr>
                <td class="px-2 py-1">{{ $comment->id }}</td>
                <td class="px-2 py-1">{{ $comment->user->username }}</td>
                <td class="px-2 py-1">{{ $comment->content }}</td>
                <td class="px-2 py-1">
                    <a href="{{ url('/dashboard/comment/destroy/' .$comment->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </a>             
                </td>
            </tr>
        </tbody>
    @endforeach
</table>

</x-app-layout>