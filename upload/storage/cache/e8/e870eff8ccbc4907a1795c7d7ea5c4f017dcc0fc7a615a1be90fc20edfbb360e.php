<?php

/* __string_template__cd6bc1a64ff06e5c068476cff81a2e4ad09310bf53706e23a1e2f3b99671bbff */
class __TwigTemplate_e080e5ca48da3e34a56c66336bfe19d6a67eee60d3a0c2eed0fd36b346bbd404 extends Twig_Template
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
        if ((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null)) {
            // line 2
            echo "\t<h4 class=\"text-bold\">";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</h4>
\t<div class=\"section\">
\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 5
                echo "\t\t";
                if ( !$this->getAttribute($context["shipping_method"], "error", array())) {
                    // line 6
                    echo "\t\t<ul>
\t\t\t";
                    // line 7
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 8
                        echo "\t\t\t<li>
\t\t\t\t<label for=\"";
                        // line 9
                        echo $this->getAttribute($context["quote"], "code", array());
                        echo "\">
\t\t\t\t\t";
                        // line 10
                        if ((($this->getAttribute($context["quote"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)) ||  !(isset($context["code"]) ? $context["code"] : null))) {
                            // line 11
                            echo "\t\t\t\t\t";
                            $context["code"] = $this->getAttribute($context["quote"], "code", array());
                            // line 12
                            echo "\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" checked=\"checked\" id=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" class=\"with-gap\">
\t\t\t\t\t";
                        } else {
                            // line 14
                            echo "\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" id=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" class=\"with-gap\">
\t\t\t\t\t";
                        }
                        // line 16
                        echo "\t\t\t\t\t<span>";
                        echo $this->getAttribute($context["quote"], "title", array());
                        echo " – ";
                        echo $this->getAttribute($context["quote"], "text", array());
                        echo "</span>
\t\t\t\t</label>
\t\t\t</li>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "\t\t</ul>
\t\t";
                } else {
                    // line 22
                    echo "\t\t<script>M.toast({html: '<i class=\"material-icons left\">warning</i>";
                    echo $this->getAttribute($context["shipping_method"], "error", array());
                    echo "', classes: 'toast-warning'});</script>
\t\t";
                }
                // line 24
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t</div>
";
        }
        // line 27
        echo "<p><a target=\"_blank\" href=\"http://cvs.map.com.tw/paracvs.asp?cvsname=www.ec-order.com.tw&cvsid=AAABBB&cvstemp=https%3A%2F%2Fec-store.slat.org%3A8080%2Findex.php%3Froute%3Dcheckout%2Fselect_store\">選取超商</a></p>
<div class=\"section\">
\t<strong>";
        // line 29
        echo (isset($context["text_comments"]) ? $context["text_comments"] : null);
        echo "</strong>
\t<div class=\"input-field\">
\t\t<i class=\"material-icons prefix\">message</i>
\t\t<textarea name=\"comment\" class=\"materialize-textarea\">超商代碼:</textarea>
\t</div>
</div>
 <script>
     console.log('ccc');
  function update(){
      \$.ajax({
              url: 'index.php?route=checkout/return_cookie',
              type:'POST',
              success: function (res) {
                 console.log(res);
   \t\t\t\tif(res['address']){
   \t\t\t\t\tconsole.log('ddd');
                 clearInterval(intervalId); }
              },
              error: function (res) {
                 console.log('bbb'); 
              }
       });
  }
     
setInterval(function(){update();}, 1000);  
</script>
<div class=\"flex-reverse\">
\t<button type=\"button\" value=\"";
        // line 56
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-shipping-method\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
</div>
<script>";
        // line 58
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "', classes: 'toast-warning'});";
        }
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__cd6bc1a64ff06e5c068476cff81a2e4ad09310bf53706e23a1e2f3b99671bbff";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 58,  136 => 56,  106 => 29,  102 => 27,  98 => 25,  92 => 24,  86 => 22,  82 => 20,  69 => 16,  61 => 14,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if shipping_methods %}*/
/* 	<h4 class="text-bold">{{ text_shipping_method }}</h4>*/
/* 	<div class="section">*/
/* 	{% for shipping_method in shipping_methods %}*/
/* 		{% if not shipping_method.error %}*/
/* 		<ul>*/
/* 			{% for quote in shipping_method.quote %}*/
/* 			<li>*/
/* 				<label for="{{ quote.code }}">*/
/* 					{% if quote.code == code or not code %}*/
/* 					{% set code = quote.code %}*/
/* 					<input type="radio" name="shipping_method" value="{{ quote.code }}" checked="checked" id="{{ quote.code }}" class="with-gap">*/
/* 					{% else %}*/
/* 					<input type="radio" name="shipping_method" value="{{ quote.code }}" id="{{ quote.code }}" class="with-gap">*/
/* 					{% endif %}*/
/* 					<span>{{ quote.title }} – {{ quote.text }}</span>*/
/* 				</label>*/
/* 			</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 		{% else %}*/
/* 		<script>M.toast({html: '<i class="material-icons left">warning</i>{{ shipping_method.error }}', classes: 'toast-warning'});</script>*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	</div>*/
/* {% endif %}*/
/* <p><a target="_blank" href="http://cvs.map.com.tw/paracvs.asp?cvsname=www.ec-order.com.tw&cvsid=AAABBB&cvstemp=https%3A%2F%2Fec-store.slat.org%3A8080%2Findex.php%3Froute%3Dcheckout%2Fselect_store">選取超商</a></p>*/
/* <div class="section">*/
/* 	<strong>{{ text_comments }}</strong>*/
/* 	<div class="input-field">*/
/* 		<i class="material-icons prefix">message</i>*/
/* 		<textarea name="comment" class="materialize-textarea">超商代碼:</textarea>*/
/* 	</div>*/
/* </div>*/
/*  <script>*/
/*      console.log('ccc');*/
/*   function update(){*/
/*       $.ajax({*/
/*               url: 'index.php?route=checkout/return_cookie',*/
/*               type:'POST',*/
/*               success: function (res) {*/
/*                  console.log(res);*/
/*    				if(res['address']){*/
/*    					console.log('ddd');*/
/*                  clearInterval(intervalId); }*/
/*               },*/
/*               error: function (res) {*/
/*                  console.log('bbb'); */
/*               }*/
/*        });*/
/*   }*/
/*      */
/* setInterval(function(){update();}, 1000);  */
/* </script>*/
/* <div class="flex-reverse">*/
/* 	<button type="button" value="{{ button_continue }}" id="button-shipping-method" class="btn waves-effect waves-light red">{{ button_continue }}</button>*/
/* </div>*/
/* <script>{% if error_warning %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_warning }}', classes: 'toast-warning'});{% endif %}</script>*/
/* */
