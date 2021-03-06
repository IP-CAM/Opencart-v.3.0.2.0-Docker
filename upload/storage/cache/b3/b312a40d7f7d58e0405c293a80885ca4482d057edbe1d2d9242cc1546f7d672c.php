<?php

/* materialize/template/product/manufacturer_info.twig */
class __TwigTemplate_b3fb33503a3e091b3f59b938a330264e5740a452fc8c7c72fe41db19f0511f75 extends Twig_Template
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
            list($context["main"], $context["goods"]) =             array("s12 l6", "s12");
        } elseif ((        // line 37
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 38
            echo "\t";
            list($context["main"], $context["goods"]) =             array("s12 l9", "s12 m6");
        } else {
            // line 40
            echo "\t";
            list($context["main"], $context["goods"]) =             array("s12", "s12 m6 l4");
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
\t\t\t";
        // line 59
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 60
            echo "\t\t\t<div class=\"col ";
            echo (isset($context["main"]) ? $context["main"] : null);
            echo " section href-underline\">
\t\t\t\t";
            // line 61
            echo (isset($context["content_top"]) ? $context["content_top"] : null);
            echo "
\t\t\t\t<ul class=\"collapsible\" data-collapsible=\"expandable\">
\t\t\t\t\t<li class=\"arrow-rotate\">
\t\t\t\t\t\t<div class=\"collapsible-header text-bold\">";
            // line 64
            echo (isset($context["text_sort_short"]) ? $context["text_sort_short"] : null);
            echo "</div>
\t\t\t\t\t\t<div class=\"collapsible-body white\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col s6 m6 input-field inline\">
\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected>";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-sort\">";
            // line 77
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col s6 m6 input-field inline\">
\t\t\t\t\t\t\t\t\t<select id=\"input-limit\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected>";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
            // line 89
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 97
                echo "\t\t\t\t\t<div class=\"col ";
                echo (isset($context["goods"]) ? $context["goods"] : null);
                echo "\">
\t\t\t\t\t\t<div class=\"card sticky-action large hoverable href-underline\">
\t\t\t\t\t\t\t";
                // line 99
                if ($this->getAttribute($context["product"], "labels", array())) {
                    // line 100
                    echo "\t\t\t\t\t\t\t<ul class=\"labels-wrap\">
\t\t\t\t\t\t\t\t";
                    // line 101
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t<li class=\"labels-wrap__item\"><span class=\"waves-effect badge ";
                        echo $this->getAttribute($context["label"], "color", array());
                        echo " ";
                        echo $this->getAttribute($context["label"], "color_text", array());
                        echo "\">";
                        echo $this->getAttribute($context["label"], "name", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 104
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                }
                // line 106
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "special", array())) {
                    echo "<span class=\"white-text badge red lighten-1 percent\">";
                    echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "percent_discount", array());
                    echo "%</span>";
                }
                // line 107
                echo "\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle close-icon activator\">more_vert</i>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 109
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img class=\"responsive-img lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content center-align\">
\t\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 112
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"grey-text text-darken-4\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action center-align grey lighten-5\">
\t\t\t\t\t\t\t\t";
                // line 115
                if ($this->getAttribute($context["product"], "add_cart", array())) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large waves-effect waves-light red add-cart\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large add-cart\" disabled=\"disabled\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"card-price\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"card-price old-price grey-text\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"card-price red-text text-darken-2\">";
                        // line 125
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 128
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 130
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 131
                echo "\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<span class=\"grey lighten-5\">
\t\t\t\t\t\t\t\t\t";
                // line 134
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 135
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 137
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 139
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 151
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"btn waves-effect waves-light red width-max\">";
                echo (isset($context["text_more_detailed"]) ? $context["text_more_detailed"] : null);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-reveal\">
