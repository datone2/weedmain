<?php

/* FrontBundle::Layout/base_simple.html.twig */
class __TwigTemplate_8073dc867b63096bb2bf3bb4ee8530474c02ce21c4b4abf6aa417fab5db9337e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/default.html.twig", "FrontBundle::Layout/base_simple.html.twig", 1);
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
        <div class=\"main-wrapper\">
            <div class=\"container\">
                ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "            </div><!-- /.container -->
        </div><!-- /.main-wrapper -->
    </div><!-- /page-wrapper -->
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontBundle::Layout/base_simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  39 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Layout/base_simple.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Layout/base_simple.html.twig");
    }
}
