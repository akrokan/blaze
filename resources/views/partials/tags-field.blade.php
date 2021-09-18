<x-label>Tags field</x-label>
<div class="flex flex-row flex-wrap text-sm">
    @foreach ($tags ?? '' as $tag)
        <a href="{{ url('/posts/tag/' .$tag->name) }}"
            class="mr-2 my-1 px-2 py-1 text-gray-100 rounded bg-gray-600 hover:bg-gray-500">
            {{ $tag->name }}
        </a>
    @endforeach
</div>