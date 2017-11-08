<?php

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_bedaf01ceee107f1ea9a6cb3ef0e3c19f002e33b67ef5f88441f31d0c93d1010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82ae709ce1669522e7f5b1b73f76cd5e223c50dafe61365c5742bea6b0f145d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ae709ce1669522e7f5b1b73f76cd5e223c50dafe61365c5742bea6b0f145d9->enter($__internal_82ae709ce1669522e7f5b1b73f76cd5e223c50dafe61365c5742bea6b0f145d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        $__internal_364ff6abf58df0364715cb92fcb2cfb443fab9daef8e14eb3fb33456c62c97cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364ff6abf58df0364715cb92fcb2cfb443fab9daef8e14eb3fb33456c62c97cb->enter($__internal_364ff6abf58df0364715cb92fcb2cfb443fab9daef8e14eb3fb33456c62c97cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_82ae709ce1669522e7f5b1b73f76cd5e223c50dafe61365c5742bea6b0f145d9->leave($__internal_82ae709ce1669522e7f5b1b73f76cd5e223c50dafe61365c5742bea6b0f145d9_prof);

        
        $__internal_364ff6abf58df0364715cb92fcb2cfb443fab9daef8e14eb3fb33456c62c97cb->leave($__internal_364ff6abf58df0364715cb92fcb2cfb443fab9daef8e14eb3fb33456c62c97cb_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_3e4b7c0eb2b926fb5b757bc0cc5566995ceb41bee00acf4af054fd1a049fac31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4b7c0eb2b926fb5b757bc0cc5566995ceb41bee00acf4af054fd1a049fac31->enter($__internal_3e4b7c0eb2b926fb5b757bc0cc5566995ceb41bee00acf4af054fd1a049fac31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_d872f5de8f6ab872417b6a160481377c55b0323d730e89e9da0ffe0847c4db9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d872f5de8f6ab872417b6a160481377c55b0323d730e89e9da0ffe0847c4db9a->enter($__internal_d872f5de8f6ab872417b6a160481377c55b0323d730e89e9da0ffe0847c4db9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d872f5de8f6ab872417b6a160481377c55b0323d730e89e9da0ffe0847c4db9a->leave($__internal_d872f5de8f6ab872417b6a160481377c55b0323d730e89e9da0ffe0847c4db9a_prof);

        
        $__internal_3e4b7c0eb2b926fb5b757bc0cc5566995ceb41bee00acf4af054fd1a049fac31->leave($__internal_3e4b7c0eb2b926fb5b757bc0cc5566995ceb41bee00acf4af054fd1a049fac31_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_bf91bc434fa6b6758811dc0e73ad64be776e793a3a85233677368bb44f171dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf91bc434fa6b6758811dc0e73ad64be776e793a3a85233677368bb44f171dd9->enter($__internal_bf91bc434fa6b6758811dc0e73ad64be776e793a3a85233677368bb44f171dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_2902779e609f204dadb6dd17ae15ce70142d3d05918e463225af7d2b1e62b631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2902779e609f204dadb6dd17ae15ce70142d3d05918e463225af7d2b1e62b631->enter($__internal_2902779e609f204dadb6dd17ae15ce70142d3d05918e463225af7d2b1e62b631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2902779e609f204dadb6dd17ae15ce70142d3d05918e463225af7d2b1e62b631->leave($__internal_2902779e609f204dadb6dd17ae15ce70142d3d05918e463225af7d2b1e62b631_prof);

        
        $__internal_bf91bc434fa6b6758811dc0e73ad64be776e793a3a85233677368bb44f171dd9->leave($__internal_bf91bc434fa6b6758811dc0e73ad64be776e793a3a85233677368bb44f171dd9_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_c7c845d569a828ee2077b37b0022f362d15b592aa6643dfc1609a3792b46efcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c845d569a828ee2077b37b0022f362d15b592aa6643dfc1609a3792b46efcf->enter($__internal_c7c845d569a828ee2077b37b0022f362d15b592aa6643dfc1609a3792b46efcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_f0ae75ce950d501a73f29d07241a0d21a6b718c7bc2de39eb39101ddb63fe107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ae75ce950d501a73f29d07241a0d21a6b718c7bc2de39eb39101ddb63fe107->enter($__internal_f0ae75ce950d501a73f29d07241a0d21a6b718c7bc2de39eb39101ddb63fe107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f0ae75ce950d501a73f29d07241a0d21a6b718c7bc2de39eb39101ddb63fe107->leave($__internal_f0ae75ce950d501a73f29d07241a0d21a6b718c7bc2de39eb39101ddb63fe107_prof);

        
        $__internal_c7c845d569a828ee2077b37b0022f362d15b592aa6643dfc1609a3792b46efcf->leave($__internal_c7c845d569a828ee2077b37b0022f362d15b592aa6643dfc1609a3792b46efcf_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_f6155731a75df041444ebf3d42e9e55c73a12727ce794d95cec2a02843959e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6155731a75df041444ebf3d42e9e55c73a12727ce794d95cec2a02843959e0f->enter($__internal_f6155731a75df041444ebf3d42e9e55c73a12727ce794d95cec2a02843959e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_d6a4e73ef640cba329ed46c454b4062dcef176d2d5a4e1191c6a3747aa46ea73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a4e73ef640cba329ed46c454b4062dcef176d2d5a4e1191c6a3747aa46ea73->enter($__internal_d6a4e73ef640cba329ed46c454b4062dcef176d2d5a4e1191c6a3747aa46ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        if ( !(isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 29, $this->getSourceContext()); })())) {
            // line 30
            echo "                <div class=\"vich-placeholder\">
                    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "file", array()), 'widget');
            echo "

                    <div class=\"vich-placeholder-label\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select File"), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 36
        echo "
            ";
        // line 37
        if ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 37, $this->getSourceContext()); })())) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 40
        echo "
            ";
        // line 41
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 41, $this->getSourceContext()); })())) {
            // line 42
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 42, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 42, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 42, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 42, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 46
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 48
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d6a4e73ef640cba329ed46c454b4062dcef176d2d5a4e1191c6a3747aa46ea73->leave($__internal_d6a4e73ef640cba329ed46c454b4062dcef176d2d5a4e1191c6a3747aa46ea73_prof);

        
        $__internal_f6155731a75df041444ebf3d42e9e55c73a12727ce794d95cec2a02843959e0f->leave($__internal_f6155731a75df041444ebf3d42e9e55c73a12727ce794d95cec2a02843959e0f_prof);

    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  216 => 48,  210 => 46,  208 => 45,  205 => 44,  197 => 42,  195 => 41,  192 => 40,  184 => 38,  182 => 37,  179 => 36,  173 => 33,  168 => 31,  165 => 30,  163 => 29,  160 => 28,  157 => 27,  148 => 26,  138 => 23,  136 => 22,  127 => 21,  115 => 17,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  90 => 9,  87 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
    {% spaceless %}
        <div class=\"vich-file\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
    {% spaceless %}
        <div class=\"vich-image\">
            {% if not image_uri %}
                <div class=\"vich-placeholder\">
                    {{ form_widget(form.file) }}

                    <div class=\"vich-placeholder-label\">{{ 'Select File'|trans }}</div>
                </div>
            {% endif %}

            {% if image_uri %}
                <a href=\"{{ image_uri }}\"><img src=\"{{ image_uri }}\" alt=\"\" /></a>
            {% endif %}

            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}

            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "@VichUploader/Form/fields.html.twig", "/home/weedmain/dispensary.weedmain.com/app/Resources/VichUploaderBundle/views/Form/fields.html.twig");
    }
}
