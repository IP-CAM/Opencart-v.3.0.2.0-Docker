<?php

/* materialize/template/extension/module/category.twig */
class __TwigTemplate_3d84e5081152e517c080ad31390da15abfcb888d18170c3e6068e7dae7cf3847 extends Twig_Template
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
        echo "<ul class=\"collapsible collapsible-accordion collection with-header z-depth-1\" data-collapsible=\"accordion\">
\t<li class=\"collection-header blue-grey white-text\"><h5 class=\"text-bold\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h5></li>
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "\t";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 5
                echo "\t<li class=\"active\">
\t\t<a href=\"";
                // line 6
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"collapsible-header waves-effect blue-grey-text text-darken-4 text-bold active\" onclick=\"return false;\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
\t\t";
                // line 7
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 8
                    echo "\t\t<div class=\"collapsible-body no-padding\">
\t\t\t<div class=\"collection\">
\t\t\t";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 11
                        echo "\t\t\t\t";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 12
                            echo "\t\t\t\t\t<a class=\"collection-item waves-effect child truncate blue-grey-text text-darken-4 blue-grey lighten-4\" href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
\t\t\t\t";
                        } else {
                            // line 14
                            echo "\t\t\t\t\t<a class=\"collection-item waves-effect child truncate blue-grey-text text-darken-4\" href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
\t\t\t\t";
                        }
                        // line 16
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "\t\t\t</div>
\t\t</div>
\t";
                }
                // line 20
                echo "\t</li>
\t";
            } else {
                // line 22
                echo "\t<li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"collapsible-header waves-effect truncate blue-grey-text text-darken-4 text-bold\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
\t";
            }
            // line 24
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  94 => 24,  86 => 22,  82 => 20,  77 => 17,  71 => 16,  63 => 14,  55 => 12,  52 => 11,  48 => 10,  44 => 8,  42 => 7,  36 => 6,  33 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="collapsible collapsible-accordion collection with-header z-depth-1" data-collapsible="accordion">*/
/* 	<li class="collection-header blue-grey white-text"><h5 class="text-bold">{{ heading_title }}</h5></li>*/
/* 	{% for category in categories %}*/
/* 	{% if category.category_id == category_id %}*/
/* 	<li class="active">*/
/* 		<a href="{{ category.href }}" class="collapsible-header waves-effect blue-grey-text text-darken-4 text-bold active" onclick="return false;">{{ category.name }}</a>*/
/* 		{% if category.children %}*/
/* 		<div class="collapsible-body no-padding">*/
/* 			<div class="collection">*/
/* 			{% for child in category.children %}*/
/* 				{% if child.category_id == child_id %}*/
/* 					<a class="collection-item waves-effect child truncate blue-grey-text text-darken-4 blue-grey lighten-4" href="{{ child.href }}">{{ child.name }}</a>*/
/* 				{% else %}*/
/* 					<a class="collection-item waves-effect child truncate blue-grey-text text-darken-4" href="{{ child.href }}">{{ child.name }}</a>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	</li>*/
/* 	{% else %}*/
/* 	<li><a href="{{ category.href }}" class="collapsible-header waves-effect truncate blue-grey-text text-darken-4 text-bold">{{ category.name }}</a></li>*/
/* 	{% endif %}*/
/* 	{% endfor %}*/
/* </ul>*/
