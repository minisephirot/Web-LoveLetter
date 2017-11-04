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
        $__internal_61c2f03401048e5d7ef57e2d3e3cad52a1ae62026f32c48370083e002a916516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c2f03401048e5d7ef57e2d3e3cad52a1ae62026f32c48370083e002a916516->enter($__internal_61c2f03401048e5d7ef57e2d3e3cad52a1ae62026f32c48370083e002a916516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6278a3435df0999fe6b8c7d81b534ac0b4fe5958d26fc814ab74a2bc53f2c270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6278a3435df0999fe6b8c7d81b534ac0b4fe5958d26fc814ab74a2bc53f2c270->enter($__internal_6278a3435df0999fe6b8c7d81b534ac0b4fe5958d26fc814ab74a2bc53f2c270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_61c2f03401048e5d7ef57e2d3e3cad52a1ae62026f32c48370083e002a916516->leave($__internal_61c2f03401048e5d7ef57e2d3e3cad52a1ae62026f32c48370083e002a916516_prof);

        
        $__internal_6278a3435df0999fe6b8c7d81b534ac0b4fe5958d26fc814ab74a2bc53f2c270->leave($__internal_6278a3435df0999fe6b8c7d81b534ac0b4fe5958d26fc814ab74a2bc53f2c270_prof);

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