\t\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 154
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"grey-text text-darken-4\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a><i class=\"material-icons waves-effect waves-circle close-icon\">close</i></span>
\t\t\t\t\t\t\t\t<p>";
                // line 155
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 161
            if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
                // line 162
                echo "\t\t\t\t<div class=\"row\">";
                echo (isset($context["pagination"]) ? $context["pagination"] : null);
                echo "</div>
\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 165
                echo "\t\t\t\t<div class=\"card-panel z-depth-1\">
\t\t\t\t\t<div class=\"row valign-wrapper section\">
\t\t\t\t\t\t";
                // line 167
                if (((isset($context["description"]) ? $context["description"] : null) && (isset($context["thumb"]) ? $context["thumb"] : null))) {
                    // line 168
                    echo "\t\t\t\t\t\t<div class=\"col s4 m2 center\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 169
                    echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                    echo "\" data-src=\"";
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" class=\"responsive-img lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s8 m10\">
\t\t\t\t\t\t\t";
                    // line 172
                    echo (isset($context["description"]) ? $context["description"] : null);
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                } else {
                    // line 175
                    echo "\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t";
                    // line 176
                    echo (isset($context["description"]) ? $context["description"] : null);
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 179
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 182
            echo "\t\t\t\t";
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 185
        echo "\t\t\t";
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 190
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 190,  515 => 185,  508 => 182,  503 => 179,  497 => 176,  494 => 175,  488 => 172,  476 => 169,  473 => 168,  471 => 167,  467 => 165,  464 => 164,  458 => 162,  456 => 161,  453 => 160,  442 => 155,  436 => 154,  428 => 151,  424 => 149,  416 => 143,  413 => 142,  407 => 141,  403 => 139,  399 => 137,  396 => 136,  391 => 135,  389 => 134,  384 => 131,  381 => 130,  373 => 128,  370 => 127,  365 => 125,  360 => 124,  354 => 122,  351 => 121,  348 => 120,  344 => 118,  336 => 116,  334 => 115,  326 => 112,  312 => 109,  308 => 107,  299 => 106,  295 => 104,  282 => 102,  278 => 101,  275 => 100,  273 => 99,  267 => 97,  263 => 96,  253 => 89,  250 => 88,  244 => 87,  236 => 85,  228 => 83,  225 => 82,  221 => 81,  214 => 77,  211 => 76,  205 => 75,  197 => 73,  189 => 71,  186 => 70,  182 => 69,  174 => 64,  168 => 61,  163 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 	{% set main, goods = 's12 l6', 's12' %}*/
/* {% elseif column_left or column_right %}*/
/* 	{% set main, goods = 's12 l9', 's12 m6' %}*/
/* {% else %}*/
/* 	{% set main, goods = 's12', 's12 m6 l4' %}*/
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
/* 			{% if products %}*/
/* 			<div class="col {{ main }} section href-underline">*/
/* 				{{ content_top }}*/
/* 				<ul class="collapsible" data-collapsible="expandable">*/
/* 					<li class="arrow-rotate">*/
/* 						<div class="collapsible-header text-bold">{{ text_sort_short }}</div>*/
/* 						<div class="collapsible-body white">*/
/* 							<div class="row">*/
/* 								<div class="col s6 m6 input-field inline">*/
/* 									<select id="input-sort" onchange="location = this.value;">*/
/* 										{% for sorts in sorts %}*/
/* 										{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 										<option value="{{ sorts.href }}" selected>{{ sorts.text }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 									<label class="text-bold" for="input-sort">{{ text_sort }}</label>*/
/* 								</div>*/
/* 								<div class="col s6 m6 input-field inline">*/
/* 									<select id="input-limit" onchange="location = this.value;">*/
/* 									{% for limits in limits %}*/
/* 									{% if limits.value == limit %}*/
/* 									<option value="{{ limits.href }}" selected>{{ limits.text }}</option>*/
/* 									{% else %}*/
/* 									<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 									</select>*/
/* 									<label class="text-bold">{{ text_limit }}</label>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<div class="row">*/
/* 					{% for product in products %}*/
/* 					<div class="col {{ goods }}">*/
/* 						<div class="card sticky-action large hoverable href-underline">*/
/* 							{% if product.labels %}*/
/* 							<ul class="labels-wrap">*/
/* 								{% for label in product.labels %}*/
/* 								<li class="labels-wrap__item"><span class="waves-effect badge {{ label.color }} {{ label.color_text }}">{{ label.name }}</span></li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 							{% endif %}*/
/* 							{% if product.special %}<span class="white-text badge red lighten-1 percent">{{ text_percent }} {{ product.percent_discount }}%</span>{% endif %}*/
/* 							<div class="card-image">*/
/* 								<i class="material-icons waves-effect waves-circle close-icon activator">more_vert</i>*/
/* 								<a href="{{ product.href }}"><img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"></a>*/
/* 							</div>*/
/* 							<div class="card-content center-align">*/
/* 								<span class="card-title"><a href="{{ product.href }}" class="grey-text text-darken-4">{{ product.name }}</a></span>*/
/* 							</div>*/
/* 							<div class="card-action center-align grey lighten-5">*/
/* 								{% if product.add_cart %}*/
/* 								<button class="btn btn-floating btn-large waves-effect waves-light red add-cart" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><i class="material-icons">add_shopping_cart</i></button>*/
/* 								{% else %}*/
/* 								<button class="btn btn-floating btn-large add-cart" disabled="disabled"><i class="material-icons">add_shopping_cart</i></button>*/
/* 								{% endif %}*/
/* 								{% if product.price %}*/
/* 									{% if not product.special %}*/
/* 									<span class="card-price">{{ product.price }}</span>*/
/* 									{% else %}*/
/* 									<span class="card-price old-price grey-text">{{ product.price }}</span>*/
/* 									<span class="card-price red-text text-darken-2">{{ product.special }}</span>*/
/* 									{% endif %}*/
/* 									{% if product.tax %}*/
/* 									<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 									{% endif %}*/
/* 								{% endif %}*/
/* 								<div class="rating">*/
/* 									<hr>*/
/* 									<span class="grey lighten-5">*/
/* 									{% if product.rating %}*/
/* 										{% for i in 1..5 %}*/
/* 											{% if product.rating < i %}*/
/* 											<i class="material-icons">star_border</i>*/
/* 											{% else %}*/
/* 											<i class="material-icons">star</i>*/
/* 											{% endif %}*/
/* 										{% endfor %}*/
/* 										{% else %}*/
/* 										<i class="material-icons">star_border</i>*/
/* 										<i class="material-icons">star_border</i>*/
/* 										<i class="material-icons">star_border</i>*/
/* 										<i class="material-icons">star_border</i>*/
/* 										<i class="material-icons">star_border</i>*/
/* 									{% endif %}*/
/* 									</span>*/
/* 								</div>*/
/* 								<a href="{{ product.href }}" class="btn waves-effect waves-light red width-max">{{ text_more_detailed }}</a>*/
/* 							</div>*/
/* 							<div class="card-reveal">*/
/* 								<span class="card-title"><a href="{{ product.href }}" class="grey-text text-darken-4">{{ product.name }}</a><i class="material-icons waves-effect waves-circle close-icon">close</i></span>*/
/* 								<p>{{ product.description }}</p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 				{% if pagination %}*/
/* 				<div class="row">{{ pagination }}</div>*/
/* 				{% endif %}*/
/* 				{% if description %}*/
/* 				<div class="card-panel z-depth-1">*/
/* 					<div class="row valign-wrapper section">*/
/* 						{% if description and thumb %}*/
/* 						<div class="col s4 m2 center">*/
/* 							<img src="{{ img_loader }}" data-src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="responsive-img lazyload">*/
/* 						</div>*/
/* 						<div class="col s8 m10">*/
/* 							{{ description }}*/
/* 						</div>*/
/* 						{% else %}*/
/* 						<div class="col s12">*/
/* 							{{ description }}*/
/* 						</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
