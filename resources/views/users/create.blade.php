<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/users" method="post">

                        @csrf
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name">
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email">
                        </div>

                        <div>
                            <label for="password">Password</label>
                            <input type="text" name="password" id="password">
                        </div>

                        <input type="submit" name="" id="">

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
