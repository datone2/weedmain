<?php

/* FrontBundle::Layout/base_simple.html.twig */
class __TwigTemplate_1c0834b48bcef4f7949adf5427a0c6c14c9d286b9b50d184f2197ebff5571dba extends Twig_Template
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
        $__internal_69ba194689bbc1ede37b579c3ee90f160dadef2509873b59aed3fa95e418659f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ba194689bbc1ede37b579c3ee90f160dadef2509873b59aed3fa95e418659f->enter($__internal_69ba194689bbc1ede37b579c3ee90f160dadef2509873b59aed3fa95e418659f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Layout/base_simple.html.twig"));

        $__internal_208b3961e60448d6d913a2e696b12e70394417e37a1cf1e9a9f142526c67a99b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208b3961e60448d6d913a2e696b12e70394417e37a1cf1e9a9f142526c67a99b->enter($__internal_208b3961e60448d6d913a2e696b12e70394417e37a1cf1e9a9f142526c67a99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Layout/base_simple.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69ba194689bbc1ede37b579c3ee90f160dadef2509873b59aed3fa95e418659f->leave($__internal_69ba194689bbc1ede37b579c3ee90f160dadef2509873b59aed3fa95e418659f_prof);

        
        $__internal_208b3961e60448d6d913a2e696b12e70394417e37a1cf1e9a9f142526c67a99b->leave($__internal_208b3961e60448d6d913a2e696b12e70394417e37a1cf1e9a9f142526c67a99b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7620fd4059b1eab726eab7c8bcaf2b63b2bbd755681fbe865b5f10ce7962081e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7620fd4059b1eab726eab7c8bcaf2b63b2bbd755681fbe865b5f10ce7962081e->enter($__internal_7620fd4059b1eab726eab7c8bcaf2b63b2bbd755681fbe865b5f10ce7962081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f144c5e8b9bf2897cbf5fc4ca17669f3a441868c8a25f4241da3a8b792324991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f144c5e8b9bf2897cbf5fc4ca17669f3a441868c8a25f4241da3a8b792324991->enter($__internal_f144c5e8b9bf2897cbf5fc4ca17669f3a441868c8a25f4241da3a8b792324991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f144c5e8b9bf2897cbf5fc4ca17669f3a441868c8a25f4241da3a8b792324991->leave($__internal_f144c5e8b9bf2897cbf5fc4ca17669f3a441868c8a25f4241da3a8b792324991_prof);

        
        $__internal_7620fd4059b1eab726eab7c8bcaf2b63b2bbd755681fbe865b5f10ce7962081e->leave($__internal_7620fd4059b1eab726eab7c8bcaf2b63b2bbd755681fbe865b5f10ce7962081e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_9014a28dd81a388d555af1d10bb457288443a3423bf825fb5c718cce2eec85da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9014a28dd81a388d555af1d10bb457288443a3423bf825fb5c718cce2eec85da->enter($__internal_9014a28dd81a388d555af1d10bb457288443a3423bf825fb5c718cce2eec85da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fd87f089fcd8f4a98204f6d236eab20aceb88dec85545a42879e4efe28bde023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd87f089fcd8f4a98204f6d236eab20aceb88dec85545a42879e4efe28bde023->enter($__internal_fd87f089fcd8f4a98204f6d236eab20aceb88dec85545a42879e4efe28bde023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fd87f089fcd8f4a98204f6d236eab20aceb88dec85545a42879e4efe28bde023->leave($__internal_fd87f089fcd8f4a98204f6d236eab20aceb88dec85545a42879e4efe28bde023_prof);

        
        $__internal_9014a28dd81a388d555af1d10bb457288443a3423bf825fb5c718cce2eec85da->leave($__internal_9014a28dd81a388d555af1d10bb457288443a3423bf825fb5c718cce2eec85da_prof);

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
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/default.html.twig' %}

{% block body %}
    <div class=\"page-wrapper\">
        <div class=\"main-wrapper\">
            <div class=\"container\">
                {% block content %}{% endblock %}
            </div><!-- /.container -->
        </div><!-- /.main-wrapper -->
    </div><!-- /page-wrapper -->
{% endblock %}
", "FrontBundle::Layout/base_simple.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Layout/base_simple.html.twig");
    }
}
