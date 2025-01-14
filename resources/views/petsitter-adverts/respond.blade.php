<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reageer op oppas advertentie') }}
        </h2>
    </x-slot>
    <section>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('petsitter-adverts.show', ['petsitterAdvert' => $petsitterAdvert])
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Voeg een bericht toe') }}
                </p>
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form method="POST" action="{{ route('petsitter-advert-responses.store', $petsitterAdvert) }}"
                      class="mt-6 space-y-6">
                    @csrf

                    <input type="hidden" name="petsitter_advert_id" value="{{ $petsitterAdvert->id }}">

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="message"
                        >
                            {{ __('Bericht') }}
                        </label>

                        <textarea
                            class="border border-gray-400 p-2"
                            name="message"
                            id="message"
                            cols="50"
                            rows="6"
                        ></textarea>

                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Stuur') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
