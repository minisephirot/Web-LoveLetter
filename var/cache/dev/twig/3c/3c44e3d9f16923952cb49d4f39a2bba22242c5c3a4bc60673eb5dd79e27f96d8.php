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
        $__internal_d30089e977be0cb10f1e7b4e06f744b3b1bbce870b8f1f195f914ff393e942e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30089e977be0cb10f1e7b4e06f744b3b1bbce870b8f1f195f914ff393e942e2->enter($__internal_d30089e977be0cb10f1e7b4e06f744b3b1bbce870b8f1f195f914ff393e942e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2d7a1ca5872703e5adca923144722e822a2f8a53f2bdad08cefc5a16bb771a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7a1ca5872703e5adca923144722e822a2f8a53f2bdad08cefc5a16bb771a44->enter($__internal_2d7a1ca5872703e5adca923144722e822a2f8a53f2bdad08cefc5a16bb771a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d30089e977be0cb10f1e7b4e06f744b3b1bbce870b8f1f195f914ff393e942e2->leave($__internal_d30089e977be0cb10f1e7b4e06f744b3b1bbce870b8f1f195f914ff393e942e2_prof);

        
        $__internal_2d7a1ca5872703e5adca923144722e822a2f8a53f2bdad08cefc5a16bb771a44->leave($__internal_2d7a1ca5872703e5adca923144722e822a2f8a53f2bdad08cefc5a16bb771a44_prof);

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
