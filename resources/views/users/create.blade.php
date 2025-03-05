<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('New User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route("users.store") }}?token=123" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{old("name")}}">
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{old("email")}}">
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div>
                            <label for="cv">CV</label>
                            <input type="file" name="cv" id="cv">
                        </div>
                        <input type="submit" name="" id="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
