<x-app-layout>
    <header class="relative">
        <img class="w-full h-48 object-cover lg:h-72" src="https://picsum.photos/600/400/?random">
        <section class="absolute z-10 top-7 left-10 w-52 w-1/2 lg:top-16 lg:left-32 xl:top-20 xl:left-52">
            <!-- <p class="text-center text-2xl pb-1 md:text-3xl lg:text-4xl xl:pb-5 xl:text-5xl bg-pink-200">
                Role App
            </p> -->
        </section>
    </header>

    <!-- component -->
    <div class="overflow-x-auto">
        <div class="bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">User</th>
                                <th class="py-3 px-6 text-center">Roles</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($users as $user)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $user->name }}<span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    @foreach ($user->roles as $role)
                                    <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">
                                    {{$role->title}}
                                    <a class="text-red-600" href="{{ route('deleteRole', $role->id)}}">X</a>
                                    </span>

                                    @endforeach
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                    </div>
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