<?php

/* materialize/template/checkout/shipping_address.twig */
class __TwigTemplate_b23dc3e1f754bc2dd88dfcde0f6adc98da267c17f2e2189b583bdbe0b25e5e83 extends Twig_Template
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
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            // line 2
            echo "<ul>
\t<li>
\t\t<label for=\"existing_shipping_address\" class=\"text-bold\">
\t\t\t<input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\" id=\"existing_shipping_address\" class=\"with-gap\">
\t\t\t<span>";
            // line 6
            echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
            echo "</span>
\t\t</label>
\t</li>
\t<li>
\t\t<div id=\"shipping-existing\" class=\"input-field\">
\t\t\t<select name=\"address_id\">
\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 13
                echo "\t\t\t\t";
                if (($this->getAttribute($context["address"], "address_id", array()) == (isset($context["address_id"]) ? $context["address_id"] : null))) {
                    // line 14
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "city", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 16
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "city", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "</option>
\t\t\t\t";
                }
                // line 18
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t</select>
\t\t</div>
\t</li>
\t<li>
\t\t<label for=\"new_shipping_address\" class=\"text-bold\">
\t\t\t<input type=\"radio\" name=\"shipping_address\" value=\"new\" id=\"new_shipping_address\" class=\"with-gap\">
\t\t\t<span>";
            // line 25
            echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
            echo "</span>
\t\t</label>
\t</li>
</ul>
";
        }
        // line 30
        echo "<div id=\"shipping-new\" style=\"display: ";
        echo (((isset($context["addresses"]) ? $context["addresses"] : null)) ? ("none") : ("block"));
        echo "\" class=\"section\">
\t<div class=\"input-field\">
\t\t<label for=\"input-shipping-firstname\" class=\"text-bold required\">";
        // line 32
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
\t\t<input type=\"text\" name=\"firstname\" value=\"\" id=\"input-shipping-firstname\" class=\"validate\">
\t</div>
\t<div class=\"input-field\">
\t\t<label for=\"input-shipping-lastname\" class=\"text-bold required\">";
        // line 36
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
\t\t<input type=\"text\" name=\"lastname\" value=\"\" id=\"input-shipping-lastname\" class=\"validate\">
\t</div>
\t<div class=\"input-field\">
\t\t<label for=\"input-shipping-company\" class=\"text-bold\">";
        // line 40
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
\t\t<input type=\"text\" name=\"company\" value=\"\" id=\"input-shipping-company\" class=\"validate\">
\t</div>
\t<div class=\"input-field\">
\t\t<label for=\"input-shipping-address-1\" class=\"text-bold required\">";
        // line 44
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
\t\t<input type=\"text\" name=\"address_1\" value=\"\" id=\"input-shipping-address-1\" class=\"validate\">
\t</div>
\t<div class=\"input-field\">
\t\t<label for=\"input-shipping-address-2\" class=\"text-bold\">";
        // line 48
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
\t\t<input type=\"text\" name=\"address_2\" value=\"\" id=\"input-shipping-address-2\" class=\"validate\">
\t</div>
\t<div class=\"input-field\">
\t\t<label for=\"input-shipping-city\" class=\"text-bold required\">";
        // line 52
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
\t\t<input type=\"text\" name=\"city\" value=\"\" id=\"input-shipping-city\" class=\"validate\">
\t</div>
\t<div class=\"input-field\">
\t\t<label for=\"input-shipping-postcode\" class=\"text-bold required\">";
        // line 56
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
\t\t<input type=\"text\" name=\"postcode\" value=\"\" id=\"input-shipping-postcode\" class=\"validate\">
\t</div>
\t<div class=\"section\">
\t\t<div class=\"input-field\">
\t\t\t<select name=\"country_id\" id=\"input-shipping-country\">
\t\t\t\t<option value=\"\" disabled selected>";
        // line 62
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
\t\t\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 64
            echo "\t\t\t\t";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 65
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t</select>
\t\t\t<label for=\"input-shipping-country\" class=\"text-bold required\">";
        // line 71
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
\t\t</div>
\t</div>
\t<div class=\"section\">
\t\t<div class=\"input-field\">
\t\t\t<select name=\"zone_id\" id=\"input-shipping-zone\">
\t\t\t</select>
\t\t\t<label for=\"input-shipping-zone\" class=\"text-bold required\">";
        // line 78
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
\t\t</div>
\t</div>
\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 82
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 83
                echo "\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t<div class=\"input-field\">
\t\t\t<select name=\"custom_field[";
                // line 85
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t\t\t\t<option value=\"\">";
                // line 86
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
\t\t\t\t";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 88
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</option>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "\t\t\t</select>
\t\t\t<label class=\"text-bold";
                // line 91
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t</div>
\t</div>
\t";
            }
            // line 95
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 96
                echo "\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t<label class=\"text-bold";
                // line 97
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t<ul id=\"input-shipping-custom-field";
                // line 98
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t\t\t";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 100
                    echo "\t\t\t<li>
