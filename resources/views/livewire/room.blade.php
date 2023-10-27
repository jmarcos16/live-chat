<div class="flex h-full p-5">
    @if ($room)
        <div class="flex flex-col justify-end w-full">

           <div>
            @if ($messages)
            @foreach ($messages as $message)
                <div wire:key="{{$message->id}}" class="float-left w-1/3 p-2 my-1 bg-blue-400 rounded-lg">{{$message->body}}</div>
            @endforeach
        @endif
           </div>
            
            <x-text-input 
                wire:model="message" 
                wire:keydown.enter="sendMessage"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                placeholder="Digite sua mensagem..." />
        </div>
    @else
        <div class="w-full">
            <div class="flex flex-col items-center justify-center h-full">
                <p class="mt-4 text-gray-700">Selecione uma conversa para começar</p>
            </div>
        </div>
    @endif
</div>
