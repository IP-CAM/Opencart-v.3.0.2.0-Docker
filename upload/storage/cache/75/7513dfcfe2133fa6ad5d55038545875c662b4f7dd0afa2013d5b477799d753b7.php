<?php

/* materialize/template/checkout/register.twig */
class __TwigTemplate_8b7055963d5e893969bb595ef14c9cf9796eab3dd959e879379b54573e413ef0 extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col s12 l6\">
\t\t<div id=\"account\" class=\"card-panel z-depth-2\">
\t\t\t<h4 class=\"text-bold\">";
        // line 4
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</h4>
\t\t\t<div class=\"input-field\" style=\"display: ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
\t\t\t\t<div class=\"section\">
\t\t\t\t\t<span class=\"text-bold\">";
        // line 7
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 10
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t";
            // line 11
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 12
                echo "\t\t\t\t\t\t<label for=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 13
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" id=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" class=\"with-gap\">
\t\t\t\t\t\t\t<span>";
                // line 14
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t\t<label for=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 18
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" id=\"radio-";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t<span>";
                // line 19
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"\" id=\"input-payment-firstname\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-firstname\" class=\"text-bold required\">";
        // line 29
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 32
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-payment-lastname\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-lastname\" class=\"text-bold required\">";
        // line 33
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"text\" name=\"email\" value=\"\" id=\"input-payment-email\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-email\" class=\"text-bold required\">";
        // line 37
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t<span class=\"helper-text\" data-error=\"";
        // line 38
        echo (isset($context["text_email_error"]) ? $context["text_email_error"] : null);
        echo "\" data-success=\"";
        echo (isset($context["text_email_success"]) ? $context["text_email_success"] : null);
        echo "\"></span>
