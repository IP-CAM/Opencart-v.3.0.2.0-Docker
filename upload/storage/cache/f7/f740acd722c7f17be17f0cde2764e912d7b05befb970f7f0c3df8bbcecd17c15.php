<?php

/* materialize/template/checkout/cart.twig */
class __TwigTemplate_805ec983bc717b6911f54e9d40444c91588890128ed6df7cff034174d0b7579e extends Twig_Template
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
\t\t<div class=\"row\">
\t\t\t";
        // line 57
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t\t<div class=\"col ";
        // line 58
        echo (isset($context["main"]) ? $context["main"] : null);
        echo " section href-underline\">
\t\t\t\t";
        // line 59
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t\t<h1>";
        // line 60
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        if ((isset($context["weight"]) ? $context["weight"] : null)) {
            echo "&nbsp;(";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo ")";
        }
        echo "</h1>
\t\t\t\t<form action=\"";
        // line 61
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 63
            echo "\t\t\t\t\t<div class=\"card horizontal\">
\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t";
            // line 65
            if ($this->getAttribute($context["product"], "thumb", array())) {
                // line 66
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img class=\"lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" width=\"75\" height=\"75\"></a>
\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-stacked\">
\t\t\t\t\t\t\t<div class=\"cart-list-buttons\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-floating waves-effect transparent z-depth-0\" title=\"";
            // line 71
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons black-text\">refresh</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-floating waves-effect transparent z-depth-0\" title=\"";
            // line 74
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons black-text\">close</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 79
            echo $this->getAttribute($context["product"], "href", array());
            echo "\" class=\"text-bold\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> x ";
            echo $this->getAttribute($context["product"], "quantity", array());
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                echo "<span class=\"red-text\">***</span>";
            }
            // line 80
            echo "\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
            // line 81
            echo $this->getAttribute($context["product"], "total", array());
            echo "</span>
\t\t\t\t\t\t\t\t";
            // line 82
            if ($this->getAttribute($context["product"], "reward", array())) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<small>";
                // line 84
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small>
\t\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                // line 87
                echo "\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span class=\"badge\">";
                // line 88
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span> <small>";
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small>
\t\t\t\t\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"input-number input-number-cart\">
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-quantity\">";
            // line 92
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo ":</label>
\t\t\t\t\t\t\t\t\t<i id=\"quantity-minus";
            // line 93
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "\" class=\"material-icons waves-effect waves-circle input-quantity-minus\">remove_circle_outline</i>
\t\t\t\t\t\t\t\t\t<input id=\"input-quantity\" type=\"number\" name=\"quantity[";
            // line 94
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\">
\t\t\t\t\t\t\t\t\t<i id=\"quantity-plus";
            // line 95
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "\" class=\"material-icons waves-effect waves-circle input-quantity-plus\">add_circle_outline</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 102
            echo "\t\t\t\t\t<div class=\"card horizontal\">
\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t<div><img src=\"";
            // line 104
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"catalog/view/theme/materialize/image/cart-voucher.png\" class=\"lazyload\" width=\"75\" height=\"75\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-stacked\">
\t\t\t\t\t\t\t<div class=\"cart-list-buttons\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-floating waves-effect transparent z-depth-0\" title=\"";
            // line 108
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons black-text\">close</i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p class=\"text-bold\">";
            // line 113
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</p>
\t\t\t\t\t\t\t\t<p class=\"text-bold\">";
            // line 114
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</p>
\t\t\t\t\t\t\t\t<div class=\"input-filed inline\">
\t\t\t\t\t\t\t\t\t<label for=\"input-quantity\">";
            // line 116
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo ":</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" value=\"1\" size=\"1\" class=\"center\" disabled=\"disabled\" style=\"max-width:50px;height:inherit;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t\t</form>
\t\t\t\t";
        // line 124
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 125
            echo "\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t<h2>";
            // line 126
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</h2>
\t\t\t\t\t<p>";
            // line 127
            echo (isset($context["text_next_choice"]) ? $context["text_next_choice"] : null);
            echo "</p>
