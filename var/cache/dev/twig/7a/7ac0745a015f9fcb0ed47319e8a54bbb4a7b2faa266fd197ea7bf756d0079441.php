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
        $__internal_268ce4cca9f0555cf5bb91f8839170c523dfb86f2d1bb3f93f14941d1067d366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268ce4cca9f0555cf5bb91f8839170c523dfb86f2d1bb3f93f14941d1067d366->enter($__internal_268ce4cca9f0555cf5bb91f8839170c523dfb86f2d1bb3f93f14941d1067d366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_bbdae0ec0dfb473303a4750652e244d6b7663b5c3ed5397998ebf4994e06e18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdae0ec0dfb473303a4750652e244d6b7663b5c3ed5397998ebf4994e06e18d->enter($__internal_bbdae0ec0dfb473303a4750652e244d6b7663b5c3ed5397998ebf4994e06e18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_268ce4cca9f0555cf5bb91f8839170c523dfb86f2d1bb3f93f14941d1067d366->leave($__internal_268ce4cca9f0555cf5bb91f8839170c523dfb86f2d1bb3f93f14941d1067d366_prof);

        
        $__internal_bbdae0ec0dfb473303a4750652e244d6b7663b5c3ed5397998ebf4994e06e18d->leave($__internal_bbdae0ec0dfb473303a4750652e244d6b7663b5c3ed5397998ebf4994e06e18d_prof);

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
