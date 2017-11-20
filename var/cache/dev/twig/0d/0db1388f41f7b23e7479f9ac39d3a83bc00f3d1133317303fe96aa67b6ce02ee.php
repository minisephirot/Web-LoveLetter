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
        $__internal_dcff47f027c7436ca07e4595a46f07a6e88c72807c5e6a05fd7651c78b42713c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcff47f027c7436ca07e4595a46f07a6e88c72807c5e6a05fd7651c78b42713c->enter($__internal_dcff47f027c7436ca07e4595a46f07a6e88c72807c5e6a05fd7651c78b42713c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_48fd7f53e190af0c1894fa0a68b428cb0d10ac189b2dc7bc066913a6de1e1f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fd7f53e190af0c1894fa0a68b428cb0d10ac189b2dc7bc066913a6de1e1f2b->enter($__internal_48fd7f53e190af0c1894fa0a68b428cb0d10ac189b2dc7bc066913a6de1e1f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dcff47f027c7436ca07e4595a46f07a6e88c72807c5e6a05fd7651c78b42713c->leave($__internal_dcff47f027c7436ca07e4595a46f07a6e88c72807c5e6a05fd7651c78b42713c_prof);

        
        $__internal_48fd7f53e190af0c1894fa0a68b428cb0d10ac189b2dc7bc066913a6de1e1f2b->leave($__internal_48fd7f53e190af0c1894fa0a68b428cb0d10ac189b2dc7bc066913a6de1e1f2b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fbdf28f438837d70453ae7d494c6f7aa79ae832849908a4045adfc444a95ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fbdf28f438837d70453ae7d494c6f7aa79ae832849908a4045adfc444a95ba2->enter($__internal_0fbdf28f438837d70453ae7d494c6f7aa79ae832849908a4045adfc444a95ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74db12b88d4a2046671d7e50b3f5d00d891087242d685a0bc5c3164228ec4fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74db12b88d4a2046671d7e50b3f5d00d891087242d685a0bc5c3164228ec4fbf->enter($__internal_74db12b88d4a2046671d7e50b3f5d00d891087242d685a0bc5c3164228ec4fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_74db12b88d4a2046671d7e50b3f5d00d891087242d685a0bc5c3164228ec4fbf->leave($__internal_74db12b88d4a2046671d7e50b3f5d00d891087242d685a0bc5c3164228ec4fbf_prof);

        
        $__internal_0fbdf28f438837d70453ae7d494c6f7aa79ae832849908a4045adfc444a95ba2->leave($__internal_0fbdf28f438837d70453ae7d494c6f7aa79ae832849908a4045adfc444a95ba2_prof);

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
