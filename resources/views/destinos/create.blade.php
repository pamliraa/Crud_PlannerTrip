<x-app-layout>
    <div class="min-h-screen py-10" style="background-color:#e4ebf0;">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow border"
             style="border-color:#bdd1de;">

            <h2 class="text-xl font-semibold" style="color:#4180ab;">
                Cadastrar Destino
            </h2>
            <form action="{{ route('destinos.store') }}" method="POST" class="space-y-4">
                @csrf

                {{-- Nome --}}
                <div>
                    <label for="name" class="block font-medium" style="color:#4180ab;">
                        Nome do Destino
                    </label>

                    <input 
                        type="text" 
                        name="name"
                        id="name"
                        placeholder="Ex.: Paris"
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
                        name="descricao"
                        id="descricao"
                        placeholder="Ex.: Capital da França, famosa pela Torre Eiffel"
                        required
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;"
                    >
                </div>

                {{-- Botão --}}
                <button type="submit"
                    class="px-4 py-2 text-white rounded"
                    style="background-color:#4180ab;">
                    Salvar
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
