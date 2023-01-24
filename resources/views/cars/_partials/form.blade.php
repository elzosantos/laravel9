@csrf
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Placa do Carro*:
        </label>
    </div>
    <div class="md:w-3/4">
        <input
            class="bg-grey-200 appearance-none border border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" type="text" name="vehicle_tag" placeholder="Placa:" value="">
    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Marca*:
        </label>
    </div>
    <div class="md:w-3/4">
        <select
            class="bg-grey-200 appearance-none border border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" type="text" name="vehicle_brand" placeholder="Marca:" value="">

            <option value="" label="Selecione">Selecione</option>
            <option label="ACURA" value="95">ACURA</option>
            <option label="AGRALE" value="3">AGRALE</option>
            <option label="ALFA ROMEO" value="4">ALFA ROMEO</option>
            <option label="AM GEN" value="1">AM GEN</option>
            <option label="AMERICAR" value="97">AMERICAR</option>
            <option label="ASIA MOTORS" value="5">ASIA MOTORS</option>
            <option label="ASTON MARTIN" value="81">ASTON MARTIN</option>
            <option label="AUDI" value="6">AUDI</option>
            <option label="BABY" value="93">BABY</option>
            <option label="BENTLEY" value="99">BENTLEY</option>
            <option label="BMW" value="7">BMW</option>
            <option label="BRM" value="8">BRM</option>
        </select>
    </div>
</div>


<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Modelo*:
        </label>
    </div>
    <div class="md:w-3/4">
        <select disabled
            class="bg-grey-200 appearance-none border border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" type="text" name="vehicle_model" placeholder="Modelo:" value="">
            <option value="" label="Selecione">Selecione</option>
        </select>
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Ano do Modelo*:
        </label>
    </div>
    <div class="md:w-3/4">

        <select
            class="bg-grey-200 appearance-none border border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" type="text" name="vehicle_year" placeholder="Ano:" value="">

            <option value="" label="Selecione">Selecione</option>
            <option name="2023" label="2023" value="2023">2023</option>
            <option name="2022" label="2022" value="2022">2022</option>
            <option name="2021" label="2021" value="2021">2021</option>
            <option name="2020" label="2020" value="2020">2020</option>
            <option name="2019" label="2019" value="2019">2019</option>
            <option name="2018" label="2018" value="2018">2018</option>
            <option name="2017" label="2017" value="2017">2017</option>
            <option name="2016" label="2016" value="2016">2016</option>
            <option name="2015" label="2015" value="2015">2015</option>
            <option name="2014" label="2014" value="2014">2014</option>
            <option name="2013" label="2013" value="2013">2013</option>
            <option name="2012" label="2012" value="2012">2012</option>
            <option name="2011" label="2011" value="2011">2011</option>
            <option name="2010" label="2010" value="2010">2010</option>
            <option name="2009" label="2009" value="2009">2009</option>
            <option name="2008" label="2008" value="2008">2008</option>
            <option name="2007" label="2007" value="2007">2007</option>
            <option name="2006" label="2006" value="2006">2006</option>
            <option name="2005" label="2005" value="2005">2005</option>
            <option name="2004" label="2004" value="2004">2004</option>
            <option name="2003" label="2003" value="2003">2003</option>
            <option name="2002" label="2002" value="2002">2002</option>
            <option name="2001" label="2001" value="2001">2001</option>
            <option name="2000" label="2000" value="2000">2000</option>
            <option name="1999" label="1999" value="1999">1999</option>
            <option name="1998" label="1998" value="1998">1998</option>
            <option name="1997" label="1997" value="1997">1997</option>
            <option name="1996" label="1996" value="1996">1996</option>
            <option name="1995" label="1995" value="1995">1995</option>
            <option name="1994" label="1994" value="1994">1994</option>
            <option name="1993" label="1993" value="1993">1993</option>
            <option name="1992" label="1992" value="1992">1992</option>
            <option name="1991" label="1991" value="1991">1991</option>
            <option name="1990" label="1990" value="1990">1990</option>
            <option name="1989" label="1989" value="1989">1989</option>
            <option name="1988" label="1988" value="1988">1988</option>
            <option name="1987" label="1987" value="1987">1987</option>
            <option name="1986" label="1986" value="1986">1986</option>
            <option name="1985" label="1985" value="1985">1985</option>
            <option name="1984" label="1984" value="1984">1984</option>
            <option name="1983" label="1983" value="1983">1983</option>
            <option name="1982" label="1982" value="1982">1982</option>
            <option name="1981" label="1981" value="1981">1981</option>
            <option name="1980" label="1980" value="1980">1980</option>
            <option name="1975" label="1975" value="1975">1975</option>
            <option name="1970" label="1970" value="1970">1970</option>
            <option name="1965" label="1965" value="1965">1965</option>
            <option name="1960" label="1960" value="1960">1960</option>
            <option name="1955" label="1955" value="1955">1955</option>
            <option name="1950 ou anterior" label="1950 ou anterior" value="1950">1950 ou anterior</option>
        </select>
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Versão*:
        </label>
    </div>
    <div class="md:w-3/4">
        <select disabled
            class="bg-grey-200 appearance-none border border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" type="text" name="vehicle_version" placeholder="Versão:" value="">
            <option value="" label="Selecione">Selecione</option>
        </select>
    </div>
