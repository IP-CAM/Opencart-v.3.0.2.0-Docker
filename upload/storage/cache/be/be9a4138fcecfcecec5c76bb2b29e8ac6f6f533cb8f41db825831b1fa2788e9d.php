<?php

/* materialize/template/account/address_form.twig */
class __TwigTemplate_77620147911d5ea999e32e4199192b166f8aa0d0cd95ea795773e39643442736 extends Twig_Template
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
\t<div id=\"account-address\" class=\"container\">
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
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</h2>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 65
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-firstname\" class=\"text-bold required\">";
        // line 66
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 69
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-lastname\" class=\"text-bold required\">";
        // line 70
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"company\" value=\"";
        // line 73
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" id=\"input-company\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-company\" class=\"text-bold\">";
        // line 74
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"address_1\" value=\"";
        // line 77
        echo (isset($context["address_1"]) ? $context["address_1"] : null);
        echo "\" id=\"input-address-1\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-address-1\" class=\"text-bold required\">";
        // line 78
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"address_2\" value=\"";
        // line 81
        echo (isset($context["address_2"]) ? $context["address_2"] : null);
        echo "\" id=\"input-address-2\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-address-2\" class=\"text-bold\">";
        // line 82
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"city\" value=\"";
        // line 85
        echo (isset($context["city"]) ? $context["city"] : null);
        echo "\" id=\"input-city\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-city\" class=\"text-bold required\">";
        // line 86
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"postcode\" value=\"";
        // line 89
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" id=\"input-postcode\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"input-postcode\" class=\"text-bold required\">";
        // line 90
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"section form-group\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<select name=\"country_id\" id=\"input-country\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>";
        // line 95
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 97
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            // line 102
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label for=\"input-country\" class=\"text-bold required\">";
        // line 104
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"section form-group\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<select name=\"zone_id\" id=\"input-zone\">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label for=\"input-zone\" class=\"text-bold required\">";
        // line 111
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 115
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 116
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 117
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                // line 119
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 120
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 125
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 132
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 133
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 134
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 137
                    echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                    // line 138
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 139
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 140
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"with-gap\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 141
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 144
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 145
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 146
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 149
                    echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 155
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 156
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                    // line 160
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 162
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"filled-in\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 163
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 167
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"filled-in\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 168
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 171
                    echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 176
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 177
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 179
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"validate\">
\t\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 180
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
            // line 184
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 185
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                // line 187
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"materialize-textarea\">";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>
\t\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 188
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
            // line 192
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 193
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 194
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t<div id=\"button-custom-field";
                // line 196
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\"><i class=\"material-icons left\">cloud_upload</i><span>";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</span></div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 197
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo "  ";
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\"><input value=\"";
                // line 198
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"file-path validate\" type=\"text\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 202
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 203
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 204
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 205
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
            // line 208
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 209
                echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                // line 210
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 211
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
            // line 214
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "\t\t\t\t\t\t<h2>";
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</h2>
\t\t\t\t\t\t<div class=\"switch form-group\">
\t\t\t\t\t\t\t";
        // line 217
        if ((isset($context["default"]) ? $context["default"] : null)) {
            // line 218
            echo "\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t";
            // line 219
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t\t\t\t\t<input id=\"address-default\" type=\"checkbox\" name=\"default\" value=\"1\" checked=\"checked\">
\t\t\t\t\t\t\t\t<span class=\"lever\"></span>
\t\t\t\t\t\t\t\t";
            // line 222
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
        } else {
            // line 225
            echo "\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t";
            // line 226
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t\t\t\t\t<input id=\"address-default\" type=\"checkbox\" name=\"default\" value=\"0\">
\t\t\t\t\t\t\t\t<span class=\"lever\"></span>
\t\t\t\t\t\t\t\t";
            // line 229
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
        }
        // line 232
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t<a href=\"";
        // line 236
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn-flat waves-effect waves-light left href-underline\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t<div class=\"flex-reverse no-padding\">
\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"";
        // line 240
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
        // line 245
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 247
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 253
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 254
        echo "\t";
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 255
        echo "\t";
        if ((isset($context["error_address_1"]) ? $context["error_address_1"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_address_1"]) ? $context["error_address_1"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 256
        echo "\t";
        if ((isset($context["error_city"]) ? $context["error_city"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_city"]) ? $context["error_city"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 257
        echo "\t";
        if ((isset($context["error_postcode"]) ? $context["error_postcode"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_postcode"]) ? $context["error_postcode"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 258
        echo "\t";
        if ((isset($context["error_country"]) ? $context["error_country"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_country"]) ? $context["error_country"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 259
        echo "\t";
        if ((isset($context["error_zone"]) ? $context["error_zone"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_zone"]) ? $context["error_zone"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 260
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 261
            echo "\t\t";
            if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                // line 262
                echo "\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
                echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                echo "', classes: 'toast-warning'});
\t\t";
            }
            // line 264
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "
\t\$('div[id^=\\'button-custom-field\\']').on('click', function() {
\t\tvar element = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\"></form><div id=\"modal-loading\" class=\"modal\"><div class=\"modal-content\"><div class=\"row valign-wrapper\"><div class=\"col s4 m3 center\"><div class=\"preloader-wrapper active\"><div class=\"spinner-layer spinner-blue\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-red\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-yellow\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-green\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div></div></div><div class=\"col s10 m9\"><p id=\"loading-text\" class=\"flow-text text-bold\">";
        // line 271
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
        // line 320
        echo (isset($context["first_day"]) ? $context["first_day"] : null);
        echo ",
\t\ti18n: {
\t\t\tclear: '";
        // line 322
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\ttoday: '";
        // line 323
        echo (isset($context["button_date_today"]) ? $context["button_date_today"] : null);
        echo "',
\t\t\tdone: '";
        // line 324
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tmonths: ['";
        // line 325
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
        // line 326
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
        // line 327
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
        // line 328
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
        // line 329
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
        // line 337
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\tcancel: '";
        // line 338
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tdone: '";
        // line 339
        echo (isset($context["button_time_done"]) ? $context["button_time_done"] : null);
        echo "',
\t\t\ttwelvehour: ";
        // line 340
        echo (isset($context["twelve_hour"]) ? $context["twelve_hour"] : null);
        echo "
\t\t}
\t});

\tvar select = \$('select'),
\t\tselectCountry = \$('#input-country'),
\t\tselectZone = \$('#input-zone'),
\t\tpostCode = \$('#input-postcode');

\tselectCountry.on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=account/account/country&country_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\tpostCode.next().addClass('required');
\t\t\t\t} else {
\t\t\t\t\tpostCode.next().removeClass('required');
\t\t\t\t}
\t\t\t\thtml = '<option value=\"\">";
        // line 359
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
\t\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 363
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}
\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 369
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t\t}
\t\t\t\tselectZone.html(html);
\t\t\t\tselect.formSelect();
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\tselectCountry.trigger('change');
\tselect.formSelect();

\t\$('.switch input[type=\\'checkbox\\']').click(function() {
\t\t\$('#address-default').attr('value', (\$('#address-default').attr('value')==0) ? '1' : '0');
\t});
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 388
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/account/address_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1114 => 388,  1092 => 369,  1083 => 363,  1076 => 359,  1054 => 340,  1050 => 339,  1046 => 338,  1042 => 337,  1019 => 329,  1003 => 328,  987 => 327,  961 => 326,  935 => 325,  931 => 324,  927 => 323,  923 => 322,  918 => 320,  866 => 271,  858 => 265,  852 => 264,  846 => 262,  843 => 261,  838 => 260,  831 => 259,  824 => 258,  817 => 257,  810 => 256,  803 => 255,  796 => 254,  790 => 253,  781 => 247,  776 => 245,  766 => 240,  757 => 236,  751 => 232,  745 => 229,  739 => 226,  736 => 225,  730 => 222,  724 => 219,  721 => 218,  719 => 217,  713 => 215,  707 => 214,  689 => 211,  679 => 210,  674 => 209,  671 => 208,  653 => 205,  643 => 204,  638 => 203,  635 => 202,  628 => 198,  616 => 197,  610 => 196,  601 => 194,  596 => 193,  593 => 192,  580 => 188,  564 => 187,  558 => 185,  555 => 184,  542 => 180,  526 => 179,  520 => 177,  517 => 176,  512 => 173,  505 => 171,  499 => 168,  491 => 167,  488 => 166,  482 => 163,  474 => 162,  471 => 161,  469 => 160,  466 => 159,  462 => 158,  453 => 156,  448 => 155,  445 => 154,  440 => 151,  433 => 149,  427 => 146,  419 => 145,  416 => 144,  410 => 141,  402 => 140,  399 => 139,  397 => 138,  394 => 137,  390 => 136,  381 => 134,  376 => 133,  373 => 132,  367 => 128,  361 => 127,  353 => 125,  345 => 123,  342 => 122,  338 => 121,  334 => 120,  326 => 119,  315 => 117,  310 => 116,  307 => 115,  303 => 114,  297 => 111,  287 => 104,  284 => 103,  278 => 102,  270 => 100,  262 => 98,  259 => 97,  255 => 96,  251 => 95,  243 => 90,  239 => 89,  233 => 86,  229 => 85,  223 => 82,  219 => 81,  213 => 78,  209 => 77,  203 => 74,  199 => 73,  193 => 70,  189 => 69,  183 => 66,  179 => 65,  174 => 63,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 	<div id="account-address" class="container">*/
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
/* 						<h2>{{ text_address }}</h2>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="text" name="firstname" value="{{ firstname }}" id="input-firstname" class="validate">*/
/* 							<label for="input-firstname" class="text-bold required">{{ entry_firstname }}</label>*/
/* 						</div>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="text" name="lastname" value="{{ lastname }}" id="input-lastname" class="validate">*/
/* 							<label for="input-lastname" class="text-bold required">{{ entry_lastname }}</label>*/
/* 						</div>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="text" name="company" value="{{ company }}" id="input-company" class="validate">*/
/* 							<label for="input-company" class="text-bold">{{ entry_company }}</label>*/
/* 						</div>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="text" name="address_1" value="{{ address_1 }}" id="input-address-1" class="validate">*/
/* 							<label for="input-address-1" class="text-bold required">{{ entry_address_1 }}</label>*/
/* 						</div>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="text" name="address_2" value="{{ address_2 }}" id="input-address-2" class="validate">*/
/* 							<label for="input-address-2" class="text-bold">{{ entry_address_2 }}</label>*/
/* 						</div>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="text" name="city" value="{{ city }}" id="input-city" class="validate">*/
/* 							<label for="input-city" class="text-bold required">{{ entry_city }}</label>*/
/* 						</div>*/
/* 						<div class="input-field form-group">*/
/* 							<input type="text" name="postcode" value="{{ postcode }}" id="input-postcode" class="validate">*/
/* 							<label for="input-postcode" class="text-bold required">{{ entry_postcode }}</label>*/
/* 						</div>*/
/* 						<div class="section form-group">*/
/* 							<div class="input-field">*/
/* 								<select name="country_id" id="input-country">*/
/* 									<option value="" disabled selected>{{ text_select }}</option>*/
/* 									{% for country in countries %}*/
/* 									{% if country.country_id == country_id %}*/
/* 									<option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/* 									{% else %}*/
/* 									<option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 								<label for="input-country" class="text-bold required">{{ entry_country }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="section form-group">*/
/* 							<div class="input-field">*/
/* 								<select name="zone_id" id="input-zone">*/
/* 								</select>*/
/* 								<label for="input-zone" class="text-bold required">{{ entry_zone }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% for custom_field in custom_fields %}*/
/* 						{% if custom_field.type == 'select' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<div class="input-field">*/
/* 								<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}">*/
/* 									<option value="">{{ text_select }}</option>*/
/* 									{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %}*/
/* 									<option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/* 									{% else %}*/
/* 									<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'radio' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}">{{ custom_field.name }}</label>*/
/* 							<ul>*/
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* 								<li>*/
/* 									{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %}*/
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
/* 									{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %}*/
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
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="validate">*/
/* 								<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'textarea' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<div class="input-field">*/
/* 								<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="materialize-textarea">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/* 								<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'file' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}">{{ custom_field.name }}</label>*/
/* 							<div class="file-field input-field">*/
/* 								<div id="button-custom-field{{ custom_field.custom_field_id }}" class="btn waves-effect waves-light blue-grey lighten-1"><i class="material-icons left">cloud_upload</i><span>{{ button_upload }}</span></div>*/
/* 								<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}  {{ address_custom_field[custom_field.custom_field_id] }} {% endif %}">*/
/* 								<div class="file-path-wrapper"><input value="{{ custom_field.name }}" class="file-path validate" type="text"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'date' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="datepicker">*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'time' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="timepicker">*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% endfor %}*/
/* 						<h2>{{ entry_default }}</h2>*/
/* 						<div class="switch form-group">*/
/* 							{% if default %}*/
/* 							<label>*/
/* 								{{ text_no }}*/
/* 								<input id="address-default" type="checkbox" name="default" value="1" checked="checked">*/
/* 								<span class="lever"></span>*/
/* 								{{ text_yes }}*/
/* 							</label>*/
/* 							{% else %}*/
/* 							<label>*/
/* 								{{ text_no }}*/
/* 								<input id="address-default" type="checkbox" name="default" value="0">*/
/* 								<span class="lever"></span>*/
/* 								{{ text_yes }}*/
/* 							</label>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="col s6">*/
/* 							<a href="{{ back }}" class="btn-flat waves-effect waves-light left href-underline">{{ button_back }}</a>*/
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
/* 	{% if error_firstname %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_firstname }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_lastname %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_lastname }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_address_1 %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_address_1 }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_city %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_city }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_postcode %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_postcode }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_country %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_country }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_zone %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_zone }}', classes: 'toast-warning'});{% endif %}*/
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
/* */
/* 	var select = $('select'),*/
/* 		selectCountry = $('#input-country'),*/
/* 		selectZone = $('#input-zone'),*/
/* 		postCode = $('#input-postcode');*/
/* */
/* 	selectCountry.on('change', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=account/account/country&country_id=' + this.value,*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['postcode_required'] == '1') {*/
/* 					postCode.next().addClass('required');*/
/* 				} else {*/
/* 					postCode.next().removeClass('required');*/
/* 				}*/
/* 				html = '<option value="">{{ text_select }}</option>';*/
/* 				if (json['zone'] && json['zone'] != '') {*/
/* 					for (i = 0; i < json['zone'].length; i++) {*/
/* 						html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* 						if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 							html += ' selected="selected"';*/
/* 						}*/
/* 						html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 					}*/
/* 				} else {*/
/* 					html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 				}*/
/* 				selectZone.html(html);*/
/* 				select.formSelect();*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* 	selectCountry.trigger('change');*/
/* 	select.formSelect();*/
/* */
/* 	$('.switch input[type=\'checkbox\']').click(function() {*/
/* 		$('#address-default').attr('value', ($('#address-default').attr('value')==0) ? '1' : '0');*/
/* 	});*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
