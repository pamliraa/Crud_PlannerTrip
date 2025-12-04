<x-app-layout>
    <div class="min-h-screen py-10" style="background-color:#e4ebf0;">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow border"
             style="border-color:#bdd1de;">

            <h2 class="text-xl font-semibold mb-4" style="color:#4180ab;">
                Cadastrar Destino
            </h2>

            @if ($errors->any())
                <div class="p-3 mb-4 rounded-lg border"
                    style="background-color:#f8d7da; color:#721c24; border-color:#f5c6cb;">
                    <ul class="list-disc pl-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('destinos.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block font-medium" style="color:#4180ab;">
                        Nome do Destino
                    </label>

                    <input 
                        type="text" 
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                        placeholder="Ex.: Paris"
                        required
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;"
                    >
                </div>

                <div>
                    <label for="descricao" class="block font-medium" style="color:#4180ab;">
                        Descrição
                    </label>

                    <input 
                        type="text" 
                        name="descricao"
                        id="descricao"
                        value="{{ old('descricao') }}"
                        placeholder="Ex.: Capital da França, famosa pela Torre Eiffel"
                        required
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;"
                    >
                </div>

                <div class="flex justify-between items-center pt-2">
                    <a href="{{ route('destinos.index') }}"
                       class="font-medium"
                       style="color:#4180ab;">
                        Voltar
                    </a>

                    <button type="submit"
                        class="px-4 py-2 text-white rounded"
                        style="background-color:#4180ab;">
                        Salvar
                    </button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>