\t\t\t\t<label>
\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                    // line 102
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\" class=\"with-gap\">
\t\t\t\t\t<span>";
                    // line 103
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</span>
\t\t\t\t</label>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "\t\t</ul>
\t</div>
\t";
            }
            // line 110
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 111
                echo "\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t<label class=\"text-bold";
                // line 112
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t<ul id=\"input-shipping-custom-field";
                // line 113
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t\t\t";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 115
                    echo "\t\t\t<li>
\t\t\t\t<label>
\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                    // line 117
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "][]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\" class=\"filled-in\">
\t\t\t\t\t<span>";
                    // line 118
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</span>
\t\t\t\t</label>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "\t\t</ul>
\t</div>
\t";
            }
            // line 125
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 126
                echo "\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t<div class=\"input-field\">
\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 128
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"validate\">
\t\t\t<label class=\"text-bold active";
                // line 129
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t</div>
\t</div>
\t";
            }
            // line 133
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 134
                echo "\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t<div class=\"input-field\">
\t\t\t<textarea name=\"custom_field[";
                // line 136
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"materialize-textarea\">";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</textarea>
\t\t\t<label class=\"text-bold active";
                // line 137
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t</div>
\t</div>
\t";
            }
            // line 141
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 142
                echo "\t<div class=\"section\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t<label for=\"input-shipping-custom-field";
                // line 143
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"text-bold";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t<div class=\"file-field input-field\">
\t\t\t<div id=\"button-shipping-custom-field";
                // line 145
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\">
\t\t\t\t<i class=\"material-icons left\">cloud_upload</i>
\t\t\t\t<span>";
                // line 147
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</span>
\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 148
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t\t\t</div>
\t\t\t<div class=\"file-path-wrapper\">
\t\t\t\t<input value=\"";
                // line 151
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"file-path validate\" type=\"text\">
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 156
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 157
                echo "\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t<label class=\"text-bold";
                // line 158
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t<input type=\"text\" name=\"custom_field[";
                // line 159
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"datepicker\">
\t</div>
\t";
            }
            // line 162
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 163
                echo "\t<div class=\"section form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
