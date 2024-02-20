@extends('Admin.index')
@section('sectionC')
  <div class="add__item-container">
    <form method="POST" action="{{route('decoupage-Administratif.update',['decoupage_Administratif'=>$list->id])}}" class="add-item-form">
        @csrf
        @method('PUT')
       <div class="module-title">
           <h2 class="section-title__2">{{__('Edit province')}}</h2>
       </div>
        <!-- Province name -->
        <div class='module-insert'>
            <x-input-label for="name" :value="__('Decoupage Admin')" class="input-item-desc" />
            <input type="text" name="name" id="name" value={{$list->name}} class="block mt-1 w-full input-item">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <p></p>
        </div>

        {{-- decoupage description  --}}
        <div class='module-insert'>
            <x-input-label for="description" :value="__('Description')" class="input-item-desc" />
            <input type="text" name="description" id="description" value={{$list->description}} class="block mt-1 w-full input-item">
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
              <p></p>
        </div>

       
        <div class="flex items-center justify-end mt-4 input-item-save">
            <x-primary-button class="ms-3 input-item-btn">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
  </div>
@endsection