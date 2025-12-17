<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clínica Moderna - Portal de Acesso">
    <title>Clínica Moderna - Acesso ao Sistema</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #0066cc;
            --primary-dark: #0052a3;
            --success-color: #10b981;
            --gradient-primary: linear-gradient(135deg, #0066cc 0%, #004d99 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-container {
            max-width: 1200px;
            width: 100%;
        }
        
        .brand-section {
            text-align: center;
            margin-bottom: 3rem;
            color: white;
        }
        
        .brand-logo {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }
        
        .brand-section h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .brand-section p {
            font-size: 1.1rem;
            opacity: 0.95;
        }
        
        .access-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .access-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .access-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: var(--gradient-primary);
        }
        
        .access-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.4);
        }
        
        .card-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin-bottom: 1.5rem;
        }
        
        .access-card h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.5rem;
            color: #1a2332;
            margin-bottom: 0.5rem;
        }
        
        .access-card p {
            color: #6b7785;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }
        
        .features-list {
            list-style: none;
            padding: 0;
            margin-bottom: 2rem;
        }
        
        .features-list li {
            padding: 0.5rem 0;
            color: #4a5568;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .features-list i {
            color: var(--success-color);
            font-size: 1rem;
        }
        
        .btn-access {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .btn-primary-custom {
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 4px 15px rgba(0, 102, 204, 0.3);
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 102, 204, 0.4);
        }
        
        .btn-outline-custom {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }
        
        .btn-outline-custom:hover {
            background: var(--primary-color);
            color: white;
        }
        
        .info-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 2rem;
            margin-top: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }
        
        .info-section h4 {
            font-family: 'Poppins', sans-serif;
            color: #1a2332;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }
        
        .info-icon {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
        }
        
        .info-content h5 {
            font-size: 1rem;
            font-weight: 600;
            color: #1a2332;
            margin-bottom: 0.25rem;
        }
        
        .info-content p {
            font-size: 0.9rem;
            color: #6b7785;
            margin: 0;
        }
        
        .footer-text {
            text-align: center;
            color: white;
            margin-top: 3rem;
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        @media (max-width: 768px) {
            .brand-section h1 {
                font-size: 2rem;
            }
            
            .access-cards {
                grid-template-columns: 1fr;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
            }
        }
        
        /* Modal Customizado */
        .modal-content {
            border-radius: 20px;
            border: none;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        
        .modal-header {
            border-bottom: 1px solid #e8ecf2;
            padding: 1.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 20px 20px 0 0;
        }
        
        .modal-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        
        .modal-body {
            padding: 2rem;
        }
        
        .form-label {
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 0.5rem;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(0, 102, 204, 0.15);
        }
        
        .btn-close {
            filter: brightness(0) invert(1);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Brand Section -->
        <div class="brand-section">
            <div class="brand-logo">
                <i class="bi bi-heart-pulse-fill"></i>
            </div>
            <h1>Clínica Moderna</h1>
            <p>Sistema Integrado de Gestão em Saúde</p>
        </div>

        <!-- Access Cards -->
        <div class="access-cards">
            <!-- Card Paciente -->
            <div class="access-card">
                <div class="card-icon">
                    <i class="bi bi-person-fill"></i>
                </div>
                <h3>Área do Paciente</h3>
                <p>Acesse seus agendamentos, exames e histórico médico</p>
                
                <ul class="features-list">
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Agendar consultas online
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Visualizar resultados de exames
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Acessar prontuário médico
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Histórico de consultas
                    </li>
                </ul>
                
                <button class="btn-access btn-primary-custom" onclick="openLoginModal('paciente')">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Acessar como Paciente
                </button>
                
                <div class="mt-3 text-center">
                    <small class="text-muted">Não tem cadastro?</small>
                    <a href="#" class="text-decoration-none ms-1" onclick="openRegisterModal('paciente')">
                        <strong>Cadastre-se aqui</strong>
                    </a>
                </div>
            </div>

            <!-- Card Médico -->
            <div class="access-card">
                <div class="card-icon">
                    <i class="bi bi-file-medical-fill"></i>
                </div>
                <h3>Área Médica</h3>
                <p>Portal exclusivo para profissionais de saúde</p>
                
                <ul class="features-list">
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Gerenciar agenda de atendimentos
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Acessar prontuários eletrônicos
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Emitir receitas e atestados
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Dashboard de indicadores
                    </li>
                </ul>
                
                <button class="btn-access btn-outline-custom" onclick="openLoginModal('medico')">
                    <i class="bi bi-shield-lock-fill"></i>
                    Acesso Profissional
                </button>
            </div>
        </div>

        <!-- Info Section -->
        <div class="info-section">
            <h4>
                <i class="bi bi-info-circle-fill text-primary"></i>
                Por que escolher a Clínica Moderna?
            </h4>
            
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <div class="info-content">
                        <h5>Disponível 24/7</h5>
                        <p>Acesse seus dados a qualquer hora, de qualquer lugar</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="info-content">
                        <h5>Segurança Total</h5>
                        <p>Seus dados protegidos com criptografia de ponta</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="info-content">
                        <h5>Suporte Dedicado</h5>
                        <p>Equipe pronta para ajudar você</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <div class="info-content">
                        <h5>Prontuário Digital</h5>
                        <p>Histórico completo sempre à mão</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-text">
            <p>&copy; 2024 Clínica Moderna. Todos os direitos reservados.</p>
            <p class="mt-2">
                <a href="#" class="text-white text-decoration-none me-3">Termos de Uso</a>
                <a href="#" class="text-white text-decoration-none me-3">Política de Privacidade</a>
                <a href="#" class="text-white text-decoration-none">Contato</a>
            </p>
        </div>
    </div>

    <!-- Modal Login Paciente -->
    <div class="modal fade" id="loginModalPaciente" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-person-fill me-2"></i>
                        Login - Área do Paciente
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="dashboard_paciente.php" method="POST">
                        <div class="mb-3">
                            <label for="cpfPaciente" class="form-label">
                                <i class="bi bi-card-text me-1"></i>
                                CPF
                            </label>
                            <input type="text" class="form-control form-control-lg" id="cpfPaciente" name="cpf" placeholder="000.000.000-00" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="senhaPaciente" class="form-label">
                                <i class="bi bi-lock-fill me-1"></i>
                                Senha
                            </label>
                            <input type="password" class="form-control form-control-lg" id="senhaPaciente" name="senha" placeholder="Digite sua senha" required>
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="lembrarPaciente">
                            <label class="form-check-label" for="lembrarPaciente">
                                Lembrar-me
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Entrar
                        </button>
                        
                        <div class="text-center">
                            <a href="#" class="text-decoration-none">Esqueci minha senha</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Login Médico -->
    <div class="modal fade" id="loginModalMedico" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-shield-lock-fill me-2"></i>
                        Login - Área Médica
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="dashboard_medico.php" method="POST">
                        <div class="mb-3">
                            <label for="crmMedico" class="form-label">
                                <i class="bi bi-award me-1"></i>
                                CRM
                            </label>
                            <input type="text" class="form-control form-control-lg" id="crmMedico" name="crm" placeholder="Digite seu CRM" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="senhaMedico" class="form-label">
                                <i class="bi bi-lock-fill me-1"></i>
                                Senha
                            </label>
                            <input type="password" class="form-control form-control-lg" id="senhaMedico" name="senha" placeholder="Digite sua senha" required>
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="lembrarMedico">
                            <label class="form-check-label" for="lembrarMedico">
                                Lembrar-me
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Acessar Sistema
                        </button>
                        
                        <div class="text-center">
                            <a href="#" class="text-decoration-none">Recuperar acesso</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cadastro Paciente -->
    <div class="modal fade" id="registerModalPaciente" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-person-plus-fill me-2"></i>
                        Cadastro de Novo Paciente
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="cadastro_paciente.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nomeCompleto" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nomeCompleto" name="nome" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="cpfCadastro" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpfCadastro" name="cpf" placeholder="000.000.000-00" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" id="dataNascimento" name="data_nascimento" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="senhaCadastro" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senhaCadastro" name="senha" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="senhaConfirm" class="form-label">Confirmar Senha</label>
                                <input type="password" class="form-control" id="senhaConfirm" name="senha_confirm" required>
                            </div>
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="termos" required>
                            <label class="form-check-label" for="termos">
                                Aceito os <a href="#">termos de uso</a> e <a href="#">política de privacidade</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="bi bi-check-circle me-2"></i>
                            Criar Conta
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function openLoginModal(tipo) {
            if (tipo === 'paciente') {
                const modal = new bootstrap.Modal(document.getElementById('loginModalPaciente'));
                modal.show();
            } else if (tipo === 'medico') {
                const modal = new bootstrap.Modal(document.getElementById('loginModalMedico'));
                modal.show();
            }
        }
        
        function openRegisterModal(tipo) {
            event.preventDefault();
            if (tipo === 'paciente') {
                const modal = new bootstrap.Modal(document.getElementById('registerModalPaciente'));
                modal.show();
            }
        }
    </script>
</body>
<script src="./assets/js/main.js"></script>
</html>