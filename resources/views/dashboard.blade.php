<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Balance') }}
            {{ Auth::user()->balance }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="w-2/3 mx-auto">
            <div class="bg-white rounded my-6">
                <table class="text-left w-full border-collapse">
                    <tr>
                        <th>Name</th>
                        <th>Balance</th>
                    </tr>

                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->fname }} {{ $user->lname }}</td>
                            <td>$ {{ $user->balance }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                    </tr>
                    <tr>
                        <td>Centro comercial Moctezuma</td>
                        <td>Francisco Chang</td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
</x-app-layout>