</div>


<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Cambio:
        </label>
    </div>
    <div class="md:w-3/4">
 
        <div class="p-4">
            <table class="table-fixed">
                <tbody>
                    <tr>
                        <td class="border px-4 py-2"><input type="radio" name="vehicle_drive" value=" "> Manual</td>
                        <td class="border px-4 py-2"><input type="radio" name="vehicle_drive" value=" "> Automático</td>
                        <td class="border px-4 py-2"><input type="radio" name="vehicle_drive" value=" "> Semi-automático</td> 
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Combustível:
        </label>
    </div>
    <div class="md:w-3/4">
        <select
            class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded  focus:outline-none focus:bg-white focus:border-grey"
            id="inline-full-name" type="text" name="vehicle_gas" placeholder="Versão:" value="">
            <option value="" label="Selecione">Selecione</option>
            <option label="Gasolina" value="1">Gasolina</option>
            <option label="Álcool" value="2">Álcool</option>
            <option label="Flex" value="3">Flex</option>
            <option label="Diesel" value="5">Diesel</option>
            <option label="Híbrido" value="6">Híbrido</option>
            <option label="Elétrico" value="7">Elétrico</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
            </svg>
        </div>
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Direção:
        </label>
    </div>
    <div class="md:w-3/4">
     
        <div class="p-4">
            <table class="table-fixed">
                <tbody>
                    <tr>
                        <td class="border px-4 py-2"><input type="radio" name="vehicle_drive" value=" "> Hidráulica</td>
                        <td class="border px-4 py-2"><input type="radio" name="vehicle_drive" value=" "> Elétrica</td>
                        <td class="border px-4 py-2"><input type="radio" name="vehicle_drive" value=" "> Mecânica</td>
                        <td class="border px-4 py-2"><input type="radio" name="vehicle_drive" value=" "> Assistida</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Potencia do Motor:
        </label>
    </div>
    <div class="md:w-3/4">
        <select
            class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded  focus:outline-none focus:bg-white focus:border-grey"
            id="inline-full-name" type="text" name="vehicle_potential" placeholder="Potência do Motor:"
            value="">
            <option value="" label="Selecione">Selecione</option>
            <option name="1.0" label="1.0" value="1">1.0</option>
            <option name="1.2" label="1.2" value="2">1.2</option>
            <option name="1.3" label="1.3" value="3">1.3</option>
            <option name="1.4" label="1.4" value="4">1.4</option>
            <option name="1.5" label="1.5" value="5">1.5</option>
            <option name="1.6" label="1.6" value="6">1.6</option>
            <option name="1.7" label="1.7" value="7">1.7</option>
            <option name="1.8" label="1.8" value="8">1.8</option>
            <option name="1.9" label="1.9" value="9">1.9</option>
            <option name="2.0 - 2.9" label="2.0 - 2.9" value="10">2.0 - 2.9</option>
            <option name="3.0 - 3.9" label="3.0 - 3.9" value="11">3.0 - 3.9</option>
            <option name="4.0 ou mais" label="4.0 ou mais" value="12">4.0 ou mais</option>
        </select>
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Tipo de Veículo:
        </label>
    </div>
    <div class="md:w-3/4">
        <select
            class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded  focus:outline-none focus:bg-white focus:border-grey"
            id="inline-full-name" type="text" name="vehicle_potential" placeholder="Potência do Motor:"
            value="">
            <option value="" label="Selecione">Selecione</option>
            <option name="1" label="Buggy" value="1">Buggy</option>
            <option name="1" label="Caminhão Leve" value="2">Caminhão Leve</option>
            <option name="1" label="Conversível" value="3">Conversível</option>
            <option name="1" label="Hatch" value="4">Hatch</option>
            <option name="1" label="Pick-Up" value="5">Pick-Up</option>
            <option name="1" label="Sedã" value="6">Sedã</option>
            <option name="1" label="SUV" value="7">SUV</option>
            <option name="1" label="Van/Utilitário" value="8">Van/Utilitário</option>
        </select>
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Quilometragem:
        </label>
    </div>
    <div class="md:w-3/4">
        <input
            class="bg-grey-200 appearance-none border border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
            id="inline-full-name" type="number" name="quilometre" placeholder="Quilometragem:" value="F">
    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Portas:
        </label>
    </div>
    <div class="md:w-3/4">

        <div class="p-4">
            <table class="table-fixed">

                <tbody>
                    <tr>
                        <td class="border px-4 py-2"><input type="radio" name="vehicle_door" value=" "> 2
                            portas</td>
                        <td class="border px-4 py-2"><input type="radio" name="vehicle_door" value=" "> 4
                            portas</td>
                    </tr>
                </tbody>
            </table>
        </div>



    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Final da Placa:
        </label>
    </div>
    <div class="md:w-3/4">
        <select
            class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded  focus:outline-none focus:bg-white focus:border-grey"
            id="inline-full-name" type="text" name="vehicle_tagend" placeholder="Potência do Motor:"
            value="">
            <option value="" label="Selecione">Selecione</option>
            <option name="1" label="0" value="1">0</option>
            <option name="1" label="1" value="2">1</option>
            <option name="1" label="2" value="3">2</option>
            <option name="1" label="3" value="4">3</option>
            <option name="1" label="4" value="5">4</option>
            <option name="1" label="5" value="6">5</option>
            <option name="1" label="6" value="7">6</option>
            <option name="1" label="7" value="8">7</option>
            <option name="1" label="8" value="8">8</option>
            <option name="1" label="9" value="8">9</option>
        </select>
    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Opcionais:
        </label>
    </div>
    <div class="md:w-3/4">

        <div class="p-3">
            <table class="table-fixed">

                <tbody>
                    <tr>
                        <td class="border px-4 py-2"><input type="checkbox" name="vehicle_features" value=" ">
                            Alarme</td>
                        <td class="border px-4 py-2"><input type="checkbox" name="vehicle_features" value=" ">
                            Ar Condicionado</td>
                        <td class="border px-4 py-2"><input type="checkbox" name="vehicle_features" value=" ">
                            Air Bag</td>
                    </tr>

                    <tr>
                        <td class="border px-4 py-2"><input type="checkbox" name="vehicle_features" value=" ">
                            Vidro Elétrico</td>
                        <td class="border px-4 py-2"><input type="checkbox" name="vehicle_features" value=" ">
                            Sensor de ré</td>
                        <td class="border px-4 py-2"><input type="checkbox" name="vehicle_features" value=" ">
                            Trava Elétrica</td>
                    </tr>

                    <tr>
                        <td class="border px-4 py-2"><input type="checkbox" name="vehicle_features" value=" ">
                            Camera de ré</td>
                        <td class="border px-4 py-2"><input type="checkbox" name="vehicle_features" value=" ">
                            Blindado</td>
                        <td class="border px-4 py-2"><input type="checkbox" name="vehicle_features" value=" ">
                            Insulfilm</td>
                    </tr>

                </tbody>
            </table>
        </div>







    </div>
