@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection
@section('contenido')
    
       <div class="md:flex md:justify-center md:gap-10 md:items-center">
                <div class="md:w-6/12  p-5">
                     <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro usuario">
                </div>
                <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg ">
                    <form action="/register" method="POST" novalidate>
                        @csrf {{-- Directiva que crea un campo oculto para evitar ataques de CSRF sin ella no funicona nos daria error 419 --}}

                        <div class="mb-5">
                            <label id="name" class="mb-2 block uppercase text-gray-500 fo nt-bold">
                                Nombre
                            </label>
                            <input 
                                id="name"
                                type="text"
                                name="name"
                                placeholder="Pon tu nombre "
                                  class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                              value="{{old('name')}}"
                            />

                                @error('name')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"  >{{$message}}
                                @enderror
                        </div>
                        <div class="mb-5">
                            <label id="userName" class="mb-2 block uppercase text-gray-500 font-bold">
                                Nombre de usuario
                            </label>
                            <input 
                                id="userName"
                                type="text"
                                name="userName"
                                 class="border p-3 w-full rounded-lg  @error('name') border-red-500 @enderror"
                                value="{{old('userName')}}"
                            />
                            @error('userName')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"  >{{$message}}
                        @enderror
                        </div>
                        <div class="mb-5">
                            <label id="email" class="mb-2 block uppercase text-gray-500 font-bold">
                                email
                            </label>
                            <input 
                                id="email"
                                type="email"
                                name="email"
                                  class="border p-3 w-full rounded-lg  @error('name') border-red-500 @enderror"
                                value="{{old('email')}}"
                            />
                            @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"  >{{$message}}
                        @enderror
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
                                class="border p-3 w-full rounded-lg  @error('name') border-red-500 @enderror"
                                value="{{old('password')}}"
                            />
                            @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"  >{{$message}}
                        @enderror
                        </div>
                        <div class="mb-5">
                            <label id="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                                Repetir Password
                            </label>
                            {{-- El campo de repetir campo tiene que tener el nombre password_confirmation para que el paguete de
                                validate lo pueeda validar ni no daria errror --}}
                            <input 
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                placeholder="Repite tu password"
                                class="border p-3 w-full rounded-lg"
                            />
                        </div>
                    
                        <input 
                            
                                type="submit"
                                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg "
                            />
                    </form>
                </div>
       </div>

@endsection