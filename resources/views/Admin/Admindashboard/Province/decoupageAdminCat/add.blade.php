@extends('Admin.index')
@section('sectionC')
  <div class="add__item-container">
    <form method="POST" action="{{ route('decoupage-Administratif.store') }}" class="add-item-form">
        @csrf

        <!-- Province name -->
        <div class='module-insert'>
            <x-input-label for="name" :value="__('Decoupage Admin')" class="input-item-desc" />
            <x-text-input id="name" class="block mt-1 w-full input-item" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <p></p>
        </div>

         <!-- Description name -->
         <div class='module-insert'>
            <x-input-label for="description" :value="__('Decoupage Admin')" class="input-item-desc" />
            <x-text-input id="description" class="block mt-1 w-full input-item" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
              <p></p>
        </div>

       
        <div class="flex items-center justify-end mt-4 input-item-save">
            <x-primary-button class="ms-3 input-item-btn">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>
  </div>
@endsection