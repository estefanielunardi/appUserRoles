<x-app-layout>
    <header class="relative">
        <img class="w-full h-48 object-cover lg:h-72" src="https://picsum.photos/600/400/?random">
        <section class="absolute z-10 top-7 left-10 w-52 w-1/2 lg:top-16 lg:left-32 xl:top-20 xl:left-52">
            <p class="text-center text-2xl pb-1 md:text-3xl lg:text-4xl xl:pb-5 xl:text-5xl bg-pink-200">
                Role App
            </p>
        </section>
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
            <a href="#">
                <img alt="Placeholder" class="rounded-xl rounded-b-none object-fill w-full" src="https://picsum.photos/600/400/?random">
            </a>
            <div class="w-72 h-32 px-4 py-3">
                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                            {{$role->title}}
                        </a>
                    </h1>
                    <p class="text-grey-darker text-sm">
                        <a href='{{ route( "attachRole" , $role->id) }}'>
                            <i class="fas fa-check-double"></i>
                        </a>
                    </p>
                </header>
                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <h3 class="ml-2 text-sm hover:underline text-black">name</h3>
                    </a>
                </footer>
                <div class="flex item-center justify-center">
                    <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
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