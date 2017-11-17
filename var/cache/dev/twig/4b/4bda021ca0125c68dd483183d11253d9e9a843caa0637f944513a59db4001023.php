<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_4820f21454d21758bc93ecedc1d6bc5adbf91415d167399e9284ed635dc4fd51 extends Twig_Template
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
        $__internal_e1bb3870b8410de25d63f27dfb362d9a854d28a4738fadd8414073ed14252e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1bb3870b8410de25d63f27dfb362d9a854d28a4738fadd8414073ed14252e8c->enter($__internal_e1bb3870b8410de25d63f27dfb362d9a854d28a4738fadd8414073ed14252e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_a2599f26f7e527c9d3295d0b843239efc490a8437c72cdab3f0b273661279fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2599f26f7e527c9d3295d0b843239efc490a8437c72cdab3f0b273661279fe2->enter($__internal_a2599f26f7e527c9d3295d0b843239efc490a8437c72cdab3f0b273661279fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_e1bb3870b8410de25d63f27dfb362d9a854d28a4738fadd8414073ed14252e8c->leave($__internal_e1bb3870b8410de25d63f27dfb362d9a854d28a4738fadd8414073ed14252e8c_prof);

        
        $__internal_a2599f26f7e527c9d3295d0b843239efc490a8437c72cdab3f0b273661279fe2->leave($__internal_a2599f26f7e527c9d3295d0b843239efc490a8437c72cdab3f0b273661279fe2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
