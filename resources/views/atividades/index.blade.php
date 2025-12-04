<x-app-layout>
    <div class="min-h-screen py-8" style="background-color:#e4ebf0;">
        <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">

            <div class="mb-4 flex justify-end">
                <a href="{{ route('atividades.create') }}"
                   class="px-4 py-2 rounded-lg text-white"
                   style="background-color:#4180ab;">
                    Cadastrar Nova Atividade
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

            @if ($atividades->isEmpty())
                <div class="p-6 rounded-lg shadow text-center"
                     style="background-color:#ffffff; border:1px solid #bdd1de;">
                    <h2 class="text-xl font-semibold" style="color:#4180ab;">Nenhuma atividade cadastrada</h2>
                </div>
            @else

                <div class="overflow-auto rounded-lg shadow">
                    <table class="w-full border rounded-lg" style="border-color:#bdd1de;">
                        <thead style="background-color:#bdd1de; color:#4180ab;">
                            <tr>
                                <th class="p-2 text-left">Título</th>
                                <th class="p-2 text-left">Descrição</th>
                                <th class="p-2 text-left">Data</th>
                                <th class="p-2 text-left">Local</th>
                                <th class="p-2 text-left">Status</th>
                                <th class="p-2 text-left">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($atividades as $atividade)
                                <tr class="border-b" style="border-color:#bdd1de;">
                                    <td class="p-2">{{ $atividade->titulo }}</td>
                                    <td class="p-2">{{ $atividade->descricao }}</td>
                                    <td class="p-2">{{ $atividade->data }}</td>
                                    <td class="p-2">{{ $atividade->local }}</td>
                                    <td class="p-2">{{ $atividade->status }}</td>

                                    <td class="p-2 flex space-x-3">
                                        <a href="{{ route('atividades.edit', $atividade->id) }}"
                                           style="color:#4180ab;">
                                            Editar
                                        </a>

                                        <form action="{{ route('atividades.destroy', $atividade->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Tem certeza que quer excluir?')">
                                            @csrf
                                            @method('DELETE')
                                            <button style="color:#ab4141;">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
