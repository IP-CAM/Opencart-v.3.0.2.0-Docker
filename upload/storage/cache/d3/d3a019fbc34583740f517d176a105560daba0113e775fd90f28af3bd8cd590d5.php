<?php

/* materialize/template/account/register.twig */
class __TwigTemplate_17d4584beee4f03667d7aa8acbd46fdb3335bd84e5fb63cd21db9375b16b474d extends Twig_Template
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
\t<div id=\"account-register\" class=\"container\">
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
\t\t\t\t\t\t<div id=\"account\">
\t\t\t\t\t\t\t<h2>";
        // line 65
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</h2>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"display: ";
        // line 66
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
\t\t\t\t\t\t\t\t<label class=\"text-bold required\">";
        // line 67
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
            // line 71
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t<label for=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 73
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" id=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" class=\"with-gap\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 74
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 77
                echo "\t\t\t\t\t\t\t\t\t\t<label for=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 78
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" id=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 79
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 100
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"input-telephone\" class=\"text-bold required\">";
        // line 101
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 105
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 106
                echo "\t\t\t\t\t\t<div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                // line 108
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 109
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "location", array()), array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 112
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                // line 118
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 122
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 123
                echo "\t\t\t\t\t\t<div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold\">";
                // line 124
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                    // line 128
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 129
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 130
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"with-gap\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 131
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 135
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 136
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 139
                    echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 144
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 145
                echo "\t\t\t\t\t\t<div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold\">";
                // line 146
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 148
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 149
                    echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                    // line 150
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 152
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"filled-in\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 153
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 157
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"filled-in\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 158
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 161
                    echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 166
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 167
                echo "\t\t\t\t\t\t<div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 169
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
\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                // line 170
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 175
                echo "\t\t\t\t\t\t<div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                // line 177
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
\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                // line 178
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 182
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 183
                echo "\t\t\t\t\t\t<div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold\">";
                // line 184
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t<div id=\"button-custom-field";
                // line 186
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\"><i class=\"material-icons left\">cloud_upload</i><span>";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</span></div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 187
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
\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\"><input value=\"";
                // line 188
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"file-path validate\" type=\"text\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 192
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 193
                echo "\t\t\t\t\t\t<div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                // line 194
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 195
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
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 198
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 199
                echo "\t\t\t\t\t\t<div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-custom-field";
                // line 200
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 201
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
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 204
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "\t\t\t\t\t\t<h2>";
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</h2>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 207
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" id=\"input-password\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-password\" class=\"text-bold required\">";
        // line 208
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 211
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-confirm\" class=\"text-bold required\">";
        // line 212
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h2>";
        // line 214
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</h2>
\t\t\t\t\t\t<div class=\"section switch form-group\">
\t\t\t\t\t\t\t";
        // line 216
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 217
            echo "\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t";
            // line 218
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t\t\t\t\t<input id=\"newsletter\" type=\"checkbox\" name=\"newsletter\" value=\"1\" checked=\"checked\">
\t\t\t\t\t\t\t\t<span class=\"lever\"></span>
\t\t\t\t\t\t\t\t";
            // line 221
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
        } else {
            // line 224
            echo "\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t";
            // line 225
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t\t\t\t\t<input id=\"newsletter\" type=\"checkbox\" name=\"newsletter\" value=\"0\">
\t\t\t\t\t\t\t\t<span class=\"lever\"></span>
\t\t\t\t\t\t\t\t";
            // line 228
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 232
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
\t\t\t\t\t\t";
        // line 233
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 234
            echo "\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t";
            // line 235
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 236
                echo "\t\t\t\t\t\t\t<label for=\"agreement-check\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" id=\"agreement-check\" class=\"filled-in\">
\t\t\t\t\t\t\t\t<span>";
                // line 238
                echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
                echo "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
            } else {
                // line 241
                echo "\t\t\t\t\t\t\t<label for=\"agreement-check\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"agreement-check\" class=\"filled-in\">
\t\t\t\t\t\t\t\t<span>";
                // line 243
                echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
                echo "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
            }
            // line 246
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 248
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t<button type=\"submit\" value=\"";
        // line 250
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
        // line 253
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 255
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

\t\$('.switch input[type=\\'checkbox\\']').click(function() {
\t\t\$('#newsletter').attr('value', (\$('#newsletter').attr('value')==0) ? '1' : '0');
\t});

\t";
        // line 292
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 293
        echo "\t";
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 294
        echo "\t";
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 295
        echo "\t";
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 296
        echo "\t";
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 297
        echo "\t";
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 298
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 299
            echo "\t\t";
            if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                // line 300
                echo "\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
                echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                echo "', classes: 'toast-warning'});
