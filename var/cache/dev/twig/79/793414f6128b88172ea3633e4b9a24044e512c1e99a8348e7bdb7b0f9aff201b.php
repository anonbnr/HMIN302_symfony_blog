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

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_c864550af5c451df208818b6a9947b8fbd7758ec9294de60e3daf737d02d5765 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<h1>Register a new account</h1>

<form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">
<div class=\"form-group\" id=\"fos_user_registration_form\">
\t<div class=\"form-group\">
\t<label for=\"fos_user_registration_form_email\" class=\"required\">Email</label>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.email", [], "FOSUserBundle")]]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
    <label for=\"fos_user_registration_form_username\" class=\"required\">Username</label>
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.username", [], "FOSUserBundle")]]);
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
    <label for=\"fos_user_registration_form_plainPassword_first\" class=\"required\">Password</label>
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), "first", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.password", [], "FOSUserBundle")]]);
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "plainPassword", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22), 'errors');
        echo "
\t</div>

\t<div class=\"form-group\">
    <label for=\"fos_user_registration_form_plainPassword_second\" class=\"required\">Repeat password</label>
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), "second", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.password_confirmation", [], "FOSUserBundle")]]);
        echo "
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "plainPassword", [], "any", false, false, false, 28), "second", [], "any", false, false, false, 28), 'errors');
        echo "
\t</div>
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'rest');
        echo "

</div>
<div>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\">
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  100 => 30,  95 => 28,  91 => 27,  83 => 22,  79 => 21,  71 => 16,  67 => 15,  59 => 10,  55 => 9,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

<h1>Register a new account</h1>

<form action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\">
<div class=\"form-group\" id=\"fos_user_registration_form\">
\t<div class=\"form-group\">
\t<label for=\"fos_user_registration_form_email\" class=\"required\">Email</label>
    {{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'form.email'|trans } }) }}
    {{ form_errors(form.email) }}
\t</div>

\t<div class=\"form-group\">
    <label for=\"fos_user_registration_form_username\" class=\"required\">Username</label>
    {{ form_widget(form.username, { 'attr': {'class': 'form-control', 'placeholder': 'form.username'|trans } }) }}
    {{ form_errors(form.username) }}
\t</div>

\t<div class=\"form-group\">
    <label for=\"fos_user_registration_form_plainPassword_first\" class=\"required\">Password</label>
    {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control', 'placeholder': 'form.password'|trans } }) }}
    {{ form_errors(form.plainPassword.first) }}
\t</div>

\t<div class=\"form-group\">
    <label for=\"fos_user_registration_form_plainPassword_second\" class=\"required\">Repeat password</label>
    {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control', 'placeholder': 'form.password_confirmation'|trans } }) }}
    {{ form_errors(form.plainPassword.second) }}
\t</div>
    {{ form_rest(form) }}

</div>
<div>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\">
</div>", "@FOSUser/Registration/register_content.html.twig", "C:\\xampp\\htdocs\\HMIN302_symfony_blog\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
