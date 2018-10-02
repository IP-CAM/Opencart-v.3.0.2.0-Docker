<?php

/* materialize/template/affiliate/register.twig */
class __TwigTemplate_618812491a81b6ca4c7341a14a95ade5e1bacc4af75e65333169b8fc20732407 extends Twig_Template
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
\t<div id=\"affiliate-register\" class=\"container\">
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
        echo (isset($context["text_account_already"]) ? $context["text_account_already"] : null);
        echo "</p>
\t\t\t\t\t\t<div class=\"form-group\" style=\"display: ";
        // line 64
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
\t\t\t\t\t\t\t<label class=\"text-bold required\">";
        // line 65
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 68
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
            // line 69
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t<label for=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 71
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" id=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" class=\"with-gap\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 72
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t<label for=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 76
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" id=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 77
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"account\" class=\"section\">
\t\t\t\t\t\t\t<h2>";
        // line 85
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</h2>
\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 87
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-firstname\" class=\"text-bold required\">";
        // line 88
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 91
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-lastname\" class=\"text-bold required\">";
        // line 92
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 95
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-email\" class=\"text-bold required\">";
        // line 96
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<span class=\"helper-text\" data-error=\"";
        // line 97
        echo (isset($context["text_email_error"]) ? $context["text_email_error"] : null);
        echo "\" data-success=\"";
        echo (isset($context["text_email_success"]) ? $context["text_email_success"] : null);
        echo "\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 100
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" id=\"input-password\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-password\" class=\"text-bold required\">";
        // line 101
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 104
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-confirm\" class=\"text-bold required\">";
        // line 105
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 108
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-telephone\" class=\"text-bold required\">";
        // line 109
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 112
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 113
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 114
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                    // line 116
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 117
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 119
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 120
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 122
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                    // line 126
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 130
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 131
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
                    // line 132
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
                    // line 134
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
                        // line 136
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 137
                            echo "\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                            // line 138
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"with-gap\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 139
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 142
                            echo "\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                            // line 143
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 144
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 152
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 153
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
                    // line 154
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
                    // line 156
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
                        // line 158
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 159
                            echo "\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                            // line 160
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"filled-in\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 161
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 164
                            echo "\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                            // line 165
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"filled-in\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 166
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 169
                        echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 174
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 175
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 177
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"validate\">
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                    // line 178
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 183
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                    // line 185
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"materialize-textarea\">";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                    // line 186
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 190
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 191
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
                    // line 192
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t\t<div id=\"button-custom-field";
                    // line 194
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\"><i class=\"material-icons left\">cloud_upload</i><span>";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 195
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo " ";
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo " ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\"><input value=\"";
                    // line 196
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"file-path validate\" type=\"text\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 200
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 201
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                    // line 202
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 203
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"datepicker\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 206
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 207
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                    // line 208
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 209
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"timepicker\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 212
                echo "\t\t\t\t\t\t\t";
            }
            // line 213
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"affiliate\" class=\"section\">
\t\t\t\t\t\t\t<h2>";
        // line 216
        echo (isset($context["text_your_affiliate"]) ? $context["text_your_affiliate"] : null);
        echo "</h2>
