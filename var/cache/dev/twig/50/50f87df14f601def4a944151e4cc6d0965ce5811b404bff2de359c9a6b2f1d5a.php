<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_49659a44992dc1813fc9f7de6dbc22911e8f0c8a4a1d5fda0b4b82b9877a5285 extends Twig_Template
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
        $__internal_f6de66bb6c314f344dc9566fc99a2b2f24c0d25b11c255657e6a7dba34d14ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6de66bb6c314f344dc9566fc99a2b2f24c0d25b11c255657e6a7dba34d14ce7->enter($__internal_f6de66bb6c314f344dc9566fc99a2b2f24c0d25b11c255657e6a7dba34d14ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2eae3b3eadd6c72e7f3729cb02906f4978db4ebca38529d8e2b6e057ae731779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eae3b3eadd6c72e7f3729cb02906f4978db4ebca38529d8e2b6e057ae731779->enter($__internal_2eae3b3eadd6c72e7f3729cb02906f4978db4ebca38529d8e2b6e057ae731779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f6de66bb6c314f344dc9566fc99a2b2f24c0d25b11c255657e6a7dba34d14ce7->leave($__internal_f6de66bb6c314f344dc9566fc99a2b2f24c0d25b11c255657e6a7dba34d14ce7_prof);

        
        $__internal_2eae3b3eadd6c72e7f3729cb02906f4978db4ebca38529d8e2b6e057ae731779->leave($__internal_2eae3b3eadd6c72e7f3729cb02906f4978db4ebca38529d8e2b6e057ae731779_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
