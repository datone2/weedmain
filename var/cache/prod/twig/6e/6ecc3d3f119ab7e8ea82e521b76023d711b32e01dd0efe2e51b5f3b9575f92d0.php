<?php

/* FrontBundle::Listing/my.html.twig */
class __TwigTemplate_957efc876ceeb07d95b5c277d3981a1b476fbb6aa1cdf7ee9c5b4bae1baa31c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle::Listing/my.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Listings");
        // line 6
        $context["actions"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_create"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create")));
        // line 13
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listings")), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Listings")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        echo "    
    <div class=\"container\">        
        ";
        // line 30
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle::Listing/my.html.twig", 30)->display($context);
        // line 31
        echo "
        ";
        // line 32
        if (twig_length_filter($this->env, ($context["listings"] ?? null))) {
            // line 33
            echo "            <div class=\"table-wrapper\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
            echo "</th>
                            <th class=\"table-center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category"), "html", null, true);
            echo "</th>
                            <th class=\"table-center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Published"), "html", null, true);
            echo "</th>
                            <th class=\"table-center\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Featured"), "html", null, true);
            echo "</th>
                            <th class=\"table-center\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Verified"), "html", null, true);
            echo "</th>
                            <th class=\"table-min-width\"></th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                // line 48
                echo "                            <tr>
                                <td>
                                    <div class=\"table-card\">
                                        <div class=\"table-card-image\"
                                            ";
                // line 52
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getFeaturedImage", array(), "method")) {
                    // line 53
                    echo "                                                style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getFeaturedImage", array(), "method"), "image"), "html", null, true);
                    echo "');\"
                                            ";
                }
                // line 54
                echo ">
                                        </div><!-- /.table-card-image -->

                                        <div class=\"table-card-content\">
                                            <div class=\"table-card-content-inner\">
                                                <div class=\"table-card-title\">
                                                    <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getSlug", array(), "method"))), "html", null, true);
                echo "\" target=\"_blank\">
                                                        ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getName", array(), "method"), "html", null, true);
                echo "
                                                    </a>
                                                </div><!-- /.table-card-title -->

                                                ";
                // line 65
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getPrice", array(), "method")) {
                    // line 66
                    echo "                                                    <div class=\"table-card-subtitle\">
                                                        ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getPrice", array(), "method"), ($context["currency"] ?? null)), "html", null, true);
                    echo "
                                                    </div><!-- /.table-card-subtitle -->
                                                ";
                }
                // line 70
                echo "                                            </div><!-- /.table-card-content-inner -->
                                        </div><!-- /.table-card-content -->
                                    </div><!-- /.table-card -->
                                </td>

                                <td class=\"table-min-width table-center\">
                                    ";
                // line 76
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getCategory", array(), "method")) {
                    // line 77
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getCategory", array(), "method"), "getSlug", array(), "method"))), "html", null, true);
                    echo "\" target=\"_blank\">
                                            ";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
                    echo "
                                        </a>
                                    ";
                } else {
                    // line 81
                    echo "                                        -
                                    ";
                }
                // line 83
                echo "                                </td>

                                <td class=\"table-min-width table-center table-status\">
                                    ";
                // line 86
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getIsPublished", array(), "method")) {
                    // line 87
                    echo "                                        <i class=\"fa fa-check\"></i>
                                    ";
                } else {
                    // line 89
                    echo "                                        <i class=\"fa fa-close\"></i>
                                    ";
                }
                // line 91
                echo "                                </td>

                                <td class=\"table-min-width table-center table-status\">
                                    ";
                // line 94
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getIsFeatured", array(), "method")) {
                    // line 95
                    echo "                                        <i class=\"fa fa-check\"></i>
                                    ";
                } else {
                    // line 97
                    echo "                                        <i class=\"fa fa-close\"></i>
                                    ";
                }
                // line 99
                echo "                                </td>

                                <td class=\"table-min-width table-center table-status\">
                                    ";
                // line 102
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getIsVerified", array(), "method")) {
                    // line 103
                    echo "                                        <i class=\"fa fa-check\"></i>
                                    ";
                } else {
                    // line 105
                    echo "                                        <i class=\"fa fa-close\"></i>
                                    ";
                }
                // line 107
                echo "                                </td>

                                <td class=\"table-min-width\">
                                    <div class=\"btn-group\">                                        

                                        ";
                // line 112
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getIsPublished", array(), "method")) {
                    // line 113
                    echo "                                            <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_unpublish", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                                ";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unpublish"), "html", null, true);
                    echo "
                                            </a>
                                        ";
                } else {
                    // line 117
                    echo "                                            <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_publish", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                                ";
                    // line 118
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Publish"), "html", null, true);
                    echo "

                                                ";
                    // line 120
                    if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["payments"] ?? null), "pay_for_publish", array()), "enabled", array())) {
                        // line 121
                        echo "                                                    (";
                        echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["payments"] ?? null), "pay_for_publish", array()), "price", array()), ($context["currency"] ?? null)), "html", null, true);
                        echo ")
                                                ";
                    }
                    // line 123
                    echo "                                            </a>
                                        ";
                }
                // line 125
                echo "
                                        ";
                // line 126
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getIsFeatured", array(), "method")) {
                    // line 127
                    echo "                                            <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_unfeature", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                                ";
                    // line 128
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unfeature"), "html", null, true);
                    echo "
                                            </a>
                                        ";
                } else {
                    // line 131
                    echo "                                            <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_feature", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"))), "html", null, true);
                    echo "\">
                                                ";
                    // line 132
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feature"), "html", null, true);
                    echo "
                                                ";
                    // line 133
                    if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["payments"] ?? null), "pay_for_featured", array()), "enabled", array())) {
                        // line 134
                        echo "                                                    (";
                        echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["payments"] ?? null), "pay_for_featured", array()), "price", array()), ($context["currency"] ?? null)), "html", null, true);
                        echo ")
                                                ";
                    }
                    // line 136
                    echo "                                            </a>
                                        ";
                }
                // line 138
                echo "                                        
                                        <a class=\"btn\" href=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
                echo "</a>
                                        <a class=\"btn\" href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                echo "</a>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                    </tbody>
                </table>
            </div><!-- /.table-wrapper -->

            <div class=\"navigation\">
                ";
            // line 150
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["listings"] ?? null));
            echo "
            </div><!-- /.navigation -->                     
        ";
        } else {
            // line 153
            echo "            ";
            echo twig_include($this->env, $context, "AppBundle::Helper/empty.html.twig");
            echo "
        ";
        }
        // line 155
        echo "    </div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/my.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 155,  320 => 153,  314 => 150,  307 => 145,  294 => 140,  288 => 139,  285 => 138,  281 => 136,  275 => 134,  273 => 133,  269 => 132,  264 => 131,  258 => 128,  253 => 127,  251 => 126,  248 => 125,  244 => 123,  238 => 121,  236 => 120,  231 => 118,  226 => 117,  220 => 114,  215 => 113,  213 => 112,  206 => 107,  202 => 105,  198 => 103,  196 => 102,  191 => 99,  187 => 97,  183 => 95,  181 => 94,  176 => 91,  172 => 89,  168 => 87,  166 => 86,  161 => 83,  157 => 81,  151 => 78,  146 => 77,  144 => 76,  136 => 70,  128 => 67,  125 => 66,  123 => 65,  116 => 61,  112 => 60,  104 => 54,  98 => 53,  96 => 52,  90 => 48,  86 => 47,  77 => 41,  73 => 40,  69 => 39,  65 => 38,  61 => 37,  55 => 33,  53 => 32,  50 => 31,  48 => 30,  42 => 28,  36 => 26,  32 => 1,  30 => 13,  28 => 6,  26 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Listing/my.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/my.html.twig");
    }
}
