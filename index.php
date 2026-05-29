<?php
// Configuración de los enlaces y sus propiedades para la interfaz
$enlaces_vehiculares = [
    [
        "titulo" => "Consulta Vehicular",
        "categoria" => "SUNARP",
        "url" => "https://consultavehicular.sunarp.gob.pe/consulta-vehicular/inicio",
        "imagen" => "img/sunarp1.png",
        "icono" => "fas fa-search",
        "desc" => "Consulta los datos básicos y titulares registrales del vehículo."
    ],
    [
        "titulo" => "Historial de Dueños y Gravámenes",
        "categoria" => "SUNARP",
        "url" => "https://sprl.sunarp.gob.pe/sprl/ingreso",
        "imagen" => "img/sunarp2.png",
        "icono" => "fas fa-history",
        "desc" => "Ingreso al SPRL para verificar gravámenes, cargas y propietarios anteriores."
    ],
    [
        "titulo" => "Precio Pagado por Vehículo",
        "categoria" => "SUNARP",
        "url" => "https://sigueloplus.sunarp.gob.pe/siguelo/",
        "imagen" => "img/sunarp3.svg",
        "icono" => "fas fa-dollar-sign",
        "desc" => "Síguelo PLUS - Verifica los títulos y costos declarados en transferencias."
    ],
    [
        "titulo" => "Vehículos a mi Nombre",
        "categoria" => "SUNARP",
        "url" => "https://vehiculosaminombre.sunarp.gob.pe/vehiculo-nombre/inicio",
        "imagen" => "img/sunarp4.png",
        "icono" => "fas fa-id-card",
        "desc" => "Consulta directa de propiedades vehiculares asociadas a tu DNI."
    ],
    [
        "titulo" => "Cámbiate a TIVE",
        "categoria" => "SUNARP",
        "url" => "https://tivative.sunarp.gob.pe/tivative/inicio",
        "imagen" => "img/tive.png",
        "icono" => "fas fa-exchange-alt",
        "desc" => "Migración a la Tarjeta de Identificación Vehicular Electrónica."
    ],
    [
        "titulo" => "Choques y Siniestros (SOAT)",
        "categoria" => "Seguridad",
        "url" => "https://servicios.sbs.gob.pe/reportesoat/",
        "imagen" => "img/choquesysiniestros.png",
        "icono" => "fas fa-car-crash",
        "desc" => "Reporte y estado de consultas del Seguro Obligatorio (SBS)."
    ],
    [
        "titulo" => "Fotopit Papeletas",
        "categoria" => "Papeletas",
        "url" => "http://www.pit.gob.pe/pit2007/EstadoCuentaVelocidad.aspx",
        "imagen" => "img/fotopit.png",
        "icono" => "fas fa-camera",
        "desc" => "Estado de cuenta por infracciones de velocidad detectadas."
    ],
    [
        "titulo" => "SAT Lima",
        "categoria" => "Papeletas",
        "url" => "https://www.sat.gob.pe/VirtualSAT/principal.aspx",
        "imagen" => "img/sat-lima.jpg",
        "icono" => "fas fa-balance-scale",
        "desc" => "Consulta general de deudas, papeletas e impuesto vehicular en Lima."
    ],
    [
        "titulo" => "ATU Pasarela",
        "categoria" => "Transporte",
        "url" => "https://pasarela.atu.gob.pe/#",
        "imagen" => "img/atu.svg",
        "icono" => "fas fa-bus",
        "desc" => "Consultas de transporte urbano y habilitaciones vehiculares."
    ],
    [
        "titulo" => "SUTRAN Monto Infracción",
        "categoria" => "SUTRAN",
        "url" => "https://www.sutran.gob.pe/consultas/record-de-infracciones/verifica-tu-infraccion/",
        "imagen" => "img/sutran.png",
        "icono" => "fas fa-file-invoice-dollar",
        "desc" => "Verificación del costo exacto y estado de las infracciones."
    ],
    [
        "titulo" => "SUTRAN Récord de Papeletas",
        "categoria" => "SUTRAN",
        "url" => "https://www.sutran.gob.pe/consultas/record-de-infracciones/record-de-infracciones/",
        "imagen" => "img/sutran.png",
        "icono" => "fas fa-clipboard-list",
        "desc" => "Historial completo de infracciones del conductor o vehículo."
    ],
    [
        "titulo" => "Muni. Callao",
        "categoria" => "Municipales",
        "url" => "https://pagopapeletascallao.pe/",
        "imagen" => "img/muni-callao.jpg",
        "icono" => "fas fa-credit-card",
        "desc" => "Consulta de fotopapeletas y pagos en la Provincia Constitucional del Callao."
    ],
    [
        "titulo" => "APESEG Precios Referenciales",
        "categoria" => "Seguridad",
        "url" => "https://www.apeseg.org.pe/lista-referencial-de-precios/",
        "imagen" => "img/apeseg.png",
        "icono" => "fas fa-tags",
        "desc" => "Lista referencial de costos y tasaciones del sector asegurador."
    ],
    [
        "titulo" => "Info Gas",
        "categoria" => "Gas",
        "url" => "https://vh.infogas.com.pe/",
        "imagen" => "img/infogas.png",
        "icono" => "fas fa-gas-pump",
        "desc" => "Consulta de estado de conversiones a GNV / GLP del vehículo."
    ],
    [
        "titulo" => "Deuda Gas (FISE)",
        "categoria" => "Gas",
        "url" => "https://fise.minem.gob.pe:23308/consulta-taller/pages/consultaTaller/inicio",
        "imagen" => "img/fise.png",
        "icono" => "fas fa-receipt",
        "desc" => "Portal del Ministerio de Energía y Minas para financiamientos de gas."
    ],
    [
        "titulo" => "Cambio de Placa",
        "categoria" => "SUNARP",
        "url" => "https://www.placas.pe/#/home",
        "imagen" => "img/AAP.png",
        "icono" => "fas fa-digital-tachograph",
        "desc" => "Trámite y consulta de nuevas placas de rodaje nacionales."
    ],
    [
        "titulo" => "SOAT Consulta Directa",
        "categoria" => "Seguridad",
        "url" => "https://www.apeseg.org.pe/consultas-soat/",
        "imagen" => "img/apeseg.png",
        "icono" => "fas fa-shield-alt",
        "desc" => "Verifica si el SOAT de cualquier vehículo se encuentra vigente."
    ],
    [
        "titulo" => "Inspección Técnica (CITV)",
        "categoria" => "Seguridad",
        "url" => "https://rec.mtc.gob.pe/Citv/ArConsultaCitv",
        "imagen" => "img/mtc.png",
        "icono" => "fas fa-tools",
        "desc" => "Consulta del MTC sobre vigencia de Revisiones Técnicas."
    ],
    [
        "titulo" => "Multas JNE",
        "categoria" => "Legal",
        "url" => "https://multas.jne.gob.pe/login",
        "imagen" => "img/jne.png",
        "icono" => "fas fa-gavel",
        "desc" => "Verificación de multas electorales pendientes ante el Jurado Nacional."
    ],
    [
        "titulo" => "Vehículo RQ (Policía)",
        "categoria" => "Seguridad",
        "url" => "https://sistemas1.policia.gob.pe/ConsultaPVR/ConsultarServicio",
        "imagen" => "img/pnp.svg",
        "icono" => "fas fa-user-shield",
        "desc" => "Consulta de requisitorias y órdenes de captura vehicular de la PNP."
    ],
    [
        "titulo" => "Permiso de Lunas Oscurecidas",
        "categoria" => "Seguridad",
        "url" => "https://sistemas.policia.gob.pe/consultalunas/ConsultarServicioLunas",
        "imagen" => "img/pnp.svg",
        "icono" => "fas fa-window-toggle",
        "desc" => "Verificación de lunas polares autorizadas por la PNP."
    ],
    [
        "titulo" => "Muni. de Andahuaylas",
        "categoria" => "Municipales",
        "url" => "https://muniandahuaylas.gob.pe/consultar-papeleta/",
        "imagen" => "img/muni-andahuaylas.png",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Consulta de papeletas de tránsito e infracciones en Andahuaylas."
    ],
    [
        "titulo" => "Muni. de Arequipa",
        "categoria" => "Municipales",
        "url" => "https://www.muniarequipa.gob.pe/oficina-virtual/c0nInfrPermisos/faltas/papeletas.php",
        "imagen" => "img/muni-arequipa.png",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Oficina Virtual: Control de infracciones y actas de control de Arequipa."
    ],
    [
        "titulo" => "SAT Cajamarca",
        "categoria" => "Municipales",
        "url" => "https://www.satcajamarca.gob.pe/#/",
        "imagen" => "img/muni-cajamarca.png",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Portal de administración tributaria y papeletas en Cajamarca."
    ],
    [
        "titulo" => "Muni. de Chachapoyas",
        "categoria" => "Municipales",
        "url" => "https://app.munichachapoyas.gob.pe/servicios/consulta_papeletas/app/papeletas.php",
        "imagen" => "img/muni-chachapoyas.jpg",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Aplicativo de control y búsqueda de papeletas de Chachapoyas."
    ],
    [
        "titulo" => "SAT Chiclayo",
        "categoria" => "Municipales",
        "url" => "https://virtualsatch.satch.gob.pe/virtualsatch/record_infracciones/buscar_placa_",
        "imagen" => "img/muni-chiclayo.jpg",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Virtual SATCH: Búsqueda del récord de infracciones por número de placa."
    ],
    [
        "titulo" => "Muni. del Cusco",
        "categoria" => "Municipales",
        "url" => "https://cusco.gob.pe/informatica/index.php/",
        "imagen" => "img/muni-cusco.png",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Portal del área de informática y servicios en línea del Cusco."
    ],
    [
        "titulo" => "SAT Huancayo",
        "categoria" => "Municipales",
        "url" => "http://sathuancayo.fortiddns.com:888/VentanillaVirtual/ConsultaPIT.aspx",
        "imagen" => "img/muni-huancayo.png",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Ventanilla Virtual: Módulo de Consulta de Papeletas e Infracciones PIT."
    ],
    [
        "titulo" => "Muni. de HUÁNUCO",
        "categoria" => "Municipales",
        "url" => "https://www.munihuanuco.gob.pe/wp-content/servicios/transportes/gt_papeletas.php",
        "imagen" => "img/muni-huanuco.png",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Gerencia de Transportes: Módulo directo para búsqueda de papeletas locales."
    ],
    [
        "titulo" => "SAT Ica",
        "categoria" => "Municipales",
        "url" => "https://m.satica.gob.pe/",
        "imagen" => "img/muni-ica.jpg",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Plataforma móvil del Servicio de Administración Tributaria de Ica."
    ],
    [
        "titulo" => "Muni. de Piura",
        "categoria" => "Municipales",
        "url" => "http://www.munipiura.gob.pe/consulta-de-multas-de-transito#buscar-por-placa",
        "imagen" => "img/muni-piura.jpg",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Buscador integrado de multas y actas de tránsito por número de placa."
    ],
    [
        "titulo" => "Muni. de Pucallpa (Coronel Portillo)",
        "categoria" => "Municipales",
        "url" => "http://servicios.municportillo.gob.pe:85/consultaVehiculo/consulta/",
        "imagen" => "img/muni-pucallpa.png",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Servicios en línea: Consulta vehicular y registro municipal de transporte."
    ],
    [
        "titulo" => "Muni. de Puno",
        "categoria" => "Municipales",
        "url" => "https://papeletas.munipuno.gob.pe/",
        "imagen" => "img/muni-puno.png",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Sistema de consulta de papeletas de la Municipalidad Provincial de Puno."
    ],
    [
        "titulo" => "Muni. de Tacna",
        "categoria" => "Municipales",
        "url" => "https://www.munitacna.gob.pe/pagina/sf/servicios/papeletas",
        "imagen" => "img/muni-tacna.png",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Módulo de fiscalización y estado de papeletas del conductor."
    ],
    [
        "titulo" => "SAT Tarapoto",
        "categoria" => "Municipales",
        "url" => "https://www.sat-t.gob.pe/",
        "imagen" => "img/muni-tarapoto.png",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "Servicio de Administración Tributaria de Tarapoto - Estado de deuda y multas."
    ],
    [
        "titulo" => "SAT Trujillo",
        "categoria" => "Municipales",
        "url" => "https://satt.gob.pe/servicios/record-de-infracciones",
        "imagen" => "img/muni-trujillo.jpg",
        "icono" => "fas fa-map-marker-alt",
        "desc" => "SATT: Consulta del récord de infracciones y estados de cuenta tributarios."
    ]
];
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
    <link rel="stylesheet" href="css/estilos.css">
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
                    <input type="text" id="mainSearch" class="form-control search-input" placeholder="Buscar por municipalidad, región o tipo de trámite (Ej: Huánuco, Pucallpa)...">
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
            </div>
        </div>

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
                            
                            <a href="<?php echo $item['url']; ?>" target="_blank" rel="noopener noreferrer" class="card-btn">
                                <span>Consultar Plataforma</span>
                                <i class="fas fa-external-link-alt fa-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="noResults" class="text-center my-5 py-5 d-none">
            <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
            <h4 class="text-white">No se encontraron servicios coincidentes</h4>
            <p class="text-muted">Prueba usando términos diferentes como 'Huánuco', 'Sutran' o 'Placa'.</p>
        </div>
    </main>

    <footer class="text-center">
        <div class="container">
            <p class="mb-1">&copy; <?php echo date("Y"); ?> Módulo Integrado de Control e Infraestructura Vial.</p>
            <p class="small text-muted">Aviso Legal: Esta página actúa únicamente como un puente y agregador de accesos directos públicos. Los datos de destino e infraestructuras pertenecen a sus respectivas entidades reguladas nacionales.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('mainSearch');
            const filterButtons = document.querySelectorAll('.btn-filter');
            const cards = document.querySelectorAll('.card-element');
            const noResults = document.getElementById('noResults');

            let currentFilter = 'all';
            let currentSearchText = '';

            function filterItems() {
                let visibleCount = 0;

                cards.forEach(card => {
                    const title = card.querySelector('.card-title-custom').textContent.toLowerCase();
                    const desc = card.querySelector('.card-text-custom').textContent.toLowerCase();
                    const category = card.getAttribute('data-category');

                    const matchesFilter = (currentFilter === 'all' || category === currentFilter);
                    const matchesSearch = (title.includes(currentSearchText) || desc.includes(currentSearchText));

                    if (matchesFilter && matchesSearch) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (visibleCount === 0) {
                    noResults.classList.remove('d-none');
                } else {
                    noResults.classList.add('d-none');
                }
            }

            // Listener para buscador de caja de texto
            searchInput.addEventListener('input', function (e) {
                currentSearchText = e.target.value.toLowerCase();
                filterItems();
            });

            // Listener para los botones de filtrado rápido
            filterButtons.forEach(button => {
                button.addEventListener('click', function () {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    currentFilter = this.getAttribute('data-filter');
                    filterItems();
                });
            });
        });
    </script>
</body>
</html>