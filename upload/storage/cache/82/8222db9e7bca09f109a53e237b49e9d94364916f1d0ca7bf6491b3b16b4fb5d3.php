<?php

/* materialize/template/product/category.twig */
class __TwigTemplate_04623a941b4bd2bd26d5a1b416c6e4455ce78af4e064d04ca400ceb7b12ffc85 extends Twig_Template
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
            list($context["main"], $context["goods"]) =             array("s12", "s12 m6 xl4");
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
\t\t<div class=\"row\">
\t\t\t";
        // line 57
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t\t<div class=\"col ";
        // line 58
        echo (isset($context["main"]) ? $context["main"] : null);
        echo " section href-underline\">
\t\t\t\t";
        // line 59
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t\t<h1>";
        // line 60
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t\t";
        // line 61
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 62
            echo "\t\t\t\t\t<h3>";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
\t\t\t\t\t<div class=\"subcategory-wrap\">
\t\t\t\t\t\t";
            // line 64
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= 5)) {
                // line 65
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"chip grey lighten-2 waves-effect waves-default z-depth-1 truncate\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 68
                    if ($this->getAttribute($context["category"], "thumb", array())) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["category"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["category"], "name", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "\t\t\t\t\t\t";
            } else {
                // line 76
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["categories"]) ? $context["categories"] : null), twig_round((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chip grey lighten-2 waves-effect waves-default z-depth-1 truncate\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 80
                        if ($this->getAttribute($context["child"], "thumb", array())) {
                            // line 81
                            echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"\" data-src=\"";
                            echo $this->getAttribute($context["child"], "thumb", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["child"], "thumb", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 92
            echo "\t\t\t\t<ul class=\"collapsible\" data-collapsible=\"expandable\">
\t\t\t\t\t<li class=\"arrow-rotate\">
\t\t\t\t\t\t<div class=\"collapsible-header text-bold\">";
            // line 94
            echo (isset($context["text_sort_short"]) ? $context["text_sort_short"] : null);
            echo "</div>
\t\t\t\t\t\t<div class=\"collapsible-body white\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col s6 input-field inline\">
\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected>";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-sort\">";
            // line 107
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col s6 input-field inline\">
\t\t\t\t\t\t\t\t\t<select id=\"input-limit\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected>";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
            // line 119
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col s12 m6 switch\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col s8\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
            // line 124
            echo (isset($context["entry_instock"]) ? $context["entry_instock"] : null);
            echo ":</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col s4\">
\t\t\t\t\t\t\t\t\t\t\t<label id=\"instock-switch\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"instock\" id=\"input-instock\" ";
            // line 128
            echo (((isset($context["instock"]) ? $context["instock"] : null)) ? ("value='1' checked") : ("value=\"\""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lever\"></span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"content\" class=\"row\">
\t\t\t\t\t";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 140
                echo "\t\t\t\t\t<div class=\"col ";
                echo (isset($context["goods"]) ? $context["goods"] : null);
                echo "\">
\t\t\t\t\t\t<div class=\"card sticky-action large hoverable href-underline\">
\t\t\t\t\t\t\t";
                // line 142
                if ($this->getAttribute($context["product"], "labels", array())) {
                    // line 143
                    echo "\t\t\t\t\t\t\t<ul class=\"labels-wrap\">
\t\t\t\t\t\t\t\t";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 145
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
                    // line 147
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "special", array())) {
                    echo "<span class=\"white-text badge red lighten-1 percent\">";
                    echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "percent_discount", array());
                    echo "%</span>";
                }
                // line 150
                echo "\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle close-icon activator\">more_vert</i>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 152
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
                // line 155
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"grey-text text-darken-4\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action center-align grey lighten-5\">
\t\t\t\t\t\t\t\t";
                // line 158
                if ($this->getAttribute($context["product"], "add_cart", array())) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large waves-effect waves-light red add-cart\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large add-cart\" disabled=\"disabled\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t";
                }
                // line 163
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"card-price\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"card-price old-price grey-text\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"card-price red-text text-darken-2\">";
                        // line 168
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 173
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 174
                echo "\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<span class=\"grey lighten-5\">
\t\t\t\t\t\t\t\t\t";
                // line 177
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 179
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 180
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 182
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 184
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t";
                }
                // line 192
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 194
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"btn waves-effect waves-light red width-max\">";
                echo (isset($context["text_more_detailed"]) ? $context["text_more_detailed"] : null);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-reveal\">
\t\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 197
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"grey-text text-darken-4\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a><i class=\"material-icons waves-effect waves-circle close-icon\">close</i></span>
\t\t\t\t\t\t\t\t<p>";
                // line 198
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
            // line 203
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 204
            if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
                // line 205
                echo "\t\t\t\t<div class=\"row\">";
                echo (isset($context["pagination"]) ? $context["pagination"] : null);
                echo "</div>
\t\t\t\t";
            }
            // line 207
            echo "\t\t\t\t";
        } else {
            // line 208
            echo "\t\t\t\t\t<div class=\"card-panel center\">
\t\t\t\t\t\t<p class=\"flow-text text-bold\">";
            // line 209
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            // line 210
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"catalog/view/theme/materialize/image/search-empty.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 213
        echo "\t\t\t\t";
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 214
            echo "\t\t\t\t<div class=\"card-panel z-depth-1\">
\t\t\t\t\t<div class=\"row valign-wrapper section\">
\t\t\t\t\t\t";
            // line 216
            if (((isset($context["description"]) ? $context["description"] : null) && (isset($context["thumb"]) ? $context["thumb"] : null))) {
                // line 217
                echo "\t\t\t\t\t\t<div class=\"col s4 m2 center\">
\t\t\t\t\t\t\t<img src=\"";
                // line 218
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
                // line 221
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 224
                echo "\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t";
                // line 225
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 228
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 233
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function(event) {
\t\tvar url_filter = '";
        // line 239
        echo (isset($context["url"]) ? $context["url"] : null);
        echo "';
\t\t\$('#instock-switch').on('click', function() {
\t\t\turl = url_filter;
\t\t\tvar instock = \$('input[name=\\'instock\\']').val();
\t\t\tif (instock == '1') {
\t\t\t\turl += '';
\t\t\t} else if (instock == '') {
\t\t\t\turl += '&instock=true';
\t\t\t} else {
\t\t\t\turl += '';
\t\t\t}
\t\t\tlocation = url;
\t\t});
\t});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 255
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 255,  655 => 239,  646 => 233,  640 => 231,  635 => 228,  629 => 225,  626 => 224,  620 => 221,  608 => 218,  605 => 217,  603 => 216,  599 => 214,  596 => 213,  590 => 210,  586 => 209,  583 => 208,  580 => 207,  574 => 205,  572 => 204,  569 => 203,  558 => 198,  552 => 197,  544 => 194,  540 => 192,  532 => 186,  529 => 185,  523 => 184,  519 => 182,  515 => 180,  512 => 179,  507 => 178,  505 => 177,  500 => 174,  497 => 173,  489 => 171,  486 => 170,  481 => 168,  476 => 167,  470 => 165,  467 => 164,  464 => 163,  460 => 161,  452 => 159,  450 => 158,  442 => 155,  428 => 152,  424 => 150,  415 => 149,  411 => 147,  398 => 145,  394 => 144,  391 => 143,  389 => 142,  383 => 140,  379 => 139,  365 => 128,  358 => 124,  350 => 119,  347 => 118,  341 => 117,  333 => 115,  325 => 113,  322 => 112,  318 => 111,  311 => 107,  308 => 106,  302 => 105,  294 => 103,  286 => 101,  283 => 100,  279 => 99,  271 => 94,  267 => 92,  264 => 91,  260 => 89,  257 => 88,  251 => 87,  240 => 83,  232 => 81,  230 => 80,  224 => 78,  219 => 77,  214 => 76,  211 => 75,  200 => 71,  192 => 69,  190 => 68,  184 => 66,  179 => 65,  177 => 64,  171 => 62,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 	{% set main, goods = 's12', 's12 m6 xl4' %}*/
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
/* 		<div class="row">*/
/* 			{{ column_left }}*/
/* 			<div class="col {{ main }} section href-underline">*/
/* 				{{ content_top }}*/
/* 				<h1>{{ heading_title }}</h1>*/
/* 				{% if categories %}*/
/* 					<h3>{{ text_refine }}</h3>*/
/* 					<div class="subcategory-wrap">*/
/* 						{% if categories|length <= 5 %}*/
/* 							{% for category in categories %}*/
/* 								<a href="{{ category.href }}">*/
/* 									<div class="chip grey lighten-2 waves-effect waves-default z-depth-1 truncate">*/
/* 										{% if category.thumb %}*/
/* 										<img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ category.thumb }}" alt="{{ category.name }}">*/
/* 										{% endif %}*/
/* 										{{ category.name }}*/
/* 									</div>*/
/* 								</a>*/
/* 							{% endfor %}*/
/* 						{% else %}*/
/* 							{% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/* 								 {% for child in category %}*/
/* 									<a href="{{ child.href }}">*/
/* 										<div class="chip grey lighten-2 waves-effect waves-default z-depth-1 truncate">*/
/* 											{% if child.thumb %}*/
/* 											<img class="lazyload" src="" data-src="{{ child.thumb }}" alt="{{ child.thumb }}">*/
/* 											{% endif %}*/
/* 											{{ child.name }}*/
/* 										</div>*/
/* 									</a>*/
/* 								{% endfor %}*/
/* 							{% endfor %}*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if products %}*/
/* 				<ul class="collapsible" data-collapsible="expandable">*/
/* 					<li class="arrow-rotate">*/
/* 						<div class="collapsible-header text-bold">{{ text_sort_short }}</div>*/
/* 						<div class="collapsible-body white">*/
/* 							<div class="row">*/
/* 								<div class="col s6 input-field inline">*/
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
/* 								<div class="col s6 input-field inline">*/
/* 									<select id="input-limit" onchange="location = this.value;">*/
/* 										{% for limits in limits %}*/
/* 										{% if limits.value == limit %}*/
/* 										<option value="{{ limits.href }}" selected>{{ limits.text }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 									<label class="text-bold">{{ text_limit }}</label>*/
/* 								</div>*/
/* 								<div class="col s12 m6 switch">*/
/* 									<div class="row">*/
/* 										<div class="col s8">*/
/* 											<span class="text-bold">{{ entry_instock }}:</span>*/
/* 										</div>*/
/* 										<div class="col s4">*/
/* 											<label id="instock-switch">*/
/* 												<input type="checkbox" name="instock" id="input-instock" {{ instock ? "value='1' checked" : 'value=""' }}>*/
/* 												<span class="lever"></span>*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<div id="content" class="row">*/
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
/* 				{% else %}*/
/* 					<div class="card-panel center">*/
/* 						<p class="flow-text text-bold">{{ text_empty }}</p>*/
/* 						<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="catalog/view/theme/materialize/image/search-empty.png" alt="">*/
/* 					</div>*/
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
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* <script>*/
/* 	document.addEventListener("DOMContentLoaded", function(event) {*/
/* 		var url_filter = '{{ url }}';*/
/* 		$('#instock-switch').on('click', function() {*/
/* 			url = url_filter;*/
/* 			var instock = $('input[name=\'instock\']').val();*/
/* 			if (instock == '1') {*/
/* 				url += '';*/
/* 			} else if (instock == '') {*/
/* 				url += '&instock=true';*/
/* 			} else {*/
/* 				url += '';*/
/* 			}*/
/* 			location = url;*/
/* 		});*/
/* 	});*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
