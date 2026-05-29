<?php
// Módulo de configuración de enlaces vehiculares y servicios digitales de GruposD Technology
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
        "desc" => "Síguelo PLUS - Verifica los títulos y costos declarados in transferencias."
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
    ],
    
    // ==========================================================================
    // NUEVA CATEGORÍA: PLATAFORMAS DE STREAMING CON ADQUISICIÓN POR WHATSAPP
    // ==========================================================================
    [
        "titulo" => "Netflix Premium",
        "categoria" => "Streaming",
        "url" => "https://wa.me/51902118722?text=Hola,%20deseo%20adquirir%20una%20cuenta%20de%20Netflix%20Premium",
        "imagen" => "img/netflix.png",
        "icono" => "fab fa-whatsapp",
        "desc" => "Cuentas completas o perfiles privados Ultra HD 4K estables y garantizados."
    ],
    [
        "titulo" => "Disney+ Premium",
        "categoria" => "Streaming",
        "url" => "https://wa.me/51902118722?text=Hola,%20deseo%20adquirir%20una%20cuenta%20de%20Disney+",
        "imagen" => "img/disney.png",
        "icono" => "fab fa-whatsapp",
        "desc" => "Acceso total a todo el contenido de Disney, Pixar, Marvel, Star Wars y deportes."
    ],
    [
        "titulo" => "Max (HBO)",
        "categoria" => "Streaming",
        "url" => "https://wa.me/51902118722?text=Hola,%20deseo%20adquirir%20una%20cuenta%20de%20Max",
        "imagen" => "img/max.jpg",
        "icono" => "fab fa-whatsapp",
        "desc" => "Disfruta de las mejores películas y series de Warner Bros, HBO y DC Universe."
    ],
    [
        "titulo" => "Prime Video",
        "categoria" => "Streaming",
        "url" => "https://wa.me/51902118622?text=Hola,%20deseo%20adquirir%20una%20cuenta%20de%20Prime%20Video",
        "imagen" => "img/prime.png",
        "icono" => "fab fa-whatsapp",
        "desc" => "Streaming original de Amazon en alta definición y reproducción multipantalla."
    ],
    [
        "titulo" => "Spotify Premium",
        "categoria" => "Streaming",
        "url" => "https://wa.me/51902118722?text=Hola,%20deseo%20adquirir%20una%20cuenta%20de%20Spotify%20Premium",
        "imagen" => "img/spotify.png",
        "icono" => "fab fa-whatsapp",
        "desc" => "Escucha tu música favorita de forma ilimitada, sin anuncios y en modo offline."
    ],
    [
        "titulo" => "YouTube Premium",
        "categoria" => "Streaming",
        "url" => "https://wa.me/51902118722?text=Hola,%20deseo%20adquirir%20una%20cuenta%20de%20YouTube%20Premium",
        "imagen" => "img/youtube.png",
        "icono" => "fab fa-whatsapp",
        "desc" => "Videos sin publicidad, reproducción en segundo plano y acceso a YT Music."
    ],
    [
        "titulo" => "Crunchyroll Mega Fan",
        "categoria" => "Streaming",
        "url" => "https://wa.me/51902118722?text=Hola,%20deseo%20adquirir%20una%20cuenta%20de%20Crunchyroll",
        "imagen" => "img/crunchyroll.png",
        "icono" => "fab fa-whatsapp",
        "desc" => "El catálogo de anime más grande del mundo sin interrupciones directamente desde Japón."
    ],
    [
        "titulo" => "Paramount+",
        "categoria" => "Streaming",
        "url" => "https://wa.me/51902118722?text=Hola,%20deseo%20adquirir%20una%20cuenta%20de%20Paramount+",
        "imagen" => "img/paramount.jpg",
        "icono" => "fab fa-whatsapp",
        "desc" => "Transmisión de grandes series exclusivas, películas taquilleras y torneos en vivo."
    ],
    [
        "titulo" => "Apple TV+",
        "categoria" => "Streaming",
        "url" => "https://wa.me/51902118722?text=Hola,%20deseo%20adquirir%20una%20cuenta%20de%20Apple%20TV+",
        "imagen" => "img/appletv.png",
        "icono" => "fab fa-whatsapp",
        "desc" => "Producciones originales y galardonadas con la máxima calidad audiovisual."
    ],
    [
        "titulo" => "IPTV / Plex",
        "categoria" => "Streaming",
        "url" => "https://wa.me/51902118722?text=Hola,%20deseo%20adquirir%20un%20servicio%20de%20IPTV%20Plex",
        "imagen" => "img/iptv.png",
        "icono" => "fab fa-whatsapp",
        "desc" => "Miles de canales premium nacionales e internacionales en vivo y cine bajo demanda."
    ]
];
