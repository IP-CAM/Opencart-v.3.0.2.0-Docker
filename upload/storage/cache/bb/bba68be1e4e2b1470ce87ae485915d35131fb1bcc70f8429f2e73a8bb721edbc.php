<?php

/* materialize/template/extension/module/quickorder.twig */
class __TwigTemplate_44c00c00fe5f93f5504e9a17595e655f9a927cbfece7b41697a820b04c6ecd4f extends Twig_Template
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
        if ((isset($context["module_quickorder_status"]) ? $context["module_quickorder_status"] : null)) {
            // line 2
            echo "<form id=\"quickorder__modal\" class=\"modal white\">
\t<div class=\"modal-content\">
\t\t<i class=\"material-icons modal-action modal-close waves-effect waves-circle close-icon\">close</i>
\t\t<h4>";
            // line 5
            echo (isset($context["module_quickorder_button"]) ? $context["module_quickorder_button"] : null);
            echo " — ";
            echo (isset($context["product_title"]) ? $context["product_title"] : null);
            echo "</h4>
\t\t<div class=\"row\">
\t\t\t";
            // line 7
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 8
                echo "\t\t\t<div class=\"col s12 m6 center\">
\t\t\t\t<figure>
\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
                // line 10
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["module_quickorder_button"]) ? $context["module_quickorder_button"] : null);
                echo " — ";
                echo (isset($context["product_title"]) ? $context["product_title"] : null);
                echo "\">
\t\t\t\t\t<figcaption>";
                // line 11
                echo (isset($context["module_quickorder_button"]) ? $context["module_quickorder_button"] : null);
                echo " — ";
                echo (isset($context["product_title"]) ? $context["product_title"] : null);
                echo "</figcaption>
