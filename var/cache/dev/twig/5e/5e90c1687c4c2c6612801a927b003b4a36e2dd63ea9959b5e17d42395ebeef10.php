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
        $__internal_3099553371c82d820de00b1ac3b7d3b9acc64de4e5f30994537d5db959d5fae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3099553371c82d820de00b1ac3b7d3b9acc64de4e5f30994537d5db959d5fae6->enter($__internal_3099553371c82d820de00b1ac3b7d3b9acc64de4e5f30994537d5db959d5fae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_831d3bbf55319f91de74892f7c8f147f77fbea3167129c6b0fe4e9aea7e5bee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831d3bbf55319f91de74892f7c8f147f77fbea3167129c6b0fe4e9aea7e5bee2->enter($__internal_831d3bbf55319f91de74892f7c8f147f77fbea3167129c6b0fe4e9aea7e5bee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_3099553371c82d820de00b1ac3b7d3b9acc64de4e5f30994537d5db959d5fae6->leave($__internal_3099553371c82d820de00b1ac3b7d3b9acc64de4e5f30994537d5db959d5fae6_prof);

        
        $__internal_831d3bbf55319f91de74892f7c8f147f77fbea3167129c6b0fe4e9aea7e5bee2->leave($__internal_831d3bbf55319f91de74892f7c8f147f77fbea3167129c6b0fe4e9aea7e5bee2_prof);

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
