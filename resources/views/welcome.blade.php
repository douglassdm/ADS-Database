<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma de ADS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f8fafc;
            color: #1a1a1a;
        }

        /* Novo estilo do navbar */
        .navbar {
            background: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.04);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #007BFF;
            text-decoration: none;
        }

        /* Hero section */
        .hero {
            background: white;
            padding: 8rem 2rem 4rem;
            text-align: left;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #007BFF, #00BFFF);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.2rem;
            color: #64748b;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            padding: 2rem;
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        }

        .stat-item {
            text-align: left;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #007BFF;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #64748b;
            font-size: 0.9rem;
        }

        /* Melhorias na busca */
        .search-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
        }

        .search-wrapper {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            position: relative;
            max-width: 600px;
            margin: 0 auto;
        }

        .search-input {
            width: 100%;
            padding: 1.2rem 3rem 1.2rem 1.5rem;
            border: none;
            border-radius: 1rem;
            font-size: 1rem;
            color: #1a1a1a;
        }

        .search-input:focus {
            outline: none;
        }

        /* Cards container */
        .alunos-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        /* Estilos atualizados para os cards */
        .aluno-card {
            background: white;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .aluno-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .aluno-foto-container {
            height: 200px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #007BFF, #00BFFF);
        }

        .aluno-foto {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .aluno-card:hover .aluno-foto {
            transform: scale(1.05);
        }

        .foto-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5em;
            color: rgba(255, 255, 255, 0.9);
            background: linear-gradient(135deg, #007BFF, #00BFFF);
        }

        .card-content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            flex: 1;
        }

        .action-button {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #007BFF;
            text-decoration: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(4px);
        }

        .action-button:hover {
            background: #007BFF;
            color: white;
            transform: rotate(45deg);
        }

        .info-item.nome {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1a1a1a;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .info-item.nome svg {
            width: 20px;
            height: 20px;
            fill: #007BFF;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 0.5rem;
        }

        .skill-tag {
            width: 36px;
            height: 36px;
            background: #f8fafc;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            position: relative;
        }

        .skill-tag:hover {
            transform: translateY(-3px);
            background: #007BFF;
        }

        .skill-tag:hover svg {
            fill: white;
        }

        .skill-tag::before {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(-5px);
            padding: 0.5rem 0.75rem;
            background: #1a1a1a;
            color: white;
            font-size: 0.75rem;
            border-radius: 8px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            white-space: nowrap;
            pointer-events: none;
            z-index: 10;
        }

        .skill-tag:hover::before {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(-10px);
        }

        .skill-icon {
            width: 20px;
            height: 20px;
            transition: all 0.3s ease;
        }

        .empty-message {
            text-align: center;
            padding: 4rem 2rem;
            color: #64748b;
            font-size: 1.1rem;
            grid-column: 1 / -1;
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        }

        /* Ajustes responsivos para os cards */
        @media (max-width: 640px) {
            .alunos-container {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                padding: 1rem;
                gap: 1rem;
            }

            .aluno-foto-container {
                height: 180px;
            }

            .card-content {
                padding: 1rem;
            }

            .info-item.nome {
                font-size: 1.1rem;
            }
        }

        /* Responsividade */
        @media (max-width: 1024px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }

            .hero-text {
                margin: 0 auto;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-stats {
                max-width: 600px;
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 6rem 1rem 3rem;
            }

            .hero-stats {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .stat-item {
                text-align: center;
            }
        }

        /* Estilos do Modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            padding: 20px;
        }

        .modal {
            background: white;
            border-radius: 24px;
            width: 100%;
            max-width: 600px;
            position: relative;
            overflow: hidden;
        }

        .modal-header {
            position: relative;
            height: 200px;
            background: linear-gradient(135deg, #007BFF, #00BFFF);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .modal-close:hover {
            background: #ff4444;
            color: white;
            transform: rotate(90deg);
        }

        .modal-content {
            padding: 2rem;
        }

        .modal-name {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .modal-info {
            display: grid;
            gap: 1.5rem;
        }

        .info-section {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .info-section h3 {
            font-size: 1rem;
            color: #64748b;
            font-weight: 500;
        }

        .modal-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .modal-skill-tag {
            padding: 0.5rem 1rem;
            background: #f8fafc;
            border-radius: 12px;
            font-size: 0.9rem;
            color: #1a1a1a;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .modal-skill-tag:hover {
            background: #007BFF;
            color: white;
            transform: translateY(-2px);
        }

        .modal-skill-tag svg {
            width: 20px;
            height: 20px;
        }

        .modal.active {
            animation: modalIn 0.3s ease forwards;
        }

        @keyframes modalIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-company {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #1a1a1a;
            font-weight: 500;
        }

        .modal-company svg {
            width: 20px;
            height: 20px;
            fill: #007BFF;
        }

        /* Animações para o Hero */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes floatStats {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Animação do gradiente de fundo */
        @keyframes gradientFlow {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Aplicar animações aos elementos */
        .hero-text h1 {
            animation: fadeInUp 0.8s ease-out;
        }

        .hero-text p {
            animation: fadeInUp 0.8s ease-out 0.2s backwards;
        }

        .hero-stats {
            animation: fadeInUp 0.8s ease-out 0.4s backwards;
        }

        .stat-item {
            animation: floatStats 6s ease-in-out infinite;
        }

        .stat-item:nth-child(2) {
            animation-delay: -2s;
        }

        .stat-item:nth-child(3) {
            animation-delay: -4s;
        }

        /* Animação do navbar ao scroll */
        .navbar {
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }

        /* Animação para os cards */
        .aluno-card {
            animation: fadeInUp 0.5s ease-out backwards;
        }

        @media (prefers-reduced-motion: no-preference) {
            .alunos-container {
                --stagger: 0.1s;
            }

            .aluno-card {
                animation-delay: calc(var(--stagger) * var(--i, 0));
            }
        }

        /* Animação do botão de pesquisa */
        .search-wrapper {
            transition: all 0.3s ease;
        }

        .search-wrapper:focus-within {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(0, 123, 255, 0.1);
        }

        /* Animação para skills no hover */
        .skill-tag {
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .skill-tag:hover {
            transform: scale(1.2) translateY(-5px);
        }

        /* Animação do modal */
        @keyframes modalScaleIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .modal.active {
            animation: modalScaleIn 0.4s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        /* Efeito de gradiente animado no header do modal */
        .modal-header {
            background: linear-gradient(135deg, #007BFF, #00BFFF, #0056b3);
            background-size: 200% 200%;
            animation: gradientFlow 15s ease infinite;
        }

        .contact-info {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 1rem;
            margin: 0.5rem 0;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: #f8fafc;
            flex: 1;
        }

        .contact-item:hover {
            background: rgba(0, 123, 255, 0.1);
            transform: translateY(-2px);
        }

        .contact-item svg {
            width: 20px;
            height: 20px;
            fill: #007BFF;
        }

        .contact-item a {
            color: inherit;
            text-decoration: none;
        }

        .contact-item a:hover {
            text-decoration: underline;
        }

        @media (max-width: 640px) {
            .contact-info {
                flex-direction: column;
                gap: 0.5rem;
            }

            .contact-item {
                width: 100%;
            }
        }
    </style>



</head>

<body>
    <nav class="navbar">
        <div class="nav-content">
            <a href="/" class="logo">ADS</a>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Descubra talentos em tecnologia</h1>
                <p>Conheça os futuros profissionais de Análise e Desenvolvimento de Sistemas e suas habilidades técnicas</p>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-number">{{ count($alunos) }}</div>
                    <div class="stat-label">Alunos</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">{{ $alunos->pluck('skills')->flatten()->unique('id')->count() }}</div>
                    <div class="stat-label">Skills Diferentes</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">{{ $alunos->pluck('skills')->flatten()->count() }}</div>
                    <div class="stat-label">Skills Totais</div>
                </div>
            </div>
        </div>
    </section>

    <div class="search-container">
        <div class="search-wrapper">
            <input type="text"
                id="searchInput"
                placeholder="Busque por nome ou habilidade técnica..."
                class="search-input">
        </div>
    </div>

    <div class="alunos-container">
        @forelse($alunos as $aluno)
        <div class="aluno-card">
            <div class="aluno-foto-container">
                @if($aluno->image)
                <img src="{{ asset('storage/' . $aluno->image) }}"
                    alt="Foto de {{ $aluno->name }}"
                    class="aluno-foto">
                @else
                <div class="foto-placeholder">
                    <span>{{ strtoupper(substr($aluno->name, 0, 2)) }}</span>
                </div>
                @endif
            </div>

            <div class="card-content">
                <div class="aluno-data" style="display: none;">
                    <div class="aluno-description">{{ $aluno->description }}</div>
                    <div class="aluno-company">{{ $aluno->company }}</div>
                    <div class="aluno-email">{{ $aluno->email }}</div>
                    <div class="aluno-telefone">{{ $aluno->telefone }}</div>
                    <div class="aluno-github">{{ $aluno->github }}</div>
                </div>

                <a href="#" class="action-button">
                    <svg style="width: 16px; height: 16px; margin: 0;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>

                <div class="info-item nome">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                    {{ $aluno->name }}
                </div>

                <div class="info-item">
                    <div class="skills-list">
                        @forelse($aluno->skills as $skill)
                        <div class="skill-tag" data-tooltip="{{ $skill->name }}">
                            @switch(strtolower($skill->name))
                            @case('html')
                            <x-skills.html />
                            @break
                            @case('css')
                            <x-skills.css />
                            @break
                            @case('javascript')
                            <x-skills.javascript />
                            @break
                            @case('typescript')
                            <x-skills.typescript />
                            @break
                            @case('php')
                            <x-skills.php />
                            @break
                            @case('python')
                            <x-skills.python />
                            @break
                            @case('java')
                            <x-skills.java />
                            @break
                            @case('c#')
                            <x-skills.csharp />
                            @break
                            @case('ruby')
                            <x-skills.ruby />
                            @break
                            @case('go')
                            <x-skills.go />
                            @break
                            @case('swift')
                            <x-skills.swift />
                            @break
                            @case('kotlin')
                            <x-skills.kotlin />
                            @break
                            @case('react')
                            <x-skills.react />
                            @break
                            @case('vuejs')
                            <x-skills.vuejs />
                            @break
                            @case('angular')
                            <x-skills.angular />
                            @break
                            @case('tailwind')
                            <x-skills.tailwind />
                            @break
                            @case('bootstrap')
                            <x-skills.bootstrap />
                            @break
                            @case('laravel')
                            <x-skills.laravel />
                            @break
                            @case('nodejs')
                            <x-skills.nodejs />
                            @break
                            @case('django')
                            <x-skills.django />
                            @break
                            @case('spring')
                            <x-skills.spring />
                            @break
                            @case('express')
                            <x-skills.express />
                            @break
                            @case('express')
                            <x-skills.express />
                            @break
                            @case('flask')
                            <x-skills.flask />
                            @break
                            @case('mysql')
                            <x-skills.mysql />
                            @break
                            @case('postgresql')
                            <x-skills.postgresql />
                            @break
                            @case('mongodb')
                            <x-skills.mongodb />
                            @break
                            @case('redis')
                            <x-skills.redis />
                            @break
                            @case('sqlite')
                            <x-skills.sqlite />
                            @break
                            @case('oracle')
                            <x-skills.oracle />
                            @break
                            @case('sqlserver')
                            <x-skills.sqlserver />
                            @break
                            @case('docker')
                            <x-skills.docker />
                            @break
                            @case('kubernetes')
                            <x-skills.kubernetes />
                            @break
                            @case('aws')
                            <x-skills.aws />
                            @break
                            @case('azure')
                            <x-skills.azure />
                            @break
                            @case('linux')
                            <x-skills.linux />
                            @break
                            @case('git')
                            <x-skills.git />
                            @break
                            @case('reactnative')
                            <x-skills.reactnative />
                            @break
                            @case('flutter')
                            <x-skills.flutter />
                            @break
                            @case('ionic')
                            <x-skills.ionic />
                            @break
                            @case('graphql')
                            <x-skills.graphql />
                            @break
                            @case('firebase')
                            <x-skills.firebase />
                            @break
                            @case('wordpress')
                            <x-skills.wordpress />
                            @break
                            @case('figma')
                            <x-skills.figma />
                            @break
                            @default
                            <span>{{ strtoupper(substr($skill->name, 0, 2)) }}</span>
                            @endswitch
                        </div>
                        @empty
                        <div class="skill-tag" data-tooltip="Nenhuma skill cadastrada">
                            <span>-</span>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="empty-message">
            <p>Nenhum aluno cadastrado ainda.</p>
            <p>Seja o primeiro a se cadastrar!</p>
        </div>
        @endforelse
    </div>

    <!-- Adicionar um footer simples -->
    <footer style="text-align: center; padding: 40px 20px; opacity: 0.7; font-size: 0.9em;">
        <p>© {{ date('Y') }} Turma ADS - Todos os direitos reservados</p>
    </footer>

    <!-- Modal Template -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal">
            <button class="modal-close" onclick="closeModal()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg>
            </button>
            <div class="modal-header" id="modalHeader">
                <!-- Imagem ou placeholder será inserido aqui via JavaScript -->
            </div>
            <div class="modal-content">
                <div class="modal-name" id="modalName">
                    <!-- Nome será inserido aqui -->
                </div>
                <div class="modal-info">
                    <div class="info-section">
                        <p id="modalAbout"></p>
                    </div>
                    <div class="info-section">
                        <h3>Contato</h3>
                        <div class="contact-info">
                            <div class="contact-item" id="modalEmail"></div>
                            <div class="contact-item" id="modalTelefone"></div>
                            <div class="contact-item" id="modalGithub"></div>
                        </div>
                    </div>
                    <div class="info-section">
                        <h3>Empresa</h3>
                        <p id="modalCompany" class="modal-company"></p>
                    </div>
                    <div class="info-section">
                        <h3>Habilidades Técnicas</h3>
                        <div class="modal-skills" id="modalSkills">
                            <!-- Skills serão inseridas aqui -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const cards = document.querySelectorAll('.aluno-card');

            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();

                cards.forEach(card => {
                    const name = card.querySelector('.info-item.nome').textContent.toLowerCase();
                    const skills = Array.from(card.querySelectorAll('.skill-tag'))
                        .map(skill => skill.getAttribute('data-tooltip').toLowerCase());

                    const matchesSearch = name.includes(searchTerm) ||
                        skills.some(skill => skill.includes(searchTerm));

                    card.style.display = matchesSearch ? 'block' : 'none';
                });

                // Mostrar ou esconder mensagem quando não houver resultados
                const visibleCards = Array.from(cards).filter(card => card.style.display !== 'none');
                const emptyMessage = document.querySelector('.empty-message');

                if (visibleCards.length === 0) {
                    if (!emptyMessage) {
                        const message = document.createElement('div');
                        message.className = 'empty-message';
                        message.innerHTML = '<p>Nenhum resultado encontrado.</p>';
                        document.querySelector('.alunos-container').appendChild(message);
                    }
                } else {
                    if (emptyMessage) {
                        emptyMessage.remove();
                    }
                }
            });

            // Adicionar listeners para os botões de ação
            document.querySelectorAll('.action-button').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const card = this.closest('.aluno-card');
                    openModal(card);
                });
            });

            // Fechar modal quando clicar fora
            document.getElementById('modalOverlay').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });

            // Fechar modal com tecla ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            });

            // Adicionar índices para animação staggered dos cards
            document.querySelectorAll('.aluno-card').forEach((card, index) => {
                card.style.setProperty('--i', index);
            });

            // Animação do navbar no scroll
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Animação suave ao clicar em links internos
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });

        function openModal(alunoCard) {
            const modalOverlay = document.getElementById('modalOverlay');
            const modal = modalOverlay.querySelector('.modal');
            const modalHeader = document.getElementById('modalHeader');
            const modalName = document.getElementById('modalName');
            const modalAbout = document.getElementById('modalAbout');
            const modalCompany = document.getElementById('modalCompany');
            const modalSkills = document.getElementById('modalSkills');

            // Pegar informações do card
            const name = alunoCard.querySelector('.info-item.nome').textContent.trim();
            const description = alunoCard.querySelector('.aluno-description').textContent;
            const company = alunoCard.querySelector('.aluno-company').textContent;
            const imageContainer = alunoCard.querySelector('.aluno-foto-container').cloneNode(true);
            const skills = alunoCard.querySelectorAll('.skill-tag');

            // Pegar informações adicionais do card
            const email = alunoCard.querySelector('.aluno-data .aluno-email').textContent;
            const telefone = alunoCard.querySelector('.aluno-data .aluno-telefone').textContent;
            const github = alunoCard.querySelector('.aluno-data .aluno-github').textContent;

            // Atualizar modal header
            modalHeader.innerHTML = '';
            modalHeader.appendChild(imageContainer.firstElementChild);

            // Atualizar nome
            modalName.innerHTML = `
                <svg viewBox="0 0 24 24" width="24" height="24" fill="#007BFF">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                ${name}
            `;

            // Atualizar descrição
            modalAbout.textContent = description || 'Estudante de Análise e Desenvolvimento de Sistemas na Uninassau.';

            // Atualizar empresa
            modalCompany.innerHTML = company ? `
                <svg viewBox="0 0 24 24">
                    <path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/>
                </svg>
                ${company}
            ` : 'Não informada';

            // Atualizar skills
            modalSkills.innerHTML = '';
            skills.forEach(skill => {
                const skillClone = skill.cloneNode(true);
                skillClone.className = 'modal-skill-tag';
                modalSkills.appendChild(skillClone);
            });

            // Atualizar email
            document.getElementById('modalEmail').innerHTML = email ? `
                <svg viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                <a href="mailto:${email}">E-mail</a>
            ` : '';

            // Atualizar telefone - Modificado para WhatsApp
            document.getElementById('modalTelefone').innerHTML = telefone ? `
                <svg viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                <a href="https://wa.me/${formatPhoneNumber(telefone)}" target="_blank" rel="noopener noreferrer">
                    
                    Whatsapp
                </a>
            ` : '';

            // Atualizar GitHub
            document.getElementById('modalGithub').innerHTML = github ? `
                <svg viewBox="0 0 24 24">
                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                </svg>
                <a href="${github.startsWith('http') ? github : 'https://' + github}" target="_blank" rel="noopener noreferrer">
                    GitHub
                </a>
            ` : '';

            // Mostrar modal com animação
            modalOverlay.classList.add('active');
            modal.classList.add('active');
        }

        function closeModal() {
            const modalOverlay = document.getElementById('modalOverlay');
            const modal = modalOverlay.querySelector('.modal');

            modal.classList.remove('active');
            modalOverlay.classList.remove('active');
        }

        // Adicionar função para formatar o número de telefone para o WhatsApp
        function formatPhoneNumber(phone) {
            // Remove todos os caracteres não numéricos
            const numbers = phone.replace(/\D/g, '');
            
            // Se começar com 0, remove o 0
            const withoutLeadingZero = numbers.replace(/^0+/, '');
            
            // Se não começar com 55 (código do Brasil), adiciona
            return withoutLeadingZero.startsWith('55') ? withoutLeadingZero : `55${withoutLeadingZero}`;
        }
    </script>
</body>

</html>