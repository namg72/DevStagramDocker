@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection
@section('contenido')
    
       <div class="md:flex md:justify-center">
                <div class="md:w-4/12">
                    imagen aqui
                </div>
                <div class="md:w-4/12">
                    <form action="">

                        <div class="mb-5">
                            <label id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                                Nombre
                            </label>
                            <input 
                                id="name"
                                type="text"
                                name="name"
                                placeholder="Pon tu nombre "
                                class="border p-3 w-full rounded-lg"
                            />
                        </div>
                        <div class="mb-5">
                            <label id="userName" class="mb-2 block uppercase text-gray-500 font-bold">
                                Nombre de usuario
                            </label>
                            <input 
                                id="userName"
                                type="text"
                                name="userName"
                                placeholder="Pon tu nombre de usuario "
                                class="border p-3 w-full rounded-lg"
                            />
                        </div>
                        <div class="mb-5">
                            <label id="email" class="mb-2 block uppercase text-gray-500 font-bold">
                                email
                            </label>
                            <input 
                                id="email"
                                type="email"
                                name="email"
                                placeholder="Email de registro "
                                class="border p-3 w-full rounded-lg"
                            />
                        </div>
                        <div class="mb-5">
                            <label id="password" class="mb-2 block uppercase text-gray-500 font-bold">
                                Password
                            </label>
                            <input 
                                id="password"
                                type="password"
                                name="password"
                                placeholder="Password"
                                class="border p-3 w-full rounded-lg"
                            />
                        </div>
                        <div class="mb-5">
                            <label id="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                                Repetir Password
                            </label>
                            <input 
                                id="password_confirmation"
                                type="password_confirmation"
                                name="password_confirmation"
                                placeholder="Repite tu password"
                                class="border p-3 w-full rounded-lg"
                            />
                        </div>
                    </form>
                </div>
       </div>

@endsection