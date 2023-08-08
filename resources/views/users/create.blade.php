<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New user</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('register') }}" method="POST">
    @csrf
  
     <!-- Name -->
     <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <!-- TYpe -->
    <div>
        <label for="type" class="block mt-3 mb-1 font-medium text-sm text-gray-700">Type</label>
        <select name="type" id="type" style="width: 100%;" class="block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            <option value=""></option>
            <option value="owner"> owner </option>
            <option value="admin"> admin </option>
        </select>
    </div>
    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <x-primary-button class="ml-4">
        {{ __('Register') }}
    </x-primary-button>
   
</form>