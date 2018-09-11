<?php

/* materialize/template/account/affiliate.twig */
class __TwigTemplate_29b377ed2c3daea587c6539dc3edc0c97e79947038b4e0b8c8b02af627e8f2a7 extends Twig_Template
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
\t\t\t\t<form action=\"";
        // line 61
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div id=\"address\" class=\"col s12\">
\t\t\t\t\t\t\t\t<h2>";
        // line 65
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</h2>
\t\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"company\" value=\"";
        // line 67
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" id=\"input-company\" class=\"validate\">
\t\t\t\t\t\t\t\t\t<label for=\"input-company\" class=\"text-bold\">";
        // line 68
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"website\" value=\"";
        // line 71
        echo (isset($context["website"]) ? $context["website"] : null);
        echo "\" id=\"input-website\" class=\"validate\">
\t\t\t\t\t\t\t\t\t<label for=\"input-website\" class=\"text-bold\">";
        // line 72
        echo (isset($context["entry_website"]) ? $context["entry_website"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"input-field form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"tax\" value=\"";
        // line 75
        echo (isset($context["tax"]) ? $context["tax"] : null);
        echo "\" id=\"input-tax\" class=\"validate\">
\t\t\t\t\t\t\t\t\t<label for=\"input-tax\" class=\"text-bold\">";
        // line 76
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t\t<div class=\"section form-group\">
\t\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
        // line 81
        echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"payment-cheque-input\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        if (((isset($context["payment"]) ? $context["payment"] : null) == "cheque")) {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" id=\"payment-cheque-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"cheque\" id=\"payment-cheque-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        echo (isset($context["text_cheque"]) ? $context["text_cheque"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"payment-paypal-input\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 95
        if (((isset($context["payment"]) ? $context["payment"] : null) == "paypal")) {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" id=\"payment-paypal-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"paypal\" id=\"payment-paypal-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        echo (isset($context["text_paypal"]) ? $context["text_paypal"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"payment-bank-input\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 105
        if (((isset($context["payment"]) ? $context["payment"] : null) == "bank")) {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" id=\"payment-bank-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment\" value=\"bank\" id=\"payment-bank-input\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        echo (isset($context["text_bank"]) ? $context["text_bank"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"input-field payment form-group\" id=\"payment-cheque\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cheque\" value=\"";
        // line 116
        echo (isset($context["cheque"]) ? $context["cheque"] : null);
        echo "\" id=\"input-cheque\" class=\"validate\">
\t\t\t\t\t\t\t\t\t<label for=\"input-cheque\" class=\"text-bold required\">";
        // line 117
        echo (isset($context["entry_cheque"]) ? $context["entry_cheque"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"input-field payment\" id=\"payment-paypal\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"paypal\" value=\"";
        // line 120
        echo (isset($context["paypal"]) ? $context["paypal"] : null);
        echo "\" id=\"input-paypal\" class=\"validate\">
\t\t\t\t\t\t\t\t\t<label for=\"input-paypal\" class=\"text-bold required\">";
        // line 121
        echo (isset($context["entry_paypal"]) ? $context["entry_paypal"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"payment form-group\" id=\"payment-bank\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bank_name\" value=\"";
        // line 125
        echo (isset($context["bank_name"]) ? $context["bank_name"] : null);
        echo "\" id=\"input-bank-name\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-bank-name\" class=\"text-bold\">";
        // line 126
        echo (isset($context["entry_bank_name"]) ? $context["entry_bank_name"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 129
        echo (isset($context["bank_branch_number"]) ? $context["bank_branch_number"] : null);
        echo "\" id=\"input-bank-branch-number\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-bank-branch-number\" class=\"text-bold\">";
        // line 130
        echo (isset($context["entry_bank_branch_number"]) ? $context["entry_bank_branch_number"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 133
        echo (isset($context["bank_swift_code"]) ? $context["bank_swift_code"] : null);
        echo "\" id=\"input-bank-swift-code\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-bank-swift-code\" class=\"text-bold\">";
        // line 134
        echo (isset($context["entry_bank_swift_code"]) ? $context["entry_bank_swift_code"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 137
        echo (isset($context["bank_account_name"]) ? $context["bank_account_name"] : null);
        echo "\" id=\"input-bank-account-name\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-bank-account-name\" class=\"required text-bold\">";
        // line 138
        echo (isset($context["entry_bank_account_name"]) ? $context["entry_bank_account_name"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 141
        echo (isset($context["bank_account_number"]) ? $context["bank_account_number"] : null);
        echo "\" id=\"input-bank-account-number\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-bank-account-number\" class=\"required text-bold\">";
        // line 142
        echo (isset($context["entry_bank_account_number"]) ? $context["entry_bank_account_number"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 148
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "affiliate")) {
                // line 149
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 150
                    echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                    // line 152
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 153
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                    // line 154
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 156
                            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 158
                            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 162
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
                // line 166
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 167
                    echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold ";
                    // line 168
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                    // line 170
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                        // line 172
                        if (($this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 173
                            echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                            // line 174
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"with-gap\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 175
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 178
                            echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                            // line 179
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 180
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 183
                        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 188
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 189
                    echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 190
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                    // line 192
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 193
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                        // line 194
                        if (($this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 195
                            echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                            // line 196
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"filled-in\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 197
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 200
                            echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                            // line 201
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"filled-in\">
\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 202
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 205
                        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 207
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 210
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 211
                    echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 213
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"validate\">
\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 214
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
                // line 218
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 219
                    echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                    // line 221
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"materialize-textarea\">";
                    if ($this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "</textarea>
\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 222
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
                // line 226
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 227
                    echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 228
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t<div id=\"button-custom-field";
                    // line 230
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\"><i class=\"material-icons left\">cloud_upload</i><span>";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</span></div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 231
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo " ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\"><input value=\"";
                    // line 232
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"file-path validate\" type=\"text\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 236
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 237
                    echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 238
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo "\" for=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 239
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                // line 242
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 243
                    echo "\t\t\t\t\t\t<div class=\"section form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 244
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo "\" for=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 245
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["affiliate_custom_field"]) ? $context["affiliate_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                // line 248
                echo "\t\t\t\t\t\t";
            }
            // line 249
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "\t\t\t\t\t\t";
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 251
            echo "\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t<label for=\"agreement-check\">
\t\t\t\t\t\t\t\t";
            // line 253
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 254
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" id=\"agreement-check\" class=\"filled-in\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 256
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"agreement-check\" class=\"filled-in\">
\t\t\t\t\t\t\t\t";
            }
            // line 258
            echo "\t\t\t\t\t\t\t\t<span>";
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 262
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"section flex-reverse\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn waves-effect waves-light red\">";
        // line 264
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
        // line 267
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 269
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 275
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 276
        echo "\t";
        if ((isset($context["error_cheque"]) ? $context["error_cheque"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_cheque"]) ? $context["error_cheque"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 277
        echo "\t";
        if ((isset($context["error_paypal"]) ? $context["error_paypal"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_paypal"]) ? $context["error_paypal"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 278
        echo "\t";
        if ((isset($context["error_bank_account_name"]) ? $context["error_bank_account_name"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_bank_account_name"]) ? $context["error_bank_account_name"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 279
        echo "\t";
        if ((isset($context["error_bank_account_number"]) ? $context["error_bank_account_number"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_bank_account_number"]) ? $context["error_bank_account_number"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 280
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 281
            echo "\t\t";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "affiliate")) {
                // line 282
                echo "\t\t\t";
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 283
                    echo "\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "', classes: 'toast-warning'});
\t\t\t";
                }
                // line 285
                echo "\t\t";
            }
            // line 286
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "
\t\$('div[id^=\\'button-custom-field\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\"></form><div id=\"modal-loading\" class=\"modal\"><div class=\"modal-content\"><div class=\"row valign-wrapper\"><div class=\"col s4 m3 center\"><div class=\"preloader-wrapper active\"><div class=\"spinner-layer spinner-blue\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-red\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-yellow\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-green\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div></div></div><div class=\"col s10 m9\"><p id=\"loading-text\" class=\"flow-text text-bold\">";
        // line 293
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
        // line 342
        echo (isset($context["first_day"]) ? $context["first_day"] : null);
        echo ",
\t\ti18n: {
\t\t\tclear: '";
        // line 344
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\ttoday: '";
        // line 345
        echo (isset($context["button_date_today"]) ? $context["button_date_today"] : null);
        echo "',
\t\t\tdone: '";
        // line 346
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tmonths: ['";
        // line 347
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
        // line 348
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
        // line 349
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
        // line 350
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
        // line 351
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
        // line 359
        echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
        echo "',
\t\t\tcancel: '";
        // line 360
        echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
        echo "',
\t\t\tdone: '";
        // line 361
        echo (isset($context["button_time_done"]) ? $context["button_time_done"] : null);
        echo "',
\t\t\ttwelvehour: ";
        // line 362
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
        // line 374
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/account/affiliate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1086 => 374,  1071 => 362,  1067 => 361,  1063 => 360,  1059 => 359,  1036 => 351,  1020 => 350,  1004 => 349,  978 => 348,  952 => 347,  948 => 346,  944 => 345,  940 => 344,  935 => 342,  883 => 293,  875 => 287,  869 => 286,  866 => 285,  860 => 283,  857 => 282,  854 => 281,  849 => 280,  842 => 279,  835 => 278,  828 => 277,  821 => 276,  815 => 275,  806 => 269,  801 => 267,  795 => 264,  791 => 262,  783 => 258,  779 => 256,  775 => 254,  773 => 253,  769 => 251,  766 => 250,  760 => 249,  757 => 248,  739 => 245,  729 => 244,  724 => 243,  721 => 242,  703 => 239,  693 => 238,  688 => 237,  685 => 236,  678 => 232,  667 => 231,  661 => 230,  652 => 228,  647 => 227,  644 => 226,  631 => 222,  615 => 221,  609 => 219,  606 => 218,  593 => 214,  577 => 213,  571 => 211,  568 => 210,  563 => 207,  556 => 205,  550 => 202,  542 => 201,  539 => 200,  533 => 197,  525 => 196,  522 => 195,  520 => 194,  517 => 193,  513 => 192,  504 => 190,  499 => 189,  496 => 188,  491 => 185,  484 => 183,  478 => 180,  470 => 179,  467 => 178,  461 => 175,  453 => 174,  450 => 173,  448 => 172,  445 => 171,  441 => 170,  432 => 168,  427 => 167,  424 => 166,  411 => 162,  408 => 161,  402 => 160,  394 => 158,  386 => 156,  383 => 155,  379 => 154,  375 => 153,  367 => 152,  361 => 150,  358 => 149,  355 => 148,  351 => 147,  343 => 142,  339 => 141,  333 => 138,  329 => 137,  323 => 134,  319 => 133,  313 => 130,  309 => 129,  303 => 126,  299 => 125,  292 => 121,  288 => 120,  282 => 117,  278 => 116,  268 => 110,  264 => 108,  260 => 106,  258 => 105,  249 => 100,  245 => 98,  241 => 96,  239 => 95,  230 => 90,  226 => 88,  222 => 86,  220 => 85,  213 => 81,  205 => 76,  201 => 75,  195 => 72,  191 => 71,  185 => 68,  181 => 67,  176 => 65,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/* 					<div class="card-panel">*/
/* 						<div class="row">*/
/* 							<div id="address" class="col s12">*/
/* 								<h2>{{ text_my_affiliate }}</h2>*/
/* 								<div class="input-field form-group">*/
/* 									<input type="text" name="company" value="{{ company }}" id="input-company" class="validate">*/
/* 									<label for="input-company" class="text-bold">{{ entry_company }}</label>*/
/* 								</div>*/
/* 								<div class="input-field form-group">*/
/* 									<input type="text" name="website" value="{{ website }}" id="input-website" class="validate">*/
/* 									<label for="input-website" class="text-bold">{{ entry_website }}</label>*/
/* 								</div>*/
/* 								<div class="input-field form-group">*/
/* 									<input type="text" name="tax" value="{{ tax }}" id="input-tax" class="validate">*/
/* 									<label for="input-tax" class="text-bold">{{ entry_tax }}</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col s12">*/
/* 								<div class="section form-group">*/
/* 									<span class="text-bold">{{ text_payment }}</span>*/
/* 									<ul>*/
/* 										<li>*/
/* 											<label for="payment-cheque-input">*/
/* 												{% if payment == 'cheque' %}*/
/* 												<input type="radio" name="payment" value="cheque" checked="checked" id="payment-cheque-input" class="with-gap">*/
/* 												{% else %}*/
/* 												<input type="radio" name="payment" value="cheque" id="payment-cheque-input" class="with-gap">*/
/* 												{% endif %}*/
/* 												<span>{{ text_cheque }}</span>*/
/* 											</label>*/
/* 										</li>*/
/* 										<li>*/
/* 											<label for="payment-paypal-input">*/
/* 												{% if payment == 'paypal' %}*/
/* 												<input type="radio" name="payment" value="paypal" checked="checked" id="payment-paypal-input" class="with-gap">*/
/* 												{% else %}*/
/* 												<input type="radio" name="payment" value="paypal" id="payment-paypal-input" class="with-gap">*/
/* 												{% endif %}*/
/* 												<span>{{ text_paypal }}</span>*/
/* 											</label>*/
/* 										</li>*/
/* 										<li>*/
/* 											<label for="payment-bank-input">*/
/* 												{% if payment == 'bank' %}*/
/* 												<input type="radio" name="payment" value="bank" checked="checked" id="payment-bank-input" class="with-gap">*/
/* 												{% else %}*/
/* 												<input type="radio" name="payment" value="bank" id="payment-bank-input" class="with-gap">*/
/* 												{% endif %}*/
/* 												<span>{{ text_bank }}</span>*/
/* 											</label>*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 								<div class="input-field payment form-group" id="payment-cheque">*/
/* 									<input type="text" name="cheque" value="{{ cheque }}" id="input-cheque" class="validate">*/
/* 									<label for="input-cheque" class="text-bold required">{{ entry_cheque }}</label>*/
/* 								</div>*/
/* 								<div class="input-field payment" id="payment-paypal">*/
/* 									<input type="text" name="paypal" value="{{ paypal }}" id="input-paypal" class="validate">*/
/* 									<label for="input-paypal" class="text-bold required">{{ entry_paypal }}</label>*/
/* 								</div>*/
/* 								<div class="payment form-group" id="payment-bank">*/
/* 									<div class="input-field">*/
/* 										<input type="text" name="bank_name" value="{{ bank_name }}" id="input-bank-name" class="validate">*/
/* 										<label for="input-bank-name" class="text-bold">{{ entry_bank_name }}</label>*/
/* 									</div>*/
/* 									<div class="input-field">*/
/* 										<input type="text" name="bank_branch_number" value="{{ bank_branch_number }}" id="input-bank-branch-number" class="validate">*/
/* 										<label for="input-bank-branch-number" class="text-bold">{{ entry_bank_branch_number }}</label>*/
/* 									</div>*/
/* 									<div class="input-field">*/
/* 										<input type="text" name="bank_swift_code" value="{{ bank_swift_code }}" id="input-bank-swift-code" class="validate">*/
/* 										<label for="input-bank-swift-code" class="text-bold">{{ entry_bank_swift_code }}</label>*/
/* 									</div>*/
/* 									<div class="input-field">*/
/* 										<input type="text" name="bank_account_name" value="{{ bank_account_name }}" id="input-bank-account-name" class="validate">*/
/* 										<label for="input-bank-account-name" class="required text-bold">{{ entry_bank_account_name }}</label>*/
/* 									</div>*/
/* 									<div class="input-field">*/
/* 										<input type="text" name="bank_account_number" value="{{ bank_account_number }}" id="input-bank-account-number" class="validate">*/
/* 										<label for="input-bank-account-number" class="required text-bold">{{ entry_bank_account_number }}</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% for custom_field in custom_fields %}*/
/* 						{% if custom_field.location == 'affiliate' %}*/
/* 						{% if custom_field.type == 'select' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<div class="input-field">*/
/* 								<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}">*/
/* 									<option value="">{{ text_select }}</option>*/
/* 									{% for custom_field_value in custom_field.custom_field_value %}*/
/* 									{% if affiliate_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == affiliate_custom_field[custom_field.custom_field_id] %}*/
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
/* 							<label class="text-bold {% if custom_field.required %} required{% endif %}">{{ custom_field.name }}</label>*/
/* 							<ul>*/
/* 								{% for custom_field_value in custom_field.custom_field_value %}*/
/* 								<li>*/
/* 									{% if affiliate_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == affiliate_custom_field[custom_field.custom_field_id] %}*/
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
/* 									{% if affiliate_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in affiliate_custom_field[custom_field.custom_field_id] %}*/
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
/* 							{% endfor %}*/
/* 							</ul>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'text' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<div class="input-field">*/
/* 								<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="validate">*/
/* 								<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'textarea' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<div class="input-field">*/
/* 								<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="materialize-textarea">{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/* 								<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'file' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}">{{ custom_field.name }}</label>*/
/* 							<div class="file-field input-field">*/
/* 								<div id="button-custom-field{{ custom_field.custom_field_id }}" class="btn waves-effect waves-light blue-grey lighten-1"><i class="material-icons left">cloud_upload</i><span>{{ button_upload }}</span></div>*/
/* 								<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }} {% endif %}">*/
/* 								<div class="file-path-wrapper"><input value="{{ custom_field.name }}" class="file-path validate" type="text"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'date' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="datepicker">*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% if custom_field.type == 'time' %}*/
/* 						<div class="section form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/* 							<label class="text-bold{% if custom_field.required %} required{% endif %}" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 							<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="timepicker">*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						{% endif %}*/
/* 						{% endfor %}*/
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
/* 	{% if error_warning %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_warning }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_cheque %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_cheque }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_paypal %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_paypal }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_bank_account_name %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_bank_account_name }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% if error_bank_account_number %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_bank_account_number }}', classes: 'toast-warning'});{% endif %}*/
/* 	{% for custom_field in custom_fields %}*/
/* 		{% if custom_field.location == 'affiliate' %}*/
/* 			{% if error_custom_field[custom_field.custom_field_id] %}*/
/* 			M.toast({html: '<i class="material-icons left">warning</i>{{ error_custom_field[custom_field.custom_field_id] }}', classes: 'toast-warning'});*/
/* 			{% endif %}*/
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
