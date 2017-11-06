<?php

/* EJLoveBundle:Default:layout.html.twig */
class __TwigTemplate_9014795f449f8dd1fe853e2c30baabfee5049fcb5c29361c53283272cc2d2c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "EJLoveBundle:Default:layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'll_body' => array($this, 'block_ll_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46771eb723f1935d6c8474afba8433945d93449c18c650458eca956993ac48b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46771eb723f1935d6c8474afba8433945d93449c18c650458eca956993ac48b0->enter($__internal_46771eb723f1935d6c8474afba8433945d93449c18c650458eca956993ac48b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_4491c1ebb0bc6542861c33557be9648e5c81d6e3f8a9d9ffcc0ec54e5b62a6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4491c1ebb0bc6542861c33557be9648e5c81d6e3f8a9d9ffcc0ec54e5b62a6fe->enter($__internal_4491c1ebb0bc6542861c33557be9648e5c81d6e3f8a9d9ffcc0ec54e5b62a6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46771eb723f1935d6c8474afba8433945d93449c18c650458eca956993ac48b0->leave($__internal_46771eb723f1935d6c8474afba8433945d93449c18c650458eca956993ac48b0_prof);

        
        $__internal_4491c1ebb0bc6542861c33557be9648e5c81d6e3f8a9d9ffcc0ec54e5b62a6fe->leave($__internal_4491c1ebb0bc6542861c33557be9648e5c81d6e3f8a9d9ffcc0ec54e5b62a6fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a07e9307911421b0e624b6758ad3fcc66bbfb9a0d7a5263e510c1740a74dc18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a07e9307911421b0e624b6758ad3fcc66bbfb9a0d7a5263e510c1740a74dc18->enter($__internal_3a07e9307911421b0e624b6758ad3fcc66bbfb9a0d7a5263e510c1740a74dc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b102f6e609cd9f3e6f9a2459315900734fbe89ee4652d608ec3495bebd28209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b102f6e609cd9f3e6f9a2459315900734fbe89ee4652d608ec3495bebd28209->enter($__internal_8b102f6e609cd9f3e6f9a2459315900734fbe89ee4652d608ec3495bebd28209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8b102f6e609cd9f3e6f9a2459315900734fbe89ee4652d608ec3495bebd28209->leave($__internal_8b102f6e609cd9f3e6f9a2459315900734fbe89ee4652d608ec3495bebd28209_prof);

        
        $__internal_3a07e9307911421b0e624b6758ad3fcc66bbfb9a0d7a5263e510c1740a74dc18->leave($__internal_3a07e9307911421b0e624b6758ad3fcc66bbfb9a0d7a5263e510c1740a74dc18_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c75f67f7b4e9d543332f771e333f9337a73eb6722e29e35c09ae8de04d13af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c75f67f7b4e9d543332f771e333f9337a73eb6722e29e35c09ae8de04d13af->enter($__internal_b2c75f67f7b4e9d543332f771e333f9337a73eb6722e29e35c09ae8de04d13af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a57d944268316d61d68eda324665a353772318fea042f22763a17c97cea1de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a57d944268316d61d68eda324665a353772318fea042f22763a17c97cea1de8->enter($__internal_1a57d944268316d61d68eda324665a353772318fea042f22763a17c97cea1de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_1a57d944268316d61d68eda324665a353772318fea042f22763a17c97cea1de8->leave($__internal_1a57d944268316d61d68eda324665a353772318fea042f22763a17c97cea1de8_prof);

        
        $__internal_b2c75f67f7b4e9d543332f771e333f9337a73eb6722e29e35c09ae8de04d13af->leave($__internal_b2c75f67f7b4e9d543332f771e333f9337a73eb6722e29e35c09ae8de04d13af_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_1aafb3d4726da7db0cbd0fb2b2b2d9354b2cff7ec0006b7c6b3d6d07a12169a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aafb3d4726da7db0cbd0fb2b2b2d9354b2cff7ec0006b7c6b3d6d07a12169a2->enter($__internal_1aafb3d4726da7db0cbd0fb2b2b2d9354b2cff7ec0006b7c6b3d6d07a12169a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_db29a0d840c20b2ea50b4d82555e384bde33f402bcf84cf18527ab32dd5121bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db29a0d840c20b2ea50b4d82555e384bde33f402bcf84cf18527ab32dd5121bd->enter($__internal_db29a0d840c20b2ea50b4d82555e384bde33f402bcf84cf18527ab32dd5121bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_db29a0d840c20b2ea50b4d82555e384bde33f402bcf84cf18527ab32dd5121bd->leave($__internal_db29a0d840c20b2ea50b4d82555e384bde33f402bcf84cf18527ab32dd5121bd_prof);

        
        $__internal_1aafb3d4726da7db0cbd0fb2b2b2d9354b2cff7ec0006b7c6b3d6d07a12169a2->leave($__internal_1aafb3d4726da7db0cbd0fb2b2b2d9354b2cff7ec0006b7c6b3d6d07a12169a2_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  90 => 12,  79 => 14,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Partie - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ll_body %}
    {% endblock %}

{% endblock %}", "EJLoveBundle:Default:layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/layout.html.twig");
    }
}
