<?php

/* FrontBundle::Listing/Header/image.html.twig */
class __TwigTemplate_247a64fa27b1bb609c2221c9544581219e69d355ef3173bcd32874b2cffde84d extends Twig_Template
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
        echo "<div class=\"listing-single-image-wrapper\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFeaturedImage", array(), "method"), "image"), "html", null, true);
        echo "');\">
\t<div class=\"listing-single-image\">
\t\t";
        // line 3
        $this->loadTemplate("FrontBundle::Listing/Header/content.html.twig", "FrontBundle::Listing/Header/image.html.twig", 3)->display($context);
        // line 4
        echo "\t</div><!-- /.listing-single-image -->
</div><!-- /.listing-single-mage-wrapper -->";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/Header/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  25 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Listing/Header/image.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/Header/image.html.twig");
    }
}
