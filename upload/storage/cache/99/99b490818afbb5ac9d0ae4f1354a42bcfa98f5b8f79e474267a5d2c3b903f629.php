<?php

/* materialize/template/account/download.twig */
class __TwigTemplate_31d1b8ef28b412f46a9f18b3c4bb243e553537e4f5a4709801867cc638512541 extends Twig_Template
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
\t\t\t\t\t";
        // line 61
        if ((isset($context["downloads"]) ? $context["downloads"] : null)) {
            // line 62
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["downloads"]) ? $context["downloads"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 63
                echo "\t\t\t\t\t<div class=\"card horizontal\">
\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t<a href=\"";
                // line 65
                echo $this->getAttribute($context["download"], "href", array());
                echo "\" class=\"tooltipped\" data-position=\"top\" data-delay=\"50\" data-tooltip=\"";
                echo (isset($context["button_download"]) ? $context["button_download"] : null);
                echo "\"><img src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"catalog/view/theme/materialize/image/download-icon.png\" class=\"lazyload\" width=\"75\" height=\"75\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-stacked\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 69
                echo $this->getAttribute($context["download"], "href", array());
                echo "\" class=\"text-bold\">";
                echo $this->getAttribute($context["download"], "name", array());
                echo "</a>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
                // line 71
                echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
                echo ":</span>&nbsp;";
                echo $this->getAttribute($context["download"], "order_id", array());
                echo "
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
                // line 73
                echo (isset($context["column_size"]) ? $context["column_size"] : null);
                echo ":</span>&nbsp;";
                echo $this->getAttribute($context["download"], "size", array());
                echo "
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
                // line 75
                echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
                echo ":</span>&nbsp;";
                echo $this->getAttribute($context["download"], "date_added", array());
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t\t\t\t";
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
\t\t\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t<p>";
            // line 83
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t<a href=\"";
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn-flat waves-effect waves-light href-underline\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a>
\t\t\t\t";
        // line 87
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 89
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 94
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/account/download.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 94,  252 => 89,  247 => 87,  240 => 86,  234 => 83,  231 => 82,  225 => 80,  212 => 75,  205 => 73,  198 => 71,  191 => 69,  180 => 65,  176 => 63,  171 => 62,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 					{% if downloads %}*/
/* 					{% for download in downloads %}*/
/* 					<div class="card horizontal">*/
/* 						<div class="card-image">*/
/* 							<a href="{{ download.href }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="{{ button_download }}"><img src="{{ img_loader }}" data-src="catalog/view/theme/materialize/image/download-icon.png" class="lazyload" width="75" height="75"></a>*/
/* 						</div>*/
/* 						<div class="card-stacked">*/
/* 							<div class="card-content">*/
/* 								<a href="{{ download.href }}" class="text-bold">{{ download.name }}</a>*/
/* 								<br>*/
/* 								<span class="text-bold">{{ column_order_id }}:</span>&nbsp;{{ download.order_id }}*/
/* 								<br>*/
/* 								<span class="text-bold">{{ column_size }}:</span>&nbsp;{{ download.size }}*/
/* 								<br>*/
/* 								<span class="text-bold">{{ column_date_added }}:</span>&nbsp;{{ download.date_added }}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 					{{ pagination }}*/
/* 					{% else %}*/
/* 					<div class="card-panel">*/
/* 						<p>{{ text_empty }}</p>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					<a href="{{ continue }}" class="btn-flat waves-effect waves-light href-underline">{{ button_back }}</a>*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
