<?php

/* FrontBundle::Widget/gallery.html.twig */
class __TwigTemplate_594433083db1f727849422bc948ad89760b6a764a011a3cb4b4fdefe282438fd extends Twig_Template
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
        $__internal_ed45d456e41e1922adabd9cd9917b7d581e898be5ec7ecb8c16b1884882dd9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed45d456e41e1922adabd9cd9917b7d581e898be5ec7ecb8c16b1884882dd9d2->enter($__internal_ed45d456e41e1922adabd9cd9917b7d581e898be5ec7ecb8c16b1884882dd9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Widget/gallery.html.twig"));

        $__internal_96b3620e83e57c4e29d55ca2869cf771caa89437a378d05ead1280247c050625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b3620e83e57c4e29d55ca2869cf771caa89437a378d05ead1280247c050625->enter($__internal_96b3620e83e57c4e29d55ca2869cf771caa89437a378d05ead1280247c050625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Widget/gallery.html.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->getSourceContext()); })()), "getImages", array(), "method"))) {
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 8, $this->getSourceContext()); })()), "getImages", array(), "method"));
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
        
        $__internal_ed45d456e41e1922adabd9cd9917b7d581e898be5ec7ecb8c16b1884882dd9d2->leave($__internal_ed45d456e41e1922adabd9cd9917b7d581e898be5ec7ecb8c16b1884882dd9d2_prof);

        
        $__internal_96b3620e83e57c4e29d55ca2869cf771caa89437a378d05ead1280247c050625->leave($__internal_96b3620e83e57c4e29d55ca2869cf771caa89437a378d05ead1280247c050625_prof);

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
        return array (  63 => 15,  57 => 14,  52 => 12,  48 => 11,  45 => 10,  42 => 9,  38 => 8,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if listing.getImages()|length %}
    <div class=\"post-block\">
        <h3>
            {{ 'Photo Gallery'|trans }}
        </h3>

        <div class=\"post-gallery\">
            {% for image in listing.getImages() %}
                {% if image.getImageName() is not empty %}
                    <a class=\"post-gallery-item\"
                       href=\"{{ vich_uploader_asset(image, 'image') }}\"
                       style=\"background-image: url('{{ vich_uploader_asset(image, 'image') }}');\"></a>
                {% endif %}
            {% endfor %}
        </div><!-- /.listing-gallery -->
    </div><!-- /.post-block -->
{% endif %}", "FrontBundle::Widget/gallery.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/gallery.html.twig");
    }
}
