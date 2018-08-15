<?php

/* materialize/template/information/contact.twig */
class __TwigTemplate_79a7f2721d7143e3aa1f26753f145f16442409d9b8afbe80a268a8b22a29efd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 2
        ob_start();
        // line 3
        echo "<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"BreadcrumbList\",
\t\"itemListElement\": [
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t";
            if (($context["key"] < (twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)) - 1))) {
                // line 10
                echo "\t\t\t";
                if (($context["key"] == 0)) {
                    // line 11
                    echo "\t\t\t";
                } else {
                    // line 12
                    echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                    // line 14
                    echo $context["key"];
                    echo ",
\t\t\t\t\"item\": {
\t\t\t\t\t\"@id\": \"";
                    // line 16
                    echo $this->getAttribute($context["breadcrumb"], "href", array());
                    echo "\",
\t\t\t\t\t\"name\": \"";
                    // line 17
                    echo $this->getAttribute($context["breadcrumb"], "text", array());
                    echo "\"
\t\t\t\t}
\t\t\t},
\t\t\t";
                }
                // line 21
                echo "\t\t";
            } else {
                // line 22
                echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                // line 24
                echo $context["key"];
                echo ",
\t\t\t\t\"item\": {
\t\t\t\t\t\"@id\": \"";
                // line 26
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\",
\t\t\t\t\t\"name\": \"";
                // line 27
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "\"
\t\t\t\t}
\t\t\t}
\t\t";
            }
            // line 31
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t]
}
</script>
";
        // line 35
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 36
            echo "\t";
            $context["main"] = "s12 l6";
        } elseif ((        // line 37
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 38
            echo "\t";
            $context["main"] = "s12 l9";
        } else {
            // line 40
            echo "\t";
            $context["main"] = "s12";
        }
        // line 42
        echo "<main>
\t<div class=\"container\">
\t\t<nav id=\"breadcrumbs\" class=\"breadcrumb-wrapper transparent z-depth-0\">
\t\t\t<span class=\"breadcrumb-blur hide-on-med-and-up\"></span>
\t\t\t<div class=\"nav-wrapper breadcrumb-wrap href-underline\">
\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 48
            echo "\t\t\t\t\t";
            if (($context["key"] < (twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)) - 1))) {
                // line 49
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\" class=\"breadcrumb waves-effect black-text\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t<span class=\"breadcrumb blue-grey-text text-darken-3\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</span>
\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t</div>
\t\t</nav>
\t\t<h1>";
        // line 56
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t<div class=\"row\">
\t\t\t";
        // line 58
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t\t<div class=\"col ";
        // line 59
        echo (isset($context["main"]) ? $context["main"] : null);
        echo "\">
\t\t\t\t";
        // line 60
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t";
        // line 62
        if (((isset($context["yandex"]) ? $context["yandex"] : null) || (isset($context["google"]) ? $context["google"] : null))) {
            // line 63
            echo "\t\t\t\t\t<div id=\"map\">
\t\t\t\t\t\t";
            // line 64
            if ((isset($context["yandex"]) ? $context["yandex"] : null)) {
                // line 65
                echo "\t\t\t\t\t\t<a href=\"//maps.yandex.ru/?text=";
                echo (isset($context["lat"]) ? $context["lat"] : null);
                echo ",";
                echo (isset($context["lng"]) ? $context["lng"] : null);
                echo "\" class=\"btn-floating btn-large halfway-fab waves-effect waves-light ";
                echo (isset($context["color_btn"]) ? $context["color_btn"] : null);
                echo " ";
                echo (isset($context["color_btn_text"]) ? $context["color_btn_text"] : null);
                echo "\" title=\"";
                echo (isset($context["text_view_map"]) ? $context["text_view_map"] : null);
                echo "\" target=\"_blank\" rel=\"noopener\"><i class=\"material-icons\">map</i></a>
\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t";
            if ((isset($context["google"]) ? $context["google"] : null)) {
                // line 68
                echo "\t\t\t\t\t\t<a href=\"//maps.google.com/maps?q=";
                echo (isset($context["lat"]) ? $context["lat"] : null);
                echo ",";
                echo (isset($context["lng"]) ? $context["lng"] : null);
                echo "&hl=";
                echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                echo "&t=m&z=15\" class=\"btn-floating btn-large halfway-fab waves-effect waves-light ";
                echo (isset($context["color_btn"]) ? $context["color_btn"] : null);
                echo " ";
                echo (isset($context["color_btn_text"]) ? $context["color_btn_text"] : null);
                echo "\" title=\"";
                echo (isset($context["text_view_map"]) ? $context["text_view_map"] : null);
                echo "\" target=\"_blank\" rel=\"noopener\"><i class=\"material-icons\">map</i></a>
\t\t\t\t\t\t<div id=\"google-map\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t<section class=\"section\">
\t\t\t\t\t\t<h2>";
        // line 75
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "</h2>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s12 l6\">
\t\t\t\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t\t\t\t<ul class=\"collection no-border\">
\t\t\t\t\t\t\t\t\t\t";
        // line 80
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            // line 82
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"";
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" title=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<address><i class=\"material-icons left\">location_on</i>";
        // line 86
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "</address>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"material-icons left\">phone</i>";
        // line 89
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"material-icons left\">email</i>";
        // line 92
        echo (isset($context["email_store"]) ? $context["email_store"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        // line 94
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons left\">access_time</i>";
            // line 96
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 99
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons left\">info</i>";
            // line 101
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s12 l6\">
\t\t\t\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 109
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 110
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 113
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-name\">";
        // line 114
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">email</i>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 118
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-email\" data-error=\"";
        // line 119
        echo (isset($context["text_email_error"]) ? $context["text_email_error"] : null);
        echo "\" data-success=\"";
        echo (isset($context["text_email_success"]) ? $context["text_email_success"] : null);
        echo "\">";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"materialize-textarea\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-enquiry\">";
        // line 124
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn waves-effect waves-light red right\" type=\"submit\" value=\"";
        // line 128
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "\">";
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t\t";
        // line 136
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 138
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
";
        // line 142
        if ((isset($context["yandex"]) ? $context["yandex"] : null)) {
            echo "<script defer src=\"//api-maps.yandex.ru/2.1/?lang=ru_RU\"></script>";
        }
        // line 143
        if ((isset($context["google"]) ? $context["google"] : null)) {
            echo "<script defer src=\"//maps.googleapis.com/maps/api/js?key=";
            echo (isset($context["google_api"]) ? $context["google_api"] : null);
            echo "\"></script>";
        }
        // line 144
        echo "<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 146
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 147
            echo "\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "', classes: 'toast-warning'});
\t";
        }
        // line 149
        echo "\t";
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 150
            echo "\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "', classes: 'toast-warning'});
\t";
        }
        // line 152
        echo "\t";
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 153
            echo "\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "', classes: 'toast-warning'});
\t";
        }
        // line 155
        echo "\t";
        if ((isset($context["yandex"]) ? $context["yandex"] : null)) {
            // line 156
            echo "\tymaps.ready(init);

\tvar myMap, myPlacemark, myPin;

\tfunction init() {
\t\tmyMap = new ymaps.Map(\"map\", {
\t\t\tcenter: [";
            // line 162
            echo (isset($context["lat"]) ? $context["lat"] : null);
            echo ", ";
            echo (isset($context["lng"]) ? $context["lng"] : null);
            echo "],
\t\t\tzoom: 16,
\t\t\tcontrols: []
\t\t});

\t\tmyPin = new ymaps.GeoObjectCollection({}, {
\t\t\t";
            // line 168
            if ((isset($context["icon_pin"]) ? $context["icon_pin"] : null)) {
                // line 169
                echo "\t\t\ticonLayout: 'default#image',
\t\t\ticonImageSize: [";
                // line 170
                echo (isset($context["icon_pin_width"]) ? $context["icon_pin_width"] : null);
                echo ",";
                echo (isset($context["icon_pin_height"]) ? $context["icon_pin_height"] : null);
                echo "],
\t\t\ticonImageHref: '";
                // line 171
                echo (isset($context["icon_pin"]) ? $context["icon_pin"] : null);
                echo "'
\t\t\t";
            }
            // line 173
            echo "\t\t});

\t\tmyPlacemark = new ymaps.Placemark([";
            // line 175
            echo (isset($context["lat"]) ? $context["lat"] : null);
            echo ", ";
            echo (isset($context["lng"]) ? $context["lng"] : null);
            echo "], {
\t\t\t";
            // line 176
            if ((isset($context["map_description"]) ? $context["map_description"] : null)) {
                // line 177
                echo "\t\t\tballoonContent: '";
                echo (isset($context["map_description"]) ? $context["map_description"] : null);
                echo "'
\t\t\t";
            }
            // line 179
            echo "\t\t});

\t\tmyPin.add(myPlacemark);
\t\tmyMap.geoObjects.add(myPin);
\t}
\t";
        }
        // line 185
        echo "\t";
        if ((isset($context["google"]) ? $context["google"] : null)) {
            // line 186
            echo "\tgoogle.maps.event.addDomListener(window, 'load', init);

\tvar element, options, myMap, myPlacemark, infoWindow;

\tfunction init() {
\t\telement = document.getElementById('google-map');
\t\toptions = {
\t\t\tcenter: {lat: ";
            // line 193
            echo (isset($context["lat"]) ? $context["lat"] : null);
            echo ", lng: ";
            echo (isset($context["lng"]) ? $context["lng"] : null);
            echo "},
\t\t\tzoom: 16
\t\t}

\t\tmyMap = new google.maps.Map(element, options);

\t\tmyPlacemark = new google.maps.Marker({
\t\t\tposition: {lat: ";
            // line 200
            echo (isset($context["lat"]) ? $context["lat"] : null);
            echo ", lng: ";
            echo (isset($context["lng"]) ? $context["lng"] : null);
            echo "},
\t\t\tmap: myMap,
\t\t\ticon: '";
            // line 202
            echo (isset($context["icon_pin"]) ? $context["icon_pin"] : null);
            echo "'
\t\t});

\t\t";
            // line 205
            if ((isset($context["map_description"]) ? $context["map_description"] : null)) {
                // line 206
                echo "\t\tinfoWindow = new google.maps.InfoWindow({
\t\t\tcontent: '";
                // line 207
                echo (isset($context["map_description"]) ? $context["map_description"] : null);
                echo "'
\t\t});
\t\t";
            }
            // line 210
            echo "
\t\tmyPlacemark.addListener('click', function() {
\t\t\tinfoWindow.open(myMap, myPlacemark);
\t\t});
\t}
\t";
        }
        // line 216
        echo "});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 219
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 219,  526 => 216,  518 => 210,  512 => 207,  509 => 206,  507 => 205,  501 => 202,  494 => 200,  482 => 193,  473 => 186,  470 => 185,  462 => 179,  456 => 177,  454 => 176,  448 => 175,  444 => 173,  439 => 171,  433 => 170,  430 => 169,  428 => 168,  417 => 162,  409 => 156,  406 => 155,  400 => 153,  397 => 152,  391 => 150,  388 => 149,  382 => 147,  380 => 146,  376 => 144,  370 => 143,  366 => 142,  359 => 138,  354 => 136,  341 => 128,  336 => 126,  331 => 124,  319 => 119,  315 => 118,  308 => 114,  304 => 113,  298 => 110,  294 => 109,  287 => 104,  281 => 101,  278 => 100,  275 => 99,  269 => 96,  266 => 95,  264 => 94,  259 => 92,  253 => 89,  247 => 86,  244 => 85,  232 => 82,  229 => 81,  227 => 80,  219 => 75,  216 => 74,  212 => 72,  194 => 68,  191 => 67,  177 => 65,  175 => 64,  172 => 63,  170 => 62,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {% spaceless %}*/
/* <script type="application/ld+json">*/
/* {*/
/* 	"@context": "http://schema.org",*/
/* 	"@type": "BreadcrumbList",*/
/* 	"itemListElement": [*/
/* 	{% for key, breadcrumb in breadcrumbs %}*/
/* 		{% if key < breadcrumbs|length - 1 %}*/
/* 			{% if key == 0 %}*/
/* 			{% else %}*/
/* 			{*/
/* 				"@type": "ListItem",*/
/* 				"position": {{ key }},*/
/* 				"item": {*/
/* 					"@id": "{{ breadcrumb.href }}",*/
/* 					"name": "{{ breadcrumb.text }}"*/
/* 				}*/
/* 			},*/
/* 			{% endif %}*/
/* 		{% else %}*/
/* 			{*/
/* 				"@type": "ListItem",*/
/* 				"position": {{ key }},*/
/* 				"item": {*/
/* 					"@id": "{{ breadcrumb.href }}",*/
/* 					"name": "{{ breadcrumb.text }}"*/
/* 				}*/
/* 			}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	]*/
/* }*/
/* </script>*/
/* {% if column_left and column_right %}*/
/* 	{% set main = 's12 l6' %}*/
/* {% elseif column_left or column_right %}*/
/* 	{% set main = 's12 l9' %}*/
/* {% else %}*/
/* 	{% set main = 's12' %}*/
/* {% endif %}*/
/* <main>*/
/* 	<div class="container">*/
/* 		<nav id="breadcrumbs" class="breadcrumb-wrapper transparent z-depth-0">*/
/* 			<span class="breadcrumb-blur hide-on-med-and-up"></span>*/
/* 			<div class="nav-wrapper breadcrumb-wrap href-underline">*/
/* 				{% for key, breadcrumb in breadcrumbs %}*/
/* 					{% if key < breadcrumbs|length - 1 %}*/
/* 						<a href="{{ breadcrumb.href }}" class="breadcrumb waves-effect black-text">{{ breadcrumb.text }}</a>*/
/* 					{% else %}*/
/* 						<span class="breadcrumb blue-grey-text text-darken-3">{{ breadcrumb.text }}</span>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</nav>*/
/* 		<h1>{{ heading_title }}</h1>*/
/* 		<div class="row">*/
/* 			{{ column_left }}*/
/* 			<div class="col {{ main }}">*/
/* 				{{ content_top }}*/
/* 				<div class="card-panel">*/
/* 					{% if yandex or google %}*/
/* 					<div id="map">*/
/* 						{% if yandex %}*/
/* 						<a href="//maps.yandex.ru/?text={{ lat }},{{ lng }}" class="btn-floating btn-large halfway-fab waves-effect waves-light {{ color_btn }} {{ color_btn_text }}" title="{{ text_view_map }}" target="_blank" rel="noopener"><i class="material-icons">map</i></a>*/
/* 						{% endif %}*/
/* 						{% if google %}*/
/* 						<a href="//maps.google.com/maps?q={{ lat }},{{ lng }}&hl={{ geocode_hl }}&t=m&z=15" class="btn-floating btn-large halfway-fab waves-effect waves-light {{ color_btn }} {{ color_btn_text }}" title="{{ text_view_map }}" target="_blank" rel="noopener"><i class="material-icons">map</i></a>*/
/* 						<div id="google-map">*/
/* 						</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					<section class="section">*/
/* 						<h2>{{ store }}</h2>*/
/* 						<div class="row">*/
/* 							<div class="col s12 l6">*/
/* 								<div class="card-panel">*/
/* 									<ul class="collection no-border">*/
/* 										{% if image %}*/
/* 										<li class="collection-item no-border">*/
/* 											<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ image }}" alt="{{ store }}" title="{{ store }}">*/
/* 										</li>*/
/* 										{% endif %}*/
/* 										<li class="collection-item no-border">*/
/* 											<address><i class="material-icons left">location_on</i>{{ address }}</address>*/
/* 										</li>*/
/* 										<li class="collection-item no-border">*/
/* 											<span><i class="material-icons left">phone</i>{{ telephone }}</span>*/
/* 										</li>*/
/* 										<li class="collection-item no-border">*/
/* 											<span><i class="material-icons left">email</i>{{ email_store }}</span>*/
/* 										</li>*/
/* 										{% if open %}*/
/* 										<li class="collection-item no-border">*/
/* 											<i class="material-icons left">access_time</i>{{ open }}*/
/* 										</li>*/
/* 										{% endif %}*/
/* 										{% if comment %}*/
/* 										<li class="collection-item no-border">*/
/* 											<i class="material-icons left">info</i>{{ comment }}*/
/* 										</li>*/
/* 										{% endif %}*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col s12 l6">*/
/* 								<div class="card-panel">*/
/* 									<form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/* 										<h3>{{ text_contact }}</h3>*/
/* 										<div class="input-field">*/
/* 											<i class="material-icons prefix">account_circle</i>*/
/* 											<input type="text" name="name" value="{{ name }}" id="input-name" class="validate">*/
/* 											<label for="input-name">{{ entry_name }}</label>*/
/* 										</div>*/
/* 										<div class="input-field">*/
/* 											<i class="material-icons prefix">email</i>*/
/* 											<input type="email" name="email" value="{{ email }}" id="input-email" class="validate">*/
/* 											<label for="input-email" data-error="{{ text_email_error }}" data-success="{{ text_email_success }}">{{ entry_email }}</label>*/
/* 										</div>*/
/* 										<div class="input-field">*/
/* 											<i class="material-icons prefix">mode_edit</i>*/
/* 											<textarea name="enquiry" rows="10" id="input-enquiry" class="materialize-textarea"></textarea>*/
/* 											<label for="input-enquiry">{{ entry_enquiry }}</label>*/
/* 										</div>*/
/* 										{{ captcha }}*/
/* 										<div class="flex-reverse">*/
/* 											<button class="btn waves-effect waves-light red right" type="submit" value="{{ button_submit }}">{{ button_submit }}</button>*/
/* 										</div>*/
/* 									</form>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</section>*/
/* 				</div>*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* {% if yandex %}<script defer src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>{% endif %}*/
/* {% if google %}<script defer src="//maps.googleapis.com/maps/api/js?key={{ google_api }}"></script>{% endif %}*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	{% if error_name %}*/
/* 		M.toast({html: '<i class="material-icons left">warning</i>{{ error_name }}', classes: 'toast-warning'});*/
/* 	{% endif %}*/
/* 	{% if error_email %}*/
/* 		M.toast({html: '<i class="material-icons left">warning</i>{{ error_email }}', classes: 'toast-warning'});*/
/* 	{% endif %}*/
/* 	{% if error_enquiry %}*/
/* 		M.toast({html: '<i class="material-icons left">warning</i>{{ error_enquiry }}', classes: 'toast-warning'});*/
/* 	{% endif %}*/
/* 	{% if yandex %}*/
/* 	ymaps.ready(init);*/
/* */
/* 	var myMap, myPlacemark, myPin;*/
/* */
/* 	function init() {*/
/* 		myMap = new ymaps.Map("map", {*/
/* 			center: [{{ lat }}, {{ lng }}],*/
/* 			zoom: 16,*/
/* 			controls: []*/
/* 		});*/
/* */
/* 		myPin = new ymaps.GeoObjectCollection({}, {*/
/* 			{% if icon_pin %}*/
/* 			iconLayout: 'default#image',*/
/* 			iconImageSize: [{{ icon_pin_width }},{{ icon_pin_height }}],*/
/* 			iconImageHref: '{{ icon_pin }}'*/
/* 			{% endif %}*/
/* 		});*/
/* */
/* 		myPlacemark = new ymaps.Placemark([{{ lat }}, {{ lng }}], {*/
/* 			{% if map_description %}*/
/* 			balloonContent: '{{ map_description }}'*/
/* 			{% endif %}*/
/* 		});*/
/* */
/* 		myPin.add(myPlacemark);*/
/* 		myMap.geoObjects.add(myPin);*/
/* 	}*/
/* 	{% endif %}*/
/* 	{% if google %}*/
/* 	google.maps.event.addDomListener(window, 'load', init);*/
/* */
/* 	var element, options, myMap, myPlacemark, infoWindow;*/
/* */
/* 	function init() {*/
/* 		element = document.getElementById('google-map');*/
/* 		options = {*/
/* 			center: {lat: {{ lat }}, lng: {{ lng }}},*/
/* 			zoom: 16*/
/* 		}*/
/* */
/* 		myMap = new google.maps.Map(element, options);*/
/* */
/* 		myPlacemark = new google.maps.Marker({*/
/* 			position: {lat: {{ lat }}, lng: {{ lng }}},*/
/* 			map: myMap,*/
/* 			icon: '{{ icon_pin }}'*/
/* 		});*/
/* */
/* 		{% if map_description %}*/
/* 		infoWindow = new google.maps.InfoWindow({*/
/* 			content: '{{ map_description }}'*/
/* 		});*/
/* 		{% endif %}*/
/* */
/* 		myPlacemark.addListener('click', function() {*/
/* 			infoWindow.open(myMap, myPlacemark);*/
/* 		});*/
/* 	}*/
/* 	{% endif %}*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
