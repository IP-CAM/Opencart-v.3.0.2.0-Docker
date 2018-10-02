<?php

/* materialize/template/checkout/login.twig */
class __TwigTemplate_956d5a9875257a3756e87d84e1dfcb147ec178875efa65e0b192adcdc968298e extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col s12 m6\">
\t\t<div class=\"card-panel z-depth-2\">
\t\t\t<h2>";
        // line 4
        echo (isset($context["text_new_customer"]) ? $context["text_new_customer"] : null);
        echo "</h2>
\t\t\t<div class=\"section\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label for=\"register\">
\t\t\t\t\t\t\t";
        // line 9
        if (((isset($context["account"]) ? $context["account"] : null) == "register")) {
            // line 10
            echo "\t\t\t\t\t\t\t<input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" id=\"register\" class=\"with-gap\">
\t\t\t\t\t\t\t";
        } else {
            // line 12
            echo "\t\t\t\t\t\t\t<input type=\"radio\" name=\"account\" value=\"register\" id=\"register\" class=\"with-gap\">
\t\t\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t\t\t<span>";
        echo (isset($context["text_register"]) ? $context["text_register"] : null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 17
        if ((isset($context["checkout_guest"]) ? $context["checkout_guest"] : null)) {
            // line 18
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<label for=\"guest\">
\t\t\t\t\t\t\t";
            // line 20
            if (((isset($context["account"]) ? $context["account"] : null) == "guest")) {
                // line 21
                echo "\t\t\t\t\t\t\t<input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" id=\"guest\" class=\"with-gap\">
\t\t\t\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t\t\t<input type=\"radio\" name=\"account\" value=\"guest\" id=\"guest\" class=\"with-gap\">
\t\t\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t\t<span>";
            echo (isset($context["text_guest"]) ? $context["text_guest"] : null);
            echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"flex-reverse\">
\t\t\t\t<button type=\"button\" value=\"";
        // line 32
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-account\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col s12 m6\">
\t\t<div class=\"card-panel z-depth-2\">
\t\t\t<h2>";
        // line 38
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</h2>
\t\t\t<strong>";
        // line 39
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</strong>
\t\t\t<form action=\"";
        // line 40
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<i class=\"material-icons prefix\">email</i>
\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"\" id=\"input-email\" id=\"input-email\" class=\"validate\">
\t\t\t\t\t<label for=\"input-email\">";
        // line 44
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t\t<span class=\"helper-text\" data-error=\"";
        // line 45
        echo (isset($context["text_email_error"]) ? $context["text_email_error"] : null);
        echo "\" data-success=\"";
        echo (isset($context["text_email_success"]) ? $context["text_email_success"] : null);
        echo "\"></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t<i class=\"material-icons prefix\">lock</i>
\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" id=\"input-password\">
\t\t\t\t\t<label for=\"input-password\">";
        // line 50
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
\t\t\t\t\t<a href=\"";
        // line 51
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t<button type=\"button\" value=\"";
        // line 54
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" id=\"button-login\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "materialize/template/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 54,  122 => 51,  118 => 50,  108 => 45,  104 => 44,  97 => 40,  93 => 39,  89 => 38,  78 => 32,  73 => 29,  65 => 25,  61 => 23,  57 => 21,  55 => 20,  51 => 18,  49 => 17,  42 => 14,  38 => 12,  34 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/* 	<div class="col s12 m6">*/
/* 		<div class="card-panel z-depth-2">*/
/* 			<h2>{{ text_new_customer }}</h2>*/
/* 			<div class="section">*/
/* 				<ul>*/
/* 					<li>*/
/* 						<label for="register">*/
/* 							{% if account == 'register' %}*/
/* 							<input type="radio" name="account" value="register" checked="checked" id="register" class="with-gap">*/
/* 							{% else %}*/
/* 							<input type="radio" name="account" value="register" id="register" class="with-gap">*/
/* 							{% endif %}*/
/* 							<span>{{ text_register }}</span>*/
/* 						</label>*/
/* 					</li>*/
/* 					{% if checkout_guest %}*/
/* 					<li>*/
/* 						<label for="guest">*/
/* 							{% if account == 'guest' %}*/
/* 							<input type="radio" name="account" value="guest" checked="checked" id="guest" class="with-gap">*/
/* 							{% else %}*/
/* 							<input type="radio" name="account" value="guest" id="guest" class="with-gap">*/
/* 							{% endif %}*/
/* 							<span>{{ text_guest }}</span>*/
/* 						</label>*/
/* 					</li>*/
/* 					{% endif %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="flex-reverse">*/
/* 				<button type="button" value="{{ button_continue }}" id="button-account" class="btn waves-effect waves-light red">{{ button_continue }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col s12 m6">*/
/* 		<div class="card-panel z-depth-2">*/
/* 			<h2>{{ text_returning_customer }}</h2>*/
/* 			<strong>{{ text_i_am_returning_customer }}</strong>*/
/* 			<form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/* 				<div class="input-field">*/
/* 					<i class="material-icons prefix">email</i>*/
/* 					<input type="email" name="email" value="" id="input-email" id="input-email" class="validate">*/
/* 					<label for="input-email">{{ entry_email }}</label>*/
/* 					<span class="helper-text" data-error="{{ text_email_error }}" data-success="{{ text_email_success }}"></span>*/
/* 				</div>*/
/* 				<div class="input-field">*/
/* 					<i class="material-icons prefix">lock</i>*/
/* 					<input type="password" name="password" value="" id="input-password">*/
/* 					<label for="input-password">{{ entry_password }}</label>*/
/* 					<a href="{{ forgotten }}">{{ text_forgotten }}</a>*/
/* 				</div>*/
/* 				<div class="flex-reverse">*/
/* 					<button type="button" value="{{ button_login }}" id="button-login" class="btn waves-effect waves-light red">{{ button_login }}</button>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
