<?php

/* FrontBundle::Helper/footer.html.twig */
class __TwigTemplate_e353ba8a3a5eab3da3d15482777503beb51c797286efe8b52a030972e689f2af extends Twig_Template
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
        $__internal_ea88003cf7bac358ef11f8da2469b2fc989bc9b5ec0e5d559b113ed32ed1c1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea88003cf7bac358ef11f8da2469b2fc989bc9b5ec0e5d559b113ed32ed1c1fd->enter($__internal_ea88003cf7bac358ef11f8da2469b2fc989bc9b5ec0e5d559b113ed32ed1c1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Helper/footer.html.twig"));

        $__internal_de771bac8e369053310a1f18cd4a197756272eb8b51ffeff711c5d146da1fb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de771bac8e369053310a1f18cd4a197756272eb8b51ffeff711c5d146da1fb8b->enter($__internal_de771bac8e369053310a1f18cd4a197756272eb8b51ffeff711c5d146da1fb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Helper/footer.html.twig"));

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
        
        $__internal_ea88003cf7bac358ef11f8da2469b2fc989bc9b5ec0e5d559b113ed32ed1c1fd->leave($__internal_ea88003cf7bac358ef11f8da2469b2fc989bc9b5ec0e5d559b113ed32ed1c1fd_prof);

        
        $__internal_de771bac8e369053310a1f18cd4a197756272eb8b51ffeff711c5d146da1fb8b->leave($__internal_de771bac8e369053310a1f18cd4a197756272eb8b51ffeff711c5d146da1fb8b_prof);

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
        return array (  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-wrapper\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"footer-left\">
                <p>
                    &copy; {{ 'now'|date('Y') }} {{ 'All rights reserved.'|trans }} {{ 'Created by'|trans }} <a href=\"http://wearecodevision.com\">Code Vision</a>.
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
</div><!-- /.footer-wrapper -->", "FrontBundle::Helper/footer.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/footer.html.twig");
    }
}
