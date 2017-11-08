<?php

/* FrontBundle::Listing/index.html.twig */
class __TwigTemplate_4867b0121cb221a0267efaaba4e3631a131472d76c9d8d59c150eaffa753ec3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base_fullwidth.html.twig", "FrontBundle::Listing/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base_fullwidth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcb5877df5d16c47aff8cf908743a651f7fbc8fa6c5f6ff837336c96338d744a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb5877df5d16c47aff8cf908743a651f7fbc8fa6c5f6ff837336c96338d744a->enter($__internal_dcb5877df5d16c47aff8cf908743a651f7fbc8fa6c5f6ff837336c96338d744a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/index.html.twig"));

        $__internal_19666e25f573897146ab3ff91e41a5600a175d96c6f30629ac17065d18c9ff2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19666e25f573897146ab3ff91e41a5600a175d96c6f30629ac17065d18c9ff2c->enter($__internal_19666e25f573897146ab3ff91e41a5600a175d96c6f30629ac17065d18c9ff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/index.html.twig"));

        // line 3
        $context["menu_active"] = "listings";
        // line 5
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listings & Classifieds");
        // line 7
        $context["actions"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_create", array("entity" => "listing")), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save Search Query")));
        // line 14
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listings")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb5877df5d16c47aff8cf908743a651f7fbc8fa6c5f6ff837336c96338d744a->leave($__internal_dcb5877df5d16c47aff8cf908743a651f7fbc8fa6c5f6ff837336c96338d744a_prof);

        
        $__internal_19666e25f573897146ab3ff91e41a5600a175d96c6f30629ac17065d18c9ff2c->leave($__internal_19666e25f573897146ab3ff91e41a5600a175d96c6f30629ac17065d18c9ff2c_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_eee577b5e6b3ea0eb29cae72f433aca1ff08e79c9d36bd87b5175e1e6d4f384d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee577b5e6b3ea0eb29cae72f433aca1ff08e79c9d36bd87b5175e1e6d4f384d->enter($__internal_eee577b5e6b3ea0eb29cae72f433aca1ff08e79c9d36bd87b5175e1e6d4f384d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0281025dcc1097a99afaa6a4c807881ea666a1b594e079b56e1893fae00bfb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0281025dcc1097a99afaa6a4c807881ea666a1b594e079b56e1893fae00bfb5d->enter($__internal_0281025dcc1097a99afaa6a4c807881ea666a1b594e079b56e1893fae00bfb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_0281025dcc1097a99afaa6a4c807881ea666a1b594e079b56e1893fae00bfb5d->leave($__internal_0281025dcc1097a99afaa6a4c807881ea666a1b594e079b56e1893fae00bfb5d_prof);

        
        $__internal_eee577b5e6b3ea0eb29cae72f433aca1ff08e79c9d36bd87b5175e1e6d4f384d->leave($__internal_eee577b5e6b3ea0eb29cae72f433aca1ff08e79c9d36bd87b5175e1e6d4f384d_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_6551e0701fcee2fdee2b1518262da443d9ed4657b1286087fe285d92ceef299b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6551e0701fcee2fdee2b1518262da443d9ed4657b1286087fe285d92ceef299b->enter($__internal_6551e0701fcee2fdee2b1518262da443d9ed4657b1286087fe285d92ceef299b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3c8bcc409a208f28b637b5c48e334c4ef67eac06e9a92baf285186f50fae6f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8bcc409a208f28b637b5c48e334c4ef67eac06e9a92baf285186f50fae6f43->enter($__internal_3c8bcc409a208f28b637b5c48e334c4ef67eac06e9a92baf285186f50fae6f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "\t    
\t<div class=\"content content-map-results\">
\t\t<div class=\"container-fluid\"> 
\t\t\t<div class=\"filter-wrapper\">
\t\t\t\t<div class=\"filter\">
\t\t\t        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 30, $this->getSourceContext()); })()), 'form_start');
        echo "
\t\t\t        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        echo "
\t\t\t        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 32, $this->getSourceContext()); })()), 'form_end');
        echo "
\t\t    \t</div><!-- /.filter -->
\t    \t</div><!-- /.filter-wrapper -->
\t            
\t        ";
        // line 36
        $this->loadTemplate("FrontBundle::Listing/options.html.twig", "FrontBundle::Listing/index.html.twig", 36)->display($context);
        echo " 

\t\t\t";
        // line 38
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 38, $this->getSourceContext()); })()))) {
            echo "\t\t\t\t
\t\t\t\t";
            // line 39
            if (((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 39, $this->getSourceContext()); })()) == "grid")) {
                // line 40
                echo "\t\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t\t";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 41, $this->getSourceContext()); })()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t";
                    // line 43
                    $this->loadTemplate("FrontBundle::Listing/box.html.twig", "FrontBundle::Listing/index.html.twig", 43)->display($context);
                    // line 44
                    echo "\t\t\t\t\t\t\t</div><!-- /.col-* -->\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t\t
