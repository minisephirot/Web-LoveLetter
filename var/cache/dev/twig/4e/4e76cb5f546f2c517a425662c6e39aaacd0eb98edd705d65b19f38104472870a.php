<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_c9c5253302aa2b866a4b7a422998a154074434122fcfcaf151ebdfd43c613907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_51c9d71fbbc5757f4d567031a996ae01299149634c0a2fd4360e5c767090400a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c9d71fbbc5757f4d567031a996ae01299149634c0a2fd4360e5c767090400a->enter($__internal_51c9d71fbbc5757f4d567031a996ae01299149634c0a2fd4360e5c767090400a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_d88ced17d6d170cf976d721b981c027538f8b5c8c89088e0e92e2c8f5b13d766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88ced17d6d170cf976d721b981c027538f8b5c8c89088e0e92e2c8f5b13d766->enter($__internal_d88ced17d6d170cf976d721b981c027538f8b5c8c89088e0e92e2c8f5b13d766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51c9d71fbbc5757f4d567031a996ae01299149634c0a2fd4360e5c767090400a->leave($__internal_51c9d71fbbc5757f4d567031a996ae01299149634c0a2fd4360e5c767090400a_prof);

        
        $__internal_d88ced17d6d170cf976d721b981c027538f8b5c8c89088e0e92e2c8f5b13d766->leave($__internal_d88ced17d6d170cf976d721b981c027538f8b5c8c89088e0e92e2c8f5b13d766_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49cb8da4d0f7c30df5750d782c746f6145251afdaccaf337806de3c48fc2e679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cb8da4d0f7c30df5750d782c746f6145251afdaccaf337806de3c48fc2e679->enter($__internal_49cb8da4d0f7c30df5750d782c746f6145251afdaccaf337806de3c48fc2e679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d72ceb0e9392230b338cc0f20e3ac08c84015d8cbc4eb74d5188dcd33c1b7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d72ceb0e9392230b338cc0f20e3ac08c84015d8cbc4eb74d5188dcd33c1b7b1->enter($__internal_5d72ceb0e9392230b338cc0f20e3ac08c84015d8cbc4eb74d5188dcd33c1b7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_5d72ceb0e9392230b338cc0f20e3ac08c84015d8cbc4eb74d5188dcd33c1b7b1->leave($__internal_5d72ceb0e9392230b338cc0f20e3ac08c84015d8cbc4eb74d5188dcd33c1b7b1_prof);

        
        $__internal_49cb8da4d0f7c30df5750d782c746f6145251afdaccaf337806de3c48fc2e679->leave($__internal_49cb8da4d0f7c30df5750d782c746f6145251afdaccaf337806de3c48fc2e679_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
