<?php

/* materialize/template/product/compare.twig */
class __TwigTemplate_8f461e370ab3850e5c2dc02ebcb0a997266f6de69f1f9cf03aa853b66d7c3401 extends Twig_Template
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
\t\t\t<div id=\"content\" class=\"col ";
        // line 59
        echo (isset($context["main"]) ? $context["main"] : null);
        echo " section href-underline\">
\t\t\t\t";
        // line 60
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t\t";
        // line 61
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 62
            echo "\t\t\t\t<div class=\"card-panel\" style=\"overflow-x:scroll;\">
\t\t\t\t\t<table class=\"bordered striped centered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th colspan=\"";
            // line 66
            echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
            echo "\" style=\"text-align:left;\"><strong>";
            echo (isset($context["text_product"]) ? $context["text_product"] : null);
            echo "</strong></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>";
            // line 71
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</b></td>
\t\t\t\t\t\t\t\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 73
                echo "\t\t\t\t\t\t\t\t<td><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" rel=\"nofollow noopener\" target=\"_blank\"><strong>";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</strong></a></td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>";
            // line 77
            echo (isset($context["text_image"]) ? $context["text_image"] : null);
            echo "</b></td>
\t\t\t\t\t\t\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 79
                echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 80
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                    echo "\" data-src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"responsive-img lazyload\">
\t\t\t\t\t\t\t\t";
                }
                // line 83
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>";
            // line 87
            echo (isset($context["text_price"]) ? $context["text_price"] : null);
            echo "</b></td>
\t\t\t\t\t\t\t\t";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 90
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t\t<strike>";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</strike> ";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>";
            // line 101
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</b></td>
\t\t\t\t\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 103
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>";
            // line 107
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</b></td>
\t\t\t\t\t\t\t\t";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 109
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "manufacturer", array());
                echo "</td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>";
            // line 113
            echo (isset($context["text_availability"]) ? $context["text_availability"] : null);
            echo "</b></td>
\t\t\t\t\t\t\t\t";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 115
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "availability", array());
                echo "</td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            // line 118
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 119
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>";
                // line 120
                echo (isset($context["text_rating"]) ? $context["text_rating"] : null);
                echo "</b></td>
\t\t\t\t\t\t\t\t";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 125
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 126
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 127
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                // line 128
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 130
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 132
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 133
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small>";
                    // line 142
                    echo $this->getAttribute($context["product"], "reviews", array());
                    echo "</small>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            // line 147
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>";
            // line 148
            echo (isset($context["text_summary"]) ? $context["text_summary"] : null);
            echo "</b></td>
\t\t\t\t\t\t\t\t";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 150
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>";
            // line 154
            echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
            echo "</b></td>
\t\t\t\t\t\t\t\t";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 156
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "weight", array());
                echo "</td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>";
            // line 160
            echo (isset($context["text_dimension"]) ? $context["text_dimension"] : null);
            echo "</b></td>
\t\t\t\t\t\t\t\t";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 162
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "length", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "width", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "height", array());
                echo "</td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 167
                echo "\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"";
                // line 169
                echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
                echo "\" style=\"text-align:left;\"><strong>";
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 173
                    echo "\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                    // line 175
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
\t\t\t\t\t\t\t\t";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 177
                        echo "\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array")) {
                            // line 178
                            echo "\t\t\t\t\t\t\t\t<td>";
                            echo $this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array");
                            echo "</td>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 180
                            echo "\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t";
                        }
                        // line 182
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 190
                echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 191
                if ($this->getAttribute($context["product"], "add_cart", array())) {
                    // line 192
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" value=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" class=\"btn waves-effect waves-light blue\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 194
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn\" disabled=\"disabled\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t";
                }
                // line 196
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" class=\"btn waves-effect waves-light red\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\"><i class=\"material-icons\">delete_sweep</i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 203
            echo "\t\t\t\t<div class=\"card-panel center\">
