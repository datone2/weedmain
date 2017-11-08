<?php

/* AdminBundle::Layout/base.html.twig */
class __TwigTemplate_07c92ca8745b6a8d345e5efe4626b22c89274ff3469b7677a16c9eebb7c3cf60 extends Twig_Template
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_24e12ff_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/24e12ff_summernote_1.css");
            // line 16
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "24e12ff_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_24e12ff_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/24e12ff_styles_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        } else {
            // asset "24e12ff"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_24e12ff") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/24e12ff.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
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
        if (($context["google_maps_api_key"] ?? null)) {
            // line 41
            echo "    <script src=\"//maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&key=";
            echo twig_escape_filter($this->env, ($context["google_maps_api_key"] ?? null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        // line 43
        echo "
";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1d254ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1d254ac_jquery.min_1.js");
            // line 52
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1d254ac_tether.min_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1d254ac_bootstrap.min_3.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1d254ac_summernote.min_4.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1d254ac_jquery.collection_5.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1d254ac_scripts_6.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        } else {
            // asset "1d254ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1d254ac") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1d254ac.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        unset($context["asset_url"]);
        // line 54
        echo "</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_body_class($context, array $blocks = array())
    {
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
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
        return array (  181 => 34,  176 => 20,  171 => 8,  166 => 54,  122 => 52,  118 => 44,  115 => 43,  109 => 41,  107 => 40,  100 => 35,  98 => 34,  95 => 33,  93 => 32,  90 => 31,  88 => 30,  82 => 26,  80 => 25,  77 => 24,  75 => 23,  69 => 20,  65 => 18,  45 => 16,  41 => 13,  31 => 8,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Layout/base.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Layout/base.html.twig");
    }
}
