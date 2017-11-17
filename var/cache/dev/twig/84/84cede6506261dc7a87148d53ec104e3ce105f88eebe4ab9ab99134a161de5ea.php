<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0011aed154c5bcef21eba1e80d0de76a887d68ef795d7fdd154caff4224d3f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a85b133d7e8191aab2f6f3582bec54f52c2c3de8580c8ff996427fabf8dbdf88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85b133d7e8191aab2f6f3582bec54f52c2c3de8580c8ff996427fabf8dbdf88->enter($__internal_a85b133d7e8191aab2f6f3582bec54f52c2c3de8580c8ff996427fabf8dbdf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_4bffc3a5bfc51a979aeef684ed36c91c733816f34a052940da12b6496fa3d9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bffc3a5bfc51a979aeef684ed36c91c733816f34a052940da12b6496fa3d9ea->enter($__internal_4bffc3a5bfc51a979aeef684ed36c91c733816f34a052940da12b6496fa3d9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a85b133d7e8191aab2f6f3582bec54f52c2c3de8580c8ff996427fabf8dbdf88->leave($__internal_a85b133d7e8191aab2f6f3582bec54f52c2c3de8580c8ff996427fabf8dbdf88_prof);

        
        $__internal_4bffc3a5bfc51a979aeef684ed36c91c733816f34a052940da12b6496fa3d9ea->leave($__internal_4bffc3a5bfc51a979aeef684ed36c91c733816f34a052940da12b6496fa3d9ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9dba9849f9ac1c350c46cb6bb75839981b66622783c4e9c289d5cad2281f770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9dba9849f9ac1c350c46cb6bb75839981b66622783c4e9c289d5cad2281f770->enter($__internal_e9dba9849f9ac1c350c46cb6bb75839981b66622783c4e9c289d5cad2281f770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_51170f31ae3230348e522c6c98ac58beb99ea1127ad20a32708527e738927e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51170f31ae3230348e522c6c98ac58beb99ea1127ad20a32708527e738927e3c->enter($__internal_51170f31ae3230348e522c6c98ac58beb99ea1127ad20a32708527e738927e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_51170f31ae3230348e522c6c98ac58beb99ea1127ad20a32708527e738927e3c->leave($__internal_51170f31ae3230348e522c6c98ac58beb99ea1127ad20a32708527e738927e3c_prof);

        
        $__internal_e9dba9849f9ac1c350c46cb6bb75839981b66622783c4e9c289d5cad2281f770->leave($__internal_e9dba9849f9ac1c350c46cb6bb75839981b66622783c4e9c289d5cad2281f770_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
