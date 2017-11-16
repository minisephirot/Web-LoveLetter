<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f2298376ca530357c4d991fd4c0af6657e3b20345e3eb9058b20888450262094 extends Twig_Template
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
        $__internal_f4a9f8fe910adb83e4a9845ecaa4134f905314563bbf1e235b396317351983df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a9f8fe910adb83e4a9845ecaa4134f905314563bbf1e235b396317351983df->enter($__internal_f4a9f8fe910adb83e4a9845ecaa4134f905314563bbf1e235b396317351983df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_43de5f707dde99c87f907019589191f8d226cfb592cf60eb9f1d309a51cb2674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43de5f707dde99c87f907019589191f8d226cfb592cf60eb9f1d309a51cb2674->enter($__internal_43de5f707dde99c87f907019589191f8d226cfb592cf60eb9f1d309a51cb2674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f4a9f8fe910adb83e4a9845ecaa4134f905314563bbf1e235b396317351983df->leave($__internal_f4a9f8fe910adb83e4a9845ecaa4134f905314563bbf1e235b396317351983df_prof);

        
        $__internal_43de5f707dde99c87f907019589191f8d226cfb592cf60eb9f1d309a51cb2674->leave($__internal_43de5f707dde99c87f907019589191f8d226cfb592cf60eb9f1d309a51cb2674_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
