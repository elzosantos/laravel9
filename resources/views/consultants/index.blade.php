@extends('layouts.app')

@section('title', '')

@section('content')

    <div class="flex flex-col">


        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                    Consultores na sua região
                </div>
                <div class="p-3  w-1/2">

                    <form action="#" method="GET">

                        <div class="flex items-center border-b border-b-1 border-info py-2">
                            <input
                                class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 
                                leading-tight focus:outline-none"
                                type="text" placeholder="Pesquisar" aria-label="Pesquisar" name="search">
                            <button
                                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 
                                text-sm border-4 text-white py-1 px-2 rounded"
                                type="submit">
                                Pesquisar
                            </button>

                        </div>
                    </form>
                </div>

                <!--Profile Tabs-->
                <div
                    class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
                    <!--Top user 1-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">João Silva</h3>
                                <p class="mt-2 font-sans font-light text-grey-700">Brasília - DF, consultor experiênte!</p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>34</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>4.2</h2>
                                    <span>Nota</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--Top user 2-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">Pedro Gonçalves</h3>
                                <p class="mt-2 font-sans font-light text-grey-dark">Fortaleza - CE, confiança e trabalho!
                                </p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>12</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>5.0</h2>
                                    <span>Nota</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--Top user 3-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">Durval Souza</h3>
                                <p class="mt-2 font-sans font-light text-grey-dark">Curitiba - PR, procedencia e rapidez!
                                </p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>180</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>4,8</h2>
                                    <span>Notas</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--/Profile Tabs-->
                <!--Profile Tabs-->
                <div
                    class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
                    <!--Top user 1-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">João Silva</h3>
                                <p class="mt-2 font-sans font-light text-grey-700">Brasília - DF, consultor experiênte!</p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>34</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>4.2</h2>
                                    <span>Nota</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--Top user 2-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">Pedro Gonçalves</h3>
                                <p class="mt-2 font-sans font-light text-grey-dark">Fortaleza - CE, confiança e trabalho!
                                </p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>12</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>5.0</h2>
                                    <span>Nota</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--Top user 3-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">Durval Souza</h3>
                                <p class="mt-2 font-sans font-light text-grey-dark">Curitiba - PR, procedencia e rapidez!
                                </p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>180</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>4,8</h2>
                                    <span>Notas</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--/Profile Tabs-->
                <!--Profile Tabs-->
                <div
                    class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
                    <!--Top user 1-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">João Silva</h3>
                                <p class="mt-2 font-sans font-light text-grey-700">Brasília - DF, consultor experiênte!</p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>34</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>4.2</h2>
                                    <span>Nota</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--Top user 2-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">Pedro Gonçalves</h3>
                                <p class="mt-2 font-sans font-light text-grey-dark">Fortaleza - CE, confiança e trabalho!
                                </p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>12</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>5.0</h2>
                                    <span>Nota</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--Top user 3-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">Durval Souza</h3>
                                <p class="mt-2 font-sans font-light text-grey-dark">Curitiba - PR, procedencia e rapidez!
                                </p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>180</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>4,8</h2>
                                    <span>Notas</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--/Profile Tabs-->
                <!--Profile Tabs-->
                <div
                    class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
                    <!--Top user 1-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">João Silva</h3>
                                <p class="mt-2 font-sans font-light text-grey-700">Brasília - DF, consultor experiênte!</p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>34</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>4.2</h2>
                                    <span>Nota</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--Top user 2-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">Pedro Gonçalves</h3>
                                <p class="mt-2 font-sans font-light text-grey-dark">Fortaleza - CE, confiança e trabalho!
                                </p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>12</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>5.0</h2>
                                    <span>Nota</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--Top user 3-->
                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                        <a href="#">
                            <img src="./images/consultants/carsearch.jpg" alt="" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="./images/consultants/consultant.png" alt=""
                                    class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans">Durval Souza</h3>
                                <p class="mt-2 font-sans font-light text-grey-dark">Curitiba - PR, procedencia e rapidez!
                                </p>
                            </div>
                            <div class="flex justify-center pb-3 text-grey-dark">
                                <div class="text-center mr-3 border-r pr-3">
                                    <h2>180</h2>
                                    <span>Avaliações</span>
                                </div>
                                <div class="text-center">
                                    <h2>4,8</h2>
                                    <span>Notas</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--/Profile Tabs-->
            </div>
        </div>
    </div>
@endsection
