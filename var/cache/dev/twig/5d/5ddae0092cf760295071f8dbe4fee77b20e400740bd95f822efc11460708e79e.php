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
        $__internal_fa81662c5cf172c01c11d899adc8b7fb7cd58f58c7870af9e360fd50c7d4dfe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa81662c5cf172c01c11d899adc8b7fb7cd58f58c7870af9e360fd50c7d4dfe1->enter($__internal_fa81662c5cf172c01c11d899adc8b7fb7cd58f58c7870af9e360fd50c7d4dfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f59ab9630b4e93edde586f3f63a001ce9e487b721e803b954260930d3e96bf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59ab9630b4e93edde586f3f63a001ce9e487b721e803b954260930d3e96bf0f->enter($__internal_f59ab9630b4e93edde586f3f63a001ce9e487b721e803b954260930d3e96bf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fa81662c5cf172c01c11d899adc8b7fb7cd58f58c7870af9e360fd50c7d4dfe1->leave($__internal_fa81662c5cf172c01c11d899adc8b7fb7cd58f58c7870af9e360fd50c7d4dfe1_prof);

        
        $__internal_f59ab9630b4e93edde586f3f63a001ce9e487b721e803b954260930d3e96bf0f->leave($__internal_f59ab9630b4e93edde586f3f63a001ce9e487b721e803b954260930d3e96bf0f_prof);

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
