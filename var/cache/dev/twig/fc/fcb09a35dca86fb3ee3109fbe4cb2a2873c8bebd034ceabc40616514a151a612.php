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
        $__internal_bf9f71f0d0884fd77d06ba09f198ef517eb8babffec602d5ac1bcf8c5bcc8669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9f71f0d0884fd77d06ba09f198ef517eb8babffec602d5ac1bcf8c5bcc8669->enter($__internal_bf9f71f0d0884fd77d06ba09f198ef517eb8babffec602d5ac1bcf8c5bcc8669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_02e9d2760ac7735502be527d36d8c7de19f4bcb338978aca9b16bc5ce1dc62d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e9d2760ac7735502be527d36d8c7de19f4bcb338978aca9b16bc5ce1dc62d7->enter($__internal_02e9d2760ac7735502be527d36d8c7de19f4bcb338978aca9b16bc5ce1dc62d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_bf9f71f0d0884fd77d06ba09f198ef517eb8babffec602d5ac1bcf8c5bcc8669->leave($__internal_bf9f71f0d0884fd77d06ba09f198ef517eb8babffec602d5ac1bcf8c5bcc8669_prof);

        
        $__internal_02e9d2760ac7735502be527d36d8c7de19f4bcb338978aca9b16bc5ce1dc62d7->leave($__internal_02e9d2760ac7735502be527d36d8c7de19f4bcb338978aca9b16bc5ce1dc62d7_prof);

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
