<x-admin-layout>

    <div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4 rounded">
        <div class="flex m-2 p-2">
            <a href="{{ route('admin.roles.index') }}"
                class="px-4 py-2 bg-indigo-400 dark:bg-indigo-600 rounded text-white">Back</a>
        </div>

        <div class="mx-auto mt-12 max-w-md rounded bg-gray-100 p-6">
            <form action="{{ route('admin.roles.store') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="name" class="text-xl">Name</label>
                    <input id="name" type="text" name="name"
                        class="black mt-2 w-full appearance-none rounded-md border-2 border-gray-100 px-3 py-3 text-gray-800 focus:border-gray-200 focus:text-gray-500 focus:outline-none" />
                @error('name')
                    <span class="text-sm text-red-400">{{ $message }}</span>
                @enderror
                    </div>
                <button type="submit"
                    class="mt-10 w-full bg-indigo-400 py-3 font-medium uppercase text-white hover:bg-indigo-600 hover:shadow-none focus:outline-none">Create</button>
            </form>
        </div>

    </div>

</x-admin-layout>
