<?php

/* materialize/template/product/manufacturer_list.twig */
class __TwigTemplate_baff33398b230c83f418010cc7341df1d0e32e595e3a9b1e5bd0c61445b8c9c1 extends Twig_Template
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
            list($context["main"], $context["goods"]) =             array("s12 l6", "s12");
        } elseif ((        // line 37
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 38
            echo "\t";
            list($context["main"], $context["goods"]) =             array("s12 l9", "s12 m6");
        } else {
            // line 40
            echo "\t";
            list($context["main"], $context["goods"]) =             array("s12", "s12 m6 l4");
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
\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t";
        // line 61
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t\t\t";
        // line 62
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 63
            echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>";
            // line 64
            echo (isset($context["text_index"]) ? $context["text_index"] : null);
            echo "</strong>
\t\t\t\t\t\t\t<ul class=\"manufacturer-list section\">
\t\t\t\t\t\t\t";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 67
                echo "\t\t\t\t\t\t\t\t<li class=\"waves-effect tooltipped\" data-position=\"top\" data-delay=\"50\" data-tooltip=\"";
                echo (isset($context["text_manufacturers_starting"]) ? $context["text_manufacturers_starting"] : null);
                echo " &#34;";
                echo $this->getAttribute($context["category"], "name", array());
                echo "&#34;\"><a href=\"index.php?route=product/manufacturer#";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>&nbsp;
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 72
                echo "\t\t\t\t\t\t\t<h2 id=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</h2>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t";
                // line 74
                if ($this->getAttribute($context["category"], "manufacturer", array())) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "manufacturer", array()), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t";
                        // line 77
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["manufacturers"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                            // line 78
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col s6 m4 l3 \">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"section center tooltipped\" data-position=\"top\" data-delay=\"50\" data-tooltip=\"";
                            // line 79
                            echo (isset($context["text_view_all_products"]) ? $context["text_view_all_products"] : null);
                            echo " &#34;";
                            echo $this->getAttribute($context["manufacturer"], "name", array());
                            echo "&#34;\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 80
                            if ($this->getAttribute($context["manufacturer"], "logo", array())) {
                                // line 81
                                echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"waves-effect waves-light\" href=\"";
                                echo $this->getAttribute($context["manufacturer"], "href", array());
                                echo "\"><img class=\"responsive-img lazyload\" src=\"";
                                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                                echo "\" data-src=\"";
                                echo $this->getAttribute($context["manufacturer"], "logo", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["manufacturer"], "name", array());
                                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 84
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"grey-text text-darken-4 text-bold\" href=\"";
                            echo $this->getAttribute($context["manufacturer"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["manufacturer"], "name", array());
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 88
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "\t\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t\t";
        } else {
            // line 93
            echo "\t\t\t\t\t\t<p class=\"flow-text text-bold\">";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            // line 94
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"catalog/view/theme/materialize/img/search-empty.png\" alt=\"\">
\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 97
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 99
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 104
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/product/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 104,  303 => 99,  298 => 97,  295 => 96,  290 => 94,  285 => 93,  282 => 92,  276 => 91,  273 => 90,  266 => 88,  253 => 84,  240 => 81,  238 => 80,  232 => 79,  229 => 78,  225 => 77,  222 => 76,  217 => 75,  215 => 74,  207 => 72,  203 => 71,  199 => 69,  184 => 67,  180 => 66,  175 => 64,  172 => 63,  170 => 62,  166 => 61,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 	{% set main, goods = 's12 l6', 's12' %}*/
/* {% elseif column_left or column_right %}*/
/* 	{% set main, goods = 's12 l9', 's12 m6' %}*/
/* {% else %}*/
/* 	{% set main, goods = 's12', 's12 m6 l4' %}*/
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
/* 				<div class="card-panel">*/
/* 					{{ content_top }}*/
/* 					{% if categories %}*/
/* 						<p>*/
/* 							<strong>{{ text_index }}</strong>*/
/* 							<ul class="manufacturer-list section">*/
/* 							{% for category in categories %}*/
/* 								<li class="waves-effect tooltipped" data-position="top" data-delay="50" data-tooltip="{{ text_manufacturers_starting }} &#34;{{ category.name }}&#34;"><a href="index.php?route=product/manufacturer#{{ category.name }}">{{ category.name }}</a></li>&nbsp;*/
/* 							{% endfor %}*/
/* 							</ul>*/
/* 						</p>*/
/* 						{% for category in categories %}*/
/* 							<h2 id="{{ category.name }}">{{ category.name }}</h2>*/
/* 							<hr>*/
/* 							{% if category.manufacturer %}*/
/* 								{% for manufacturers in category.manufacturer|batch(4) %}*/
/* 								<div class="row">*/
/* 									{% for manufacturer in manufacturers %}*/
/* 										<div class="col s6 m4 l3 ">*/
/* 											<div class="section center tooltipped" data-position="top" data-delay="50" data-tooltip="{{ text_view_all_products }} &#34;{{ manufacturer.name }}&#34;">*/
/* 											{% if manufacturer.logo %}*/
/* 											<a class="waves-effect waves-light" href="{{ manufacturer.href }}"><img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ manufacturer.logo }}" alt="{{ manufacturer.name }}"></a>*/
/* 											<br>*/
/* 											{% endif %}*/
/* 											<a class="grey-text text-darken-4 text-bold" href="{{ manufacturer.href }}">{{ manufacturer.name }}</a>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 								{% endfor %}*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					{% else %}*/
/* 						<p class="flow-text text-bold">{{ text_empty }}</p>*/
/* 						<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="catalog/view/theme/materialize/img/search-empty.png" alt="">*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
