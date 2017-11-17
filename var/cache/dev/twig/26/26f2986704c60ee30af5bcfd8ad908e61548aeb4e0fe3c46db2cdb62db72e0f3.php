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
        $__internal_33af08ae79462f53c04d60849a2474c1e67f898037c9a4aaa58cb1ca15afcc38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33af08ae79462f53c04d60849a2474c1e67f898037c9a4aaa58cb1ca15afcc38->enter($__internal_33af08ae79462f53c04d60849a2474c1e67f898037c9a4aaa58cb1ca15afcc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_9f829b40be64490b7e1043ef1f9bdb4b6a25bac13f5ae78b8068629236a2cf54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f829b40be64490b7e1043ef1f9bdb4b6a25bac13f5ae78b8068629236a2cf54->enter($__internal_9f829b40be64490b7e1043ef1f9bdb4b6a25bac13f5ae78b8068629236a2cf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33af08ae79462f53c04d60849a2474c1e67f898037c9a4aaa58cb1ca15afcc38->leave($__internal_33af08ae79462f53c04d60849a2474c1e67f898037c9a4aaa58cb1ca15afcc38_prof);

        
        $__internal_9f829b40be64490b7e1043ef1f9bdb4b6a25bac13f5ae78b8068629236a2cf54->leave($__internal_9f829b40be64490b7e1043ef1f9bdb4b6a25bac13f5ae78b8068629236a2cf54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_477cc1523cae5d83363a00509cf37547645d386eb204939253915d4d1ec29b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477cc1523cae5d83363a00509cf37547645d386eb204939253915d4d1ec29b01->enter($__internal_477cc1523cae5d83363a00509cf37547645d386eb204939253915d4d1ec29b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b2f991fa92bd01a493c83e416b3cd0d06feedf6384ee0bc13c48697e314e35b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f991fa92bd01a493c83e416b3cd0d06feedf6384ee0bc13c48697e314e35b6->enter($__internal_b2f991fa92bd01a493c83e416b3cd0d06feedf6384ee0bc13c48697e314e35b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b2f991fa92bd01a493c83e416b3cd0d06feedf6384ee0bc13c48697e314e35b6->leave($__internal_b2f991fa92bd01a493c83e416b3cd0d06feedf6384ee0bc13c48697e314e35b6_prof);

        
        $__internal_477cc1523cae5d83363a00509cf37547645d386eb204939253915d4d1ec29b01->leave($__internal_477cc1523cae5d83363a00509cf37547645d386eb204939253915d4d1ec29b01_prof);

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