\t\t\t\t</figure>
\t\t\t</div>
\t\t\t";
            }
            // line 15
            echo "\t\t\t<div class=\"col s12 ";
            echo (((isset($context["thumb"]) ? $context["thumb"] : null)) ? ("m6") : (""));
            echo "\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 17
            if ((isset($context["module_quickorder_name"]) ? $context["module_quickorder_name"] : null)) {
                // line 18
                echo "\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t<input id=\"quickorder-name\" name=\"module_quickorder_name\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t<label for=\"quickorder-name\" class=\"text-bold";
                // line 21
                echo (((isset($context["module_quickorder_name_required"]) ? $context["module_quickorder_name_required"] : null)) ? (" required") : (""));
                echo "\">";
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">phone</i>
\t\t\t\t\t\t<input id=\"quickorder-telephone\" name=\"module_quickorder_telephone\" type=\"tel\" class=\"validate\">
\t\t\t\t\t\t<label for=\"quickorder-telephone\" class=\"text-bold required\">";
            // line 27
            echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 29
            if ((isset($context["module_quickorder_email"]) ? $context["module_quickorder_email"] : null)) {
                // line 30
                echo "\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">email</i>
\t\t\t\t\t\t<input id=\"quickorder-email\" name=\"module_quickorder_email\" type=\"email\" class=\"validate\">
\t\t\t\t\t\t<label for=\"quickorder-email\" class=\"text-bold";
                // line 33
                echo (((isset($context["module_quickorder_email_required"]) ? $context["module_quickorder_email_required"] : null)) ? (" required") : (""));
                echo "\">";
                echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
                echo "</label>
\t\t\t\t\t\t<span class=\"helper-text\" data-error=\"";
                // line 34
                echo (isset($context["text_email_error"]) ? $context["text_email_error"] : null);
                echo "\" data-success=\"";
                echo (isset($context["text_email_success"]) ? $context["text_email_success"] : null);
                echo "\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t";
            if ((isset($context["module_quickorder_enquiry"]) ? $context["module_quickorder_enquiry"] : null)) {
                // line 38
                echo "\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">chat</i>
\t\t\t\t\t\t<textarea id=\"quickorder-enquiry\" name=\"module_quickorder_enquiry\" class=\"materialize-textarea character-counter\" data-length=\"360\"></textarea>
\t\t\t\t\t\t<label for=\"quickorder-enquiry\" class=\"text-bold";
                // line 41
                echo (((isset($context["module_quickorder_enquiry_required"]) ? $context["module_quickorder_enquiry_required"] : null)) ? (" required") : (""));
                echo "\">";
                echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t";
            if ((isset($context["module_quickorder_calltime"]) ? $context["module_quickorder_calltime"] : null)) {
                // line 45
                echo "\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">av_timer</i>
\t\t\t\t\t\t<input type=\"text\" id=\"quickorder-calltime\" class=\"timepicker\" name=\"module_quickorder_calltime\" value=\"\">
\t\t\t\t\t\t<label for=\"quickorder-calltime\" class=\"text-bold";
                // line 48
                echo (((isset($context["module_quickorder_calltime_required"]) ? $context["module_quickorder_calltime_required"] : null)) ? (" required") : (""));
                echo "\">";
                echo (isset($context["entry_calltime"]) ? $context["entry_calltime"] : null);
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 54
            if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
                // line 55
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t<label for=\"agreement-check-quickorder\">
\t\t\t\t\t";
                // line 58
                if ((isset($context["module_quickorder_agree"]) ? $context["module_quickorder_agree"] : null)) {
                    // line 59
                    echo "\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_agree\" value=\"1\" checked=\"checked\" id=\"agreement-check-quickorder\" class=\"filled-in\">
\t\t\t\t\t";
                } else {
                    // line 61
                    echo "\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_agree\" value=\"1\" id=\"agreement-check-quickorder\" class=\"filled-in\">
\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t<span>";
                echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
                echo "</span>
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            // line 68
            echo "\t</div>
\t<div class=\"modal-footer\">
\t\t<input type=\"hidden\" name=\"module_quickorder_product_title\" value=\"";
            // line 70
            echo (isset($context["product_title"]) ? $context["product_title"] : null);
            echo "\">
\t\t<input type=\"hidden\" name=\"module_quickorder_product_link\" value=\"";
            // line 71
            echo (isset($context["product_link"]) ? $context["product_link"] : null);
            echo "\">
\t\t<button type=\"button\" id=\"quickorder__button\" class=\"btn modal-action waves-effect waves-light red\" value=\"";
            // line 72
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\">";
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "</button>
\t</div>
</form>
<div class=\"section\">
\t<button type=\"button\" data-target=\"quickorder__modal\" id=\"quickorder__btn\" class=\"btn btn-large waves-effect waves-light width-max modal-trigger ";
            // line 76
            echo (isset($context["module_quickorder_color_btn"]) ? $context["module_quickorder_color_btn"] : null);
            echo " ";
            echo (isset($context["module_quickorder_color_btn_text"]) ? $context["module_quickorder_color_btn_text"] : null);
            echo "\"><i class=\"material-icons left\">shopping_cart</i>";
            echo (isset($context["module_quickorder_button"]) ? $context["module_quickorder_button"] : null);
            echo "</button>
</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
            // line 80
            if ((isset($context["module_quickorder_enquiry"]) ? $context["module_quickorder_enquiry"] : null)) {
                echo "\$('.character-counter').characterCounter();";
            }
            // line 81
            echo "\t";
            if ((isset($context["module_quickorder_calltime"]) ? $context["module_quickorder_calltime"] : null)) {
                // line 82
                echo "\t\$('.timepicker').timepicker({
\t\tdefaultTime: 'now',
\t\tautoclose: true,
\t\ti18n: {
\t\t\tclear: '";
                // line 86
                echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
                echo "',
\t\t\tcancel: '";
                // line 87
                echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
                echo "',
\t\t\tdone: '";
                // line 88
                echo (isset($context["button_time_done"]) ? $context["button_time_done"] : null);
                echo "',
\t\t\ttwelvehour: ";
                // line 89
                echo (isset($context["twelve_hour"]) ? $context["twelve_hour"] : null);
                echo "
\t\t}
\t});
\t";
            }
            // line 93
            echo "\t\$('#quickorder__button').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/quickorder/send',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#quickorder__modal\").serialize(),
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'], classes: 'toast-warning'});
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">check</i>' + json['success'], classes: 'toast-success'});
\t\t\t\t\t\$('#quickorder-telephone').val('').removeClass('valid');
\t\t\t\t\t\$('#quickorder-telephone').parent().find('label').removeClass('active');
\t\t\t\t\t";
            // line 107
            if ((isset($context["module_quickorder_name"]) ? $context["module_quickorder_name"] : null)) {
                // line 108
                echo "\t\t\t\t\t\$('#quickorder-name').val('').removeClass('valid');
\t\t\t\t\t\$('#quickorder-name').parent().find('label').removeClass('active');
\t\t\t\t\t";
            }
            // line 111
            echo "\t\t\t\t\t";
            if ((isset($context["module_quickorder_email"]) ? $context["module_quickorder_email"] : null)) {
                // line 112
                echo "\t\t\t\t\t\$('#quickorder-email').val('').removeClass('valid');
\t\t\t\t\t\$('#quickorder-email').parent().find('label').removeClass('active');
\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t";
            if ((isset($context["module_quickorder_enquiry"]) ? $context["module_quickorder_enquiry"] : null)) {
                // line 116
                echo "\t\t\t\t\t\$('#quickorder-enquiry').val('');
\t\t\t\t\t\$('#quickorder-enquiry').parent().find('label').removeClass('active');
\t\t\t\t\t\$('#quickorder-enquiry').parent().find('.character-counter').empty();
\t\t\t\t\tM.textareaAutoResize(\$('#quickorder-enquiry'));
\t\t\t\t\t";
            }
            // line 121
            echo "\t\t\t\t\t";
            if ((isset($context["module_quickorder_calltime"]) ? $context["module_quickorder_calltime"] : null)) {
                // line 122
                echo "\t\t\t\t\t\$('#quickorder-calltime').val('');
\t\t\t\t\t\$('#quickorder-calltime').parent().find('label').removeClass('active');
\t\t\t\t\t";
            }
            // line 125
            echo "\t\t\t\t\t";
            if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
                // line 126
                echo "\t\t\t\t\t\$('#agreement-check-quickorder').prop('checked', false);
\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t\$('#quickorder__modal').modal('close');
\t\t\t\t}
\t\t\t}
\t\t});
\t});
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/quickorder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 128,  289 => 126,  286 => 125,  281 => 122,  278 => 121,  271 => 116,  268 => 115,  263 => 112,  260 => 111,  255 => 108,  253 => 107,  237 => 93,  230 => 89,  226 => 88,  222 => 87,  218 => 86,  212 => 82,  209 => 81,  205 => 80,  194 => 76,  185 => 72,  181 => 71,  177 => 70,  173 => 68,  164 => 63,  160 => 61,  156 => 59,  154 => 58,  149 => 55,  147 => 54,  142 => 51,  134 => 48,  129 => 45,  126 => 44,  118 => 41,  113 => 38,  110 => 37,  102 => 34,  96 => 33,  91 => 30,  89 => 29,  84 => 27,  79 => 24,  71 => 21,  66 => 18,  64 => 17,  58 => 15,  49 => 11,  39 => 10,  35 => 8,  33 => 7,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if module_quickorder_status %}*/
/* <form id="quickorder__modal" class="modal white">*/
/* 	<div class="modal-content">*/
/* 		<i class="material-icons modal-action modal-close waves-effect waves-circle close-icon">close</i>*/
/* 		<h4>{{ module_quickorder_button }} — {{ product_title }}</h4>*/
/* 		<div class="row">*/
/* 			{% if thumb %}*/
/* 			<div class="col s12 m6 center">*/
/* 				<figure>*/
/* 					<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ thumb }}" alt="{{ module_quickorder_button }} — {{ product_title }}">*/
/* 					<figcaption>{{ module_quickorder_button }} — {{ product_title }}</figcaption>*/
/* 				</figure>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			<div class="col s12 {{ thumb ? 'm6' : '' }}">*/
/* 				<div class="row">*/
/* 					{% if module_quickorder_name %}*/
/* 					<div class="input-field col s12">*/
/* 						<i class="material-icons prefix">account_circle</i>*/
/* 						<input id="quickorder-name" name="module_quickorder_name" type="text" class="validate">*/
/* 						<label for="quickorder-name" class="text-bold{{ module_quickorder_name_required ? ' required' }}">{{ entry_name }}</label>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					<div class="input-field col s12">*/
/* 						<i class="material-icons prefix">phone</i>*/
/* 						<input id="quickorder-telephone" name="module_quickorder_telephone" type="tel" class="validate">*/
/* 						<label for="quickorder-telephone" class="text-bold required">{{ entry_telephone }}</label>*/
/* 					</div>*/
/* 					{% if module_quickorder_email %}*/
/* 					<div class="input-field col s12">*/
/* 						<i class="material-icons prefix">email</i>*/
/* 						<input id="quickorder-email" name="module_quickorder_email" type="email" class="validate">*/
/* 						<label for="quickorder-email" class="text-bold{{ module_quickorder_email_required ? ' required' }}">{{ entry_email }}</label>*/
/* 						<span class="helper-text" data-error="{{ text_email_error }}" data-success="{{ text_email_success }}"></span>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					{% if module_quickorder_enquiry %}*/
/* 					<div class="input-field col s12">*/
/* 						<i class="material-icons prefix">chat</i>*/
/* 						<textarea id="quickorder-enquiry" name="module_quickorder_enquiry" class="materialize-textarea character-counter" data-length="360"></textarea>*/
/* 						<label for="quickorder-enquiry" class="text-bold{{ module_quickorder_enquiry_required ? ' required' }}">{{ entry_enquiry }}</label>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					{% if module_quickorder_calltime %}*/
/* 					<div class="input-field col s12">*/
/* 						<i class="material-icons prefix">av_timer</i>*/
/* 						<input type="text" id="quickorder-calltime" class="timepicker" name="module_quickorder_calltime" value="">*/
/* 						<label for="quickorder-calltime" class="text-bold{{ module_quickorder_calltime_required ? ' required' }}">{{ entry_calltime }}</label>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% if text_agree %}*/
/* 		<div class="row">*/
/* 			<div class="col s12">*/
/* 				<label for="agreement-check-quickorder">*/
/* 					{% if module_quickorder_agree %}*/
/* 					<input type="checkbox" name="module_quickorder_agree" value="1" checked="checked" id="agreement-check-quickorder" class="filled-in">*/
/* 					{% else %}*/
/* 					<input type="checkbox" name="module_quickorder_agree" value="1" id="agreement-check-quickorder" class="filled-in">*/
/* 					{% endif %}*/
/* 					<span>{{ text_agree }}</span>*/
/* 				</label>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	<div class="modal-footer">*/
/* 		<input type="hidden" name="module_quickorder_product_title" value="{{ product_title }}">*/
/* 		<input type="hidden" name="module_quickorder_product_link" value="{{ product_link }}">*/
/* 		<button type="button" id="quickorder__button" class="btn modal-action waves-effect waves-light red" value="{{ button_submit }}">{{ button_submit }}</button>*/
/* 	</div>*/
/* </form>*/
/* <div class="section">*/
/* 	<button type="button" data-target="quickorder__modal" id="quickorder__btn" class="btn btn-large waves-effect waves-light width-max modal-trigger {{ module_quickorder_color_btn }} {{ module_quickorder_color_btn_text }}"><i class="material-icons left">shopping_cart</i>{{ module_quickorder_button }}</button>*/
/* </div>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	{% if module_quickorder_enquiry %}$('.character-counter').characterCounter();{% endif %}*/
/* 	{% if module_quickorder_calltime %}*/
/* 	$('.timepicker').timepicker({*/
/* 		defaultTime: 'now',*/
/* 		autoclose: true,*/
/* 		i18n: {*/
/* 			clear: '{{ button_datetime_clear }}',*/
/* 			cancel: '{{ button_datetime_done }}',*/
/* 			done: '{{ button_time_done }}',*/
/* 			twelvehour: {{ twelve_hour }}*/
/* 		}*/
/* 	});*/
/* 	{% endif %}*/
/* 	$('#quickorder__button').on('click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/module/quickorder/send',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: $("#quickorder__modal").serialize(),*/
/* 			success: function(json) {*/
/* 				if (json['error']) {*/
/* 					M.toast({html: '<i class="material-icons left">warning</i>' + json['error'], classes: 'toast-warning'});*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					M.toast({html: '<i class="material-icons left">check</i>' + json['success'], classes: 'toast-success'});*/
/* 					$('#quickorder-telephone').val('').removeClass('valid');*/
/* 					$('#quickorder-telephone').parent().find('label').removeClass('active');*/
/* 					{% if module_quickorder_name %}*/
/* 					$('#quickorder-name').val('').removeClass('valid');*/
/* 					$('#quickorder-name').parent().find('label').removeClass('active');*/
/* 					{% endif %}*/
/* 					{% if module_quickorder_email %}*/
/* 					$('#quickorder-email').val('').removeClass('valid');*/
/* 					$('#quickorder-email').parent().find('label').removeClass('active');*/
/* 					{% endif %}*/
/* 					{% if module_quickorder_enquiry %}*/
/* 					$('#quickorder-enquiry').val('');*/
/* 					$('#quickorder-enquiry').parent().find('label').removeClass('active');*/
/* 					$('#quickorder-enquiry').parent().find('.character-counter').empty();*/
/* 					M.textareaAutoResize($('#quickorder-enquiry'));*/
/* 					{% endif %}*/
/* 					{% if module_quickorder_calltime %}*/
/* 					$('#quickorder-calltime').val('');*/
/* 					$('#quickorder-calltime').parent().find('label').removeClass('active');*/
/* 					{% endif %}*/
/* 					{% if text_agree %}*/
/* 					$('#agreement-check-quickorder').prop('checked', false);*/
/* 					{% endif %}*/
/* 					$('#quickorder__modal').modal('close');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* });*/
/* </script>*/
/* {% endif %}*/
