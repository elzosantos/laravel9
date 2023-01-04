@csrf
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Razão Social:
        </label>
    </div>
    <div class="md:w-3/4">
        <input
            class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" name="razaoSocial" placeholder="Razão Social:" type="text"
            value="{{ $partners->razaoSocial ?? old('razaoSocial') }}">
    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            CNPJ:
        </label>
    </div>
    <div class="md:w-3/4">
        <input
            class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" type="text" name="CNPJ" placeholder="CNPJ:"
            value="{{ $partners->CNPJ ?? old('CNPJ') }}">
    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Descrição:
        </label>
    </div>
    <div class="md:w-3/4">
        <input
            class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" type="textarea"  name="description" placeholder="Descrição:"
            value="{{ $partners->description ?? old('description') }}">
    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Horário de funcionamento:
        </label>
    </div>
    <div class="md:w-3/4">
        <input
            class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" type="text" name="opening_hours" placeholder=""
            value="{{ $partners->opening_hours ?? old('opening_hours') }}">
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
            id="inline-username" type="file" name="">
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
