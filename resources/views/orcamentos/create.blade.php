<x-app-layout>
    <div class="min-h-screen py-10" style="background-color:#e4ebf0;">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow border"
             style="border-color:#bdd1de;">

            <h2 class="text-xl font-semibold mb-4" style="color:#4180ab;">
                Cadastrar Orçamento
            </h2>

            @if ($errors->any())
                <div class="p-3 mb-4 rounded-lg border"
                     style="background-color:#bdd1de; color:#ab4141; border-color:#cf8a8a;">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('orcamentos.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="id_destino" class="block font-medium" style="color:#4180ab;">Destino</label>
                    <select name="id_destino" id="id_destino"
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;" required>
                        <option value="" disabled selected>Selecione o destino da viagem</option>
                        @foreach ($destinos as $destino)
                            <option value="{{ $destino->id }}">{{ $destino->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="valorEstimado" class="block font-medium" style="color:#4180ab;">Valor Estimado</label>
                    <input type="number" step="0.01" name="valorEstimado" id="valorEstimado"
                        placeholder="Ex: 1500.00"
                        value="{{ old('valorEstimado') }}"
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;" required>
                </div>

                <div>
                    <label for="valorGasto" class="block font-medium" style="color:#4180ab;">Valor Gasto</label>
                    <input type="number" step="0.01" name="valorGasto" id="valorGasto"
                        placeholder="Ex: 900.00"
                        value="{{ old('valorGasto') }}"
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;" required>
                </div>

                <div>
                    <label for="descricao" class="block font-medium" style="color:#4180ab;">Descrição</label>
                    <input type="text" name="descricao" id="descricao"
                        placeholder="Ex: Alimentação, passeios, transporte..."
                        value="{{ old('descricao') }}"
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;" required>
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('orcamentos.index') }}"
                        class="font-medium"
                        style="color:#4180ab;">
                        Voltar
                    </a>

                    <button type="submit"
                        class="px-4 py-2 rounded text-white"
                        style="background-color:#4180ab;">
                        Salvar
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