\t\t\t</div>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"text\" name=\"telephone\" value=\"\" id=\"input-payment-telephone\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-telephone\" class=\"text-bold required\">";
        // line 42
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" id=\"input-payment-password\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-password\" class=\"text-bold required\">";
        // line 46
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"\" id=\"input-payment-confirm\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-confirm\" class=\"text-bold required\">";
        // line 50
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
\t\t\t</div>
\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 53
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 54
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 55
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<select name=\"custom_field[";
                    // line 57
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t\t<option value=\"\">";
                    // line 58
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t\t\t\t\t";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 60
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "\t\t\t\t\t</select>
\t\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 63
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"text-bold\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 67
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 68
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<label class=\"text-bold\">";
                    // line 69
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t<ul id=\"input-payment-custom-field";
                    // line 70
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 72
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 74
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t<span>";
                        // line 75
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
                }
                // line 82
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 83
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<label class=\"text-bold\">";
                    // line 84
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t<ul id=\"input-payment-custom-field";
                    // line 85
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 87
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 89
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"filled-in\">
\t\t\t\t\t\t\t<span>";
                        // line 90
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
                }
                // line 97
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 98
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 100
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"validate\">
\t\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 101
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"active text-bold\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 105
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 106
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<textarea name=\"custom_field[";
                    // line 108
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"materialize-textarea\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
\t\t\t\t\t<label class=\"active text-bold\" for=\"input-payment-custom-field";
                    // line 109
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 113
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 114
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 115
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"text-bold\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t<div id=\"button-payment-custom-field";
                    // line 117
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\"><i class=\"material-icons left\">cloud_upload</i><span>";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</span></div>
\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 118
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t<div class=\"file-path-wrapper\"><input value=\"";
                    // line 119
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"file-path validate\" type=\"text\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 123
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 124
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 125
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"text-bold\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 126
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"datepicker\">
\t\t\t</div>
\t\t\t";
                }
                // line 129
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 130
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 131
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"text-bold\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 132
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"timepicker\">
\t\t\t</div>
\t\t\t";
                }
                // line 135
                echo "\t\t\t";
            }
            // line 136
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t\t</div>
\t</div>
\t<div class=\"col s12 l6\">
\t\t<div id=\"address\" class=\"card-panel z-depth-2\">
\t\t\t<h4 class=\"text-bold\">";
        // line 141
        echo (isset($context["text_your_address"]) ? $context["text_your_address"] : null);
        echo "</h4>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"text\" name=\"company\" value=\"\" id=\"input-payment-company\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-company\" class=\"text-bold\">";
        // line 144
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"text\" name=\"address_1\" value=\"\" id=\"input-payment-address-1\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-address-1\" class=\"text-bold required\">";
        // line 148
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"text\" name=\"address_2\" value=\"\" id=\"input-payment-address-2\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-address-2\" class=\"text-bold\">";
        // line 152
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"text\" name=\"city\" value=\"\" id=\"input-payment-city\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-city\" class=\"text-bold required\">";
        // line 156
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"input-field\">
\t\t\t\t<input type=\"text\" name=\"postcode\" value=\"\" id=\"input-payment-postcode\" class=\"validate\">
\t\t\t\t<label for=\"input-payment-postcode\" class=\"text-bold required\">";
        // line 160
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"section\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<select name=\"country_id\" id=\"input-payment-country\">
\t\t\t\t\t\t<option value=\"\" disabled selected>";
        // line 165
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
\t\t\t\t\t\t";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 167
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 168
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
\t\t\t\t\t\t";
            } else {
                // line 170
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
\t\t\t\t\t\t";
            }
            // line 172
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<label for=\"input-payment-country\" class=\"text-bold required\">";
        // line 174
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<select name=\"zone_id\" id=\"input-payment-zone\">
\t\t\t\t\t</select>
\t\t\t\t\t<label for=\"input-payment-zone\" class=\"text-bold required\">";
        // line 181
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 185
            echo "\t\t\t";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 186
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 187
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<select name=\"custom_field[";
                    // line 189
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t\t<option value=\"\">";
                    // line 190
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t\t\t\t\t";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 192
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    echo "\t\t\t\t\t</select>
\t\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 195
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"text-bold\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 199
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 200
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<label class=\"text-bold\">";
                    // line 201
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t<ul id=\"input-payment-custom-field";
                    // line 202
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t";
                    // line 203
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 204
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 206
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t<span>";
                        // line 207
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
                }
                // line 214
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 215
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<label class=\"text-bold\">";
                    // line 216
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t<ul id=\"input-payment-custom-field";
                    // line 217
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t";
                    // line 218
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 219
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 221
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"filled-in\">
\t\t\t\t\t\t\t<span>";
                        // line 222
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</li>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 226
                    echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
                }
                // line 229
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 230
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 232
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"validate\">
\t\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 233
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"text-bold active\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 237
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 238
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<textarea name=\"custom_field[";
                    // line 240
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"materialize-textarea\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
\t\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 241
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"text-bold active\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 245
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 246
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 247
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"text-bold\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t<div id=\"button-payment-custom-field";
                    // line 249
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\"><i class=\"material-icons left\">cloud_upload</i><span>";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</span></div>
\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 250
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t<div class=\"file-path-wrapper\"><input value=\"";
                    // line 251
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"file-path validate\" type=\"text\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 255
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 256
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 257
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"text-bold\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 258
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"datepicker\">
\t\t\t</div>
\t\t\t";
                }
                // line 261
                echo "\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 262
                    echo "\t\t\t<div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t<label for=\"input-payment-custom-field";
                    // line 263
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"text-bold\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 264
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"timepicker\">
\t\t\t</div>
\t\t\t";
                }
                // line 267
                echo "\t\t\t";
            }
            // line 268
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "\t\t</div>
\t</div>
</div>
";
        // line 272
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
<div class=\"section\">
\t<label for=\"newsletter\">
\t\t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" class=\"filled-in\">
\t\t<span>";
        // line 276
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</span>
\t</label>
</div>
";
        // line 279
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 280
            echo "<div class=\"section\">
\t<label for=\"shipping_address\">
\t\t<input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\" id=\"shipping_address\" class=\"filled-in\">
\t\t<span>";
            // line 283
            echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
            echo "</span>
\t</label>
</div>
";
        }
        // line 287
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 288
            echo "<div class=\"section\">
\t<label for=\"agreement\">
\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"agreement\" class=\"filled-in\">
\t\t<span>";
            // line 291
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "</span>
\t</label>
</div>
";
        }
        // line 295
        echo "<div class=\"flex-reverse\">
\t<button type=\"button\" value=\"";
        // line 296
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-register\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
</div>
<script>
\$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#collapse-payment-address .custom-field').hide();
\t\t\t\$('#collapse-payment-address .custom-field').find('label').filter(':first').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).find('label').filter(':first').addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');

