<?php

/* AdminBundle::Helper/sidebar_navigation.html.twig */
class __TwigTemplate_55bddfba446187efdcb97ce2a7272c794a3e7b0e8a887ddbc10dfd7196d7e6ae extends Twig_Template
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
        // line 1
        echo "<ul class=\"nav nav-primary flex-column\">
    <li class=\"nav-item\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "dashboard"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "listings"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "listings"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "products"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "claims"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "reports"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "posts"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "reviews"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "orders"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "users"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "inquires"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "subscribers"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "categories"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "locations"))) {
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
        if ((array_key_exists("active", $context) && (($context["active"] ?? null) == "amenities"))) {
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
        return array (  262 => 92,  254 => 91,  246 => 86,  238 => 85,  230 => 80,  222 => 79,  215 => 75,  207 => 70,  199 => 69,  191 => 64,  183 => 63,  175 => 58,  167 => 57,  159 => 52,  151 => 51,  143 => 46,  135 => 45,  127 => 40,  119 => 39,  111 => 34,  103 => 33,  95 => 28,  87 => 27,  79 => 22,  71 => 21,  63 => 16,  55 => 15,  47 => 10,  39 => 9,  31 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Helper/sidebar_navigation.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/sidebar_navigation.html.twig");
    }
}
