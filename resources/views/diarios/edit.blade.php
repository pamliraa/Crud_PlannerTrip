<x-app-layout>
    <div class="min-h-screen py-10" style="background-color:#e4ebf0;">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow border"
             style="border-color:#bdd1de;">

            <h2 class="text-xl font-semibold mb-4" style="color:#4180ab;">
                Editar Diário
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

            <form action="{{ route('diarios.update', $diario->id) }}" method="POST"
                  enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method("PUT")

                <div>
                    <label class="block font-medium" style="color:#4180ab;">Destino</label>
                    <select name="id_destino"
                            class="w-full p-2 rounded border"
                            style="border-color:#8ab3cf;" required>
                        @foreach ($destinos as $destino)
                            <option value="{{ $destino->id }}"
                                {{ $diario->destino_id == $destino->id ? 'selected' : '' }}>
                                {{ $destino->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block font-medium" style="color:#4180ab;">Data</label>
                    <input type="date" name="data"
                           value="{{ old('data', $diario->data) }}"
                           class="w-full p-2 rounded border"
                           style="border-color:#8ab3cf;" required>
                </div>

                <div>
                    <label class="block font-medium" style="color:#4180ab;">Descrição</label>
                    <textarea name="descricao"
                              rows="4"
                              class="w-full p-2 rounded border"
                              style="border-color:#8ab3cf;" required>{{ old('descricao', $diario->descricao) }}</textarea>
                </div>

                <div>
                    <label class="block font-medium" style="color:#4180ab;">Foto atual</label>
                    @if ($diario->foto)
                        <img src="{{ asset('storage/'.$diario->foto) }}" width="130" class="rounded mb-3">
                    @else
                        <span>Sem foto registrada</span>
                    @endif
                </div>

                <div>
                    <label class="block font-medium" style="color:#4180ab;">Nova foto (opcional)</label>
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
                        Atualizar
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
