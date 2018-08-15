<?php

/* materialize/template/product/review.twig */
class __TwigTemplate_f9235d6ab7b00cd14a3860bbc875016bc80d08c647bb549b697a8394ed9a7cc4 extends Twig_Template
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
        ob_start();
        // line 2
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 4
                echo "<ul class=\"collection reviews\">
\t<li class=\"collection-item avatar\">
\t\t<span class=\"secondary-content yellow-text text-accent-4\">
\t\t\t";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 8
                    echo "\t\t\t";
                    if (($this->getAttribute($context["review"], "rating", array()) < $context["i"])) {
                        // line 9
                        echo "\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t";
                    } else {
                        // line 11
                        echo "\t\t\t<i class=\"material-icons\">star</i>
\t\t\t";
                    }
                    // line 13
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t</span>
\t\t<img class=\"circle lazyload\" src=\"";
                // line 15
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"catalog/view/theme/materialize/image/comment.png\" alt=\"";
                echo $this->getAttribute($context["review"], "author", array());
                echo "\">
\t\t<span class=\"title text-bold\">";
                // line 16
                echo $this->getAttribute($context["review"], "author", array());
                echo "</span>
\t\t<p>
\t\t\t<span class=\"grey-text text-darken\">";
                // line 18
                echo $this->getAttribute($context["review"], "date_added", array());
                echo "</span><br>
\t\t\t";
                // line 19
                echo $this->getAttribute($context["review"], "text", array());
                echo "
\t\t</p>
\t</li>
</ul>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
";
        } else {
            // line 26
            echo "<div class=\"center\">
\t<p class=\"flow-text text-bold\">";
            // line 27
            echo (isset($context["text_no_reviews"]) ? $context["text_no_reviews"] : null);
            echo "</p>
\t<img class=\"responsive-img lazyload\" src=\"";
            // line 28
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"catalog/view/theme/materialize/image/search-empty.png\" alt=\"\">
</div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "materialize/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  90 => 27,  87 => 26,  82 => 24,  71 => 19,  67 => 18,  62 => 16,  56 => 15,  53 => 14,  47 => 13,  43 => 11,  39 => 9,  36 => 8,  32 => 7,  27 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {% if reviews %}*/
/* {% for review in reviews %}*/
/* <ul class="collection reviews">*/
/* 	<li class="collection-item avatar">*/
/* 		<span class="secondary-content yellow-text text-accent-4">*/
/* 			{% for i in 1..5 %}*/
/* 			{% if review.rating < i %}*/
/* 			<i class="material-icons">star_border</i>*/
/* 			{% else %}*/
/* 			<i class="material-icons">star</i>*/
/* 			{% endif %}*/
/* 			{% endfor %}*/
/* 		</span>*/
/* 		<img class="circle lazyload" src="{{ img_loader }}" data-src="catalog/view/theme/materialize/image/comment.png" alt="{{ review.author }}">*/
/* 		<span class="title text-bold">{{ review.author }}</span>*/
/* 		<p>*/
/* 			<span class="grey-text text-darken">{{ review.date_added }}</span><br>*/
/* 			{{ review.text }}*/
/* 		</p>*/
/* 	</li>*/
/* </ul>*/
/* {% endfor %}*/
/* {{ pagination }}*/
/* {% else %}*/
/* <div class="center">*/
/* 	<p class="flow-text text-bold">{{ text_no_reviews }}</p>*/
/* 	<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="catalog/view/theme/materialize/image/search-empty.png" alt="">*/
/* </div>*/
/* {% endif %}*/
/* {% endspaceless %}*/
