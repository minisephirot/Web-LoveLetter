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
        $__internal_c2499a6e83b256fc4cb88a123fa9b6810f25021f0f46e1c02b02a29722f67173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2499a6e83b256fc4cb88a123fa9b6810f25021f0f46e1c02b02a29722f67173->enter($__internal_c2499a6e83b256fc4cb88a123fa9b6810f25021f0f46e1c02b02a29722f67173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_82d854a98a9a511b9d625465b4f917ec1589802f49f492885ad5d9122e8117f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d854a98a9a511b9d625465b4f917ec1589802f49f492885ad5d9122e8117f1->enter($__internal_82d854a98a9a511b9d625465b4f917ec1589802f49f492885ad5d9122e8117f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_c2499a6e83b256fc4cb88a123fa9b6810f25021f0f46e1c02b02a29722f67173->leave($__internal_c2499a6e83b256fc4cb88a123fa9b6810f25021f0f46e1c02b02a29722f67173_prof);

        
        $__internal_82d854a98a9a511b9d625465b4f917ec1589802f49f492885ad5d9122e8117f1->leave($__internal_82d854a98a9a511b9d625465b4f917ec1589802f49f492885ad5d9122e8117f1_prof);

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
