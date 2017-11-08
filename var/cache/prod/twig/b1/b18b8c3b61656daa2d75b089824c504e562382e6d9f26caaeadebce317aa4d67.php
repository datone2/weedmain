<?php

/* FrontBundle::Widget/gallery.html.twig */
class __TwigTemplate_acc7837899e7f3eeef08d6a8b43252e14d7bf256bca7582296ca578e263bc384 extends Twig_Template
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
            echo "    <div class=\"post-block\">
        <h3>
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Photo Gallery"), "html", null, true);
            echo "
        </h3>

        <div class=\"post-gallery\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getImages", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 9
                echo "                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "getImageName", array(), "method"))) {
                    // line 10
                    echo "                    <a class=\"post-gallery-item\"
                       href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["image"], "image"), "html", null, true);
                    echo "\"
                       style=\"background-image: url('";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["image"], "image"), "html", null, true);
                    echo "');\"></a>
                ";
                }
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </div><!-- /.listing-gallery -->
    </div><!-- /.post-block -->
";
        }
    }

    public function getTemplateName()
    {
        return "FrontBundle::Widget/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  51 => 14,  46 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Widget/gallery.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/gallery.html.twig");
    }
}
