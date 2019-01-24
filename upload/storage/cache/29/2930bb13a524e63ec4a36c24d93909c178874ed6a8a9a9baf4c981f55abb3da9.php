<?php

/* materialize/template/account/return_form.twig */
class __TwigTemplate_f17a21ed713c22cb40aec406be2553e6c9c9781de346e2b99f09d9944a5bbc8a extends Twig_Template
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
\t\t\t\t\t\t<h2>";
        // line 63
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</h2>
\t\t\t\t\t\t";
        // line 64
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 68
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-firstname\" class=\"text-bold\">";
        // line 69
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 73
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-lastname\" class=\"text-bold\">";
        // line 74
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">phone</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"telephone\" value=\"";
        // line 80
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"fvalidate\">
\t\t\t\t\t\t\t\t<label for=\"input-telephone\" class=\"text-bold\">";
        // line 81
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">email</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 85
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-email\" class=\"text-bold\">";
        // line 86
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
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
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">info</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"order_id\" value=\"";
        // line 93
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "\" id=\"input-order-id\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-order-id\" class=\"text-bold\">";
        // line 94
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">date_range</i>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"date_ordered\" value=\"";
        // line 98
        echo (isset($context["date_ordered"]) ? $context["date_ordered"] : null);
        echo "\" id=\"input-date-ordered\" class=\"datepicker\">
