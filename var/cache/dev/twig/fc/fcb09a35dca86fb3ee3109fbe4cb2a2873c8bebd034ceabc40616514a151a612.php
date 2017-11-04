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
        $__internal_6c0739f229227282014a9d6297b00a1666ae450f2b44b32249022ac08e4d487a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0739f229227282014a9d6297b00a1666ae450f2b44b32249022ac08e4d487a->enter($__internal_6c0739f229227282014a9d6297b00a1666ae450f2b44b32249022ac08e4d487a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5bbfd44fb1ddc322919a259dbffc916e314bdae4ab9582fb4acb22612bd1f02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbfd44fb1ddc322919a259dbffc916e314bdae4ab9582fb4acb22612bd1f02a->enter($__internal_5bbfd44fb1ddc322919a259dbffc916e314bdae4ab9582fb4acb22612bd1f02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_6c0739f229227282014a9d6297b00a1666ae450f2b44b32249022ac08e4d487a->leave($__internal_6c0739f229227282014a9d6297b00a1666ae450f2b44b32249022ac08e4d487a_prof);

        
        $__internal_5bbfd44fb1ddc322919a259dbffc916e314bdae4ab9582fb4acb22612bd1f02a->leave($__internal_5bbfd44fb1ddc322919a259dbffc916e314bdae4ab9582fb4acb22612bd1f02a_prof);

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
