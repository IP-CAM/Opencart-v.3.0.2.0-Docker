<?php

/* materialize/template/account/account.twig */
class __TwigTemplate_4f0b3071b81bb00179af10ad965414c147a8446cc365f8781161d6bfb7a09753 extends Twig_Template
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
        echo " section href-underline\">
\t\t\t\t";
        // line 60
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col s12 xl6\">
\t\t\t\t\t\t\t<div class=\"collection with-header href-underline\">
\t\t\t\t\t\t\t\t<div class=\"collection-header\"><h2>";
        // line 65
        echo (isset($context["text_my_account"]) ? $context["text_my_account"] : null);
        echo "</h2></div>
\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 66
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\"><i class=\"material-icons left\">assignment</i>";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 67
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\"><i class=\"material-icons left\">lock</i>";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 68
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\"><i class=\"material-icons left\">home</i>";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 69
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\"><i class=\"material-icons left\">favorite</i>";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 xl6\">
\t\t\t\t\t\t\t<div class=\"collection with-header href-underline\">
\t\t\t\t\t\t\t\t<div class=\"collection-header\"><h2>";
        // line 74
        echo (isset($context["text_my_orders"]) ? $context["text_my_orders"] : null);
        echo "</h2></div>
\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 75
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\"><i class=\"material-icons left\">history</i>";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 76
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\"><i class=\"material-icons left\">file_download</i>";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t";
        // line 77
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 78
            echo "\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\"><i class=\"material-icons left\">account_balance_wallet</i>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a>
\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\"><i class=\"material-icons left\">cached</i>";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 81
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\"><i class=\"material-icons left\">payment</i>";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 82
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\"><i class=\"material-icons left\">receipt</i>";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 xl6\">
\t\t\t\t\t\t\t<div class=\"collection with-header href-underline\">
\t\t\t\t\t\t\t\t<div class=\"collection-header\"><h2>";
        // line 87
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</h2></div>
\t\t\t\t\t\t\t\t";
        // line 88
        if ( !(isset($context["tracking"]) ? $context["tracking"] : null)) {
            // line 89
            echo "\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\"><i class=\"material-icons left\">contacts</i>";
            echo (isset($context["text_affiliate_add"]) ? $context["text_affiliate_add"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\"><i class=\"material-icons left\">border_color</i>";
            echo (isset($context["text_affiliate_edit"]) ? $context["text_affiliate_edit"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            // line 92
            echo (isset($context["tracking"]) ? $context["tracking"] : null);
            echo "\"><i class=\"material-icons left\">code</i>";
            echo (isset($context["text_tracking"]) ? $context["text_tracking"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 96
        if ((isset($context["credit_cards"]) ? $context["credit_cards"] : null)) {
            // line 97
            echo "\t\t\t\t\t\t<div class=\"col s12 xl6\">
\t\t\t\t\t\t\t<div class=\"collection with-header href-underline\">
\t\t\t\t\t\t\t\t<div class=\"collection-header\"><h2>";
            // line 99
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</h2></div>
\t\t\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credit_cards"]) ? $context["credit_cards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 101
                echo "\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
                echo $this->getAttribute($context["credit_card"], "href", array());
                echo "\"><i class=\"material-icons left\">credit_card</i>";
                echo $this->getAttribute($context["credit_card"], "name", array());
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t<div class=\"col s12 xl6\">
\t\t\t\t\t\t\t<div class=\"collection with-header href-underline\">
\t\t\t\t\t\t\t\t<div class=\"collection-header\"><h2>";
        // line 108
        echo (isset($context["text_my_newsletter"]) ? $context["text_my_newsletter"] : null);
        echo "</h2></div>
\t\t\t\t\t\t\t\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 109
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\"><i class=\"material-icons left\">add_alert</i>";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 114
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 116
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 122
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">check</i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "', classes: 'toast-success'})";
        }
        // line 123
        echo "});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 126
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 126,  354 => 123,  348 => 122,  339 => 116,  334 => 114,  324 => 109,  320 => 108,  316 => 106,  311 => 103,  300 => 101,  296 => 100,  292 => 99,  288 => 97,  286 => 96,  282 => 94,  275 => 92,  268 => 91,  260 => 89,  258 => 88,  254 => 87,  244 => 82,  238 => 81,  231 => 80,  223 => 78,  221 => 77,  215 => 76,  209 => 75,  205 => 74,  195 => 69,  189 => 68,  183 => 67,  177 => 66,  173 => 65,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 			<div class="col {{ main }} section href-underline">*/
/* 				{{ content_top }}*/
/* 				<div class="card-panel">*/
/* 					<div class="row">*/
/* 						<div class="col s12 xl6">*/
/* 							<div class="collection with-header href-underline">*/
/* 								<div class="collection-header"><h2>{{ text_my_account }}</h2></div>*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ edit }}"><i class="material-icons left">assignment</i>{{ text_edit }}</a>*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ password }}"><i class="material-icons left">lock</i>{{ text_password }}</a>*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ address }}"><i class="material-icons left">home</i>{{ text_address }}</a>*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ wishlist }}"><i class="material-icons left">favorite</i>{{ text_wishlist }}</a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col s12 xl6">*/
/* 							<div class="collection with-header href-underline">*/
/* 								<div class="collection-header"><h2>{{ text_my_orders }}</h2></div>*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ order }}"><i class="material-icons left">history</i>{{ text_order }}</a>*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ download }}"><i class="material-icons left">file_download</i>{{ text_download }}</a>*/
/* 								{% if reward %}*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ reward }}"><i class="material-icons left">account_balance_wallet</i>{{ text_reward }}</a>*/
/* 								{% endif %}*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ return }}"><i class="material-icons left">cached</i>{{ text_return }}</a>*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ transaction }}"><i class="material-icons left">payment</i>{{ text_transaction }}</a>*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ recurring }}"><i class="material-icons left">receipt</i>{{ text_recurring }}</a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col s12 xl6">*/
/* 							<div class="collection with-header href-underline">*/
/* 								<div class="collection-header"><h2>{{ text_my_affiliate }}</h2></div>*/
/* 								{% if not tracking %}*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ affiliate }}"><i class="material-icons left">contacts</i>{{ text_affiliate_add }}</a></li>*/
/* 								{% else %}*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ affiliate }}"><i class="material-icons left">border_color</i>{{ text_affiliate_edit }}</a></li>*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ tracking }}"><i class="material-icons left">code</i>{{ text_tracking }}</a></li>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 						{% if credit_cards %}*/
/* 						<div class="col s12 xl6">*/
/* 							<div class="collection with-header href-underline">*/
/* 								<div class="collection-header"><h2>{{ text_credit_card }}</h2></div>*/
/* 								{% for credit_card in credit_cards %}*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ credit_card.href }}"><i class="material-icons left">credit_card</i>{{ credit_card.name }}</a>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						<div class="col s12 xl6">*/
/* 							<div class="collection with-header href-underline">*/
/* 								<div class="collection-header"><h2>{{ text_my_newsletter }}</h2></div>*/
/* 								<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ newsletter }}"><i class="material-icons left">add_alert</i>{{ text_newsletter }}</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	{% if success %}M.toast({html: '<i class="material-icons left">check</i>{{ success }}', classes: 'toast-success'}){% endif %}*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
