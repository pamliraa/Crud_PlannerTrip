<x-app-layout>
    <div class="min-h-screen" style="background-color:#e4ebf0;">
        <div class="max-w-7xl mx-auto mt-8 px-6">

            {{-- Título --}}
            <h1 class="text-3xl font-bold text-[#4180ab] mb-6">Dashboard – Resumo Geral</h1>

            {{-- Cards principais --}}
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">

                {{-- Destinos --}}
                <div class="bg-white shadow-md rounded-xl p-5 border-t-4 border-[#4180ab]">
                    <h2 class="text-lg font-semibold text-gray-700">Destinos</h2>
                    <p class="text-4xl font-bold text-[#4180ab] mt-2">{{ $destinos }}</p>
                </div>

                {{-- Orçamentos --}}
                <div class="bg-white shadow-md rounded-xl p-5 border-t-4 border-[#8ab3cf]">
                    <h2 class="text-lg font-semibold text-gray-700">Orçamentos</h2>
                    <p class="text-4xl font-bold text-[#4180ab] mt-2">{{ $orcamentos }}</p>
                </div>

                {{-- Diários --}}
                <div class="bg-white shadow-md rounded-xl p-5 border-t-4 border-[#bdd1de]">
                    <h2 class="text-lg font-semibold text-gray-700">Diários</h2>
                    <p class="text-4xl font-bold text-[#4180ab] mt-2">{{ $diarios }}</p>
                </div>

                {{-- Checklist --}}
                <div class="bg-white shadow-md rounded-xl p-5 border-t-4 border-[#e4ebf0]">
                    <h2 class="text-lg font-semibold text-gray-700">Checklists</h2>
                    <p class="text-4xl font-bold text-[#4180ab] mt-2">{{ $checklists }}</p>
                </div>

                {{-- Atividades --}}
                <div class="bg-white shadow-md rounded-xl p-5 border-t-4 border-[#8ab3cf]">
                    <h2 class="text-lg font-semibold text-gray-700">Atividades</h2>
                    <p class="text-4xl font-bold text-[#4180ab] mt-2">{{ $atividades }}</p>
                </div>

            </div>

            {{-- Relatório visual --}}
            <div class="mt-10 bg-white p-6 rounded-xl shadow-md">
                <h2 class="text-2xl font-semibold text-[#4180ab] mb-5">Resumo Visual</h2>

                <div class="grid md:grid-cols-2 gap-6">

                    {{-- Orçamentos --}}
                    <div class="p-5 bg-[#e4ebf0] rounded-xl shadow-inner">
                        <h3 class="text-xl font-semibold text-[#4180ab] mb-3">Orçamentos</h3>
                        <p class="text-gray-700">Veja seus orçamentos planejados e gastos na seção de gerenciar orçamentos.</p>
                    </div>

                    {{-- Próximas atividades --}}
                    <div class="p-5 bg-[#bdd1de] rounded-xl shadow-inner">
                        <h3 class="text-xl font-semibold text-[#4180ab] mb-3">Atividades Próximas</h3>
                        <p class="text-gray-700">Gerencie tarefas importantes da sua viagem.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