\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t";
            } elseif ((            // line 47
(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 47, $this->getSourceContext()); })()) == "row")) {
                echo "\t\t\t\t\t\t
\t\t\t\t\t";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 48, $this->getSourceContext()); })()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                    // line 49
                    echo "\t\t\t\t\t\t";
                    $this->loadTemplate("FrontBundle::Listing/row.html.twig", "FrontBundle::Listing/index.html.twig", 49)->display($context);
                    echo "\t\t\t\t\t\t
\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t\t\t";
            }
            // line 52
            echo "\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t";
            $this->loadTemplate("AppBundle::Helper/empty.html.twig", "FrontBundle::Listing/index.html.twig", 53)->display($context);
            // line 54
            echo "\t\t\t";
        }
        // line 55
        echo "\t\t</div><!-- /.container -->
\t</div><!-- /.content -->\t

\t<div class=\"content-map\">
\t\t<div class=\"content-map-inner\">
\t\t\t<div id=\"google-map-markers\" 
\t\t\t\t";
        // line 61
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "place_latitude"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "place_longitude"), "method"))) {
            // line 62
            echo "\t\t\t\t\tdata-latitude=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 62, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "place_latitude"), "method"), "html", null, true);
            echo "\"
\t\t\t\t\tdata-longitude=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 63, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "place_longitude"), "method"), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t class=\"google-map-markers\">
\t\t\t\t \t";
        // line 66
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 66, $this->getSourceContext()); })()))) {
            // line 67
            echo "\t\t\t\t \t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 67, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                // line 68
                echo "\t\t\t\t \t\t\t";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getLatitude", array(), "method") && twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getLongitude", array(), "method"))) {
                    // line 69
                    echo "\t\t\t\t \t\t\t\t";
                    ob_start();
                    echo "<div data-latitude=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getLatitude", array(), "method"), "html", null, true);
                    echo "\" 
\t\t\t\t \t\t\t\t\t data-longitude=\"";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getLongitude", array(), "method"), "html", null, true);
                    echo "\"
\t\t\t\t \t\t\t\t\t data-link=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getSlug", array(), "method"))), "html", null, true);
                    echo "\"
\t\t\t\t \t\t\t\t\t data-id=\"";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"), "html", null, true);
                    echo "\"
\t\t\t\t \t\t\t\t\t ";
                    // line 73
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getPrice", array(), "method")) {
                        echo "data-price=\"";
                        echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getPrice", array(), "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 73, $this->getSourceContext()); })())), "html", null, true);
                        echo "\"";
                    }
                    // line 74
                    echo "\t\t\t\t \t\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getName", array(), "method")) {
                        echo "data-name=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getName", array(), "method"), "html", null, true);
                        echo "\"";
                    }
                    // line 75
                    echo "\t\t\t\t \t\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getAddress", array(), "method")) {
                        echo "data-address=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getAddress", array(), "method"), "html", null, true);
                        echo "\"";
                    }
                    // line 76
                    echo "\t\t\t\t \t\t\t\t     ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getFeaturedImage", array(), "method")) {
                        echo "data-image=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getFeaturedImage", array(), "method"), "image"), "html", null, true);
                        echo "\"";
                    }
                    echo "></div>";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 77
                    echo "\t\t\t\t \t\t\t";
                }
                // line 78
                echo "\t\t\t\t \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t \t";
        }
        // line 80
        echo "\t\t\t</div><!-- /.google-map-markers -->
\t\t</div><!-- /.content-map-inner -->

\t\t<div class=\"content-map-actions\">
\t\t\t<div id=\"google-map-action-zoom-in\" class=\"content-map-action\">
\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t</div><!-- /.content-map-action -->

