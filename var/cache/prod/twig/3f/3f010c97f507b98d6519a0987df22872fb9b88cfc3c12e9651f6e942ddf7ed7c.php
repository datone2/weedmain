<?php

/* FrontBundle::Helper/footer.html.twig */
class __TwigTemplate_b7aee0ca00bc9f15ad00c6cf3ef5e71ee23eb2081a420c3849c9a8d827f79a28 extends Twig_Template
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
        echo "<div class=\"footer-wrapper\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"footer-left\">
                <p>
                    &copy; ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All rights reserved."), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created by"), "html", null, true);
        echo " <a href=\"http://wearecodevision.com\">Code Vision</a>.
                </p>
            </div><!-- /.footer-left-->

            <div class=\"footer-right\">
                <ul>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>

                    <li>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>

                    <li>
                        <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                    </li>
                </ul>
            </div><!-- /.footer-right -->
        </div><!-- /.container -->
    </div><!-- /.footer -->
</div><!-- /.footer-wrapper -->";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Helper/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Helper/footer.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/footer.html.twig");
    }
}
