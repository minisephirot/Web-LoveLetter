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
        $__internal_abf1e5ca91844144b6710c66e6ff8a16edc57eb0aab3bf7dea7153074572bf71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf1e5ca91844144b6710c66e6ff8a16edc57eb0aab3bf7dea7153074572bf71->enter($__internal_abf1e5ca91844144b6710c66e6ff8a16edc57eb0aab3bf7dea7153074572bf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_e95c0cf7f6133468f2305c52336cf7ce3616e4ec6a6e620060535a9e981185d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95c0cf7f6133468f2305c52336cf7ce3616e4ec6a6e620060535a9e981185d7->enter($__internal_e95c0cf7f6133468f2305c52336cf7ce3616e4ec6a6e620060535a9e981185d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_abf1e5ca91844144b6710c66e6ff8a16edc57eb0aab3bf7dea7153074572bf71->leave($__internal_abf1e5ca91844144b6710c66e6ff8a16edc57eb0aab3bf7dea7153074572bf71_prof);

        
        $__internal_e95c0cf7f6133468f2305c52336cf7ce3616e4ec6a6e620060535a9e981185d7->leave($__internal_e95c0cf7f6133468f2305c52336cf7ce3616e4ec6a6e620060535a9e981185d7_prof);

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
