<?php

/* AdminBundle::Category/row.html.twig */
class __TwigTemplate_e7f1efe7b00530b4186972838c6cda1456a26715e16bd1823a803588b3deb320 extends Twig_Template
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
        echo "
<tr>
    <td class=\"table-min-width table-center\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getFontIcon", array(), "method")) {
            // line 5
            echo "            <i class=\"fa ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getFontIcon", array(), "method"), "html", null, true);
            echo "\"></i>
        ";
        } else {
            // line 7
            echo "            -
        ";
        }
        // line 9
        echo "    </td>

    <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["hierarchy"] ?? null), "getName", array(0 => ($context["category"] ?? null)), "method"), "html", null, true);
        echo "</td>

    <td class=\"table-min-width table-center\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\" target=\"_blank\">
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getSlug", array(), "method"), "html", null, true);
        echo "
        </a>
    </td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 22
        echo "Update";
        echo "
            </a>

            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 26
        echo "Delete";
        echo "
            </a>
        </div>
    </td>
</tr>

";
        // line 32
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getCategories", array(), "method")) {
            // line 33
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getCategories", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 34
                echo "        ";
                $this->loadTemplate("AdminBundle::Category/row.html.twig", "AdminBundle::Category/row.html.twig", 34)->display(array_merge($context, array("category" => $context["subCategory"])));
                // line 35
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "AdminBundle::Category/row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  102 => 34,  84 => 33,  82 => 32,  73 => 26,  69 => 25,  63 => 22,  59 => 21,  50 => 15,  46 => 14,  40 => 11,  36 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Category/row.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Category/row.html.twig");
    }
}
