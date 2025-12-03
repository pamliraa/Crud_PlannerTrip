<x-app-layout>
    <div class="min-h-screen py-10" style="background-color:#e4ebf0;">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow border"
             style="border-color:#bdd1de;">

            <h2 class="text-xl font-semibold mb-4" style="color:#4180ab;">
                Atualizar Atividade
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

            <form action="{{ route('atividades.update', $atividade->id) }}" method="POST" class="space-y-4">
                @csrf
                @method("PUT")

                <div>
                    <label for="titulo" class="block font-medium" style="color:#4180ab;">Título</label>
                    <input type="text" name="titulo" id="titulo"
                           value="{{ old('titulo', $atividade->titulo) }}"
                           class="w-full p-2 rounded border"
                           style="border-color:#8ab3cf;" required>
                </div>

                <div>
                    <label for="descricao" class="block font-medium" style="color:#4180ab;">Descrição</label>
                    <input type="text" name="descricao" id="descricao"
                           value="{{ old('descricao', $atividade->descricao) }}"
                           class="w-full p-2 rounded border"
                           style="border-color:#8ab3cf;" required>
                </div>

                <div>
                    <label for="data" class="block font-medium" style="color:#4180ab;">Data</label>
                    <input type="date" name="data" id="data"
                           value="{{ old('data', $atividade->data) }}"
                           class="w-full p-2 rounded border"
                           style="border-color:#8ab3cf;" required>
                </div>

                <div>
                    <label for="local" class="block font-medium" style="color:#4180ab;">Local</label>
                    <input type="text" name="local" id="local"
                           value="{{ old('local', $atividade->local) }}"
                           class="w-full p-2 rounded border"
                           style="border-color:#8ab3cf;" required>
                </div>

                <div>
                    <label for="status" class="block font-medium" style="color:#4180ab;">Status</label>
                    <select name="status" id="status"
                            class="w-full p-2 rounded border"
                            style="border-color:#8ab3cf;" required>
                        <option value="planejado" {{ $atividade->status == 'planejado' ? 'selected' : '' }}>Planejado</option>
                        <option value="confirmado" {{ $atividade->status == 'confirmado' ? 'selected' : '' }}>Confirmado</option>
                        <option value="em_andamento" {{ $atividade->status == 'em_andamento' ? 'selected' : '' }}>Em andamento</option>
                        <option value="concluido" {{ $atividade->status == 'concluido' ? 'selected' : '' }}>Concluído</option>
                        <option value="cancelado" {{ $atividade->status == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                    </select>
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('atividades.index') }}"
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
