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
        $__internal_a2d083f09d14f122a075dccb278279bcc97b2f8d5014043ab309e178e306c6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d083f09d14f122a075dccb278279bcc97b2f8d5014043ab309e178e306c6ce->enter($__internal_a2d083f09d14f122a075dccb278279bcc97b2f8d5014043ab309e178e306c6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f973b2da84b231734ce3e7f100cb8907d515d1376698c3a726ea97dd65de8830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f973b2da84b231734ce3e7f100cb8907d515d1376698c3a726ea97dd65de8830->enter($__internal_f973b2da84b231734ce3e7f100cb8907d515d1376698c3a726ea97dd65de8830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a2d083f09d14f122a075dccb278279bcc97b2f8d5014043ab309e178e306c6ce->leave($__internal_a2d083f09d14f122a075dccb278279bcc97b2f8d5014043ab309e178e306c6ce_prof);

        
        $__internal_f973b2da84b231734ce3e7f100cb8907d515d1376698c3a726ea97dd65de8830->leave($__internal_f973b2da84b231734ce3e7f100cb8907d515d1376698c3a726ea97dd65de8830_prof);

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
