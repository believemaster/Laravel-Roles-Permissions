<x-guest-layout>
    <div class="mt-12 max-w-6xl mx-auto">
        <div class="relative overflow-x-auto shadow-md bg-gray-200 sm:rounded-lg">
            @can('create', App\Models\Post::class)
                <div class="flex justify-end p-2 dark:bg-gray-700">
                    <a href="{{ route('posts.create') }}"
                        class="px-4 py-2 bg-indigo-400 dark:bg-indigo-600 rounded text-white">Add New Post</a>
                </div>
            @endcan
            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                <thead class="text-xs bg-gray-50 uppercase dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="px-6 py-3">Title</th>

                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                            <th scope="row"
                                class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $post->id }}
                            </th>
                            <th scope="row"
                                class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $post->title }}
                            </th>
                            <td class="px-6 py-4 text-right">
                                <div class="flex space-x-2">
                                    @can('update', $post)
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                            class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                                    @endcan
                                    @can('delete', $post)
                                        <form method="post" action="{{ route('posts.destroy', $post->id) }}"
                                            onsubmit="return confirm('Are you sure!');">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="font-medium text-red-600 hover:underline dark:text-red-500">Delete</button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

</x-guest-layout>
