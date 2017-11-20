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
        $__internal_73dfbe8053cee76fd705948182c5f7d13a2eb4c693e673c938a6342d3abfa592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73dfbe8053cee76fd705948182c5f7d13a2eb4c693e673c938a6342d3abfa592->enter($__internal_73dfbe8053cee76fd705948182c5f7d13a2eb4c693e673c938a6342d3abfa592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2fff21cf9e252a362d79e8bc8a6da7b8e85a7422cc5ab2fa1af5ea3de0310cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fff21cf9e252a362d79e8bc8a6da7b8e85a7422cc5ab2fa1af5ea3de0310cd0->enter($__internal_2fff21cf9e252a362d79e8bc8a6da7b8e85a7422cc5ab2fa1af5ea3de0310cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_73dfbe8053cee76fd705948182c5f7d13a2eb4c693e673c938a6342d3abfa592->leave($__internal_73dfbe8053cee76fd705948182c5f7d13a2eb4c693e673c938a6342d3abfa592_prof);

        
        $__internal_2fff21cf9e252a362d79e8bc8a6da7b8e85a7422cc5ab2fa1af5ea3de0310cd0->leave($__internal_2fff21cf9e252a362d79e8bc8a6da7b8e85a7422cc5ab2fa1af5ea3de0310cd0_prof);

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
