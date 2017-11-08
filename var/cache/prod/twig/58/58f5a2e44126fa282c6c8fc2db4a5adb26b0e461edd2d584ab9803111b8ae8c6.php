<?php

/* FrontBundle::Layout/base.html.twig */
class __TwigTemplate_ba5467ecf775d8941f5f49c15525e53c85b4a51d3b5dafb26d47d3e52506eb72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/default.html.twig", "FrontBundle::Layout/base.html.twig", 1);
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
        $this->loadTemplate("FrontBundle::Helper/header.html.twig", "FrontBundle::Layout/base.html.twig", 5)->display($context);
        // line 6
        echo "
        ";
        // line 7
        $this->loadTemplate("AppBundle::Helper/messages.html.twig", "FrontBundle::Layout/base.html.twig", 7)->display($context);
        // line 8
        echo "
        <div class=\"main-wrapper\">
            ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "        </div><!-- /.main-wrapper -->

        ";
        // line 13
        $this->loadTemplate("FrontBundle::Helper/cta.html.twig", "FrontBundle::Layout/base.html.twig", 13)->display($context);
        // line 14
        echo "        
        ";
        // line 15
        $this->loadTemplate("FrontBundle::Helper/footer.html.twig", "FrontBundle::Layout/base.html.twig", 15)->display($context);
        // line 16
        echo "    </div><!-- /page-wrapper -->
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontBundle::Layout/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  59 => 16,  57 => 15,  54 => 14,  52 => 13,  48 => 11,  46 => 10,  42 => 8,  40 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Layout/base.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Layout/base.html.twig");
    }
}
