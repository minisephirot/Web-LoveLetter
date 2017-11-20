<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d43a273a1befc7065d8612882e2b29b81b56e586bf77a5adc2daff9d4e5cd05b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d1f2f5cbd8def06af23985e42ee612ab737e6b063354860818a2a8a0d1610a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1f2f5cbd8def06af23985e42ee612ab737e6b063354860818a2a8a0d1610a0->enter($__internal_6d1f2f5cbd8def06af23985e42ee612ab737e6b063354860818a2a8a0d1610a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_119af1a822885c2986806eb21a79df626a9e6850b92b4b09b1fb5f7088fe696d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119af1a822885c2986806eb21a79df626a9e6850b92b4b09b1fb5f7088fe696d->enter($__internal_119af1a822885c2986806eb21a79df626a9e6850b92b4b09b1fb5f7088fe696d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d1f2f5cbd8def06af23985e42ee612ab737e6b063354860818a2a8a0d1610a0->leave($__internal_6d1f2f5cbd8def06af23985e42ee612ab737e6b063354860818a2a8a0d1610a0_prof);

        
        $__internal_119af1a822885c2986806eb21a79df626a9e6850b92b4b09b1fb5f7088fe696d->leave($__internal_119af1a822885c2986806eb21a79df626a9e6850b92b4b09b1fb5f7088fe696d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7485fd4c0a4b732430ab1b88d6af3327e1a3087c30c10b6385884a465471afc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7485fd4c0a4b732430ab1b88d6af3327e1a3087c30c10b6385884a465471afc5->enter($__internal_7485fd4c0a4b732430ab1b88d6af3327e1a3087c30c10b6385884a465471afc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_47d0abd306285c20364f79dccf3419bbe68dc8ef088be39373724c8cc4d0e0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d0abd306285c20364f79dccf3419bbe68dc8ef088be39373724c8cc4d0e0df->enter($__internal_47d0abd306285c20364f79dccf3419bbe68dc8ef088be39373724c8cc4d0e0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_47d0abd306285c20364f79dccf3419bbe68dc8ef088be39373724c8cc4d0e0df->leave($__internal_47d0abd306285c20364f79dccf3419bbe68dc8ef088be39373724c8cc4d0e0df_prof);

        
        $__internal_7485fd4c0a4b732430ab1b88d6af3327e1a3087c30c10b6385884a465471afc5->leave($__internal_7485fd4c0a4b732430ab1b88d6af3327e1a3087c30c10b6385884a465471afc5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
