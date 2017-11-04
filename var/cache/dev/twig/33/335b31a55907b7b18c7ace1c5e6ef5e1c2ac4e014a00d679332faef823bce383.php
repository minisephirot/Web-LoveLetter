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
        $__internal_5c81aaa828f61d4ac1372d6c0e1bcf23fab3984dfe18cd2cc375301b78d4e535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c81aaa828f61d4ac1372d6c0e1bcf23fab3984dfe18cd2cc375301b78d4e535->enter($__internal_5c81aaa828f61d4ac1372d6c0e1bcf23fab3984dfe18cd2cc375301b78d4e535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dcbe732cd71339e6c2aaa3375021496caf44a23dd81d43f76cab220fa41421c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbe732cd71339e6c2aaa3375021496caf44a23dd81d43f76cab220fa41421c9->enter($__internal_dcbe732cd71339e6c2aaa3375021496caf44a23dd81d43f76cab220fa41421c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5c81aaa828f61d4ac1372d6c0e1bcf23fab3984dfe18cd2cc375301b78d4e535->leave($__internal_5c81aaa828f61d4ac1372d6c0e1bcf23fab3984dfe18cd2cc375301b78d4e535_prof);

        
        $__internal_dcbe732cd71339e6c2aaa3375021496caf44a23dd81d43f76cab220fa41421c9->leave($__internal_dcbe732cd71339e6c2aaa3375021496caf44a23dd81d43f76cab220fa41421c9_prof);

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