\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"company\" value=\"";
        // line 218
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" id=\"input-company\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-company\" class=\"text-bold\">";
        // line 219
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"website\" value=\"";
        // line 222
        echo (isset($context["website"]) ? $context["website"] : null);
        echo "\" id=\"input-website\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-website\" class=\"text-bold\">";
        // line 223
        echo (isset($context["entry_website"]) ? $context["entry_website"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"tax\" value=\"";
        // line 226
        echo (isset($context["tax"]) ? $context["tax"] : null);
        echo "\" id=\"input-tax\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-tax\" class=\"text-bold\">";
        // line 227
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"section form-group\">
\t\t\t\t\t\t\t<span>";
        // line 231
        echo (isset($context["entry_payment"]) ? $context["entry_payment"] : null);
        echo "</span>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<label for=\"payment-cheque-input\">
\t\t\t\t\t\t\t\t\t\t";
        // line 235
        if (((isset($context["payment"]) ? $context["payment"] : null) == "cheque")) {
            // line 236
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" id=\"payment-cheque-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 238
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"cheque\" id=\"payment-cheque-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 240
        echo "\t\t\t\t\t\t\t\t\t\t<span>";
        echo (isset($context["text_cheque"]) ? $context["text_cheque"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<label for=\"payment-paypal-input\">
\t\t\t\t\t\t\t\t\t\t";
        // line 245
        if (((isset($context["payment"]) ? $context["payment"] : null) == "paypal")) {
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" id=\"payment-paypal-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 248
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"paypal\" id=\"payment-paypal-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 250
        echo "\t\t\t\t\t\t\t\t\t\t<span>";
        echo (isset($context["text_paypal"]) ? $context["text_paypal"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<label for=\"payment-bank-input\">
\t\t\t\t\t\t\t\t\t\t";
        // line 255
        if (((isset($context["payment"]) ? $context["payment"] : null) == "bank")) {
            // line 256
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" id=\"payment-bank-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 258
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"bank\" id=\"payment-bank-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 260
        echo "\t\t\t\t\t\t\t\t\t\t<span>";
        echo (isset($context["text_bank"]) ? $context["text_bank"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field payment form-group\" id=\"payment-cheque\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"cheque\" value=\"";
        // line 266
        echo (isset($context["cheque"]) ? $context["cheque"] : null);
        echo "\" id=\"input-cheque\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-cheque\" class=\"required text-bold\">";
        // line 267
        echo (isset($context["entry_cheque"]) ? $context["entry_cheque"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field payment form-group\" id=\"payment-paypal\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"paypal\" value=\"";
        // line 270
        echo (isset($context["paypal"]) ? $context["paypal"] : null);
        echo "\" id=\"input-paypal\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-paypal\" class=\"required text-bold\">";
        // line 271
        echo (isset($context["entry_paypal"]) ? $context["entry_paypal"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"payment form-group\" id=\"payment-bank\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bank_name\" value=\"";
        // line 275
        echo (isset($context["bank_name"]) ? $context["bank_name"] : null);
        echo "\" id=\"input-bank-name\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-bank-name\" class=\"required text-bold\">";
        // line 276
        echo (isset($context["entry_bank_name"]) ? $context["entry_bank_name"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 279
        echo (isset($context["bank_branch_number"]) ? $context["bank_branch_number"] : null);
        echo "\" id=\"input-bank-branch-number\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-bank-branch-number\" class=\"required text-bold\">";
        // line 280
        echo (isset($context["entry_bank_branch_number"]) ? $context["entry_bank_branch_number"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 283
        echo (isset($context["bank_swift_code"]) ? $context["bank_swift_code"] : null);
        echo "\" id=\"input-bank-swift-code\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-bank-swift-code\" class=\"required text-bold\">";
        // line 284
        echo (isset($context["entry_bank_swift_code"]) ? $context["entry_bank_swift_code"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 287
        echo (isset($context["bank_account_name"]) ? $context["bank_account_name"] : null);
        echo "\" id=\"input-bank-account-name\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-bank-account-name\" class=\"required text-bold\">";
        // line 288
        echo (isset($context["entry_bank_account_name"]) ? $context["entry_bank_account_name"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 291
        echo (isset($context["bank_account_number"]) ? $context["bank_account_number"] : null);
        echo "\" id=\"input-bank-account-number\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-bank-account-number\" class=\"required text-bold\">";
        // line 292
        echo (isset($context["entry_bank_account_number"]) ? $context["entry_bank_account_number"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 295
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "affiliate")) {
                // line 296
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 297
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                    // line 299
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 300
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 301
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 302
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 303
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 305
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 307
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 308
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                    // line 309
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 313
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 314
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
                    // line 315
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
                    // line 317
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 318
                        echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
                        // line 319
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 320
                            echo "\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                            // line 321
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"with-gap\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 322
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 325
                            echo "\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                            // line 326
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 327
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 330
                        echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 332
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 335
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 336
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
                    // line 337
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
                    // line 339
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 340
                        echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
                        // line 341
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 342
                            echo "\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                            // line 343
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"filled-in\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 344
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 347
                            echo "\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                            // line 348
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"filled-in\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 349
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 352
                        echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 354
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 357
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 358
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 360
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"validate\">
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                    // line 361
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 365
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 366
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                    // line 368
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"materialize-textarea\">";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                    // line 369
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 373
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 374
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
                    // line 375
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t\t<div id=\"button-custom-field";
                    // line 377
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\"><i class=\"material-icons left\">cloud_upload</i><span>";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 378
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo " ";
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo " ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\"><input value=\"";
                    // line 379
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"file-path validate\" type=\"text\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 383
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 384
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                    // line 385
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 386
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"datepicker\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 389
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 390
                    echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                    // line 391
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 392
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"timepicker\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 395
                echo "\t\t\t\t\t\t\t";
            }
            // line 396
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 398
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
\t\t\t\t\t\t";
        // line 399
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 400
            echo "\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t<label for=\"agreement-check\">
\t\t\t\t\t\t\t\t";
            // line 402
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 403
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" id=\"agreement-check\" class=\"filled-in\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 405
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"agreement-check\" class=\"filled-in\">
\t\t\t\t\t\t\t\t";
            }
            // line 407
            echo "\t\t\t\t\t\t\t\t<span>";
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 411
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"section flex-reverse\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn waves-effect waves-light red\">";
        // line 413
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
        // line 416
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 418
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.custom-field').hide();
\t\t\t\t\$('.custom-field').removeClass('required');

\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tcustom_field = json[i];

\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id'] + ' > label').addClass('required');
\t\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id'] + ' > .input-field > label').addClass('required');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t\$('input[name=\\'customer_group_id\\']:checked').trigger('change');

\t";
        // line 451
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 452
        echo "\t";
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 453
        echo "\t";
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 454
        echo "\t";
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 455
        echo "\t";
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 456
        echo "\t";
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 457
        echo "\t";
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 458
        echo "\t";
        if ((isset($context["error_cheque"]) ? $context["error_cheque"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_cheque"]) ? $context["error_cheque"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 459
        echo "\t";
        if ((isset($context["error_paypal"]) ? $context["error_paypal"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_paypal"]) ? $context["error_paypal"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 460
        echo "\t";
        if ((isset($context["error_bank_account_name"]) ? $context["error_bank_account_name"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_bank_account_name"]) ? $context["error_bank_account_name"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 461
        echo "\t";
        if ((isset($context["error_bank_account_number"]) ? $context["error_bank_account_number"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_bank_account_number"]) ? $context["error_bank_account_number"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 462
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 463
            echo "\t\t";
            if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                // line 464
                echo "\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
                echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                echo "', classes: 'toast-warning'});
\t\t";
            }
            // line 466
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 467
        echo "
\t\$('div[id^=\\'button-custom-field\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\"></form><div id=\"modal-loading\" class=\"modal\"><div class=\"modal-content\"><div class=\"row valign-wrapper\"><div class=\"col s4 m3 center\"><div class=\"preloader-wrapper active\"><div class=\"spinner-layer spinner-blue\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-red\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-yellow\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-green\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div></div></div><div class=\"col s10 m9\"><p id=\"loading-text\" class=\"flow-text text-bold\">";
        // line 473
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "</p></div></div></div></div>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}

\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);

\t\t\t\t\$('#modal-loading').modal({
\t\t\t\t\tdismissible: false,
\t\t\t\t\topacity: .7,
\t\t\t\t\tendingTop: '40%',
\t\t\t\t}).modal('open');

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$('#modal-loading').modal('close').remove();
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json[\"error\"], classes: 'toast-warning'});
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\$('#modal-loading').modal('close').remove();
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">check</i>' + json[\"success\"], classes: 'toast-success'});

\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});

\t\$('.datepicker').datepicker({
\t\tformat: 'yyyy-mm-dd',
\t\tfirstDay: ";
        // line 522
        echo (isset($context["first_day"]) ? $context["first_day"] : null);
        echo ",
\t\ti18n: {
\t\t\tclear: '";
        // line 524
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\ttoday: '";
        // line 525
        echo (isset($context["button_date_today"]) ? $context["button_date_today"] : null);
        echo "',
\t\t\tdone: '";
        // line 526
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tmonths: ['";
        // line 527
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
        // line 528
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
        // line 529
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
        // line 530
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
        // line 531
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

\t\$('.timepicker').timepicker({
\t\tdefaultTime: 'now',
\t\tautoclose: true,
\t\ti18n: {
\t\t\tclear: '";
        // line 539
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\tcancel: '";
        // line 540
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tdone: '";
        // line 541
        echo (isset($context["button_time_done"]) ? $context["button_time_done"] : null);
        echo "',
\t\t\ttwelvehour: ";
        // line 542
        echo (isset($context["twelve_hour"]) ? $context["twelve_hour"] : null);
        echo "
\t\t}
\t});

\t\$('input[name=\\'payment\\']').on('change', function() {
\t\t\$('.payment').hide();
\t\t\$('#payment-' + this.value).show();
\t});
\t\$('input[name=\\'payment\\']:checked').trigger('change');
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 554
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/affiliate/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1680 => 554,  1665 => 542,  1661 => 541,  1657 => 540,  1653 => 539,  1630 => 531,  1614 => 530,  1598 => 529,  1572 => 528,  1546 => 527,  1542 => 526,  1538 => 525,  1534 => 524,  1529 => 522,  1477 => 473,  1469 => 467,  1463 => 466,  1457 => 464,  1454 => 463,  1449 => 462,  1442 => 461,  1435 => 460,  1428 => 459,  1421 => 458,  1414 => 457,  1407 => 456,  1400 => 455,  1393 => 454,  1386 => 453,  1379 => 452,  1373 => 451,  1337 => 418,  1332 => 416,  1326 => 413,  1322 => 411,  1314 => 407,  1310 => 405,  1306 => 403,  1304 => 402,  1300 => 400,  1298 => 399,  1294 => 398,  1291 => 397,  1285 => 396,  1282 => 395,  1264 => 392,  1258 => 391,  1251 => 390,  1248 => 389,  1230 => 386,  1224 => 385,  1217 => 384,  1214 => 383,  1207 => 379,  1195 => 378,  1189 => 377,  1184 => 375,  1177 => 374,  1174 => 373,  1165 => 369,  1149 => 368,  1141 => 366,  1138 => 365,  1129 => 361,  1113 => 360,  1105 => 358,  1102 => 357,  1097 => 354,  1090 => 352,  1084 => 349,  1076 => 348,  1073 => 347,  1067 => 344,  1059 => 343,  1056 => 342,  1054 => 341,  1051 => 340,  1047 => 339,  1042 => 337,  1035 => 336,  1032 => 335,  1027 => 332,  1020 => 330,  1014 => 327,  1006 => 326,  1003 => 325,  997 => 322,  989 => 321,  986 => 320,  984 => 319,  981 => 318,  977 => 317,  972 => 315,  965 => 314,  962 => 313,  953 => 309,  950 => 308,  944 => 307,  936 => 305,  928 => 303,  925 => 302,  921 => 301,  917 => 300,  909 => 299,  901 => 297,  898 => 296,  895 => 295,  891 => 294,  886 => 292,  882 => 291,  876 => 288,  872 => 287,  866 => 284,  862 => 283,  856 => 280,  852 => 279,  846 => 276,  842 => 275,  835 => 271,  831 => 270,  825 => 267,  821 => 266,  811 => 260,  807 => 258,  803 => 256,  801 => 255,  792 => 250,  788 => 248,  784 => 246,  782 => 245,  773 => 240,  769 => 238,  765 => 236,  763 => 235,  756 => 231,  749 => 227,  745 => 226,  739 => 223,  735 => 222,  729 => 219,  725 => 218,  720 => 216,  716 => 214,  710 => 213,  707 => 212,  689 => 209,  683 => 208,  676 => 207,  673 => 206,  655 => 203,  649 => 202,  642 => 201,  639 => 200,  632 => 196,  620 => 195,  614 => 194,  609 => 192,  602 => 191,  599 => 190,  590 => 186,  574 => 185,  566 => 183,  563 => 182,  554 => 178,  538 => 177,  530 => 175,  527 => 174,  522 => 171,  515 => 169,  509 => 166,  501 => 165,  498 => 164,  492 => 161,  484 => 160,  481 => 159,  479 => 158,  476 => 157,  472 => 156,  467 => 154,  460 => 153,  457 => 152,  452 => 149,  445 => 147,  439 => 144,  431 => 143,  428 => 142,  422 => 139,  414 => 138,  411 => 137,  409 => 136,  406 => 135,  402 => 134,  397 => 132,  390 => 131,  387 => 130,  378 => 126,  375 => 125,  369 => 124,  361 => 122,  353 => 120,  350 => 119,  346 => 118,  342 => 117,  334 => 116,  326 => 114,  323 => 113,  320 => 112,  316 => 111,  311 => 109,  307 => 108,  301 => 105,  297 => 104,  291 => 101,  287 => 100,  279 => 97,  275 => 96,  271 => 95,  265 => 92,  261 => 91,  255 => 88,  251 => 87,  246 => 85,  241 => 82,  234 => 80,  228 => 77,  222 => 76,  217 => 75,  211 => 72,  205 => 71,  200 => 70,  198 => 69,  195 => 68,  191 => 67,  186 => 65,  178 => 64,  174 => 63,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 	<div id="affiliate-register" class="container">*/
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
/* 						<p>{{ text_account_already }}</p>*/
/* 						<div class="form-group" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/* 							<label class="text-bold required">{{ entry_customer_group }}</label>*/
/* 							<ul>*/
/* 								{% for customer_group in customer_groups %}*/
/* 								<li>*/
/* 									{% if customer_group.customer_group_id == customer_group_id %}*/
/* 									<label for="radio-{{ customer_group.customer_group_id }}">*/
/* 										<input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" id="radio-{{ customer_group.customer_group_id }}" class="with-gap" checked="checked">*/
/* 										<span>{{ customer_group.name }}</span>*/
/* 									</label>*/
/* 									{% else %}*/
/* 									<label for="radio-{{ customer_group.customer_group_id }}">*/
/* 										<input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" id="radio-{{ customer_group.customer_group_id }}" class="with-gap">*/
/* 										<span>{{ customer_group.name }}</span>*/
/* 									</label>*/
/* 									{% endif %}*/
/* 								</li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div id="account" class="section">*/
/* 							<h2>{{ text_your_details }}</h2>*/
/* 							<div class="input-field form-group">*/
/* 								<input type="text" name="firstname" value="{{ firstname }}" id="input-firstname" class="validate">*/
/* 								<label for="input-firstname" class="text-bold required">{{ entry_firstname }}</label>*/
/* 							</div>*/
/* 							<div class="input-field form-group">*/
/* 								<input type="text" name="lastname" value="{{ lastname }}" id="input-lastname" class="validate">*/
/* 								<label for="input-lastname" class="text-bold required">{{ entry_lastname }}</label>*/
/* 							</div>*/
/* 							<div class="input-field form-group">*/
/* 								<input type="email" name="email" value="{{ email }}" id="input-email" class="validate">*/
/* 								<label for="input-email" class="text-bold required">{{ entry_email }}</label>*/
/* 								<span class="helper-text" data-error="{{ text_email_error }}" data-success="{{ text_email_success }}"></span>*/
/* 							</div>*/
/* 							<div class="input-field form-group">*/
/* 								<input type="password" name="password" value="{{ password }}" id="input-password" class="validate">*/
/* 								<label for="input-password" class="text-bold required">{{ entry_password }}</label>*/
/* 							</div>*/
/* 							<div class="input-field form-group">*/
/* 								<input type="password" name="confirm" value="{{ confirm }}" id="input-confirm" class="validate">*/
/* 								<label for="input-confirm" class="text-bold required">{{ entry_confirm }}</label>*/
/* 							</div>*/
/* 							<div class="input-field form-group">*/
/* 								<input type="tel" name="telephone" value="{{ telephone }}" id="input-telephone" class="validate">*/
/* 								<label for="input-telephone" class="text-bold required">{{ entry_telephone }}</label>*/
/* 							</div>*/
/* 							{% for custom_field in custom_fields %}*/
/* 							{% if custom_field.location == 'account' %}*/
/* 							{% if custom_field.type == 'select' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<div class="input-field">*/
/* 									<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}">*/
/* 										<option value="">{{ text_select }}</option>*/
/* 										{% for custom_field_value in custom_field.custom_field_value %}*/
/* 										{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/* 										<option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 									<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'radio' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<label class="text-bold">{{ custom_field.name }}</label>*/
/* 								<ul>*/
/* 									{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									<li>*/
/* 										{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/* 										<label>*/
/* 											<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="with-gap" checked="checked">*/
/* 											<span>{{ custom_field_value.name }}</span>*/
/* 										</label>*/
/* 										{% else %}*/
/* 										<label>*/
/* 											<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="with-gap">*/
/* 											<span>{{ custom_field_value.name }}</span>*/
/* 										</label>*/
/* 										{% endif %}*/
/* 									</li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'checkbox' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<label class="text-bold">{{ custom_field.name }}</label>*/
/* 								<ul>*/
/* 									{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									<li>*/
/* 										{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}*/
/* 										<label>*/
/* 											<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="filled-in" checked="checked">*/
/* 											<span>{{ custom_field_value.name }}</span>*/
/* 										</label>*/
/* 										{% else %}*/
/* 										<label>*/
/* 											<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="filled-in">*/
/* 											<span>{{ custom_field_value.name }}</span>*/
/* 										</label>*/
/* 										{% endif %}*/
/* 									</li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'text' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<div class="input-field">*/
/* 									<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="validate">*/
/* 									<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'textarea' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<div class="input-field">*/
/* 									<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="materialize-textarea">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/* 									<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'file' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<label class="text-bold">{{ custom_field.name }}</label>*/
/* 								<div class="file-field input-field">*/
/* 									<div id="button-custom-field{{ custom_field.custom_field_id }}" class="btn waves-effect waves-light blue-grey lighten-1"><i class="material-icons left">cloud_upload</i><span>{{ button_upload }}</span></div>*/
/* 									<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %} {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}">*/
/* 									<div class="file-path-wrapper"><input value="{{ custom_field.name }}" class="file-path validate" type="text"></div>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'date' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="datepicker">*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'time' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="timepicker">*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% endif %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 						<div id="affiliate" class="section">*/
/* 							<h2>{{ text_your_affiliate }}</h2>*/
/* 							<div class="input-field form-group">*/
/* 								<input type="text" name="company" value="{{ company }}" id="input-company" class="validate">*/
/* 								<label for="input-company" class="text-bold">{{ entry_company }}</label>*/
/* 							</div>*/
/* 							<div class="input-field form-group">*/
/* 								<input type="text" name="website" value="{{ website }}" id="input-website" class="validate">*/
/* 								<label for="input-website" class="text-bold">{{ entry_website }}</label>*/
/* 							</div>*/
/* 							<div class="input-field form-group">*/
/* 								<input type="text" name="tax" value="{{ tax }}" id="input-tax" class="validate">*/
/* 								<label for="input-tax" class="text-bold">{{ entry_tax }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="section form-group">*/
/* 							<span>{{ entry_payment }}</span>*/
/* 							<ul>*/
/* 								<li>*/
/* 									<label for="payment-cheque-input">*/
/* 										{% if payment == 'cheque' %}*/
/* 										<input type="radio" name="payment" value="cheque" checked="checked" id="payment-cheque-input" class="with-gap">*/
/* 										{% else %}*/
/* 										<input type="radio" name="payment" value="cheque" id="payment-cheque-input" class="with-gap">*/
/* 										{% endif %}*/
/* 										<span>{{ text_cheque }}</span>*/
/* 									</label>*/
/* 								</li>*/
/* 								<li>*/
/* 									<label for="payment-paypal-input">*/
/* 										{% if payment == 'paypal' %}*/
/* 										<input type="radio" name="payment" value="paypal" checked="checked" id="payment-paypal-input" class="with-gap">*/
/* 										{% else %}*/
/* 										<input type="radio" name="payment" value="paypal" id="payment-paypal-input" class="with-gap">*/
/* 										{% endif %}*/
/* 										<span>{{ text_paypal }}</span>*/
/* 									</label>*/
/* 								</li>*/
/* 								<li>*/
/* 									<label for="payment-bank-input">*/
/* 										{% if payment == 'bank' %}*/
/* 										<input type="radio" name="payment" value="bank" checked="checked" id="payment-bank-input" class="with-gap">*/
/* 										{% else %}*/
/* 										<input type="radio" name="payment" value="bank" id="payment-bank-input" class="with-gap">*/
/* 										{% endif %}*/
/* 										<span>{{ text_bank }}</span>*/
/* 									</label>*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="input-field payment form-group" id="payment-cheque">*/
/* 							<input type="text" name="cheque" value="{{ cheque }}" id="input-cheque" class="validate">*/
/* 							<label for="input-cheque" class="required text-bold">{{ entry_cheque }}</label>*/
/* 						</div>*/
/* 						<div class="input-field payment form-group" id="payment-paypal">*/
/* 							<input type="text" name="paypal" value="{{ paypal }}" id="input-paypal" class="validate">*/
/* 							<label for="input-paypal" class="required text-bold">{{ entry_paypal }}</label>*/
/* 						</div>*/
/* 						<div class="payment form-group" id="payment-bank">*/
/* 							<div class="input-field">*/
/* 								<input type="text" name="bank_name" value="{{ bank_name }}" id="input-bank-name" class="validate">*/
/* 								<label for="input-bank-name" class="required text-bold">{{ entry_bank_name }}</label>*/
/* 							</div>*/
/* 							<div class="input-field">*/
/* 								<input type="text" name="bank_branch_number" value="{{ bank_branch_number }}" id="input-bank-branch-number" class="validate">*/
/* 								<label for="input-bank-branch-number" class="required text-bold">{{ entry_bank_branch_number }}</label>*/
/* 							</div>*/
/* 							<div class="input-field">*/
/* 								<input type="text" name="bank_swift_code" value="{{ bank_swift_code }}" id="input-bank-swift-code" class="validate">*/
/* 								<label for="input-bank-swift-code" class="required text-bold">{{ entry_bank_swift_code }}</label>*/
/* 							</div>*/
/* 							<div class="input-field">*/
/* 								<input type="text" name="bank_account_name" value="{{ bank_account_name }}" id="input-bank-account-name" class="validate">*/
/* 								<label for="input-bank-account-name" class="required text-bold">{{ entry_bank_account_name }}</label>*/
/* 							</div>*/
/* 							<div class="input-field">*/
/* 								<input type="text" name="bank_account_number" value="{{ bank_account_number }}" id="input-bank-account-number" class="validate">*/
/* 								<label for="input-bank-account-number" class="required text-bold">{{ entry_bank_account_number }}</label>*/
/* 							</div>*/
/* 							{% for custom_field in custom_fields %}*/
/* 							{% if custom_field.location == 'affiliate' %}*/
/* 							{% if custom_field.type == 'select' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<div class="input-field">*/
/* 									<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}">*/
/* 										<option value="">{{ text_select }}</option>*/
/* 										{% for custom_field_value in custom_field.custom_field_value %}*/
/* 										{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/* 										<option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 									<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'radio' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<label class="text-bold">{{ custom_field.name }}</label>*/
/* 								<ul>*/
/* 									{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									<li>*/
/* 										{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/* 										<label>*/
/* 											<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="with-gap" checked="checked">*/
/* 											<span>{{ custom_field_value.name }}</span>*/
/* 										</label>*/
/* 										{% else %}*/
/* 										<label>*/
/* 											<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="with-gap">*/
/* 											<span>{{ custom_field_value.name }}</span>*/
/* 										</label>*/
/* 										{% endif %}*/
/* 									</li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'checkbox' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<label class="text-bold">{{ custom_field.name }}</label>*/
/* 								<ul>*/
/* 									{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									<li>*/
/* 										{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/* 										<label>*/
/* 											<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="filled-in" checked="checked">*/
/* 											<span>{{ custom_field_value.name }}</span>*/
/* 										</label>*/
/* 										{% else %}*/
/* 										<label>*/
/* 											<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="filled-in">*/
/* 											<span>{{ custom_field_value.name }}</span>*/
/* 										</label>*/
/* 										{% endif %}*/
/* 									</li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'text' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<div class="input-field">*/
/* 									<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="validate">*/
/* 									<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'textarea' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<div class="input-field">*/
/* 									<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="materialize-textarea">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/* 									<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'file' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<label class="text-bold">{{ custom_field.name }}</label>*/
/* 								<div class="file-field input-field">*/
/* 									<div id="button-custom-field{{ custom_field.custom_field_id }}" class="btn waves-effect waves-light blue-grey lighten-1"><i class="material-icons left">cloud_upload</i><span>{{ button_upload }}</span></div>*/
/* 									<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %} {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}">*/
/* 									<div class="file-path-wrapper"><input value="{{ custom_field.name }}" class="file-path validate" type="text"></div>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'date' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="datepicker">*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% if custom_field.type == 'time' %}*/
/* 							<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 								<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="timepicker">*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% endif %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 						{{ captcha }}*/
/* 						{% if text_agree %}*/
/* 						<div class="section">*/
/* 							<label for="agreement-check">*/
/* 								{% if agree %}*/
/* 								<input type="checkbox" name="agree" value="1" checked="checked" id="agreement-check" class="filled-in">*/
/* 								{% else %}*/
/* 								<input type="checkbox" name="agree" value="1" id="agreement-check" class="filled-in">*/
/* 								{% endif %}*/
/* 								<span>{{ text_agree }}</span>*/
/* 							</label>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="section flex-reverse">*/
/* 						<button type="submit" class="btn waves-effect waves-light red">{{ button_continue }}</button>*/
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
/* 	$('input[name=\'customer_group_id\']').on('change', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.custom-field').hide();*/
/* 				$('.custom-field').removeClass('required');*/
/* */
/* 				for (i = 0; i < json.length; i++) {*/
/* 					custom_field = json[i];*/
/* */
/* 					$('#custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 					if (custom_field['required']) {*/
/* 						$('#custom-field' + custom_field['custom_field_id'] + ' > label').addClass('required');*/
/* 						$('#custom-field' + custom_field['custom_field_id'] + ' > .input-field > label').addClass('required');*/
/* 					}*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	$('input[name=\'customer_group_id\']:checked').trigger('change');*/
/* */
/* 	{% if error_warning %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_warning }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_firstname %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_firstname }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_lastname %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_lastname }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_email %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_email }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_telephone %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_telephone }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_password %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_password }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_confirm %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_confirm }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_cheque %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_cheque }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_paypal %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_paypal }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_bank_account_name %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_bank_account_name }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_bank_account_number %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_bank_account_number }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% for custom_field in custom_fields %}*/
/* 		{% if error_custom_field[custom_field.custom_field_id] %}*/
/* 		M.toast({html: '<i class="material-icons left">warning</i>{{ error_custom_field[custom_field.custom_field_id] }}', classes: 'toast-warning'});*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* */
/* 	$('div[id^=\'button-custom-field\']').on('click', function() {*/
/* 		var node = this;*/
/* */
/* 		$('#form-upload').remove();*/
/* */
/* 		$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display:none;"><input type="file" name="file"></form><div id="modal-loading" class="modal"><div class="modal-content"><div class="row valign-wrapper"><div class="col s4 m3 center"><div class="preloader-wrapper active"><div class="spinner-layer spinner-blue"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div><div class="spinner-layer spinner-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div><div class="spinner-layer spinner-yellow"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div><div class="spinner-layer spinner-green"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div><div class="col s10 m9"><p id="loading-text" class="flow-text text-bold">{{ text_loading }}</p></div></div></div></div>');*/
/* */
/* 		$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 		if (typeof timer != 'undefined') {*/
/* 			clearInterval(timer);*/
/* 		}*/
/* */
/* 		timer = setInterval(function() {*/
/* 			if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 				clearInterval(timer);*/
/* */
/* 				$('#modal-loading').modal({*/
/* 					dismissible: false,*/
/* 					opacity: .7,*/
/* 					endingTop: '40%',*/
/* 				}).modal('open');*/
/* */
/* 				$.ajax({*/
/* 					url: 'index.php?route=tool/upload',*/
/* 					type: 'post',*/
/* 					dataType: 'json',*/
/* 					data: new FormData($('#form-upload')[0]),*/
/* 					cache: false,*/
/* 					contentType: false,*/
/* 					processData: false,*/
/* 					success: function(json) {*/
/* 						if (json['error']) {*/
/* 							$('#modal-loading').modal('close').remove();*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json["error"], classes: 'toast-warning'});*/
/* 						}*/
/* */
/* 						if (json['success']) {*/
/* 							$('#modal-loading').modal('close').remove();*/
/* 							M.toast({html: '<i class="material-icons left">check</i>' + json["success"], classes: 'toast-success'});*/
/* */
/* 							$(node).parent().find('input').val(json['code']);*/
/* 						}*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		}, 500);*/
/* 	});*/
/* */
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
/* */
/* 	$('.timepicker').timepicker({*/
/* 		defaultTime: 'now',*/
/* 		autoclose: true,*/
/* 		i18n: {*/
/* 			clear: '{{ button_datetime_clear }}',*/
/* 			cancel: '{{ button_datetime_done }}',*/
/* 			done: '{{ button_time_done }}',*/
/* 			twelvehour: {{ twelve_hour }}*/
/* 		}*/
/* 	});*/
/* */
/* 	$('input[name=\'payment\']').on('change', function() {*/
/* 		$('.payment').hide();*/
/* 		$('#payment-' + this.value).show();*/
/* 	});*/
/* 	$('input[name=\'payment\']:checked').trigger('change');*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
