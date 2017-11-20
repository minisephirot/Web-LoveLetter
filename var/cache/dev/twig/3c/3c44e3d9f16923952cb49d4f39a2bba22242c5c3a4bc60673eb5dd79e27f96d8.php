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
        $__internal_153811bd0ebd9e834c221ecfda34b0b11930c8bfc779306df2ca79f6069f0ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153811bd0ebd9e834c221ecfda34b0b11930c8bfc779306df2ca79f6069f0ceb->enter($__internal_153811bd0ebd9e834c221ecfda34b0b11930c8bfc779306df2ca79f6069f0ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d855b7dc3f2db8cb9b99f1d9109e3ea1355bef025b75e8e3ff914563eab2847c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d855b7dc3f2db8cb9b99f1d9109e3ea1355bef025b75e8e3ff914563eab2847c->enter($__internal_d855b7dc3f2db8cb9b99f1d9109e3ea1355bef025b75e8e3ff914563eab2847c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_153811bd0ebd9e834c221ecfda34b0b11930c8bfc779306df2ca79f6069f0ceb->leave($__internal_153811bd0ebd9e834c221ecfda34b0b11930c8bfc779306df2ca79f6069f0ceb_prof);

        
        $__internal_d855b7dc3f2db8cb9b99f1d9109e3ea1355bef025b75e8e3ff914563eab2847c->leave($__internal_d855b7dc3f2db8cb9b99f1d9109e3ea1355bef025b75e8e3ff914563eab2847c_prof);

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
