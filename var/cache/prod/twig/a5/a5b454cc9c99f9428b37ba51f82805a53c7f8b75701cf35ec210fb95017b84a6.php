<?php

/* AdminBundle::Listing/update.html.twig */
class __TwigTemplate_962ffb088d43afbad23120e096101906cf06b597a1e218841e6dbf9ed746dea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle::Listing/update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["active"] = "listings";
        // line 5
        $context["actions"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 7
($context["listing"] ?? null), "getSlug", array(), "method"))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listing_create"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create")));
        // line 16
        $context["title"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update Listing") . " ") . twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getName", array(), "method"));
        // line 18
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard")), 2 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listing"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listings")), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update Listing")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "AdminBundle::Listing/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 39,  53 => 38,  48 => 37,  45 => 36,  39 => 34,  35 => 1,  33 => 18,  31 => 16,  29 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Listing/update.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Listing/update.html.twig");
    }
}
