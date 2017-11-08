<?php

/* AdminBundle::User/index.html.twig */
class __TwigTemplate_241c826d1cfd4a99d081b611427cc61b568b06d3e8cd031308b2a8087d289454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle::User/index.html.twig", 1);
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
        $context["active"] = "users";
        // line 5
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users");
        // line 7
        $context["actions"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_create"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create")));
        // line 14
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard")), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users")));
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
        if (twig_length_filter($this->env, ($context["users"] ?? null))) {
            // line 31
            echo "        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
            echo "</th>
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 42
                echo "                        <tr>
                            <td>
                                ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getDisplayName", array(), "method"), "html", null, true);
                echo "
                            </td>

                            <td class=\"table-min-width\">
                                <div class=\"btn-group\">
                                    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn\">
                                        ";
                // line 50
                echo "Update";
                echo "
                                    </a>

                                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn\">
                                        ";
                // line 54
                echo "Delete";
                echo "
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                </tbody>
            </table>

            <div class=\"navigation\">
                ";
            // line 64
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["users"] ?? null));
            echo "
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    ";
        } else {
            // line 68
            echo "        ";
            echo twig_include($this->env, $context, "AppBundle::Helper/empty.html.twig");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "AdminBundle::User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 68,  113 => 64,  107 => 60,  95 => 54,  91 => 53,  85 => 50,  81 => 49,  73 => 44,  69 => 42,  65 => 41,  56 => 35,  50 => 31,  47 => 30,  44 => 29,  38 => 27,  34 => 1,  32 => 14,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::User/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/User/index.html.twig");
    }
}
