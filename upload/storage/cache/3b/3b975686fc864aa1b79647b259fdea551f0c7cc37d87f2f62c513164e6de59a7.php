<?php

/* materialize/template/checkout/confirm.twig */
class __TwigTemplate_89c92316587ba091449a2f209008e37a47f048514dd98253e7330f6fc6a30711 extends Twig_Template
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
        if ( !(isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 2
            echo "<table class=\"highlight responsive-table\">
\t<thead>
\t\t<tr>
\t\t\t<th>";
            // line 5
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</th>
\t\t\t<th>";
            // line 6
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</th>
\t\t\t<th>";
            // line 7
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</th>
\t\t\t<th>";
            // line 8
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</th>
\t\t\t<th>";
            // line 9
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t<a href=\"";
                // line 16
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" target=\"_blank\" rel=\"noopener\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
\t\t\t\t";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 18
                    echo "\t\t\t\t<br>
\t\t\t\t&nbsp;<small> - ";
                    // line 19
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t\t\t";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    // line 22
                    echo "\t\t\t\t<br>
\t\t\t\t<span>";
                    // line 23
                    echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                    echo "</span> <small>";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t</td>
\t\t\t<td>";
                // line 26
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
\t\t\t<td>";
                // line 27
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
\t\t\t<td>";
                // line 28
                echo $this->getAttribute($context["product"], "price", array());
                echo "</td>
\t\t\t<td>";
                // line 29
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 33
                echo "\t\t<tr>
\t\t\t<td>";
                // line 34
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
\t\t\t<td></td>
\t\t\t<td>1</td>
\t\t\t<td>";
                // line 37
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
\t\t\t<td>";
                // line 38
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t</tbody>
</table>
<div class=\"section\">
\t<div class=\"card-panel\">
\t\t<table class=\"bordered\">
\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 47
                echo "\t\t\t<tr>
\t\t\t\t<th>";
                // line 48
                echo $this->getAttribute($context["total"], "title", array());
                echo ":</th>
\t\t\t\t<td>";
                // line 49
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t</table>
\t</div>
</div>
";
            // line 55
            echo (isset($context["payment"]) ? $context["payment"] : null);
            echo "
";
        } else {
            // line 57
            echo "<script>location = '";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "';</script>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 57,  176 => 55,  171 => 52,  162 => 49,  158 => 48,  155 => 47,  151 => 46,  144 => 41,  135 => 38,  131 => 37,  125 => 34,  122 => 33,  117 => 32,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  93 => 25,  86 => 23,  83 => 22,  80 => 21,  70 => 19,  67 => 18,  63 => 17,  57 => 16,  53 => 14,  49 => 13,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if not redirect %}*/
/* <table class="highlight responsive-table">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th>{{ column_name }}</th>*/
/* 			<th>{{ column_model }}</th>*/
/* 			<th>{{ column_quantity }}</th>*/
/* 			<th>{{ column_price }}</th>*/
/* 			<th>{{ column_total }}</th>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		{% for product in products %}*/
/* 		<tr>*/
/* 			<td>*/
/* 				<a href="{{ product.href }}" target="_blank" rel="noopener">{{ product.name }}</a>*/
/* 				{% for option in product.option %}*/
/* 				<br>*/
/* 				&nbsp;<small> - {{ option.name }}: {{ option.value }}</small>*/
/* 				{% endfor %}*/
/* 				{% if product.recurring %}*/
/* 				<br>*/
/* 				<span>{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small>*/
/* 				{% endif %}*/
/* 			</td>*/
/* 			<td>{{ product.model }}</td>*/
/* 			<td>{{ product.quantity }}</td>*/
/* 			<td>{{ product.price }}</td>*/
/* 			<td>{{ product.total }}</td>*/
/* 		</tr>*/
/* 		{% endfor %}*/
/* 		{% for voucher in vouchers %}*/
/* 		<tr>*/
/* 			<td>{{ voucher.description }}</td>*/
/* 			<td></td>*/
/* 			<td>1</td>*/
/* 			<td>{{ voucher.amount }}</td>*/
/* 			<td>{{ voucher.amount }}</td>*/
/* 		</tr>*/
/* 		{% endfor %}*/
/* 	</tbody>*/
/* </table>*/
/* <div class="section">*/
/* 	<div class="card-panel">*/
/* 		<table class="bordered">*/
/* 			{% for total in totals %}*/
/* 			<tr>*/
/* 				<th>{{ total.title }}:</th>*/
/* 				<td>{{ total.text }}</td>*/
/* 			</tr>*/
/* 			{% endfor %}*/
/* 		</table>*/
/* 	</div>*/
/* </div>*/
/* {{ payment }}*/
/* {% else %}*/
/* <script>location = '{{ redirect }}';</script>*/
/* {% endif %}*/
