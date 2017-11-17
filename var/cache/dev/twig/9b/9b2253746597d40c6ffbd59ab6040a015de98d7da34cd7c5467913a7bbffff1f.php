<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c2cbd4a8cb76cd9e64923cb80bab16821a15c9c49dc732d01bb0f5c71f27d409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1086897ac8f3238171d9c468b197de4602a3cd0278ceb12d0fce9cd8e583d793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1086897ac8f3238171d9c468b197de4602a3cd0278ceb12d0fce9cd8e583d793->enter($__internal_1086897ac8f3238171d9c468b197de4602a3cd0278ceb12d0fce9cd8e583d793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_0cf564fba4887245208e5f31894d69520cb0914cc101fb3d0892e0b03dd46239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf564fba4887245208e5f31894d69520cb0914cc101fb3d0892e0b03dd46239->enter($__internal_0cf564fba4887245208e5f31894d69520cb0914cc101fb3d0892e0b03dd46239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1086897ac8f3238171d9c468b197de4602a3cd0278ceb12d0fce9cd8e583d793->leave($__internal_1086897ac8f3238171d9c468b197de4602a3cd0278ceb12d0fce9cd8e583d793_prof);

        
        $__internal_0cf564fba4887245208e5f31894d69520cb0914cc101fb3d0892e0b03dd46239->leave($__internal_0cf564fba4887245208e5f31894d69520cb0914cc101fb3d0892e0b03dd46239_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30c36bdd8cce53dfb95523a2417c8ac702bd418c181768c4e6122769208e5fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c36bdd8cce53dfb95523a2417c8ac702bd418c181768c4e6122769208e5fcd->enter($__internal_30c36bdd8cce53dfb95523a2417c8ac702bd418c181768c4e6122769208e5fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b76ac57f0188d0cd3c7137f2b4aa00e8e5eac17aa2cca1b6f4b84cdfdc1c5b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76ac57f0188d0cd3c7137f2b4aa00e8e5eac17aa2cca1b6f4b84cdfdc1c5b47->enter($__internal_b76ac57f0188d0cd3c7137f2b4aa00e8e5eac17aa2cca1b6f4b84cdfdc1c5b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b76ac57f0188d0cd3c7137f2b4aa00e8e5eac17aa2cca1b6f4b84cdfdc1c5b47->leave($__internal_b76ac57f0188d0cd3c7137f2b4aa00e8e5eac17aa2cca1b6f4b84cdfdc1c5b47_prof);

        
        $__internal_30c36bdd8cce53dfb95523a2417c8ac702bd418c181768c4e6122769208e5fcd->leave($__internal_30c36bdd8cce53dfb95523a2417c8ac702bd418c181768c4e6122769208e5fcd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
