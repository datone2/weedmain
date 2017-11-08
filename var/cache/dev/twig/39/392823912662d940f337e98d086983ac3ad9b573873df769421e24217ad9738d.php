<?php

/* FrontBundle::Layout/base_fullwidth.html.twig */
class __TwigTemplate_dc5e35e095feb6f462fddc107108a98b3e5f834061d1a0b90281d66cf6872dab extends Twig_Template
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
        $__internal_dfeaf52a28ffa77352e464e57b71363dbd2e69396cdc4c89c973c8d296bfbc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfeaf52a28ffa77352e464e57b71363dbd2e69396cdc4c89c973c8d296bfbc33->enter($__internal_dfeaf52a28ffa77352e464e57b71363dbd2e69396cdc4c89c973c8d296bfbc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Layout/base_fullwidth.html.twig"));

        $__internal_79d1f6ae49ba51d43262ba1f62f828e305aaff236d23319916fd8f832bb1e7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d1f6ae49ba51d43262ba1f62f828e305aaff236d23319916fd8f832bb1e7b8->enter($__internal_79d1f6ae49ba51d43262ba1f62f828e305aaff236d23319916fd8f832bb1e7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Layout/base_fullwidth.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfeaf52a28ffa77352e464e57b71363dbd2e69396cdc4c89c973c8d296bfbc33->leave($__internal_dfeaf52a28ffa77352e464e57b71363dbd2e69396cdc4c89c973c8d296bfbc33_prof);

        
        $__internal_79d1f6ae49ba51d43262ba1f62f828e305aaff236d23319916fd8f832bb1e7b8->leave($__internal_79d1f6ae49ba51d43262ba1f62f828e305aaff236d23319916fd8f832bb1e7b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d00c115484de1672c34a0c37d55953b845dc5ae6f53ec38ad61c58624e56de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d00c115484de1672c34a0c37d55953b845dc5ae6f53ec38ad61c58624e56de2->enter($__internal_2d00c115484de1672c34a0c37d55953b845dc5ae6f53ec38ad61c58624e56de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a820ba83f21020cef911564d122b20b4adfbc30120127adaa0035e3b6d7a365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a820ba83f21020cef911564d122b20b4adfbc30120127adaa0035e3b6d7a365->enter($__internal_4a820ba83f21020cef911564d122b20b4adfbc30120127adaa0035e3b6d7a365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a820ba83f21020cef911564d122b20b4adfbc30120127adaa0035e3b6d7a365->leave($__internal_4a820ba83f21020cef911564d122b20b4adfbc30120127adaa0035e3b6d7a365_prof);

        
        $__internal_2d00c115484de1672c34a0c37d55953b845dc5ae6f53ec38ad61c58624e56de2->leave($__internal_2d00c115484de1672c34a0c37d55953b845dc5ae6f53ec38ad61c58624e56de2_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_283f7fda17561cb23615d3589f97aa67dae24499e044a75e519d318e5d4cc7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283f7fda17561cb23615d3589f97aa67dae24499e044a75e519d318e5d4cc7da->enter($__internal_283f7fda17561cb23615d3589f97aa67dae24499e044a75e519d318e5d4cc7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e6263a0b800d103f5d5cf16ca8ca53cf241a5dfcd0ed09ebb971c52075396514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6263a0b800d103f5d5cf16ca8ca53cf241a5dfcd0ed09ebb971c52075396514->enter($__internal_e6263a0b800d103f5d5cf16ca8ca53cf241a5dfcd0ed09ebb971c52075396514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e6263a0b800d103f5d5cf16ca8ca53cf241a5dfcd0ed09ebb971c52075396514->leave($__internal_e6263a0b800d103f5d5cf16ca8ca53cf241a5dfcd0ed09ebb971c52075396514_prof);

        
        $__internal_283f7fda17561cb23615d3589f97aa67dae24499e044a75e519d318e5d4cc7da->leave($__internal_283f7fda17561cb23615d3589f97aa67dae24499e044a75e519d318e5d4cc7da_prof);

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
        return array (  78 => 10,  66 => 11,  64 => 10,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/default.html.twig' %}

{% block body %}
    <div class=\"page-wrapper\">
        {% include('FrontBundle::Helper/header.html.twig') with {'fullwidth': true} %}

        {% include('AppBundle::Helper/messages.html.twig') %}

        <div class=\"main-wrapper fullwidth\">
            {% block content %}{% endblock %}
        </div><!-- /.main-wrapper -->
    </div><!-- /page-wrapper -->
{% endblock %}", "FrontBundle::Layout/base_fullwidth.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Layout/base_fullwidth.html.twig");
    }
}
