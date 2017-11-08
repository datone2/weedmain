<?php

/* FrontBundle::Layout/base_fullwidth.html.twig */
class __TwigTemplate_86a449feae0d69cc6605d0e98fa1d4ccd79dbe6ab1e5093a9f8a1ed1d27deb21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/default.html.twig", "FrontBundle::Layout/base_fullwidth.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-wrapper\">
        ";
        // line 5
        $this->loadTemplate("FrontBundle::Helper/header.html.twig", "FrontBundle::Layout/base_fullwidth.html.twig", 5)->display(array_merge($context, array("fullwidth" => true)));
        // line 6
        echo "
        ";
        // line 7
        $this->loadTemplate("AppBundle::Helper/messages.html.twig", "FrontBundle::Layout/base_fullwidth.html.twig", 7)->display($context);
        // line 8
        echo "
        <div class=\"main-wrapper fullwidth\">
            ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "        </div><!-- /.main-wrapper -->
    </div><!-- /page-wrapper -->
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontBundle::Layout/base_fullwidth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  48 => 11,  46 => 10,  42 => 8,  40 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Layout/base_fullwidth.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Layout/base_fullwidth.html.twig");
    }
}
