<?php

/* materialize/template/information/sitemap.twig */
class __TwigTemplate_57d80f4fcedd69a73dfc6bf168457c6217ad9e937640dda1d8db668a83c445a8 extends Twig_Template
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
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col s12 m6\">
\t\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 66
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 67
            echo $this->getAttribute($context["category_1"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category_1"], "name", array());
            echo "</a>
\t\t\t\t\t\t\t\t\t";
            // line 68
            if ($this->getAttribute($context["category_1"], "children", array())) {
                // line 69
                echo "\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 72
                    echo $this->getAttribute($context["category_2"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 73
                    if ($this->getAttribute($context["category_2"], "children", array())) {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 75
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                            echo $this->getAttribute($context["category_3"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["category_3"], "name", array());
                            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 m6\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 90
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 91
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 93
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 94
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 95
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 96
        echo (isset($context["history"]) ? $context["history"] : null);
        echo "\">";
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 97
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 100
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "\">";
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 101
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 102
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\">";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
        // line 105
        echo (isset($context["text_information"]) ? $context["text_information"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["information"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["information"], "title", array());
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        // line 114
        if ((isset($context["module_blog"]) ? $context["module_blog"] : null)) {
            // line 115
            echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blog_categories"]) ? $context["blog_categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
                // line 117
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 118
                echo $this->getAttribute($context["category_1"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 119
                if ($this->getAttribute($context["category_1"], "children", array())) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t";
                    // line 121
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 123
                        echo $this->getAttribute($context["category_2"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["category_2"], "name", array());
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 124
                        if ($this->getAttribute($context["category_2"], "children", array())) {
                            // line 125
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 126
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                                // line 127
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                echo $this->getAttribute($context["category_3"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["category_3"], "name", array());
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 129
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 131
                        echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t";
                }
                // line 135
                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        // line 139
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 142
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 144
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 149
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 149,  439 => 144,  434 => 142,  429 => 139,  425 => 137,  418 => 135,  414 => 133,  407 => 131,  403 => 129,  392 => 127,  388 => 126,  385 => 125,  383 => 124,  377 => 123,  374 => 122,  370 => 121,  367 => 120,  365 => 119,  359 => 118,  356 => 117,  352 => 116,  349 => 115,  347 => 114,  337 => 110,  326 => 108,  322 => 107,  317 => 105,  309 => 102,  303 => 101,  297 => 100,  289 => 97,  283 => 96,  277 => 95,  271 => 94,  265 => 93,  258 => 91,  252 => 90,  246 => 86,  239 => 84,  235 => 82,  228 => 80,  224 => 78,  213 => 76,  209 => 75,  206 => 74,  204 => 73,  198 => 72,  195 => 71,  191 => 70,  188 => 69,  186 => 68,  180 => 67,  177 => 66,  173 => 65,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 					<div class="row">*/
/* 						<div class="col s12 m6">*/
/* 							 <ul>*/
/* 								{% for category_1 in categories %}*/
/* 								<li>*/
/* 									<a href="{{ category_1.href }}">{{ category_1.name }}</a>*/
/* 									{% if category_1.children %}*/
/* 									<ol>*/
/* 										{% for category_2 in category_1.children %}*/
/* 										<li>*/
/* 											<a href="{{ category_2.href }}">{{ category_2.name }}</a>*/
/* 											{% if category_2.children %}*/
/* 												<ol>*/
/* 													{% for category_3 in category_2.children %}*/
/* 													<li><a href="{{ category_3.href }}">{{ category_3.name }}</a></li>*/
/* 													{% endfor %}*/
/* 												</ol>*/
/* 											{% endif %}*/
/* 										</li>*/
/* 										{% endfor %}*/
/* 									</ol>*/
/* 									{% endif %}*/
/* 								</li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="col s12 m6">*/
/* 							<ul>*/
/* 								<li><a href="{{ special }}">{{ text_special }}</a></li>*/
/* 								<li><a href="{{ account }}">{{ text_account }}</a>*/
/* 									<ol>*/
/* 										<li><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/* 										<li><a href="{{ password }}">{{ text_password }}</a></li>*/
/* 										<li><a href="{{ address }}">{{ text_address }}</a></li>*/
/* 										<li><a href="{{ history }}">{{ text_history }}</a></li>*/
/* 										<li><a href="{{ download }}">{{ text_download }}</a></li>*/
/* 									</ol>*/
/* 								</li>*/
/* 								<li><a href="{{ cart }}">{{ text_cart }}</a></li>*/
/* 								<li><a href="{{ checkout }}">{{ text_checkout }}</a></li>*/
/* 								<li><a href="{{ search }}">{{ text_search }}</a></li>*/
/* 								<li>*/
/* 									<br>*/
/* 									<span class="text-bold">{{ text_information }}</span>*/
/* 									<ol>*/
/* 										{% for information in informations %}*/
/* 										<li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/* 										{% endfor %}*/
/* 										<li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/* 									</ol>*/
/* 								</li>*/
/* 							</ul>*/
/* 							{% if module_blog %}*/
/* 							<ul>*/
/* 								{% for category_1 in blog_categories %}*/
/* 								<li>*/
/* 									<a href="{{ category_1.href }}">{{ category_1.name }}</a>*/
/* 									{% if category_1.children %}*/
/* 									<ol>*/
/* 										{% for category_2 in category_1.children %}*/
/* 										<li>*/
/* 											<a href="{{ category_2.href }}">{{ category_2.name }}</a>*/
/* 											{% if category_2.children %}*/
/* 												<ol>*/
/* 													{% for category_3 in category_2.children %}*/
/* 													<li><a href="{{ category_3.href }}">{{ category_3.name }}</a></li>*/
/* 													{% endfor %}*/
/* 												</ol>*/
/* 											{% endif %}*/
/* 										</li>*/
/* 										{% endfor %}*/
/* 									</ol>*/
/* 									{% endif %}*/
/* 								</li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
