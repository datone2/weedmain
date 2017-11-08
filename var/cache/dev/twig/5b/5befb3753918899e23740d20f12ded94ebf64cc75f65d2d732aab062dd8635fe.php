<?php

/* AdminBundle::Layout/base.html.twig */
class __TwigTemplate_1608c4cb69cb43eb2e25b6a29be34f86c67ebafffdf9a97537ecc8e2d00c2d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9343956f4e6d56428a86f794ac5fc2665589659bd0bee42bb9bc6c25e809e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9343956f4e6d56428a86f794ac5fc2665589659bd0bee42bb9bc6c25e809e7a->enter($__internal_c9343956f4e6d56428a86f794ac5fc2665589659bd0bee42bb9bc6c25e809e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Layout/base.html.twig"));

        $__internal_799dfa4d82d506185fac149a7f9f97e96152b4a576adbde4bc9be1bbe194c645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799dfa4d82d506185fac149a7f9f97e96152b4a576adbde4bc9be1bbe194c645->enter($__internal_799dfa4d82d506185fac149a7f9f97e96152b4a576adbde4bc9be1bbe194c645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Layout/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin - Directory Platform"), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Raleway:400,500,600,700\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Playfair+Display:400\" type=\"text/css\">

    ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "24e12ff_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_24e12ff_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/24e12ff_summernote_1.css");
            // line 16
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "24e12ff_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_24e12ff_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/24e12ff_styles_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        } else {
            // asset "24e12ff"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_24e12ff") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/24e12ff.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "</head>

<body class=\"admin ";
        // line 20
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">

<div class=\"page-wrapper\">
    ";
        // line 23
        $this->loadTemplate("AdminBundle::Helper/toolbar.html.twig", "AdminBundle::Layout/base.html.twig", 23)->display($context);
        // line 24
        echo "
    ";
        // line 25
        $this->loadTemplate("AdminBundle::Helper/sidebar.html.twig", "AdminBundle::Layout/base.html.twig", 25)->display($context);
        // line 26
        echo "
    <div class=\"main\">
        <div class=\"content\">
            <div class=\"container-fluid\">
                ";
        // line 30
        $this->loadTemplate("AdminBundle::Helper/page_title.html.twig", "AdminBundle::Layout/base.html.twig", 30)->display($context);
        // line 31
        echo "
                ";
        // line 32
        $this->loadTemplate("AppBundle::Helper/messages.html.twig", "AdminBundle::Layout/base.html.twig", 32)->display($context);
        // line 33
        echo "
                ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "            </div>
        </div><!-- /.content -->
    </div><!-- /.main -->
</div><!-- /.page-wrapper -->

";
        // line 40
        if ((isset($context["google_maps_api_key"]) || array_key_exists("google_maps_api_key", $context) ? $context["google_maps_api_key"] : (function () { throw new Twig_Error_Runtime('Variable "google_maps_api_key" does not exist.', 40, $this->getSourceContext()); })())) {
            // line 41
            echo "    <script src=\"//maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&key=";
            echo twig_escape_filter($this->env, (isset($context["google_maps_api_key"]) || array_key_exists("google_maps_api_key", $context) ? $context["google_maps_api_key"] : (function () { throw new Twig_Error_Runtime('Variable "google_maps_api_key" does not exist.', 41, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        // line 43
        echo "
";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1d254ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1d254ac_jquery.min_1.js");
            // line 52
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1d254ac_tether.min_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1d254ac_bootstrap.min_3.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1d254ac_summernote.min_4.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1d254ac_jquery.collection_5.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1d254ac_scripts_6.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        } else {
            // asset "1d254ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1d254ac.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        unset($context["asset_url"]);
        // line 54
        echo "</body>
</html>";
        
        $__internal_c9343956f4e6d56428a86f794ac5fc2665589659bd0bee42bb9bc6c25e809e7a->leave($__internal_c9343956f4e6d56428a86f794ac5fc2665589659bd0bee42bb9bc6c25e809e7a_prof);

        
        $__internal_799dfa4d82d506185fac149a7f9f97e96152b4a576adbde4bc9be1bbe194c645->leave($__internal_799dfa4d82d506185fac149a7f9f97e96152b4a576adbde4bc9be1bbe194c645_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_b45fb4af7ac4af601a31cd5e39c8980f312dddde40e3daec74f61c35668cf23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45fb4af7ac4af601a31cd5e39c8980f312dddde40e3daec74f61c35668cf23d->enter($__internal_b45fb4af7ac4af601a31cd5e39c8980f312dddde40e3daec74f61c35668cf23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_075971ee6f79bdac7455fb4ea4daae8849a328bd894d6bc8f57f5a443ae71af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075971ee6f79bdac7455fb4ea4daae8849a328bd894d6bc8f57f5a443ae71af3->enter($__internal_075971ee6f79bdac7455fb4ea4daae8849a328bd894d6bc8f57f5a443ae71af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_075971ee6f79bdac7455fb4ea4daae8849a328bd894d6bc8f57f5a443ae71af3->leave($__internal_075971ee6f79bdac7455fb4ea4daae8849a328bd894d6bc8f57f5a443ae71af3_prof);

        
        $__internal_b45fb4af7ac4af601a31cd5e39c8980f312dddde40e3daec74f61c35668cf23d->leave($__internal_b45fb4af7ac4af601a31cd5e39c8980f312dddde40e3daec74f61c35668cf23d_prof);

    }

    // line 20
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_0fd1c76fd7dd30bfa84f5087c70e35e40d58276e67ebd787079e522ae078dffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd1c76fd7dd30bfa84f5087c70e35e40d58276e67ebd787079e522ae078dffe->enter($__internal_0fd1c76fd7dd30bfa84f5087c70e35e40d58276e67ebd787079e522ae078dffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_f01e03b020b31c37f611f0bc1aff7d3c4c42ac158b1f84cc40eda360514b287a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01e03b020b31c37f611f0bc1aff7d3c4c42ac158b1f84cc40eda360514b287a->enter($__internal_f01e03b020b31c37f611f0bc1aff7d3c4c42ac158b1f84cc40eda360514b287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_f01e03b020b31c37f611f0bc1aff7d3c4c42ac158b1f84cc40eda360514b287a->leave($__internal_f01e03b020b31c37f611f0bc1aff7d3c4c42ac158b1f84cc40eda360514b287a_prof);

        
        $__internal_0fd1c76fd7dd30bfa84f5087c70e35e40d58276e67ebd787079e522ae078dffe->leave($__internal_0fd1c76fd7dd30bfa84f5087c70e35e40d58276e67ebd787079e522ae078dffe_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_f058bd4ee57e2433ea9fb42b891d258f31a03cb1729e651d5f54efbb7b936144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f058bd4ee57e2433ea9fb42b891d258f31a03cb1729e651d5f54efbb7b936144->enter($__internal_f058bd4ee57e2433ea9fb42b891d258f31a03cb1729e651d5f54efbb7b936144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_deb64a1b42ff15f1ee8cdd6382964d33bbf5bbac026d597fef1049d7578cde71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb64a1b42ff15f1ee8cdd6382964d33bbf5bbac026d597fef1049d7578cde71->enter($__internal_deb64a1b42ff15f1ee8cdd6382964d33bbf5bbac026d597fef1049d7578cde71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_deb64a1b42ff15f1ee8cdd6382964d33bbf5bbac026d597fef1049d7578cde71->leave($__internal_deb64a1b42ff15f1ee8cdd6382964d33bbf5bbac026d597fef1049d7578cde71_prof);

        
        $__internal_f058bd4ee57e2433ea9fb42b891d258f31a03cb1729e651d5f54efbb7b936144->leave($__internal_f058bd4ee57e2433ea9fb42b891d258f31a03cb1729e651d5f54efbb7b936144_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::Layout/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 34,  200 => 20,  183 => 8,  172 => 54,  128 => 52,  124 => 44,  121 => 43,  115 => 41,  113 => 40,  106 => 35,  104 => 34,  101 => 33,  99 => 32,  96 => 31,  94 => 30,  88 => 26,  86 => 25,  83 => 24,  81 => 23,  75 => 20,  71 => 18,  51 => 16,  47 => 13,  37 => 8,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">

    <title>{% block title %}{% endblock %} | {{ 'Admin - Directory Platform'|trans }}</title>
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Raleway:400,500,600,700\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Playfair+Display:400\" type=\"text/css\">

    {% stylesheets
    '@AppBundle/Resources/public/libraries/summernote/summernote.css'
    '@AdminBundle/Resources/public/css/styles.css' filter='cssrewrite' %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\">
    {% endstylesheets %}
</head>

<body class=\"admin {% block body_class %}{% endblock %}\">

<div class=\"page-wrapper\">
    {% include 'AdminBundle::Helper/toolbar.html.twig' %}

    {% include 'AdminBundle::Helper/sidebar.html.twig' %}

    <div class=\"main\">
        <div class=\"content\">
            <div class=\"container-fluid\">
                {% include 'AdminBundle::Helper/page_title.html.twig' %}

                {% include 'AppBundle::Helper/messages.html.twig' %}

                {% block content %}{% endblock %}
            </div>
        </div><!-- /.content -->
    </div><!-- /.main -->
</div><!-- /.page-wrapper -->

{% if google_maps_api_key %}
    <script src=\"//maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&key={{ google_maps_api_key }}\" type=\"text/javascript\"></script>
{% endif %}

{% javascripts
'@AppBundle/Resources/public/js/jquery.min.js'
'@AppBundle/Resources/public/js/tether.min.js'
'@AppBundle/Resources/public/js/bootstrap.min.js'
'@AppBundle/Resources/public/libraries/summernote/summernote.min.js'    
'@AppBundle/Resources/public/js/jquery.collection.js'
'@AdminBundle/Resources/public/js/scripts.js'
%}
<script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
{% endjavascripts %}
</body>
</html>", "AdminBundle::Layout/base.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Layout/base.html.twig");
    }
}
