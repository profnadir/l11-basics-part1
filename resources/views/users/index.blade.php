<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="/users/create">New</a>
                    <table class="border-collapse border table-auto">
                        <thead>
                            <tr>
                                <th class="border">ID</th>
                                <th class="border">Name</th>
                                <th class="border">Email</th>
                                <th class="border">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="border">{{ $user->id }}</td>
                                    <td class="border">{{ $user->name }}</td>
                                    <td class="border">{{ $user->email }}</td>
                                    <td class="border">
                                        <a href="{{ route("users.edit",$user) }}">Modifier</a> 
                                        <form action="{{ route("users.destroy",$user) }}" method="post">
                                            @csrf
                                            @method("delete")
                                            <input type="submit" value="Supprimer">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
