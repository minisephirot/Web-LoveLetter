<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_31a14440d659b2c3e4f51dad75502169c641596f63f5e09414a372dd01b7042d extends Twig_Template
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
        $__internal_303645b9b922e58e374a01603dc2c87e096f84e1672f6d5f634b01a8e8bbaf08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303645b9b922e58e374a01603dc2c87e096f84e1672f6d5f634b01a8e8bbaf08->enter($__internal_303645b9b922e58e374a01603dc2c87e096f84e1672f6d5f634b01a8e8bbaf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ebeddbb665ee16eaab1c0080ad720c8308ffa158c3738004c17023e8dcb04ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebeddbb665ee16eaab1c0080ad720c8308ffa158c3738004c17023e8dcb04ceb->enter($__internal_ebeddbb665ee16eaab1c0080ad720c8308ffa158c3738004c17023e8dcb04ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_303645b9b922e58e374a01603dc2c87e096f84e1672f6d5f634b01a8e8bbaf08->leave($__internal_303645b9b922e58e374a01603dc2c87e096f84e1672f6d5f634b01a8e8bbaf08_prof);

        
        $__internal_ebeddbb665ee16eaab1c0080ad720c8308ffa158c3738004c17023e8dcb04ceb->leave($__internal_ebeddbb665ee16eaab1c0080ad720c8308ffa158c3738004c17023e8dcb04ceb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_656f715d65cdcb1cdd05562436da88760a9369e61950e2641082a9ee1889dac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656f715d65cdcb1cdd05562436da88760a9369e61950e2641082a9ee1889dac8->enter($__internal_656f715d65cdcb1cdd05562436da88760a9369e61950e2641082a9ee1889dac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2f771a539a0955f7a931348f09d1cea4f2e657682d5c91be3fefb79d65eb5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f771a539a0955f7a931348f09d1cea4f2e657682d5c91be3fefb79d65eb5b2->enter($__internal_f2f771a539a0955f7a931348f09d1cea4f2e657682d5c91be3fefb79d65eb5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f2f771a539a0955f7a931348f09d1cea4f2e657682d5c91be3fefb79d65eb5b2->leave($__internal_f2f771a539a0955f7a931348f09d1cea4f2e657682d5c91be3fefb79d65eb5b2_prof);

        
        $__internal_656f715d65cdcb1cdd05562436da88760a9369e61950e2641082a9ee1889dac8->leave($__internal_656f715d65cdcb1cdd05562436da88760a9369e61950e2641082a9ee1889dac8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
