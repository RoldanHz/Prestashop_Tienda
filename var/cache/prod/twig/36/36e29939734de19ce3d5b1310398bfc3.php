<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__f7dac2fa2010ce28ed097598a969b2a4 */
class __TwigTemplate_9de15a86eabadacae45c95032efb2e5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/ElPinal/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/ElPinal/img/app_icon.png\" />

<title>Productos • TiendaElPinal</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'MX';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '848dd6cb7ddd4c77ba80bbf1eb18aa8f';
    var token_admin_orders = tokenAdminOrders = 'e6b642cb3b564ef6a1ce6485236a431a';
    var token_admin_customers = '1f0f03b33912eb2a8005b09ca9bed069';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '41342c55d1e4c92f0b3d47f370b36b09';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '12c29ddfae28133ef1c107117aaa2f25';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/ElPinal/soloadministrar/index.php/improve/modules/manage?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU';
    var admin_notification_get_link = '/ElPinal/soloadministrar/index.php/common/notifications?_token=Oq1KqhY-w4iCNHFvmD";
        // line 42
        echo "RUa__GmwUFUgRnfd_lcvjBjwU';
    var admin_notification_push_link = adminNotificationPushLink = '/ElPinal/soloadministrar/index.php/common/notifications/ack?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/ElPinal/soloadministrar/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/ElPinal/soloadministrar/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ElPinal/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ElPinal/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ElPinal/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ElPinal/soloadministrar/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/ElPinal\\/soloadministrar\\/\";
