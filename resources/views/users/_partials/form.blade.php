@csrf
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Nome:
        </label>
    </div>
    <div class="md:w-3/4">
        <input
            class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" name="name" placeholder="Nome:" type="text"
            value="{{ $users->name ?? old('name') }}">
    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            E-mail:
        </label>
    </div>
    <div class="md:w-3/4">
        <input
            class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" type="email" name="email" placeholder="E-mail:"
            value="{{ $users->email ?? old('name') }}">
    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-grey font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
            Senha:
        </label>
    </div>
    <div class="md:w-3/4">
        <input
            class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-username" type="password" name="password" placeholder="******************">
    </div>

</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-grey font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
            Imagem:
        </label>
    </div>

    <div class="md:w-3/4">
        <input
            class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-username" type="file" name="image">
    </div>
</div>
<div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
        <button
            class="shadow bg-green-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
            type="submit">
            Enviar
        </button>
    </div>
</div>
