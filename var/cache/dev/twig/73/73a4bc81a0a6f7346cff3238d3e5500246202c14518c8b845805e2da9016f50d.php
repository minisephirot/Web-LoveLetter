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
        $__internal_2f1f1346a5ba027a6d038cccfa4a68a58991d7dccc7b13e72a99ac35805749bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1f1346a5ba027a6d038cccfa4a68a58991d7dccc7b13e72a99ac35805749bb->enter($__internal_2f1f1346a5ba027a6d038cccfa4a68a58991d7dccc7b13e72a99ac35805749bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_201f7a5cd12ad792132172aa2b7f3c463ce82c3cc843622c2d49420bcd4c09a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201f7a5cd12ad792132172aa2b7f3c463ce82c3cc843622c2d49420bcd4c09a5->enter($__internal_201f7a5cd12ad792132172aa2b7f3c463ce82c3cc843622c2d49420bcd4c09a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_2f1f1346a5ba027a6d038cccfa4a68a58991d7dccc7b13e72a99ac35805749bb->leave($__internal_2f1f1346a5ba027a6d038cccfa4a68a58991d7dccc7b13e72a99ac35805749bb_prof);

        
        $__internal_201f7a5cd12ad792132172aa2b7f3c463ce82c3cc843622c2d49420bcd4c09a5->leave($__internal_201f7a5cd12ad792132172aa2b7f3c463ce82c3cc843622c2d49420bcd4c09a5_prof);

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
