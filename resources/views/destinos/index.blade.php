<x-app-layout>
    <div class="min-h-screen py-8" style="background-color:#e4ebf0;">
        <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">

            <div class="mb-4 flex justify-end">
                <a href="{{ route('destinos.create') }}"
                   class="px-4 py-2 rounded-lg text-white"
                   style="background-color:#4180ab;">
                    Cadastrar Novo Destino
                </a>
            </div>

            @if (session('success'))
                <div class="p-3 mb-4 rounded-lg border" 
                     style="background-color:#bdd1de; color:#4180ab; border-color:#8ab3cf;">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="p-3 mb-4 rounded-lg border"
                     style="background-color:#bdd1de; color:#ab4141; border-color:#cf8a8a;">
                    {{ session('error') }}
                </div>
            @endif

            @if ($destinos->isEmpty())
                <div class="p-6 rounded-lg shadow text-center"
                     style="background-color:#ffffff; border:1px solid #bdd1de;">
                    <h2 class="text-xl font-semibold" style="color:#4180ab;">Nenhum destino cadastrado</h2>
                </div>
            @else

                <ul class="space-y-4">
                    @foreach ($destinos as $destino)
                        <li class="flex justify-between p-4 rounded-lg shadow"
                            style="background-color:#ffffff; border:1px solid #bdd1de;">
                            <div>
                                <strong class="text-lg" style="color:#4180ab;">{{ $destino->name }}</strong><br>
                                <small class="text-gray-600">Descrição: {{ $destino->descricao }}</small>
                            </div>

                            <div class="flex items-center space-x-3">
                                <a href="{{ route('destinos.edit', $destino->id) }}"
                                   class="font-medium"
                                   style="color:#4180ab;">
                                    Editar
                                </a>

                                <form action="{{ route('destinos.destroy', $destino->id) }}" 
                                      method="POST"
                                      onsubmit="return confirm('Tem certeza que quer excluir?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="font-medium"
                                            style="color:#ab4141;">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>

            @endif

        </div>
    </div>
</x-app-layout>
