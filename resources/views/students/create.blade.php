<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un étudiant</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
        }

        .input-style {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            transition: all 0.2s ease;
        }

        .input-style:hover {
            border-color: #d1d5db;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .input-style:focus {
            border-color: #6b7280;
            box-shadow: 0 0 0 3px rgba(107, 114, 128, 0.1);
            outline: none;
        }

        .submit-button {
            background: linear-gradient(to right, #111827, #1f2937);
            transition: all 0.3s ease;
        }

        .submit-button:hover {
            background: linear-gradient(to right, #1f2937, #374151);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .cancel-button {
            transition: all 0.3s ease;
        }

        .cancel-button:hover {
            background: #f3f4f6;
        }

        .form-header {
            border-bottom: 1px solid rgba(229, 231, 235, 0.5);
        }

        .form-container {
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
</head>

<body class="p-4 md:p-0">
    @include('components.navbar')
    <div class="w-full max-w-2xl mx-auto mt-12 md:mt-10 form-container">
        <div class="glass-effect rounded-2xl overflow-hidden">
            <!-- En-tête -->
            <div class="px-8 pt-8 pb-6 form-header">
                <h2 class="text-2xl font-semibold text-gray-800 tracking-tight">Ajouter un étudiant</h2>
                <p class="text-sm text-gray-500 mt-2">Informations personnelles de l'étudiant</p>
            </div>
            <form class="p-8" action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-8">
                        <!-- Nom -->
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
                                Nom
                            </label>
                            <input type="text" id="last_name" name="last_name"
                                class="input-style block w-full px-4 py-3.5 rounded-xl text-gray-800"
                                placeholder="Entrez le nom de famille">
                            @error('last_name')
                                <p class="text-red-500 font-light text-center">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Prénom -->
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">
                                Prénom
                            </label>
                            <input type="text" id="first_name" name="first_name"
                                class="input-style block w-full px-4 py-3.5 rounded-xl text-gray-800"
                                placeholder="Entrez le prénom">
                            @error('first_name')
                                <p class="text-red-500 font-light text-center">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Date de naissance -->
                        <div>
                            <label for="birth_date" class="block text-sm font-medium text-gray-700 mb-2">
                                Date de naisance
                            </label>
                            <input type="date" id="birth_date" name="birth_date"
                                class="input-style block w-full px-4 py-3.5 rounded-xl text-gray-800"
                                placeholder="Entrez la date de naissance">
                            @error('birth_date')
                                <p class="text-red-500 font-light text-center">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Téléphone -->
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-2">
                                Téléphone
                            </label>
                            <input type="tel" id="phone_number" name="phone_number"
                                class="input-style block w-full px-4 py-3.5 rounded-xl text-gray-800"
                                placeholder="Entrez le numéro de téléphone">
                            @error('phone_number')
                                <p class="text-red-500 font-light text-center">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Séparateur -->
                <div class="my-10 border-t border-gray-100"></div>

                <!-- Boutons d'action -->
                <div class="flex justify-end items-center gap-4">
                    <button type="reset" class="cancel-button px-6 py-3 text-gray-700 font-medium text-sm rounded-xl">
                        Annuler
                    </button>
                    <button type="submit" class="submit-button px-6 py-3 text-white font-medium text-sm rounded-xl">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