</div>
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/4">
        <label class="block text-gray-500 font-regular md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Cor:
        </label>
    </div>
    <div class="md:w-3/4">
        <select
            class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded  focus:outline-none focus:bg-white focus:border-grey"
            id="inline-full-name" type="text" name="vehicle_color" placeholder="Potência do Motor:"
            value="">
            <option value="" label="Selecione">Selecione</option>
            <option name="Preto" label="Preto" value="1">Preto</option>
            <option name="Branco" label="Branco" value="2">Branco</option>
            <option name="Prata" label="Prata" value="3">Prata</option>
            <option name="Vermelho" label="Vermelho" value="4">Vermelho</option>
            <option name="Cinza" label="Cinza" value="5">Cinza</option>
            <option name="Azul" label="Azul" value="6">Azul</option>
            <option name="Amarelo" label="Amarelo" value="7">Amarelo</option>
            <option name="Verde" label="Verde" value="8">Verde</option>
            <option name="Laranja" label="Laranja" value="9">Laranja</option>
            <option name="Outra" label="Outra" value="10">Outra</option>
        </select>
    </div>
</div>




<div class="md:flex md:items-center ">

    <div class="md:w-2/3 ">
        <button
            class="shadow bg-green-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
            type="submit">
            Enviar
        </button>
    </div>
</div>
