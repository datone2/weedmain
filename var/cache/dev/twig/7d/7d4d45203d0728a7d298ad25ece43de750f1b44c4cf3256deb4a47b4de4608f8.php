<?php

/* FrontBundle::Listing/Header/gallery.html.twig */
class __TwigTemplate_565be625fb67a6e19866c2c260220d4afbc9d2f2bfd004125061cbbd156d5f72 extends Twig_Template
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
        $__internal_40d11cc03c0aeff759353f2825817faa71c3c31e09edd208a76d3ba607d2ccce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d11cc03c0aeff759353f2825817faa71c3c31e09edd208a76d3ba607d2ccce->enter($__internal_40d11cc03c0aeff759353f2825817faa71c3c31e09edd208a76d3ba607d2ccce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/Header/gallery.html.twig"));

        $__internal_2b9e3eb5f57a05765f2cff20c7d8144a0664fae8d76c90ed967d14e8ab3a522c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9e3eb5f57a05765f2cff20c7d8144a0664fae8d76c90ed967d14e8ab3a522c->enter($__internal_2b9e3eb5f57a05765f2cff20c7d8144a0664fae8d76c90ed967d14e8ab3a522c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/Header/gallery.html.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->getSourceContext()); })()), "getImages", array(), "method"))) {
            // line 2
            echo "    <div class=\"listing-gallery-wrapper\">
        <div class=\"listing-gallery\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 4, $this->getSourceContext()); })()), "getImages", array(), "method"));
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
        
        $__internal_40d11cc03c0aeff759353f2825817faa71c3c31e09edd208a76d3ba607d2ccce->leave($__internal_40d11cc03c0aeff759353f2825817faa71c3c31e09edd208a76d3ba607d2ccce_prof);

        
        $__internal_2b9e3eb5f57a05765f2cff20c7d8144a0664fae8d76c90ed967d14e8ab3a522c->leave($__internal_2b9e3eb5f57a05765f2cff20c7d8144a0664fae8d76c90ed967d14e8ab3a522c_prof);

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
        return array (  56 => 12,  54 => 11,  50 => 9,  44 => 8,  38 => 6,  35 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if listing.getImages()|length %}
    <div class=\"listing-gallery-wrapper\">
        <div class=\"listing-gallery\">
            {% for image in listing.getImages() %}
                {% if image.getImageName() is not empty %}
                    <div class=\"listing-gallery-item\" style=\"background-image: url('{{ vich_uploader_asset(image, 'image') }}');\"></div>
                {% endif %}
            {% endfor %}
        </div><!-- /.listing-gallery -->

        {% include 'FrontBundle::Listing/Header/content.html.twig' %}
    </div><!-- /.listing-gallery-wrapper -->
{% endif %}", "FrontBundle::Listing/Header/gallery.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/Header/gallery.html.twig");
    }
}
