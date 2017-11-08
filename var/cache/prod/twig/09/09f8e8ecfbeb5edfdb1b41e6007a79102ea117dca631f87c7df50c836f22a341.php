<?php

/* FrontBundle::Category/box.html.twig */
class __TwigTemplate_b11fd5bdda500c875b4f5a355254fd34ca6cab852d7be2bb0808b3c3ebb72ba5 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"text-decoration-none\">
  ";
        // line 18
        echo "\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cat1.png"), "html", null, true);
        echo "\">
    <span class=\"category-title\">
        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "
    </span><!-- /.category-title -->
</a><!-- /.category -->";
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
        return array (  30 => 20,  24 => 18,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Category/box.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Category/box.html.twig");
    }
}
