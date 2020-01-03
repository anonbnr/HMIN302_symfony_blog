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

/* post/index.html.twig */
class __TwigTemplate_c25fd13e2b8a00d4f8385dace051247569c5ae2cc09e3daf401a94f23ba2f4de extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Latest Posts";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_new");
            echo "\">Create new</a>
";
        }
        // line 9
        echo " <h1>Published Posts</h1>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "    <section>
        <h2>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo "</h2>
        <small>published: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "publicationDate", [], "any", false, false, false, 13), "format", [0 => "d/m/Y"], "method", false, false, false, 13), "html", null, true);
            echo "</small>
        <p>";
            // line 14
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getContent", [], "method", false, false, false, 14)) > 50)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getContent", [], "method", false, false, false, 14), 0, 50) . "...")) : (twig_get_attribute($this->env, $this->source, $context["post"], "getContent", [], "method", false, false, false, 14))), "html", null, true);
            echo "</p>
        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "getSlug", [], "method", false, false, false, 15)]), "html", null, true);
            echo "\">continue reading...</a>
    </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<div class=\"row\">
 <div class=\"navigation col-md-2 col-md-offset-5\">
            ";
        // line 21
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 21, $this->source); })()));
        echo "
 </div>
 </div> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 21,  112 => 18,  103 => 15,  99 => 14,  95 => 13,  91 => 12,  88 => 11,  84 => 10,  81 => 9,  75 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Latest Posts{% endblock %}

{% block body %}
{% if is_granted('ROLE_ADMIN') %}
\t<a href=\"{{ path('post_new') }}\">Create new</a>
{% endif %}
 <h1>Published Posts</h1>
    {% for post in posts %}
    <section>
        <h2>{{post.title}}</h2>
        <small>published: {{ post.publicationDate.format('d/m/Y') }}</small>
        <p>{{ post.getContent()|length > 50 ? post.getContent()|slice(0, 50) ~ '...' : post.getContent()  }}</p>
        <a href=\"{{ path('post_show', {'slug' : post.getSlug()} )}}\">continue reading...</a>
    </section>
    {% endfor %}

<div class=\"row\">
 <div class=\"navigation col-md-2 col-md-offset-5\">
            {{ knp_pagination_render(posts) }}
 </div>
 </div> 
{% endblock %}
", "post/index.html.twig", "C:\\xampp\\htdocs\\HMIN302_symfony_blog\\templates\\post\\index.html.twig");
    }
}
