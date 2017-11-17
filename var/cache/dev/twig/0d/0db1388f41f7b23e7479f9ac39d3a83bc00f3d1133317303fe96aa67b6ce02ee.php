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
        $__internal_79905c33a19567844f10d5cfed62e1277e76061db9eb42922c41a25ff0018cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79905c33a19567844f10d5cfed62e1277e76061db9eb42922c41a25ff0018cf3->enter($__internal_79905c33a19567844f10d5cfed62e1277e76061db9eb42922c41a25ff0018cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_26257e0893a59f3e5116409d657bb72622ea2d8d81b20fba54ff028f2d64c6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26257e0893a59f3e5116409d657bb72622ea2d8d81b20fba54ff028f2d64c6b0->enter($__internal_26257e0893a59f3e5116409d657bb72622ea2d8d81b20fba54ff028f2d64c6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_79905c33a19567844f10d5cfed62e1277e76061db9eb42922c41a25ff0018cf3->leave($__internal_79905c33a19567844f10d5cfed62e1277e76061db9eb42922c41a25ff0018cf3_prof);

        
        $__internal_26257e0893a59f3e5116409d657bb72622ea2d8d81b20fba54ff028f2d64c6b0->leave($__internal_26257e0893a59f3e5116409d657bb72622ea2d8d81b20fba54ff028f2d64c6b0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_63674d431ca60f13fecb2ab61287d13e841d0a9bd7673cac09879f19d3b0269d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63674d431ca60f13fecb2ab61287d13e841d0a9bd7673cac09879f19d3b0269d->enter($__internal_63674d431ca60f13fecb2ab61287d13e841d0a9bd7673cac09879f19d3b0269d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5891c15f3dd9ddf20394a73884db3e7572d92530529b2bdc64fe9fd81d4ab834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5891c15f3dd9ddf20394a73884db3e7572d92530529b2bdc64fe9fd81d4ab834->enter($__internal_5891c15f3dd9ddf20394a73884db3e7572d92530529b2bdc64fe9fd81d4ab834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5891c15f3dd9ddf20394a73884db3e7572d92530529b2bdc64fe9fd81d4ab834->leave($__internal_5891c15f3dd9ddf20394a73884db3e7572d92530529b2bdc64fe9fd81d4ab834_prof);

        
        $__internal_63674d431ca60f13fecb2ab61287d13e841d0a9bd7673cac09879f19d3b0269d->leave($__internal_63674d431ca60f13fecb2ab61287d13e841d0a9bd7673cac09879f19d3b0269d_prof);

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
