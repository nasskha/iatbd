<div class="sm:p-8 bg-white shadow sm:rounded-lg w-full mt-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Voeg je huisdier toe!') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __("Voeg informatie over je huisdier toe") }}
        </p>
    </header>


    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('pets.store') }}" class="space-y-6"
          enctype="multipart/form-data">
        @csrf


        <div class="sm:p-8 mx-auto sm:px-6 lg:px-8 grid md:grid-cols-2 gap-4 w-full">

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg w-full space-y-6">
                <div>
                    <x-input-label for="name" :value="__('Naam *')"/>
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                  :value="old('name')" required
                                  autofocus/>
                    <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                </div>

                <div>
                    <label for="type">Soort dier</label>
                    <select name="type" id="type" class="mt-1 block w-full rounded-md border-gray-300" required>
                        <option value="other" {{ old('type') == 'other' ? 'selected' : '' }}>Anders</option>
                        <option value="dog" {{ old('type') == 'dog' ? 'selected' : '' }}>Hond</option>
                        <option value="cat" {{ old('type') == 'cat' ? 'selected' : '' }}>Kat</option>
                        <option value="bird" {{ old('type') == 'bird' ? 'selected' : '' }}>Vogel</option>
                        <option value="fish" {{ old('type') == 'fish' ? 'selected' : '' }}>Vis</option>
                        <option value="reptile" {{ old('type') == 'reptile' ? 'selected' : '' }}>Reptiel
                        </option>
                        <option value="hamster" {{ old('type') == 'hamster' ? 'selected' : '' }}>Hamster
                        </option>
                        <option value="insect" {{ old('type') == 'insect' ? 'selected' : '' }}>Insect</option>
                    </select>
                    <x-input-error class="mt-2" :messages="$errors->get('type')"/>
                </div>

                <div>
                    <x-input-label for="breed" :value="__('Ras')"/>
                    <x-text-input id="breed" name="breed" type="text" class="mt-1 block w-full"
                                  :value="old('breed')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('breed')"/>
                </div>

                <div>
                    <x-input-label for="age" :value="__('Leeftijd')"/>
                    <x-text-input id="age" name="age" type="number" class="mt-1 block w-full"
                                  :value="old('age')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('age')"/>
                </div>

                <div>
                    <x-input-label for="picture" :value="__('Foto')"/>
                    <x-text-input id="picture" name="picture" type="file" class="mt-1 block w-full"
                                  autofocus autocomplete="picture"/>
                    <x-input-error class="mt-2" :messages="$errors->get('picture')"/>
                </div>

            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg w-full space-y-6">
                <div>
                    <label for="description">{{__('Beschrijving')}}</label>

                    <textarea
                        id="description"
                        name="description"
                        type="text"
                        class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        rows="4"
                    ></textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('description')"/>
                </div>

                <div>
                    <x-input-label for="hourly_rate" :value="__('Uurtarief')"/>
                    $ <x-text-input id="hourly_rate" name="hourly_rate" type="number" step="0.01" class="mt-1"
                                  :value="old('hourly_rate')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('hourly_rate')"/>
                </div>

                <div>
                    <x-input-label for="city" :value="__('Stad')"/>
                    <x-text-input id="city" name="city" type="text" class="mt-1 block w-full"
                                  :value="old('city')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('city')"/>
                </div>

                <div class="mt-4">
                    <label for="advert_active" class="flex items-center">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Actieve advertentie?') }} &ensp;</span>
                        <input id="advert_active" name="advert_active" type="checkbox"
                            class="form-checkbox h-5 w-5 text-[#2D5D7B]">

                    </label>
                    <x-input-error class="mt-1" :messages="$errors->get('advert_active')"/>
                </div>

                <div>
                    <x-input-label for="begin_date" :value="__('Begin datum')"/>
                    <x-text-input id="begin_date" name="begin_date" type="date" class="mt-1 block w-full"
                                  :value="old('begin_date')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('begin_date')"/>
                </div>
                <div>
                    <x-input-label for="end_date" :value="__('Eind datum')"/>
                    <x-text-input id="end_date" name="end_date" type="date" class="mt-1 block w-full"
                                  :value="old('end_date')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('end_date')"/>
                </div>

            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Opslaan') }}</x-primary-button>
            </div>
        </div>
    </form>

</div>
