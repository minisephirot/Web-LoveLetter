<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_00ed75d6b6ebafef0f33ae82425d6d77ba0bc6bcef7b2dfdd3a48bada0626ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34fe67604d8e7ca81b280a1002fd56e974b6a48d8f6dd6224a77a5c12ae6a38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34fe67604d8e7ca81b280a1002fd56e974b6a48d8f6dd6224a77a5c12ae6a38b->enter($__internal_34fe67604d8e7ca81b280a1002fd56e974b6a48d8f6dd6224a77a5c12ae6a38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c55e2a1353da482e1c5cf4e46d82b565d895048f1d2e09ee722799ee01a0fb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55e2a1353da482e1c5cf4e46d82b565d895048f1d2e09ee722799ee01a0fb8d->enter($__internal_c55e2a1353da482e1c5cf4e46d82b565d895048f1d2e09ee722799ee01a0fb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_34fe67604d8e7ca81b280a1002fd56e974b6a48d8f6dd6224a77a5c12ae6a38b->leave($__internal_34fe67604d8e7ca81b280a1002fd56e974b6a48d8f6dd6224a77a5c12ae6a38b_prof);

        
        $__internal_c55e2a1353da482e1c5cf4e46d82b565d895048f1d2e09ee722799ee01a0fb8d->leave($__internal_c55e2a1353da482e1c5cf4e46d82b565d895048f1d2e09ee722799ee01a0fb8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
