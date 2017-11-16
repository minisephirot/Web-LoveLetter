<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48c4ab9f2dad15df4653eed6d95c4e4a358d52dcf94e2a491f0f9951cc7c5a82 extends Twig_Template
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
        $__internal_185740ab0ccc4be2d0fd1677cfcbc0c5cb4318d1674f03df23d395280ef0a984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185740ab0ccc4be2d0fd1677cfcbc0c5cb4318d1674f03df23d395280ef0a984->enter($__internal_185740ab0ccc4be2d0fd1677cfcbc0c5cb4318d1674f03df23d395280ef0a984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f8facadcdf45fa68a2d2212c4d7ca633f65ec6d798123cdd6649d54442c96818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8facadcdf45fa68a2d2212c4d7ca633f65ec6d798123cdd6649d54442c96818->enter($__internal_f8facadcdf45fa68a2d2212c4d7ca633f65ec6d798123cdd6649d54442c96818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_185740ab0ccc4be2d0fd1677cfcbc0c5cb4318d1674f03df23d395280ef0a984->leave($__internal_185740ab0ccc4be2d0fd1677cfcbc0c5cb4318d1674f03df23d395280ef0a984_prof);

        
        $__internal_f8facadcdf45fa68a2d2212c4d7ca633f65ec6d798123cdd6649d54442c96818->leave($__internal_f8facadcdf45fa68a2d2212c4d7ca633f65ec6d798123cdd6649d54442c96818_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
