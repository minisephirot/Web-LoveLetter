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
        $__internal_1e67109055f80c54127fe56f3e640d8a60234eed92657ef20b8cc92e6bf2798f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e67109055f80c54127fe56f3e640d8a60234eed92657ef20b8cc92e6bf2798f->enter($__internal_1e67109055f80c54127fe56f3e640d8a60234eed92657ef20b8cc92e6bf2798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_6bff83bbbd9be60f2d47a1bf3dce4be22f2ca3862b9ca5ae3805e91104a5aeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bff83bbbd9be60f2d47a1bf3dce4be22f2ca3862b9ca5ae3805e91104a5aeb4->enter($__internal_6bff83bbbd9be60f2d47a1bf3dce4be22f2ca3862b9ca5ae3805e91104a5aeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1e67109055f80c54127fe56f3e640d8a60234eed92657ef20b8cc92e6bf2798f->leave($__internal_1e67109055f80c54127fe56f3e640d8a60234eed92657ef20b8cc92e6bf2798f_prof);

        
        $__internal_6bff83bbbd9be60f2d47a1bf3dce4be22f2ca3862b9ca5ae3805e91104a5aeb4->leave($__internal_6bff83bbbd9be60f2d47a1bf3dce4be22f2ca3862b9ca5ae3805e91104a5aeb4_prof);

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