\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().find('label').addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().find('label').removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 336
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 342
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 349
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
\t\t\t\$('select').formSelect();
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');

\$('select').formSelect();

\$('#collapse-payment-address div[id^=\\'button-payment-custom-field\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\"></form><div id=\"modal-loading\" class=\"modal\"><div class=\"modal-content\"><div class=\"row valign-wrapper\"><div class=\"col s4 m3 center\"><div class=\"preloader-wrapper active\"><div class=\"spinner-layer spinner-blue\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-red\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-yellow\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-green\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div></div></div><div class=\"col s10 m9\"><p id=\"loading-text\" class=\"flow-text text-bold\">";
        // line 370
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "</p></div></div></div></div>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$('#modal-loading').modal({
\t\t\t\tdismissible: false,
\t\t\t\topacity: .7,
\t\t\t\tendingTop: '40%',
\t\t\t}).modal('open');

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#modal-loading').modal('close').remove();
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json[\"error\"], classes: 'toast-warning'});
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#modal-loading').modal('close').remove();
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">check</i>' + json[\"success\"], classes: 'toast-success'});

\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('.datepicker').datepicker({
\tformat: 'yyyy-mm-dd',
\tfirstDay: ";
        // line 419
        echo (isset($context["first_day"]) ? $context["first_day"] : null);
        echo ",
\ti18n: {
\t\tclear: '";
        // line 421
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\ttoday: '";
        // line 422
        echo (isset($context["button_date_today"]) ? $context["button_date_today"] : null);
        echo "',
\t\tdone: '";
        // line 423
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\tmonths: ['";
        // line 424
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
\t\tmonthsShort: ['";
        // line 425
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
\t\tweekdays: ['";
        // line 426
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
\t\tweekdaysShort: ['";
        // line 427
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
\t\tweekdaysAbbrev: ['";
        // line 428
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
\t}
});

\$('.timepicker').timepicker({
\tdefaultTime: 'now',
\tautoclose: true,
\ti18n: {
\t\tclear: '";
        // line 436
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\tcancel: '";
        // line 437
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\tdone: '";
        // line 438
        echo (isset($context["button_time_done"]) ? $context["button_time_done"] : null);
        echo "',
\t\ttwelvehour: ";
        // line 439
        echo (isset($context["twelve_hour"]) ? $context["twelve_hour"] : null);
        echo "
\t}
});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1225 => 439,  1221 => 438,  1217 => 437,  1213 => 436,  1190 => 428,  1174 => 427,  1158 => 426,  1132 => 425,  1106 => 424,  1102 => 423,  1098 => 422,  1094 => 421,  1089 => 419,  1037 => 370,  1013 => 349,  1003 => 342,  994 => 336,  949 => 296,  946 => 295,  939 => 291,  934 => 288,  932 => 287,  925 => 283,  920 => 280,  918 => 279,  912 => 276,  905 => 272,  900 => 269,  894 => 268,  891 => 267,  877 => 264,  871 => 263,  864 => 262,  861 => 261,  847 => 258,  841 => 257,  834 => 256,  831 => 255,  824 => 251,  816 => 250,  810 => 249,  803 => 247,  796 => 246,  793 => 245,  784 => 241,  772 => 240,  764 => 238,  761 => 237,  752 => 233,  740 => 232,  732 => 230,  729 => 229,  724 => 226,  714 => 222,  706 => 221,  702 => 219,  698 => 218,  694 => 217,  690 => 216,  683 => 215,  680 => 214,  675 => 211,  665 => 207,  657 => 206,  653 => 204,  649 => 203,  645 => 202,  641 => 201,  634 => 200,  631 => 199,  622 => 195,  619 => 194,  608 => 192,  604 => 191,  600 => 190,  592 => 189,  584 => 187,  581 => 186,  578 => 185,  574 => 184,  568 => 181,  558 => 174,  555 => 173,  549 => 172,  541 => 170,  533 => 168,  530 => 167,  526 => 166,  522 => 165,  514 => 160,  507 => 156,  500 => 152,  493 => 148,  486 => 144,  480 => 141,  474 => 137,  468 => 136,  465 => 135,  451 => 132,  445 => 131,  438 => 130,  435 => 129,  421 => 126,  415 => 125,  408 => 124,  405 => 123,  398 => 119,  390 => 118,  384 => 117,  377 => 115,  370 => 114,  367 => 113,  358 => 109,  346 => 108,  338 => 106,  335 => 105,  326 => 101,  314 => 100,  306 => 98,  303 => 97,  298 => 94,  288 => 90,  280 => 89,  276 => 87,  272 => 86,  268 => 85,  264 => 84,  257 => 83,  254 => 82,  249 => 79,  239 => 75,  231 => 74,  227 => 72,  223 => 71,  219 => 70,  215 => 69,  208 => 68,  205 => 67,  196 => 63,  193 => 62,  182 => 60,  178 => 59,  174 => 58,  166 => 57,  158 => 55,  155 => 54,  152 => 53,  148 => 52,  143 => 50,  136 => 46,  129 => 42,  120 => 38,  116 => 37,  109 => 33,  105 => 32,  99 => 29,  92 => 24,  85 => 22,  79 => 19,  73 => 18,  68 => 17,  62 => 14,  56 => 13,  51 => 12,  49 => 11,  46 => 10,  42 => 9,  37 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/* 	<div class="col s12 l6">*/
/* 		<div id="account" class="card-panel z-depth-2">*/
/* 			<h4 class="text-bold">{{ text_your_details }}</h4>*/
/* 			<div class="input-field" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/* 				<div class="section">*/
/* 					<span class="text-bold">{{ entry_customer_group }}</span>*/
/* 					<ul>*/
/* 						{% for customer_group in customer_groups %}*/
/* 						<li>*/
/* 						{% if customer_group.customer_group_id == customer_group_id %}*/
/* 						<label for="radio-{{ customer_group.customer_group_id }}">*/
/* 							<input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" id="radio-{{ customer_group.customer_group_id }}" checked="checked" class="with-gap">*/
/* 							<span>{{ customer_group.name }}</span>*/
/* 						</label>*/
/* 						{% else %}*/
/* 						<label for="radio-{{ customer_group.customer_group_id }}">*/
/* 							<input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" id="radio-{{ customer_group.customer_group_id }}" class="with-gap">*/
/* 							<span>{{ customer_group.name }}</span>*/
/* 						</label>*/
/* 						{% endif %}*/
/* 						</li>*/
/* 					{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="input-field">*/
/* 				<input type="text" name="firstname" value="" id="input-payment-firstname" class="validate">*/
/* 				<label for="input-payment-firstname" class="text-bold required">{{ entry_firstname }}</label>*/
/* 			</div>*/
/* 			<div class="input-field">*/
/* 				<input type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-payment-lastname" class="validate">*/
/* 				<label for="input-payment-lastname" class="text-bold required">{{ entry_lastname }}</label>*/
/* 			</div>*/
/* 			<div class="input-field">*/
/* 				<input type="text" name="email" value="" id="input-payment-email" class="validate">*/
/* 				<label for="input-payment-email" class="text-bold required">{{ entry_email }}</label>*/
/* 				<span class="helper-text" data-error="{{ text_email_error }}" data-success="{{ text_email_success }}"></span>*/
/* 			</div>*/
/* 			<div class="input-field">*/
/* 				<input type="text" name="telephone" value="" id="input-payment-telephone" class="validate">*/
/* 				<label for="input-payment-telephone" class="text-bold required">{{ entry_telephone }}</label>*/
/* 			</div>*/
/* 			<div class="input-field">*/
/* 				<input type="password" name="password" value="" id="input-payment-password" class="validate">*/
/* 				<label for="input-payment-password" class="text-bold required">{{ entry_password }}</label>*/
/* 			</div>*/
/* 			<div class="input-field">*/
/* 				<input type="password" name="confirm" value="" id="input-payment-confirm" class="validate">*/
/* 				<label for="input-payment-confirm" class="text-bold required">{{ entry_confirm }}</label>*/
/* 			</div>*/
/* 			{% for custom_field in custom_fields %}*/
/* 			{% if custom_field.location == 'account' %}*/
/* 			{% if custom_field.type == 'select' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<div class="input-field">*/
/* 					<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 						<option value="">{{ text_select }}</option>*/
/* 						{% for custom_field_value in custom_field.custom_field_value %}*/
/* 						<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="text-bold">{{ custom_field.name }}</label>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'radio' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<label class="text-bold">{{ custom_field.name }}</label>*/
/* 				<ul id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 					{% for custom_field_value in custom_field.custom_field_value %}*/
/* 					<li>*/
/* 						<label>*/
/* 							<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="with-gap">*/
/* 							<span>{{ custom_field_value.name }}</span>*/
/* 						</label>*/
/* 					</li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'checkbox' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<label class="text-bold">{{ custom_field.name }}</label>*/
/* 				<ul id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 					{% for custom_field_value in custom_field.custom_field_value %}*/
/* 					<li>*/
/* 						<label>*/
/* 							<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="filled-in">*/
/* 							<span>{{ custom_field_value.name }}</span>*/
/* 						</label>*/
/* 					</li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'text' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<div class="input-field">*/
/* 					<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="validate">*/
/* 					<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="active text-bold">{{ custom_field.name }}</label>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'textarea' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<div class="input-field">*/
/* 					<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="materialize-textarea">{{ custom_field.value }}</textarea>*/
/* 					<label class="active text-bold" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'file' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="text-bold">{{ custom_field.name }}</label>*/
/* 				<div class="file-field input-field">*/
/* 					<div id="button-payment-custom-field{{ custom_field.custom_field_id }}" class="btn waves-effect waves-light blue-grey lighten-1"><i class="material-icons left">cloud_upload</i><span>{{ button_upload }}</span></div>*/
/* 					<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 					<div class="file-path-wrapper"><input value="{{ custom_field.name }}" class="file-path validate" type="text"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'date' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="text-bold">{{ custom_field.name }}</label>*/
/* 				<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="datepicker">*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'time' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="text-bold">{{ custom_field.name }}</label>*/
/* 				<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="timepicker">*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% endif %}*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col s12 l6">*/
/* 		<div id="address" class="card-panel z-depth-2">*/
/* 			<h4 class="text-bold">{{ text_your_address }}</h4>*/
/* 			<div class="input-field">*/
/* 				<input type="text" name="company" value="" id="input-payment-company" class="validate">*/
/* 				<label for="input-payment-company" class="text-bold">{{ entry_company }}</label>*/
/* 			</div>*/
/* 			<div class="input-field">*/
/* 				<input type="text" name="address_1" value="" id="input-payment-address-1" class="validate">*/
/* 				<label for="input-payment-address-1" class="text-bold required">{{ entry_address_1 }}</label>*/
/* 			</div>*/
/* 			<div class="input-field">*/
/* 				<input type="text" name="address_2" value="" id="input-payment-address-2" class="validate">*/
/* 				<label for="input-payment-address-2" class="text-bold">{{ entry_address_2 }}</label>*/
/* 			</div>*/
/* 			<div class="input-field">*/
/* 				<input type="text" name="city" value="" id="input-payment-city" class="validate">*/
/* 				<label for="input-payment-city" class="text-bold required">{{ entry_city }}</label>*/
/* 			</div>*/
/* 			<div class="input-field">*/
/* 				<input type="text" name="postcode" value="" id="input-payment-postcode" class="validate">*/
/* 				<label for="input-payment-postcode" class="text-bold required">{{ entry_postcode }}</label>*/
/* 			</div>*/
/* 			<div class="section">*/
/* 				<div class="input-field">*/
/* 					<select name="country_id" id="input-payment-country">*/
/* 						<option value="" disabled selected>{{ text_select }}</option>*/
/* 						{% for country in countries %}*/
/* 						{% if country.country_id == country_id %}*/
/* 						<option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/* 						{% else %}*/
/* 						<option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* 						{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					<label for="input-payment-country" class="text-bold required">{{ entry_country }}</label>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="section">*/
/* 				<div class="input-field">*/
/* 					<select name="zone_id" id="input-payment-zone">*/
/* 					</select>*/
/* 					<label for="input-payment-zone" class="text-bold required">{{ entry_zone }}</label>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% for custom_field in custom_fields %}*/
/* 			{% if custom_field.location == 'address' %}*/
/* 			{% if custom_field.type == 'select' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<div class="input-field">*/
/* 					<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 						<option value="">{{ text_select }}</option>*/
/* 						{% for custom_field_value in custom_field.custom_field_value %}*/
/* 						<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="text-bold">{{ custom_field.name }}</label>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'radio' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<label class="text-bold">{{ custom_field.name }}</label>*/
/* 				<ul id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 					{% for custom_field_value in custom_field.custom_field_value %}*/
/* 					<li>*/
/* 						<label>*/
/* 							<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="with-gap">*/
/* 							<span>{{ custom_field_value.name }}</span>*/
/* 						</label>*/
/* 					</li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'checkbox' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<label class="text-bold">{{ custom_field.name }}</label>*/
/* 				<ul id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 				{% for custom_field_value in custom_field.custom_field_value %}*/
/* 					<li>*/
/* 						<label>*/
/* 							<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="filled-in">*/
/* 							<span>{{ custom_field_value.name }}</span>*/
/* 						</label>*/
/* 					</li>*/
/* 				{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'text' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<div class="input-field">*/
/* 					<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="validate">*/
/* 					<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="text-bold active">{{ custom_field.name }}</label>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'textarea' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<div class="input-field">*/
/* 					<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="materialize-textarea">{{ custom_field.value }}</textarea>*/
/* 					<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="text-bold active">{{ custom_field.name }}</label>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'file' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="text-bold">{{ custom_field.name }}</label>*/
/* 				<div class="file-field input-field">*/
/* 					<div id="button-payment-custom-field{{ custom_field.custom_field_id }}" class="btn waves-effect waves-light blue-grey lighten-1"><i class="material-icons left">cloud_upload</i><span>{{ button_upload }}</span></div>*/
/* 					<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 					<div class="file-path-wrapper"><input value="{{ custom_field.name }}" class="file-path validate" type="text"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'date' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="text-bold">{{ custom_field.name }}</label>*/
/* 				<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="datepicker">*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if custom_field.type == 'time' %}*/
/* 			<div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 				<label for="input-payment-custom-field{{ custom_field.custom_field_id }}" class="text-bold">{{ custom_field.name }}</label>*/
/* 				<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="timepicker">*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% endif %}*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {{ captcha }}*/
/* <div class="section">*/
/* 	<label for="newsletter">*/
/* 		<input type="checkbox" name="newsletter" value="1" id="newsletter" class="filled-in">*/
/* 		<span>{{ entry_newsletter }}</span>*/
/* 	</label>*/
/* </div>*/
/* {% if shipping_required %}*/
/* <div class="section">*/
/* 	<label for="shipping_address">*/
/* 		<input type="checkbox" name="shipping_address" value="1" checked="checked" id="shipping_address" class="filled-in">*/
/* 		<span>{{ entry_shipping }}</span>*/
/* 	</label>*/
/* </div>*/
/* {% endif %}*/
/* {% if text_agree %}*/
/* <div class="section">*/
/* 	<label for="agreement">*/
/* 		<input type="checkbox" name="agree" value="1" id="agreement" class="filled-in">*/
/* 		<span>{{ text_agree }}</span>*/
/* 	</label>*/
/* </div>*/
/* {% endif %}*/
/* <div class="flex-reverse">*/
/* 	<button type="button" value="{{ button_continue }}" id="button-register" class="btn waves-effect waves-light red">{{ button_continue }}</button>*/
/* </div>*/
/* <script>*/
/* $('#collapse-payment-address input[name=\'customer_group_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('#collapse-payment-address .custom-field').hide();*/
/* 			$('#collapse-payment-address .custom-field').find('label').filter(':first').removeClass('required');*/
/* */
/* 			for (i = 0; i < json.length; i++) {*/
/* 				custom_field = json[i];*/
/* */
/* 				$('#payment-custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 				if (custom_field['required']) {*/
/* 					$('#payment-custom-field' + custom_field['custom_field_id']).find('label').filter(':first').addClass('required');*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-payment-address input[name=\'customer_group_id\']:checked').trigger('change');*/
/* */
/* $('#collapse-payment-address select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('#collapse-payment-address input[name=\'postcode\']').parent().find('label').addClass('required');*/
/* 			} else {*/
/* 				$('#collapse-payment-address input[name=\'postcode\']').parent().find('label').removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('#collapse-payment-address select[name=\'zone_id\']').html(html);*/
/* 			$('select').formSelect();*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-payment-address select[name=\'country_id\']').trigger('change');*/
/* */
/* $('select').formSelect();*/
/* */
/* $('#collapse-payment-address div[id^=\'button-payment-custom-field\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display:none;"><input type="file" name="file"></form><div id="modal-loading" class="modal"><div class="modal-content"><div class="row valign-wrapper"><div class="col s4 m3 center"><div class="preloader-wrapper active"><div class="spinner-layer spinner-blue"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div><div class="spinner-layer spinner-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div><div class="spinner-layer spinner-yellow"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div><div class="spinner-layer spinner-green"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div><div class="col s10 m9"><p id="loading-text" class="flow-text text-bold">{{ text_loading }}</p></div></div></div></div>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$('#modal-loading').modal({*/
/* 				dismissible: false,*/
/* 				opacity: .7,*/
/* 				endingTop: '40%',*/
/* 			}).modal('open');*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				success: function(json) {*/
/* 					if (json['error']) {*/
/* 						$('#modal-loading').modal('close').remove();*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json["error"], classes: 'toast-warning'});*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						$('#modal-loading').modal('close').remove();*/
/* 						M.toast({html: '<i class="material-icons left">check</i>' + json["success"], classes: 'toast-success'});*/
/* */
/* 						$(node).parent().find('input[name^=\'custom_field\']').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* */
/* $('.datepicker').datepicker({*/
/* 	format: 'yyyy-mm-dd',*/
/* 	firstDay: {{ first_day }},*/
/* 	i18n: {*/
/* 		clear: '{{ button_datetime_clear }}',*/
/* 		today: '{{ button_date_today }}',*/
/* 		done: '{{ button_datetime_done }}',*/
/* 		months: ['{{ text_months_full_january }}', '{{ text_months_full_february }}', '{{ text_months_full_march }}', '{{ text_months_full_april }}', '{{ text_months_full_may }}', '{{ text_months_full_june }}', '{{ text_months_full_july }}', '{{ text_months_full_august }}', '{{ text_months_full_september }}', '{{ text_months_full_october }}', '{{ text_months_full_november }}', '{{ text_months_full_december }}'],*/
/* 		monthsShort: ['{{ text_months_short_january }}', '{{ text_months_short_february }}', '{{ text_months_short_march }}', '{{ text_months_short_april }}', '{{ text_months_short_may }}', '{{ text_months_short_june }}', '{{ text_months_short_july }}', '{{ text_months_short_august }}', '{{ text_months_short_september }}', '{{ text_months_short_october }}', '{{ text_months_short_november }}', '{{ text_months_short_december }}'],*/
/* 		weekdays: ['{{ text_weekdays_full_sunday }}', '{{ text_weekdays_full_monday }}', '{{ text_weekdays_full_tuesday }}', '{{ text_weekdays_full_wednesday }}', '{{ text_weekdays_full_thursday }}', '{{ text_weekdays_full_friday }}', '{{ text_weekdays_full_saturday }}'],*/
/* 		weekdaysShort: ['{{ text_weekdays_short_sunday }}', '{{ text_weekdays_short_monday }}', '{{ text_weekdays_short_tuesday }}', '{{ text_weekdays_short_wednesday }}', '{{ text_weekdays_short_thursday }}', '{{ text_weekdays_short_friday }}', '{{ text_weekdays_short_saturday }}'],*/
/* 		weekdaysAbbrev: ['{{ text_weekdays_short_sunday }}', '{{ text_weekdays_short_monday }}', '{{ text_weekdays_short_tuesday }}', '{{ text_weekdays_short_wednesday }}', '{{ text_weekdays_short_thursday }}', '{{ text_weekdays_short_friday }}', '{{ text_weekdays_short_saturday }}']*/
/* 	}*/
/* });*/
/* */
/* $('.timepicker').timepicker({*/
/* 	defaultTime: 'now',*/
/* 	autoclose: true,*/
/* 	i18n: {*/
/* 		clear: '{{ button_datetime_clear }}',*/
/* 		cancel: '{{ button_datetime_done }}',*/
/* 		done: '{{ button_time_done }}',*/
/* 		twelvehour: {{ twelve_hour }}*/
/* 	}*/
/* });*/
/* </script>*/