\t\t\t\t\t<p class=\"flow-text text-bold\">";
            // line 204
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            // line 205
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"catalog/view/theme/materialize/image/search-empty.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 208
        echo "\t\t\t\t";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 210
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 215
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 215,  623 => 210,  617 => 208,  611 => 205,  607 => 204,  604 => 203,  598 => 199,  586 => 196,  582 => 194,  570 => 192,  568 => 191,  565 => 190,  561 => 189,  557 => 187,  551 => 186,  543 => 183,  537 => 182,  533 => 180,  527 => 178,  524 => 177,  520 => 176,  516 => 175,  512 => 173,  508 => 172,  500 => 169,  496 => 167,  492 => 166,  488 => 164,  475 => 162,  471 => 161,  467 => 160,  463 => 158,  454 => 156,  450 => 155,  446 => 154,  442 => 152,  433 => 150,  429 => 149,  425 => 148,  422 => 147,  418 => 145,  409 => 142,  405 => 140,  397 => 134,  394 => 133,  388 => 132,  384 => 130,  380 => 128,  377 => 127,  372 => 126,  370 => 125,  365 => 122,  361 => 121,  357 => 120,  354 => 119,  352 => 118,  349 => 117,  340 => 115,  336 => 114,  332 => 113,  328 => 111,  319 => 109,  315 => 108,  311 => 107,  307 => 105,  298 => 103,  294 => 102,  290 => 101,  286 => 99,  279 => 97,  276 => 96,  268 => 94,  262 => 92,  259 => 91,  257 => 90,  254 => 89,  250 => 88,  246 => 87,  242 => 85,  235 => 83,  223 => 81,  221 => 80,  218 => 79,  214 => 78,  210 => 77,  206 => 75,  195 => 73,  191 => 72,  187 => 71,  177 => 66,  171 => 62,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 			<div id="content" class="col {{ main }} section href-underline">*/
/* 				{{ content_top }}*/
/* 				{% if products %}*/
/* 				<div class="card-panel" style="overflow-x:scroll;">*/
/* 					<table class="bordered striped centered">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th colspan="{{ products|length + 1 }}" style="text-align:left;"><strong>{{ text_product }}</strong></th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 							<tr>*/
/* 								<td><b>{{ text_name }}</b></td>*/
/* 								{% for product in products %}*/
/* 								<td><a href="{{ product.href }}" rel="nofollow noopener" target="_blank"><strong>{{ product.name }}</strong></a></td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td><b>{{ text_image }}</b></td>*/
/* 								{% for product in products %}*/
/* 								<td>*/
/* 								{% if product.thumb %}*/
/* 									<img src="{{ img_loader }}" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="responsive-img lazyload">*/
/* 								{% endif %}*/
/* 								</td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td><b>{{ text_price }}</b></td>*/
/* 								{% for product in products %}*/
/* 								<td>*/
/* 								{% if product.price %}*/
/* 									{% if not product.special %}*/
/* 										{{ product.price }}*/
/* 									{% else %}*/
/* 									<strike>{{ product.price }}</strike> {{ product.special }}*/
/* 									{% endif %}*/
/* 								{% endif %}*/
/* 								</td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td><b>{{ text_model }}</b></td>*/
/* 								{% for product in products %}*/
/* 								<td>{{ product.model }}</td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td><b>{{ text_manufacturer }}</b></td>*/
/* 								{% for product in products %}*/
/* 								<td>{{ product.manufacturer }}</td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td><b>{{ text_availability }}</b></td>*/
/* 								{% for product in products %}*/
/* 								<td>{{ product.availability }}</td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 							{% if review_status %}*/
/* 							<tr>*/
/* 								<td><b>{{ text_rating }}</b></td>*/
/* 								{% for product in products %}*/
/* 								<td>*/
/* 									<div class="rating">*/
/* 										<span>*/
/* 											{% if product.rating %}*/
/* 												{% for i in 1..5 %}*/
/* 													{% if product.rating < i %}*/
/* 													<i class="material-icons">star_border</i>*/
/* 													{% else %}*/
/* 													<i class="material-icons">star</i>*/
/* 													{% endif %}*/
/* 												{% endfor %}*/
/* 												{% else %}*/
/* 												<i class="material-icons">star_border</i>*/
/* 												<i class="material-icons">star_border</i>*/
/* 												<i class="material-icons">star_border</i>*/
/* 												<i class="material-icons">star_border</i>*/
/* 												<i class="material-icons">star_border</i>*/
/* 											{% endif %}*/
/* 										</span>*/
/* 									</div>*/
/* 									<small>{{ product.reviews }}</small>*/
/* 								</td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 							{% endif %}*/
/* 							<tr>*/
/* 								<td><b>{{ text_summary }}</b></td>*/
/* 								{% for product in products %}*/
/* 								<td>{{ product.description }}</td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td><b>{{ text_weight }}</b></td>*/
/* 								{% for product in products %}*/
/* 								<td>{{ product.weight }}</td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td><b>{{ text_dimension }}</b></td>*/
/* 								{% for product in products %}*/
/* 								<td>{{ product.length }} x {{ product.width }} x {{ product.height }}</td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 						</tbody>*/
/* 						{% for attribute_group in attribute_groups %}*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<td colspan="{{ products|length + 1 }}" style="text-align:left;"><strong>{{ attribute_group.name }}</strong></td>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						{% for key, attribute in attribute_group.attribute %}*/
/* 						<tbody>*/
/* 							<tr>*/
/* 								<td>{{ attribute.name }}</td>*/
/* 								{% for product in products %}*/
/* 								{% if product.attribute[key] %}*/
/* 								<td>{{ product.attribute[key] }}</td>*/
/* 								{% else %}*/
/* 								<td></td>*/
/* 								{% endif %}*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 						</tbody>*/
/* 						{% endfor %}*/
/* 						{% endfor %}*/
/* 						<tr>*/
/* 							<td></td>*/
/* 							{% for product in products %}*/
/* 							<td>*/
/* 								{% if product.add_cart %}*/
/* 								<button type="button" value="{{ button_cart }}" class="btn waves-effect waves-light blue" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="material-icons">add_shopping_cart</i></button>*/
/* 								{% else %}*/
/* 								<button class="btn" disabled="disabled"><i class="material-icons">add_shopping_cart</i></button>*/
/* 								{% endif %}*/
/* 								<a href="{{ product.remove }}" class="btn waves-effect waves-light red" title="{{ button_remove }}"><i class="material-icons">delete_sweep</i></a>*/
/* 							</td>*/
/* 							{% endfor %}*/
/* 						</tr>*/
/* 					</table>*/
/* 				</div>*/
/* 				{% else %}*/
/* 				<div class="card-panel center">*/
/* 					<p class="flow-text text-bold">{{ text_empty }}</p>*/
/* 					<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="catalog/view/theme/materialize/image/search-empty.png" alt="">*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
