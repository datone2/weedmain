<?php

/* FrontBundle::Layout/default.html.twig */
class __TwigTemplate_be175131bebc076cbca3680521c8952bdde8d422733b643213f82912fcef5a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8f849a621abedb0bd43617dc06cd040dcb2e31b6210e86b4598e076c29d31b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f849a621abedb0bd43617dc06cd040dcb2e31b6210e86b4598e076c29d31b7->enter($__internal_c8f849a621abedb0bd43617dc06cd040dcb2e31b6210e86b4598e076c29d31b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Layout/default.html.twig"));

        $__internal_64927620e3c3586a4dbbb782351b927a6a08d78a34b242b9cd7c5fa4c1848b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64927620e3c3586a4dbbb782351b927a6a08d78a34b242b9cd7c5fa4c1848b08->enter($__internal_64927620e3c3586a4dbbb782351b927a6a08d78a34b242b9cd7c5fa4c1848b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Layout/default.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        ";
        // line 7
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getTitle();
        echo "

        ";
        // line 9
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getMetadatas();
        echo "
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Directory Platform"), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Playfair+Display:400\" type=\"text/css\">

    ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "918cded_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_bootstrap-select.min_1.css");
            // line 27
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "918cded_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_summernote_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "918cded_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_magnific-popup_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "918cded_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_slick_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "918cded_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_nouislider.min_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "918cded_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_jssocials_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "918cded_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_jssocials-theme-minima_7.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "918cded_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_fontawesome-stars_8.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "918cded_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_fontawesome-stars-o_9.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "918cded_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_styles_10.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "918cded_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded_custom_11.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        } else {
            // asset "918cded"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_918cded") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/918cded.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "</head>

<body class=\"";
        // line 31
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">

";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 35, $this->getSourceContext()); })()), "user", array())) {
            // line 36
            echo "    ";
            $this->loadTemplate("FrontBundle::Modal/login.html.twig", "FrontBundle::Layout/default.html.twig", 36)->display($context);
            // line 37
            echo "    ";
            $this->loadTemplate("FrontBundle::Modal/register.html.twig", "FrontBundle::Layout/default.html.twig", 37)->display($context);
        }
        // line 39
        echo "
";
        // line 40
        if ((isset($context["map_styles"]) || array_key_exists("map_styles", $context) ? $context["map_styles"] : (function () { throw new Twig_Error_Runtime('Variable "map_styles" does not exist.', 40, $this->getSourceContext()); })())) {
            // line 41
            echo "    <script type=\"text/javascript\">
        var map_styles = ";
            // line 42
            echo (isset($context["map_styles"]) || array_key_exists("map_styles", $context) ? $context["map_styles"] : (function () { throw new Twig_Error_Runtime('Variable "map_styles" does not exist.', 42, $this->getSourceContext()); })());
            echo "
    </script>
";
        }
        // line 45
        echo "
