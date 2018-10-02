<?php

/* materialize/template/checkout/checkout.twig */
class __TwigTemplate_feca0345dd3f0f2c98b698a0f5c4cc40aa73a8f3f0e06eacf4fc270d5cd41c89 extends Twig_Template
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
\t\t\t\t<ul id=\"accordion\" class=\"collapsible popout\" data-collapsible=\"accordion\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<div class=\"collapsible-header grey lighten-4 text-bold\">";
        // line 63
        echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
        echo "</div>
\t\t\t\t\t\t<div id=\"collapse-checkout-option\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 66
        if (( !(isset($context["logged"]) ? $context["logged"] : null) && ((isset($context["account"]) ? $context["account"] : null) != "guest"))) {
            // line 67
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold active\">";
            // line 68
            echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
            echo "</div>
\t\t\t\t\t\t<div id=\"collapse-payment-address\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold\">";
            // line 73
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "</div>
\t\t\t\t\t\t<div id=\"collapse-payment-address\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t";
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 78
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold\">";
            // line 79
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "</div>
\t\t\t\t\t\t<div id=\"collapse-shipping-address\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold\">";
            // line 83
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</div>
\t\t\t\t\t\t<div id=\"collapse-shipping-method\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold\">";
        // line 88
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "</div>
\t\t\t\t\t\t<div id=\"collapse-payment-method\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold\">";
        // line 92
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "</div>
\t\t\t\t\t\t<div id=\"collapse-checkout-confirm\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t";
        // line 96
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 98
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$(document).on('change', 'input[name=\\'account\\']', function() {
\t\tif (\$('#collapse-payment-address').parent().find('div:first')) {
\t\t\tif (this.value == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').html('";
        // line 107
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').html('";
        // line 109
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t\t}
\t\t} else {
\t\t\tif (this.value == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').html('";
        // line 113
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').html('";
        // line 115
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t\t}
\t\t}
\t});

\t";
        // line 120
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 121
            echo "\t\$(document).ready(function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/login',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#collapse-checkout-option').html(html);
\t\t\t\t\$('#collapse-checkout-option').parent().find('.collapsible-header').html('";
            // line 127
            echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
            echo "');
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t";
        } else {
            // line 135
            echo "\t\$(document).ready(function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#collapse-checkout-option').parent().removeClass('active');
\t\t\t\t\$('#collapse-checkout-option').parent().find('.collapsible-header').removeClass('collapsible-header').addClass('collapsible-header-disable');
\t\t\t\t\$('#collapse-checkout-option').parent().find('.collapsible-body').css('display','');
\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 143
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "');
\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\$('#collapse-payment-address').parent().addClass('active');
\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-payment-address').parent().offset().top-100},1150);
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t";
        }
        // line 155
        echo "
\t// Checkout
\t\$(document).delegate('#button-account', 'click', function() {
\t\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#collapse-checkout-option').parent().removeClass('active');
\t\t\t\t\$('#collapse-checkout-option').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\$('#collapse-checkout-option').parent().find('.collapsible-body').css('display','');
\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\$('#collapse-payment-address').parent().addClass('active');
\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\tif (\$('input[name=\\'account\\']:checked').val() == 'register') {
\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 169
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
\t\t\t\t} else {
\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 171
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t\t\t}
\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-payment-address').parent().offset().top-100},1150);
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Login
\t\$(document).delegate('#button-login', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/login/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-checkout-option :input'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Register
\t\$(document).delegate('#button-register', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/register/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}

\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t";
        // line 222
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 223
            echo "\t\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');
\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('div:first').html('";
            // line 234
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').html(html);
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 244
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().addClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('";
            // line 247
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
            // line 248
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-method').parent().offset().top-100},1150);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 264
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().addClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header-disable').html('";
            // line 267
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('";
            // line 268
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
            // line 269
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-address').parent().offset().top-100},1150);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t";
        } else {
            // line 278
            echo "\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-payment-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 286
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
            // line 289
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-payment-method').parent().offset().top-50},1150);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t";
        }
        // line 297
        echo "\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').html('";
        // line 302
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Payment Address
\t\$(document).delegate('#button-payment-address', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/payment_address/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\tif (\$(element).parent()) {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t";
        // line 340
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 341
            echo "\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 349
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-address').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header-disable').html('";
            // line 353
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('";
            // line 354
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
            // line 355
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t}).done(function() {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t";
        } else {
            // line 373
            echo "\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-payment-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 381
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-payment-method').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
            // line 385
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t}).done(function() {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t";
        }
        // line 403
        echo "\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Shipping Address
\t\$(document).delegate('#button-shipping-address', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/shipping_address/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\tif (\$(element).parent()) {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 442
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-method').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('";
        // line 446
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
        // line 447
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t}).done(function() {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Guest
\t\$(document).delegate('#button-guest', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/guest/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'][i], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\tif (\$(element).parent()) {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t";
        // line 505
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 506
            echo "\t\t\t\t\tvar shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');
\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/guest_shipping',
\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-header-disable').html('";
            // line 517
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').html(html);
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 527
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().addClass('active');
\t\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-method').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('div:first').html('";
            // line 531
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('div:first').html('";
            // line 532
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/guest_shipping',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 547
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().addClass('active');
\t\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-address').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('div:first').html('";
            // line 551
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('div:first').html('";
            // line 552
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('div:first').html('";
            // line 553
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t";
        } else {
            // line 561
            echo "\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-payment-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 569
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-payment-method').parent().offset()},1150);
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('div:first').html('";
            // line 573
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t";
        }
        // line 580
        echo "\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Guest Shipping
\t\$(document).delegate('#button-guest-shipping', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/guest_shipping/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\tif (\$(element).parent()) {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 619
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-method').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('div:first').html('";
        // line 623
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('div:first').html('";
        // line 624
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t\$(document).delegate('#button-shipping-method', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/shipping_method/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-payment-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 660
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-method').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('div:first').html('";
        // line 664
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t\$(document).delegate('#button-payment-method', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/payment_method/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/confirm',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').html(html);
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 700
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().addClass('active');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 718
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "materialize/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1024 => 718,  1003 => 700,  964 => 664,  957 => 660,  918 => 624,  914 => 623,  907 => 619,  866 => 580,  856 => 573,  849 => 569,  839 => 561,  828 => 553,  824 => 552,  820 => 551,  813 => 547,  795 => 532,  791 => 531,  784 => 527,  771 => 517,  758 => 506,  756 => 505,  695 => 447,  691 => 446,  684 => 442,  643 => 403,  622 => 385,  615 => 381,  605 => 373,  584 => 355,  580 => 354,  576 => 353,  569 => 349,  559 => 341,  557 => 340,  516 => 302,  509 => 297,  498 => 289,  492 => 286,  482 => 278,  470 => 269,  466 => 268,  462 => 267,  456 => 264,  437 => 248,  433 => 247,  427 => 244,  414 => 234,  401 => 223,  399 => 222,  345 => 171,  340 => 169,  324 => 155,  309 => 143,  299 => 135,  288 => 127,  280 => 121,  278 => 120,  270 => 115,  265 => 113,  258 => 109,  253 => 107,  241 => 98,  236 => 96,  229 => 92,  222 => 88,  219 => 87,  212 => 83,  205 => 79,  202 => 78,  199 => 77,  192 => 73,  189 => 72,  182 => 68,  179 => 67,  177 => 66,  171 => 63,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 				<ul id="accordion" class="collapsible popout" data-collapsible="accordion">*/
/* 					<li class="active">*/
/* 						<div class="collapsible-header grey lighten-4 text-bold">{{ text_checkout_option }}</div>*/
/* 						<div id="collapse-checkout-option" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					{% if not logged and account != 'guest' %}*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold active">{{ text_checkout_account }}</div>*/
/* 						<div id="collapse-payment-address" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					{% else %}*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold">{{ text_checkout_payment_address }}</div>*/
/* 						<div id="collapse-payment-address" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					{% endif %}*/
/* 					{% if shipping_required %}*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold">{{ text_checkout_shipping_address }}</div>*/
/* 						<div id="collapse-shipping-address" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold">{{ text_checkout_shipping_method }}</div>*/
/* 						<div id="collapse-shipping-method" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					{% endif %}*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold">{{ text_checkout_payment_method }}</div>*/
/* 						<div id="collapse-payment-method" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold">{{ text_checkout_confirm }}</div>*/
/* 						<div id="collapse-checkout-confirm" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 				</ul>*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	$(document).on('change', 'input[name=\'account\']', function() {*/
/* 		if ($('#collapse-payment-address').parent().find('div:first')) {*/
/* 			if (this.value == 'register') {*/
/* 				$('#collapse-payment-address').parent().find('div:first').html('{{ text_checkout_account }}');*/
/* 			} else {*/
/* 				$('#collapse-payment-address').parent().find('div:first').html('{{ text_checkout_payment_address }}');*/
/* 			}*/
/* 		} else {*/
/* 			if (this.value == 'register') {*/
/* 				$('#collapse-payment-address').parent().find('div:first').html('{{ text_checkout_account }}');*/
/* 			} else {*/
/* 				$('#collapse-payment-address').parent().find('div:first').html('{{ text_checkout_payment_address }}');*/
/* 			}*/
/* 		}*/
/* 	});*/
/* */
/* 	{% if not logged %}*/
/* 	$(document).ready(function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/login',*/
/* 			dataType: 'html',*/
/* 			success: function(html) {*/
/* 				$('#collapse-checkout-option').html(html);*/
/* 				$('#collapse-checkout-option').parent().find('.collapsible-header').html('{{ text_checkout_option }}');*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* 	{% else %}*/
/* 	$(document).ready(function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/payment_address',*/
/* 			dataType: 'html',*/
/* 			success: function(html) {*/
/* 				$('#collapse-checkout-option').parent().removeClass('active');*/
/* 				$('#collapse-checkout-option').parent().find('.collapsible-header').removeClass('collapsible-header').addClass('collapsible-header-disable');*/
/* 				$('#collapse-checkout-option').parent().find('.collapsible-body').css('display','');*/
/* 				$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_address }}');*/
/* 				$('#collapse-payment-address').parent().find('.collapsible-body').css('display','block');*/
/* 				$('#collapse-payment-address').parent().addClass('active');*/
/* 				$('#collapse-payment-address').html(html);*/
/* 				$('html,body').animate({scrollTop:$('#collapse-payment-address').parent().offset().top-100},1150);*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* 	{% endif %}*/
/* */
/* 	// Checkout*/
/* 	$(document).delegate('#button-account', 'click', function() {*/
/* 			$.ajax({*/
/* 			url: 'index.php?route=checkout/' + $('input[name=\'account\']:checked').val(),*/
/* 			dataType: 'html',*/
/* 			success: function(html) {*/
/* 				$('#collapse-checkout-option').parent().removeClass('active');*/
/* 				$('#collapse-checkout-option').parent().find('.collapsible-header').removeClass('active');*/
/* 				$('#collapse-checkout-option').parent().find('.collapsible-body').css('display','');*/
/* 				$('#collapse-payment-address').parent().find('.collapsible-body').css('display','block');*/
/* 				$('#collapse-payment-address').parent().addClass('active');*/
/* 				$('#collapse-payment-address').html(html);*/
/* 				if ($('input[name=\'account\']:checked').val() == 'register') {*/
/* 					$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_account }}');*/
/* 				} else {*/
/* 					$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_address }}');*/
/* 				}*/
/* 				$('html,body').animate({scrollTop:$('#collapse-payment-address').parent().offset().top-100},1150);*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Login*/
/* 	$(document).delegate('#button-login', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/login/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-checkout-option :input'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Register*/
/* 	$(document).delegate('#button-register', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/register/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 					}*/
/* 				} else {*/
/* 					{% if shipping_required %}*/
/* 					var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* 					if (shipping_address) {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/shipping_method',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$.ajax({*/
/* 									url: 'index.php?route=checkout/shipping_address',*/
/* 									dataType: 'html',*/
/* 									success: function(html) {*/
/* 										$('#collapse-shipping-address').html(html);*/
/* 										$('#collapse-shipping-address').parent().find('div:first').html('{{ text_checkout_shipping_address }}');*/
/* 									},*/
/* 									error: function(xhr, ajaxOptions, thrownError) {*/
/* 										alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 									}*/
/* 								});*/
/* 								$('#collapse-payment-address').parent().removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('div:first').removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 								$('#collapse-shipping-method').html(html);*/
/* 								$('#collapse-shipping-method').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_method }}');*/
/* 								$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');*/
/* 								$('#collapse-shipping-method').parent().addClass('active');*/
/* 								$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_payment_method }}');*/
/* 								$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 								$('html,body').animate({scrollTop:$('#collapse-shipping-method').parent().offset().top-100},1150);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					} else {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/shipping_address',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-payment-address').parent().removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 								$('#collapse-shipping-address').html(html);*/
/* 								$('#collapse-shipping-address').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_address }}');*/
/* 								$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');*/
/* 								$('#collapse-shipping-address').parent().addClass('active');*/
/* 								$('#collapse-shipping-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_shipping_method }}');*/
/* 								$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_payment_method }}');*/
/* 								$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 								$('html,body').animate({scrollTop:$('#collapse-shipping-address').parent().offset().top-100},1150);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 					{% else %}*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-shipping-method').parent().removeClass('active');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-payment-method').html(html);*/
/* 							$('#collapse-payment-method').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-payment-method').parent().addClass('active');*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-payment-method').parent().offset().top-50},1150);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 					{% endif %}*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address').html(html);*/
/* 							$('#collapse-payment-address').parent().find('div:first').html('{{ text_checkout_payment_address }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Payment Address*/
/* 	$(document).delegate('#button-payment-address', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/payment_address/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 						if ($(element).parent()) {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						} else {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						}*/
/* 					}*/
/* 				} else {*/
/* 					{% if shipping_required %}*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/shipping_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address').parent().removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-shipping-address').html(html);*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_address }}');*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-shipping-address').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-shipping-address').parent().offset().top-50},1150);*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					}).done(function() {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/payment_address',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-payment-address').html(html);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					});*/
/* 					{% else %}*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address').parent().removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-payment-method').html(html);*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-payment-method').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-payment-method').parent().offset().top-50},1150);*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					}).done(function() {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/payment_address',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-payment-address').html(html);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					});*/
/* 					{% endif %}*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Shipping Address*/
/* 	$(document).delegate('#button-shipping-address', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/shipping_address/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* 						if ($(element).parent()) {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						} else {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						}*/
/* 					}*/
/* 				} else {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/shipping_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-shipping-address').parent().removeClass('active');*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-shipping-method').html(html);*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-shipping-method').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-shipping-method').parent().offset().top-50},1150);*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 							$.ajax({*/
/* 								url: 'index.php?route=checkout/shipping_address',*/
/* 								dataType: 'html',*/
/* 								success: function(html) {*/
/* 									$('#collapse-shipping-address').html(html);*/
/* 								},*/
/* 								error: function(xhr, ajaxOptions, thrownError) {*/
/* 									alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 								}*/
/* 							});*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					}).done(function() {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/payment_address',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-payment-address').html(html);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Guest*/
/* 	$(document).delegate('#button-guest', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/guest/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'][i], classes: 'toast-warning'});*/
/* 					}*/
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* 						if ($(element).parent()) {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						} else {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						}*/
/* 					}*/
/* 				} else {*/
/* 					{% if shipping_required %}*/
/* 					var shipping_address = $('#collapse-payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* 					if (shipping_address) {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/shipping_method',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$.ajax({*/
/* 									url: 'index.php?route=checkout/guest_shipping',*/
/* 									dataType: 'html',*/
/* 									success: function(html) {*/
/* 										$('#collapse-shipping-address').html(html);*/
/* 										$('#collapse-shipping-address').parent().find('.collapsible-header-disable').html('{{ text_checkout_shipping_address }}');*/
/* 									},*/
/* 									error: function(xhr, ajaxOptions, thrownError) {*/
/* 										alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 									}*/
/* 								});*/
/* 								$('#collapse-payment-address').parent().removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 								$('#collapse-shipping-method').html(html);*/
/* 								$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_method }}');*/
/* 								$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');*/
/* 								$('#collapse-shipping-method').parent().addClass('active');*/
/* 								$('html,body').animate({scrollTop:$('#collapse-shipping-method').parent().offset().top-50},1150);*/
/* 								$('#collapse-payment-method').parent().find('div:first').html('{{ text_checkout_payment_method }}');*/
/* 								$('#collapse-checkout-confirm').parent().find('div:first').html('{{ text_checkout_confirm }}');*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					} else {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/guest_shipping',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-shipping-address').html(html);*/
/* 								$('#collapse-payment-address').parent().removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 								$('#collapse-shipping-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_address }}');*/
/* 								$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');*/
/* 								$('#collapse-shipping-address').parent().addClass('active');*/
/* 								$('html,body').animate({scrollTop:$('#collapse-shipping-address').parent().offset().top-50},1150);*/
/* 								$('#collapse-shipping-method').parent().find('div:first').html('{{ text_checkout_shipping_method }}');*/
/* 								$('#collapse-payment-method').parent().find('div:first').html('{{ text_checkout_payment_method }}');*/
/* 								$('#collapse-checkout-confirm').parent().find('div:first').html('{{ text_checkout_confirm }}');*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 					{% else %}*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address').parent().removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-payment-method').html(html);*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-payment-method').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-payment-method').parent().offset()},1150);*/
/* 							$('#collapse-checkout-confirm').parent().find('div:first').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 					{% endif %}*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Guest Shipping*/
/* 	$(document).delegate('#button-guest-shipping', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/guest_shipping/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* 						if ($(element).parent()) {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						} else {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						}*/
/* 					}*/
/* 				} else {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/shipping_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-shipping-address').parent().removeClass('active');*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-shipping-method').html(html);*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-shipping-method').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-shipping-method').parent().offset().top-50},1150);*/
/* 							$('#collapse-payment-method').parent().find('div:first').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('div:first').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	$(document).delegate('#button-shipping-method', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/shipping_method/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-shipping-method input[type=\'radio\']:checked, #collapse-shipping-method textarea'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* 				} else {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-shipping-method').parent().removeClass('active');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-payment-method').html(html);*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-payment-method').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-shipping-method').parent().offset().top-50},1150);*/
/* 							$('#collapse-checkout-confirm').parent().find('div:first').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	$(document).delegate('#button-payment-method', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/payment_method/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-payment-method input[type=\'radio\']:checked, #collapse-payment-method input[type=\'checkbox\']:checked, #collapse-payment-method textarea'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* 				} else {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/confirm',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-method').parent().removeClass('active');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-checkout-confirm').html(html);*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_confirm }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-checkout-confirm').parent().addClass('active');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
/* */
