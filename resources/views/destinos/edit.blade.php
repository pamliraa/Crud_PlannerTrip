<x-app-layout>
    <div class="min-h-screen py-10" style="background-color:#e4ebf0;">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow border"
             style="border-color:#bdd1de;">

            <h2 class="text-xl font-semibold mb-4" style="color:#4180ab;">
                Atualizar Destino
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

            <form action="{{ route('destinos.update', $destino->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="block font-medium" style="color:#4180ab;">
                        Nome do Destino
                    </label>

                    <input 
                        type="text" 
                        id="name" 
                        name="name"
                        value="{{ old('name', $destino->name) }}"
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
                        id="descricao" 
                        name="descricao"
                        value="{{ old('descricao', $destino->descricao) }}"
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
                        Atualizar
                    </button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>
