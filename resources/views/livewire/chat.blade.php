<div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="absolute grid grid-cols-4 gap-4 overflow-hidden bg-white rounded-lg shadow h-4/5">
        <div class="relative col-span-1 overflow-y-auto border-r scroll-auto max-h-2xl">
            <h5 class="p-4 font-medium">Mensagens</h5>
            <ul class="divide-y">
                @foreach ($users as $user)
                    <ul class="flex items-center gap-2 px-4 py-2 transition-all cursor-pointer hover:bg-gray-100">
                        <x-randon-img class="w-12 h-12" />
                        <p class="font-semibold text-gray-700">{{ $user->name }}</p>
                    </ul>
                @endforeach
            </ul>
        </div>
        <div class="col-span-3">
            <livewire:chat.show />
        </div>
    </div>
</div>
