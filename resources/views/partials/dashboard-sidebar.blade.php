<div class="min-h-screen md:block border-gray-800 border-r-2 mr-2 -mt-8 md:min-w-max md:pt-8 md:-mb-8">
    @can('admin')
        <li class="block my-2">
            <a href="{{ route('comments') }}" 
                class="p-3 font-bold hover:text-green-500">COMMENTS</a>
        </li>
        <li class="block my-2">
            <a  href="{{ route('posts') }}"
                class="p-3 font-bold hover:text-green-500">POSTS</a>
        </li>
        <li class="block my-2">
            <a  href="{{ route('tags') }}"
                class="p-3 font-bold hover:text-green-500">TAGS</a>
        </li>
        <li class="block my-2">
            <a  href="{{ route('users') }}"
                class="p-3 font-bold hover:text-green-500">USERS</a>
        </li>
    @endcan
</div>