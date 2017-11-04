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
        $__internal_0bd0293c3d4933aa011639582341ca40054ff64927516d38874332d03162958b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd0293c3d4933aa011639582341ca40054ff64927516d38874332d03162958b->enter($__internal_0bd0293c3d4933aa011639582341ca40054ff64927516d38874332d03162958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_f2f639b7ffcd0d7e1e72eeb535735e99f0996e19e02a7a01a447128cfc2cd394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f639b7ffcd0d7e1e72eeb535735e99f0996e19e02a7a01a447128cfc2cd394->enter($__internal_f2f639b7ffcd0d7e1e72eeb535735e99f0996e19e02a7a01a447128cfc2cd394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_0bd0293c3d4933aa011639582341ca40054ff64927516d38874332d03162958b->leave($__internal_0bd0293c3d4933aa011639582341ca40054ff64927516d38874332d03162958b_prof);

        
        $__internal_f2f639b7ffcd0d7e1e72eeb535735e99f0996e19e02a7a01a447128cfc2cd394->leave($__internal_f2f639b7ffcd0d7e1e72eeb535735e99f0996e19e02a7a01a447128cfc2cd394_prof);

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