\t\t";
            }
            // line 302
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "
\t\$('div[id^=\\'button-custom-field\\']').on('click', function() {
\t\tvar element = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\"></form><div id=\"modal-loading\" class=\"modal\"><div class=\"modal-content\"><div class=\"row valign-wrapper\"><div class=\"col s4 m3 center\"><div class=\"preloader-wrapper active\"><div class=\"spinner-layer spinner-blue\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-red\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-yellow\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-green\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div></div></div><div class=\"col s10 m9\"><p id=\"loading-text\" class=\"flow-text text-bold\">";
        // line 309
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

\t\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
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
        // line 358
        echo (isset($context["first_day"]) ? $context["first_day"] : null);
        echo ",
\t\ti18n: {
\t\t\tclear: '";
        // line 360
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\ttoday: '";
        // line 361
        echo (isset($context["button_date_today"]) ? $context["button_date_today"] : null);
        echo "',
\t\t\tdone: '";
        // line 362
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tmonths: ['";
        // line 363
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
        // line 364
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
        // line 365
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
        // line 366
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
        // line 367
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
        // line 375
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\tcancel: '";
        // line 376
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tdone: '";
        // line 377
        echo (isset($context["button_time_done"]) ? $context["button_time_done"] : null);
        echo "',
\t\t\ttwelvehour: ";
        // line 378
        echo (isset($context["twelve_hour"]) ? $context["twelve_hour"] : null);
        echo "
\t\t}
\t});
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 384
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1114 => 384,  1105 => 378,  1101 => 377,  1097 => 376,  1093 => 375,  1070 => 367,  1054 => 366,  1038 => 365,  1012 => 364,  986 => 363,  982 => 362,  978 => 361,  974 => 360,  969 => 358,  917 => 309,  909 => 303,  903 => 302,  897 => 300,  894 => 299,  889 => 298,  882 => 297,  875 => 296,  868 => 295,  861 => 294,  854 => 293,  848 => 292,  808 => 255,  803 => 253,  795 => 250,  791 => 248,  787 => 246,  781 => 243,  777 => 241,  771 => 238,  767 => 236,  765 => 235,  762 => 234,  760 => 233,  756 => 232,  753 => 231,  747 => 228,  741 => 225,  738 => 224,  732 => 221,  726 => 218,  723 => 217,  721 => 216,  716 => 214,  711 => 212,  707 => 211,  701 => 208,  697 => 207,  691 => 205,  685 => 204,  667 => 201,  661 => 200,  654 => 199,  651 => 198,  633 => 195,  627 => 194,  620 => 193,  617 => 192,  610 => 188,  598 => 187,  592 => 186,  587 => 184,  580 => 183,  577 => 182,  568 => 178,  552 => 177,  544 => 175,  541 => 174,  532 => 170,  516 => 169,  508 => 167,  505 => 166,  500 => 163,  493 => 161,  487 => 158,  479 => 157,  476 => 156,  470 => 153,  462 => 152,  459 => 151,  457 => 150,  454 => 149,  450 => 148,  445 => 146,  438 => 145,  435 => 144,  430 => 141,  423 => 139,  417 => 136,  409 => 135,  406 => 134,  400 => 131,  392 => 130,  389 => 129,  387 => 128,  384 => 127,  380 => 126,  375 => 124,  368 => 123,  365 => 122,  356 => 118,  353 => 117,  347 => 116,  339 => 114,  331 => 112,  328 => 111,  324 => 110,  320 => 109,  312 => 108,  304 => 106,  301 => 105,  297 => 104,  291 => 101,  287 => 100,  279 => 97,  275 => 96,  271 => 95,  265 => 92,  261 => 91,  255 => 88,  251 => 87,  246 => 84,  239 => 82,  233 => 79,  227 => 78,  222 => 77,  216 => 74,  210 => 73,  205 => 72,  203 => 71,  200 => 70,  196 => 69,  191 => 67,  183 => 66,  179 => 65,  174 => 63,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 	<div id="account-register" class="container">*/
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
/* 						<div id="account">*/
/* 							<h2>{{ text_your_details }}</h2>*/
/* 							<div class="form-group" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/* 								<label class="text-bold required">{{ entry_customer_group }}</label>*/
/* 								<ul>*/
/* 									{% for customer_group in customer_groups %}*/
/* 									<li>*/
/* 										{% if customer_group.customer_group_id == customer_group_id %}*/
/* 										<label for="radio-{{ customer_group.customer_group_id }}">*/
/* 											<input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" id="radio-{{ customer_group.customer_group_id }}" class="with-gap" checked="checked">*/
/* 											<span>{{ customer_group.name }}</span>*/
/* 										</label>*/
/* 										{% else %}*/
/* 										<label for="radio-{{ customer_group.customer_group_id }}">*/
/* 											<input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" id="radio-{{ customer_group.customer_group_id }}" class="with-gap">*/
/* 											<span>{{ customer_group.name }}</span>*/
/* 										</label>*/
/* 										{% endif %}*/
/* 									</li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 							</div>*/
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
/* 								<input type="tel" name="telephone" value="{{ telephone }}" id="input-telephone" class="validate">*/
/* 								<label for="input-telephone" class="text-bold required">{{ entry_telephone }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% for custom_field in custom_fields %}*/
/* 						{% if custom_field.type == 'select' %}*/
/* 						<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<div class="input-field">*/
/* 								<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/* 									<option value="">{{ text_select }}</option>*/
/* 									{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									{% if register_custom_field[custom_field.location][custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/* 									<option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/* 									{% else %}*/
/* 									<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 								<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'radio' %}*/
/* 						<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold">{{ custom_field.name }}</label>*/
/* 							<ul>*/
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* 								<li>*/
/* 									{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/* 									<label>*/
/* 										<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="with-gap" checked="checked">*/
/* 										<span>{{ custom_field_value.name }}</span>*/
/* 									</label>*/
/* 									{% else %}*/
/* 									<label>*/
/* 										<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="with-gap">*/
/* 										<span>{{ custom_field_value.name }}</span>*/
/* 									</label>*/
/* 									{% endif %}*/
/* 								</li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'checkbox' %}*/
/* 						<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold">{{ custom_field.name }}</label>*/
/* 							<ul>*/
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* 								<li>*/
/* 									{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}*/
/* 									<label>*/
/* 										<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="filled-in" checked="checked">*/
/* 										<span>{{ custom_field_value.name }}</span>*/
/* 									</label>*/
/* 									{% else %}*/
/* 									<label>*/
/* 										<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="filled-in">*/
/* 										<span>{{ custom_field_value.name }}</span>*/
/* 									</label>*/
/* 									{% endif %}*/
/* 								</li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'text' %}*/
/* 						<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<div class="input-field">*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="validate">*/
/* 								<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'textarea' %}*/
/* 						<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<div class="input-field">*/
/* 								<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="materialize-textarea">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/* 								<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'file' %}*/
/* 						<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold">{{ custom_field.name }}</label>*/
/* 							<div class="file-field input-field">*/
/* 								<div id="button-custom-field{{ custom_field.custom_field_id }}" class="btn waves-effect waves-light blue-grey lighten-1"><i class="material-icons left">cloud_upload</i><span>{{ button_upload }}</span></div>*/
/* 								<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %} {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}">*/
/* 								<div class="file-path-wrapper"><input value="{{ custom_field.name }}" class="file-path validate" type="text"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'date' %}*/
/* 						<div id="custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="datepicker">*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'time' %}*/
/* 						<div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="timepicker">*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% endfor %}*/
/* 						<h2>{{ text_your_password }}</h2>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="password" name="password" value="{{ password }}" id="input-password" class="validate">*/
/* 							<label for="input-password" class="text-bold required">{{ entry_password }}</label>*/
/* 						</div>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="password" name="confirm" value="{{ confirm }}" id="input-confirm" class="validate">*/
/* 							<label for="input-confirm" class="text-bold required">{{ entry_confirm }}</label>*/
/* 						</div>*/
/* 						<h2>{{ text_newsletter }}</h2>*/
/* 						<div class="section switch form-group">*/
/* 							{% if newsletter %}*/
/* 							<label>*/
/* 								{{ text_no }}*/
/* 								<input id="newsletter" type="checkbox" name="newsletter" value="1" checked="checked">*/
/* 								<span class="lever"></span>*/
/* 								{{ text_yes }}*/
/* 							</label>*/
/* 							{% else %}*/
/* 							<label>*/
/* 								{{ text_no }}*/
/* 								<input id="newsletter" type="checkbox" name="newsletter" value="0">*/
/* 								<span class="lever"></span>*/
/* 								{{ text_yes }}*/
/* 							</label>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 						{{ captcha }}*/
/* 						{% if text_agree %}*/
/* 						<div class="section">*/
/* 							{% if agree %}*/
/* 							<label for="agreement-check">*/
/* 								<input type="checkbox" name="agree" value="1" checked="checked" id="agreement-check" class="filled-in">*/
/* 								<span>{{ text_agree }}</span>*/
/* 							</label>*/
/* 							{% else %}*/
/* 							<label for="agreement-check">*/
/* 								<input type="checkbox" name="agree" value="1" id="agreement-check" class="filled-in">*/
/* 								<span>{{ text_agree }}</span>*/
/* 							</label>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 						{% endif %}*/
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
/* 	$('.switch input[type=\'checkbox\']').click(function() {*/
/* 		$('#newsletter').attr('value', ($('#newsletter').attr('value')==0) ? '1' : '0');*/
/* 	});*/
/* */
/* 	{% if error_firstname %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_firstname }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_lastname %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_lastname }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_email %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_email }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_telephone %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_telephone }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_password %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_password }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_confirm %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_confirm }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% for custom_field in custom_fields %}*/
/* 		{% if error_custom_field[custom_field.custom_field_id] %}*/
/* 		M.toast({html: '<i class="material-icons left">warning</i>{{ error_custom_field[custom_field.custom_field_id] }}', classes: 'toast-warning'});*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* */
/* 	$('div[id^=\'button-custom-field\']').on('click', function() {*/
/* 		var element = this;*/
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
/* 							$(element).parent().find('input').val(json['code']);*/
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
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
