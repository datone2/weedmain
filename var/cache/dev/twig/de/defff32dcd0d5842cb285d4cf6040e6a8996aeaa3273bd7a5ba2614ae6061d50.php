<?php

/* FrontBundle::Category/box.html.twig */
class __TwigTemplate_53b5ed58fc87f125aedd11a669445805dfdbaf4f5ebce93795a2dbb6877bac24 extends Twig_Template
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
        $__internal_42d7e1c30dca8e228c74acd473fa3244981e3cb96685efed542c7edc67b6a83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d7e1c30dca8e228c74acd473fa3244981e3cb96685efed542c7edc67b6a83d->enter($__internal_42d7e1c30dca8e228c74acd473fa3244981e3cb96685efed542c7edc67b6a83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Category/box.html.twig"));

        $__internal_c15d78bee8d3bc358b5a0414f1b3ec5120ce69db7c7fb17d0650e61da58c192c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15d78bee8d3bc358b5a0414f1b3ec5120ce69db7c7fb17d0650e61da58c192c->enter($__internal_c15d78bee8d3bc358b5a0414f1b3ec5120ce69db7c7fb17d0650e61da58c192c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Category/box.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 1, $this->getSourceContext()); })()), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"text-decoration-none\">
  ";
        // line 18
        echo "\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cat1.png"), "html", null, true);
        echo "\">
    <span class=\"category-title\">
        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 20, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "
    </span><!-- /.category-title -->
</a><!-- /.category -->";
        
        $__internal_42d7e1c30dca8e228c74acd473fa3244981e3cb96685efed542c7edc67b6a83d->leave($__internal_42d7e1c30dca8e228c74acd473fa3244981e3cb96685efed542c7edc67b6a83d_prof);

        
        $__internal_c15d78bee8d3bc358b5a0414f1b3ec5120ce69db7c7fb17d0650e61da58c192c->leave($__internal_c15d78bee8d3bc358b5a0414f1b3ec5120ce69db7c7fb17d0650e61da58c192c_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Category/box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 20,  30 => 18,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ path('category_detail', {'slug': category.getSlug()})}}\" class=\"text-decoration-none\">
  {#  <span class=\"category-count\">
        {{ category.getListings()|length }}

        {% if category.getListings()|length == 1 %}
            {{ 'listing'|trans }}
        {% else %}
            {{ 'listings'|trans }}
        {% endif %}
    </span>

    {% if category.getFontIcon() %}
        <span class=\"category-icon\">
            <i class=\"fa {{ category.getFontIcon() }}\"></i>
        </span><!-- /.category-icon -->
    {% endif %}
\t#}
\t<img src=\"{{asset('images/cat1.png')}}\">
    <span class=\"category-title\">
        {{ category.getName() }}
    </span><!-- /.category-title -->
</a><!-- /.category -->", "FrontBundle::Category/box.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Category/box.html.twig");
    }
}
