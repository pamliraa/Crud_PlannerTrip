<x-app-layout>
    <div class="min-h-screen py-10" style="background-color:#e4ebf0;">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow border"
             style="border-color:#bdd1de;">

            <form action="{{ route('destinos.update', $destino->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                {{-- Nome --}}
                <div>
                    <label for="name" class="block font-medium" style="color:#4180ab;">
                        Nome do Destino
                    </label>

                    <input 
                        type="text" 
                        id="name" 
                        name="name"
                        value="{{ $destino->name }}"
                        required
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;"
                    >
                </div>

                {{-- Descrição --}}
                <div>
                    <label for="descricao" class="block font-medium" style="color:#4180ab;">
                        Descrição
                    </label>

                    <input 
                        type="text" 
                        id="descricao" 
                        name="descricao"
                        value="{{ $destino->descricao }}"
                        required
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;"
                    >
                </div>

                {{-- Botão --}}
                <button type="submit"
                    class="px-4 py-2 text-white rounded"
                    style="background-color:#4180ab;">
                    Atualizar
                </button>
            </form>

            {{-- Voltar --}}
            <div class="mt-4 text-right">
                <a href="{{ route('destinos.index') }}"
                   class="font-medium"
                   style="color:#4180ab;">
                    Voltar para lista
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