\t\t\t\t\t\t\t\t<label for=\"input-date-ordered\" class=\"text-bold\">";
        // line 99
        echo (isset($context["entry_date_ordered"]) ? $context["entry_date_ordered"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"text-bold\">";
        // line 102
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</p>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product\" value=\"";
        // line 105
        echo (isset($context["product"]) ? $context["product"] : null);
        echo "\" id=\"input-product\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-product\" class=\"text-bold\">";
        // line 106
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"model\" value=\"";
        // line 109
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\"  id=\"input-model\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-model\" class=\"text-bold\">";
        // line 110
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
        // line 113
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-quantity\" class=\"text-bold\">";
        // line 114
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t\t<p class=\"text-bold\">";
        // line 119
        echo (isset($context["entry_reason"]) ? $context["entry_reason"] : null);
        echo "</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_reasons"]) ? $context["return_reasons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 122
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
            // line 123
            if (($this->getAttribute($context["return_reason"], "return_reason_id", array()) == (isset($context["return_reason_id"]) ? $context["return_reason_id"] : null))) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t<label for=\"";
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"";
                // line 125
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\" class=\"with-gap\" type=\"radio\" name=\"return_reason_id\" value=\"";
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 126
                echo $this->getAttribute($context["return_reason"], "name", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t<label for=\"";
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"";
                // line 130
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\" class=\"with-gap\" type=\"radio\" name=\"return_reason_id\" value=\"";
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 131
                echo $this->getAttribute($context["return_reason"], "name", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 134
            echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t\t<p class=\"text-bold\">";
        // line 139
        echo (isset($context["entry_opened"]) ? $context["entry_opened"] : null);
        echo "</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<label for=\"radio-opened\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 143
        if ((isset($context["opened"]) ? $context["opened"] : null)) {
            // line 144
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"with-gap\" id=\"radio-opened\" type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 146
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"with-gap\" id=\"radio-opened\" type=\"radio\" name=\"opened\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 148
        echo "\t\t\t\t\t\t\t\t\t\t\t<span>";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<label for=\"radio-not-opened\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 153
        if ( !(isset($context["opened"]) ? $context["opened"] : null)) {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"with-gap\" id=\"radio-not-opened\" type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 156
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"with-gap\" id=\"radio-not-opened\" type=\"radio\" name=\"opened\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 158
        echo "\t\t\t\t\t\t\t\t\t\t\t<span>";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t\t<label for=\"input-comment\" class=\"text-bold\">";
        // line 166
        echo (isset($context["entry_fault_detail"]) ? $context["entry_fault_detail"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<textarea name=\"comment\" id=\"input-comment\" class=\"materialize-textarea\">";
        // line 167
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 170
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
\t\t\t\t\t\t";
        // line 171
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 172
            echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t\t<label for=\"text-agree\">
\t\t\t\t\t\t\t\t\t";
            // line 175
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 176
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"filled-in\" id=\"text-agree\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"filled-in\" id=\"text-agree\">
\t\t\t\t\t\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t\t\t\t\t\t<span>";
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t<a href=\"";
        // line 188
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn-flat waves-effect waves-light href-underline\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t<div class=\"flex-reverse no-padding\">
\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"";
        // line 192
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
        // line 197
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 199
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 205
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 206
        echo "\t";
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 207
        echo "\t";
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 208
        echo "\t";
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 209
        echo "\t";
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 210
        echo "\t";
        if ((isset($context["error_order_id"]) ? $context["error_order_id"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_order_id"]) ? $context["error_order_id"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 211
        echo "\t";
        if ((isset($context["error_product"]) ? $context["error_product"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_product"]) ? $context["error_product"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 212
        echo "\t";
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 213
        echo "\t";
        if ((isset($context["error_reason"]) ? $context["error_reason"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_reason"]) ? $context["error_reason"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 214
        echo "\t\$('.datepicker').datepicker({
\t\tformat: 'yyyy-mm-dd',
\t\tfirstDay: ";
        // line 216
        echo (isset($context["first_day"]) ? $context["first_day"] : null);
        echo ",
\t\ti18n: {
\t\t\tclear: '";
        // line 218
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\ttoday: '";
        // line 219
        echo (isset($context["button_date_today"]) ? $context["button_date_today"] : null);
        echo "',
\t\t\tdone: '";
        // line 220
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tmonths: ['";
        // line 221
        echo (isset($context["text_months_full_january"]) ? $context["text_months_full_january"] : null);
        echo "', '";
        echo (isset($context["text_months_full_february"]) ? $context["text_months_full_february"] : null);
        echo "', '";
        echo (isset($context["text_months_full_march"]) ? $context["text_months_full_march"] : null);
        echo "', '";
        echo (isset($context["text_months_full_april"]) ? $context["text_months_full_april"] : null);
        echo "', '";
        echo (isset($context["text_months_full_may"]) ? $context["text_months_full_may"] : null);
        echo "', '";
        echo (isset($context["text_months_full_june"]) ? $context["text_months_full_june"] : null);
        echo "', '";
        echo (isset($context["text_months_full_july"]) ? $context["text_months_full_july"] : null);
        echo "', '";
        echo (isset($context["text_months_full_august"]) ? $context["text_months_full_august"] : null);
        echo "', '";
        echo (isset($context["text_months_full_september"]) ? $context["text_months_full_september"] : null);
        echo "', '";
        echo (isset($context["text_months_full_october"]) ? $context["text_months_full_october"] : null);
        echo "', '";
        echo (isset($context["text_months_full_november"]) ? $context["text_months_full_november"] : null);
        echo "', '";
        echo (isset($context["text_months_full_december"]) ? $context["text_months_full_december"] : null);
        echo "'],
\t\t\tmonthsShort: ['";
        // line 222
        echo (isset($context["text_months_short_january"]) ? $context["text_months_short_january"] : null);
        echo "', '";
        echo (isset($context["text_months_short_february"]) ? $context["text_months_short_february"] : null);
        echo "', '";
        echo (isset($context["text_months_short_march"]) ? $context["text_months_short_march"] : null);
        echo "', '";
        echo (isset($context["text_months_short_april"]) ? $context["text_months_short_april"] : null);
        echo "', '";
        echo (isset($context["text_months_short_may"]) ? $context["text_months_short_may"] : null);
        echo "', '";
        echo (isset($context["text_months_short_june"]) ? $context["text_months_short_june"] : null);
        echo "', '";
        echo (isset($context["text_months_short_july"]) ? $context["text_months_short_july"] : null);
        echo "', '";
        echo (isset($context["text_months_short_august"]) ? $context["text_months_short_august"] : null);
        echo "', '";
        echo (isset($context["text_months_short_september"]) ? $context["text_months_short_september"] : null);
        echo "', '";
        echo (isset($context["text_months_short_october"]) ? $context["text_months_short_october"] : null);
        echo "', '";
        echo (isset($context["text_months_short_november"]) ? $context["text_months_short_november"] : null);
        echo "', '";
        echo (isset($context["text_months_short_december"]) ? $context["text_months_short_december"] : null);
        echo "'],
\t\t\tweekdays: ['";
        // line 223
        echo (isset($context["text_weekdays_full_sunday"]) ? $context["text_weekdays_full_sunday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_full_monday"]) ? $context["text_weekdays_full_monday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_full_tuesday"]) ? $context["text_weekdays_full_tuesday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_full_wednesday"]) ? $context["text_weekdays_full_wednesday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_full_thursday"]) ? $context["text_weekdays_full_thursday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_full_friday"]) ? $context["text_weekdays_full_friday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_full_saturday"]) ? $context["text_weekdays_full_saturday"] : null);
        echo "'],
\t\t\tweekdaysShort: ['";
        // line 224
        echo (isset($context["text_weekdays_short_sunday"]) ? $context["text_weekdays_short_sunday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_monday"]) ? $context["text_weekdays_short_monday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_tuesday"]) ? $context["text_weekdays_short_tuesday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_wednesday"]) ? $context["text_weekdays_short_wednesday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_thursday"]) ? $context["text_weekdays_short_thursday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_friday"]) ? $context["text_weekdays_short_friday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_saturday"]) ? $context["text_weekdays_short_saturday"] : null);
        echo "'],
\t\t\tweekdaysAbbrev: ['";
        // line 225
        echo (isset($context["text_weekdays_short_sunday"]) ? $context["text_weekdays_short_sunday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_monday"]) ? $context["text_weekdays_short_monday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_tuesday"]) ? $context["text_weekdays_short_tuesday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_wednesday"]) ? $context["text_weekdays_short_wednesday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_thursday"]) ? $context["text_weekdays_short_thursday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_friday"]) ? $context["text_weekdays_short_friday"] : null);
        echo "', '";
        echo (isset($context["text_weekdays_short_saturday"]) ? $context["text_weekdays_short_saturday"] : null);
        echo "']
\t\t}
\t});
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 231
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 231,  651 => 225,  635 => 224,  619 => 223,  593 => 222,  567 => 221,  563 => 220,  559 => 219,  555 => 218,  550 => 216,  546 => 214,  539 => 213,  532 => 212,  525 => 211,  518 => 210,  511 => 209,  504 => 208,  497 => 207,  490 => 206,  484 => 205,  475 => 199,  470 => 197,  460 => 192,  451 => 188,  446 => 185,  437 => 180,  433 => 178,  429 => 176,  427 => 175,  422 => 172,  420 => 171,  416 => 170,  410 => 167,  406 => 166,  394 => 158,  390 => 156,  386 => 154,  384 => 153,  375 => 148,  371 => 146,  367 => 144,  365 => 143,  358 => 139,  353 => 136,  346 => 134,  340 => 131,  334 => 130,  329 => 129,  323 => 126,  317 => 125,  312 => 124,  310 => 123,  307 => 122,  303 => 121,  298 => 119,  290 => 114,  286 => 113,  280 => 110,  276 => 109,  270 => 106,  266 => 105,  260 => 102,  254 => 99,  250 => 98,  243 => 94,  239 => 93,  228 => 87,  224 => 86,  220 => 85,  213 => 81,  209 => 80,  200 => 74,  196 => 73,  189 => 69,  185 => 68,  178 => 64,  174 => 63,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 						<h2>{{ text_order }}</h2>*/
/* 						{{ text_description }}*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">account_circle</i>*/
/* 								<input type="text" name="firstname" value="{{ firstname }}" id="input-firstname" class="validate">*/
/* 								<label for="input-firstname" class="text-bold">{{ entry_firstname }}</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">account_circle</i>*/
/* 								<input type="text" name="lastname" value="{{ lastname }}" id="input-lastname" class="validate">*/
/* 								<label for="input-lastname" class="text-bold">{{ entry_lastname }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">phone</i>*/
/* 								<input type="text" name="telephone" value="{{ telephone }}" id="input-telephone" class="fvalidate">*/
/* 								<label for="input-telephone" class="text-bold">{{ entry_telephone }}</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">email</i>*/
/* 								<input type="text" name="email" value="{{ email }}" id="input-email" class="validate">*/
/* 								<label for="input-email" class="text-bold">{{ entry_email }}</label>*/
/* 								<span class="helper-text" data-error="{{ text_email_error }}" data-success="{{ text_email_success }}"></span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">info</i>*/
/* 								<input type="text" name="order_id" value="{{ order_id }}" id="input-order-id" class="validate">*/
/* 								<label for="input-order-id" class="text-bold">{{ entry_order_id }}</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6">*/
/* 								<i class="material-icons prefix">date_range</i>*/
/* 								<input type="text" name="date_ordered" value="{{ date_ordered }}" id="input-date-ordered" class="datepicker">*/
/* 								<label for="input-date-ordered" class="text-bold">{{ entry_date_ordered }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<p class="text-bold">{{ text_product }}</p>*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12 l6">*/
/* 								<input type="text" name="product" value="{{ product }}" id="input-product" class="validate">*/
/* 								<label for="input-product" class="text-bold">{{ entry_product }}</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6">*/
/* 								<input type="text" name="model" value="{{ model }}"  id="input-model" class="validate">*/
/* 								<label for="input-model" class="text-bold">{{ entry_model }}</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12">*/
/* 								<input type="text" name="quantity" value="{{ quantity }}" id="input-quantity" class="validate">*/
/* 								<label for="input-quantity" class="text-bold">{{ entry_quantity }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12">*/
/* 								<p class="text-bold">{{ entry_reason }}</p>*/
/* 								<ul>*/
/* 									{% for return_reason in return_reasons %}*/
/* 									<li>*/
/* 										{% if return_reason.return_reason_id == return_reason_id %}*/
/* 										<label for="{{ return_reason.return_reason_id }}">*/
/* 											<input id="{{ return_reason.return_reason_id }}" class="with-gap" type="radio" name="return_reason_id" value="{{ return_reason.return_reason_id }}" checked="checked">*/
/* 											<span>{{ return_reason.name }}</span>*/
/* 										</label>*/
/* 										{% else %}*/
/* 										<label for="{{ return_reason.return_reason_id }}">*/
/* 											<input id="{{ return_reason.return_reason_id }}" class="with-gap" type="radio" name="return_reason_id" value="{{ return_reason.return_reason_id }}">*/
/* 											<span>{{ return_reason.name }}</span>*/
/* 										</label>*/
/* 										{% endif %}*/
/* 									</li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 							</div>*/
/* 							<div class="input-field col s12">*/
/* 								<p class="text-bold">{{ entry_opened }}</p>*/
/* 								<ul>*/
/* 									<li>*/
/* 										<label for="radio-opened">*/
/* 											{% if opened %}*/
/* 											<input class="with-gap" id="radio-opened" type="radio" name="opened" value="1" checked="checked">*/
/* 											{% else %}*/
/* 											<input class="with-gap" id="radio-opened" type="radio" name="opened" value="1">*/
/* 											{% endif %}*/
/* 											<span>{{ text_yes }}</span>*/
/* 										</label>*/
/* 									</li>*/
/* 									<li>*/
/* 										<label for="radio-not-opened">*/
/* 											{% if not opened %}*/
/* 											<input class="with-gap" id="radio-not-opened" type="radio" name="opened" value="0" checked="checked">*/
/* 											{% else %}*/
/* 											<input class="with-gap" id="radio-not-opened" type="radio" name="opened" value="0">*/
/* 											{% endif %}*/
/* 											<span>{{ text_no }}</span>*/
/* 										</label>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12">*/
/* 								<label for="input-comment" class="text-bold">{{ entry_fault_detail }}</label>*/
/* 								<textarea name="comment" id="input-comment" class="materialize-textarea">{{ comment }}</textarea>*/
/* 							</div>*/
/* 						</div>*/
/* 						{{ captcha }}*/
/* 						{% if text_agree %}*/
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
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="col s6">*/
/* 							<a href="{{ back }}" class="btn-flat waves-effect waves-light href-underline">{{ button_back }}</a>*/
/* 						</div>*/
/* 						<div class="col s6">*/
/* 							<div class="flex-reverse no-padding">*/
/* 								<button type="submit" value="{{ button_continue }}" class="btn waves-effect waves-light red">{{ button_continue }}</button>*/
/* 							</div>*/
/* 						</div>*/
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
/* 	{% if error_firstname %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_firstname }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_lastname %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_lastname }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_telephone %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_telephone }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_email %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_email }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_order_id %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_order_id }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_product %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_product }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_model %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_model }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_reason %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_reason }}', classes: 'toast-warning'});{% endif %}*/
/* 	$('.datepicker').datepicker({*/
/* 		format: 'yyyy-mm-dd',*/
/* 		firstDay: {{ first_day }},*/
/* 		i18n: {*/
/* 			clear: '{{ button_datetime_clear }}',*/
/* 			today: '{{ button_date_today }}',*/
/* 			done: '{{ button_datetime_done }}',*/
/* 			months: ['{{ text_months_full_january }}', '{{ text_months_full_february }}', '{{ text_months_full_march }}', '{{ text_months_full_april }}', '{{ text_months_full_may }}', '{{ text_months_full_june }}', '{{ text_months_full_july }}', '{{ text_months_full_august }}', '{{ text_months_full_september }}', '{{ text_months_full_october }}', '{{ text_months_full_november }}', '{{ text_months_full_december }}'],*/
/* 			monthsShort: ['{{ text_months_short_january }}', '{{ text_months_short_february }}', '{{ text_months_short_march }}', '{{ text_months_short_april }}', '{{ text_months_short_may }}', '{{ text_months_short_june }}', '{{ text_months_short_july }}', '{{ text_months_short_august }}', '{{ text_months_short_september }}', '{{ text_months_short_october }}', '{{ text_months_short_november }}', '{{ text_months_short_december }}'],*/
/* 			weekdays: ['{{ text_weekdays_full_sunday }}', '{{ text_weekdays_full_monday }}', '{{ text_weekdays_full_tuesday }}', '{{ text_weekdays_full_wednesday }}', '{{ text_weekdays_full_thursday }}', '{{ text_weekdays_full_friday }}', '{{ text_weekdays_full_saturday }}'],*/
/* 			weekdaysShort: ['{{ text_weekdays_short_sunday }}', '{{ text_weekdays_short_monday }}', '{{ text_weekdays_short_tuesday }}', '{{ text_weekdays_short_wednesday }}', '{{ text_weekdays_short_thursday }}', '{{ text_weekdays_short_friday }}', '{{ text_weekdays_short_saturday }}'],*/
/* 			weekdaysAbbrev: ['{{ text_weekdays_short_sunday }}', '{{ text_weekdays_short_monday }}', '{{ text_weekdays_short_tuesday }}', '{{ text_weekdays_short_wednesday }}', '{{ text_weekdays_short_thursday }}', '{{ text_weekdays_short_friday }}', '{{ text_weekdays_short_saturday }}']*/
/* 		}*/
/* 	});*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
