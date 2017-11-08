<?php

/* AdminBundle::Amenity/row.html.twig */
class __TwigTemplate_7a20536d04293c4e541b871d12ba9eca356c9c89dac2d6e9ab2f09d92782fe86 extends Twig_Template
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
        echo "<tr>
    <td class=\"table-min-width table-center\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["amenity"] ?? null), "getFontIcon", array(), "method")) {
            // line 4
            echo "            <i class=\"fa ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["amenity"] ?? null), "getFontIcon", array(), "method"), "html", null, true);
            echo "\"></i>
        ";
        } else {
            // line 6
            echo "            -
        ";
        }
        // line 8
        echo "    </td>

    <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["amenity"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "</td>

    <td class=\"table-min-width table-center\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("amenity", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["amenity"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\" target=\"_blank\">
            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["amenity"] ?? null), "getSlug", array(), "method"), "html", null, true);
        echo "
        </a>
    </td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_amenity_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["amenity"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 21
        echo "Update";
        echo "
            </a>

            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_amenity_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["amenity"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 25
        echo "Delete";
        echo "
            </a>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "AdminBundle::Amenity/row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  68 => 24,  62 => 21,  58 => 20,  49 => 14,  45 => 13,  39 => 10,  35 => 8,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Amenity/row.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Amenity/row.html.twig");
    }
}
