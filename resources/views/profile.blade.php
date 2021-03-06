<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 leading-tight">
            {{ __("My Profile") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-4 my-6">
                <div class="col-span-1 lg:col-span-1">
                    <div class="text-grey">First Name</div>
                    <div class="text-profile-display">
                        {{ Auth::user()->fname }}
                    </div>
                </div>
                <div class="col-span-1 lg:col-span-3">
                    <div class="text-grey">E-mail</div>
                    <div class="text-profile-display">
                        {{ Auth::user()->email }}
                    </div>
                </div>
                <div class="col-span-1 lg:col-span-1 mt-6">
                    <div class="text-grey">Last Name</div>
                    <div class="text-profile-display">
                        {{ Auth::user()->lname }}
                    </div>
                </div>
                <div class="col-span-1 lg:col-span-3 mt-6">
                    <div class="text-grey">Password</div>
                    <div class="text-profile-display">
                        ......................
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
