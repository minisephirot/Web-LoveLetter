<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4d30d6cfdeb9426039466a33c6a4d8fa265ee5379aac5dd08ce26690038b3d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43ac93b345f98be478fbc286e0fcb25c9b115ea1dfda9b1fd529ac9e2b94308e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ac93b345f98be478fbc286e0fcb25c9b115ea1dfda9b1fd529ac9e2b94308e->enter($__internal_43ac93b345f98be478fbc286e0fcb25c9b115ea1dfda9b1fd529ac9e2b94308e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_c71ea522b2acc28e87946b2282378cc085d3b004f688744750dab0e66090fb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71ea522b2acc28e87946b2282378cc085d3b004f688744750dab0e66090fb7c->enter($__internal_c71ea522b2acc28e87946b2282378cc085d3b004f688744750dab0e66090fb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_43ac93b345f98be478fbc286e0fcb25c9b115ea1dfda9b1fd529ac9e2b94308e->leave($__internal_43ac93b345f98be478fbc286e0fcb25c9b115ea1dfda9b1fd529ac9e2b94308e_prof);

        
        $__internal_c71ea522b2acc28e87946b2282378cc085d3b004f688744750dab0e66090fb7c->leave($__internal_c71ea522b2acc28e87946b2282378cc085d3b004f688744750dab0e66090fb7c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8cee44f2bc12d65569f1f71e5e9eae830e02d75fa0ffa5ed6ae65cdaf163cc32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cee44f2bc12d65569f1f71e5e9eae830e02d75fa0ffa5ed6ae65cdaf163cc32->enter($__internal_8cee44f2bc12d65569f1f71e5e9eae830e02d75fa0ffa5ed6ae65cdaf163cc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0905264de48629e54ff5f9069b451b4b63aeb6e82566f49a4fbe848f4d7d9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0905264de48629e54ff5f9069b451b4b63aeb6e82566f49a4fbe848f4d7d9dd->enter($__internal_c0905264de48629e54ff5f9069b451b4b63aeb6e82566f49a4fbe848f4d7d9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c0905264de48629e54ff5f9069b451b4b63aeb6e82566f49a4fbe848f4d7d9dd->leave($__internal_c0905264de48629e54ff5f9069b451b4b63aeb6e82566f49a4fbe848f4d7d9dd_prof);

        
        $__internal_8cee44f2bc12d65569f1f71e5e9eae830e02d75fa0ffa5ed6ae65cdaf163cc32->leave($__internal_8cee44f2bc12d65569f1f71e5e9eae830e02d75fa0ffa5ed6ae65cdaf163cc32_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
