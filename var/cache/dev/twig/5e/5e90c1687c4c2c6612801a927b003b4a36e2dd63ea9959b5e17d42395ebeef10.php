<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_01e0093f37fd621968a3a88b78e07cfdede904f534997cf2ef8dcbcf9d76fd5e extends Twig_Template
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
        $__internal_2a525b95e19d6d3ecba6bfac2a8ab6a619d4b14e178838688d4899a99ebbe12a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a525b95e19d6d3ecba6bfac2a8ab6a619d4b14e178838688d4899a99ebbe12a->enter($__internal_2a525b95e19d6d3ecba6bfac2a8ab6a619d4b14e178838688d4899a99ebbe12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_6cdb4a6283d76d3e48070b9fa2787b5d3704a8b8bf6729a1dbc108533c6c9771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdb4a6283d76d3e48070b9fa2787b5d3704a8b8bf6729a1dbc108533c6c9771->enter($__internal_6cdb4a6283d76d3e48070b9fa2787b5d3704a8b8bf6729a1dbc108533c6c9771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_2a525b95e19d6d3ecba6bfac2a8ab6a619d4b14e178838688d4899a99ebbe12a->leave($__internal_2a525b95e19d6d3ecba6bfac2a8ab6a619d4b14e178838688d4899a99ebbe12a_prof);

        
        $__internal_6cdb4a6283d76d3e48070b9fa2787b5d3704a8b8bf6729a1dbc108533c6c9771->leave($__internal_6cdb4a6283d76d3e48070b9fa2787b5d3704a8b8bf6729a1dbc108533c6c9771_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