\t\t<label class=\"text-bold";
                // line 164
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required";
                }
                echo "\" for=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t<input type=\"text\" name=\"custom_field[";
                // line 165
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"timepicker\">
\t</div>
\t";
            }
            // line 168
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "</div>
<div class=\"flex-reverse\">
\t<button type=\"button\" value=\"";
        // line 171
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-shipping-address\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
</div>
<script>
\$('input[name=\\'shipping_address\\']').on('change', function() {
\tif (this.value == 'new') {
\t\t\$('#shipping-existing').hide();
\t\t\$('#shipping-new').show();
\t} else {
\t\t\$('#shipping-existing').show();
\t\t\$('#shipping-new').hide();
\t}
});
\$('#collapse-shipping-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().find('label').addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().find('label').removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 194
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 200
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 207
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-shipping-address select[name=\\'zone_id\\']').html(html);
\t\t\t\$('select').formSelect();
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-shipping-address select[name=\\'country_id\\']').trigger('change');
\$('select').formSelect();

\$('#collapse-shipping-address div[id^=\\'button-shipping-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\"></form><div id=\"modal-loading\" class=\"modal\"><div class=\"modal-content\"><div class=\"row valign-wrapper\"><div class=\"col s4 m3 center\"><div class=\"preloader-wrapper active\"><div class=\"spinner-layer spinner-blue\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-red\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-yellow\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-green\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div></div></div><div class=\"col s10 m9\"><p id=\"loading-text\" class=\"flow-text text-bold\">";
        // line 227
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

\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
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
        // line 276
        echo (isset($context["first_day"]) ? $context["first_day"] : null);
        echo ",
\ti18n: {
\t\tclear: '";
        // line 278
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\ttoday: '";
        // line 279
        echo (isset($context["button_date_today"]) ? $context["button_date_today"] : null);
        echo "',
\t\tdone: '";
        // line 280
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\tmonths: ['";
        // line 281
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
        // line 282
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
        // line 283
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
        // line 284
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
        // line 285
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
        // line 293
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\tcancel: '";
        // line 294
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\tdone: '";
        // line 295
        echo (isset($context["button_time_done"]) ? $context["button_time_done"] : null);
        echo "',
\t\ttwelvehour: ";
        // line 296
        echo (isset($context["twelve_hour"]) ? $context["twelve_hour"] : null);
        echo "
\t}
});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  814 => 296,  810 => 295,  806 => 294,  802 => 293,  779 => 285,  763 => 284,  747 => 283,  721 => 282,  695 => 281,  691 => 280,  687 => 279,  683 => 278,  678 => 276,  626 => 227,  603 => 207,  593 => 200,  584 => 194,  556 => 171,  552 => 169,  546 => 168,  532 => 165,  522 => 164,  517 => 163,  514 => 162,  500 => 159,  490 => 158,  485 => 157,  482 => 156,  474 => 151,  464 => 148,  460 => 147,  455 => 145,  444 => 143,  439 => 142,  436 => 141,  423 => 137,  411 => 136,  405 => 134,  402 => 133,  389 => 129,  377 => 128,  371 => 126,  368 => 125,  363 => 122,  353 => 118,  345 => 117,  341 => 115,  337 => 114,  333 => 113,  325 => 112,  320 => 111,  317 => 110,  312 => 107,  302 => 103,  294 => 102,  290 => 100,  286 => 99,  282 => 98,  274 => 97,  269 => 96,  266 => 95,  253 => 91,  250 => 90,  239 => 88,  235 => 87,  231 => 86,  223 => 85,  217 => 83,  214 => 82,  210 => 81,  204 => 78,  194 => 71,  191 => 70,  185 => 69,  177 => 67,  169 => 65,  166 => 64,  162 => 63,  158 => 62,  149 => 56,  142 => 52,  135 => 48,  128 => 44,  121 => 40,  114 => 36,  107 => 32,  101 => 30,  93 => 25,  85 => 19,  79 => 18,  61 => 16,  43 => 14,  40 => 13,  36 => 12,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if addresses %}*/
/* <ul>*/
/* 	<li>*/
/* 		<label for="existing_shipping_address" class="text-bold">*/
/* 			<input type="radio" name="shipping_address" value="existing" checked="checked" id="existing_shipping_address" class="with-gap">*/
/* 			<span>{{ text_address_existing }}</span>*/
/* 		</label>*/
/* 	</li>*/
/* 	<li>*/
/* 		<div id="shipping-existing" class="input-field">*/
/* 			<select name="address_id">*/
/* 			{% for address in addresses %}*/
/* 				{% if address.address_id == address_id %}*/
/* 				<option value="{{ address.address_id }}" selected="selected">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>*/
/* 				{% else %}*/
/* 				<option value="{{ address.address_id }}">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 			</select>*/
/* 		</div>*/
/* 	</li>*/
/* 	<li>*/
/* 		<label for="new_shipping_address" class="text-bold">*/
/* 			<input type="radio" name="shipping_address" value="new" id="new_shipping_address" class="with-gap">*/
/* 			<span>{{ text_address_new }}</span>*/
/* 		</label>*/
/* 	</li>*/
/* </ul>*/
/* {% endif %}*/
/* <div id="shipping-new" style="display: {{ addresses ? 'none' : 'block' }}" class="section">*/
/* 	<div class="input-field">*/
/* 		<label for="input-shipping-firstname" class="text-bold required">{{ entry_firstname }}</label>*/
/* 		<input type="text" name="firstname" value="" id="input-shipping-firstname" class="validate">*/
/* 	</div>*/
/* 	<div class="input-field">*/
/* 		<label for="input-shipping-lastname" class="text-bold required">{{ entry_lastname }}</label>*/
/* 		<input type="text" name="lastname" value="" id="input-shipping-lastname" class="validate">*/
/* 	</div>*/
/* 	<div class="input-field">*/
/* 		<label for="input-shipping-company" class="text-bold">{{ entry_company }}</label>*/
/* 		<input type="text" name="company" value="" id="input-shipping-company" class="validate">*/
/* 	</div>*/
/* 	<div class="input-field">*/
/* 		<label for="input-shipping-address-1" class="text-bold required">{{ entry_address_1 }}</label>*/
/* 		<input type="text" name="address_1" value="" id="input-shipping-address-1" class="validate">*/
/* 	</div>*/
/* 	<div class="input-field">*/
/* 		<label for="input-shipping-address-2" class="text-bold">{{ entry_address_2 }}</label>*/
/* 		<input type="text" name="address_2" value="" id="input-shipping-address-2" class="validate">*/
/* 	</div>*/
/* 	<div class="input-field">*/
/* 		<label for="input-shipping-city" class="text-bold required">{{ entry_city }}</label>*/
/* 		<input type="text" name="city" value="" id="input-shipping-city" class="validate">*/
/* 	</div>*/
/* 	<div class="input-field">*/
/* 		<label for="input-shipping-postcode" class="text-bold required">{{ entry_postcode }}</label>*/
/* 		<input type="text" name="postcode" value="" id="input-shipping-postcode" class="validate">*/
/* 	</div>*/
/* 	<div class="section">*/
/* 		<div class="input-field">*/
/* 			<select name="country_id" id="input-shipping-country">*/
/* 				<option value="" disabled selected>{{ text_select }}</option>*/
/* 				{% for country in countries %}*/
/* 				{% if country.country_id == country_id %}*/
/* 				<option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/* 				{% else %}*/
/* 				<option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* 				{% endif %}*/
/* 				{% endfor %}*/
/* 			</select>*/
/* 			<label for="input-shipping-country" class="text-bold required">{{ entry_country }}</label>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="section">*/
/* 		<div class="input-field">*/
/* 			<select name="zone_id" id="input-shipping-zone">*/
/* 			</select>*/
/* 			<label for="input-shipping-zone" class="text-bold required">{{ entry_zone }}</label>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% for custom_field in custom_fields %}*/
/* 	{% if custom_field.type == 'select' %}*/
/* 	<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 		<div class="input-field">*/
/* 			<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
/* 				<option value="">{{ text_select }}</option>*/
/* 				{% for custom_field_value in custom_field.custom_field_value %}*/
/* 				<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* 				{% endfor %}*/
/* 			</select>*/
/* 			<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'radio' %}*/
/* 	<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 		<label class="text-bold{% if custom_field.required %} required{% endif %}">{{ custom_field.name }}</label>*/
/* 		<ul id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
/* 			{% for custom_field_value in custom_field.custom_field_value %}*/
/* 			<li>*/
/* 				<label>*/
/* 					<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" class="with-gap">*/
/* 					<span>{{ custom_field_value.name }}</span>*/
/* 				</label>*/
/* 			</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'checkbox' %}*/
/* 	<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 		<label class="text-bold{% if custom_field.required %} required{% endif %}">{{ custom_field.name }}</label>*/
/* 		<ul id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
/* 			{% for custom_field_value in custom_field.custom_field_value %}*/
/* 			<li>*/
/* 				<label>*/
/* 					<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" class="filled-in">*/
/* 					<span>{{ custom_field_value.name }}</span>*/
/* 				</label>*/
/* 			</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'text' %}*/
/* 	<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 		<div class="input-field">*/
/* 			<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="validate">*/
/* 			<label class="text-bold active{% if custom_field.required %} required{% endif %}" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'textarea' %}*/
/* 	<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 		<div class="input-field">*/
/* 			<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="materialize-textarea">{{ custom_field.value }}</textarea>*/
/* 			<label class="text-bold active{% if custom_field.required %} required{% endif %}" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'file' %}*/
/* 	<div class="section" data-sort="{{ custom_field.sort_order }}">*/
/* 		<label for="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="text-bold{% if custom_field.required %} required{% endif %}">{{ custom_field.name }}</label>*/
/* 		<div class="file-field input-field">*/
/* 			<div id="button-shipping-custom-field{{ custom_field.custom_field_id }}" class="btn waves-effect waves-light blue-grey lighten-1">*/
/* 				<i class="material-icons left">cloud_upload</i>*/
/* 				<span>{{ button_upload }}</span>*/
/* 				<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
/* 			</div>*/
/* 			<div class="file-path-wrapper">*/
/* 				<input value="{{ custom_field.name }}" class="file-path validate" type="text">*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'date' %}*/
/* 	<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 		<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 		<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="datepicker">*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'time' %}*/
/* 	<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 		<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 		<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="timepicker">*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	{% endfor %}*/
/* </div>*/
/* <div class="flex-reverse">*/
/* 	<button type="button" value="{{ button_continue }}" id="button-shipping-address" class="btn waves-effect waves-light red">{{ button_continue }}</button>*/
/* </div>*/
/* <script>*/
/* $('input[name=\'shipping_address\']').on('change', function() {*/
/* 	if (this.value == 'new') {*/
/* 		$('#shipping-existing').hide();*/
/* 		$('#shipping-new').show();*/
/* 	} else {*/
/* 		$('#shipping-existing').show();*/
/* 		$('#shipping-new').hide();*/
/* 	}*/
/* });*/
/* $('#collapse-shipping-address select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('#collapse-shipping-address input[name=\'postcode\']').parent().find('label').addClass('required');*/
/* 			} else {*/
/* 				$('#collapse-shipping-address input[name=\'postcode\']').parent().find('label').removeClass('required');*/
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
/* 			$('#collapse-shipping-address select[name=\'zone_id\']').html(html);*/
/* 			$('select').formSelect();*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-shipping-address select[name=\'country_id\']').trigger('change');*/
/* $('select').formSelect();*/
/* */
/* $('#collapse-shipping-address div[id^=\'button-shipping-custom-field\']').on('click', function() {*/
/* 	var element = this;*/
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
/* 						$(element).parent().find('input[name^=\'custom_field\']').val(json['code']);*/
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
