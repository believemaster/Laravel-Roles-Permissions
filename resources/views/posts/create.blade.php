<x-guest-layout>

    <form action="{{ route('posts.store') }}" class="dark:text-white" method="post">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title"
                id="title"class="black mt-2 w-full appearance-none rounded-md border-2 border-gray-100 px-3 py-3 text-gray-800 focus:border-gray-200 focus:text-gray-500 focus:outline-none" />
            @error('name')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror

            <label for="title">Body</label>
            <input type="text" name="body"
                id="body"class="black mt-2 w-full appearance-none rounded-md border-2 border-gray-100 px-3 py-3 text-gray-800 focus:border-gray-200 focus:text-gray-500 focus:outline-none" />
            @error('name')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"
            class="mt-10 rounded w-full bg-indigo-400 py-3 font-medium uppercase text-white hover:bg-indigo-600 hover:shadow-none focus:outline-none">Create
            Post</button>
    </form>
</x-guest-layout>
