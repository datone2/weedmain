<?php

/* AdminBundle::Dashboard/index.html.twig */
class __TwigTemplate_39548b130f318b6758c6ca2542fc9f06c672a9e7c00f8c3a0a685da4fbd77275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle::Dashboard/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0f90db55b43911811e9930cc623a159f23f39cb700d18f4b7a114541dd3026f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f90db55b43911811e9930cc623a159f23f39cb700d18f4b7a114541dd3026f->enter($__internal_c0f90db55b43911811e9930cc623a159f23f39cb700d18f4b7a114541dd3026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Dashboard/index.html.twig"));

        $__internal_0dd108dc614f11f7806eb9ca13797c2770d6a51313f144032ba2c83bf51e49e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd108dc614f11f7806eb9ca13797c2770d6a51313f144032ba2c83bf51e49e8->enter($__internal_0dd108dc614f11f7806eb9ca13797c2770d6a51313f144032ba2c83bf51e49e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Dashboard/index.html.twig"));

        // line 3
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard");
        // line 5
        $context["active"] = "dashboard";
        // line 7
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f90db55b43911811e9930cc623a159f23f39cb700d18f4b7a114541dd3026f->leave($__internal_c0f90db55b43911811e9930cc623a159f23f39cb700d18f4b7a114541dd3026f_prof);

        
        $__internal_0dd108dc614f11f7806eb9ca13797c2770d6a51313f144032ba2c83bf51e49e8->leave($__internal_0dd108dc614f11f7806eb9ca13797c2770d6a51313f144032ba2c83bf51e49e8_prof);

    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ba61052245ce22053b2a855c3d1962fe35d2dae8eae98f1933b1de2eb21a0d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba61052245ce22053b2a855c3d1962fe35d2dae8eae98f1933b1de2eb21a0d5->enter($__internal_4ba61052245ce22053b2a855c3d1962fe35d2dae8eae98f1933b1de2eb21a0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2a06c11b44e78e4b66f40f76ccd03b10bc7011c2e815ffdaeacc6e402c08e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a06c11b44e78e4b66f40f76ccd03b10bc7011c2e815ffdaeacc6e402c08e35->enter($__internal_f2a06c11b44e78e4b66f40f76ccd03b10bc7011c2e815ffdaeacc6e402c08e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_f2a06c11b44e78e4b66f40f76ccd03b10bc7011c2e815ffdaeacc6e402c08e35->leave($__internal_f2a06c11b44e78e4b66f40f76ccd03b10bc7011c2e815ffdaeacc6e402c08e35_prof);

        
        $__internal_4ba61052245ce22053b2a855c3d1962fe35d2dae8eae98f1933b1de2eb21a0d5->leave($__internal_4ba61052245ce22053b2a855c3d1962fe35d2dae8eae98f1933b1de2eb21a0d5_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_2951ca3b63fa16a66620b430f7aad68cccd0b3380cf3fec91928004327f24d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2951ca3b63fa16a66620b430f7aad68cccd0b3380cf3fec91928004327f24d89->enter($__internal_2951ca3b63fa16a66620b430f7aad68cccd0b3380cf3fec91928004327f24d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ccbed12beb943c0f8260339128bcc7902868522f2573fe928b98806b5ec60867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbed12beb943c0f8260339128bcc7902868522f2573fe928b98806b5ec60867->enter($__internal_ccbed12beb943c0f8260339128bcc7902868522f2573fe928b98806b5ec60867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-green\">
                <div class=\"stat-key\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total Listings"), "html", null, true);
        echo "</div><!-- /.stat-key -->
                <div class=\"stat-value\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["listings_count"]) || array_key_exists("listings_count", $context) ? $context["listings_count"] : (function () { throw new Twig_Error_Runtime('Variable "listings_count" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
        echo "</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-map-marker\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-red\">
                <div class=\"stat-key\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total Users"), "html", null, true);
        echo "</div><!-- /.stat-key -->
                <div class=\"stat-value\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["users_count"]) || array_key_exists("users_count", $context) ? $context["users_count"] : (function () { throw new Twig_Error_Runtime('Variable "users_count" does not exist.', 31, $this->getSourceContext()); })()), "html", null, true);
        echo "</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-users\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-orange\">
                <div class=\"stat-key\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total Reviews"), "html", null, true);
        echo "</div><!-- /.stat-key -->
                <div class=\"stat-value\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["reviews_count"]) || array_key_exists("reviews_count", $context) ? $context["reviews_count"] : (function () { throw new Twig_Error_Runtime('Variable "reviews_count" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
        echo "</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-comments\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->        

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-blue\">
                <div class=\"stat-key\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total Posts"), "html", null, true);
        echo "</div><!-- /.stat-key -->
                <div class=\"stat-value\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["posts_count"]) || array_key_exists("posts_count", $context) ? $context["posts_count"] : (function () { throw new Twig_Error_Runtime('Variable "posts_count" does not exist.', 47, $this->getSourceContext()); })()), "html", null, true);
        echo "</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-file\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->        
    </div><!-- /.row -->

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <h3 class=\"page-header\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recent Listings"), "html", null, true);
        echo "</h3>

            ";
        // line 57
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 57, $this->getSourceContext()); })()))) {
            // line 58
            echo "                <div class=\"table-wrapper\">
                    <table class=\"table\">     
                        <thead>
                            <tr>
                                <th>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
            echo "</th>
                                <th class=\"table-min-width table-center\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Published"), "html", null, true);
            echo "</th>
                                <th class=\"table-min-width\"></th>
                            </tr>
                        </thead>    

                        <tbody>
                            ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 69, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                // line 70
                echo "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listing_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"))), "html", null, true);
                echo "\">
                                            ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getName", array(), "method"), "html", null, true);
                echo "
                                        </a>
                                    </td>

                                    <td class=\"table-min-width table-center table-status\">
                                        ";
                // line 78
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getIsPublished", array(), "method")) {
                    // line 79
                    echo "                                            <i class=\"fa fa-check\"></i>
                                        ";
                } else {
                    // line 81
                    echo "                                            <i class=\"fa fa-close\"></i>
                                        ";
                }
                // line 83
                echo "                                    </td>

                                    <td class=\"table-min-width\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listing_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
                echo "</a>
                                            <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listing_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                echo "</a>
                                        </div><!-- /.btn-group -->
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "      
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.table-wrapper -->
            ";
        } else {
            // line 97
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No listings found."), "html", null, true);
            echo "
            ";
        }
        // line 99
        echo "        </div><!-- /.col-* -->

        <div class=\"col-lg-6\">
            <h3 class=\"page-header\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recent Posts"), "html", null, true);
        echo "</h3>

            ";
        // line 104
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 104, $this->getSourceContext()); })()))) {
            // line 105
            echo "                <div class=\"table-wrapper\">
                    <table class=\"table\">     
                        <thead>
                            <tr>
                                <th>";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
            echo "</th>
                                <th class=\"table-min-width table-center\">";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Published"), "html", null, true);
            echo "</th>
                                <th class=\"table-min-width\"></th>
                            </tr>
                        </thead>    

                        <tbody>
                            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 116, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 117
                echo "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getId", array(), "method"))), "html", null, true);
                echo "\">
                                            ";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getName", array(), "method"), "html", null, true);
                echo "
                                        </a>
                                    </td>

                                    <td class=\"table-min-width table-center table-status\">
                                        ";
                // line 125
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getIsPublished", array(), "method")) {
                    // line 126
                    echo "                                            <i class=\"fa fa-check\"></i>
                                        ";
                } else {
                    // line 128
                    echo "                                            <i class=\"fa fa-close\"></i>
                                        ";
                }
                // line 130
                echo "                                    </td>

                                    <td class=\"table-min-width\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
                echo "</a>
                                            <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                echo "</a>
                                        </div><!-- /.btn-group -->
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "      
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.table-wrapper -->
            ";
        } else {
            // line 144
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No posts found."), "html", null, true);
            echo "
            ";
        }
        // line 146
        echo "        </div><!-- /.col-* -->        
    </div><!-- /.row -->
