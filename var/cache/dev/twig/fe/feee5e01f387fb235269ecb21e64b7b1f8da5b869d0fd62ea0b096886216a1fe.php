<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_339d88962d441553f7b3027493240c9fdc70566b9bf71f6a7e7aff85cb326bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_a104aaaae768e1c9a3463b581ec3a2e43f71c3de4d41705815e6eba67ce997d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a104aaaae768e1c9a3463b581ec3a2e43f71c3de4d41705815e6eba67ce997d0->enter($__internal_a104aaaae768e1c9a3463b581ec3a2e43f71c3de4d41705815e6eba67ce997d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_adbcedf12dda16ac2a8aa7ad2090568625c440b3ceecf8394f9918835e05a21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbcedf12dda16ac2a8aa7ad2090568625c440b3ceecf8394f9918835e05a21c->enter($__internal_adbcedf12dda16ac2a8aa7ad2090568625c440b3ceecf8394f9918835e05a21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a104aaaae768e1c9a3463b581ec3a2e43f71c3de4d41705815e6eba67ce997d0->leave($__internal_a104aaaae768e1c9a3463b581ec3a2e43f71c3de4d41705815e6eba67ce997d0_prof);

        
        $__internal_adbcedf12dda16ac2a8aa7ad2090568625c440b3ceecf8394f9918835e05a21c->leave($__internal_adbcedf12dda16ac2a8aa7ad2090568625c440b3ceecf8394f9918835e05a21c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54bf77a2363735970b80a58b2384200430985e22326c4b8c7e5e262d4c4b1ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bf77a2363735970b80a58b2384200430985e22326c4b8c7e5e262d4c4b1ff1->enter($__internal_54bf77a2363735970b80a58b2384200430985e22326c4b8c7e5e262d4c4b1ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74f017396071ddc447c054f3ef61251effd6040e88060d8c976354a8992117e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f017396071ddc447c054f3ef61251effd6040e88060d8c976354a8992117e0->enter($__internal_74f017396071ddc447c054f3ef61251effd6040e88060d8c976354a8992117e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_74f017396071ddc447c054f3ef61251effd6040e88060d8c976354a8992117e0->leave($__internal_74f017396071ddc447c054f3ef61251effd6040e88060d8c976354a8992117e0_prof);

        
        $__internal_54bf77a2363735970b80a58b2384200430985e22326c4b8c7e5e262d4c4b1ff1->leave($__internal_54bf77a2363735970b80a58b2384200430985e22326c4b8c7e5e262d4c4b1ff1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
