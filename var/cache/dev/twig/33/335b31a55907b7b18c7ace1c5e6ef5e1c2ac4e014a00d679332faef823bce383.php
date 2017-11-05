<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b55ba1aec3f18cb53fbb155c0fece24e000215d002b94cd52275594f2bd15144 extends Twig_Template
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
        $__internal_ad6b1ca67967b18055e8014fd2336e03db20852e14404651bb226c6be28e1899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6b1ca67967b18055e8014fd2336e03db20852e14404651bb226c6be28e1899->enter($__internal_ad6b1ca67967b18055e8014fd2336e03db20852e14404651bb226c6be28e1899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7e1089f6949013ba6143b4bfc8d1b7ad72eddc71a564f91ce8715c7971a96a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1089f6949013ba6143b4bfc8d1b7ad72eddc71a564f91ce8715c7971a96a03->enter($__internal_7e1089f6949013ba6143b4bfc8d1b7ad72eddc71a564f91ce8715c7971a96a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ad6b1ca67967b18055e8014fd2336e03db20852e14404651bb226c6be28e1899->leave($__internal_ad6b1ca67967b18055e8014fd2336e03db20852e14404651bb226c6be28e1899_prof);

        
        $__internal_7e1089f6949013ba6143b4bfc8d1b7ad72eddc71a564f91ce8715c7971a96a03->leave($__internal_7e1089f6949013ba6143b4bfc8d1b7ad72eddc71a564f91ce8715c7971a96a03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
