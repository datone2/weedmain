<?php

/* AdminBundle::Product/row.html.twig */
class __TwigTemplate_d9635b91ef91293cc6b2c9df6c62d5a53b73216de4a9795fb9445c3017ded6dc extends Twig_Template
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
\t<td>
\t\t";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getId", array(), "method"), "html", null, true);
        echo "
\t</td>
    <td class=\"table-min-width table-center\">
\t<div class=\"table-card-content-inner\"><div class=\"table-card-title\">
        <a href=\"#!\">";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getProductName", array(), "method")) {
            // line 9
            echo "           ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getProductName", array(), "method"), "html", null, true);
            echo "
        ";
        } else {
            // line 11
            echo "            -
        ";
        }
        // line 12
        echo "</a>
\t</div></div>
    </td>
\t<td class=\"table-min-width\">
\t\t";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getVendor", array(), "method")) {
            // line 17
            echo "\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getVendor", array(), "method"), "html", null, true);
            echo "
\t\t";
        } else {
            // line 19
            echo "\t\t\t-
\t\t";
        }
        // line 21
        echo "\t</td>
\t<td class=\"table-min-width table-center\">
\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getCategory", array(), "method")) {
            // line 24
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getCategory", array(), "method"), "getSlug", array(), "method"))), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo "
\t\t\t</a>
\t\t";
        } else {
            // line 28
            echo "\t\t\t-
\t\t";
        }
        // line 30
        echo "\t</td>
    <td class=\"table-center\">
\t\t";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getSku", array(), "method"), "html", null, true);
        echo "
\t</td>
\t<td class=\"table-center\">
        ";
        // line 35
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getEnabled", array(), "method") == "1")) {
            // line 36
            echo "       Enabled
\t   ";
        } else {
            // line 38
            echo "\t\t\tDisabled
\t\t";
        }
        // line 40
        echo "       
    </td>
    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 45
        echo "Update";
        echo "
            </a>

<a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 49
        echo "Delete";
        echo "
            </a>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "AdminBundle::Product/row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 49,  118 => 48,  112 => 45,  108 => 44,  102 => 40,  98 => 38,  94 => 36,  92 => 35,  86 => 32,  82 => 30,  78 => 28,  72 => 25,  67 => 24,  65 => 23,  61 => 21,  57 => 19,  51 => 17,  49 => 16,  43 => 12,  39 => 11,  33 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Product/row.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Product/row.html.twig");
    }
}
