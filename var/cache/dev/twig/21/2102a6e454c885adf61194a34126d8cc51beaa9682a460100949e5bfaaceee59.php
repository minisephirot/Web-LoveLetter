<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_bbe4bad4718e6c7ff9d873f9ade875cecbf2ff655d4fe86c28f4441e732483c7 extends Twig_Template
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
        $__internal_87b285300eb34e54f625b5cff960ec3aa07156451abbcf9c054f9d86d9e8046e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b285300eb34e54f625b5cff960ec3aa07156451abbcf9c054f9d86d9e8046e->enter($__internal_87b285300eb34e54f625b5cff960ec3aa07156451abbcf9c054f9d86d9e8046e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_b72d073fead403a6a69f9664791f0ffe5fef600467e4bf7389e1f56094ef5bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72d073fead403a6a69f9664791f0ffe5fef600467e4bf7389e1f56094ef5bf4->enter($__internal_b72d073fead403a6a69f9664791f0ffe5fef600467e4bf7389e1f56094ef5bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_87b285300eb34e54f625b5cff960ec3aa07156451abbcf9c054f9d86d9e8046e->leave($__internal_87b285300eb34e54f625b5cff960ec3aa07156451abbcf9c054f9d86d9e8046e_prof);

        
        $__internal_b72d073fead403a6a69f9664791f0ffe5fef600467e4bf7389e1f56094ef5bf4->leave($__internal_b72d073fead403a6a69f9664791f0ffe5fef600467e4bf7389e1f56094ef5bf4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
