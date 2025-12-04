<x-app-layout>
    <div class="min-h-screen py-10" style="background-color:#e4ebf0;">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow border"
             style="border-color:#bdd1de;">

            <h2 class="text-xl font-semibold mb-4" style="color:#4180ab;">
                Atualizar Orçamento
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

            <form action="{{ route('orcamentos.update', $orcamento->id) }}" method="POST" class="space-y-4">
                @csrf
                @method("PUT")

                <div>
                    <label for="id_destino" class="block font-medium" style="color:#4180ab;">Destino</label>
                    <select name="id_destino" id="id_destino"
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;" required>
                        <option value="">Selecione o destino</option>
                        @foreach ($destinos as $destino)
                            <option value="{{ $destino->id }}"
                                {{ $orcamento->id_destino == $destino->id ? 'selected' : '' }}>
                                {{ $destino->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="valorEstimado" class="block font-medium" style="color:#4180ab;">Valor Estimado</label>
                    <input type="number" step="0.01" name="valorEstimado" id="valorEstimado"
                        value="{{ old('valorEstimado', $orcamento->valorEstimado) }}"
                        placeholder="Ex: 1500.00"
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;" required>
                </div>

                <div>
                    <label for="valorGasto" class="block font-medium" style="color:#4180ab;">Valor Gasto</label>
                    <input type="number" step="0.01" name="valorGasto" id="valorGasto"
                        value="{{ old('valorGasto', $orcamento->valorGasto) }}"
                        placeholder="Ex: 900.00"
                        class="w-full p-2 rounded border"
                        style="border-color:#8ab3cf;" required>
                </div>

                <div>
                    <label for="descricao" class="block font-medium" style="color:#4180ab;">Descrição</label>
                    <input type="text" name="descricao" id="descricao"
                        value="{{ old('descricao', $orcamento->descricao) }}"
                        placeholder="Descreva para onde esse valor foi destinado"
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
                        Atualizar
                    </button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>
