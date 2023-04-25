<x-app-layout>
    
    <div class="container w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <h2 class="text-4xl my-8 text-center">Edit note here.</h2>
   
        <div>
            <form action="{{ route('note.update', $note) }}" method="POST">
                @csrf
                @method('PATCH')

        <!-- Title-->
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" autofocus value="{{ $note->title }}" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Description-->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <x-textarea id="description" class="block mt-1 w-full" name="description"  placeholder="Add Description"  value="{{ $note->description }}"/>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('Update Note') }}
            </x-primary-button>
        </div>

        </form>
    </div>
    </div>
</x-app-layout>
