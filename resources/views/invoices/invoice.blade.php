<!DOCTYPE html>
<html>


<body>
<form action="{{ route('create_invoice') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <!-- invoice_no -->
     <div>
        <x-input-label for="invoice_no" :value="__('invoice_no')" />
        <x-text-input id="invoice_no" class="block mt-1 w-full" type="int" name="invoice_no" :value="old('invoice_no')" required autofocus autocomplete="invoice_no" />
        {{-- <x-input-error :messages="$errors->get('invoice_no')" class="mt-2" /> --}}
    </div>

    <!-- products -->
    <div class="mt-4">
        <x-input-label for="products" :value="__('products')" />
        <select name="products" id="products" style="width: 100%;" class="block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            <option value=""></option>
            <option value="sugar"> sugar </option>
            <option value="T-shirt"> T-shirt </option>
        </select>
    </div>
    <!-- amount -->
    <div>
        <label for="amount" class="block mt-3 mb-1 font-medium text-sm text-gray-700">amount</label>
        <x-text-input id="amount" class="block mt-1 w-full" type="double" name="amount" :value="old('amount')" required autofocus  />
        {{-- <x-input-error :messages="$errors->get('price')" class="mt-2" /> --}}
    </div>
    <!-- attachments -->
    <div class="mt-4">
        <x-input-label for="attachment" :value="__('attachment')" />

        <x-text-input id="attachment" class="form-control" type="file" name="attachment" required />
        {{-- <x-input-error :messages="$errors->get('attachments')" class="mt-2" />  --}}
    </div> 

    <button type="submit">
        submit
    </button>
    {{-- <x-primary-button class="ml-4">
        {{ __('create_invoice') }}
    </x-primary-button> --}}
   
</form>
</body>
</html>