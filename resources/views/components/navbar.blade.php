<!-- Navbar -->
<nav class="bg-white border-b border-gray-100 shadow-sm" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="hidden sm:ml-8 sm:flex sm:space-x-8">
                    <a href="{{ route('students.create') }}"
                        class="border-b-2 border-transparent px-1 pt-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:border-gray-300">
                        Ajouter un étudiant
                    </a>
                    <a href="{{ route('students.index') }}"
                        class="border-b-2 border-transparent px-1 pt-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:border-gray-300">
                        Liste des étudiants
                    </a>

                </div>
            </div>
            <div class="flex items-center">
                <!-- Bouton menu mobile -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-900 hover:bg-gray-100 sm:hidden">
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div x-show="mobileMenuOpen" class="sm:hidden" style="display: none;">
        <div class="pt-2 pb-3 space-y-1">
            <a href="#"
                class="bg-gray-50 border-l-4 border-gray-900 text-gray-900 block pl-3 pr-4 py-2 text-base font-medium">
                Ajouter un étudiant
            </a>
            <a href="#"
                class="border-l-4 border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 text-base font-medium">
                Liste des étudiants
            </a>
        </div>
    </div>
</nav>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
