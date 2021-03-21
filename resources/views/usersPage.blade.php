<x-app-layout>
    <header class="relative">
        <img class="w-full h-48 object-cover lg:h-72" src="https://picsum.photos/600/400/?random">
    </header>
    <div class="overflow-x-auto">
        <div class="bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">User</th>
                                <th class="py-3 px-6 text-center">Roles</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-lg font-light">
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
                                    <a class="text-red-600" href="{{ route('detachRole', $role->id)}}">X</a>
                                    </span>
                                    @endforeach
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