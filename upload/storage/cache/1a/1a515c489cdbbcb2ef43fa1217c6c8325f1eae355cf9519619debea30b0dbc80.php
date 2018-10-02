<?php

/* materialize/template/account/voucher.twig */
class __TwigTemplate_ec92c81a6fada51d115a9a8d8d9927e33bbd5939263e3deb03b7487a39e70408 extends Twig_Template
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
\t\t\t\t<form action=\"";
        // line 61
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t<p>";
        // line 63
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "</p>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"to_name\" value=\"";
        // line 67
        echo (isset($context["to_name"]) ? $context["to_name"] : null);
        echo "\" id=\"input-to-name\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-to-name\">";
        // line 68
        echo (isset($context["entry_to_name"]) ? $context["entry_to_name"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">email</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"to_email\" value=\"";
        // line 72
        echo (isset($context["to_email"]) ? $context["to_email"] : null);
        echo "\" id=\"input-to-email\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-to-email\">";
        // line 73
        echo (isset($context["entry_to_email"]) ? $context["entry_to_email"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<span class=\"helper-text\" data-error=\"";
        // line 74
        echo (isset($context["text_email_error"]) ? $context["text_email_error"] : null);
        echo "\" data-success=\"";
        echo (isset($context["text_email_success"]) ? $context["text_email_success"] : null);
        echo "\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">account_box</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"from_name\" value=\"";
        // line 80
        echo (isset($context["from_name"]) ? $context["from_name"] : null);
        echo "\" id=\"input-from-name\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-from-name\">";
        // line 81
        echo (isset($context["entry_from_name"]) ? $context["entry_from_name"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">mail_outline</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"from_email\" value=\"";
        // line 85
        echo (isset($context["from_email"]) ? $context["from_email"] : null);
        echo "\" id=\"input-from-email\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-from-email\">";
        // line 86
        echo (isset($context["entry_from_email"]) ? $context["entry_from_email"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<span class=\"helper-text\" data-error=\"";
        // line 87
        echo (isset($context["text_email_error"]) ? $context["text_email_error"] : null);
        echo "\" data-success=\"";
        echo (isset($context["text_email_success"]) ? $context["text_email_success"] : null);
        echo "\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t\t\t<label for=\"input-message\">";
        // line 93
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"input-message\" class=\"materialize-textarea tooltipped\" data-position=\"top\" data-delay=\"50\" data-tooltip=\"";
        // line 94
        echo (isset($context["help_message"]) ? $context["help_message"] : null);
        echo "\">";
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s12 l6\">
\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
        // line 97
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo ":</span>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voucher_themes"]) ? $context["voucher_themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["voucher_theme"], "voucher_theme_id", array()) == (isset($context["voucher_theme_id"]) ? $context["voucher_theme_id"] : null))) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<label for=\"voucher-theme-";
                // line 102
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"voucher-theme-";
                // line 103
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\" class=\"with-gap\" type=\"radio\" name=\"voucher_theme_id\" value=\"";
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 104
                echo $this->getAttribute($context["voucher_theme"], "name", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<label for=\"voucher-theme-";
                // line 109
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"voucher-theme-";
                // line 110
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\" class=\"with-gap\" type=\"radio\" name=\"voucher_theme_id\" value=\"";
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 111
                echo $this->getAttribute($context["voucher_theme"], "name", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">attach_money</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"amount\" value=\"";
        // line 122
        echo (isset($context["amount"]) ? $context["amount"] : null);
        echo "\" id=\"input-amount\" class=\"validate tooltipped\" size=\"5\" data-position=\"top\" data-delay=\"50\" data-tooltip=\"";
        echo (isset($context["help_amount"]) ? $context["help_amount"] : null);
        echo "\">
\t\t\t\t\t\t\t\t<label for=\"input-amount\">";
        // line 123
        echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t\t<label for=\"text-agree\">
\t\t\t\t\t\t\t\t\t";
        // line 129
        if ((isset($context["agree"]) ? $context["agree"] : null)) {
            // line 130
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"filled-in\" id=\"text-agree\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 132
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"filled-in\" id=\"text-agree\">
\t\t\t\t\t\t\t\t\t";
        }
        // line 134
        echo "\t\t\t\t\t\t\t\t\t<span>";
        echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t<button type=\"submit\" value=\"";
        // line 140
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
        // line 143
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 145
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 151
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 152
        echo "\t";
        if ((isset($context["error_to_name"]) ? $context["error_to_name"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_to_name"]) ? $context["error_to_name"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 153
        echo "\t";
        if ((isset($context["error_to_email"]) ? $context["error_to_email"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_to_email"]) ? $context["error_to_email"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 154
        echo "\t";
        if ((isset($context["error_from_name"]) ? $context["error_from_name"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_from_name"]) ? $context["error_from_name"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 155
        echo "\t";
        if ((isset($context["error_from_email"]) ? $context["error_from_email"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_from_email"]) ? $context["error_from_email"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 156
        echo "\t";
        if ((isset($context["error_theme"]) ? $context["error_theme"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_theme"]) ? $context["error_theme"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 157
        echo "\t";
        if ((isset($context["error_amount"]) ? $context["error_amount"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_amount"]) ? $context["error_amount"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 158
        echo "});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 161
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/account/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 161,  424 => 158,  417 => 157,  410 => 156,  403 => 155,  396 => 154,  389 => 153,  382 => 152,  376 => 151,  367 => 145,  362 => 143,  354 => 140,  344 => 134,  340 => 132,  336 => 130,  334 => 129,  325 => 123,  319 => 122,  311 => 116,  305 => 115,  298 => 111,  292 => 110,  288 => 109,  285 => 108,  278 => 104,  272 => 103,  268 => 102,  265 => 101,  262 => 100,  258 => 99,  253 => 97,  245 => 94,  241 => 93,  230 => 87,  226 => 86,  222 => 85,  215 => 81,  211 => 80,  200 => 74,  196 => 73,  192 => 72,  185 => 68,  181 => 67,  174 => 63,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/* 					<div class="card-panel">*/
/* 						<p>{{ text_description }}</p>*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">account_circle</i>*/
/* 								<input type="text" name="to_name" value="{{ to_name }}" id="input-to-name" class="validate">*/
/* 								<label for="input-to-name">{{ entry_to_name }}</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">email</i>*/
/* 								<input type="text" name="to_email" value="{{ to_email }}" id="input-to-email" class="validate">*/
/* 								<label for="input-to-email">{{ entry_to_email }}</label>*/
/* 								<span class="helper-text" data-error="{{ text_email_error }}" data-success="{{ text_email_success }}"></span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">account_box</i>*/
/* 								<input type="text" name="from_name" value="{{ from_name }}" id="input-from-name" class="validate">*/
/* 								<label for="input-from-name">{{ entry_from_name }}</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">mail_outline</i>*/
/* 								<input type="text" name="from_email" value="{{ from_email }}" id="input-from-email" class="validate">*/
/* 								<label for="input-from-email">{{ entry_from_email }}</label>*/
/* 								<span class="helper-text" data-error="{{ text_email_error }}" data-success="{{ text_email_success }}"></span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">mode_edit</i>*/
/* 								<label for="input-message">{{ entry_message }}</label>*/
/* 								<textarea name="message" id="input-message" class="materialize-textarea tooltipped" data-position="top" data-delay="50" data-tooltip="{{ help_message }}">{{ message }}</textarea>*/
/* 							</div>*/
/* 							<div class="col s12 l6">*/
/* 								<span class="text-bold">{{ entry_theme }}:</span>*/
/* 								<ul>*/
/* 									{% for voucher_theme in voucher_themes %}*/
/* 									{% if voucher_theme.voucher_theme_id == voucher_theme_id %}*/
/* 									<li>*/
/* 										<label for="voucher-theme-{{ voucher_theme.voucher_theme_id }}">*/
/* 											<input id="voucher-theme-{{ voucher_theme.voucher_theme_id }}" class="with-gap" type="radio" name="voucher_theme_id" value="{{ voucher_theme.voucher_theme_id }}" checked="checked">*/
/* 											<span>{{ voucher_theme.name }}</span>*/
/* 										</label>*/
/* 									</li>*/
/* 									{% else %}*/
/* 									<li>*/
/* 										<label for="voucher-theme-{{ voucher_theme.voucher_theme_id }}">*/
/* 											<input id="voucher-theme-{{ voucher_theme.voucher_theme_id }}" class="with-gap" type="radio" name="voucher_theme_id" value="{{ voucher_theme.voucher_theme_id }}">*/
/* 											<span>{{ voucher_theme.name }}</span>*/
/* 										</label>*/
/* 									</li>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">attach_money</i>*/
/* 								<input type="text" name="amount" value="{{ amount }}" id="input-amount" class="validate tooltipped" size="5" data-position="top" data-delay="50" data-tooltip="{{ help_amount }}">*/
/* 								<label for="input-amount">{{ entry_amount }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="col s12">*/
/* 								<label for="text-agree">*/
/* 									{% if agree %}*/
/* 									<input type="checkbox" name="agree" value="1" class="filled-in" id="text-agree" checked="checked">*/
/* 									{% else %}*/
/* 									<input type="checkbox" name="agree" value="1" class="filled-in" id="text-agree">*/
/* 									{% endif %}*/
/* 									<span>{{ text_agree }}</span>*/
/* 								</label>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="flex-reverse">*/
/* 						<button type="submit" value="{{ button_continue }}" class="btn waves-effect waves-light red">{{ button_continue }}</button>*/
/* 					</div>*/
/* 				</form>*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	{% if error_warning %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_warning }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_to_name %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_to_name }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_to_email %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_to_email }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_from_name %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_from_name }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_from_email %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_from_email }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_theme %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_theme }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_amount %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_amount }}', classes: 'toast-warning'});{% endif %}*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
