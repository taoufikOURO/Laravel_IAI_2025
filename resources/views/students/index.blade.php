@vite('resources/css/app.css')
<style>
    table {
        animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<body>
    @include('components.navbar')
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-700">
                    <thead class="text-xs font-semibold uppercase bg-gray-900 text-white">
                        <tr>
                            <th scope="col" class="px-6 py-4">
                                Nom
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Prénom
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Age
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Sexe
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach ($personnes as $personne)
                            <tr class="hover:bg-gray-100 transition-colors duration-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                                    {{ $personne['nom'] }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $personne['prenom'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $personne['age'] }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($personne['sexe'] == 'F')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="pink" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-venus">
                                            <path d="M12 15v7" />
                                            <path d="M9 19h6" />
                                            <circle cx="12" cy="9" r="6" />
                                        </svg>
                                    @endif
                                    @if ($personne['sexe'] == 'M')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mars">
                                            <path d="M16 3h5v5" />
                                            <path d="m21 3-6.75 6.75" />
                                            <circle cx="10" cy="14" r="6" />
                                        </svg>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
