<?php

/* materialize/template/extension/module/banner.twig */
class __TwigTemplate_e539511abba1c001b7fc750615a6beca7925e9a364a71c658a50603a0228539d extends Twig_Template
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
        echo "<div id=\"banner";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"  class=\"slick-banner z-depth-2 center\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "\t<div>
\t\t";
            // line 4
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 5
                echo "\t\t<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\" class=\"waves-effect waves-light\"><img class=\"width-max lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\"></a>
\t\t";
            } else {
                // line 7
                echo "\t\t<img class=\"width-max waves-effect waves-light lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\">
\t\t";
            }
            // line 9
            echo "\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('.slick-banner').not('.slick-initialized').slick({
\t\tinfinite: true,
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tinfinite: true,
\t\tspeed: 300,
\t\tautoplay: true
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  55 => 9,  45 => 7,  33 => 5,  31 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div id="banner{{ module }}"  class="slick-banner z-depth-2 center">*/
/* 	{% for banner in banners %}*/
/* 	<div>*/
/* 		{% if banner.link %}*/
/* 		<a href="{{ banner.link }}" class="waves-effect waves-light"><img class="width-max lazyload" src="{{ img_loader }}" data-src="{{ banner.image }}" alt="{{ banner.title }}"></a>*/
/* 		{% else %}*/
/* 		<img class="width-max waves-effect waves-light lazyload" src="{{ img_loader }}" data-src="{{ banner.image }}" alt="{{ banner.title }}">*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	{% endfor %}*/
/* </div>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	$('.slick-banner').not('.slick-initialized').slick({*/
/* 		infinite: true,*/
/* 		slidesToShow: 1,*/
/* 		slidesToScroll: 1,*/
/* 		infinite: true,*/
/* 		speed: 300,*/
/* 		autoplay: true*/
/* 	});*/
/* });*/
/* </script>*/
