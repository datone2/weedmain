<?php

/* AdminBundle::Helper/sidebar_navigation.html.twig */
class __TwigTemplate_e9ea44c0f148f93938973337e4d9949bd838be3ad80e76712dd8d68b73f5eaea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f211eafe5677b61340b16ab0d241bde0291c67c066057486075e116d3159517b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f211eafe5677b61340b16ab0d241bde0291c67c066057486075e116d3159517b->enter($__internal_f211eafe5677b61340b16ab0d241bde0291c67c066057486075e116d3159517b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Helper/sidebar_navigation.html.twig"));

        $__internal_d2f558bf3906e7d4a9b0c1ac03aae0dc945ff64a5dce5f07dcb94e9f53013511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f558bf3906e7d4a9b0c1ac03aae0dc945ff64a5dce5f07dcb94e9f53013511->enter($__internal_d2f558bf3906e7d4a9b0c1ac03aae0dc945ff64a5dce5f07dcb94e9f53013511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Helper/sidebar_navigation.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-primary flex-column\">
    <li class=\"nav-item\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 3, $this->getSourceContext()); })()) == "dashboard"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-tachometer\"></i><span>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listing");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 9, $this->getSourceContext()); })()) == "listings"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-map-marker\"></i><span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listings"), "html", null, true);
        echo "</span>
        </a>
    </li>
\t
    <li class=\"nav-item\">
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_category_upload");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 15, $this->getSourceContext()); })()) == "listings"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-map-marker\"></i><span>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import Listings"), "html", null, true);
        echo "</span>
        </a>
    </li>
    
\t<li class=\"nav-item\">
        <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 21, $this->getSourceContext()); })()) == "products"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-shopping-bag\"></i><span>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_claim");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 27, $this->getSourceContext()); })()) == "claims"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-hand-paper-o\"></i><span>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Claims"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 33, $this->getSourceContext()); })()) == "reports"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-flag\"></i><span>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reports"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 39, $this->getSourceContext()); })()) == "posts"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-book\"></i><span>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Blog Posts"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_review");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 45, $this->getSourceContext()); })()) == "reviews"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-star\"></i><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reviews"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 51, $this->getSourceContext()); })()) == "orders"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-shopping-cart\"></i><span>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 57, $this->getSourceContext()); })()) == "users"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-users\"></i><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_inquire");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 63, $this->getSourceContext()); })()) == "inquires"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-comment\"></i><span>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inquires"), "html", null, true);
        echo "</span>
        </a>
    </li>            

    <li class=\"nav-item\">
        <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_subscriber");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 69, $this->getSourceContext()); })()) == "subscribers"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-envelope\"></i><span>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subscribers"), "html", null, true);
        echo "</span>
        </a>
    </li>                        
</ul>

<strong class=\"nav-primary-title\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taxonomies"), "html", null, true);
        echo "</strong>

<ul class=\"nav nav-primary flex-column\">
    <li class=\"nav-item\">
        <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 79, $this->getSourceContext()); })()) == "categories"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-tags\"></i><span>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_location");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 85, $this->getSourceContext()); })()) == "locations"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-map-o\"></i><span>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Locations"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_amenity");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 91, $this->getSourceContext()); })()) == "amenities"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-check\"></i><span>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amenities"), "html", null, true);
        echo "</span>
        </a>
    </li>
