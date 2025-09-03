 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vander Baptista de Lima - Portfólio</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-brand">Vander Baptista de Lima</div>
            <div class="nav-menu" id="nav-menu">
                <a href="#home" class="nav-link active">Inicio</a>
                <a href="#about" class="nav-link">Sobre</a>
                <a href="#experience" class="nav-link">Experiência</a>
                <a href="#certifications" class="nav-link">Certificados</a>
                <a href="#projects" class="nav-link">Projetos</a>
                <a href="#contact" class="nav-link">Contato</a>
            </div>
            <div class="nav-toggle" id="nav-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">
                        Olá.
                        <br><span class="highlight">Eu sou Vander</span>
                        <br><span class="subtitle">Analista de Qualidade</span>
                    </h1>
                    <p class="hero-description">
                        Comprometido com a qualidade, trabalho em equipe e entrega de soluções eficientes. 
                        Buscando contribuir em ambientes ágeis com foco na melhoria contínua.
                    </p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">Ver Projetos</a>
                        <a href="#contact" class="btn btn-secondary">Entrar em Contato</a>
                    </div>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/vander-baptista-de-lima" target="_blank" class="social-link">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/VanderKS300" target="_blank" class="social-link">
                            <i class="fab fa-github"></i>
                        </a>
                        <button onclick="copyEmail('vanderks300@gmail.com')" title="Copiar e-mail" class="social-icon">
                            <i class="fas fa-envelope" ></i>
                        </button>
                        <a href="tel:+5511963419096" class="social-link">
                            <i class="fas fa-phone"></i>
                        </a>
                    </div>
                    <div class="skills-tags">
                        <span class="skill-tag">Java</span>
                        <span class="skill-tag">Selenium</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">Node.js</span>
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">Git</span>
                        <span class="skill-tag">Jira</span>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-container">
                        <img src="vander-photo.jpg" alt="Vander Baptista de Lima" class="profile-image">
                        <div class="decorative-element element-1"></div>
                        <div class="decorative-element element-2"></div>
                        <div class="decorative-element element-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Sobre mim</h2>
                <p class="section-subtitle">
                    Profissional da área de QA com sólida base em Análise e Desenvolvimento de Sistemas
                </p>
            </div>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <span class="stat-number">+6</span>
                    </div>
                    <div class="stat-content">
                        <h3>Meses</h3>
                        <p>De experiência</p>
                    </div>
                    <div class="stat-description">
                        Na área de analise de sistemas.
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <span class="stat-number">+5</span>
                    </div>
                    <div class="stat-content">
                        <h3>Projetos</h3>
                        <p>Concluídos</p>
                    </div>
                    <div class="stat-description">
                        Projetos de automação e testes de software e desenvolvimento de sites pessoais.
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon green">
                        <span class="stat-number">95%</span>
                    </div>
                    <div class="stat-content">
                        <h3>Satisfação</h3>
                        <p>dos Clientes</p>
                    </div>
                    <div class="stat-description">
                        Comprometimento com qualidade e resultados.
                    </div>
                </div>
            </div>
            
            <div class="skills-section">
                <h3 class="skills-title">Competências Técnicas</h3>
                <div class="skills-grid">
                    <div class="skill-item">Java</div>
                    <div class="skill-item">Python</div>
                    <div class="skill-item">JavaScript</div>
                    <div class="skill-item">PHP</div>
                    <div class="skill-item">Node.js</div>
                    <div class="skill-item">HTML</div>
                    <div class="skill-item">CSS</div>
                    <div class="skill-item">Selenium</div>
                    <div class="skill-item">Postman</div>
                    <div class="skill-item">Robot</div>
                    <div class="skill-item">Cypress</div>
                    <div class="skill-item">Playwright</div>
                    <div class="skill-item">Jira</div>
                    <div class="skill-item">Git</div>
                    <div class="skill-item">SQL</div>
                    <div class="skill-item">MySQL</div>
                </div>
            </div>
            <!-- Escolaridade -->
            <div class="escolaridade">
                <div class="section-header">
                    <h3 class="skills-title">Escolaridade</h3>
                </div>
                <div class="experience-timeline">
                    <div class="experience-item">
                        <div class="experience-date">Jan 2025 - Atual</div>
                        <div class="experience-content">
                            <h4 class="experience-title">Analise e Desenvolvimento de Sistemas</h4>
                            <p class="experience-company">Centro Universitário FMU | FIAM-FAAM - São Paulo, SP</p>
                            <div class="experience-achievements">
                                <span class="project-status in-progress">Cursando</span>
                            </div>
                        </div>
                    </div>
                    <div class="experience-item">
                        <div class="experience-date">Jan 2016 - Dez 2017</div>
                        <div class="experience-content">
                            <h4 class="experience-title">Técnico em Eletrotécnica</h4>
                            <p class="experience-company">ETEC Centro Paula Souza - Mogi das Cruzes, SP</p>
                            <div class="experience-achievements">
                                <span class="achievement">Concluído</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Experiência Profissional -->
        <section id="experience" class="projects">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Experiência Profissional</h3>
                </div>

                <div class="experience-timeline">
                    <div class="experience-item">
                        <div class="experience-date">Fev 2025 - Atual</div>
                        <div class="experience-content">
                            <h4 class="experience-title">Analista de Qualidade de Software</h4>
                            <p class="experience-company">GUNTER QUALITY LTDA - São Paulo, SP</p>
                            <ul class="experience-responsibilities">
                                <li>Realização de testes de API, sistema, integração, regressão e funcionais em softwares web, mobile e desktop</li>
                                <li>Automação de testes utilizando Java, Selenium, NodeJS e JavaScript</li>
                                <li>Criação e execução de planos de testes, relatórios de bugs e documentação de processos</li>
                                <li>Realização de testes de qualidade E2E para impedir bugs</li>
                                <li>Colaboração com equipe de desenvolvimento para garantir a qualidade do software</li>
                            </ul>
                            <div class="experience-achievements">
                                <span class="achievement">Redução do número de bugs em produção</span>
                                <span class="achievement">Aumento na cobertura de testes automatizados</span>
                                <span class="achievement">Implementação de qualidade com todos do time</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="experience-item">
                        <div class="experience-date">Out 2022 - Jul 2024</div>
                        <div class="experience-content">
                            <h4 class="experience-title">Técnico de Campo</h4>
                            <p class="experience-company">BARAMAIA SERVIÇOS LTDA - Mogi das Cruzes, SP</p>
                            <ul class="experience-responsibilities">
                                <li>Suporte técnico e atendimento ao cliente com foco em soluções de problemas</li>
                                <li>Diagnóstico e análise de sistemas elétricos</li>
                                <li>Comunicação eficaz para resolução rápida de chamados</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="experience-item">
                        <div class="experience-date">Dez 2012 - Jul 2022</div>
                        <div class="experience-content">
                            <h4 class="experience-title">Repositor</h4>
                            <p class="experience-company">SUPERMERCADOS NAGUMO - Mogi das Cruzes, SP</p>
                            <ul class="experience-responsibilities">
                                <li>Reposição de mercadorias e organização de setor</li>
                                <li>Atendimento ao cliente e esclarecimento de dúvidas</li>
                                <li>Controle de estoque e validade dos produtos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <!-- Certificações -->
        <section id="certifications" class="about">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Certificações</h3>
                </div>

                <div class="certifications-grid">
                    <div class="certification-card">
                        <div class="certification-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4 class="certification-title">Inglês Básico</h4>
                        <p class="certification-provider">Edune Curso (60 horas)</p>
                        <a href="https://www.edunecursos.com.br/ava/certificado/novo/MjIwMzUw" class="btn btn-secondary btn-small" class="certification-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                            Ver Certificado
                        </a>
                    </div>
                    
                    <div class="certification-card">
                        <div class="certification-icon">
                            <i class="fas fa-bug"></i>
                        </div>
                        <h4 class="certification-title">Curso de Testes de Software</h4>
                        <p class="certification-provider">Udemy (10 horas)</p>
                        <a href="https://www.udemy.com/certificate/UC-e1d9a7e4-d19b-47fb-93d7-230c1fc1e634/" class="btn btn-secondary btn-small" class="certification-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                            Ver Certificado
                        </a>
                    </div>
                    
                    <div class="certification-card">
                        <div class="certification-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h4 class="certification-title">Teste de Software Manual</h4>
                        <p class="certification-provider">Udemy (18 horas)</p>
                        <a href="https://udemy-certificate.s3.amazonaws.com/pdf/UC-59b3aba9-1ac7-47c4-8c27-3875010ef899.pdf" class="btn btn-secondary btn-small" class="certification-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                            Ver Certificado
                        </a>
                    </div>
                    
                    <div class="certification-card">
                        <div class="certification-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4 class="certification-title">Guia Inicial em Teste de Software</h4>
                        <p class="certification-provider">Udemy (4 horas)</p>
                        <a href="https://www.udemy.com/certificate/UC-4e04d1f8-578f-4ab6-96b8-7835fdec4238/" class="btn btn-secondary btn-small" class="certification-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                            Ver Certificado
                        </a>
                    </div>
                    
                    <div class="certification-card">
                        <div class="certification-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h4 class="certification-title">Testes de Software Automáticos</h4>
                        <p class="certification-provider">Udemy (5 horas)</p>
                        <a href="https://www.udemy.com/certificate/UC-dea76950-9636-4753-ab10-42f5bf874393/?utm_campaign=email&utm_medium=email&utm_source=sendgrid.com" class="btn btn-secondary btn-small" class="certification-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                            Ver Certificado
                        </a>
                    </div>
                    
                    <div class="certification-card">
                        <div class="certification-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h4 class="certification-title">Informática Avançada</h4>
                        <p class="certification-provider">Edune Cursos (80 horas)</p>
                        <a href="https://www.edunecursos.com.br/ava/certificado/novo/MjIwNDQx" target="_blank" class="btn btn-secondary btn-small" class="certification-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                            Ver Certificado
                        </a>
                    </div>
                    
                    <div class="certification-card">
                        <div class="certification-icon">
                            <i class="fab fa-java"></i>
                        </div>
                        <h4 class="certification-title">Java na Prática - Códigos</h4>
                        <p class="certification-provider">Edune Cursos (60 horas)</p>
                        <a href="https://www.edunecursos.com.br/ava/certificado/novo/MjEyMDYy" target="_blank" class="btn btn-secondary btn-small" class="certification-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                            Ver Certificado
                        </a>
                    </div>

                    <div class="certification-card">
                        <div class="certification-icon">
                            <i class="fab fa-python"></i>
                        </div>
                        <h4 class="certification-title">Python 3 do Básico ao Avançado</h4>
                        <p class="certification-provider">Udemy (141 horas)</p>
                        <a href="#" target="_blank" class="btn btn-secondary btn-small" class="certification-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                            Ver Certificado
                        </a>
                    </div>
                    
                     <div class="certification-card">
                        <div class="certification-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h4 class="certification-title">Analista de Marketing</h4>
                        <p class="certification-provider">FMU (10 horas)</p>
                        <a href="https://static.certificates.grupoa.education/fmu/fmu_levelup/f1c8c0f4-1c63-48d2-be50-8861f05ecd3a/f5cce8fa-a1fa-4eae-85ab-9876d34d58d5-certificado-cursos-livres.pdf" target="_blank" class="btn btn-secondary btn-small" class="certification-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                            Ver Certificado
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Projetos</h2>
                <p class="section-subtitle">
                    Alguns dos meus projetos acadêmicos pessoais que desenvolvi
                </p>
            </div>
            
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-header">
                        <h3 class="project-title">CondoTest</h3>
                        <span class="project-status planned">Planejando</span>
                    </div>
                    <p class="project-description">
                        Sistema web desenvolvido para controle de condomínios, com foco em organização, praticidade e visual moderno. Permite gerenciar moradores, unidades e finanças de forma eficiente e acessível.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">HTML/ CSS</span>
                        <span class="tech-tag">Python</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">SQL</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/vanderbaptista/api-testing-framework" target="_blank" class="project-link">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="#" class="project-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i>
                            <span>Ver Site</span>
                        </a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-header">
                        <h3 class="project-title">Vander Store</h3>
                        <span class="project-status in-progress">Em andamento</span>
                    </div>
                    <p class="project-description">
                       Sistema web funcional com visual simples e navegação intuitiva, focado no cadastro e gestão de clientes. Demonstra minha habilidade em criar soluções sob medida com boas práticas e usabilidade.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">HTML/CSS</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/VanderKS300" target="_blank" class="project-link">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="https://vendas01.infinityfreeapp.com/?i=1#" target="_blank" class="project-link">
                            <i class="fas fa-external-link-alt"></i>
                            <span>Ver Site</span>
                        </a>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-header">
                        <h3 class="project-title">Oficina Surf Car</h3>
                        <span class="project-status completed">Concluído</span>
                    </div>
                    <p class="project-description">
                        Criação de dashboard para monitoramento de métricas de qualidade e cobertura de testes em tempo real.
                    </p>
                    <div class="project-tech">
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">HTML/CSS</span>
                            <span class="tech-tag">MySQL</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/VanderKS300" target="_blank" class="project-link">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="https://vendas1.infinityfreeapp.com/?i=1" class="project-link" target="_blank">
                            <i class="fas fa-chart-bar"></i>
                            <span>Preview</span>
                        </a>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-header">
                        <h3 class="project-title">FinanceHub</h3>
                        <span class="project-status in-progress">Em andamento</span>
                    </div>
                    <p class="project-description">
                        Projeto web para controle financeiro pessoal, com interface intuitiva e foco em usabilidade. Permite organizar e visualizar entradas e saídas de forma simples e objetiva.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">PHP</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/VanderKS300" target="_blank" class="project-link">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="https://vnd300.free.nf/?i=1" target="_blank" class="project-link">
                            <i class="fas fa-external-link-alt"></i>
                            <span>Ver Site</span>
                        </a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-header">
                        <h3 class="project-title">Oficina Yamasystem</h3>
                        <span class="project-status completed">Concluído</span>
                    </div>
                    <p class="project-description">
                        Sistema web para gerenciamento de assistências técnicas, com foco em controle de ordens de serviço, clientes e produtos. Interface simples, eficiente e voltada à organização do atendimento.
                    </p>
                    <div class="project-tech">
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">HTML/CSS</span>
                            <span class="tech-tag">MySQL</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/VanderKS300" target="_blank" class="project-link">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="https://yamasystem.web1337.net/?i=1" class="project-link">
                            <i class="fas fa-chart-bar"></i>
                            <span>Preview</span>
                        </a>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-header">
                        <h3 class="project-title">Calculadora de Testes</h3>
                        <span class="project-status planned">Planejando</span>
                    </div>
                    <p class="project-description">
                        Aplicação web para calcular métricas de cobertura de testes e estimativas de tempo para execução de suítes de teste.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/vanderbaptista/test-calculator" target="_blank" class="project-link">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="#" class="project-link">
                            <i class="fas fa-calculator"></i>
                            <span>Usar App</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Entre em Contato</h2>
                <p class="section-subtitle">
                    Estou sempre aberto a novas oportunidades, colaborações e sugestões de melhorias
                </p>
            </div>
            
            <div class="contact-grid">
                <div class="contact-card">
                    <button onclick="copyEmail('vanderks300@gmail.com')" title="Copiar e-mail" class="contact-icon">
                        <i class="fas fa-envelope" style="color: white;"></i>
                    </button>
                    
                    <h3>Email</h3>
                    <p>vanderks300@gmail.com</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon blue">
                        <a href="tel:+5511963419096" class= "social-link-footer">
                            <i class="fas fa-phone"></i>
                        </a>
                    </div>
                    <h3>Telefone</h3>
                    <p>(11) 96341-9096</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon green">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Localização</h3>
                    <p>Mogi das Cruzes, SP</p>
                </div>
            </div>
            
            <div class="download-cv">
                <a href="https://drive.google.com/uc?export=download&id=1cB_l_du6AXEpYN8A6AyOADIqYXBMoC-Y" target="_blank" class="btn btn-primary">
                    <i class="fas fa-download"></i>
                    Baixar Currículo
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Vander Baptista de Lima. Todos os direitos reservados.</p>
        </div>
        <div>
            <?php include 'contador.php'; ?>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html