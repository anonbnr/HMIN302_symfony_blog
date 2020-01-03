<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_7f8f72735b4f38558ad38119d2e91f15a279b6c7694a9da6c81490438eb9378a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "
    <div class=\"form-group\">
    <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
    </div>

    <div class=\"form-group\">
    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
    </div>

    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
    <input type=\"checkbox\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>

    
    


    
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  88 => 22,  81 => 18,  74 => 14,  70 => 13,  66 => 11,  60 => 9,  58 => 8,  54 => 7,  51 => 6,  45 => 4,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <div class=\"form-group\">
    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
    </div>

    <div class=\"form-group\">
    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
    </div>

    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
    <input type=\"checkbox\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

    
    


    
</form>
", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\HMIN302_symfony_blog\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
