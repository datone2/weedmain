<?php

/* FrontBundle::Post/detail.html.twig */
class __TwigTemplate_56309cc99fd5be3210b167384fc7385e865488a661c7a46b3812e3b5c148ff94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle::Post/detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu_active"] = "posts";
        // line 5
        $context["title"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "getName", array(), "method");
        // line 7
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Blog")), 2 => array("title" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 15
($context["post"] ?? null), "getName", array(), "method")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        echo "\t    
\t<div class=\"container\">
\t\t<div class=\"content\">
\t\t\t";
        // line 24
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle::Post/detail.html.twig", 24)->display($context);
        // line 25
        echo "\t\t\t
\t\t\t<div class=\"post-body\">
\t\t\t\t";
        // line 27
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "getDescription", array(), "method");
        echo "
\t\t\t</div><!-- /.post-content -->\t\t\t
\t\t</div><!-- /.content -->
\t</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Post/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 27,  52 => 25,  50 => 24,  43 => 21,  37 => 19,  33 => 1,  31 => 15,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Post/detail.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Post/detail.html.twig");
    }
}
