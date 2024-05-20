@extends('components.layout')

@section('title')
    clientes
@endsection

@section('contenido')
<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="w-full">


        <div class="">
            <div class="flex overflow-x-auto shadow-md sm:rounded-lg mt-16 w-2/3 m-auto bg-gray-900 pl-15 mb-16">
                <div
                    class=" w-5/6 m-auto flex items-center justify-center  space-y-4 md:space-y-0 pb-4 pt-4 bg-gray-900 text-center mr-10">
                    <h1 class="text-center font-semibold text-3xl w-4/5 m-auto text-blue-500">Clientes</h1>

                </div>
            </div>
            <table class="w-4/5 m-auto text-sm text-left rtl:text-right bg-gray-100 text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-blue-500 uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Cedula
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Apellido
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Direccion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Correo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha de Nacimiento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>




                    @foreach ($cliente as $item)
                        <tr id=""
                            class="text-black bg-gray-100 border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-800 hover:text-white dark:text-white">
                            <td class="px-6 py-4">
                                {{ $item->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->nombre }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->apellido }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->telefono }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->fecha_nacimiento }}
                            </td>
                            <td class="flex px-6 py-4">
                                <a href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Actualizar</a>

                                <a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar</a>




                            </td>

                        </tr>
                    @endforeach




                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection
