<?php

/* FrontBundle::Listing/options.html.twig */
class __TwigTemplate_eaedab09c677d0aa787d1d66aeacef91c8d255ed7be2825575f3220d317959b1 extends Twig_Template
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
        $__internal_fe4a4ff1b9c4b7eb1223cbd9e656312fd14f7b3a2e75494e44c9ff71a21fcd12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4a4ff1b9c4b7eb1223cbd9e656312fd14f7b3a2e75494e44c9ff71a21fcd12->enter($__internal_fe4a4ff1b9c4b7eb1223cbd9e656312fd14f7b3a2e75494e44c9ff71a21fcd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/options.html.twig"));

        $__internal_3cab0394d9a40b23997dac7eb9139c0442eeba0080d2564bb8c1528b48e6407a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cab0394d9a40b23997dac7eb9139c0442eeba0080d2564bb8c1528b48e6407a->enter($__internal_3cab0394d9a40b23997dac7eb9139c0442eeba0080d2564bb8c1528b48e6407a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/options.html.twig"));

        // line 1
        echo "<div class=\"listing-options-wrapper\">
\t<div class=\"listing-options\">
\t\t<div class=\"listing-options-group\">
\t\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_create", array("entity" => "listing"));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save search query"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-bookmark-o\"></i>
\t\t\t</a>

\t\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing", array("display" => "grid"));
        echo "\" ";
        if (((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 8, $this->getSourceContext()); })()) == "grid")) {
            echo "class=\"active\"";
        }
        echo " title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show listings in grid"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t</a>

\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing", array("display" => "row"));
        echo "\" ";
        if (((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 12, $this->getSourceContext()); })()) == "row")) {
            echo "class=\"active\"";
        }
        echo " title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show listings in rows"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-navicon\"></i>
\t\t\t</a>
\t\t</div><!-- /.listing-options-group -->
\t</div><!-- /.listing-options -->
</div><!-- /.listing-options-wrapper  -->";
        
        $__internal_fe4a4ff1b9c4b7eb1223cbd9e656312fd14f7b3a2e75494e44c9ff71a21fcd12->leave($__internal_fe4a4ff1b9c4b7eb1223cbd9e656312fd14f7b3a2e75494e44c9ff71a21fcd12_prof);

        
        $__internal_3cab0394d9a40b23997dac7eb9139c0442eeba0080d2564bb8c1528b48e6407a->leave($__internal_3cab0394d9a40b23997dac7eb9139c0442eeba0080d2564bb8c1528b48e6407a_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  39 => 8,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"listing-options-wrapper\">
\t<div class=\"listing-options\">
\t\t<div class=\"listing-options-group\">
\t\t\t<a href=\"{{ path('search_create', {'entity': 'listing'}) }}\" title=\"{{ 'Save search query'|trans }}\">
\t\t\t\t<i class=\"fa fa-bookmark-o\"></i>
\t\t\t</a>

\t\t\t<a href=\"{{ path('listing', {'display': 'grid'}) }}\" {% if display == 'grid' %}class=\"active\"{% endif %} title=\"{{ 'Show listings in grid'|trans }}\">
\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t</a>

\t\t\t<a href=\"{{ path('listing', {'display': 'row'}) }}\" {% if display == 'row' %}class=\"active\"{% endif %} title=\"{{ 'Show listings in rows'|trans }}\">
\t\t\t\t<i class=\"fa fa-navicon\"></i>
\t\t\t</a>
\t\t</div><!-- /.listing-options-group -->
\t</div><!-- /.listing-options -->
</div><!-- /.listing-options-wrapper  -->", "FrontBundle::Listing/options.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/options.html.twig");
    }
}
