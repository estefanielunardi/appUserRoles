<x-app-layout>
    <header class="relative">
        <img class="w-full h-48 object-cover lg:h-72" src="https://picsum.photos/600/400/?random">
    </header>
    <section class="flex flex-col m-10">
        <h1 class="title pb-8 text-4xl">New Role</h1>
    </section>
    <section class="container md:container md:mx-auto p-6 flex justify-center">
        <div class="box-border p-4 bg-white h-128 w-96">
            <form method="POST" action="{{route('storeRole')}}">
                @method('POST')
                @csrf
                <div class="flex flex-col my-4 text-xl">
                    <label for="title" class="antialiased">{{ __('Role Title') }}</label>
                    <input type="text" id="title" class="w-100 border-solid border-2 rounded shadow-md h-10" name="title" required autocomplete="title" autofocus>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-400 antialiased text-black text-2xl mt-4 px-12 py-4 rounded-xl shadow-md">{{ __('Add Role') }}</button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>