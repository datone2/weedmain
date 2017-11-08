<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_02dfc734494b68de6033f98e5c7b65a94396fe411cbe8ebcec169826c862f3de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5277af5c88a0ba7cefbced235016403f722b8e9de2de050f403b64ba1717d4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5277af5c88a0ba7cefbced235016403f722b8e9de2de050f403b64ba1717d4c7->enter($__internal_5277af5c88a0ba7cefbced235016403f722b8e9de2de050f403b64ba1717d4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cdefbea9ab3feac0a450de9ea14ee61684ffc68866b2688140f20744800c2b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdefbea9ab3feac0a450de9ea14ee61684ffc68866b2688140f20744800c2b33->enter($__internal_cdefbea9ab3feac0a450de9ea14ee61684ffc68866b2688140f20744800c2b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5277af5c88a0ba7cefbced235016403f722b8e9de2de050f403b64ba1717d4c7->leave($__internal_5277af5c88a0ba7cefbced235016403f722b8e9de2de050f403b64ba1717d4c7_prof);

        
        $__internal_cdefbea9ab3feac0a450de9ea14ee61684ffc68866b2688140f20744800c2b33->leave($__internal_cdefbea9ab3feac0a450de9ea14ee61684ffc68866b2688140f20744800c2b33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae4273107fb12ad0cd55cd833ccf58cf7404beca666bd83e03a4a808aaae3a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4273107fb12ad0cd55cd833ccf58cf7404beca666bd83e03a4a808aaae3a11->enter($__internal_ae4273107fb12ad0cd55cd833ccf58cf7404beca666bd83e03a4a808aaae3a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98e4c27d40c00bab1ac6d52ef49fb10690f3b8489d835d73da3d8d0f070013ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e4c27d40c00bab1ac6d52ef49fb10690f3b8489d835d73da3d8d0f070013ad->enter($__internal_98e4c27d40c00bab1ac6d52ef49fb10690f3b8489d835d73da3d8d0f070013ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_98e4c27d40c00bab1ac6d52ef49fb10690f3b8489d835d73da3d8d0f070013ad->leave($__internal_98e4c27d40c00bab1ac6d52ef49fb10690f3b8489d835d73da3d8d0f070013ad_prof);

        
        $__internal_ae4273107fb12ad0cd55cd833ccf58cf7404beca666bd83e03a4a808aaae3a11->leave($__internal_ae4273107fb12ad0cd55cd833ccf58cf7404beca666bd83e03a4a808aaae3a11_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3501b3fd1eed1d3fae9ae72acef7e4c8536d952af8d957c4a3ba9c57d88cdce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3501b3fd1eed1d3fae9ae72acef7e4c8536d952af8d957c4a3ba9c57d88cdce->enter($__internal_f3501b3fd1eed1d3fae9ae72acef7e4c8536d952af8d957c4a3ba9c57d88cdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6f46e6c68b1fb7ab8b9173cecaac836774ea6687ab0ad764b58cf345c8c408b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f46e6c68b1fb7ab8b9173cecaac836774ea6687ab0ad764b58cf345c8c408b->enter($__internal_f6f46e6c68b1fb7ab8b9173cecaac836774ea6687ab0ad764b58cf345c8c408b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f6f46e6c68b1fb7ab8b9173cecaac836774ea6687ab0ad764b58cf345c8c408b->leave($__internal_f6f46e6c68b1fb7ab8b9173cecaac836774ea6687ab0ad764b58cf345c8c408b_prof);

        
        $__internal_f3501b3fd1eed1d3fae9ae72acef7e4c8536d952af8d957c4a3ba9c57d88cdce->leave($__internal_f3501b3fd1eed1d3fae9ae72acef7e4c8536d952af8d957c4a3ba9c57d88cdce_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_916ed7727b11b90345c98b8e72cb00f9ecc5d547306bcb2612abf06bb0b73617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916ed7727b11b90345c98b8e72cb00f9ecc5d547306bcb2612abf06bb0b73617->enter($__internal_916ed7727b11b90345c98b8e72cb00f9ecc5d547306bcb2612abf06bb0b73617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cae2eb8aa3410804032f02eb0ac16d2475c4696f7c00528e374b477c7e3c393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cae2eb8aa3410804032f02eb0ac16d2475c4696f7c00528e374b477c7e3c393->enter($__internal_5cae2eb8aa3410804032f02eb0ac16d2475c4696f7c00528e374b477c7e3c393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5cae2eb8aa3410804032f02eb0ac16d2475c4696f7c00528e374b477c7e3c393->leave($__internal_5cae2eb8aa3410804032f02eb0ac16d2475c4696f7c00528e374b477c7e3c393_prof);

        
        $__internal_916ed7727b11b90345c98b8e72cb00f9ecc5d547306bcb2612abf06bb0b73617->leave($__internal_916ed7727b11b90345c98b8e72cb00f9ecc5d547306bcb2612abf06bb0b73617_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/weedmain/dispensary.weedmain.com/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
