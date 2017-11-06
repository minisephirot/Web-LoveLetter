<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_95d5e109dc50e2922524c20a5114fa79bce02f829845b842b1fcb6c79b6a005d extends Twig_Template
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
        $__internal_f0a2129d95bfec538385605990b1a2c68287d6c69884bb17996d3e27c3c102c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a2129d95bfec538385605990b1a2c68287d6c69884bb17996d3e27c3c102c1->enter($__internal_f0a2129d95bfec538385605990b1a2c68287d6c69884bb17996d3e27c3c102c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d89a2ff781a3d67ab03465302f8c4fa800eadd726fe594bea57c8c313ac59ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89a2ff781a3d67ab03465302f8c4fa800eadd726fe594bea57c8c313ac59ec4->enter($__internal_d89a2ff781a3d67ab03465302f8c4fa800eadd726fe594bea57c8c313ac59ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f0a2129d95bfec538385605990b1a2c68287d6c69884bb17996d3e27c3c102c1->leave($__internal_f0a2129d95bfec538385605990b1a2c68287d6c69884bb17996d3e27c3c102c1_prof);

        
        $__internal_d89a2ff781a3d67ab03465302f8c4fa800eadd726fe594bea57c8c313ac59ec4->leave($__internal_d89a2ff781a3d67ab03465302f8c4fa800eadd726fe594bea57c8c313ac59ec4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