\t\t\t<div id=\"google-map-action-zoom-out\" class=\"content-map-action\">
\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t</div><!-- /.content-map-action -->\t\t\t\t
\t\t</div><!-- /.content-map-actions -->\t\t
\t</div><!-- /.content-map -->
";
        
        $__internal_3c8bcc409a208f28b637b5c48e334c4ef67eac06e9a92baf285186f50fae6f43->leave($__internal_3c8bcc409a208f28b637b5c48e334c4ef67eac06e9a92baf285186f50fae6f43_prof);

        
        $__internal_6551e0701fcee2fdee2b1518262da443d9ed4657b1286087fe285d92ceef299b->leave($__internal_6551e0701fcee2fdee2b1518262da443d9ed4657b1286087fe285d92ceef299b_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 80,  293 => 79,  287 => 78,  284 => 77,  275 => 76,  268 => 75,  261 => 74,  255 => 73,  251 => 72,  247 => 71,  243 => 70,  236 => 69,  233 => 68,  228 => 67,  226 => 66,  223 => 65,  218 => 63,  213 => 62,  211 => 61,  203 => 55,  200 => 54,  197 => 53,  194 => 52,  191 => 51,  174 => 49,  157 => 48,  153 => 47,  149 => 45,  134 => 44,  132 => 43,  112 => 41,  109 => 40,  107 => 39,  103 => 38,  98 => 36,  91 => 32,  87 => 31,  83 => 30,  68 => 25,  50 => 23,  40 => 1,  38 => 14,  36 => 7,  34 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base_fullwidth.html.twig' %}

{% set menu_active = 'listings' %}

{% set title = 'Listings & Classifieds'|trans %}
\t
{% set actions = [
\t{\t\t
\t\t'link': path('search_create', {'entity': 'listing'}),
\t\t'title': 'Save Search Query'|trans
\t}
] %}

{% set breadcrumbs = [
    {
        'link': path('homepage'), 'title': 'Home'|trans,
    },
    {
        'title': 'Listings'|trans
    }
] %}

{% block title %}{{ title }}{% endblock %}

{% block content %}\t    
\t<div class=\"content content-map-results\">
\t\t<div class=\"container-fluid\"> 
\t\t\t<div class=\"filter-wrapper\">
\t\t\t\t<div class=\"filter\">
\t\t\t        {{ form_start(filter) }}
\t\t\t        {{ form_widget(filter) }}
\t\t\t        {{ form_end(filter) }}
\t\t    \t</div><!-- /.filter -->
\t    \t</div><!-- /.filter-wrapper -->
\t            
\t        {% include 'FrontBundle::Listing/options.html.twig' %} 

\t\t\t{% if listings|length %}\t\t\t\t
\t\t\t\t{% if display == 'grid' %}
\t\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t\t{% for listing in listings %}\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t{% include 'FrontBundle::Listing/box.html.twig' %}
\t\t\t\t\t\t\t</div><!-- /.col-* -->\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}\t\t\t\t\t
\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t{% elseif display == 'row' %}\t\t\t\t\t\t
\t\t\t\t\t{% for listing in listings %}
\t\t\t\t\t\t{% include 'FrontBundle::Listing/row.html.twig' %}\t\t\t\t\t\t
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t{% else %}
\t\t\t\t{% include 'AppBundle::Helper/empty.html.twig' %}
\t\t\t{% endif %}
\t\t</div><!-- /.container -->
\t</div><!-- /.content -->\t

\t<div class=\"content-map\">
\t\t<div class=\"content-map-inner\">
\t\t\t<div id=\"google-map-markers\" 
\t\t\t\t{% if app.request.get('place_latitude') and app.request.get('place_longitude') %}
\t\t\t\t\tdata-latitude=\"{{ app.request.get('place_latitude')}}\"
\t\t\t\t\tdata-longitude=\"{{ app.request.get('place_longitude')}}\"
\t\t\t\t{% endif %}
\t\t\t\t class=\"google-map-markers\">
\t\t\t\t \t{% if listings|length %}
\t\t\t\t \t\t{% for listing in listings %}
\t\t\t\t \t\t\t{% if listing.getLatitude() and listing.getLongitude() %}
\t\t\t\t \t\t\t\t{% spaceless %}<div data-latitude=\"{{ listing.getLatitude() }}\" 
\t\t\t\t \t\t\t\t\t data-longitude=\"{{ listing.getLongitude() }}\"
\t\t\t\t \t\t\t\t\t data-link=\"{{ path('listing_detail', {'slug': listing.getSlug()}) }}\"
\t\t\t\t \t\t\t\t\t data-id=\"{{ listing.getId() }}\"
\t\t\t\t \t\t\t\t\t {% if listing.getPrice() %}data-price=\"{{ listing.getPrice()|localizedcurrency(currency) }}\"{% endif %}
\t\t\t\t \t\t\t\t\t {% if listing.getName() %}data-name=\"{{ listing.getName() }}\"{% endif %}
\t\t\t\t \t\t\t\t\t {% if listing.getAddress() %}data-address=\"{{ listing.getAddress() }}\"{% endif %}
\t\t\t\t \t\t\t\t     {% if listing.getFeaturedImage() %}data-image=\"{{ vich_uploader_asset(listing.getFeaturedImage(), 'image') }}\"{% endif %}></div>{% endspaceless %}
\t\t\t\t \t\t\t{% endif %}
\t\t\t\t \t\t{% endfor %}
\t\t\t\t \t{% endif %}
\t\t\t</div><!-- /.google-map-markers -->
\t\t</div><!-- /.content-map-inner -->

\t\t<div class=\"content-map-actions\">
\t\t\t<div id=\"google-map-action-zoom-in\" class=\"content-map-action\">
\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t</div><!-- /.content-map-action -->

\t\t\t<div id=\"google-map-action-zoom-out\" class=\"content-map-action\">
\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t</div><!-- /.content-map-action -->\t\t\t\t
\t\t</div><!-- /.content-map-actions -->\t\t
\t</div><!-- /.content-map -->
{% endblock %}", "FrontBundle::Listing/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/index.html.twig");
    }
}
