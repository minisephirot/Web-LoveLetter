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
        $__internal_15baa1c1b4d4989f142e84cd04f41b93fb8db20e177b5e8a74945c39f4b6aa5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15baa1c1b4d4989f142e84cd04f41b93fb8db20e177b5e8a74945c39f4b6aa5f->enter($__internal_15baa1c1b4d4989f142e84cd04f41b93fb8db20e177b5e8a74945c39f4b6aa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_456120b55f53c102ca8e8744a632068a9ecb838e5c88a72ccab186561de08e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456120b55f53c102ca8e8744a632068a9ecb838e5c88a72ccab186561de08e43->enter($__internal_456120b55f53c102ca8e8744a632068a9ecb838e5c88a72ccab186561de08e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_15baa1c1b4d4989f142e84cd04f41b93fb8db20e177b5e8a74945c39f4b6aa5f->leave($__internal_15baa1c1b4d4989f142e84cd04f41b93fb8db20e177b5e8a74945c39f4b6aa5f_prof);

        
        $__internal_456120b55f53c102ca8e8744a632068a9ecb838e5c88a72ccab186561de08e43->leave($__internal_456120b55f53c102ca8e8744a632068a9ecb838e5c88a72ccab186561de08e43_prof);

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
