<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full  items-center px-4 py-2 bg-blue-400 border border-transparent  font-semibold text-md text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-500 focus:outline-none focus:border-green-500 focus:ring ring-green-500 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
