
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">OTP Validation</h4>

        <form class="card p-2" action="{{route('validateOtp')}}" method="post">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="otp" id="otp" placeholder="enter your OTP" value="" required>

                <x-primary-button type="submit" class="ml-4">
                    {{ __('login') }}
                </x-primary-button>

            </div>
        </form>
        <form class="card p-2" action="{{route('otpResend')}}" method="post">
            @csrf
            <div>
            <x-primary-button type="submit" class="ml-4">
                {{ __('resend') }}
            </x-primary-button> 
                
            </div>
        </form>
            

    </div>

</x-guest-layout>
