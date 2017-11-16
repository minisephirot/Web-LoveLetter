<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_49368bd641bc902ab9f7fdca31b32d504c6f8c8b0d6e0298648816972bbba32e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_4fd884f3f770e82a86e872897cedff78f62f2956589c35cf8f38e28c50b1a7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd884f3f770e82a86e872897cedff78f62f2956589c35cf8f38e28c50b1a7bb->enter($__internal_4fd884f3f770e82a86e872897cedff78f62f2956589c35cf8f38e28c50b1a7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_8bcada13070b402aaf0eb7d9d618459e21837fcd95df17c070baa0cdc2d66821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcada13070b402aaf0eb7d9d618459e21837fcd95df17c070baa0cdc2d66821->enter($__internal_8bcada13070b402aaf0eb7d9d618459e21837fcd95df17c070baa0cdc2d66821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd884f3f770e82a86e872897cedff78f62f2956589c35cf8f38e28c50b1a7bb->leave($__internal_4fd884f3f770e82a86e872897cedff78f62f2956589c35cf8f38e28c50b1a7bb_prof);

        
        $__internal_8bcada13070b402aaf0eb7d9d618459e21837fcd95df17c070baa0cdc2d66821->leave($__internal_8bcada13070b402aaf0eb7d9d618459e21837fcd95df17c070baa0cdc2d66821_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a0b4ca885345243968e765ee43e6358f8d450a29a0c5f89e4655dc8a53bee8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0b4ca885345243968e765ee43e6358f8d450a29a0c5f89e4655dc8a53bee8f->enter($__internal_5a0b4ca885345243968e765ee43e6358f8d450a29a0c5f89e4655dc8a53bee8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d5ef30e078c6148a068a6434fd0917e68f7d2231c371dd5fe0ed61109cf5aee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ef30e078c6148a068a6434fd0917e68f7d2231c371dd5fe0ed61109cf5aee3->enter($__internal_d5ef30e078c6148a068a6434fd0917e68f7d2231c371dd5fe0ed61109cf5aee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_d5ef30e078c6148a068a6434fd0917e68f7d2231c371dd5fe0ed61109cf5aee3->leave($__internal_d5ef30e078c6148a068a6434fd0917e68f7d2231c371dd5fe0ed61109cf5aee3_prof);

        
        $__internal_5a0b4ca885345243968e765ee43e6358f8d450a29a0c5f89e4655dc8a53bee8f->leave($__internal_5a0b4ca885345243968e765ee43e6358f8d450a29a0c5f89e4655dc8a53bee8f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
