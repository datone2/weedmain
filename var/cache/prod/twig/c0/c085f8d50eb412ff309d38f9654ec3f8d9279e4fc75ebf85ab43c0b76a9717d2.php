<?php

/* AdminBundle::Dashboard/index.html.twig */
class __TwigTemplate_b3b6799fe77b95af2cc388f95f0153808f882eff8cb51f07109c8c210be78fb0 extends Twig_Template
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
        // line 3
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard");
        // line 5
        $context["active"] = "dashboard";
        // line 7
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ($context["listings_count"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["users_count"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["reviews_count"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["posts_count"] ?? null), "html", null, true);
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
        if (twig_length_filter($this->env, ($context["listings"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["listings"] ?? null));
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
        if (twig_length_filter($this->env, ($context["listings"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
        return array (  300 => 146,  294 => 144,  287 => 139,  274 => 135,  268 => 134,  262 => 130,  258 => 128,  254 => 126,  252 => 125,  244 => 120,  240 => 119,  236 => 117,  232 => 116,  223 => 110,  219 => 109,  213 => 105,  211 => 104,  206 => 102,  201 => 99,  195 => 97,  188 => 92,  175 => 88,  169 => 87,  163 => 83,  159 => 81,  155 => 79,  153 => 78,  145 => 73,  141 => 72,  137 => 70,  133 => 69,  124 => 63,  120 => 62,  114 => 58,  112 => 57,  107 => 55,  96 => 47,  92 => 46,  82 => 39,  78 => 38,  68 => 31,  64 => 30,  54 => 23,  50 => 22,  45 => 19,  42 => 18,  36 => 16,  32 => 1,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Dashboard/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Dashboard/index.html.twig");
    }
}
