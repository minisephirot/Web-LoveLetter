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
        $__internal_1389e36b505b69b8573f884fdee4f01afba1bfa2d77bb6db53828262c74607f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1389e36b505b69b8573f884fdee4f01afba1bfa2d77bb6db53828262c74607f9->enter($__internal_1389e36b505b69b8573f884fdee4f01afba1bfa2d77bb6db53828262c74607f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_700271b6883522666c8beb2ac1a0f4353080c5bbf8ea45c2234e066089d94da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700271b6883522666c8beb2ac1a0f4353080c5bbf8ea45c2234e066089d94da2->enter($__internal_700271b6883522666c8beb2ac1a0f4353080c5bbf8ea45c2234e066089d94da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1389e36b505b69b8573f884fdee4f01afba1bfa2d77bb6db53828262c74607f9->leave($__internal_1389e36b505b69b8573f884fdee4f01afba1bfa2d77bb6db53828262c74607f9_prof);

        
        $__internal_700271b6883522666c8beb2ac1a0f4353080c5bbf8ea45c2234e066089d94da2->leave($__internal_700271b6883522666c8beb2ac1a0f4353080c5bbf8ea45c2234e066089d94da2_prof);

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
