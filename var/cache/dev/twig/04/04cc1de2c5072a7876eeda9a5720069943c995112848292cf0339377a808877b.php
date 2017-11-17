<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_858412964d9da81a1bba72a469f0efb5765ef32d6ce03c9ee8a69e23b6226531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_eb8460909b9e669ad0375b8f52aa586373d7d61f162734587234c676ce1b8986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8460909b9e669ad0375b8f52aa586373d7d61f162734587234c676ce1b8986->enter($__internal_eb8460909b9e669ad0375b8f52aa586373d7d61f162734587234c676ce1b8986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_f32e8c527902895de88b193f518f41b244d68ed115c2cdc4011c1870c8700f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32e8c527902895de88b193f518f41b244d68ed115c2cdc4011c1870c8700f76->enter($__internal_f32e8c527902895de88b193f518f41b244d68ed115c2cdc4011c1870c8700f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb8460909b9e669ad0375b8f52aa586373d7d61f162734587234c676ce1b8986->leave($__internal_eb8460909b9e669ad0375b8f52aa586373d7d61f162734587234c676ce1b8986_prof);

        
        $__internal_f32e8c527902895de88b193f518f41b244d68ed115c2cdc4011c1870c8700f76->leave($__internal_f32e8c527902895de88b193f518f41b244d68ed115c2cdc4011c1870c8700f76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd57b43287162954639eeed37a38dc4c2c0ab26a43b5b8c3231f78af144d1b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd57b43287162954639eeed37a38dc4c2c0ab26a43b5b8c3231f78af144d1b6b->enter($__internal_dd57b43287162954639eeed37a38dc4c2c0ab26a43b5b8c3231f78af144d1b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_53cdf847cdf25b11d646c09ca1cef62ecd5fc3b03afc8509ccc0b836dd73622e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cdf847cdf25b11d646c09ca1cef62ecd5fc3b03afc8509ccc0b836dd73622e->enter($__internal_53cdf847cdf25b11d646c09ca1cef62ecd5fc3b03afc8509ccc0b836dd73622e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_53cdf847cdf25b11d646c09ca1cef62ecd5fc3b03afc8509ccc0b836dd73622e->leave($__internal_53cdf847cdf25b11d646c09ca1cef62ecd5fc3b03afc8509ccc0b836dd73622e_prof);

        
        $__internal_dd57b43287162954639eeed37a38dc4c2c0ab26a43b5b8c3231f78af144d1b6b->leave($__internal_dd57b43287162954639eeed37a38dc4c2c0ab26a43b5b8c3231f78af144d1b6b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
