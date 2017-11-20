<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9f6588ab938828fd0d015ddebc9c70318f11dfede6949f85c6a3b4942e0c523a extends Twig_Template
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
        $__internal_8e1c91b0b55972a96175bdc748a7e0d16b9b93252b67bc8c951af6062ac03f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1c91b0b55972a96175bdc748a7e0d16b9b93252b67bc8c951af6062ac03f02->enter($__internal_8e1c91b0b55972a96175bdc748a7e0d16b9b93252b67bc8c951af6062ac03f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5482d16671b2d790496c92920e2e946281d04c772ec5a903afdb611fa0dee63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5482d16671b2d790496c92920e2e946281d04c772ec5a903afdb611fa0dee63f->enter($__internal_5482d16671b2d790496c92920e2e946281d04c772ec5a903afdb611fa0dee63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8e1c91b0b55972a96175bdc748a7e0d16b9b93252b67bc8c951af6062ac03f02->leave($__internal_8e1c91b0b55972a96175bdc748a7e0d16b9b93252b67bc8c951af6062ac03f02_prof);

        
        $__internal_5482d16671b2d790496c92920e2e946281d04c772ec5a903afdb611fa0dee63f->leave($__internal_5482d16671b2d790496c92920e2e946281d04c772ec5a903afdb611fa0dee63f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
