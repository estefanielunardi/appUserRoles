<x-app-layout>
    @if (session('message'))
    <div class="text-white px-6 py-4 border-0 relative bg-blue-900">
        <span class="alert alert-success inline-block align-middle mr-8">
            {{ session('message') }}
        </span>
    </div>
    @endif
    <header class="relative">
        <img class="w-full h-48 object-cover lg:h-72" src="https://picsum.photos/600/400/?random">
    </header>

    <article class="flex pl-12 md:justify-start pb-7">
        <form action="{{'/role/create'}}" method="get">
            <button class="bg-blue-400 flex flex-row align-start items-center font-serif text-white text-2xl mt-4 px-3 py-2 w-40 md:w-56  rounded-xl shadow-md" type="submit">
                <svg width="30" height="30" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M8.48486 16.8905L25.4547 17.0491M16.8905 25.4547L17.0491 8.48491L16.8905 25.4547Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="24" height="24" fill="white" transform="translate(0 16.8112) rotate(-44.4644)" />
                        </clipPath>
                    </defs>
                </svg>
                <p class="text-sm text-black pl-2 exo">Add New Role</p>
            </button>
        </form>
    </article>

    <div class="w-full flex flex-wrap justify-center content-start p-6 xl:px-32 2xl:px-56">
        @foreach ($roles as $role)
        <section class="w-72 h-80 m-5 shadow-lg rounded-xl transform duration-500 ease-in-out hover:scale-105">
            <div>
                <img alt="Placeholder" class="rounded-xl rounded-b-none object-fill w-full" src="https://picsum.photos/600/400/?random">
            </div>
            <div class="w-72 h-32 px-4 py-3">
                <header class="flex items-center justify-between leading-tight">
                    <h1 class="text-lg"> Role Title:
                        <h2 class="no-underline text-black">
                            {{$role->title}}
                        </h2>
                    </h1>
                </header>
                <div>
                    <a class="flex items-center justify-between leading-tight p-2 md:p-4" href='{{ route( "attachRole" , $role->id) }}'>
                        <h3 class="ml-2 text-sm text-black">Add role to my User</h3>
                        <i class="fas fa-check-double transform hover:text-blue-500 hover:scale-110"></i>
                    </a>
                </div>
                <div class="flex item-center justify-center">
                    <a href="{{ route('editRole' , $role->id)}}">
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </div>
                    </a>
                    <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                        <form action="{{ route('deleteRole', $role->id)}}" method="POST">
                            @method('DELETE')
                            {{ csrf_field() }}
                            <button type="submit">X</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
    </div>
    {!! $roles->links() !!}
</x-app-layout>