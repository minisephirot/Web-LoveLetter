<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_cf319b09a19b4876a70d06b5f6326bf284d2c0a1d99c9c7ed829a7f03406fdb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_9fc8120a9b03a7e3a96ce1ebba01fad7012c890e2050cd284e0e5496a15a358f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc8120a9b03a7e3a96ce1ebba01fad7012c890e2050cd284e0e5496a15a358f->enter($__internal_9fc8120a9b03a7e3a96ce1ebba01fad7012c890e2050cd284e0e5496a15a358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_932a5f47a55065a2d67dc34d257582aed6ee3d2e026ffe2072f931573da06067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932a5f47a55065a2d67dc34d257582aed6ee3d2e026ffe2072f931573da06067->enter($__internal_932a5f47a55065a2d67dc34d257582aed6ee3d2e026ffe2072f931573da06067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fc8120a9b03a7e3a96ce1ebba01fad7012c890e2050cd284e0e5496a15a358f->leave($__internal_9fc8120a9b03a7e3a96ce1ebba01fad7012c890e2050cd284e0e5496a15a358f_prof);

        
        $__internal_932a5f47a55065a2d67dc34d257582aed6ee3d2e026ffe2072f931573da06067->leave($__internal_932a5f47a55065a2d67dc34d257582aed6ee3d2e026ffe2072f931573da06067_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4dce53f7f9780f25d7a6c0c559e94b8991a08713c35df8a584753e76b9570f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4dce53f7f9780f25d7a6c0c559e94b8991a08713c35df8a584753e76b9570f8->enter($__internal_f4dce53f7f9780f25d7a6c0c559e94b8991a08713c35df8a584753e76b9570f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c1608526c23dd13e633b9ba64abd536b31d2c508fb271202ba3422a14e102b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1608526c23dd13e633b9ba64abd536b31d2c508fb271202ba3422a14e102b56->enter($__internal_c1608526c23dd13e633b9ba64abd536b31d2c508fb271202ba3422a14e102b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_c1608526c23dd13e633b9ba64abd536b31d2c508fb271202ba3422a14e102b56->leave($__internal_c1608526c23dd13e633b9ba64abd536b31d2c508fb271202ba3422a14e102b56_prof);

        
        $__internal_f4dce53f7f9780f25d7a6c0c559e94b8991a08713c35df8a584753e76b9570f8->leave($__internal_f4dce53f7f9780f25d7a6c0c559e94b8991a08713c35df8a584753e76b9570f8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
