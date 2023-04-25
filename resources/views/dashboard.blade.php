<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @php
        $quote = \App\Models\Quote::inRandomOrder()->first();
    @endphp

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($quote)
                        <blockquote>
                            <q>{{ __($quote->text) }}</q>
                            <p class="text-sm text-gray-500">&nbsp;&nbsp;{{ $quote->author }}</p>
                        </blockquote>
                    @else
                        {{ __('No quote found.') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
