<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores - Cozinha Artesanal</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fontes Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Ícones Lucide -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Merriweather', 'serif'],
                    },
                    colors: {
                        wood: {
                            50: '#fbf7f1',
                            100: '#f5eadb',
                            200: '#ebd3b0',
                            300: '#deb280',
                            400: '#d18d52',
                            500: '#cb6e30',
                            600: '#bd5325',
                            700: '#9d3d1f', 
                            800: '#80321e', 
                            900: '#682a1b', 
                            950: '#38130b', 
                        },
                        light: {
                            400: '#fbbf24', 
                            500: '#f59e0b',
                        },
                        teal: {
                            700: '#0f766e',
                            800: '#115e59',
                        }
                    },
                    boxShadow: {
                        'warm': '0 20px 25px -5px rgba(251, 191, 36, 0.1), 0 10px 10px -5px rgba(251, 191, 36, 0.04)',
                    }
                }
            }
        }
    </script>

    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        .glass-warm {
            background: rgba(255, 253, 245, 0.85);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(235, 211, 176, 0.3);
        }

        /* Estilo visual para identificar componentes Livewire durante o desenvolvimento.
           Remover em produção.
        */
        .livewire-dev-border {
            border: 2px dashed #0f766e; /* Teal */
            position: relative;
        }
        .livewire-dev-border::before {
            content: attr(data-component);
            position: absolute;
            top: -12px;
            right: 12px;
            background-color: #0f766e;
            color: white;
            font-size: 0.75rem;
            padding: 2px 8px;
            border-radius: 4px;
            font-weight: bold;
            z-index: 10;
        }
    </style>
