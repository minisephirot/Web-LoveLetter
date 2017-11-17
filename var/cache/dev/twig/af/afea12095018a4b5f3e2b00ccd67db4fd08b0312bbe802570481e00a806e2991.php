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
        $__internal_c2a36ea0602256ae49a80f8b0beb83c875acb7e812c538dd64a575b64c2dc1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a36ea0602256ae49a80f8b0beb83c875acb7e812c538dd64a575b64c2dc1e7->enter($__internal_c2a36ea0602256ae49a80f8b0beb83c875acb7e812c538dd64a575b64c2dc1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_2db97ce31f30e5c1133d8c66f0c2829dfc0d2fec6e96aa0b25c5ef19e1b33199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db97ce31f30e5c1133d8c66f0c2829dfc0d2fec6e96aa0b25c5ef19e1b33199->enter($__internal_2db97ce31f30e5c1133d8c66f0c2829dfc0d2fec6e96aa0b25c5ef19e1b33199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c2a36ea0602256ae49a80f8b0beb83c875acb7e812c538dd64a575b64c2dc1e7->leave($__internal_c2a36ea0602256ae49a80f8b0beb83c875acb7e812c538dd64a575b64c2dc1e7_prof);

        
        $__internal_2db97ce31f30e5c1133d8c66f0c2829dfc0d2fec6e96aa0b25c5ef19e1b33199->leave($__internal_2db97ce31f30e5c1133d8c66f0c2829dfc0d2fec6e96aa0b25c5ef19e1b33199_prof);

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
