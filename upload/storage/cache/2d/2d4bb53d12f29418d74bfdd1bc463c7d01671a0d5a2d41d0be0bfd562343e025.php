<?php

/* extension/materialize/appeal/footer.twig */
class __TwigTemplate_6266bb32a6de322b0f5e1bcd3b76d5d44de618db9fba22ae380e5bd1c643577c extends Twig_Template
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
        echo "<i class=\"fa fa-opencart\"></i>&nbsp;
<a href=\"//goo.gl/bjyFAW\" target=\"_blank\" rel=\"noopener\" class=\"dotted materialize-appeal__popover\" title=\"<b>Materialize Template</b>\" data-content=\"";
        // line 2
        echo (isset($context["appeal_marketplace"]) ? $context["appeal_marketplace"] : null);
        echo "\"><strong>Materialize Template</strong></a>&nbsp;|&nbsp;
<i class=\"fa fa-github\"></i>&nbsp;
<a href=\"//goo.gl/VAM4ww\" target=\"_blank\" rel=\"noopener\" class=\"dotted materialize-appeal__popover\" title=\"<b>GitHub</b>\" data-content=\"";
        // line 4
        echo (isset($context["appeal_github"]) ? $context["appeal_github"] : null);
        echo "\">GitHub</a>&nbsp;|&nbsp;
<i class=\"fa fa-twitter\"></i>&nbsp;
<a href=\"//goo.gl/yG1AGS\" target=\"_blank\" rel=\"noopener\" class=\"dotted materialize-appeal__popover\" title=\"<b>Twitter</b>\" data-content=\"";
        // line 6
        echo (isset($context["appeal_twitter"]) ? $context["appeal_twitter"] : null);
        echo "\">Twitter</a>&nbsp;|&nbsp;
<i class=\"fa fa-paypal\"></i>&nbsp;
<a href=\"//goo.gl/Ry4CeM\" target=\"_blank\" rel=\"noopener\" class=\"dotted materialize-appeal__popover\" title=\"<b>PayPal</b>\" data-content=\"";
        // line 8
        echo (isset($context["appeal_paypal"]) ? $context["appeal_paypal"] : null);
        echo "\">PayPal</a>&nbsp;|&nbsp;
<i class=\"fa fa-credit-card\"></i>&nbsp;
<a href=\"//goo.gl/1C4gKu\" target=\"_blank\" rel=\"noopener\" class=\"dotted materialize-appeal__popover\" title=\"<b>Yandex.Money</b>\" data-content=\"";
        // line 10
        echo (isset($context["appeal_yandex_money"]) ? $context["appeal_yandex_money"] : null);
        echo "\">Yandex.Money</a>
<script type=\"text/javascript\">
\$('.materialize-appeal__popover').popover({
\tplacement: 'right',
\ttrigger: 'hover',
\thtml: true
});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/materialize/appeal/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  37 => 8,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <i class="fa fa-opencart"></i>&nbsp;*/
/* <a href="//goo.gl/bjyFAW" target="_blank" rel="noopener" class="dotted materialize-appeal__popover" title="<b>Materialize Template</b>" data-content="{{ appeal_marketplace }}"><strong>Materialize Template</strong></a>&nbsp;|&nbsp;*/
/* <i class="fa fa-github"></i>&nbsp;*/
/* <a href="//goo.gl/VAM4ww" target="_blank" rel="noopener" class="dotted materialize-appeal__popover" title="<b>GitHub</b>" data-content="{{ appeal_github }}">GitHub</a>&nbsp;|&nbsp;*/
/* <i class="fa fa-twitter"></i>&nbsp;*/
/* <a href="//goo.gl/yG1AGS" target="_blank" rel="noopener" class="dotted materialize-appeal__popover" title="<b>Twitter</b>" data-content="{{ appeal_twitter }}">Twitter</a>&nbsp;|&nbsp;*/
/* <i class="fa fa-paypal"></i>&nbsp;*/
/* <a href="//goo.gl/Ry4CeM" target="_blank" rel="noopener" class="dotted materialize-appeal__popover" title="<b>PayPal</b>" data-content="{{ appeal_paypal }}">PayPal</a>&nbsp;|&nbsp;*/
/* <i class="fa fa-credit-card"></i>&nbsp;*/
/* <a href="//goo.gl/1C4gKu" target="_blank" rel="noopener" class="dotted materialize-appeal__popover" title="<b>Yandex.Money</b>" data-content="{{ appeal_yandex_money }}">Yandex.Money</a>*/
/* <script type="text/javascript">*/
/* $('.materialize-appeal__popover').popover({*/
/* 	placement: 'right',*/
/* 	trigger: 'hover',*/
/* 	html: true*/
/* });*/
/* </script>*/
