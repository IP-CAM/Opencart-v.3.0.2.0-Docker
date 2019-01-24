<?php

/* materialize/template/account/edit.twig */
class __TwigTemplate_2cdc042681aa17a983fa46eb080a4229d422d0fa3d0c1f11337dc53f0094de5d extends Twig_Template
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
\t<div id=\"account-edit\" class=\"container\">
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
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 64
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-firstname\" class=\"text-bold required\">";
        // line 65
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 68
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-lastname\" class=\"text-bold required\">";
        // line 69
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 72
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-email\" class=\"text-bold required\">";
        // line 73
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t\t\t\t<span class=\"helper-text\" data-error=\"";
        // line 74
        echo (isset($context["text_email_error"]) ? $context["text_email_error"] : null);
        echo "\" data-success=\"";
        echo (isset($context["text_email_success"]) ? $context["text_email_success"] : null);
        echo "\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 77
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-telephone\" class=\"text-bold required\">";
        // line 78
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 81
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 82
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                // line 84
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 85
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 94
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 99
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 100
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                    // line 104
                    if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 106
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"with-gap\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 107
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 111
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 112
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 120
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 121
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 122
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 124
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                    // line 126
                    if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 127
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 128
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"filled-in\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 129
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 132
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 133
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"filled-in\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 134
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 137
                    echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 142
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 143
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 145
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"validate\">
\t\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 146
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 151
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                // line 153
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"materialize-textarea\">";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>
\t\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 154
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 158
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 159
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 160
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t<div id=\"button-custom-field";
                // line 162
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\"><i class=\"material-icons left\">cloud_upload</i><span>";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</span></div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 163
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\"><input value=\"";
                // line 164
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"file-path validate\" type=\"text\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 168
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 169
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 170
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 171
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
            // line 174
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 175
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 176
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 177
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
            // line 180
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t<a href=\"";
        // line 184
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn-flat waves-effect waves-light href-underline\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t<div class=\"flex-reverse no-padding\">
\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"";
        // line 188
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
        // line 193
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 195
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 201
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 202
        echo "\t";
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 203
        echo "\t";
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 204
        echo "\t";
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 205
        echo "\t";
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 206
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 207
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                // line 208
                echo "\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
                echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                echo "', classes: 'toast-warning'});
