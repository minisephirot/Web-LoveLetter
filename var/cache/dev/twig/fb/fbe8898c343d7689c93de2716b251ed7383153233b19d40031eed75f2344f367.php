<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b29e3d43fd43f588738104651b85de657cc4007bd80aec3a0cb61e74dca26891 extends Twig_Template
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
        $__internal_ab46863e67daa72d4668490bc1393d54dee7f04ca5c6daf684deedd5a336e859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab46863e67daa72d4668490bc1393d54dee7f04ca5c6daf684deedd5a336e859->enter($__internal_ab46863e67daa72d4668490bc1393d54dee7f04ca5c6daf684deedd5a336e859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_61774b3cb7e95b1a00a6af4f39502a020f5d6d06cec214ece7a84040f2a99b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61774b3cb7e95b1a00a6af4f39502a020f5d6d06cec214ece7a84040f2a99b8c->enter($__internal_61774b3cb7e95b1a00a6af4f39502a020f5d6d06cec214ece7a84040f2a99b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ab46863e67daa72d4668490bc1393d54dee7f04ca5c6daf684deedd5a336e859->leave($__internal_ab46863e67daa72d4668490bc1393d54dee7f04ca5c6daf684deedd5a336e859_prof);

        
        $__internal_61774b3cb7e95b1a00a6af4f39502a020f5d6d06cec214ece7a84040f2a99b8c->leave($__internal_61774b3cb7e95b1a00a6af4f39502a020f5d6d06cec214ece7a84040f2a99b8c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
