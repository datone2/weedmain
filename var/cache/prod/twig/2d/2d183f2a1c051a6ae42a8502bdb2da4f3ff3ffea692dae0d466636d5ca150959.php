<?php

/* AdminBundle::User/update.html.twig */
class __TwigTemplate_33f852c4e19279ad04ff03d02924c521ccf254900b8d6bfb8b747ba3112b4ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle::User/update.html.twig", 1);
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
        $context["active"] = "users";
        // line 5
        $context["title"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update User") . " ") . twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getUsername", array(), "method"));
        // line 7
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard")), 2 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users")), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update User")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "AdminBundle::User/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 28,  50 => 27,  45 => 26,  42 => 25,  36 => 23,  32 => 1,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::User/update.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/User/update.html.twig");
    }
}
