<?php

/* materialize/template/extension/payment/cod.twig */
class __TwigTemplate_369973a8bd223bc0daab444c522a6d686d9ef35a7c69a90ef82306994cfc3317 extends Twig_Template
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
        echo "<div class=\"flex-reverse\">
\t<button type=\"button\" value=\"";
        // line 2
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" id=\"button-confirm\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "</button>
</div>
<script>
\$('#button-confirm').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/payment/cod/confirm',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/payment/cod.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="flex-reverse">*/
/* 	<button type="button" value="{{ button_confirm }}" id="button-confirm" class="btn waves-effect waves-light red">{{ button_confirm }}</button>*/
/* </div>*/
/* <script>*/
/* $('#button-confirm').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/payment/cod/confirm',*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* </script>*/
