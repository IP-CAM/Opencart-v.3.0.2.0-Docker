<?php

/* materialize/template/account/order_list.twig */
class __TwigTemplate_806ee99333f544f7a0843584f0bf06ad1879766b7278212595ebf720b648c809 extends Twig_Template
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
\t\t\t<div id=\"content\" class=\"col ";
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
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 63
            echo "\t\t\t\t\t<ul class=\"collection\">
\t\t\t\t\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 65
                echo "\t\t\t\t\t\t<li class=\"collection-item avatar\">
\t\t\t\t\t\t\t<a href=\"";
                // line 66
                echo $this->getAttribute($context["order"], "view", array());
                echo "\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\"><i class=\"material-icons waves-effect circle\">shop</i></a>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<table class=\"highlight responsive-table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 71
                echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 72
                echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 73
                echo (isset($context["column_product"]) ? $context["column_product"] : null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 74
                echo (isset($context["column_status"]) ? $context["column_status"] : null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 75
                echo (isset($context["column_total"]) ? $context["column_total"] : null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 76
                echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><a href=\"";
                // line 81
                echo $this->getAttribute($context["order"], "view", array());
                echo "\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\">#";
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 82
                echo $this->getAttribute($context["order"], "name", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">";
                // line 83
                echo $this->getAttribute($context["order"], "products", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 84
                echo $this->getAttribute($context["order"], "status", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 85
                echo $this->getAttribute($context["order"], "total", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 86
                echo $this->getAttribute($context["order"], "date_added", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
            // line 94
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
\t\t\t\t\t";
        } else {
            // line 96
            echo "\t\t\t\t\t\t<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t</div>
\t\t\t\t<a href=\"";
        // line 99
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn-flat waves-effect waves-light href-underline\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a>
\t\t\t\t";
        // line 100
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 102
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 107
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 107,  285 => 102,  280 => 100,  274 => 99,  271 => 98,  265 => 96,  260 => 94,  257 => 93,  244 => 86,  240 => 85,  236 => 84,  232 => 83,  228 => 82,  220 => 81,  212 => 76,  208 => 75,  204 => 74,  200 => 73,  196 => 72,  192 => 71,  182 => 66,  179 => 65,  175 => 64,  172 => 63,  170 => 62,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 			<div id="content" class="col {{ main }}">*/
/* 				{{ content_top }}*/
/* 				<div class="card-panel">*/
/* 					{% if orders %}*/
/* 					<ul class="collection">*/
/* 						{% for order in orders %}*/
/* 						<li class="collection-item avatar">*/
/* 							<a href="{{ order.view }}" title="{{ button_view }}"><i class="material-icons waves-effect circle">shop</i></a>*/
/* 							<p>*/
/* 								<table class="highlight responsive-table">*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th>{{ column_order_id }}</th>*/
/* 											<th>{{ column_customer }}</th>*/
/* 											<th>{{ column_product }}</th>*/
/* 											<th>{{ column_status }}</th>*/
/* 											<th>{{ column_total }}</th>*/
/* 											<th>{{ column_date_added }}</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody>*/
/* 										<tr>*/
/* 											<td class="center"><a href="{{ order.view }}" title="{{ button_view }}">#{{ order.order_id }}</a></td>*/
/* 											<td>{{ order.name }}</td>*/
/* 											<td class="center">{{ order.products }}</td>*/
/* 											<td>{{ order.status }}</td>*/
/* 											<td>{{ order.total }}</td>*/
/* 											<td>{{ order.date_added }}</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 								</table>*/
/* 							</p>*/
/* 						</li>*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 					{{ pagination }}*/
/* 					{% else %}*/
/* 						<p>{{ text_empty }}</p>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<a href="{{ continue }}" class="btn-flat waves-effect waves-light href-underline">{{ button_back }}</a>*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