</ul>";
        
        $__internal_f211eafe5677b61340b16ab0d241bde0291c67c066057486075e116d3159517b->leave($__internal_f211eafe5677b61340b16ab0d241bde0291c67c066057486075e116d3159517b_prof);

        
        $__internal_d2f558bf3906e7d4a9b0c1ac03aae0dc945ff64a5dce5f07dcb94e9f53013511->leave($__internal_d2f558bf3906e7d4a9b0c1ac03aae0dc945ff64a5dce5f07dcb94e9f53013511_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::Helper/sidebar_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 92,  260 => 91,  252 => 86,  244 => 85,  236 => 80,  228 => 79,  221 => 75,  213 => 70,  205 => 69,  197 => 64,  189 => 63,  181 => 58,  173 => 57,  165 => 52,  157 => 51,  149 => 46,  141 => 45,  133 => 40,  125 => 39,  117 => 34,  109 => 33,  101 => 28,  93 => 27,  85 => 22,  77 => 21,  69 => 16,  61 => 15,  53 => 10,  45 => 9,  37 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-primary flex-column\">
    <li class=\"nav-item\">
        <a href=\"{{ path('admin_dashboard') }}\" class=\"nav-link {% if active is defined and active == 'dashboard' %}active{% endif %}\">
            <i class=\"fa fa-tachometer\"></i><span>{{ 'Dashboard'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_listing') }}\" class=\"nav-link {% if active is defined and active == 'listings' %}active{% endif %}\">
            <i class=\"fa fa-map-marker\"></i><span>{{ 'Listings'|trans }}</span>
        </a>
    </li>
\t
    <li class=\"nav-item\">
        <a href=\"{{ path('app_category_upload') }}\" class=\"nav-link {% if active is defined and active == 'listings' %}active{% endif %}\">
            <i class=\"fa fa-map-marker\"></i><span>{{ 'Import Listings'|trans }}</span>
        </a>
    </li>
    
\t<li class=\"nav-item\">
        <a href=\"{{ path('admin_product') }}\" class=\"nav-link {% if active is defined and active == 'products' %}active{% endif %}\">
            <i class=\"fa fa-shopping-bag\"></i><span>{{ 'Products'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_claim') }}\" class=\"nav-link {% if active is defined and active == 'claims' %}active{% endif %}\">
            <i class=\"fa fa-hand-paper-o\"></i><span>{{ 'Claims'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_report') }}\" class=\"nav-link {% if active is defined and active == 'reports' %}active{% endif %}\">
            <i class=\"fa fa-flag\"></i><span>{{ 'Reports'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_post') }}\" class=\"nav-link {% if active is defined and active == 'posts' %}active{% endif %}\">
            <i class=\"fa fa-book\"></i><span>{{ 'Blog Posts'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_review') }}\" class=\"nav-link {% if active is defined and active == 'reviews' %}active{% endif %}\">
            <i class=\"fa fa-star\"></i><span>{{ 'Reviews'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_order') }}\" class=\"nav-link {% if active is defined and active == 'orders' %}active{% endif %}\">
            <i class=\"fa fa-shopping-cart\"></i><span>{{ 'Orders'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_user') }}\" class=\"nav-link {% if active is defined and active == 'users' %}active{% endif %}\">
            <i class=\"fa fa-users\"></i><span>{{ 'Users'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_inquire') }}\" class=\"nav-link {% if active is defined and active == 'inquires' %}active{% endif %}\">
            <i class=\"fa fa-comment\"></i><span>{{ 'Inquires'|trans }}</span>
        </a>
    </li>            

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_subscriber') }}\" class=\"nav-link {% if active is defined and active == 'subscribers' %}active{% endif %}\">
            <i class=\"fa fa-envelope\"></i><span>{{ 'Subscribers'|trans }}</span>
        </a>
    </li>                        
</ul>

<strong class=\"nav-primary-title\">{{ 'Taxonomies'|trans }}</strong>

<ul class=\"nav nav-primary flex-column\">
    <li class=\"nav-item\">
        <a href=\"{{ path('admin_category') }}\" class=\"nav-link {% if active is defined and active == 'categories' %}active{% endif %}\">
            <i class=\"fa fa-tags\"></i><span>{{ 'Categories'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_location') }}\" class=\"nav-link {% if active is defined and active == 'locations' %}active{% endif %}\">
            <i class=\"fa fa-map-o\"></i><span>{{ 'Locations'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_amenity') }}\" class=\"nav-link {% if active is defined and active == 'amenities' %}active{% endif %}\">
            <i class=\"fa fa-check\"></i><span>{{ 'Amenities'|trans }}</span>
        </a>
    </li>
</ul>", "AdminBundle::Helper/sidebar_navigation.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/sidebar_navigation.html.twig");
    }
}
