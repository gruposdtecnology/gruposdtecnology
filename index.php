<?php
// Importamos la matriz de enlaces desde el archivo externo de configuración
require_once 'enlaces.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma Integrada de Consultas Vehiculares Peru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/SQ.png" type="image/png">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        /* Estilo complementario para resaltar el botón de Adquirir por WhatsApp */
        .card-btn-wsp {
            background-color: #25d366 !important;
            color: #ffffff !important;
            border-color: #25d366 !important;
        }
        .card-btn-wsp:hover {
            background-color: #128c7e !important;
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
        }
    </style>
</head>
<body>

    <header class="hero-section text-center">
        <div class="container">
            <span class="badge bg-primary px-3 py-2 mb-3 rounded-pill text-uppercase tracking-wider">Acceso Directo Gubernamental</span>
            <h1 class="hero-title mb-3">Portal Unificado de Consultas Vehiculares</h1>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Ingresa de forma rápida y segura a todas las plataformas oficiales del estado peruano e instituciones del sector automotriz nacional.
            </p>
            
            <div class="search-container">
                <div class="search-wrapper">
                    <i class="fas fa-search"></i>
                    <input type="text" id="mainSearch" class="form-control search-input" placeholder="Buscar por municipalidad, región o tipo de trámite (Ej: Huánuco, Pucallpa, Netflix)...">
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        
        <div class="row mb-4">
            <div class="col-12 text-center" id="filterContainer">
                <button class="btn btn-filter active" data-filter="all">Todos los Módulos</button>
                <button class="btn btn-filter" data-filter="SUNARP">SUNARP</button>
                <button class="btn btn-filter" data-filter="Papeletas">Papeletas y Multas</button>
                <button class="btn btn-filter" data-filter="Seguridad">Seguridad y SOAT</button>
                <button class="btn btn-filter" data-filter="Gas">GNV / GLP</button>
                <button class="btn btn-filter" data-filter="Municipales">Municipalidades y SATs</button>
                
                <button class="btn btn-filter" data-filter="Streaming">Cuentas Streaming</button>
            </div>
        </div>
//saddad
        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@jheison_deysi_18/video/7463885964503567621" data-video-id="7463885964503567621" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@jheison_deysi_18" href="https://www.tiktok.com/@jheison_deysi_18?refer=embed">@jheison_deysi_18</a> @JHEIDEY <a target="_blank" title="♬ sonido original - JHEIDEY" href="https://www.tiktok.com/music/sonido-original-7463885980576795397?refer=embed">♬ sonido original - JHEIDEY</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
//asadad
        <div class="row g-4" id="cardsGrid">
            <?php foreach ($enlaces_vehiculares as $item): ?>
                <div class="col-12 col-md-6 col-lg-4 card-element" data-category="<?php echo $item['categoria']; ?>">
                    <div class="custom-card">
                        <div class="card-img-wrapper">
                            <img src="<?php echo $item['imagen']; ?>" class="card-img-top" alt="<?php echo $item['titulo']; ?>" loading="lazy">
                            <span class="card-badge"><?php echo $item['categoria']; ?></span>
                            <div class="card-icon-floating">
                                <i class="<?php echo $item['icono']; ?>"></i>
                            </div>
                        </div>
                        
                        <div class="card-body-custom">
                            <div>
                                <h3 class="card-title-custom"><?php echo $item['titulo']; ?></h3>
                                <p class="card-text-custom"><?php echo $item['desc']; ?></p>
                            </div>
                            
                            <?php if ($item['categoria'] === 'Streaming'): ?>
                                <a href="<?php echo $item['url']; ?>" target="_blank" rel="noopener noreferrer" class="card-btn card-btn-wsp">
                                    <span>Adquirir Cuenta</span>
                                    <i class="fab fa-whatsapp fa-sm ms-1"></i>
                                </a>
                            <?php else: ?>
                                <a href="<?php echo $item['url']; ?>" target="_blank" rel="noopener noreferrer" class="card-btn">
                                    <span>Consultar Plataforma</span>
                                    <i class="fas fa-external-link-alt fa-xs"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="noResults" class="text-center my-5 py-5 d-none">
            <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
            <h4 class="text-white">No se encontraron servicios coincidentes</h4>
            <p class="text-muted">Prueba usando términos diferentes como 'Huánuco', 'Sutran' o 'Netflix'.</p>
        </div>
    </main>

    <footer class="text-center">
        <div class="container">
            <p class="mb-1">&copy; <?php echo date("Y"); ?> Módulo Integrado de Control e Infraestructura Vial.</p>
            <p class="small text-muted">Aviso Legal: Esta página actúa únicamente como un puente y agregador de accesos directos públicos. Los datos de destino e infraestructuras pertenecen a sus respectivas entidades reguladas nacionales.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
