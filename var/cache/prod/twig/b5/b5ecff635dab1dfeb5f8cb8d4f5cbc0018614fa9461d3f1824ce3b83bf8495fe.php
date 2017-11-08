<?php

/* AdminBundle::Amenity/index.html.twig */
class __TwigTemplate_0511beecd8dd2ef945121578af23cb84c952bd113ac20bae80e417a2a7f8e6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle::Amenity/index.html.twig", 1);
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
        $context["active"] = "amenities";
        // line 5
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amenities");
        // line 7
        $context["actions"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_amenity_create"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create")));
        // line 14
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard")), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amenities")));
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
        // line 29
        echo "    ";
        if (twig_length_filter($this->env, ($context["amenities"] ?? null))) {
            // line 30
            echo "        <div class=\"table-wrapper\">
            <table class=\"table table-bordered table-striped\">
                <thead>
                    <tr>
                        <th></th>
                        <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
            echo "</th>
                        <th class=\"table-min-width table-center\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Slug"), "html", null, true);
            echo "</th>
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["amenities"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                // line 43
                echo "                        ";
                $this->loadTemplate("AdminBundle::Amenity/row.html.twig", "AdminBundle::Amenity/index.html.twig", 43)->display($context);
                // line 44
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </tbody>
            </table>

            <div class=\"navigation\">
                ";
            // line 49
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["amenities"] ?? null));
            echo "
            </div>
        </div><!-- /.table-wrapper -->
    ";
        } else {
            // line 53
            echo "        ";
            echo twig_include($this->env, $context, "AppBundle::Helper/empty.html.twig");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "AdminBundle::Amenity/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 53,  110 => 49,  104 => 45,  90 => 44,  87 => 43,  70 => 42,  61 => 36,  57 => 35,  50 => 30,  47 => 29,  44 => 28,  38 => 26,  34 => 1,  32 => 14,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Amenity/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Amenity/index.html.twig");
    }
}
