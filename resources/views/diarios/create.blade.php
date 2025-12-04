<x-app-layout>
    <div class="min-h-screen py-10" style="background-color:#e4ebf0;">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow border"
             style="border-color:#bdd1de;">

            <h2 class="text-xl font-semibold mb-4" style="color:#4180ab;">
                Criar Diário
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

            <form action="{{ route('diarios.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div>
                    <label class="block font-medium" style="color:#4180ab;">Destino</label>
                    <select name="id_destino"
                            class="w-full p-2 rounded border"
                            style="border-color:#8ab3cf;" required>
                        <option value="">Selecione o destino da viagem</option>
                        @foreach ($destinos as $destino)
                            <option value="{{ $destino->id }}">{{ $destino->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block font-medium" style="color:#4180ab;">Data</label>
                    <input type="date" name="data"
                           class="w-full p-2 rounded border"
                           value="{{ old('data') }}"
                           style="border-color:#8ab3cf;" required>
                </div>

                <div>
                    <label class="block font-medium" style="color:#4180ab;">Descrição</label>
                    <textarea name="descricao"
                              rows="4"
                              placeholder="Escreva sobre esse momento da viagem..."
                              class="w-full p-2 rounded border"
                              style="border-color:#8ab3cf;" required>{{ old('descricao') }}</textarea>
                </div>

                <div>
                    <label class="block font-medium" style="color:#4180ab;">Foto</label>
                    <input type="file" name="foto"
                           class="w-full p-2 rounded border"
                           style="border-color:#8ab3cf;">
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('diarios.index') }}"
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
