<?php

/* FrontBundle::Layout/base.html.twig */
class __TwigTemplate_b10a2c6a5d687fb35446df6b2e7657ebc9797ca95fe69a36fa27cb9b4b0479aa extends Twig_Template
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
        $__internal_de50c35c3d4cbd32c9f05ad9a9125451813bf11068f07d8e50c71551f4b4c885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de50c35c3d4cbd32c9f05ad9a9125451813bf11068f07d8e50c71551f4b4c885->enter($__internal_de50c35c3d4cbd32c9f05ad9a9125451813bf11068f07d8e50c71551f4b4c885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Layout/base.html.twig"));

        $__internal_3c855150605caf9d4d0a92af8a01d71712c5a80b117543070f3afc99660bb669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c855150605caf9d4d0a92af8a01d71712c5a80b117543070f3afc99660bb669->enter($__internal_3c855150605caf9d4d0a92af8a01d71712c5a80b117543070f3afc99660bb669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Layout/base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de50c35c3d4cbd32c9f05ad9a9125451813bf11068f07d8e50c71551f4b4c885->leave($__internal_de50c35c3d4cbd32c9f05ad9a9125451813bf11068f07d8e50c71551f4b4c885_prof);

        
        $__internal_3c855150605caf9d4d0a92af8a01d71712c5a80b117543070f3afc99660bb669->leave($__internal_3c855150605caf9d4d0a92af8a01d71712c5a80b117543070f3afc99660bb669_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff8db8a35cfbece50e7fa24fc5ad1d91ad48af880a5491229b16a435692b7406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8db8a35cfbece50e7fa24fc5ad1d91ad48af880a5491229b16a435692b7406->enter($__internal_ff8db8a35cfbece50e7fa24fc5ad1d91ad48af880a5491229b16a435692b7406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_378fed570d123f750857c00d68b8857f895122230a0262caa5568625b469b32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378fed570d123f750857c00d68b8857f895122230a0262caa5568625b469b32f->enter($__internal_378fed570d123f750857c00d68b8857f895122230a0262caa5568625b469b32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_378fed570d123f750857c00d68b8857f895122230a0262caa5568625b469b32f->leave($__internal_378fed570d123f750857c00d68b8857f895122230a0262caa5568625b469b32f_prof);

        
        $__internal_ff8db8a35cfbece50e7fa24fc5ad1d91ad48af880a5491229b16a435692b7406->leave($__internal_ff8db8a35cfbece50e7fa24fc5ad1d91ad48af880a5491229b16a435692b7406_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f12b06293d2d649eee56b6708a669b350d139805b0d200e4b1ac5f948ee34e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f12b06293d2d649eee56b6708a669b350d139805b0d200e4b1ac5f948ee34e8->enter($__internal_9f12b06293d2d649eee56b6708a669b350d139805b0d200e4b1ac5f948ee34e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a98193fcb4857f39f31d08ae7a4a6fdcd0ffe2b882aac488e7183751d94a49cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98193fcb4857f39f31d08ae7a4a6fdcd0ffe2b882aac488e7183751d94a49cd->enter($__internal_a98193fcb4857f39f31d08ae7a4a6fdcd0ffe2b882aac488e7183751d94a49cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a98193fcb4857f39f31d08ae7a4a6fdcd0ffe2b882aac488e7183751d94a49cd->leave($__internal_a98193fcb4857f39f31d08ae7a4a6fdcd0ffe2b882aac488e7183751d94a49cd_prof);

        
        $__internal_9f12b06293d2d649eee56b6708a669b350d139805b0d200e4b1ac5f948ee34e8->leave($__internal_9f12b06293d2d649eee56b6708a669b350d139805b0d200e4b1ac5f948ee34e8_prof);

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
        return array (  88 => 10,  77 => 16,  75 => 15,  72 => 14,  70 => 13,  66 => 11,  64 => 10,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/default.html.twig' %}

{% block body %}
    <div class=\"page-wrapper\">
        {% include('FrontBundle::Helper/header.html.twig') %}

        {% include('AppBundle::Helper/messages.html.twig') %}

        <div class=\"main-wrapper\">
            {% block content %}{% endblock %}
        </div><!-- /.main-wrapper -->

        {% include('FrontBundle::Helper/cta.html.twig') %}
        
        {% include('FrontBundle::Helper/footer.html.twig') %}
    </div><!-- /page-wrapper -->
{% endblock %}", "FrontBundle::Layout/base.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Layout/base.html.twig");
    }
}
