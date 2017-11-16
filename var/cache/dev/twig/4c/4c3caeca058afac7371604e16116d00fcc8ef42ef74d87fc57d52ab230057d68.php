<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ef420eafb472f15d22d1143acb02be4d4851122f94a3c3ab7524c8ae1b61465e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5ddae54095f44f379f5d82c4bcb9d1e72f4e3d730dd7bde72758888f875133cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddae54095f44f379f5d82c4bcb9d1e72f4e3d730dd7bde72758888f875133cf->enter($__internal_5ddae54095f44f379f5d82c4bcb9d1e72f4e3d730dd7bde72758888f875133cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_c89bd838a9c7ba644bb6cf2dbd25299f4818383f4d9f9f0ac0521e5bfa90d48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89bd838a9c7ba644bb6cf2dbd25299f4818383f4d9f9f0ac0521e5bfa90d48a->enter($__internal_c89bd838a9c7ba644bb6cf2dbd25299f4818383f4d9f9f0ac0521e5bfa90d48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ddae54095f44f379f5d82c4bcb9d1e72f4e3d730dd7bde72758888f875133cf->leave($__internal_5ddae54095f44f379f5d82c4bcb9d1e72f4e3d730dd7bde72758888f875133cf_prof);

        
        $__internal_c89bd838a9c7ba644bb6cf2dbd25299f4818383f4d9f9f0ac0521e5bfa90d48a->leave($__internal_c89bd838a9c7ba644bb6cf2dbd25299f4818383f4d9f9f0ac0521e5bfa90d48a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d089643653174eedab464720bb985364c3374cc96afe2f8332c043113d2ca7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d089643653174eedab464720bb985364c3374cc96afe2f8332c043113d2ca7a->enter($__internal_2d089643653174eedab464720bb985364c3374cc96afe2f8332c043113d2ca7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_918e057ec8f32808e6c5e3257284064a34ffc102cdd7f5e48f1c4ec16ca9551c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918e057ec8f32808e6c5e3257284064a34ffc102cdd7f5e48f1c4ec16ca9551c->enter($__internal_918e057ec8f32808e6c5e3257284064a34ffc102cdd7f5e48f1c4ec16ca9551c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_918e057ec8f32808e6c5e3257284064a34ffc102cdd7f5e48f1c4ec16ca9551c->leave($__internal_918e057ec8f32808e6c5e3257284064a34ffc102cdd7f5e48f1c4ec16ca9551c_prof);

        
        $__internal_2d089643653174eedab464720bb985364c3374cc96afe2f8332c043113d2ca7a->leave($__internal_2d089643653174eedab464720bb985364c3374cc96afe2f8332c043113d2ca7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
