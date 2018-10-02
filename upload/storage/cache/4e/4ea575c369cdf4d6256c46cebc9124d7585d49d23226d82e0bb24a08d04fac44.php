<?php

/* materialize/template/checkout/payment_method.twig */
class __TwigTemplate_e2a07c8d8afdb58155f78a00814ada4a3a5aed88503d0d411b09c44a3d840312 extends Twig_Template
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
        if ((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) {
            // line 2
            echo "<h4 class=\"text-bold\">";
            echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
            echo "</h4>
<div class=\"section\">
\t<ul>
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 6
                echo "\t\t<li>
\t\t\t<label for=\"";
                // line 7
                echo $this->getAttribute($context["payment_method"], "code", array());
                echo "\">
\t\t\t\t";
                // line 8
                if ((($this->getAttribute($context["payment_method"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)) ||  !(isset($context["code"]) ? $context["code"] : null))) {
                    // line 9
                    echo "\t\t\t\t";
                    $context["code"] = $this->getAttribute($context["payment_method"], "code", array());
                    // line 10
                    echo "\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" id=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" class=\"with-gap\" checked=\"checked\">
\t\t\t\t";
                } else {
                    // line 12
                    echo "\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" id=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" class=\"with-gap\">
\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t<span>";
                echo $this->getAttribute($context["payment_method"], "title", array());
                if ($this->getAttribute($context["payment_method"], "terms", array())) {
                    echo "(";
                    echo $this->getAttribute($context["payment_method"], "terms", array());
                    echo ")";
                }
                echo "</span>
\t\t\t</label>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</ul>
</div>
";
        }
        // line 21
        echo "<div class=\"section\">
\t<strong>";
        // line 22
        echo (isset($context["text_comments"]) ? $context["text_comments"] : null);
        echo "</strong>
\t<div class=\"input-field\">
\t\t<i class=\"material-icons prefix\">comment</i>
\t\t<textarea name=\"comment\" class=\"materialize-textarea\">";
        // line 25
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
\t</div>
</div>
";
        // line 28
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 29
            echo "<div class=\"section\">
\t<label for=\"agreement\">
\t\t";
            // line 31
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 32
                echo "\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" id=\"agreement\" class=\"filled-in\">
\t\t";
            } else {
                // line 34
                echo "\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"agreement\" class=\"filled-in\">
\t\t";
            }
            // line 36
            echo "\t\t<span>";
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "</span>
\t</label>
</div>
";
        }
        // line 40
        echo "<div class=\"flex-reverse\">
\t<button type=\"button\" value=\"";
        // line 41
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-payment-method\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
</div>
<script>";
        // line 43
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "', classes: 'toast-warning'});";
        }
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 43,  123 => 41,  120 => 40,  112 => 36,  108 => 34,  104 => 32,  102 => 31,  98 => 29,  96 => 28,  90 => 25,  84 => 22,  81 => 21,  76 => 18,  60 => 14,  52 => 12,  44 => 10,  41 => 9,  39 => 8,  35 => 7,  32 => 6,  28 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if payment_methods %}*/
/* <h4 class="text-bold">{{ text_payment_method }}</h4>*/
/* <div class="section">*/
/* 	<ul>*/
/* 		{% for payment_method in payment_methods %}*/
/* 		<li>*/
/* 			<label for="{{ payment_method.code }}">*/
/* 				{% if payment_method.code == code or not code %}*/
/* 				{% set code = payment_method.code %}*/
/* 				<input type="radio" name="payment_method" value="{{ payment_method.code }}" id="{{ payment_method.code }}" class="with-gap" checked="checked">*/
/* 				{% else %}*/
/* 				<input type="radio" name="payment_method" value="{{ payment_method.code }}" id="{{ payment_method.code }}" class="with-gap">*/
/* 				{% endif %}*/
/* 				<span>{{ payment_method.title }}{% if payment_method.terms %}({{ payment_method.terms }}){% endif %}</span>*/
/* 			</label>*/
/* 		</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* </div>*/
/* {% endif %}*/
/* <div class="section">*/
/* 	<strong>{{ text_comments }}</strong>*/
/* 	<div class="input-field">*/
/* 		<i class="material-icons prefix">comment</i>*/
/* 		<textarea name="comment" class="materialize-textarea">{{ comment }}</textarea>*/
/* 	</div>*/
/* </div>*/
/* {% if text_agree %}*/
/* <div class="section">*/
/* 	<label for="agreement">*/
/* 		{% if agree %}*/
/* 		<input type="checkbox" name="agree" value="1" checked="checked" id="agreement" class="filled-in">*/
/* 		{% else %}*/
/* 		<input type="checkbox" name="agree" value="1" id="agreement" class="filled-in">*/
/* 		{% endif %}*/
/* 		<span>{{ text_agree }}</span>*/
/* 	</label>*/
/* </div>*/
/* {% endif %}*/
/* <div class="flex-reverse">*/
/* 	<button type="button" value="{{ button_continue }}" id="button-payment-method" class="btn waves-effect waves-light red">{{ button_continue }}</button>*/
/* </div>*/
/* <script>{% if error_warning %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_warning }}', classes: 'toast-warning'});{% endif %}</script>*/