\t\t\t\t\t<ul class=\"collapsible collapsible-modules\" data-collapsible=\"accordion\">
\t\t\t\t\t\t";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                echo $context["module"];
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m6 offset-m6 l5 offset-l7\">
\t\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t\t<table class=\"bordered\">
\t\t\t\t\t\t\t\t";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 138
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
            // line 139
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</th>
\t\t\t\t\t\t\t\t\t<td>";
            // line 140
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t<a href=\"";
        // line 148
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn waves-effect waves-light red right\">";
        echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 150
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 152
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 158
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">info</i>";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "', classes: 'toast-info'});";
        }
        // line 159
        echo "\t";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">check</i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "', classes: 'toast-success'});";
        }
        // line 160
        echo "\t";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 161
        echo "
\t\$('input#input-quantity').change(function() {
\t\t\$('#update-btn').trigger('click');
\t});

\t\$('i[id^=\\'quantity-minus\\']').on('click', function() {
\t\tvar quantity = \$(this).parent().find('input');

\t\tif (isNaN(quantity.val())) {
\t\t\tquantity.val(1);
\t\t}

\t\tif (quantity.val() > 1) {
\t\t\tquantity.val(parseInt(quantity.val()) - 1);
\t\t}
\t});

\t\$('i[id^=\\'quantity-plus\\']').on('click', function() {
\t\tvar quantity = \$(this).parent().find('input');

\t\tquantity.val(parseInt(quantity.val()) + 1);
\t});
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 186
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 186,  445 => 161,  438 => 160,  431 => 159,  425 => 158,  416 => 152,  411 => 150,  404 => 148,  397 => 143,  388 => 140,  384 => 139,  381 => 138,  377 => 137,  371 => 133,  366 => 130,  357 => 129,  352 => 127,  348 => 126,  345 => 125,  343 => 124,  340 => 123,  327 => 116,  322 => 114,  318 => 113,  308 => 108,  301 => 104,  297 => 102,  292 => 101,  280 => 95,  274 => 94,  270 => 93,  266 => 92,  262 => 90,  255 => 88,  252 => 87,  249 => 86,  244 => 84,  241 => 83,  239 => 82,  235 => 81,  232 => 80,  223 => 79,  213 => 74,  207 => 71,  202 => 68,  188 => 66,  186 => 65,  182 => 63,  178 => 62,  174 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 		<div class="row">*/
/* 			{{ column_left }}*/
/* 			<div class="col {{ main }} section href-underline">*/
/* 				{{ content_top }}*/
/* 				<h1>{{ heading_title }}{% if weight %}&nbsp;({{ weight }}){% endif %}</h1>*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/* 					{% for product in products %}*/
/* 					<div class="card horizontal">*/
/* 						<div class="card-image">*/
/* 							{% if product.thumb %}*/
/* 							<a href="{{ product.href }}"><img class="lazyload" src="{{ img_loader }}" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" width="75" height="75"></a>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 						<div class="card-stacked">*/
/* 							<div class="cart-list-buttons">*/
/* 								<button type="submit" class="btn-floating waves-effect transparent z-depth-0" title="{{ button_update }}">*/
/* 									<i class="material-icons black-text">refresh</i>*/
/* 								</button>*/
/* 								<button type="button" class="btn-floating waves-effect transparent z-depth-0" title="{{ button_remove }}" onclick="cart.remove('{{ product.cart_id }}');">*/
/* 									<i class="material-icons black-text">close</i>*/
/* 								</button>*/
/* 							</div>*/
/* 							<div class="card-content">*/
/* 								<a href="{{ product.href }}" class="text-bold">{{ product.name }}</a> x {{ product.quantity }}{% if not product.stock %}<span class="red-text">***</span>{% endif %}*/
/* 								<br>*/
/* 								<span class="text-bold">{{ product.total }}</span>*/
/* 								{% if product.reward %}*/
/* 									<br>*/
/* 									<small>{{ product.reward }}</small>*/
/* 								{% endif %}*/
/* 								{% if product.recurring %}*/
/* 									<br>*/
/* 									<span class="badge">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small>*/
/* 								{% endif %}*/
/* 								<br>*/
/* 								<div class="input-number input-number-cart">*/
/* 									<label class="text-bold" for="input-quantity">{{ column_quantity }}:</label>*/
/* 									<i id="quantity-minus{{ product.cart_id }}" class="material-icons waves-effect waves-circle input-quantity-minus">remove_circle_outline</i>*/
/* 									<input id="input-quantity" type="number" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}">*/
/* 									<i id="quantity-plus{{ product.cart_id }}" class="material-icons waves-effect waves-circle input-quantity-plus">add_circle_outline</i>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 					{% for voucher in vouchers %}*/
/* 					<div class="card horizontal">*/
/* 						<div class="card-image">*/
/* 							<div><img src="{{ img_loader }}" data-src="catalog/view/theme/materialize/image/cart-voucher.png" class="lazyload" width="75" height="75"></div>*/
/* 						</div>*/
/* 						<div class="card-stacked">*/
/* 							<div class="cart-list-buttons">*/
/* 								<button type="button" class="btn-floating waves-effect transparent z-depth-0" title="{{ button_remove }}" onclick="voucher.remove('{{ voucher.key }}');">*/
/* 									<i class="material-icons black-text">close</i>*/
/* 								</button>*/
/* 							</div>*/
/* 							<div class="card-content">*/
/* 								<p class="text-bold">{{ voucher.description }}</p>*/
/* 								<p class="text-bold">{{ voucher.amount }}</p>*/
/* 								<div class="input-filed inline">*/
/* 									<label for="input-quantity">{{ column_quantity }}:</label>*/
/* 									<input type="text" name="" value="1" size="1" class="center" disabled="disabled" style="max-width:50px;height:inherit;">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 				</form>*/
/* 				{% if modules %}*/
/* 				<div class="card-panel">*/
/* 					<h2>{{ text_next }}</h2>*/
/* 					<p>{{ text_next_choice }}</p>*/
/* 					<ul class="collapsible collapsible-modules" data-collapsible="accordion">*/
/* 						{% for module in modules %}{{ module }}{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				<div class="row">*/
/* 					<div class="col s12 m6 offset-m6 l5 offset-l7">*/
/* 						<div class="card-panel">*/
/* 							<table class="bordered">*/
/* 								{% for total in totals %}*/
/* 								<tr>*/
/* 									<th>{{ total.title }}:</th>*/
/* 									<td>{{ total.text }}</td>*/
/* 								</tr>*/
/* 								{% endfor %}*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="flex-reverse">*/
/* 					<a href="{{ checkout }}" class="btn waves-effect waves-light red right">{{ button_checkout }}</a>*/
/* 				</div>*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	{% if attention %}M.toast({html: '<i class="material-icons left">info</i>{{ attention }}', classes: 'toast-info'});{% endif %}*/
/* 	{% if success %}M.toast({html: '<i class="material-icons left">check</i>{{ success }}', classes: 'toast-success'});{% endif %}*/
/* 	{% if error_warning %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_warning }}', classes: 'toast-warning'});{% endif %}*/
/* */
/* 	$('input#input-quantity').change(function() {*/
/* 		$('#update-btn').trigger('click');*/
/* 	});*/
/* */
/* 	$('i[id^=\'quantity-minus\']').on('click', function() {*/
/* 		var quantity = $(this).parent().find('input');*/
/* */
/* 		if (isNaN(quantity.val())) {*/
/* 			quantity.val(1);*/
/* 		}*/
/* */
/* 		if (quantity.val() > 1) {*/
/* 			quantity.val(parseInt(quantity.val()) - 1);*/
/* 		}*/
/* 	});*/
/* */
/* 	$('i[id^=\'quantity-plus\']').on('click', function() {*/
/* 		var quantity = $(this).parent().find('input');*/
/* */
/* 		quantity.val(parseInt(quantity.val()) + 1);*/
/* 	});*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