\t\t\t";
            }
            // line 210
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "
\t\$('div[id^=\\'button-custom-field\\']').on('click', function() {
\t\tvar element = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\"></form><div id=\"modal-loading\" class=\"modal\"><div class=\"modal-content\"><div class=\"row valign-wrapper\"><div class=\"col s4 m3 center\"><div class=\"preloader-wrapper active\"><div class=\"spinner-layer spinner-blue\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-red\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-yellow\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-green\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div></div></div><div class=\"col s10 m9\"><p id=\"loading-text\" class=\"flow-text text-bold\">";
        // line 217
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "</p></div></div></div></div>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t    \tclearInterval(timer);
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
        // line 266
        echo (isset($context["first_day"]) ? $context["first_day"] : null);
        echo ",
\t\ti18n: {
\t\t\tclear: '";
        // line 268
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\ttoday: '";
        // line 269
        echo (isset($context["button_date_today"]) ? $context["button_date_today"] : null);
        echo "',
\t\t\tdone: '";
        // line 270
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tmonths: ['";
        // line 271
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
        // line 272
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
        // line 273
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
        // line 274
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
        // line 275
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
        // line 283
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\tcancel: '";
        // line 284
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tdone: '";
        // line 285
        echo (isset($context["button_time_done"]) ? $context["button_time_done"] : null);
        echo "',
\t\t\ttwelvehour: ";
        // line 286
        echo (isset($context["twelve_hour"]) ? $context["twelve_hour"] : null);
        echo "
\t\t}
\t});
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 292
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/account/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  926 => 292,  917 => 286,  913 => 285,  909 => 284,  905 => 283,  882 => 275,  866 => 274,  850 => 273,  824 => 272,  798 => 271,  794 => 270,  790 => 269,  786 => 268,  781 => 266,  729 => 217,  721 => 211,  715 => 210,  709 => 208,  706 => 207,  701 => 206,  694 => 205,  687 => 204,  680 => 203,  673 => 202,  667 => 201,  658 => 195,  653 => 193,  643 => 188,  634 => 184,  629 => 181,  623 => 180,  605 => 177,  595 => 176,  590 => 175,  587 => 174,  569 => 171,  559 => 170,  554 => 169,  551 => 168,  544 => 164,  533 => 163,  527 => 162,  518 => 160,  513 => 159,  510 => 158,  497 => 154,  481 => 153,  475 => 151,  472 => 150,  459 => 146,  443 => 145,  437 => 143,  434 => 142,  429 => 139,  422 => 137,  416 => 134,  408 => 133,  405 => 132,  399 => 129,  391 => 128,  388 => 127,  386 => 126,  383 => 125,  379 => 124,  370 => 122,  365 => 121,  362 => 120,  357 => 117,  350 => 115,  344 => 112,  336 => 111,  333 => 110,  327 => 107,  319 => 106,  316 => 105,  314 => 104,  311 => 103,  307 => 102,  298 => 100,  293 => 99,  290 => 98,  277 => 94,  274 => 93,  268 => 92,  260 => 90,  252 => 88,  249 => 87,  245 => 86,  241 => 85,  233 => 84,  227 => 82,  224 => 81,  220 => 80,  215 => 78,  211 => 77,  203 => 74,  199 => 73,  195 => 72,  189 => 69,  185 => 68,  179 => 65,  175 => 64,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 	<div id="account-edit" class="container">*/
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
/* 						<div class="input-field form-group">*/
/* 							<input type="text" name="firstname" value="{{ firstname }}" id="input-firstname" class="validate">*/
/* 							<label for="input-firstname" class="text-bold required">{{ entry_firstname }}</label>*/
/* 						</div>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="text" name="lastname" value="{{ lastname }}" id="input-lastname" class="validate">*/
/* 							<label for="input-lastname" class="text-bold required">{{ entry_lastname }}</label>*/
/* 						</div>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="email" name="email" value="{{ email }}" id="input-email" class="validate">*/
/* 							<label for="input-email" class="text-bold required">{{ entry_email }}</label>*/
/* 							<span class="helper-text" data-error="{{ text_email_error }}" data-success="{{ text_email_success }}"></span>*/
/* 						</div>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="tel" name="telephone" value="{{ telephone }}" id="input-telephone" class="validate">*/
/* 							<label for="input-telephone" class="text-bold required">{{ entry_telephone }}</label>*/
/* 						</div>*/
/* 						{% for custom_field in custom_fields %}*/
/* 						{% if custom_field.type == 'select' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<div class="input-field">*/
/* 								<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}">*/
/* 									<option value="">{{ text_select }}</option>*/
/* 									{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/* 									<option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/* 									{% else %}*/
/* 									<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 								<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'radio' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}">{{ custom_field.name }}</label>*/
/* 							<ul>*/
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* 								<li>*/
/* 									{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
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
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}">{{ custom_field.name }}</label>*/
/* 							<ul>*/
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* 								<li>*/
/* 									{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}*/
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
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<div class="input-field">*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="validate">*/
/* 								<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'textarea' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<div class="input-field">*/
/* 								<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="materialize-textarea">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/* 								<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'file' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}">{{ custom_field.name }}</label>*/
/* 							<div class="file-field input-field">*/
/* 								<div id="button-custom-field{{ custom_field.custom_field_id }}" class="btn waves-effect waves-light blue-grey lighten-1"><i class="material-icons left">cloud_upload</i><span>{{ button_upload }}</span></div>*/
/* 								<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }} {% endif %}">*/
/* 								<div class="file-path-wrapper"><input value="{{ custom_field.name }}" class="file-path validate" type="text"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'date' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="datepicker">*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'time' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="timepicker">*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% endfor %}*/
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
/* 	{% if error_email %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_email }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_telephone %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_telephone }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% for custom_field in custom_fields %}*/
/* 			{% if error_custom_field[custom_field.custom_field_id] %}*/
/* 			M.toast({html: '<i class="material-icons left">warning</i>{{ error_custom_field[custom_field.custom_field_id] }}', classes: 'toast-warning'});*/
/* 			{% endif %}*/
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
/* 	    	clearInterval(timer);*/
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
