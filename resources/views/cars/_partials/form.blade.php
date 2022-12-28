@csrf
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
               for="inline-full-name">
            Carro: 
        </label>
    </div>
    <div class="md:w-3/4">
        <input class="bg-grey-200 appearance-none border border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
               id="inline-full-name" name="name" placeholder="Nome:"  type="text" value="{{ $car->name ?? old('name')}}">
    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
               for="inline-full-name">
            Marca: 
        </label>
    </div>
    <div class="md:w-3/4">
        <input class="bg-grey-200 appearance-none border border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
               id="inline-full-name" type="text" name="brand" placeholder="Marca:" value="{{$car->brand ?? old('brand') }}">
    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4"
               for="inline-full-name">
            Ano: 
        </label>
    </div>
    <div class="md:w-3/4">
        <input class="bg-grey-200 appearance-none border border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
               id="inline-full-name" type="number" name="year" placeholder="Ano:" value="{{$car->year ?? old('year') }}">
    </div>
</div>
 
<div class="md:flex md:items-center ">
 
    <div class="md:w-2/3 ">
        <button class="shadow bg-green-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="submit">
                Enviar
        </button>
    </div>
</div>
                 