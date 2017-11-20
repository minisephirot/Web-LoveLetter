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
        $__internal_82b251477cd0342cc2e21445ed60b9d3524b92a1cc4d6f3dd5526e60e2942602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b251477cd0342cc2e21445ed60b9d3524b92a1cc4d6f3dd5526e60e2942602->enter($__internal_82b251477cd0342cc2e21445ed60b9d3524b92a1cc4d6f3dd5526e60e2942602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6fbffcae9ef41689c3be7699f2d23aaafa71aa1d3555ceaf657c12bebb9e6b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbffcae9ef41689c3be7699f2d23aaafa71aa1d3555ceaf657c12bebb9e6b82->enter($__internal_6fbffcae9ef41689c3be7699f2d23aaafa71aa1d3555ceaf657c12bebb9e6b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_82b251477cd0342cc2e21445ed60b9d3524b92a1cc4d6f3dd5526e60e2942602->leave($__internal_82b251477cd0342cc2e21445ed60b9d3524b92a1cc4d6f3dd5526e60e2942602_prof);

        
        $__internal_6fbffcae9ef41689c3be7699f2d23aaafa71aa1d3555ceaf657c12bebb9e6b82->leave($__internal_6fbffcae9ef41689c3be7699f2d23aaafa71aa1d3555ceaf657c12bebb9e6b82_prof);

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
