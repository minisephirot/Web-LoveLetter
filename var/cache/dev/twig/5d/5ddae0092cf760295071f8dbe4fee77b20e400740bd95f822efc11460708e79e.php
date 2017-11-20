<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a7ba78300f2d384d1a8293a933612a7c4886972b819864d4c080f9e47f5f52d9 extends Twig_Template
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
        $__internal_1bb2ef8d321f87032d93930d7a5703e7b75914e35eaca53c707de27bad35a950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb2ef8d321f87032d93930d7a5703e7b75914e35eaca53c707de27bad35a950->enter($__internal_1bb2ef8d321f87032d93930d7a5703e7b75914e35eaca53c707de27bad35a950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_505c43847495fbb34c0e3fcbc194534f7d237062aff8234823ac3e70bb5e12ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505c43847495fbb34c0e3fcbc194534f7d237062aff8234823ac3e70bb5e12ea->enter($__internal_505c43847495fbb34c0e3fcbc194534f7d237062aff8234823ac3e70bb5e12ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1bb2ef8d321f87032d93930d7a5703e7b75914e35eaca53c707de27bad35a950->leave($__internal_1bb2ef8d321f87032d93930d7a5703e7b75914e35eaca53c707de27bad35a950_prof);

        
        $__internal_505c43847495fbb34c0e3fcbc194534f7d237062aff8234823ac3e70bb5e12ea->leave($__internal_505c43847495fbb34c0e3fcbc194534f7d237062aff8234823ac3e70bb5e12ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
