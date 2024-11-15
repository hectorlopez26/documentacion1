<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación de PrestaShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <header class="text-center mb-4">
            <h2 class="fw-bold text-success">Documentación de PrestaShop</h2>
        </header>
        
        <!-- Menú Dinámico -->
        <nav class="mb-4">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item"><a class="nav-link <?php echo ($_GET['section'] ?? '') == 'instalacion' ? 'active' : '' ?>" href="?section=instalacion">Instalación</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($_GET['section'] ?? '') == 'configuracion' ? 'active' : '' ?>" href="?section=configuracion">Configuración</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($_GET['section'] ?? '') == 'modulos' ? 'active' : '' ?>" href="?section=modulos">Módulos</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($_GET['section'] ?? '') == 'temas' ? 'active' : '' ?>" href="?section=temas">Temas</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($_GET['section'] ?? '') == 'productos' ? 'active' : '' ?>" href="?section=productos">Gestión de Productos</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($_GET['section'] ?? '') == 'envios' ? 'active' : '' ?>" href="?section=envios">Gestión de envios</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($_GET['section'] ?? '') == 'pagos' ? 'active' : '' ?>" href="?section=pagos">Gestión de pagos</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($_GET['section'] ?? '') == 'internacionalizacion' ? 'active' : '' ?>" href="?section=internacionalizacion">internacionalizacion</a></li>
            </ul>
        </nav>
        
        <!-- Contenido Dinámico -->
        <div class="content text-center p-4 border rounded bg-white">
            <?php
            $content = [
                'instalacion' => '<h3>Instalación de PrestaShop</h3><p>Instrucciones sobre cómo instalar PrestaShop...</p>',
                'configuracion' => '<h3>Configuración de PrestaShop</h3><p>Instrucciones sobre cómo configurar PrestaShop...</p>',
                'modulos' => '<h3>Gestión de Módulos</h3><p>Guía sobre cómo gestionar los módulos de PrestaShop...</p>',
                'temas' => '<h3>Gestión de Temas</h3><p>Guía sobre cómo gestionar los temas de PrestaShop...</p>',
                'productos' => '<h3>Gestión de Productos</h3><p>pasos para gestionar los productos en prestaShop...</p>',
                'envios' => '<h3>Gestión de envios</h3><p>La forma en que elige enviar sus productos es un elemento clave para la gestión y el éxito de su tienda. 
                <br>Es importante considerar los diferentes métodos disponibles, ya que pueden incluir múltiples transportistas, <br>impuestos regionales e internacionales, peso del paquete, y precio del producto.Afortunadamente, <br>PrestaShop simplifica esta gestión en unas pocas pantallas.</p><p>
                El precio de envío de un producto se calcula principalmente de dos maneras: por el precio total del pedido o por el peso total del pedido. Este cálculo sigue la metodología que usan la mayoría de los transportistas, 
                por lo que es importante completar el peso al crear un producto en el catálogo. También debe indicar los costos por peso y por precio para cada transportista en la página "Transportistas".
                PrestaShop calcula automáticamente el precio de envío de acuerdo con el sistema de rangos, que puede basarse en el peso o en el precio del pedido. Sin embargo, solo se puede usar uno de estos dos métodos a la vez.
                La configuración de envío está estrechamente relacionada con la configuración local de su tienda en PrestaShop, accesible a través del menú "Internacional". <b>En páginas como "Localización" y "Ubicaciones", 
                </b>puede definir zonas geográficas, países, monedas y más. Esto es esencial, ya que, por ejemplo, para crear un transportista en PrestaShop, es necesario definir primero sus zonas geográficas, lo que se realiza desde la pestaña <b>"Zonas" en la página "Ubicación".</b>
                </p>',
                'pagos' => '<h3>Gestión de pagos</h3><p>PrestaShop te permite aceptar pagos de tus clientes mediante diversos métodos: 
                desde cheques, transferencias bancarias, y contra reembolso, hasta pasarelas electrónicas como PayPal, Moneybookers o HiPay.
                Para gestionar las opciones de pago, dirígete al menú "Pago". 
                Desde allí, podrás configurar y ajustar todos los métodos disponibles para adaptarlos a las necesidades de tu tienda y tus clientes.
                </p>',
                'internacionalizacion' => '<h3>internacionalizacion</h3><p>Internacionalización
                En un entorno global como Internet, es probable que personas de todo el mundo visiten tu tienda y realicen pedidos. Como propietario, es esencial que tu tienda esté preparada para atender a una audiencia diversa. Esto incluye traducir tu sitio web a varios idiomas según sea necesario y adaptar impuestos, monedas, unidades de peso y zonas geográficas locales para brindar una experiencia adecuada a clientes de diferentes regiones.

                <p>Localización
                La localización consiste en adaptar el contenido del software a un idioma o cultura específicos.
                Esto incluye traducir y ajustar elementos clave como idiomas, monedas y unidades de medida para que tu tienda esté completamente adaptada a las necesidades de los clientes en diferentes regiones.
                Esta sección de localización asegura que tu tienda esté preparada para tus mercados objetivo. Si apuntas a un país en particular, es esencial que ofrezcas su idioma, moneda y otras configuraciones regionales.</p>
                
                <p>Configuración de Localización</p>
                La página principal en el menú "Localización" permite configurar las unidades utilizadas para tus productos.
                Importar un Paquete de Localización
                Puedes importar un paquete de localización que incluye:
                •	Estados: Importa los estados necesarios para la correcta gestión de aduanas e impuestos locales. Los estados agregados se pueden ver y editar en "Ubicaciones".
                •	Impuestos: Soporta los impuestos locales según país o estado. Los impuestos y reglas fiscales se pueden ver y editar en "Impuesto" y "Reglas fiscales".
                •	Monedas: Importa monedas locales y asegúrate de que las tasas de conversión sean correctas. Activa las monedas importadas en "Monedas".
                •	Idiomas: Permite traducir los campos públicos de tu tienda. Importar un idioma también ajusta el formato de fecha y otros datos regionales. Los idiomas se pueden ver y editar en "Idiomas".
                •	Unidades: Adapta unidades de peso, dimensiones, volumen y distancia para los productos y la información de embalaje. Se pueden ajustar en la sección "Unidades locales".
                Nota: Puedes agregar solo idioma, moneda, impuestos u otros datos según necesites. Evita sobrecargar tu tienda con demasiados detalles, pero importa los datos de los países con más tráfico.
                </p>'
            ];
            $section = $_GET['section'] ?? '';
            echo $content[$section] ?? '<h3>Bienvenido a la Documentación de PrestaShop</h3><p>Selecciona una sección del menú para obtener más información.</p>';
            ?>
        </div>

        <!-- Botón para regresar al inicio -->
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-outline-secondary">Volver a Inicio</a>
        </div>
    </div>
</body>
</html>