";
        
        $__internal_ccbed12beb943c0f8260339128bcc7902868522f2573fe928b98806b5ec60867->leave($__internal_ccbed12beb943c0f8260339128bcc7902868522f2573fe928b98806b5ec60867_prof);

        
        $__internal_2951ca3b63fa16a66620b430f7aad68cccd0b3380cf3fec91928004327f24d89->leave($__internal_2951ca3b63fa16a66620b430f7aad68cccd0b3380cf3fec91928004327f24d89_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::Dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 146,  324 => 144,  317 => 139,  304 => 135,  298 => 134,  292 => 130,  288 => 128,  284 => 126,  282 => 125,  274 => 120,  270 => 119,  266 => 117,  262 => 116,  253 => 110,  249 => 109,  243 => 105,  241 => 104,  236 => 102,  231 => 99,  225 => 97,  218 => 92,  205 => 88,  199 => 87,  193 => 83,  189 => 81,  185 => 79,  183 => 78,  175 => 73,  171 => 72,  167 => 70,  163 => 69,  154 => 63,  150 => 62,  144 => 58,  142 => 57,  137 => 55,  126 => 47,  122 => 46,  112 => 39,  108 => 38,  98 => 31,  94 => 30,  84 => 23,  80 => 22,  75 => 19,  66 => 18,  48 => 16,  38 => 1,  36 => 7,  34 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::Layout/base.html.twig' %}

{% set title = 'Dashboard'|trans %}

{% set active = 'dashboard' %}

{% set breadcrumbs = [
    {
        'link': path('homepage'), 'title': 'Home'|trans,
    },
    {
        'link': path('admin_dashboard'), 'title': 'Dashboard'|trans,
    }
] %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-green\">
                <div class=\"stat-key\">{{ 'Total Listings'|trans }}</div><!-- /.stat-key -->
                <div class=\"stat-value\">{{ listings_count }}</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-map-marker\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-red\">
                <div class=\"stat-key\">{{ 'Total Users'|trans }}</div><!-- /.stat-key -->
                <div class=\"stat-value\">{{ users_count }}</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-users\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-orange\">
                <div class=\"stat-key\">{{ 'Total Reviews'|trans }}</div><!-- /.stat-key -->
                <div class=\"stat-value\">{{ reviews_count }}</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-comments\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->        

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-blue\">
                <div class=\"stat-key\">{{ 'Total Posts'|trans }}</div><!-- /.stat-key -->
                <div class=\"stat-value\">{{ posts_count }}</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-file\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->        
    </div><!-- /.row -->

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <h3 class=\"page-header\">{{ 'Recent Listings'|trans }}</h3>

            {% if listings|length %}
                <div class=\"table-wrapper\">
                    <table class=\"table\">     
                        <thead>
                            <tr>
                                <th>{{ 'Name'|trans }}</th>
                                <th class=\"table-min-width table-center\">{{ 'Published'|trans }}</th>
                                <th class=\"table-min-width\"></th>
                            </tr>
                        </thead>    

                        <tbody>
                            {% for listing in listings %}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('admin_listing_update', {'id': listing.getId()} )}}\">
                                            {{ listing.getName() }}
                                        </a>
                                    </td>

                                    <td class=\"table-min-width table-center table-status\">
                                        {% if listing.getIsPublished() %}
                                            <i class=\"fa fa-check\"></i>
                                        {% else %}
                                            <i class=\"fa fa-close\"></i>
                                        {% endif %}
                                    </td>

                                    <td class=\"table-min-width\">
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('admin_listing_update', {'id': listing.getId()}) }}\" class=\"btn\">{{ 'Update'|trans }}</a>
                                            <a href=\"{{ path('admin_listing_delete', {'id': listing.getId()}) }}\" class=\"btn\">{{ 'Delete'|trans }}</a>
                                        </div><!-- /.btn-group -->
                                    </td>
                                </tr>
                            {% endfor %}      
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.table-wrapper -->
            {% else %}
                {{ 'No listings found.'|trans }}
            {% endif %}
        </div><!-- /.col-* -->

        <div class=\"col-lg-6\">
            <h3 class=\"page-header\">{{ 'Recent Posts'|trans }}</h3>

            {% if listings|length %}
                <div class=\"table-wrapper\">
                    <table class=\"table\">     
                        <thead>
                            <tr>
                                <th>{{ 'Name'|trans }}</th>
                                <th class=\"table-min-width table-center\">{{ 'Published'|trans }}</th>
                                <th class=\"table-min-width\"></th>
                            </tr>
                        </thead>    

                        <tbody>
                            {% for post in posts %}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('admin_post_update', {'id': post.getId()} )}}\">
                                            {{ post.getName() }}
                                        </a>
                                    </td>

                                    <td class=\"table-min-width table-center table-status\">
                                        {% if post.getIsPublished() %}
                                            <i class=\"fa fa-check\"></i>
                                        {% else %}
                                            <i class=\"fa fa-close\"></i>
                                        {% endif %}
                                    </td>

                                    <td class=\"table-min-width\">
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('admin_post_update', {'id': post.getId()}) }}\" class=\"btn\">{{ 'Update'|trans }}</a>
                                            <a href=\"{{ path('admin_post_delete', {'id': post.getId()}) }}\" class=\"btn\">{{ 'Delete'|trans }}</a>
                                        </div><!-- /.btn-group -->
                                    </td>
                                </tr>
                            {% endfor %}      
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.table-wrapper -->
            {% else %}
                {{ 'No posts found.'|trans }}
            {% endif %}
        </div><!-- /.col-* -->        
    </div><!-- /.row -->
{% endblock %}", "AdminBundle::Dashboard/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Dashboard/index.html.twig");
    }
}
