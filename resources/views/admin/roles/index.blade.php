<x-admin-layout>

    <div class="mt-12 max-w-6xl mx-auto">
        <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.roles.create') }}"
                class="px-4 py-2 bg-indigo-400 dark:bg-indigo-600 rounded text-white">Add New Role</a>
        </div>
        <div class="relative overflow-x-auto shadow-md bg-gray-200 sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                <thead class="text-xs bg-gray-50 uppercase dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Permissions</th>

                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                            <th scope="row"
                                class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $role->id }}
                            </th>
                            <th scope="row"
                                class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $role->name }}
                            </th>
                            <th scope="row"
                                class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    @forelse ($role->permissions as $rp)
                                    <span class="m-1 p-1 bg-indigo-300 rounded">
                                        {{ $rp->name }}
                                    </span>
                                    @empty
                                        <span class="text-sm text-gray-300">
                                            No Permissions
                                        </span>
                                    @endforelse
                                </th>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.roles.edit', $role->id) }}"
                                            class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                                        <form method="post" action="{{ route('admin.roles.destroy', $role->id) }}"
                                            onsubmit="return confirm('Are you sure!');">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="font-medium text-red-600 hover:underline dark:text-red-500">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </x-admin-layout>
