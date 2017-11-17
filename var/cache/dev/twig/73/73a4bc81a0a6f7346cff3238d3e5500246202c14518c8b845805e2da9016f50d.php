<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a1278650c05506634c3c4de2f22add4c021c2d2193b992ba8674a98b0a1b7938 extends Twig_Template
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
        $__internal_3eb302d7a13ff75536f59ef4f2a07a4c592e67b421d4bdcdde637af9a4a388ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb302d7a13ff75536f59ef4f2a07a4c592e67b421d4bdcdde637af9a4a388ab->enter($__internal_3eb302d7a13ff75536f59ef4f2a07a4c592e67b421d4bdcdde637af9a4a388ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_dc727f4e58d97635f9a37e8e082607a0af8f0030cf24e6d7902099f37079a552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc727f4e58d97635f9a37e8e082607a0af8f0030cf24e6d7902099f37079a552->enter($__internal_dc727f4e58d97635f9a37e8e082607a0af8f0030cf24e6d7902099f37079a552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3eb302d7a13ff75536f59ef4f2a07a4c592e67b421d4bdcdde637af9a4a388ab->leave($__internal_3eb302d7a13ff75536f59ef4f2a07a4c592e67b421d4bdcdde637af9a4a388ab_prof);

        
        $__internal_dc727f4e58d97635f9a37e8e082607a0af8f0030cf24e6d7902099f37079a552->leave($__internal_dc727f4e58d97635f9a37e8e082607a0af8f0030cf24e6d7902099f37079a552_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
