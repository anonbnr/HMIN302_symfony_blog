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

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d3787aed4cb54d8d60568237e554b7c64bb674167a917cc6144ea83b733137be extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    </head>
    <body>
        <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/\">Blog</a>
   <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
     <li class=\"nav-item active\">
      <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
  </li>
  <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\">Posts</a>
  </li>
</ul>
";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "    <ul class=\"navbar-nav ml-auto\">
  <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"/logout\"> Logout</a> 
  </li>
  
</ul>
 ";
        } else {
            // line 32
            echo "    
    <ul class=\"navbar-nav ml-auto\">
  <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"/login\">Sign in </a> 
  </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"/register\">Register</a> 
  </li>
</ul>
 ";
        }
        // line 42
        echo "


</div>
</nav>
        <div>
            ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 49
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", ["%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "username", [], "any", false, false, false, 49)], "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 54
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 56
        echo "        </div>

        ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "hasPreviousSession", [], "any", false, false, false, 58)) {
            // line 59
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "session", [], "any", false, false, false, 59), "flashbag", [], "any", false, false, false, 59), "all", [], "method", false, false, false, 59));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 60
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 61
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 62
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        ";
        }
        // line 67
        echo "
        <div>
            ";
        // line 69
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 71
        echo "        </div>
    </div>
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_fos_user_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 70
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 70,  178 => 69,  167 => 71,  165 => 69,  161 => 67,  158 => 66,  152 => 65,  143 => 62,  138 => 61,  133 => 60,  128 => 59,  126 => 58,  122 => 56,  114 => 54,  108 => 51,  104 => 50,  99 => 49,  97 => 48,  89 => 42,  77 => 32,  68 => 25,  66 => 24,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    </head>
    <body>
        <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/\">Blog</a>
   <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
     <li class=\"nav-item active\">
      <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
  </li>
  <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\">Posts</a>
  </li>
</ul>
{% if app.user %}
    <ul class=\"navbar-nav ml-auto\">
  <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"/logout\"> Logout</a> 
  </li>
  
</ul>
 {% else %}
    
    <ul class=\"navbar-nav ml-auto\">
  <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"/login\">Sign in </a> 
  </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"/register\">Register</a> 
  </li>
</ul>
 {% endif %}



</div>
</nav>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </div>
    </body>
</html>
", "FOSUserBundle::layout.html.twig", "C:\\xampp\\htdocs\\HMIN302_symfony_blog\\vendor\\friendsofsymfony\\user-bundle/Resources/views/layout.html.twig");
    }
}