</head>
<body class="bg-wood-50 text-wood-900 antialiased selection:bg-light-400 selection:text-wood-950">

    <!-- HEADER (Blade Layout Principal) -->
    <nav class="fixed w-full z-50 transition-all duration-300 glass-warm" id="navbar">
        <div class="container mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center gap-2 group">
                <div class="bg-wood-800 text-light-400 p-2 rounded-lg group-hover:rotate-6 transition-transform shadow-lg">
                    <i data-lucide="chef-hat" class="w-6 h-6"></i>
                </div>
                <span class="font-serif text-2xl font-bold text-wood-900 tracking-tight">Sabores</span>
            </a>

            <div class="hidden md:flex items-center gap-8 font-medium text-wood-800">
                <a href="#hero" class="hover:text-wood-600 transition-colors">Início</a>
                <a href="#featured" class="hover:text-wood-600 transition-colors">Destaques</a>
                <a href="#community" class="hover:text-wood-600 transition-colors">Comunidade</a>
            </div>

            <div class="flex items-center gap-4">
                <!-- @auth -->
                <button class="hidden md:flex bg-wood-800 text-wood-50 px-6 py-2.5 rounded-full font-bold text-sm hover:bg-wood-900 transition-all shadow-md items-center gap-2">
                    <i data-lucide="user" class="w-4 h-4"></i> Minha Conta
                </button>
                <!-- @else -->
                <!-- <a href="{{ route('login') }}">Entrar</a> -->
                <!-- @endauth -->
                
                <button class="md:hidden p-2 text-wood-800">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION (Estático - Blade View) -->
    <section id="hero" class="relative min-h-[85vh] flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1556910103-1c02745a30bf?auto=format&fit=crop&w=1920&q=80" 
                 alt="Cozinha Rústica Moderna" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-wood-950/90 via-wood-900/60 to-wood-900/20"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 animate-fade-in-up">
                <div class="inline-flex items-center gap-2 bg-light-400/20 backdrop-blur-md border border-light-400/30 text-light-400 px-4 py-1.5 rounded-full text-sm font-bold uppercase tracking-wider shadow-warm">
                    <i data-lucide="sparkles" class="w-4 h-4"></i> Receita do Dia
                </div>
                
                <h1 class="font-serif text-5xl md:text-7xl font-bold text-wood-50 leading-tight">
                    Cozinhe com <br/> 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-light-400 to-wood-300">Alma & Calor</span>
                </h1>
                
                <p class="text-lg text-wood-100/90 font-light max-w-lg leading-relaxed border-l-4 border-light-400 pl-6">
                    Descubra sabores que transformam ingredientes simples em memórias inesquecíveis.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#featured" class="bg-light-500 text-wood-950 px-8 py-4 rounded-full font-bold transition-all hover:bg-light-400 hover:scale-105 shadow-warm flex items-center gap-2">
                        Ver Receitas <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
            
            <!-- Elemento Decorativo (Pode ser removido no mobile para performance) -->
            <div class="hidden md:block relative">
                 <!-- Imagem ilustrativa ou card de destaque -->
            </div>
        </div>
    </section>

    <!-- 
        LIVEWIRE COMPONENT: RECIPE GRID
        Motivo: Este componente precisará de filtros (Massas, Doces, etc.) e paginação.
        O Livewire é perfeito para atualizar a grid sem recarregar a página (wire:click no filtro).
    -->
    <section id="featured" class="py-24 bg-wood-100/30">
        <div class="container mx-auto px-6 livewire-dev-border rounded-xl p-4" data-component="recipe-list">
            
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
                    <h2 class="font-serif text-3xl md:text-4xl font-bold text-wood-900">Favoritos da Casa</h2>
                    <div class="h-1 w-20 bg-light-400 mt-4 rounded-full"></div>
                </div>
                
                <!-- Filtros (Seriam wire:click="$set('category', '...')" ) -->
                <div class="flex gap-3 overflow-x-auto pb-2 w-full md:w-auto">
                    <button class="px-4 py-2 rounded-full bg-wood-800 text-white shadow-md text-sm font-medium whitespace-nowrap">Tudo</button>
                    <button class="px-4 py-2 rounded-full border border-wood-300 text-wood-700 hover:bg-wood-800 hover:text-white transition-all text-sm font-medium whitespace-nowrap">Massas</button>
                    <button class="px-4 py-2 rounded-full border border-wood-300 text-wood-700 hover:bg-wood-800 hover:text-white transition-all text-sm font-medium whitespace-nowrap">Doces</button>
                    <button class="px-4 py-2 rounded-full border border-wood-300 text-wood-700 hover:bg-wood-800 hover:text-white transition-all text-sm font-medium whitespace-nowrap">Vegetariano</button>
                </div>
            </div>

            <!-- Grid Loop -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- <!-- Início do Loop Blade: @foreach($recipes as $recipe) --> --}}
                
                {{-- <!-- Card Modelo (Componente Blade: :recipe="$recipe" />) --> --}}
                <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-warm transition-all duration-300 group cursor-pointer border border-wood-100 flex flex-col" onclick="openModal(1)">
                    <div class="relative h-64 overflow-hidden">
                        {{-- <!-- Imagem Dinâmica: {{ $recipe->image_url }} --> --}}
                        <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                        <span class="absolute top-4 left-4 bg-light-500 text-wood-950 text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                            {{-- <!-- {{ $recipe->category->name }} --> --}}
                            Jantar
                        </span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-1 text-light-500 mb-3">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <span class="font-bold text-wood-900">4.9</span>
                            <span class="text-wood-400 text-xs">(128 avaliações)</span>
                        </div>
                        <h3 class="font-serif text-xl font-bold text-wood-900 mb-2 group-hover:text-wood-600 transition-colors">
                            {{-- <!-- {{ $recipe->title }} --> --}}
                            Risoto de Camarão Siciliano
                        </h3>
                        <p class="text-wood-500 text-sm line-clamp-2 mb-4">
                            {{-- <!-- {{ $recipe->description }} --> --}}
                            Um clássico italiano com o frescor do limão siciliano e camarões grelhados na manteiga.
                        </p>
                        <div class="mt-auto pt-4 border-t border-wood-100 flex items-center justify-between text-wood-600 text-sm">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-4 h-4"></i> 45 min</span>
                            <span class="flex items-center gap-1"><i data-lucide="chef-hat" class="w-4 h-4"></i> Médio</span>
                        </div>
                    </div>
                </article>

                <!-- Exemplo de Card 2 (Remover no loop real) -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-warm transition-all duration-300 group cursor-pointer border border-wood-100 flex flex-col" onclick="openModal(2)">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1598155523122-38423ab8d646?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                        <span class="absolute top-4 left-4 bg-teal-100 text-teal-800 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Doce</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-1 text-light-500 mb-3">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <span class="font-bold text-wood-900">4.8</span>
                            <span class="text-wood-400 text-xs">(342)</span>
                        </div>
                        <h3 class="font-serif text-xl font-bold text-wood-900 mb-2 group-hover:text-wood-600 transition-colors">Bolo de Cenoura Vulcão</h3>
                        <p class="text-wood-500 text-sm line-clamp-2 mb-4">Massa fofinha feita no liquidificador com uma cobertura de brigadeiro quente.</p>
                        <div class="mt-auto pt-4 border-t border-wood-100 flex items-center justify-between text-wood-600 text-sm">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-4 h-4"></i> 60 min</span>
                            <span class="flex items-center gap-1"><i data-lucide="chef-hat" class="w-4 h-4"></i> Fácil</span>
                        </div>
                    </div>
                </article>

                {{-- <!-- @endforeach --> --}}
            
            </div>

            <!-- Paginação do Laravel -->
            <div class="mt-12 flex justify-center">
                {{-- <!-- {{ $recipes->links() }} --> --}}
                <button class="text-wood-600 hover:text-wood-900 font-bold border-b-2 border-wood-300 hover:border-wood-900 pb-1 transition-all">
                    Carregar mais receitas
                </button>
            </div>
        </div>
    </section>

    <!-- 
        LIVEWIRE COMPONENT: COMMUNITY REVIEWS
        Motivo: Carregar depoimentos ("Load More"), ou submissão de novos reviews via formulário sem reload.
    -->
    <section id="community" class="py-24 bg-wood-900 text-wood-50 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/wood-pattern.png')] opacity-10"></div>
        
        <div class="container mx-auto px-6 relative z-10 livewire-dev-border rounded-xl p-6 border-white/20" data-component="<livewire:testimonials-section />">
            <div class="text-center mb-16">
                <h2 class="font-serif text-3xl md:text-4xl font-bold mb-4">A Mesa é Grande</h2>
                <p class="text-wood-200">Junte-se a mais de 10.000 cozinheiros apaixonados.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- <!-- @foreach($testimonials as $testimonial) --> --}}
                
                <div class="bg-wood-800 p-8 rounded-2xl border border-wood-700 relative">
                    <i data-lucide="quote" class="absolute top-4 right-4 text-wood-950 w-8 h-8 opacity-50"></i>
                    <p class="text-wood-100 mb-6 italic">
                        {{-- <!-- "{{ $testimonial->content }}" --> --}}
                        "A busca por ingredientes salvou meu jantar de domingo. Achei que só tinha ovos e farinha!"
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-light-400 flex items-center justify-center text-wood-950 font-bold text-xl">
                            {{-- <!-- {{ substr($testimonial->user->name, 0, 1) }} --> --}}
                            R
                        </div>
                        <div>
                            <h4 class="font-bold">Ricardo S.</h4>
                            <div class="flex text-light-400 text-xs">
                                <!-- Loop para estrelas -->
                                <i data-lucide="star" class="w-3 h-3 fill-current"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-current"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-current"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-current"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-current"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 (Exemplo) -->
                <div class="bg-wood-800 p-8 rounded-2xl border border-wood-700 relative mt-4 md:mt-0 shadow-xl shadow-wood-950/50 scale-105">
                    <i data-lucide="quote" class="absolute top-4 right-4 text-wood-950 w-8 h-8 opacity-50"></i>
                    <p class="text-wood-100 mb-6 italic">"O design desse site me dá fome! As receitas são super explicadas. Recomendo muito."</p>
                    <div class="flex items-center gap-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-12 h-12 rounded-full border-2 border-light-400">
                        <div>
                            <h4 class="font-bold">Ana Clara</h4>
                            <div class="flex text-light-400 text-xs">
                                <i data-lucide="star" class="w-3 h-3 fill-current"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-current"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-current"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-current"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-current"></i>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <!-- @endforeach --> --}}
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-wood-950 text-wood-300 py-12 border-t border-wood-900">
        <div class="container mx-auto px-6 text-center">
            <div class="flex justify-center items-center gap-2 mb-6 text-wood-50 opacity-80">
                <i data-lucide="chef-hat" class="w-8 h-8"></i>
                <span class="font-serif text-3xl font-bold">Sabores</span>
            </div>
            <p class="mb-8 max-w-md mx-auto text-sm">Cozinhando histórias e conectando pessoas através da comida de verdade. Feito com ❤️ e farinha.</p>
            <div class="text-xs text-wood-600">
                © 2024 Sabores App. Design Concept.
            </div>
        </div>
    </footer>

    <!-- 
        MODAL DE DETALHES (LIVEWIRE COMPONENT)
        Este modal deve ser um componente Livewire para carregar os detalhes da receita 
        de forma assíncrona quando o usuário clicar no grid.
        Ex: <livewire:recipe-modal />
        Ele ouviria um evento: $this->dispatch('open-modal', { recipeId: 1 });
    -->
    <div id="recipe-modal" class="fixed inset-0 z-[100] hidden livewire-dev-border" data-component="<livewire:recipe-modal />">
        <!-- Backdrop (Alpine: x-show="open") -->
        <div class="absolute inset-0 bg-wood-950/80 backdrop-blur-sm transition-opacity opacity-0" id="modal-backdrop"></div>
        
        <div class="absolute inset-0 overflow-y-auto">
            <div class="min-h-full flex items-center justify-center p-4">
                <!-- Panel (Alpine: x-show="open" @click.away="open = false") -->
                <div class="bg-white rounded-3xl w-full max-w-5xl shadow-2xl transform scale-95 opacity-0 transition-all duration-300 relative" id="modal-panel">
                    
                    <!-- Botão Fechar (wire:click="close") -->
                    <button onclick="closeModal()" class="absolute top-4 right-4 z-20 bg-white/50 hover:bg-white p-2 rounded-full text-wood-900 transition-colors backdrop-blur">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>

                    <!-- Conteúdo Populado via PHP Blade -->
                    <div id="modal-content">
                        <!-- Header Imagem -->
                        <div class="h-64 md:h-80 relative">
                            <!-- Imagem Dinâmica -->
                            <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover rounded-t-3xl">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-8 text-white">
                                <span class="bg-light-500 text-wood-950 px-3 py-1 rounded-full text-xs font-bold uppercase mb-3 inline-block">
                                    Jantar
                                </span>
                                <h2 class="font-serif text-3xl md:text-5xl font-bold">
                                    Risoto de Camarão Siciliano
                                </h2>
                            </div>
                        </div>

                        <!-- Corpo -->
                        <div class="p-8 grid md:grid-cols-3 gap-8">
                            <!-- Coluna Ingredientes -->
                            <div class="md:col-span-1 bg-wood-50 p-6 rounded-2xl h-fit">
                                <h3 class="font-serif font-bold text-wood-900 text-xl mb-4 border-b border-wood-200 pb-2">Ingredientes</h3>
                                <ul class="space-y-3 text-wood-700">
                                    {{-- <!-- @foreach($recipe->ingredients as $ingredient) --> --}}
                                    <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-light-400 mt-2"></span> Arroz Arbóreo</li>
                                    <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-light-400 mt-2"></span> Camarão</li>
                                    {{-- <!-- @endforeach --> --}}
                                </ul>
                            </div>

                            <!-- Coluna Preparo -->
                            <div class="md:col-span-2">
                                <div class="flex gap-6 mb-8 text-wood-600 text-sm font-medium border-b border-wood-100 pb-4">
                                    <span class="flex items-center gap-2"><i data-lucide="clock" class="w-5 h-5"></i> 45 min</span>
                                    <span class="flex items-center gap-2"><i data-lucide="users" class="w-5 h-5"></i> 4 Porções</span>
                                    <span class="flex items-center gap-2 text-light-500"><i data-lucide="star" class="w-5 h-5 fill-current"></i> 4.9</span>
                                </div>

                                <h3 class="font-serif font-bold text-wood-900 text-xl mb-6">Modo de Preparo</h3>
                                <div class="space-y-6 text-wood-800 leading-relaxed">
                                    {{-- <!-- @foreach($recipe->steps as $index => $step) --> --}}
                                    <div class="flex gap-4">
                                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-wood-200 text-wood-800 font-bold flex items-center justify-center">1</div>
                                        <p>Refogue a cebola na manteiga até ficar transparente.</p>
                                    </div>
                                    {{-- <!-- @endforeach --> --}}
                                </div>

                                <button class="mt-8 w-full bg-wood-800 hover:bg-wood-900 text-white py-4 rounded-xl font-bold shadow-lg transition-transform hover:scale-[1.01]">
                                    Salvar nos Favoritos
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Interface Básica (Modal Toggle) -->
    <!-- Em produção, substitua isso por Alpine.js: x-data="{ open: false }" -->
    <script>
        lucide.createIcons();

        // Lógica simples apenas para teste visual do modal
        const modal = document.getElementById('recipe-modal');
        const modalBackdrop = document.getElementById('modal-backdrop');
        const modalPanel = document.getElementById('modal-panel');

        function openModal(id) {
            // Em Livewire, aqui seria: Livewire.dispatch('openModal', { recipe: id })
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalBackdrop.classList.remove('opacity-0');
                modalPanel.classList.remove('opacity-0', 'scale-95');
                modalPanel.classList.add('opacity-100', 'scale-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            // Em Livewire: wire:click="close"
            modalBackdrop.classList.add('opacity-0');
            modalPanel.classList.remove('opacity-100', 'scale-100');
            modalPanel.classList.add('opacity-0', 'scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        }

        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-md', 'h-16');
                nav.classList.remove('h-20');
            } else {
                nav.classList.remove('shadow-md', 'h-16');
                nav.classList.add('h-20');
            }
        });
    </script>
    
    <style>
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
    </style>
</body>
</html>