<?php

/* FrontBundle::Listing/Header/map.html.twig */
class __TwigTemplate_87412bafdfcdd9b4d3f12196a4f1e1bee8e6ff4ab2675ebdb074ae175aa08d99 extends Twig_Template
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
        echo "<div class=\"listing-map-wrapper\">
\t<div class=\"listing-map\">
\t\t<div id=\"listing-header-map\" 
\t\t\t data-latitude=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getLatitude", array(), "method"), "html", null, true);
        echo "\"
\t\t\t data-longitude=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getLongitude", array(), "method"), "html", null, true);
        echo "\"
\t\t\t ";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFeaturedImage", array(), "method")) {
            echo "data-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFeaturedImage", array(), "method"), "image"), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "\t\t\t class=\"listing-header-map\"></div><!-- /.listing-header-map -->

\t\t";
        // line 9
        $this->loadTemplate("FrontBundle::Listing/Header/content.html.twig", "FrontBundle::Listing/Header/map.html.twig", 9)->display($context);
        // line 10
        echo "\t</div><!-- /.listing-map -->
</div><!-- /.listing-map-wrapper -->";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/Header/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  42 => 9,  38 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Listing/Header/map.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/Header/map.html.twig");
    }
}
