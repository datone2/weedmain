<?php

/* AdminBundle::Post/index.html.twig */
class __TwigTemplate_3f7a3c9f0b09b39b5db8936a8c359e0e2ece67d3ac229ef9bce7f53c55222fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle::Post/index.html.twig", 1);
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
        $context["active"] = "posts";
        // line 5
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posts");
        // line 7
        $context["actions"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_create"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create")));
        // line 14
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard")), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posts")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        if (twig_length_filter($this->env, ($context["posts"] ?? null))) {
            // line 31
            echo "        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
            echo "</th>
                        <th class=\"table-center\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category"), "html", null, true);
            echo "</th>
                        <th class=\"table-center\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Published"), "html", null, true);
            echo "</th>
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 44
                echo "                        <tr>
                            <td>
                                <div class=\"table-card\">
                                    ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getImage", array(), "method"), "html", null, true);
                echo "
                                    <div class=\"table-card-image\"
                                            ";
                // line 49
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getImageName", array(), "method")) {
                    // line 50
                    echo "                                        style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["post"], "image"), "html", null, true);
                    echo "');\"
                                            ";
                }
                // line 51
                echo ">
                                    </div><!-- /.table-card-image -->

                                    <div class=\"table-card-content\">
                                        <div class=\"table-card-content-inner\">
                                            <div class=\"table-card-title\">
                                                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getSlug", array(), "method"))), "html", null, true);
                echo "\" target=\"_blank\">
                                                    ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getName", array(), "method"), "html", null, true);
                echo "
                                                </a>
                                            </div><!-- /.table-card-title -->
                                        </div><!-- /.table-card-content-inner -->
                                    </div><!-- /.table-card-content -->
                                </div><!-- /.table-card -->
                            </td>

                            <td class=\"table-min-width table-center\">
                                ";
                // line 67
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getCategory", array(), "method")) {
                    // line 68
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getCategory", array(), "method"), "getSlug", array(), "method"))), "html", null, true);
                    echo "\" target=\"_blank\">
                                        ";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getCategory", array(), "method"), "html", null, true);
                    echo "
                                    </a>
                                ";
                } else {
                    // line 72
                    echo "                                    -
                                ";
                }
                // line 74
                echo "                            </td>

                            <td class=\"table-min-width table-center table-status\">
                                ";
                // line 77
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getIsPublished", array(), "method")) {
                    // line 78
                    echo "                                    <i class=\"fa fa-check\"></i>
                                ";
                } else {
                    // line 80
                    echo "                                    <i class=\"fa fa-close\"></i>
                                ";
                }
                // line 82
                echo "                            </td>

                            <td class=\"table-min-width\">
                                <div class=\"btn-group\">
                                    <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn\">
                                        ";
                // line 87
                echo "Update";
                echo "
                                    </a>

                                    <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn\">
                                        ";
                // line 91
                echo "Delete";
                echo "
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                </tbody>
            </table>

            <div class=\"navigation\">
                ";
            // line 101
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posts"] ?? null));
            echo "
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    ";
        } else {
            // line 105
            echo "        ";
            echo twig_include($this->env, $context, "AppBundle::Helper/empty.html.twig");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "AdminBundle::Post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 105,  189 => 101,  183 => 97,  171 => 91,  167 => 90,  161 => 87,  157 => 86,  151 => 82,  147 => 80,  143 => 78,  141 => 77,  136 => 74,  132 => 72,  126 => 69,  121 => 68,  119 => 67,  107 => 58,  103 => 57,  95 => 51,  89 => 50,  87 => 49,  82 => 47,  77 => 44,  73 => 43,  64 => 37,  60 => 36,  56 => 35,  50 => 31,  47 => 30,  44 => 29,  38 => 27,  34 => 1,  32 => 14,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Post/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Post/index.html.twig");
    }
}
