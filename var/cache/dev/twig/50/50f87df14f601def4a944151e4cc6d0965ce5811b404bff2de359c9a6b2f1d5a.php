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
        $__internal_a215ebe22d84e725f3dc61f65ae025c26114fba5078b448852e6348d94e902f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a215ebe22d84e725f3dc61f65ae025c26114fba5078b448852e6348d94e902f7->enter($__internal_a215ebe22d84e725f3dc61f65ae025c26114fba5078b448852e6348d94e902f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_fa5374c2eb0c8f2b7aabf34bbe882d0d3d8a37eb7edbca00fa8240f7a8975291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5374c2eb0c8f2b7aabf34bbe882d0d3d8a37eb7edbca00fa8240f7a8975291->enter($__internal_fa5374c2eb0c8f2b7aabf34bbe882d0d3d8a37eb7edbca00fa8240f7a8975291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a215ebe22d84e725f3dc61f65ae025c26114fba5078b448852e6348d94e902f7->leave($__internal_a215ebe22d84e725f3dc61f65ae025c26114fba5078b448852e6348d94e902f7_prof);

        
        $__internal_fa5374c2eb0c8f2b7aabf34bbe882d0d3d8a37eb7edbca00fa8240f7a8975291->leave($__internal_fa5374c2eb0c8f2b7aabf34bbe882d0d3d8a37eb7edbca00fa8240f7a8975291_prof);

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
