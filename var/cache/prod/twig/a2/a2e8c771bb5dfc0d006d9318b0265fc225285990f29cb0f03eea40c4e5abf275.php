<?php

/* FrontBundle::Listing/options.html.twig */
class __TwigTemplate_b314aeefe18b8894c5222d14c21611fb64bac7fb9a662be4122e9b4809b68851 extends Twig_Template
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
        if ((($context["display"] ?? null) == "grid")) {
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
        if ((($context["display"] ?? null) == "row")) {
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
        return array (  46 => 12,  33 => 8,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Listing/options.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/options.html.twig");
    }
}
