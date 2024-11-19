<x-layout>
    <x-slot:title>
        Register Here
    </x-slot:title>
    <form method='POST' action='/register'>
        @csrf
        <div class="space-y-12">
            <div class="pb-12 border-b border-gray-900/10">
                <h2 class="font-semibold text-gray-900 text-base/7">Register for an Account</h2>
                <p class="mt-1 text-gray-600 text-sm/6">Register, create a job</p>

                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">

                            <x-form-input type="text" name="first_name" id="first_name" />
                            <x-form-error name="first_name" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">

                            <x-form-input type="text" name="last_name" id="last_name" />
                            <x-form-error name="last_name" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">

                            <x-form-input type="email" name="email" id="email" />
                            <x-form-error name="email" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">

                            <x-form-input type="password" name="password" id="password" />
                            <x-form-error name="password" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">

                            <x-form-input type="password" name="password_confirmation" id="password_confirmation" />
                            <x-form-error name="password_confirmation" />
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="flex items-center justify-end p-4  gap-x-6">
            <a href='/' class="font-semibold text-gray-900 text-sm/6">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
