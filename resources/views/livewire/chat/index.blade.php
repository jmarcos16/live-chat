<div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="grid grid-cols-4 gap-4 bg-white rounded-lg shadow">
        <div class="h-screen col-span-1 border-r">
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
            <div class="flex flex-col items-center justify-center h-full">
                <p class="mt-4 text-gray-700">Selecione uma conversa para começar</p>
            </div>
        </div>

    </div>
</div>
