<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b9781c0f213beff2a78b860e07049836d68c42b297cf29ecc2407e83e1a6a712 extends Twig_Template
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
        $__internal_4f18affe6732635d09647cb031f88bc28427f2f520822eac2e34a6b8d85bca5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f18affe6732635d09647cb031f88bc28427f2f520822eac2e34a6b8d85bca5d->enter($__internal_4f18affe6732635d09647cb031f88bc28427f2f520822eac2e34a6b8d85bca5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_cc263616158a86309f85ccb445b2ae9929b6ec3ed66b085694c137d759a01ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc263616158a86309f85ccb445b2ae9929b6ec3ed66b085694c137d759a01ec5->enter($__internal_cc263616158a86309f85ccb445b2ae9929b6ec3ed66b085694c137d759a01ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_4f18affe6732635d09647cb031f88bc28427f2f520822eac2e34a6b8d85bca5d->leave($__internal_4f18affe6732635d09647cb031f88bc28427f2f520822eac2e34a6b8d85bca5d_prof);

        
        $__internal_cc263616158a86309f85ccb445b2ae9929b6ec3ed66b085694c137d759a01ec5->leave($__internal_cc263616158a86309f85ccb445b2ae9929b6ec3ed66b085694c137d759a01ec5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
