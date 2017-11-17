<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_674868bf46d5ac4ed72fd294002ae309ddd0571d7a7c1010bb8544e176704102 extends Twig_Template
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
        $__internal_4fd6e0c45dc6595326d9f28818b49666289190c856ae6089de6bd0a32cf6f2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd6e0c45dc6595326d9f28818b49666289190c856ae6089de6bd0a32cf6f2a7->enter($__internal_4fd6e0c45dc6595326d9f28818b49666289190c856ae6089de6bd0a32cf6f2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_05a006325f589ec71580bae253bb93c5b0879a8cfb04acab99c4cbd091614a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a006325f589ec71580bae253bb93c5b0879a8cfb04acab99c4cbd091614a5c->enter($__internal_05a006325f589ec71580bae253bb93c5b0879a8cfb04acab99c4cbd091614a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4fd6e0c45dc6595326d9f28818b49666289190c856ae6089de6bd0a32cf6f2a7->leave($__internal_4fd6e0c45dc6595326d9f28818b49666289190c856ae6089de6bd0a32cf6f2a7_prof);

        
        $__internal_05a006325f589ec71580bae253bb93c5b0879a8cfb04acab99c4cbd091614a5c->leave($__internal_05a006325f589ec71580bae253bb93c5b0879a8cfb04acab99c4cbd091614a5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