var baseDir = \"\\/ElPinal\\/\";
var changeFormLanguageUrl = \"\\/ElPinal\\/soloadministrar\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\";
var currency = {\"iso_code\":\"MXN\",\"sign\":\"\$\",\"name\":\"Peso mexicano\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MXN\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\"";
        // line 69
        echo ",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/ElPinal/soloadministrar/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ElPinal/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/ElPinal/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/ElPinal/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/ElPinal/soloadministrar/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ElPinal/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/ElPinal/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/ElPinal/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ElPinal/soloadministrar/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ElPinal/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/ElPinal/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/ElPinal/soloadministrar/index.php/common/notifications?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminproducts\"
  data-base-url=\"/ElPinal/soloadministrar/index.php\"  data-token=\"Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminDashboard&amp;token=68483e2784d49b3aafd6b109a1b0a807\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=16c97c30d03475eef4b0b653041f8857\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ElPinal/soloadministrar/index.php/improve/modules/manage?token=f1696f4eeac8c4ce08ed7c1424a19fc3\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ElPinal/soloadministrar/index.php/sell/catalog/categories/new?token=f1696f4eeac8c4ce08ed7c1424a19fc3\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ElPinal/soloadministrar/index.php/sell/catalog/products/new?token=f1696f4eeac8c4ce08ed7c1424a19fc3\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
       ";
        // line 139
        echo "   <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5af77ba69726c301beac4e7b08d48279\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ElPinal/soloadministrar/index.php/sell/orders?token=f1696f4eeac8c4ce08ed7c1424a19fc3\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"70\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products?-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\"
        data-post-link=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminQuickAccesses&token=d90b5af79d1f5c2f0c64cb135ff92220\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Productos - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminQuickAccesses&token=d90b5af79d1f5c2f0c64cb135ff92220\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/ElPinal/soloadministrar/index.php?controller=AdminSearch&amp;token=4f8eaa5672c046230df07fa3729aa851\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-";
        // line 177
        echo "search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart";
        // line 192
        echo "</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=16c97c30d03475eef4b0b653041f8857\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ElPinal/soloadministrar/index.php/improve/modules/manage?token=f1696f4eeac8c4ce08ed7c1424a19fc3\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ElPinal/soloadministrar/index.php/sell/catalog/categories/new?token=f1696f4eeac8c4ce08ed7c1424a19fc3\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ElPinal/soloadministrar/index.php/sell/catalog/products/new?token=f1696f4eeac8c4ce08ed7c1424a19fc3\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5af77ba69726c301beac4e7b08d48279\"
             dat";
        // line 230
        echo "a-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ElPinal/soloadministrar/index.php/sell/orders?token=f1696f4eeac8c4ce08ed7c1424a19fc3\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"121\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products?-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\"
      data-post-link=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminQuickAccesses&token=d90b5af79d1f5c2f0c64cb135ff92220\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Productos - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminQuickAccesses&token=d90b5af79d1f5c2f0c64cb135ff92220\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/ElPinal/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
  ";
        // line 276
        echo "  <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus &lt;strong&gt;&lt;a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=082a0b2abd7c151468542662213deeee\"&gt;carritos abandonados&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
           ";
        // line 326
        echo " <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdow";
        // line 376
        echo "n-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/ElPinal/img/pr/default.jpg\" alt=\"Roldan\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Roldan</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/ElPinal/soloadministrar/index.php/configure/advanced/employees/1/edit?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminLogin&amp;logout=1&amp;token=105f7f9dd9528d0d52ee215c7c403a9f\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/ElPinal/soloadministrar/index.php/configure/advanced/employees/toggle-navigation?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminDashboard&amp;token=68483e2784d49b3aafd6b109a1b0a807\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminDas";
        // line 421
        echo "hboard&amp;token=68483e2784d49b3aafd6b109a1b0a807\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/ElPinal/soloadministrar/index.php/sell/orders/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/orders/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                    ";
        // line 460
        echo "                                        
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/orders/invoices/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/orders/credit-slips/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/orders/delivery-slips/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminCarts&amp;token=082a0b2abd7c151468542662213deeee\" class=\"link\"> Carritos de compra
                                </a>
                              </li>
";
        // line 489
        echo "
                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/ElPinal/soloadministrar/index.php/sell/catalog/products?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/catalog/products?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/ElPinal/soloadministrar/index.php/s";
        // line 519
        echo "ell/catalog/categories?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/catalog/monitoring/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminAttributesGroups&amp;token=31d4d6373201f288df9464d439755e3f\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/catalog/brands/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
  ";
        // line 550
        echo "                            <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/attachments/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminCartRules&amp;token=5af77ba69726c301beac4e7b08d48279\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/stocks/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/ElPinal/soloadministrar/index.php/sell/customers/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">acco";
        // line 579
        echo "unt_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/customers/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/addresses/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/ElPin";
        // line 611
        echo "al/soloadministrar/index.php?controller=AdminCustomerThreads&amp;token=41342c55d1e4c92f0b3d47f370b36b09\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminCustomerThreads&amp;token=41342c55d1e4c92f0b3d47f370b36b09\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/ElPinal/soloadministrar/index.php/sell/customer-service/order-messages/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data";
        // line 640
        echo "-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminReturn&amp;token=5a8059098ea568231e15ab23b8fba9b4\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminStats&amp;token=16c97c30d03475eef4b0b653041f8857\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/ElPinal/soloadministrar/index.php/improve/modules/manage?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBj";
        // line 677
        echo "wU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/modules/manage?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/ElPinal/soloadministrar/index.php/improve/design/themes/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                ";
        // line 708
        echo "    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/design/themes/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/design/mail_theme/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/design/cms-pages/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
              ";
        // line 739
        echo "                <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/design/modules/positions/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminImages&amp;token=f0c2ad90af6a732a3cfc672af9931feb\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/ElPinal/soloadministrar/index.php/modules/link-widget/list?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminCarriers&amp;token=bb797226524891bed6745d8330db3667\" class=\"link\">
                      <i ";
        // line 768
        echo "class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminCarriers&amp;token=bb797226524891bed6745d8330db3667\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/shipping/preferences/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/";
        // line 800
        echo "ElPinal/soloadministrar/index.php/improve/payment/payment_methods?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/payment/payment_methods?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/payment/preferences?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
          ";
        // line 831
        echo "        
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/ElPinal/soloadministrar/index.php/improve/international/localization/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/international/localization/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/international/zones/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                               ";
        // line 859
        echo "   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/international/taxes/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/ElPinal/soloadministrar/index.php/improve/international/translations/settings?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/ElPinal/soloadministrar/index.php/configure/shop/preferences/preferences?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span";
        // line 896
        echo ">
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/shop/preferences/preferences?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/shop/order-preferences/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/shop/product-preferences/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Configuración de Productos
                        ";
        // line 923
        echo "        </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/shop/customer-preferences/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/shop/contacts/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/shop/seo-urls/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                         ";
        // line 954
        echo "       <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminSearchConf&amp;token=d37473dfb5ed386da13eaf42b099fe50\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/system-information/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/system-information/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                  ";
        // line 984
        echo "            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/performance/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/administration/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/emails/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/import/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Importar
                                </a";
        // line 1012
        echo ">
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/employees/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/sql-requests/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/logs/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/ElPinal/soloadministrar/ind";
        // line 1043
        echo "ex.php/configure/advanced/webservice-keys/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/feature-flags/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/ElPinal/soloadministrar/index.php/configure/advanced/security/?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" class=\"link\"> Seguridad
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catálogo</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/ElPinal/soloadministrar/index.php/sell/catalog/products?_toke";
        // line 1083
        echo "n=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\" aria-current=\"page\">Productos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Productos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/ElPinal/soloadministrar/index.php/sell/catalog/products/new?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\"                  title=\"Crear un nuevo producto: CTRL + P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Nuevo
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/ElPinal/soloadministrar/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminProducts%253Fversion%253D8.0.4%2526country%253Des/Ayuda?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
          ";
        // line 1133
        echo "    class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/ElPinal/soloadministrar/index.php/sell/catalog/products/new?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\"              title=\"Crear un nuevo producto: CTRL + P\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Nuevo
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/ElPinal/soloadministrar/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminProducts%253Fversion%253D8.0.4%2526country%253Des/Ayuda?_token=Oq1KqhY-w4iCNHFvmDRUa__GmwUFUgRnfd_lcvjBjwU\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1164
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/ElPinal/soloadministrar/index.php?controller=AdminDashboard&amp;token=68483e2784d49b3aafd6b109a1b0a807\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1198
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1164
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1198
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__f7dac2fa2010ce28ed097598a969b2a4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 1198,  1340 => 1164,  1329 => 102,  1320 => 1198,  1280 => 1164,  1247 => 1133,  1195 => 1083,  1153 => 1043,  1120 => 1012,  1090 => 984,  1058 => 954,  1025 => 923,  996 => 896,  957 => 859,  927 => 831,  894 => 800,  860 => 768,  829 => 739,  796 => 708,  763 => 677,  724 => 640,  693 => 611,  659 => 579,  628 => 550,  595 => 519,  563 => 489,  532 => 460,  491 => 421,  444 => 376,  392 => 326,  340 => 276,  292 => 230,  252 => 192,  235 => 177,  195 => 139,  153 => 102,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f7dac2fa2010ce28ed097598a969b2a4", "");
    }
}
