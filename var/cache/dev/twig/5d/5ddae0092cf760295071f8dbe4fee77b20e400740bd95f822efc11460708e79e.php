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
        $__internal_65d84a8ce65089eac8e2ee5011557dd166d502b2856bcc516c35257ffab99a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d84a8ce65089eac8e2ee5011557dd166d502b2856bcc516c35257ffab99a35->enter($__internal_65d84a8ce65089eac8e2ee5011557dd166d502b2856bcc516c35257ffab99a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_47c0ed2cff75e7eb7cf4de9d8ddc083ce9e6ba9023404f5155013264694194bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c0ed2cff75e7eb7cf4de9d8ddc083ce9e6ba9023404f5155013264694194bd->enter($__internal_47c0ed2cff75e7eb7cf4de9d8ddc083ce9e6ba9023404f5155013264694194bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_65d84a8ce65089eac8e2ee5011557dd166d502b2856bcc516c35257ffab99a35->leave($__internal_65d84a8ce65089eac8e2ee5011557dd166d502b2856bcc516c35257ffab99a35_prof);

        
        $__internal_47c0ed2cff75e7eb7cf4de9d8ddc083ce9e6ba9023404f5155013264694194bd->leave($__internal_47c0ed2cff75e7eb7cf4de9d8ddc083ce9e6ba9023404f5155013264694194bd_prof);

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