";
        // line 46
        if ((isset($context["google_maps_api_key"]) || array_key_exists("google_maps_api_key", $context) ? $context["google_maps_api_key"] : (function () { throw new Twig_Error_Runtime('Variable "google_maps_api_key" does not exist.', 46, $this->getSourceContext()); })())) {
            // line 47
            echo "    <script src=\"//maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;key=";
            echo twig_escape_filter($this->env, (isset($context["google_maps_api_key"]) || array_key_exists("google_maps_api_key", $context) ? $context["google_maps_api_key"] : (function () { throw new Twig_Error_Runtime('Variable "google_maps_api_key" does not exist.', 47, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        // line 49
        echo "
";
        // line 50
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c19495c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_google-map-infobox.min_1.js");
            // line 67
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_google-map-markerclusterer_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_google-map-richmarker.min_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_jquery.min_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_jquery.collection_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_summernote.min_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_bootstrap-select.min_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_tether.min_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_bootstrap.min_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_slick.min_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_jssocials.min_11.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_wNumb_12.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_nouislider.min_13.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_jquery.barrating.min_14.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_jquery.magnific-popup.min_15.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "c19495c_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c_scripts_16.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        } else {
            // asset "c19495c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c19495c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c19495c.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 67, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        unset($context["asset_url"]);
        // line 69
        echo "
";
        // line 70
        if ((isset($context["google_analytics_code"]) || array_key_exists("google_analytics_code", $context) ? $context["google_analytics_code"] : (function () { throw new Twig_Error_Runtime('Variable "google_analytics_code" does not exist.', 70, $this->getSourceContext()); })())) {
            // line 71
            echo "    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["google_analytics_code"]) || array_key_exists("google_analytics_code", $context) ? $context["google_analytics_code"] : (function () { throw new Twig_Error_Runtime('Variable "google_analytics_code" does not exist.', 77, $this->getSourceContext()); })()), "html", null, true);
            echo "', 'auto');
        ga('send', 'pageview');
    </script>
";
        }
        // line 81
        echo "
</body>
</html>";
        
        $__internal_c8f849a621abedb0bd43617dc06cd040dcb2e31b6210e86b4598e076c29d31b7->leave($__internal_c8f849a621abedb0bd43617dc06cd040dcb2e31b6210e86b4598e076c29d31b7_prof);

        
        $__internal_64927620e3c3586a4dbbb782351b927a6a08d78a34b242b9cd7c5fa4c1848b08->leave($__internal_64927620e3c3586a4dbbb782351b927a6a08d78a34b242b9cd7c5fa4c1848b08_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_521a20e2ca7b96c9453d7dd8b640fb745b2ff69997b4b9d806c779e4b583778f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521a20e2ca7b96c9453d7dd8b640fb745b2ff69997b4b9d806c779e4b583778f->enter($__internal_521a20e2ca7b96c9453d7dd8b640fb745b2ff69997b4b9d806c779e4b583778f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff331db26d49621fee2d730a28a0cd72c79c8ec9d8143c96dc74490a44bb0236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff331db26d49621fee2d730a28a0cd72c79c8ec9d8143c96dc74490a44bb0236->enter($__internal_ff331db26d49621fee2d730a28a0cd72c79c8ec9d8143c96dc74490a44bb0236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ff331db26d49621fee2d730a28a0cd72c79c8ec9d8143c96dc74490a44bb0236->leave($__internal_ff331db26d49621fee2d730a28a0cd72c79c8ec9d8143c96dc74490a44bb0236_prof);

        
        $__internal_521a20e2ca7b96c9453d7dd8b640fb745b2ff69997b4b9d806c779e4b583778f->leave($__internal_521a20e2ca7b96c9453d7dd8b640fb745b2ff69997b4b9d806c779e4b583778f_prof);

    }

    // line 31
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a9c149e2796bb6a13febb732527afb8b4e879afb67fdecc1c529066dd13f43a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c149e2796bb6a13febb732527afb8b4e879afb67fdecc1c529066dd13f43a2->enter($__internal_a9c149e2796bb6a13febb732527afb8b4e879afb67fdecc1c529066dd13f43a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_271c80fff3c9d1593988c726512b976c7fe0eb28fde01fe7dd57d44a30857a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271c80fff3c9d1593988c726512b976c7fe0eb28fde01fe7dd57d44a30857a0a->enter($__internal_271c80fff3c9d1593988c726512b976c7fe0eb28fde01fe7dd57d44a30857a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_271c80fff3c9d1593988c726512b976c7fe0eb28fde01fe7dd57d44a30857a0a->leave($__internal_271c80fff3c9d1593988c726512b976c7fe0eb28fde01fe7dd57d44a30857a0a_prof);

        
        $__internal_a9c149e2796bb6a13febb732527afb8b4e879afb67fdecc1c529066dd13f43a2->leave($__internal_a9c149e2796bb6a13febb732527afb8b4e879afb67fdecc1c529066dd13f43a2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9145f53b149e58830078bc255c40dee9991d0066d457470dd5db44150c81e511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9145f53b149e58830078bc255c40dee9991d0066d457470dd5db44150c81e511->enter($__internal_9145f53b149e58830078bc255c40dee9991d0066d457470dd5db44150c81e511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f1f7ffd1d47b984c6109e2a36c284c5f5e46493c0f662d9f41e59573373d1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1f7ffd1d47b984c6109e2a36c284c5f5e46493c0f662d9f41e59573373d1ae->enter($__internal_6f1f7ffd1d47b984c6109e2a36c284c5f5e46493c0f662d9f41e59573373d1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f1f7ffd1d47b984c6109e2a36c284c5f5e46493c0f662d9f41e59573373d1ae->leave($__internal_6f1f7ffd1d47b984c6109e2a36c284c5f5e46493c0f662d9f41e59573373d1ae_prof);

        
        $__internal_9145f53b149e58830078bc255c40dee9991d0066d457470dd5db44150c81e511->leave($__internal_9145f53b149e58830078bc255c40dee9991d0066d457470dd5db44150c81e511_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Layout/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 33,  341 => 31,  324 => 10,  312 => 81,  305 => 77,  297 => 71,  295 => 70,  292 => 69,  188 => 67,  184 => 50,  181 => 49,  175 => 47,  173 => 46,  170 => 45,  164 => 42,  161 => 41,  159 => 40,  156 => 39,  152 => 37,  149 => 36,  147 => 35,  144 => 34,  142 => 33,  137 => 31,  133 => 29,  59 => 27,  55 => 15,  45 => 10,  41 => 9,  36 => 7,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        {{ sonata_seo_title() }}

        {{ sonata_seo_metadatas() }}
    <title>{% block title %}{% endblock %} | {{ 'Directory Platform'|trans }}</title>
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Playfair+Display:400\" type=\"text/css\">

    {% stylesheets
    '@AppBundle/Resources/public/libraries/bootstrap-select/css/bootstrap-select.min.css'
    '@AppBundle/Resources/public/libraries/summernote/summernote.css'
    '@FrontBundle/Resources/public/libraries/magnific-popup/magnific-popup.css'
    '@FrontBundle/Resources/public/libraries/slick/slick.css'    
    '@FrontBundle/Resources/public/libraries/nouislider/nouislider.min.css'    
    '@FrontBundle/Resources/public/libraries/jssocials/jssocials.css'
    '@FrontBundle/Resources/public/libraries/jssocials/jssocials-theme-minima.css'
    '@FrontBundle/Resources/public/libraries/barrating/fontawesome-stars.css'
    '@FrontBundle/Resources/public/libraries/barrating/fontawesome-stars-o.css'
    '@FrontBundle/Resources/public/css/styles.css' filter='cssrewrite'
    '@FrontBundle/Resources/public/css/custom.css' filter='cssrewrite'%}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\">
    {% endstylesheets %}
</head>

<body class=\"{% block body_class %}{% endblock %}\">

{% block body %}{% endblock %}

{% if not app.user %}
    {% include 'FrontBundle::Modal/login.html.twig' %}
    {% include 'FrontBundle::Modal/register.html.twig' %}
{% endif %}

{% if map_styles %}
    <script type=\"text/javascript\">
        var map_styles = {{ map_styles|raw }}
    </script>
{% endif %}

{% if google_maps_api_key %}
    <script src=\"//maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;key={{ google_maps_api_key }}\" type=\"text/javascript\"></script>
{% endif %}

{% javascripts
'@AppBundle/Resources/public/js/google-map-infobox.min.js'
'@AppBundle/Resources/public/js/google-map-markerclusterer.js'
'@AppBundle/Resources/public/js/google-map-richmarker.min.js'
'@AppBundle/Resources/public/js/jquery.min.js'
'@AppBundle/Resources/public/js/jquery.collection.js'
'@AppBundle/Resources/public/libraries/summernote/summernote.min.js'
'@AppBundle/Resources/public/libraries/bootstrap-select/js/bootstrap-select.min.js'
'@AppBundle/Resources/public/js/tether.min.js'
'@AppBundle/Resources/public/js/bootstrap.min.js'
'@FrontBundle/Resources/public/libraries/slick/slick.min.js'
'@FrontBundle/Resources/public/libraries/jssocials/jssocials.min.js'
'@FrontBundle/Resources/public/js/wNumb.js'
'@FrontBundle/Resources/public/libraries/nouislider/nouislider.min.js'
'@FrontBundle/Resources/public/libraries/barrating/jquery.barrating.min.js'
'@FrontBundle/Resources/public/libraries/magnific-popup/jquery.magnific-popup.min.js'
'@FrontBundle/Resources/public/js/scripts.js' %}
    <script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
{% endjavascripts %}

{% if google_analytics_code %}
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '{{ google_analytics_code }}', 'auto');
        ga('send', 'pageview');
    </script>
{% endif %}

</body>
</html>", "FrontBundle::Layout/default.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Layout/default.html.twig");
    }
}
