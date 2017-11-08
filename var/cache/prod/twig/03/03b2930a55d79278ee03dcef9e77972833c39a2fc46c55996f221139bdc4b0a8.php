<?php

/* FrontBundle::Listing/Header/gallery.html.twig */
class __TwigTemplate_ac62e76845f1d2f3f02dd772cbc9956004ee02c9975d6648823c4f4cad650c63 extends Twig_Template
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
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getImages", array(), "method"))) {
            // line 2
            echo "    <div class=\"listing-gallery-wrapper\">
        <div class=\"listing-gallery\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getImages", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 5
                echo "                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "getImageName", array(), "method"))) {
                    // line 6
                    echo "                    <div class=\"listing-gallery-item\" style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["image"], "image"), "html", null, true);
                    echo "');\"></div>
                ";
                }
                // line 8
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div><!-- /.listing-gallery -->

        ";
            // line 11
            $this->loadTemplate("FrontBundle::Listing/Header/content.html.twig", "FrontBundle::Listing/Header/gallery.html.twig", 11)->display($context);
            // line 12
            echo "    </div><!-- /.listing-gallery-wrapper -->
";
        }
    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/Header/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  48 => 11,  44 => 9,  38 => 8,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Listing/Header/gallery.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/Header/gallery.html.twig");
    }
}
