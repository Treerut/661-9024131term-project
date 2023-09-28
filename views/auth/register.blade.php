<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <!-- component -->
<div class="font-sans">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                    Register
                </label>
                <form method="#" action="#" class="mt-10">
                                    
                    <div>
                        <x-text-input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="name" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
        
                    <div class="mt-7">
                        <x-text-input id="email" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />                                         
                    </div>

                    <div class="mt-7">    
                        <x-text-input id="password" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />                               
                    </div>

                    <div class="mt-7">
                        <x-text-input id="password_confirmation" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"
                                            type="password" placeholder="Confirm Password"
                                            name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />           
                    </div>

                    
        
                    <div class="mt-7">
                        <button class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            {{ __('Register Now') }}
                        </button>
                    </div>
        
                    <!--- <div class="flex mt-7 items-center text-center">
                        <hr class="border-gray-300 border-1 w-full rounded-md">
                        <label class="block font-medium text-sm text-gray-600 w-full">
                            Registrate con
                        </label>
                        <hr class="border-gray-300 border-1 w-full rounded-md">
                    </div>
        
                    <div class="flex mt-7 justify-center w-full">
                        <button class="mr-5 bg-blue-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            
                            Facebook
                        </button>
        
                        <button class="bg-red-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            
                            Google
                        </button>
                    </div> --->
        
                    <div class="mt-7">
                        <div class="flex justify-center items-center">
                            <label class="mr-2" >Already registered?</label>
                            <a href="{{ route('login') }}" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                {{ __('Click Here') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        
    </form>
</x-guest-layout>
