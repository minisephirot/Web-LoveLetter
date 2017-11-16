<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_ad51311dba7de01ff1016994907e9d67b54094208ecf30ba0dafd9967551801d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_f04f26164eff4db5aa1fd04e586efd8364d630122f738df7f49ec4aaf676f3fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04f26164eff4db5aa1fd04e586efd8364d630122f738df7f49ec4aaf676f3fd->enter($__internal_f04f26164eff4db5aa1fd04e586efd8364d630122f738df7f49ec4aaf676f3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_fd4ce30e8b7604521e39a050cf49aca4ef59f434c656d98feb920d9071cb340b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4ce30e8b7604521e39a050cf49aca4ef59f434c656d98feb920d9071cb340b->enter($__internal_fd4ce30e8b7604521e39a050cf49aca4ef59f434c656d98feb920d9071cb340b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f04f26164eff4db5aa1fd04e586efd8364d630122f738df7f49ec4aaf676f3fd->leave($__internal_f04f26164eff4db5aa1fd04e586efd8364d630122f738df7f49ec4aaf676f3fd_prof);

        
        $__internal_fd4ce30e8b7604521e39a050cf49aca4ef59f434c656d98feb920d9071cb340b->leave($__internal_fd4ce30e8b7604521e39a050cf49aca4ef59f434c656d98feb920d9071cb340b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_004718911cf2e0326d635b4f7afec6073c92491b746b3d5979c055fdfa75a378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004718911cf2e0326d635b4f7afec6073c92491b746b3d5979c055fdfa75a378->enter($__internal_004718911cf2e0326d635b4f7afec6073c92491b746b3d5979c055fdfa75a378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8405cd9d0ab022ee40eed19fe37d91c85a51e0471e549e3b8705d7ac89afab0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8405cd9d0ab022ee40eed19fe37d91c85a51e0471e549e3b8705d7ac89afab0d->enter($__internal_8405cd9d0ab022ee40eed19fe37d91c85a51e0471e549e3b8705d7ac89afab0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_8405cd9d0ab022ee40eed19fe37d91c85a51e0471e549e3b8705d7ac89afab0d->leave($__internal_8405cd9d0ab022ee40eed19fe37d91c85a51e0471e549e3b8705d7ac89afab0d_prof);

        
        $__internal_004718911cf2e0326d635b4f7afec6073c92491b746b3d5979c055fdfa75a378->leave($__internal_004718911cf2e0326d635b4f7afec6073c92491b746b3d5979c055fdfa75a378_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
