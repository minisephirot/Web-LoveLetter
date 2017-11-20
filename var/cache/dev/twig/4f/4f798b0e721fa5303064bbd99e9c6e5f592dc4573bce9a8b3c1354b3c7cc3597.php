<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_aed538842a391c4c6fafba07f44399040e8d74788965be95267ff5a49a2a5169 extends Twig_Template
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
        $__internal_43d2b2d56d6239f572d3bf0572b00724c1c2b1f484bc5795f4b25ea0f799d754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d2b2d56d6239f572d3bf0572b00724c1c2b1f484bc5795f4b25ea0f799d754->enter($__internal_43d2b2d56d6239f572d3bf0572b00724c1c2b1f484bc5795f4b25ea0f799d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_c1d7eb2accc4b3f07fcc4eee77130bbb74d9b62b9eb84af293f1245de358dac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d7eb2accc4b3f07fcc4eee77130bbb74d9b62b9eb84af293f1245de358dac9->enter($__internal_c1d7eb2accc4b3f07fcc4eee77130bbb74d9b62b9eb84af293f1245de358dac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_43d2b2d56d6239f572d3bf0572b00724c1c2b1f484bc5795f4b25ea0f799d754->leave($__internal_43d2b2d56d6239f572d3bf0572b00724c1c2b1f484bc5795f4b25ea0f799d754_prof);

        
        $__internal_c1d7eb2accc4b3f07fcc4eee77130bbb74d9b62b9eb84af293f1245de358dac9->leave($__internal_c1d7eb2accc4b3f07fcc4eee77130bbb74d9b62b9eb84af293f1245de358dac9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
