<?php

/* AdminBundle::Product/index.html.twig */
class __TwigTemplate_5bb82b3079d23dc81493a7303372706a7d6c03a8f5039bc6932cb70b113f522a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle::Product/index.html.twig", 1);
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
        $context["active"] = "products";
        // line 5
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products");
        // line 7
        $context["actions"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_create"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create")));
        // line 14
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard")), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products")));
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
        if (twig_length_filter($this->env, ($context["products"] ?? null))) {
            // line 31
            echo "        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Id"), "html", null, true);
            echo "</th>
                        <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ProductName"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th class=\"table-center\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vendor"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th class=\"table-center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th class=\"table-center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sku"), "html", null, true);
            echo "</th> 
\t\t\t\t\t\t<th class=\"table-center\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enabled"), "html", null, true);
            echo "</th> 
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 47
                echo "                        ";
                $this->loadTemplate("AdminBundle::Product/row.html.twig", "AdminBundle::Product/index.html.twig", 47)->display($context);
                // line 48
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                </tbody>
            </table>

            <div class=\"navigation\">
                ";
            // line 53
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["products"] ?? null));
            echo "
            </div>
        </div><!-- /.table-wrapper -->
    ";
        } else {
            // line 57
            echo "        ";
            echo twig_include($this->env, $context, "AppBundle::Helper/empty.html.twig");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "AdminBundle::Product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 57,  125 => 53,  119 => 49,  105 => 48,  102 => 47,  85 => 46,  76 => 40,  72 => 39,  68 => 38,  64 => 37,  60 => 36,  56 => 35,  50 => 31,  47 => 30,  44 => 29,  38 => 27,  34 => 1,  32 => 14,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Product/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Product/index.html.twig");
    }
}
